<?php

include "personne.inc";

$mmaluta = new Personne();
$mmaluta->id = 'mmaluta';
$mmaluta->type = 'Secrétaire';
$mmaluta->firstName = 'Maité';
$mmaluta->lastName = 'Maluta';
$mmaluta->email = 'maisonmedicaledebouillon@gmail.com';
$mmaluta->tel = '061/860.300';
$mmaluta->fax = '061/860.249';
$mmaluta->avatar = 'https://dummyimage.com/200x200/ccc/fff&text=Maité+Maluta';
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
$vanizet->id = 'vanizet';
$vanizet->type = 'Médecin';
$vanizet->title = 'Dr.';
$vanizet->firstName = 'Vanessa';
$vanizet->lastName = 'Anizet';
$vanizet->email = 'maisonmedicaledebouillon@gmail.com';
$vanizet->avatar = 'https://dummyimage.com/200x200/ccc/fff&text=Vanessa+Anizet';
$vanizet->extra = array(
    'inami' => '1-81381-09-004'
);
$vanizet->specialites =  array(
    'ECG.',
    'Médecin coordinateur MR/MRS.',
    'Professeur de gynécologie et pharmacologie.',
    'Médecin de la police et des militaires.'
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
$mmassin->id = 'mmassin';
$mmassin->type = 'Kinésithérapeute';
$mmassin->firstName = 'Mélanie';
$mmassin->lastName = 'Massin';
$mmassin->gsm = '0472/99.51.22';
$mmassin->avatar = 'https://dummyimage.com/200x200/ccc/fff&text=Mélanie+Massin';
$mmassin->description = 'Formations complémentaires en kinésithérapie respiratoire différentielle guidée par l\’auscultation pulmonaire, drainage lymphatique manuel et thérapie manuelle analytique.';
$mmassin->specialites =  array(
    'Formations complémentaires en kinésithérapie respiratoire différentielle guidée par l\’auscultation pulmonaire',
    'Drainage lymphatique manuel',
    'Thérapie manuelle analytique'
);

$jleyder = new Personne();
$jleyder->id = 'jleyder';
$jleyder->type = 'Psychologue';
$jleyder->firstName = 'Johanna';
$jleyder->lastName = 'Leyder';
$jleyder->avatar = 'https://dummyimage.com/200x200/ccc/fff&text=Johanna+Leyder';
$jleyder->description_courte = 'psychologue enfants-adolescents';
$jleyder->description = 'Psychologue clinicienne : prise en charge individuelle d’enfants et d’adolescents. Prise en charge des difficultés liées à ces périodes (affectives, relationnelles, comportementales, confiance en soi, anxiété, deuil, gestion du stress et des émotions…).
Formation complémentaire en coaching scolaire (méthode de travail, décrochage, harcèlement…).';
$jleyder->specialites =  array(
);

$cdelfosse = new Personne();
$cdelfosse->id = 'cdelfosse';
$cdelfosse->type = 'Psychologue';
$cdelfosse->firstName = 'Céline';
$cdelfosse->lastName = 'Delfosse';
$cdelfosse->avatar = 'https://dummyimage.com/200x200/ccc/fff&text=Céline+Delfosse';
$cdelfosse->facebook = 'https://www.facebook.com/celine.delfosse.39';
$cdelfosse->description_courte = 'psychologue, thérapeute systémique et doula';
$cdelfosse->description = 'Psychologue clinicienne, thérapeute familiale systémique et doula: travail avec les familles, en couple ou en individuel. Soutien à la parentalité (y compris avant la naissance) ou face aux difficultés du quotidien (anxiété, dépression, difficultés relationnelles...). Facilitation de l’expression et de la régulation des émotions.';
$cdelfosse->specialites =  array(
);

$pcharo = new Personne();
$pcharo->id = 'pcharo';
$pcharo->type = 'Psychologue';
$pcharo->firstName = 'Patricia';
$pcharo->lastName = 'Charo';
$pcharo->avatar = 'https://dummyimage.com/200x200/ccc/fff&text=Patricia+Charo';
$pcharo->description_courte = 'praticienne en EMDR et psychothérapeute';
$pcharo->description = 'Praticienne EMDR, psychothérapeute spécialisée en systémique.
Reçoit les adultes, adolescents, enfants, couples et familles. L\'EMDR est une solution pour traiter les problèmes à la racine. Thérapie qui intervient dans le traitement des traumatismes psychologiques: accident, agression, abus ... et également des souvenirs douloureux, d\'une séparation, d\'une dépression, d\'un deuil, des problèmes d\'insomnie, d\'anxiété, d\’angoisse, de manque de confiance en soi...';
$pcharo->specialites =  array(
);

$wbarras = new Personne();
$wbarras->id = 'wbarras';
$wbarras->type = 'Diététicienne';
$wbarras->firstName = 'Wendy';
$wbarras->lastName = 'Barras';
$wbarras->gsm = '0472/39.71.72';
$wbarras->avatar = 'https://dummyimage.com/200x200/ccc/fff&text=Wendy+Barras';
$wbarras->description = 'Aide pour une perte de poids et un rééquilibrage alimentaire, prise en charge du diabète, de maladies intestinales (maladie de Crohn, rectocolite...), conseils dans le cas d\'allergies alimentaires, d\'excès de cholestérol ou d\'hypertension artérielle. Aide dans la prise de bonnes habitudes alimentaires et dans les régimes de type végétarien ou vegan.';
$wbarras->specialites =  array(
    'Aide pour une perte de poids et un rééquilibrage alimentaire.',
    'Prise en charge du diabète, de maladies intestinales (maladie de Crohn, rectocolite...).',
    'Conseils dans le cas d\'allergies alimentaires, d\'excès de cholestérol ou d\'hypertension artérielle.',
    'Aide dans la prise de bonnes habitudes alimentaires et dans les régimes de type végétarien ou vegan.'
);

$aaerts = new Personne();
$aaerts->id = 'aaerts';
$aaerts->type = 'SageFemme';
$aaerts->firstName = 'Audrey';
$aaerts->lastName = 'Aerts';
$aaerts->gsm = '0474/41.46.38';
$aaerts->avatar = 'https://dummyimage.com/200x200/ccc/fff&text=Audrey+Aerts';
$aaerts->specialites =  array(
    'Accompagnement global pour une grossesse et une maternité harmonieuse.',
    'Accompagne dans le désir de grossesse dès le désir de conception jusqu\'au 1er anniversaire de l\’enfant.',
    'Suivi médical de grossesse conjointement avec le gynécologue. Réalisation de diverses préparations à la naissance.',
    'Suivi post-partum, soutien à l\'allaitement et la parentalité.'
);

$mgeorges = new Personne();
$mgeorges->id = 'mgeorges';
$mgeorges->type = 'InfirmiereASD';
$mgeorges->firstName = 'Maryline';
$mgeorges->lastName = 'Georges';
$mgeorges->photo = 'assets/img/infirmiere_asd.png';
$mgeorges->avatar = 'https://dummyimage.com/200x200/ccc/fff&text=Johanna+Leyder';

$epolet = new Personne();
$epolet->id = 'epolet';
$epolet->type = 'InfirmiereASD';
$epolet->firstName = 'Emilie';
$epolet->lastName = 'Polet';
$epolet->photo = 'assets/img/infirmiere_asd.png';
$epolet->avatar = 'https://dummyimage.com/200x200/ccc/fff&text=Johanna+Leyder';

$aarnould = new Personne();
$aarnould->id = 'aarnould';
$aarnould->type = 'InfirmiereInd';
$aarnould->firstName = 'Amélie';
$aarnould->lastName = 'Arnould';
$aarnould->photo = 'assets/img/infirmiere_independante.png';
$aarnould->avatar = 'https://dummyimage.com/200x200/ccc/fff&text=Amélie+Arnould';

$abaijot = new Personne();
$abaijot->id = 'abaijot';
$abaijot->type = 'InfirmiereInd';
$abaijot->firstName = 'Annabelle';
$abaijot->lastName = 'Baijot';
$abaijot->photo = 'assets/img/infirmiere_independante.png';
$abaijot->avatar = 'https://dummyimage.com/200x200/ccc/fff&text=Annabelle+Baijot';

$gdandois = new Personne();
$gdandois->id = 'gdandois';
$gdandois->type = 'InfirmiereInd';
$gdandois->firstName = 'Géraldine';
$gdandois->lastName = 'Dandois';
$gdandois->photo = 'assets/img/infirmiere_independante.png';
$gdandois->avatar = 'https://dummyimage.com/200x200/ccc/fff&text=Géraldine+Dandois';

return array(
    $mmaluta->id => $mmaluta, 
    $vanizet->id => $vanizet, 
    $mmassin->id => $mmassin, 
    $jleyder->id => $jleyder, 
    $cdelfosse->id => $cdelfosse, 
    $pcharo->id => $pcharo, 
    $wbarras->id => $wbarras, 
    $aaerts->id => $aaerts, 
    $mgeorges->id => $mgeorges, 
    $epolet->id => $epolet, 
    $aarnould->id => $aarnould, 
    $abaijot->id => $abaijot, 
    $gdandois->id => $gdandois
);

?>
