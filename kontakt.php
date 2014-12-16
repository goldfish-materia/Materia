<?php include('includes/header_inc.php');?>
<?php 
$options = array(
	"title" => "Materia kontakt"
);
insertHead($options);?>

<section class="kontakt">
	<h1>Kontakt</h1>
	<p>Post- og faktureringsadresse:</p>
	<p>Peter E. Knøss</p>
	<p>Udsigten 11</p>
	<p class="space">8960 Randers SØ</p>

	<p>Mobil: 26162867</p>


	<p class="small">Kontaktformular virker ikke da dette site er en prototype til et skoleprojekt</p>


</section>

<section class="kontakt_formular">
	<form>
	<input name="navn" placeholder="Navn"></input>
	<input name="mail" placeholder="Mail"></input>
	<input name="emne" Placeholder="Emne"></input>
	<textarea name="besked" placeholder="..." rows="7"></textarea>
	<p><button type="reset">Nulstil</button> <button>Send mail</button></p>
</form>
</section>


<?php include('includes/footer_inc.php');?>

