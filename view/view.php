<?php

function htmlNavbar($titrePage)
{
?>
	<!DOCTYPE html>
	<html lang="fr">

	<head>

		<title><?= $titrePage ?></title>


		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Blog Template">
		<meta name="author" content="Xiaoying Riley at 3rd Wave Media">

		<!-- FontAwesome JS-->
		<script defer src="https://use.fontawesome.com/releases/v5.7.1/js/all.js" integrity="sha384-eVEQC9zshBn0rFj4+TU78eNA19HMNigMviK/PU/FFjLXqa/GKPgX58rvt5Z8PLs7" crossorigin="anonymous"></script>

		<!-- Theme CSS -->
		<link id="theme-style" rel="stylesheet" href="assets/css/theme-1.css">

	</head>

	<body>

		<header class="header text-center">
			<h1 class="blog-name pt-lg-4 mb-0"><a href="indexAccueil.php">Mangakun Blogun</a></h1>

			<nav class="navbar navbar-expand-lg navbar-dark">

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div id="navigation" class="collapse navbar-collapse flex-column">
					<div class="profile-section pt-3 pt-lg-0">
						<img class="profile-image mb-3 mx-auto" src="assets/images/profile.png" alt="image">

						<div class="bio mb-3">Bonjour gentes mangakiens et mangakiennes et bienvenu sur le blog des Mangakun. Dôzo !
							<hr>
						</div>
						<!--//profile-section-->

						<ul class="navbar-nav flex-column text-left">
							<li class="nav-item active">
								<a class="nav-link" href="indexAccueil.php"><i class="fas fa-home fa-fw mr-2"></i>Blog Home <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="indexBlog-post.php?article=1"><i class="fas fa-bookmark fa-fw mr-2"></i>Blog Post</a>
							</li>
						</ul>


					</div>
			</nav>
		</header>
	<?php
}

function enteteBloglist()
{
	?>
		<div class="main-wrapper">
			<section class="cta-section theme-bg-light py-5">
				<div class="container text-center">
					<h2 class="heading">Blogun - Le shogun des blogs sur les mangas</h2>
					<div class="intro">Irasshaimase ! Faites vous plaisir, faites un tour et mettez-nous en favoris.</div>
					<form class="signup-form form-inline justify-content-center pt-3">
						<div class="form-group">
							<label class="sr-only" for="rechercheArticle">recherche</label>
							<input type="search" id="rechercheArticle" name="rechercheArticle1" class="form-control mr-md-1 semail" placeholder="Un manga ? Un article ?">
						</div>
						<button type="submit" class="btn btn-primary">Rechercher</button>
					</form>
				</div>
			</section>
			<section class="blog-list px-3 py-5 p-md-5">
				<div class="container">
				<?php
			}


			function articleBlogList($lNumArticle,$lAccroche,$lPhoto,$lDate)
			{				
				?>
					<div class="item mb-5">
						<div class="media">
							<img class="mr-3 img-fluid post-thumb d-none d-md-flex" src="assets/images/blog/<?=$lPhoto?>" alt="image">
							<div class="media-body">
								<h3 class="title mb-1"><a href="indexBlog-post.php?article=<?=$lNumArticle?>"><?=$lAccroche?></a></h3>
								<div class="meta mb-1"><span class="date"><?=$lDate?></span></a></span></div>
								<div class="intro"></div>
								<a class="more-link" href="indexBlog-post.php?article=<?=$lNumArticle?>">Read more &rarr;</a>
							</div>
							<!--//media-body-->
						</div>
						<!--//media-->
					</div>
				<?php
				}
			

			function article($lAccroche,$lDescription,$lPhoto,$lDate)
			{ ?>
			    
				<div class="main-wrapper">
	    
	    <article class="blog-post px-3 py-5 p-md-5">
		    <div class="container">
			    <header class="blog-post-header">
				    <h2 class="title mb-2"><?=$lAccroche?></h2>
				    <div class="meta mb-3"><span class="date"><?=$lDate?></span></div>
			    </header>
			    
			    <div class="blog-post-body">
				    <figure class="blog-banner">
				        <img class="img-fluid" src="assets/images/blog/<?=$lPhoto?>" alt="image">
				    </figure>
				    <p><?=$lDescription?></p>
  
			
			<?php 
			}

			function footerNavbarArticle($lNumArticle)
			{
				?>
					<nav class="blog-nav nav nav-justified my-5">
						<a class="nav-link-prev nav-item nav-link rounded-left" href="indexBlog-post.php?article=<?=$lNumArticle - 1 ?>">Previous<i class="arrow-prev fas fa-long-arrow-alt-left"></i></a>
						<a class="nav-link-next nav-item nav-link rounded" href="indexBlog-post.php?article=<?=$lNumArticle + 1 ?>">Next<i class="arrow-next fas fa-long-arrow-alt-right"></i></a>
					</nav>

			<?php 
			}

			function footerNavbarFirstArticle($lNumArticle)
			{
				?>
					<nav class="blog-nav nav nav-justified my-5">
					<a class="nav-link-next nav-item nav-link rounded" href="indexBlog-post.php?article=<?=$lNumArticle + 1 ?>">Next<i class="arrow-next fas fa-long-arrow-alt-right"></i></a>
					</nav>

			<?php 
			}
			

			function footerNavbarLastArticle($lNumArticle)
			{
				?>
					<nav class="blog-nav nav nav-justified my-5">
						<a class="nav-link-prev nav-item nav-link rounded-left" href="indexBlog-post.php?article=<?=$lNumArticle - 1 ?>">Previous<i class="arrow-prev fas fa-long-arrow-alt-left"></i></a>
					</nav>

			<?php 
			}
			
			function footerNavbarListe()
			{
				?>
					<nav class="blog-nav nav nav-justified my-5">
						<a class="nav-link-prev nav-item nav-link rounded-left" href="#">Previous<i class="arrow-prev fas fa-long-arrow-alt-left"></i></a>
						<a class="nav-link-next nav-item nav-link rounded" href="indexBlog-post.php">Next<i class="arrow-next fas fa-long-arrow-alt-right"></i></a>
					</nav>
				
			<?php 
			}
			
			function ScriptJS()
			{
			?>
				</div>
			</section>
		</div>

		<!-- Javascript -->
		<script src="assets/plugins/jquery-3.3.1.min.js"></script>
		<script src="assets/plugins/popper.min.js"></script>
		<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

		<!-- Style Switcher (REMOVE ON YOUR PRODUCTION SITE) -->
		<script src="assets/js/demo/style-switcher.js"></script>


	</body>

	</html>
<?php
			}
?>