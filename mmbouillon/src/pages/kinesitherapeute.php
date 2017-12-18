<?php
$personnes = require 'assets/php/personnes.php';
?>

<h3>Le kinésithérapeute</h3>
<p>Notre kinésithérapeute assurent un travail de rééducation (ortho-traumatologique, respiratoire, uro-gynécologique, cardiovasculaire, neurologique...). Elle vous reçoit à la Maison Médicale ou effectue des visites à domicile, sur rendez-vous.</p>
<p>Notre kinésithérapeute :</p>

<ul>
<?php
foreach ($personnes as $personne) {
    if($personne->type == 'Kinésithérapeute') {
?>
<li><?php echo $personne->title ?> <?php echo $personne->firstName ?><span class="lastName"><?php echo $personne->lastName ?></span></li> 
<?php
    }
}
?>
</ul>

Prestataire

<?php echo $personne->firstName ?> <span class="lastName"><?php echo $personne->lastName ?></span> : <a href="tel:<?php echo $personne->gsm ?>"><?php echo $personne->gsm ?></a>
Formations complémentaires en: kinésithérapie respiratoire différentielle guidée par
l’auscultation pulmonaire, drainage lymphatique manuel et thérapie manuelle analytique.

Modalités et horaires de travail 

Toute l’activité a lieu sur rendez-vous tant au cabinet qu’au domicile du patient. 

Les consultations se font du lundi au vendredi. Un rôle de garde pour le samedi et le dimanche est disponible pour certaines urgences (respiratoire, soins palliatifs…).

La prescription médicale de kinésithérapie est obligatoire. Une vignette de mutuelle est nécessaire ainsi que la carte d’identité.

Prise de rendez-vous 

Par téléphone via le numéro personnel du thérapeute au <a href="tel:<?php echo $personne->gsm ?>"><?php echo $personne->gsm ?></a>.
