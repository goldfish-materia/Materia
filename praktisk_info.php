<?php include('includes/header_inc.php');?>
<?php 
$options = array(
	"title" => "Praktisk info om Materia"
);
insertHead($options);?>
<section>

	<h1>Praktisk info</h1>

	<p>
	Her er en række informationer som er gode at læse inden du besøger Materia.
	Som du kan fornemme er det er praktisk sted med en masse grove udendørs aktiviteter, der opfordrer til praktisk tøj efter vejr og vind.
	</p>

	<article class="center">
		<p class="praktisk_info_tekst"><a href="faciliteter.php">Faciliteter</a></p> 
		<p class="praktisk_info_tekst"><a href="medbring.php">Godt at have med</a></p>
		<p class="praktisk_info_tekst"><a href="priser.php">Priser på kurser</a></p>
	    
		<a href="faciliteter.php"><img class="praktisk_info_billede" src="images/plantegningMateriamini.png" alt="plantegningmateria"></a>
		<a href="medbring.php"><img class="praktisk_info_billede" src="images/ovesigtkuffert.png" alt="pakkeliste"></a>
		<a href="priser.php"><img class="praktisk_info_billede" src="images/penge.png" alt="omkostninger"></a>
	</article>

</section>
<?php include('includes/footer_inc.php');?>

