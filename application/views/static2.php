
<!DOCTYPE HTML>
<html>
<head>
<title>Lapak Iwak</title>
<!--css-->
<link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
<link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url();?>assets/css/font-awesome.css" rel="stylesheet">
<!--css-->
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/jquery-ui.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,800italic,800,700italic,700,600italic,600,400italic,300italic,300' rel='stylesheet' type='text/css'>
<!--search jQuery-->
	<script src="<?php echo base_url();?>assets/js/main.js"></script>
<!--search jQuery-->
<script src="<?php echo base_url();?>assets/js/responsiveslides.min.js"></script>
 <script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
 </script>
 <!--mycart-->
<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap-3.1.1.min.js"></script>
 <!-- cart -->
<script src="<?php echo base_url();?>assets/js/simpleCart.min.js"></script>
<!-- cart -->
<!-- cart -->
 <script defer src="<?php echo base_url();?>assets/js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/flexslider.css" type="text/css" media="screen" />
<script src="<?php echo base_url()?>assets/js/imagezoom.js"></script>
<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>
  <!--start-rate-->
<script src="<?php echo base_url();?>assets/js/jstarbox.js"></script>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
		<script type="text/javascript">
			jQuery(function() {
			jQuery('.starbox').each(function() {
				var starbox = jQuery(this);
					starbox.starbox({
					average: starbox.attr('data-start-value'),
					changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
					ghosting: starbox.hasClass('ghosting'),
					autoUpdateAverage: starbox.hasClass('autoupdate'),
					buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
					stars: starbox.attr('data-star-count') || 5
					}).bind('starbox-value-changed', function(event, value) {
					if(starbox.hasClass('random')) {
					var val = Math.random();
					starbox.next().text(' '+val);
					return val;
					} 
				})
			});
		});
		</script>
<!--//End-rate-->
</head>
<!-- STATIC PAGE HEADER -->
<body>
	<!--header-->
		<div class="header">
			<div class="header-top">
				<div class="container">
					 <div class="top-left">
				
					</div>
					<div class="top-right">
					<ul>
						
						<li><a >Edisud Bambang</a></li>
						<li><a href="<?php echo base_url();?>index.php/Home">Logout</a></li>
					</ul>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="heder-bottom">
				<div class="container">
					<div class="logo-nav">
						<div class="logo-nav-left">
							<h1><a href="index.html"><img src="<?php echo base_url();?>assets/images/logolapakiwak.png" height="50px" width="50px"></a></h1>
						</div>
						<div class="logo-nav-left1">
							<nav class="navbar navbar-default">
							<!-- Brand and toggle gcet grouped for better mobile display -->
							<div class="navbar-header nav_2">
								<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div> 
							<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
								<ul class="nav navbar-nav">
									<li class="active"><a href="<?php echo base_url();?>index.php/home2" class="act">Home</a></li>	
									<li class="active"><a href="<?php echo base_url();?>index.php/ikan" class="act">Produk Olahan</a></li>
									<li class="active"><a href="<?php echo base_url();?>index.php/alat" class="act">Alat Teknologi</a></li>
									<li class="active"><a href="<?php echo base_url();?>index.php/seminar" class="act">Seminar</a></li>
								</ul>
							</div>
							</nav>
						</div>
						<div class="logo-nav-right">
							<ul class="cd-header-buttons">
								<li><a class="cd-notif-trigger"href="#cd-search"> <span></span> <img src="<?php echo base_url();?>assets/images/notif.png" align="left"></a> </a></li>
							</ul> <!-- cd-header-buttons -->
						</div>

						<div class="header-right2">
							<div class="cart box_1">
								<a href="<?php echo base_url();?>index.php/checkout">
									<h3> <div class="total">
										<span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</div>
										<img src="<?php echo base_url();?>assets/images/bag.png" alt="" />
									</h3>
								</a>
								<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
								<div class="clearfix"> </div>
							</div>	
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
		</div>
		<!--header-->
		<!--banner-->
	<!-- 	STATIC PAGE HEADER -->
	  <?php echo $contents; ?>
	
<!-- FOOTER -->
<!-- STATIC PAGE -->
					<div class="footer-w3l">
						<div class="container">
							<div class="footer-grids">
								<div class="col-md-4 footer-grid">
									<h4>About </h4>
									<p>LapakIwak.com merupakan website yang memadukan e-commerce sebagai wadah jual-beli online produk hasil olahan ikan maupun teknologi olahannya beserta edukasi tentang swasembada pangan perikanan.</p>
									<div class="social-icon">
										<a href="#"><i class="icon"></i></a>
										<a href="#"><i class="icon1"></i></a>
										<a href="#"><i class="icon2"></i></a>
										<a href="#"><i class="icon3"></i></a>
									</div>
								</div>
				
								<div class="col-md-4 footer-grid foot">
									<h4>Contact</h4>
									<ul>
										<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i><a href="#">DTETI UGM</a></li>
										<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i><a href="#">0812-3456-7890</a></li>
										<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:example@mail.com"> lapakiwak@mail.com</a></li>
										
									</ul>
								</div>
								<div class="col-md-4 footer-grid foot">
									<h4>Payment</h4>
									
								<img src="<?php echo base_url();?>assets/images/card.png" alt=""/>
							
								</div>
							<div class="clearfix"> </div>
							</div>
							
						</div>
					</div>


					<div class="copy-section">
						<div class="container">
							<div class="copy-left">
								<p>&copy; 2018 Lapak Iwak . All rights reserved</a></p>
							</div>
							
							<div class="clearfix"></div>
						</div>
					</div>
<!-- 	STATIC PAGE -->
<!-- FOOTER -->
				
					

</body>
</html>