<!--Header-->
<header>
	
			<div class="header_top" id="home">
				<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,.17);padding-top:20px;padding-bottom:20px">
					<button class="navbar-toggler navbar-toggler-right mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
						aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
				   </button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<center>
						<a class="navbar-brand" style="color:#FFD365;font-size: 2em;" href="index.php"> <i style="color:#FFF;font-weight:200">Desa</i>Salenrang</a>
					</center>	
						<ul class="navbar-nav ml-auto">
							<li class="nav-item">
								<a class="nav-link" href="index.php">Beranda
									<span class="sr-only">(current)</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="about.php">Tentang Desa</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="Virtual_Tour_Salenrang/index.html">Virtual Tour</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
								    aria-expanded="false">
									Kategori
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="#"></a>
									<?php getcategoriesmenu("blog_categories"); ?>
								</div>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="contact.php">Kontak</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="blogadmin/index.php">sign-in</a>
							</li>
						</ul>
						

					</div>
				</nav>
			</div>
	</header>
	<!--//header-->