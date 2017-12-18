<?php
$personnes = require 'personnes.php';
?>
<h2 class="absence">Absences</h2>

<?php
foreach ($personnes as $user => $personne){
    if($personne['absences']) {
?>
<h3><?php $personne->title ?> - <?php $personne->firstName ?> <span class="lastName"><?php $personne->lastName ?></span></h3>
<ul>
<?php
foreach ($personne['absences'] as $absence){
    ?>
    <li><?php $absence ?></li>
<?php
    }
?>
</ul>
<?php
    }
}
?>
