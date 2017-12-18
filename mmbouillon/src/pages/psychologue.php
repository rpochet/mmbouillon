<?php
$personnes = require 'assets/php/personnes.php';
?>

<h3>Les psychologues / psychothérapeutes</h3>
<p>Nos psychologues et psychothérapeutes vous reçoivent à la Maison Médicale sur rendez-vous. Ils vous offrent une écoute, un soutien, un environnement bienveillant… dans le cadre de difficultés affectives, familiales, de couple, d’anxiété, de dépendance, de burn-out, de problèmes liés à la parentalités, à l’adolescence…</p> 

<?php
foreach ($personnes as $personne) {
    if($personne->type == 'Psychologue') {
?>
<?php include('assets/php/personne.inc.php'); ?>
<?php
    }
}
?>

<h4>Modalités et horaires de travail</h4>
<p>
Les consultations se font sur rendez-vous du lundi au dimanche. 
</p>
Johanna LEYDER vous reçoit à la Maison Médicale le lundi et le vendredi de 9h à 19h.
Céline DELFOSSE vous reçoit à la Maison Médicale le mardi de 9h30 à 20h et un dimanche/2 de 9h à 12h.
Patricia CHARO vous reçoit à la Maison Médicale le jeudi de 9h à 18h et le vendredi de 9h à 17h.

<h4>Prise de rendez-vous</h4>
<p>
Par téléphone via le secrétariat au <a href="tel:<?php echo $config['tel'] ?>"><?php echo $config['tel'] ?></a> ou via le thérapeute. 
</p>