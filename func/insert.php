<?php






/* -------------------------------------------- */

$name = $_POST['name'];
$email = $_POST['email'];
$msisdn = $_POST['msisdn'];


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
	$success = 'Data Berhasil Disimpan';
    header('Location: /', $success);
} else {
    echo "Error: " . $sql2 . "<br>" . $conn2->error;
}

$conn2->close();


// $query = "SELECT * FROM indihome.leads";
// $results=mysql_query($query,$link);
// echo $results;
// while($row=mysql_fetch_row($results)){
//     $id=$row[0];
//     $name = $row[1];
//     $email = $row[2];
//     $msisdn = $row[3];


//     mysql_query("INSERT INTO $dBDBS.leads (name,email,msisdn) VALUES ('$name','$email','$msisdn')",$CONNECTW);

//     }
