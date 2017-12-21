<?php
$personnes = require 'assets/php/personnes.php';
?>

<h3>Diététicienne</h3>
<p>Notre diététicienne conseille un régime alimentaire adapté au patient en tenant compte de ses besoins. Elle vous reçoit à la Maison Médicale sur rendez-vous.</p>

<div class="row">
<?php
foreach ($personnes as $personne) {
    if($personne->type == 'Diététicienne') {
?>
<div class="small-4 columns">
<?php include('assets/php/personne.inc.php'); ?>
</div>
<?php
    }
}
?>
</div>

<h4>Modalités et horaires de travail</h4>
<p>
Les consultations se font sur rendez-vous le lundi de 9h à 20h.
</p>

<h4>Prise de rendez-vous</h4>
<p>
Par téléphone via le secrétariat au <a href="tel:<?php echo $config['tel'] ?>"><?php echo $config['tel'] ?></a>.
</p>