<?php
$personnes = require 'assets/php/personnes.php';
?>

<h3>Le kinésithérapeute</h3>
<p>Notre kinésithérapeute assurent un travail de rééducation (ortho-traumatologique, respiratoire, uro-gynécologique, cardiovasculaire, neurologique...). Elle vous reçoit à la Maison Médicale ou effectue des visites à domicile, sur rendez-vous.</p>

<div class="row">
<?php
foreach ($personnes as $personne) {
    if($personne->type == 'Kinésithérapeute') {
?>
<div class="small-4 columns">
<?php include('assets/php/personne.inc.php'); ?>
</div>
<?php
    }
}
?>
</div>

<h4>Modalités et horaires de travail</h4>
<p>
Toute l’activité a lieu sur rendez-vous tant au cabinet qu’au domicile du patient. 
</p>
<p>
Les consultations se font du lundi au vendredi. Un rôle de garde pour le samedi et le dimanche est disponible pour certaines urgences (respiratoire, soins palliatifs…).
</p>
<p>
La prescription médicale de kinésithérapie est obligatoire. Une vignette de mutuelle est nécessaire ainsi que la carte d’identité.
</p>

<h4>Prise de rendez-vous</h4>
<p>
Par téléphone via le numéro personnel du thérapeute au <a href="tel:<?php echo $personne->gsm ?>"><?php echo $personne->gsm ?></a>.
</p>