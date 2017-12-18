<?php 

include "news.inc";

$news0 = new News();
$news0->title = 'Maité Maluta';
$news0->author = 'mmaluta';
$news0->images = array();
$news0->images[0] = new NewsImage('https://placehold.it/200/00FF40');
$news0->images[1] = new NewsImage('https://placehold.it/200/FE2EC8');
$news0->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt quia sit ullam, assumenda et. est at. Minima cum enim, vero eligendi perspiciatis similique modi voluptatem officia fugiat';
$news0->datetime = '2008-02-14 20:00';

$news1 = new News();
$news1->title = 'Offre d\'emploi';
$news1->author = 'aandre';
$news1->images = array();
$news1->images[0] = new NewsImage('/assets/img/24909596_2053885971512145_7782451777333200126_n.png');
$news1->description = 'La Maison Médicale de Bouillon recherche un(e) kiné à temps partiel afin de compléter son équipe. A partager sans modération !';
$news1->datetime = '11-12-2017 13:46';

return array($news0, $news1);
?>