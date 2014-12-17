<?php include('includes/header_inc.php');?>
<?php 
$options = array(
	"title" => "Materias aktiviteter"
);
insertHead($options);?>

<section>




	<h1>Aktiviteter</h1>
	<p>Her kan du se hvad vi tilbyder.</p>

	<article class="center">
	<p class="aktivitet_tekst"><a href="workshops.php">Workshops</a></p>
	<p class="aktivitet_tekst"><a href="kurser.php">Kurser</a></p>
	<p class="aktivitet_tekst"><a href="smedefestival.php">Smedefestival</a></p>
	<p class="aktivitet_tekst"><a href="nm_2016.php">Nordisk Mesterskab '16</a></p>


	<a href="workshops.php"><img src="images/workshop.png" class="aktivitet_billeder" alt="workshop"></a>
	<a href="kurser.php"><img src="images/madidetfri.png" class="aktivitet_billeder" alt="kurser"></a>
	<a href="smedefestival.php"><img src="images/smedefestival.png" class="aktivitet_billeder" alt="smedefestival"></a>
	<a href="nm_2016.php"><img src="images/nordic2016.png" class="aktivitet_billeder" alt="nordisk mesterskab 2016"></a>
	</article>


</section>
<?php include('includes/footer_inc.php');?>

