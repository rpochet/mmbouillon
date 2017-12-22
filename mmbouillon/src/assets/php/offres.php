<?php 

include "offre.inc";

$offre0 = new Offre();
$offre0->type = 'Kinésithérapeute';
$offre0->title = 'La Maison Médicale de Bouillon recherche un(e) kiné à temps partiel afin de compléter son équipe.';
$offre0->author = 'mmaluta';
$offre0->link = 'assets/img/offre_kinesitherapeute_20171206.png';
$offre0->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt quia sit ullam, assumenda et. est at. Minima cum enim, vero eligendi perspiciatis similique modi voluptatem officia fugiat';
$offre0->datetime = '2017-12-06 12:00';
$offre0->status = 'online';

return array($offre0);
?>