<?php
$personnes = require 'assets/php/personnes.php';
?>

<h3>Les infirmières</h3>
<p>Nos infirmières assurent des soins variés qui permettent aux patients de conserver au mieux leur autonomie (soins de plaies, injections, vaccinations...). Elles vous reçoivent à la Maison Médicale sur rendez-vous ou effectuent des visites à domicile.</p>

<h4>Nos infirmières ASD :</h4>

<div class="row">
<?php
foreach ($personnes as $personne) {
    if($personne->type == 'InfirmiereASD') {
?>
<div class="small-4 columns">
<?php include('assets/php/personne.inc.php'); ?>
</div>
<?php
    }
}
?>
</div>

<h4>Nos infirmières indépendantes :</h4>

<div class="row">
<?php
foreach ($personnes as $personne) {
    if($personne->type == 'InfirmiereInd') {
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
Pour les soins infirmiers qui le permettent, il vous est possible, de prendre rendez-vous pour les faire au dispensaire de la Maison Médicale. Quoi de plus facile pour ne pas devoir attendre le passage de l’infirmière au domicile !
</p> 
<p>
La prescription médicale de soins infirmiers est obligatoire. Une vignette de mutuelle est nécessaire ainsi que la carte d’identité.
</p>
<p>
Les soins possibles à la Maison Médicale : injections, soins de plaies, prise de sang, enlèvement de fils ou agrafes, débranchement de diffuseur de chimiothérapie, expertise de plaies...
</p> 

<h4>Prise de rendez-vous</h4>
<p>
Par téléphone via le secrétariat au <a href="tel:<?php echo $config['tel'] ?>"><?php echo $config['tel'] ?></a>.
</p>