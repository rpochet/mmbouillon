<?php

include "personne.inc";

$mmaluta = new Personne();
$mmaluta->type = 'Secrétaire';
$mmaluta->firstName = 'Maité';
$mmaluta->lastName = 'Maluta';
$mmaluta->email = 'maisonmedicaledebouillon@gmail.com';
$mmaluta->tel = '061/860.300';
$mmaluta->fax = '061/860.249';
$mmaluta->photo = 'https://dummyimage.com/200x200/ccc/fff&text=Maité Maluta';
$mmaluta->horaires = array();
$mmaluta->horaires[0] = new JourAgenda('travail', 'lundi', '08:00', '12:00');
$mmaluta->horaires[1] = new JourAgenda('travail', 'lundi', '13:00', '18:00');
$mmaluta->horaires[2] = new JourAgenda('travail', 'mardi', '08:00', '12:00');
$mmaluta->horaires[3] = new JourAgenda('travail', 'mardi', '13:00', '18:00');
$mmaluta->horaires[4] = new JourAgenda('travail', 'mercredi', '08:00', '12:00');
$mmaluta->horaires[5] = new JourAgenda('travail', 'mercredi', '13:00', '18:00');
$mmaluta->horaires[6] = new JourAgenda('travail', 'jeudi', '08:00', '12:00');
$mmaluta->horaires[7] = new JourAgenda('travail', 'jeudi', '13:00', '18:00');
$mmaluta->horaires[8] = new JourAgenda('travail', 'vendredi', '08:00', '12:00');
$mmaluta->horaires[9] = new JourAgenda('travail', 'vendredi', '13:00', '18:00');
$mmaluta->horaires[10] = new PeriodeAgenda('absence', '17-11-2017', '19-11-2017');

$vanizet = new Personne();
$vanizet->type = 'Médecin';
$vanizet->title = 'Dr.';
$vanizet->firstName = 'Vanessa';
$vanizet->lastName = 'Anizet';
$vanizet->photo = 'https://dummyimage.com/200x200/ccc/fff&text=Vanessa+Anizet';
$vanizet->extra = array(
    'inami' => '1-81381-09-004'
);
$vanizet->horaires = array();
$vanizet->horaires[0] = new JourAgenda('travail', 'lundi', '08:30', '12:00');
$vanizet->horaires[1] = new JourAgenda('travail', 'lundi', '16:00', '18:00');
$vanizet->horaires[2] = new JourAgenda('absence', 'mardi', NULL, NULL);
$vanizet->horaires[4] = new JourAgenda('travail', 'mercredi', '08:30', '12:00');
$vanizet->horaires[5] = new JourAgenda('travail', 'mercredi', '16:00', '18:00');
$vanizet->horaires[6] = new JourAgenda('travail', 'jeudi', '08:30', '11:00');
$vanizet->horaires[8] = new JourAgenda('travail', 'vendredi', '08:30', '12:00');
$vanizet->horaires[9] = new JourAgenda('travail', 'vendredi', '16:00', '18:00');
$vanizet->horaires[10] = new PeriodeAgenda('absence', '17-11-2017', '19-11-2017');

$mmassin = new Personne();
$mmassin->type = 'Kinésithérapeute';
$mmassin->firstName = 'Mélanie';
$mmassin->lastName = 'Massin';
$mmassin->gsm = '0472/99.51.22';
$mmassin->photo = 'https://dummyimage.com/200x200/ccc/fff&text=M%C3%A9lanie+Massin';

$jleyder = new Personne();
$jleyder->type = 'Psychologue';
$jleyder->firstName = 'Johanna';
$jleyder->lastName = 'Leyder';
$jleyder->photo = 'https://dummyimage.com/200x200/ccc/fff&text=Johanna+Leyder';
$jleyder->description_courte = 'psychologue enfants-adolescents';
$jleyder->description = 'Psychologue clinicienne : prise en charge individuelle d’enfants et d’adolescents. Prise en charge des difficultés liées à ces périodes (affectives, relationnelles, comportementales, confiance en soi, anxiété, deuil, gestion du stress et des émotions…).
Formation complémentaire en coaching scolaire (méthode de travail, décrochage, harcèlement…).';

$cdelfosse = new Personne();
$cdelfosse->type = 'Psychologue';
$cdelfosse->firstName = 'Céline';
$cdelfosse->lastName = 'Delfosse';
$cdelfosse->photo = 'https://dummyimage.com/200x200/ccc/fff&text=C%C3%A9line+Delfosse';
$cdelfosse->description_courte = 'psychologue, thérapeute systémique et doula';
$cdelfosse->description = 'Psychologue clinicienne, thérapeute familiale systémique et doula: travail avec les familles, en couple ou en individuel. Soutien à la parentalité (y compris avant la naissance) ou face aux difficultés du quotidien (anxiété, dépression, difficultés relationnelles...). Facilitation de l’expression et de la régulation des émotions.';

$pcharo = new Personne();
$pcharo->type = 'Psychologue';
$pcharo->firstName = 'Patricia';
$pcharo->lastName = 'Charo';
$pcharo->photo = 'https://dummyimage.com/200x200/ccc/fff&text=Patricia+Charo';
$pcharo->description_courte = 'praticienne en EMDR et psychothérapeute';
$pcharo->description = 'Praticienne EMDR, psychothérapeute spécialisée en systémique.
Reçoit les adultes, adolescents, enfants, couples et familles. L\'EMDR est une solution pour traiter les problèmes à la racine. Thérapie qui intervient dans le traitement des traumatismes psychologiques: accident, agression, abus ... et également des souvenirs douloureux, d\'une séparation, d\'une dépression, d\'un deuil, des problèmes d\'insomnie, d\'anxiété, d\’angoisse, de manque de confiance en soi...';

$wbarras = new Personne();
$wbarras->type = 'Diététicienne';
$wbarras->firstName = 'Wendy';
$wbarras->lastName = 'Barras';
$wbarras->gsm = '0472/39.71.72';
$wbarras->photo = 'https://dummyimage.com/200x200/ccc/fff&text=Wendy+Barras';
$wbarras->description = 'Aide pour une perte de poids et un rééquilibrage alimentaire, prise en charge du diabète, de maladies intestinales (maladie de Crohn, rectocolite...), conseils dans le cas d\'allergies alimentaires, d\'excès de cholestérol ou d\'hypertension artérielle. Aide dans la prise de bonnes habitudes alimentaires et dans les régimes de type végétarien ou vegan.';

$aaerts = new Personne();
$aaerts->type = 'SageFemme';
$aaerts->firstName = 'Audrey';
$aaerts->lastName = 'Aerts';
$aaerts->gsm = '0474/41.46.38';
$aaerts->photo = 'https://dummyimage.com/200x200/ccc/fff&text=Audrey+Aerts';
$aaerts->specialites =  array(
    'Accompagnement global pour une grossesse et une maternité harmonieuse.',
    'Accompagne dans le désir de grossesse dès le désir de conception jusqu\'au 1er anniversaire de l\’enfant.',
    'Suivi médical de grossesse conjointement avec le gynécologue. Réalisation de diverses préparations à la naissance.',
    'Suivi post-partum, soutien à l\'allaitement et la parentalité.'
);

return array($mmaluta, $vanizet, $mmassin, $jleyder, $cdelfosse, $pcharo, $wbarras, $aaerts);

?>
