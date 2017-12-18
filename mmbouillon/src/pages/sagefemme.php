<?php
$personnes = require 'assets/php/personnes.php';
?>

<h3>La sage-femme</h3>
<p>Notre sage-femme est à l’écoute, prodigue des soins et conseils tout au long de la grossesse ainsi qu’après l’arrivée du bébé. Elle apporte un soutien à la parentalité et à l’allaitement. Elle vous reçoit sur rendez-vous à la Maison Médicale ou à votre domicile.</p>

<h4>Prestataire</h4> 
<?php
foreach ($personnes as $personne) {
    if($personne->type == 'SageFemme') {
?>
<?php include('assets/php/personne.inc.php'); ?>
<?php
    }
}
?>

<h4>Modalités et horaires de travail</h4>
<p>
Pour les prestations sage-femme, il vous est possible, si vous le souhaitez, de prendre rendez-vous soit à la Maison Médicale soit à votre domicile.
</p>
<p>
Une vignette de mutuelle est nécessaire à chaque prestation.
</p>
<p>
La grande majorité des prestations sont entièrement payées par votre mutuelle (tiers-payant). Seuls les frais de déplacements et un supplément pour les préparations à la naissance vous seront facturés.
</p>
<p>
Le secrétariat et les prestataires peuvent vous renseigner précisément.
</p>

<h4>Prise de rendez-vous</h4>
<p>
Par téléphone via le secrétariat au <a href="tel:<?php echo $config['tel'] ?>"><?php echo $config['tel'] ?></a> ou via la sage-femme au a href="tel:<?php echo $personne->gsm ?>"><?php echo $personne->gsm ?></a>.
</p>