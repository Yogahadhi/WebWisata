<?php require("libs/fetch_data.php");?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title><?php getwebname("titles"); echo"|"; gettagline("titles");?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<link id="browser_favicon" rel="shortcut icon" href="blogadmin/images/<?php geticon("titles"); ?>">
	<meta charset="utf-8" name="description" content="<?php getshortdescription("titles");?>">
	<meta name="keywords" content="<?php getkeywords("titles");?>" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="css/jquery.desoslide.css">
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
	rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
</head>

<body>
	<?php include("header.php");?>
	<?php include("banner.php");?>
		
	<section class="bottom-slider site-section section-services gray-bg text-center">
	<div class="container" style="margin-top:50px;margin-bottom:50px;">

		
	<h3 class="tittle">Keunggulan Desa kami</h3>
		
					<br><br>
                <div class="row">
                    <div class="col-md-3 col-xs-6">
                        <div class="service">
                            <img src="images/anchor.png" alt="">
                            <h4 class="service-title">Keindahan Alam</h4>
                            <p class="service-info"> </p>
                        </div><!-- /.service -->
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <div class="service">
                            <img src="images/bycicle.png" alt="">
                            <h4 class="service-title">Wisata Unik</h4>
                            <p class="service-info"> </p>
                        </div><!-- /.service -->
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <div class="service">
                            <img src="images//paper-plane.png" alt="">
                            <h4 class="service-title">Produk Desa</h4>
                            <p class="service-info"></p>
                        </div><!-- /.service -->
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <div class="service">
                            <img src="images/photo.png" alt="">
                            <h4 class="service-title">Penginapan</h>
                            <p class="service-info"></p>
                        </div><!-- /.service -->
                    </div>
                </div>
            </div>
	</section>

	<section class="main-content-w3layouts-agileits">
		<center>
		<div class="container">
		<h3 class="tittle">Virtual Tour Desa</h3>
		<br>
		<br>
		<br>
		<br>
				<div>
					<a href="Virtual_Tour_Salenrang/index.html">
				<img src="images/360.png" alt="" style="width:350px;height:350px;"></a>
				</div>
		</div>
		</center>
	</section>
	
	<!--/main-->
	<section class="main-content-w3layouts-agileits">
		<center>
		<div class="container">
		<h3 class="tittle">Wisata yang sedang populer</h3>
		<br>
		<br>
		<form action="search.php" method="post" name="form" >
						<div class="card-body">
                            <div class="input-group">
                                <input class="form-control" type="search" placeholder="Cari di sini..." required="yes" type="text" name="search[keyword]" style="background-color:#fff;" />
                                <button class="btn btn-success" type="submit" name="submit">Search</button>
                            </div>
                        </div>
					</form>
				<div>
					<!--grid blogs below-->
					<div class="blog-girds-sec">
						<div class="row">
						<?php geteditorschoice("editors_choice");?>
							<!--bloggrids-->
						</div>
					</div>
				</div>
		</div>
		</center>
	</section>
					<!--//main-->
					<!--/middle-->
		
					<!--//middle-->
					<!---->
					
					<!--//main-->
					<?php include("footer.php");?>
					<!---->
					<!-- js -->
					<script src="js/jquery-2.2.3.min.js"></script>
					<!-- //js -->
					<!-- desoslide-JavaScript -->
					<script src="js/jquery.desoslide.js"></script>
					<script>
						$('#demo1_thumbs').desoSlide({
							main: {
								container: '#demo1_main_image',
								cssClass: 'img-responsive'
							},
							effect: 'sideFade',
							caption: true
						});
					</script>

					<!-- requried-jsfiles-for owl -->
					<script>
						$(window).load(function () {
							$("#flexiselDemo1").flexisel({
								visibleItems: 3,
								animationSpeed: 1000,
								autoPlay: true,
								autoPlaySpeed: 3000,
								pauseOnHover: true,
								enableResponsiveBreakpoints: true,
								responsiveBreakpoints: {
									portrait: {
										changePoint: 480,
										visibleItems: 1
									},
									landscape: {
										changePoint: 640,
										visibleItems: 2
									},
									tablet: {
										changePoint: 768,
										visibleItems: 3
									}
								}
							});

						});
					</script>
					<script>
						$(window).load(function () {
							$("#flexiselDemo2").flexisel({
								visibleItems: 3,
								animationSpeed: 1000,
								autoPlay: true,
								autoPlaySpeed: 3000,
								pauseOnHover: true,
								enableResponsiveBreakpoints: true,
								responsiveBreakpoints: {
									portrait: {
										changePoint: 480,
										visibleItems: 1
									},
									landscape: {
										changePoint: 640,
										visibleItems: 2
									},
									tablet: {
										changePoint: 768,
										visibleItems: 3
									}
								}
							});

						});
					</script>
					<script src="js/jquery.flexisel.js"></script>
					<!-- //password-script -->
					<!--/ start-smoth-scrolling -->
					<script src="js/move-top.js"></script>
					<script src="js/easing.js"></script>
					<script>
						jQuery(document).ready(function ($) {
							$(".scroll").click(function (event) {
								event.preventDefault();
								$('html,body').animate({
									scrollTop: $(this.hash).offset().top
								}, 900);
							});
						});
					</script>
					<!--// end-smoth-scrolling -->

					<script>
						$(document).ready(function () {
							
							var defaults = {
							  			containerID: 'toTop', // fading element id
										containerHoverID: 'toTopHover', // fading element hover id
										scrollSpeed: 1200,
										easingType: 'linear' 
									};
									

									$().UItoTop({
										easingType: 'easeOutQuart'
									});

								});
							</script>
							<a href="#home" class="scroll" id="toTop" style="display: block;">
								<span id="toTopHover" style="opacity: 1;"> </span>
							</a>

							<!-- //Custom-JavaScript-File-Links -->
							<script src="js/bootstrap.js"></script>


						</body>

						</html>