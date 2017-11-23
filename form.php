<!doctype html>
<html>
<head>
	<!--Meta-->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Description">
	<meta name="keywords" content="Keyword">
	<meta name="author" content="Author">

	<!--Stylesheet-->
    <link rel="icon" href="#" type="image/gif" sizes="16x16">
	<link href="css/base.css" rel="stylesheet" type="text/css" media="all">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all">

	<title>Metranet - IndiHome</title>
</head>

<body>
	<main>
		<div class="video-wrap">
			<div class="contrainer">
				<iframe src="https://indihome.co.id/subsystem/outlet-digital-channel/subscribe?name=undefined&msisdn=undefined&email=undefined" height="150" width="150" frameBorder="0" scrolling="no"></iframe>
			</div>
		</div>	
	</main>

	<footer>
		<div class="container">
			<div class="">
				<div class="row">
					<div class="col-sm-7">
						<div class="row">
							<div class="col-sm-6">
								<p><img src="images/New-Providence-by-Cr.png" class="img-responsive" alt=""></p>
							</div>
							<div class="col-sm-6">
								<h3>Dapatkan Aplikasi My IndiHome</h3>
								<p>Nikmati akses IndiHome dalam genggaman Anda, download melalui</p>
								<div class="row">
									<div class="col-xs-6">
										<p><a href="https://play.google.com/store/apps/details?id=com.telkom.indihome.external" title=""><img src="images/badge-google-play.png" class="img-responsive" alt=""></a></p>
									</div>
									<div class="col-xs-6">
										<p><a href="https://itunes.apple.com/id/app/my-indihome-2.0/id1119407221?mt=8" title=""><img src="images/appstore-badge-01.png" class="img-responsive" alt=""></a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-5">
						<p>
							<strong>PT Metra-Net</strong><br>
							Mulia Business Park <br>
							Building J, Jln. MT Haryono Kav 58-60 <br>
							Pancoran, Mampang Prapatan <br>
							Jakarta Selatan 12780 DKI Jakarta
						</p>
						<p>
							<strong>Hubungi Kami</strong><br>
							<span class="footer-ico"><i class="fa fa-phone"></i></span> +62 21 791 87250<br>
							<span class="footer-ico"><i class="fa fa-fax"></i></span> +62 21 791 87252<br>
							<span class="footer-ico"><i class="fa fa-envelope"></i></span> support@metranet.co.id<br>
						</p>
						<p><strong>Lebih dekat dengan kami</strong></p>
						<ul>
							<li><a href="#" title=""><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" title=""><i class="fa fa-instagram"></i></a></li>
							<li><a href="#" title=""><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" title=""><i class="fa fa-linkedin"></i></a></li>
							<li><a href="#" title=""><i class="fa fa-youtube-play"></i></a></li>
							<li><a href="#" title=""><i class="fa fa-google-plus"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<hr>
			<div id="copyright">
				<p class="text-center">&copy; 2017 PT. Metranet. All right reserved.</p>
			</div>
		</div>
	</footer>
	<!-- Google Code for IndiHome Conversion Conversion Page -->
	<script type="text/javascript">
	/* <![CDATA[ */
	var google_conversion_id = 842107730;
	var google_conversion_language = "en";
	var google_conversion_format = "3";
	var google_conversion_color = "ffffff";
	var google_conversion_label = "-fpfCKyO5HMQ0pbGkQM";
	var google_remarketing_only = false;
	/* ]]> */
	</script>
	<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
	</script>
	<noscript>
	<div style="display:inline;">
		<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/842107730/?label=-fpfCKyO5HMQ0pbGkQM&amp;guid=ON&amp;script=0"/>
	</div>
	</noscript>

	<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/index.js"></script>
	<script type="text/javascript">
		$('body').scrollspy({target: ".navbar", offset: 50});
		$("a.onpage-link").on('click', function(event) {
		  if (this.hash !== "") {
		    event.preventDefault();
		    var hash = this.hash;
		    $('html, body').animate({
		      scrollTop: $(hash).offset().top
		    }, 800, function(){
		      window.location.hash = hash;
		    });
		  }
		});
		function insert(){
		  var name = leads_form.name.value;
		  var email = leads_form.email.value;
		  var msisdn = leads_form.msisdn.value;
		  $.ajax({
		    url: 'func/insert-curl.php',
		    type: 'POST',
		    dataType: 'json',
		    data: {
		      name: name,
		      msisdn: msisdn,
		      email: email
		    },
		  });
		}

		$( document ).ready(function() {
			var url = window.location.href;
			var arguments = url.split('#')[1].split('=');
			var params = arguments.shift();

			if(params == 'form-leads') {
				$('#myModal').modal('show');
			}
		});

	</script>
</body>
</html>