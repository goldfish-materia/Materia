<?php include('includes/header_inc.php');?>
<?php 
$options = array(
	"title" => "Materia Galleri"
);
insertHead($options);?>

<section>
	<h1>Galleri</h1>
<!-- kode til slider fra http://thedesignhill.com/wp-content/uploads/2014/01/creating-a-slick-auto-playing-featured-content-slider1 -->
    <div class="slider-wrap">
	<div id="main-photo-slider" class="csw">
		<div class="panelContainer">

			<div class="panel" title="Panel 1">
				<div class="wrapper">
					<!-- REGULAR IMAGE PANEL -->
					<img src="images/tempphoto-1.jpg" alt="temp" />
					<div class="photo-meta-data">
						Photo Credit: <a href="http://flickr.com/photos/astrolondon/2396265240/">Kaustav Bhattacharya</a><br />
						<span>"Free Tibet" Protest at the Olympic Torch Rally</span>
					</div>
				</div>
			</div>
			<div class="panel" title="Panel 2">
				<div class="wrapper">
					<!-- PANEL CONTENT -->
				</div>
			</div>		
			<div class="panel" title="Panel 3">
				<div class="wrapper">
					<!-- EXAMPLE OF OTHER PANEL POSSIBILITIES -->
					<img src="images/scotch-egg.jpg" alt="scotch egg" class="floatLeft"/>
			
					<h1>How to Cook a Scotch Egg</h1>
			
					<ul>
						<li>6 hard-boiled eggs, well chilled (i try to cook them to just past soft boiled stage, then stick them in the coldest part of the fridge to firm up)</li>
						<li>1 pound good quality sausage meat (i used ground turkey meat, seasoned with sage, white pepper, salt and a tiny bit of maple syrup)</li>
						<li>1/2 cup AP flour</li>
						<li>1-2 eggs, beaten</li>
						<li>3/4 cup panko-style bread crumbs</li>
						<li>Vegetable oil for frying</li>
					</ul>
				</div>
			</div>
			<div class="panel" title="Panel 4">
				<div class="wrapper">
					<!-- PANEL CONTENT -->
				</div>
			</div>
			<div class="panel" title="Panel 5">
				<div class="wrapper">
					<!-- PANEL CONTENT -->
				</div>
			</div>
			<div class="panel" title="Panel 6">
				<div class="wrapper">
					<!-- PANEL CONTENT -->
				</div>
			</div>

		</div>
	</div>

	<!-- TO MAKE THESE THUMBNAILS ACTUALLY WORK, BOTH THE HASH VALUE (#1, ETC.)
          AND THE CLASS="CROSS-LINK" ARE REQUIRED -->

	<a href="#1" class="cross-link active-thumb"><img src="images/tempphoto-1thumb.jpg" class="nav-thumb" alt="temp-thumb" /></a>
	<div id="movers-row">
		<div><a href="#2" class="cross-link"><img src="galleri/galleri_11.jpg" class="nav-thumb" alt="temp-thumb" /></a></div>
		<div><a href="#3" class="cross-link"><img src="galleri/galleri_07.jpg" class="nav-thumb" alt="temp-thumb" /></a></div>
		<div><a href="#4" class="cross-link"><img src="galleri/galleri_13.jpg" class="nav-thumb" alt="temp-thumb" /></a></div>
		<div><a href="#5" class="cross-link"><img src="galleri/galleri_18.JPG" class="nav-thumb" alt="temp-thumb" /></a></div>
		<div><a href="#6" class="cross-link"><img src="galleri/galleri_37.JPG" class="nav-thumb" alt="temp-thumb" /></a></div>
	</div>

</div>
</section>
<?php include('includes/footer_inc.php');?>

