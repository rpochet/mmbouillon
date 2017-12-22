<?php
$personnes = require 'assets/php/personnes.php';
?>

<h3>Absence des prestataires</h3>

<div class="row">
<?php
foreach ($personnes as $personne) {
    foreach ($personne->horaires as $horaire) {
        if ($horaire->type == 'absence') {
?>
<div class="small-4 columns">
<?php include('assets/php/absence.inc.php'); ?>
</div>
<?php
            break;
        }
    }
}
?>
</div>