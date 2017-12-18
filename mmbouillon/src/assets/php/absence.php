<?php
$personnes = require 'personnes.php';
echo "<h2 class='absence'>Absences</h2>";
foreach ($personnes as $user => $personne){
    if($personne['absences']) {
        echo "<h3>{$personne['title']} - {$personne['lastName']} {$personne['firstName']}</h3>";
        echo "<ul>";
        foreach ($personne['absences'] as $absence){
            echo "<li>$absence</li>";
        }
        echo "</ul>";
    }
}
