<?php
$personnes = require 'assets/php/personnes.php';
?>

<h3>Diététicienne</h3>
<p>Notre diététicienne conseille un régime alimentaire adapté au patient en tenant compte de ses besoins. Elle vous reçoit à la Maison Médicale sur rendez-vous.</p>
<p>Notre diététicienne :</p>

<ul>
<?php
foreach ($personnes as $personne) {
    if($personne->type == 'Diététicienne') {
?>
<li><?php echo $personne->title ?> <?php echo $personne->firstName ?><span><?php echo $personne->lastName ?></span></li> 
<?php
    }
}
?>
</ul>

<h4>Prestataire</h4>
<p>
<?php echo $personne->firstName ?><span><?php echo $personne->lastName ?></span> : <a href="tel:<?php echo $personne->gsm ?>"><?php $personne->gsm ?></a>
<?php $personne->description ?>
</p>

<h4>Modalités et horaires de travail</h4>
<p>
Les consultations se font sur rendez-vous le lundi de 9h à 20h.
</p>

<h4>Prise de rendez-vous</h4>
<p>
Par téléphone via le secrétariat au <a href="tel:<?php echo $config['tel'] ?>"><?php echo $config['tel'] ?></a>.
</p>