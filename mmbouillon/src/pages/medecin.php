<?php
$config = require 'assets/php/config.php';
$personnes = require 'assets/php/personnes.php';
?>

<h3>Les médecins</h3>
<p>Nos médecins assurent la prise en charge, en visite et en consultation, des problèmes de santé quotidiens. Ils préservent aussi la santé des patients via une information sur les risques individuels et un dépistage des signes précurseurs.</p>
<p>Nos médecins :</p>
<ul>
<?php
foreach ($personnes as $personne) {
    if($personne->type == 'Médecin') {
?>
<li><?php echo $personne->title ?> <?php echo $personne->firstName ?> <span><?php echo $personne->lastName ?></span></li> 
<?php
    }
}
?>
</ul>

<p>

<?php
foreach ($personnes as $personne) {
    if($personne->type == 'Médecin') {
?>
<h3><?php echo $personne->title ?> <?php echo $personne->firstName ?> <span><?php echo $personne->lastName ?></span></h3>

<p>inami <?php echo $personne->extra['inami'] ?></p>

<h4>Spécialités</h4>
<p>ECG, médecin coordinateur MR/MRS, professeur de gynécologie et pharmacologie, également médecin de la police et des militaires.</p>

<h4>Modalités et horaires de travail</h4>
<p>
Toute l’activité a lieu sur rendez-vous.

Consultations (sur rendez-vous)
<ul>
<?php
foreach ($personne->horaires as $horaire) {
    if($horaire->type == 'travail') {
        echo '<li>'.$horaire->jour.': '.$horaire->heure_debut.': '.$horaire->heure_fin.'</li>';
    } else if($horaire->type == 'travail') {
        echo '<li>'.$horaire->jour.': Absente</li>';
    }
}
?>
</ul>

Visites (en dehors de ces heures).

En cas d’urgence, de problème d’horaire réel, de nécessité de temps de consultation plus long, veuillez contacter le secrétariat et leur en faire part.

Contact pour résultats/avis : veuillez laisser vos coordonnées au secrétariat et je vous contacte dans les plus brefs délais.
</p>

<h4>Prescription</h4> 
<p>
Pour toute demande d'ordonnance, veuillez vous adresser au secrétariat.
Attention, ceci n’est accepté que pour les renouvellements des médicaments habituels ! Pas de nouveau traitement par téléphone.
</p>

<h4>Prise de rendez-vous</h4> 
<p>
Par téléphone via le secrétariat au <a href="tel:<?php echo $config['tel'] ?>"><?php echo $config['tel'] ?></a>.
</p>

<?php
    }
}
?>
