<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="By Tony Cottengim">
	<meta name="author" content="Trinity's Edge">
	<link rel="icon" href="images/favicon.ico">

	<title>Gallery &bull; Bold 47 Photography</title>

	<?php include 'widgets/navbar.php'; ?>
	<div class="mainBody galleryPage">
		<div id="galleryMenu">
			<div id="filters" class="button-group hidden">
				<input checked="checked" type="radio" name="filters" id="filter6" value=".landscape" /><label for="filter6">Landscape</label>
				<input type="radio" name="filters" id="filter2" value=".portrait" /><label for="filter2">Portraits</label>
				<input type="radio" name="filters" id="filter3" value=".architecture" /><label for="filter3">Architecture</label>
				<input type="radio" name="filters" id="filter4" value=".macro" /><label for="filter4">Macro</label>
				<input type="radio" name="filters" id="filter5" value=".liquid" /><label for="filter5">Liquid</label>
				<input type="radio" name="filters" id="filter7" value=".nyc" /><label for="filter7">NYC</label>
				<input type="radio" name="filters" id="filter8" value=".event" /><label for="filter8">Event</label>
				<input type="radio" name="filters" id="filter1" value="*" /><label for="filter1">All</label>
			</div>
		</div>
		
		<div id="loadSpinner"><img src="images/giphy.gif" /></div>
		
		<!-- All the gallery images. All of them. -->
		<div id="galleryContainer">
			<div class="gallerySet hidden" id="galleryAll">
				<div class="item event"><a href="gallery/all/10l2.jpg" class="lightbox"><img src="gallery/all/10l2.jpg"></a></div>
				<div class="item landscape"><a href="gallery/all/11l2.jpg" class="lightbox"><img src="gallery/all/11l2.jpg"></a></div>
				<div class="item macro"><a href="gallery/all/12l2.jpg" class="lightbox"><img src="gallery/all/12l2.jpg"></a></div>
				<div class="item macro"><a href="gallery/all/13l2.jpg" class="lightbox"><img src="gallery/all/13l2.jpg"></a></div>
				<div class="item nyc"><a href="gallery/all/14l2.jpg" class="lightbox"><img src="gallery/all/14l2.jpg"></a></div>
				<div class="item portrait"><a href="gallery/all/15l2.jpg" class="lightbox"><img src="gallery/all/15l2.jpg"></a></div>
				<div class="item architecture"><a href="gallery/all/16l2.jpg" class="lightbox"><img src="gallery/all/16l2.jpg"></a></div>
				<div class="item event"><a href="gallery/all/17l2.jpg" class="lightbox"><img src="gallery/all/17l2.jpg"></a></div> 
				<div class="item landscape"><a href="gallery/all/18l2.jpg" class="lightbox"><img src="gallery/all/18l2.jpg"></a></div> 
				<div class="item liquid"><a href="gallery/all/19l2.jpg" class="lightbox"><img src="gallery/all/19l2.jpg"></a></div>
				<div class="item macro"><a href="gallery/all/1Al2.jpg" class="lightbox"><img src="gallery/all/1Al2.jpg"></a></div>
				<div class="item nyc"><a href="gallery/all/1Bl2.jpg" class="lightbox"><img src="gallery/all/1Bl2.jpg"></a></div>
				<div class="item portrait"><a href="gallery/all/1Cl2.jpg" class="lightbox"><img src="gallery/all/1Cl2.jpg"></a></div>
				<div class="item architecture"><a href="gallery/all/1Dl2.jpg" class="lightbox"><img src="gallery/all/1Dl2.jpg"></a></div>
				<div class="item event"><a href="gallery/all/1El2.jpg" class="lightbox"><img src="gallery/all/1El2.jpg"></a></div>
				<div class="item landscape"><a href="gallery/all/1Fl2.jpg" class="lightbox"><img src="gallery/all/1Fl2.jpg"></a></div>
				<div class="item liquid"><a href="gallery/all/Bl2.jpg" class="lightbox"><img src="gallery/all/Bl2.jpg"></a></div>
				<div class="item nyc architecture"><a href="gallery/all/1l2.jpg" class="lightbox"><img src="gallery/all/1l2.jpg"></a></div>
				<div class="item liquid"><a href="gallery/all/20l2.jpg" class="lightbox"><img src="gallery/all/20l2.jpg"></a></div>
				<div class="item architecture nyc"><a href="gallery/all/22l2.jpg" class="lightbox"><img src="gallery/all/22l2.jpg"></a></div>
				<div class="item portrait"><a href="gallery/all/23l2.jpg" class="lightbox"><img src="gallery/all/23l2.jpg"></a></div>
				<div class="item architecture"><a href="gallery/all/24l2.jpg" class="lightbox"><img src="gallery/all/24l2.jpg"></a></div>
				<div class="item event"><a href="gallery/all/25l2.jpg" class="lightbox"><img src="gallery/all/25l2.jpg"></a></div>
				<div class="item landscape"><a href="gallery/all/26l2.jpg" class="lightbox"><img src="gallery/all/26l2.jpg"></a></div>
					
				<div class="item liquid"><a href="gallery/all/4l2.jpg" class="lightbox"><img src="gallery/all/4l2.jpg"></a></div>
				<div class="item macro liquid"><a href="gallery/all/27l2.jpg" class="lightbox"><img src="gallery/all/27l2.jpg"></a></div>
				<div class="item macro"><a href="gallery/all/28l2.jpg" class="lightbox"><img src="gallery/all/28l2.jpg"></a></div>
				<div class="item nyc architecture"><a href="gallery/all/29l2.jpg" class="lightbox"><img src="gallery/all/29l2.jpg"></a></div>
				<div class="item portrait"><a href="gallery/all/2Al2.jpg" class="lightbox"><img src="gallery/all/2Al2.jpg"></a></div>
				<div class="item architecture"><a href="gallery/all/2Bl2.jpg" class="lightbox"><img src="gallery/all/2Bl2.jpg"></a></div>
				<div class="item landscape"><a href="gallery/all/2Cl2.jpg" class="lightbox"><img src="gallery/all/2Cl2.jpg"></a></div>
				<div class="item macro"><a href="gallery/all/2El2.jpg" class="lightbox"><img src="gallery/all/2El2.jpg"></a></div>
				<div class="item nyc architecture"><a href="gallery/all/2Fl2.jpg" class="lightbox"><img src="gallery/all/2Fl2.jpg"></a></div>
				<div class="item event portrait"><a href="gallery/all/2l2.jpg" class="lightbox"><img src="gallery/all/2l2.jpg"></a></div>
				<div class="item portrait"><a href="gallery/all/30l2.jpg" class="lightbox"><img src="gallery/all/30l2.jpg"></a></div>
				<div class="item architecture"><a href="gallery/all/31l2.jpg" class="lightbox"><img src="gallery/all/31l2.jpg"></a></div>
				<div class="item landscape"><a href="gallery/all/32l2.jpg" class="lightbox"><img src="gallery/all/32l2.jpg"></a></div>
				<div class="item macro"><a href="gallery/all/33l2.jpg" class="lightbox"><img src="gallery/all/33l2.jpg"></a></div>
				<div class="item portrait nyc"><a href="gallery/all/34l2.jpg" class="lightbox"><img src="gallery/all/34l2.jpg"></a></div>
				<div class="item portrait"><a href="gallery/all/35l2.jpg" class="lightbox"><img src="gallery/all/35l2.jpg"></a></div>
				<div class="item architecture"><a href="gallery/all/36l2.jpg" class="lightbox"><img src="gallery/all/36l2.jpg"></a></div>
				<div class="item landscape"><a href="gallery/all/37l2.jpg" class="lightbox"><img src="gallery/all/37l2.jpg"></a></div>
				<div class="item macro"><a href="gallery/all/38l2.jpg" class="lightbox"><img src="gallery/all/38l2.jpg"></a></div>
				<div class="item nyc"><a href="gallery/all/39l2.jpg" class="lightbox"><img src="gallery/all/39l2.jpg"></a></div>
				<div class="item portrait"><a href="gallery/all/3Al2.jpg" class="lightbox"><img src="gallery/all/3Al2.jpg"></a></div>
				<div class="item architecture nyc"><a href="gallery/all/3Bl2.jpg" class="lightbox"><img src="gallery/all/3Bl2.jpg"></a></div>
				<div class="item landscape"><a href="gallery/all/3Cl2.jpg" class="lightbox"><img src="gallery/all/3Cl2.jpg"></a></div>
				<div class="item macro"><a href="gallery/all/3Dl2.jpg" class="lightbox"><img src="gallery/all/3Dl2.jpg"></a></div>
				<div class="item nyc"><a href="gallery/all/3El2.jpg" class="lightbox"><img src="gallery/all/3El2.jpg"></a></div>
				<div class="item portrait"><a href="gallery/all/3Fl2.jpg" class="lightbox"><img src="gallery/all/3Fl2.jpg"></a></div>
				<div class="item landscape"><a href="gallery/all/3l2.jpg" class="lightbox"><img src="gallery/all/3l2.jpg"></a></div>
				<div class="item architecture"><a href="gallery/all/3l2.jpg" class="lightbox"><img src="gallery/all/3l2.jpg"></a></div>
				<div class="item landscape"><a href="gallery/all/41l2.jpg" class="lightbox"><img src="gallery/all/41l2.jpg"></a></div>
				<div class="item macro"><a href="gallery/all/42l2.jpg" class="lightbox"><img src="gallery/all/42l2.jpg"></a></div>
				<div class="item nyc"><a href="gallery/all/43l2.jpg" class="lightbox"><img src="gallery/all/43l2.jpg"></a></div>
				<div class="item portrait"><a href="gallery/all/44l2.jpg" class="lightbox"><img src="gallery/all/44l2.jpg"></a></div>
				<div class="item landscape"><a href="gallery/all/45l2.jpg" class="lightbox"><img src="gallery/all/45l2.jpg"></a></div>
				<div class="item architecture nyc"><a href="gallery/all/46l2.jpg" class="lightbox"><img src="gallery/all/46l2.jpg"></a></div>
				<div class="item portrait"><a href="gallery/all/47l2.jpg" class="lightbox"><img src="gallery/all/47l2.jpg"></a></div>
				<div class="item landscape"><a href="gallery/all/48l2.jpg" class="lightbox"><img src="gallery/all/48l2.jpg"></a></div>
				<div class="item architecture nyc"><a href="gallery/all/49l2.jpg" class="lightbox"><img src="gallery/all/49l2.jpg"></a></div>
				<div class="item portrait"><a href="gallery/all/4Al2.jpg" class="lightbox"><img src="gallery/all/4Al2.jpg"></a></div>
				<div class="item nyc"><a href="gallery/all/4Cl2.jpg" class="lightbox"><img src="gallery/all/4Cl2.jpg"></a></div>
				<div class="item portrait"><a href="gallery/all/4Dl2.jpg" class="lightbox"><img src="gallery/all/4Dl2.jpg"></a></div>
				<div class="item landscape"><a href="gallery/all/4El2.jpg" class="lightbox"><img src="gallery/all/4El2.jpg"></a></div>
				<div class="item nyc"><a href="gallery/all/4Fl2.jpg" class="lightbox"><img src="gallery/all/4Fl2.jpg"></a></div>
				<div class="item portrait"><a href="gallery/all/50l2.jpg" class="lightbox"><img src="gallery/all/50l2.jpg"></a></div>
				<div class="item landscape"><a href="gallery/all/51l2.jpg" class="lightbox"><img src="gallery/all/51l2.jpg"></a></div>
				<div class="item nyc"><a href="gallery/all/52l2.jpg" class="lightbox"><img src="gallery/all/52l2.jpg"></a></div>
				<div class="item portrait"><a href="gallery/all/53l2.jpg" class="lightbox"><img src="gallery/all/53l2.jpg"></a></div>
				<div class="item landscape"><a href="gallery/all/54l2.jpg" class="lightbox"><img src="gallery/all/54l2.jpg"></a></div>
				<div class="item landscape nyc"><a href="gallery/all/55l2.jpg" class="lightbox"><img src="gallery/all/55l2.jpg"></a></div>
				<div class="item portrait"><a href="gallery/all/56l2.jpg" class="lightbox"><img src="gallery/all/56l2.jpg"></a></div>
				<div class="item landscape"><a href="gallery/all/57l2.jpg" class="lightbox"><img src="gallery/all/57l2.jpg"></a></div>
				<div class="item architecture nyc"><a href="gallery/all/58l2.jpg" class="lightbox"><img src="gallery/all/58l2.jpg"></a></div>
				<div class="item portrait"><a href="gallery/all/59l2.jpg" class="lightbox"><img src="gallery/all/59l2.jpg"></a></div>
				<div class="item architecture nyc"><a href="gallery/all/5Al2.jpg" class="lightbox"><img src="gallery/all/5Al2.jpg"></a></div>
				<div class="item portrait"><a href="gallery/all/5Bl2.jpg" class="lightbox"><img src="gallery/all/5Bl2.jpg"></a></div>
				<div class="item portrait nyc"><a href="gallery/all/5Cl2.jpg" class="lightbox"><img src="gallery/all/5Cl2.jpg"></a></div>
				<div class="item portrait"><a href="gallery/all/5Dl2.jpg" class="lightbox"><img src="gallery/all/5Dl2.jpg"></a></div>
				<div class="item landscape nyc"><a href="gallery/all/5El2.jpg" class="lightbox"><img src="gallery/all/5El2.jpg"></a></div>
				<div class="item portrait"><a href="gallery/all/5Fl2.jpg" class="lightbox"><img src="gallery/all/5Fl2.jpg"></a></div>
				<div class="item macro liquid"><a href="gallery/all/5l2.jpg" class="lightbox"><img src="gallery/all/5l2.jpg"></a></div>
				<div class="item nyc"><a href="gallery/all/60l2.jpg" class="lightbox"><img src="gallery/all/60l2.jpg"></a></div>
				<div class="item nyc architecture"><a href="gallery/all/61l2.jpg" class="lightbox"><img src="gallery/all/61l2.jpg"></a></div>
				<div class="item nyc landscape"><a href="gallery/all/62l2.jpg" class="lightbox"><img src="gallery/all/62l2.jpg"></a></div>
				<div class="item nyc architecture"><a href="gallery/all/63l2.jpg" class="lightbox"><img src="gallery/all/63l2.jpg"></a></div>
				<div class="item landscape"><a href="gallery/all/64l2.jpg" class="lightbox"><img src="gallery/all/64l2.jpg"></a></div>
				<div class="item nyc"><a href="gallery/all/65l2.jpg" class="lightbox"><img src="gallery/all/65l2.jpg"></a></div>
				<div class="item nyc"><a href="gallery/all/66l2.jpg" class="lightbox"><img src="gallery/all/66l2.jpg"></a></div>
				<div class="item nyc"><a href="gallery/all/67l2.jpg" class="lightbox"><img src="gallery/all/67l2.jpg"></a></div>
				<div class="item nyc"><a href="gallery/all/68l2.jpg" class="lightbox"><img src="gallery/all/68l2.jpg"></a></div>
				<div class="item nyc"><a href="gallery/all/69l2.jpg" class="lightbox"><img src="gallery/all/69l2.jpg"></a></div>
				<div class="item nyc"><a href="gallery/all/6Al2.jpg" class="lightbox"><img src="gallery/all/6Al2.jpg"></a></div>
				<div class="item nyc"><a href="gallery/all/6Bl2.jpg" class="lightbox"><img src="gallery/all/6Bl2.jpg"></a></div>
				<div class="item architecture nyc"><a href="gallery/all/6Cl2.jpg" class="lightbox"><img src="gallery/all/6Cl2.jpg"></a></div>
				<div class="item nyc"><a href="gallery/all/6Dl2.jpg" class="lightbox"><img src="gallery/all/6Dl2.jpg"></a></div>
				<div class="item architecture nyc"><a href="gallery/all/6El2.jpg" class="lightbox"><img src="gallery/all/6El2.jpg"></a></div>
				<div class="item architecture nyc"><a href="gallery/all/6Fl2.jpg" class="lightbox"><img src="gallery/all/6Fl2.jpg"></a></div>
				<div class="item nyc"><a href="gallery/all/6l2.jpg" class="lightbox"><img src="gallery/all/6l2.jpg"></a></div>
				<div class="item nyc"><a href="gallery/all/70l2.jpg" class="lightbox"><img src="gallery/all/70l2.jpg"></a></div>
				<div class="item portrait"><a href="gallery/all/7l2.jpg" class="lightbox"><img src="gallery/all/7l2.jpg"></a></div>
				<div class="item landscape"><a href="gallery/all/8l2.jpg" class="lightbox"><img src="gallery/all/8l2.jpg"></a></div>
				<div class="item event"><a href="gallery/all/9l2.jpg" class="lightbox"><img src="gallery/all/9l2.jpg"></a></div>
				<div class="item landscape"><a href="gallery/all/Al2.jpg" class="lightbox"><img src="gallery/all/Al2.jpg"></a></div>
				<div class="item macro"><a href="gallery/all/Cl2.jpg" class="lightbox"><img src="gallery/all/Cl2.jpg"></a></div>
				<div class="item nyc"><a href="gallery/all/Dl2.jpg" class="lightbox"><img src="gallery/all/Dl2.jpg"></a></div>
				<div class="item portrait"><a href="gallery/all/El2.jpg" class="lightbox"><img src="gallery/all/El2.jpg"></a></div>
				<div class="item architecture"><a href="gallery/all/Fl2.jpg" class="lightbox"><img src="gallery/all/Fl2.jpg"></a></div>
			</div>
		</div>
	</div>
	<?php include'widgets/footer.php'; ?>