<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="By Tony Cottengim">
	<meta name="author" content="Trinity's Edge">
	<link rel="icon" href="images/favicon.ico">

	<title>Bold 47 Photography</title>

<?php include 'widgets/navbar.php'; ?>
<div class="main">
	<div id="carousel" class="carousel slide embed-responsive" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carousel" data-slide-to="0" class="active"></li>
			<li data-target="#carousel" data-slide-to="1" class=""></li>
			<li data-target="#carousel" data-slide-to="2" class=""></li>
			<li data-target="#carousel" data-slide-to="3" class=""></li>
			<li data-target="#carousel" data-slide-to="4" class=""></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img src="gallery/all/2Dl2.jpg" class="carouselImage">
			</div>

			<div class="item">
				<img src="gallery/all/Fl2.jpg" class="carouselImage">
			</div>

			<div class="item">
				<img src="gallery/all/51l2.jpg" class="carouselImage">
			</div>

			<div class="item">
				<img src="gallery/all/57l2.jpg" class="carouselImage">
			</div>

			<div class="item">
				<img src="gallery/all/11l2.jpg" class="carouselImage">
			</div>
		</div>
		<!-- Controls -->
		<a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#carousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<!-- /Carousel -->
</div>

	<?php include'widgets/footer.php'; ?>