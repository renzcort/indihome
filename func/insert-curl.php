<?php
function insertCurl() {
	//turn off php default error reporting
	error_reporting(0);
	ini_set('display_errors', 0);

	//extract data and sanitize it from the post
	$name = strip_tags(trim($_POST['name']));
	$email = strip_tags(trim($_POST['email']));
	$msisdn = strip_tags(trim($_POST['msisdn']));

	//set POST variables
	$url = 'http://indihome.co.id/myiapi/api/metraprospect';
	$fields = array(
		'name' => $name,
		'email' => $email,
		'msisdn' => $msisdn,
	);
	// var_dump($fields);

	/*//open connection
	$ch = curl_init();

	//set the url, number of POST vars, POST data
	curl_setopt($ch,CURLOPT_URL, $url);
	curl_setopt($ch,CURLOPT_POST, count($fields));
	curl_setopt($ch,CURLOPT_POSTFIELDS, $fields);

	// //set options
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Host: indihome.co.id'));
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
	curl_setopt($ch, CURLOPT_USERAGENT,
	"Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);

	//execute post
	$result = curl_exec($ch);
	var_dump($result);
	//close connection
	curl_close($ch);*/

	// $host = '128.199.163.78';
	// $user = 'indihome_db';
	// $pass = 'KPuzMEOB7N';
	// $dbname = 'indihome_db';
	// $connect = mysql_connect($host, $user, $pass) or die(mysql_error());
	// $dbselect = mysql_select_db($dbname);
	// include 'insert.php';

	$curl = curl_init();

	curl_setopt_array($curl, array(
		CURLOPT_URL => "https://indihome.co.id/myiapi/api/metraprospect",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 30,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "POST",
		CURLOPT_POSTFIELDS => "------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"name\"\r\n\r\n" . $fields['name'] . "\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"email\"\r\n\r\n" . $fields['email'] . "\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"msisdn\"\r\n\r\n" . $fields['msisdn'] . "\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW--",
		CURLOPT_HTTPHEADER => array(
			"cache-control: no-cache",
			"content-type: multipart/form-data; boundary=----WebKitFormBoundary7MA4YWxkTrZu0gW",
			"postman-token: 60478527-e514-a03e-d750-d0b67094079f",
		),
	));

	$response = curl_exec($curl);
	$err = curl_error($curl);

	curl_close($curl);

	if ($err) {
		echo "cURL Error #:" . htmlspecialchars($err, ENT_QUOTES, 'UTF-8');
	} else {
		echo htmlspecialchars($response, ENT_QUOTES, 'UTF-8');
	}

	curl_close($curl);
	insertDB($fields);
	// include 'insert.php';
}

function insertDB($fields) {

	$name 	=	$fields['name'];
	$email	=	$fields['email'];
	$msisdn	=	$fields['msisdn'];

	$servername2 = "128.199.163.78";

	$username2 = "indihome_db";          //Ganti dengan username
	$password2 = "KPuzMEOB7N";       //Ganti dengan password
	$dbname2 = "indihome_db";            //Ganti dengan nama Database

	// Create connection
	$conn2 = new mysqli($servername2, $username2, $password2, $dbname2);
	// Check connection
	if ($conn2->connect_error) {
	    die("Connection failed: " . $conn2->connect_error);
	}
	$sql2 = "INSERT INTO leads (name, email, msisdn)	VALUES ('$name', '$email', '$msisdn')";

	if ($conn2->query($sql2) === TRUE) {
		$success = 1;
	    header('Location:  https://indihome.co.id/subsystem/outlet-digital-channel/subscribe?name='.$name.'&msisdn='.$msisdn.'&email='.$email);
	} else {
	    echo "Error: " . $sql2 . "<br>" . $conn2->error;
	}

	$conn2->close();
}

insertCurl();
?>
