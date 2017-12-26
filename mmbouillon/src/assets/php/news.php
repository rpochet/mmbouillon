<?php 

include "news.inc";

$url = __DIR__ . '/../../data/news.json';
$contents = file_get_contents($url);
$newsObj = json_decode($contents);

$news = array();
foreach ($newsObj as $newObj) {
    $news0 = new News();
    $news0->title = $newObj->title;
    $news0->author = $newObj->author;
    $news0->images = array();
    foreach ($newObj->images as $image) {
        array_push($news0->images, new NewsImage($image->url));
    }
    $news0->description = $newObj->description;
    $news0->datetime = $newObj->datetime;
    
    array_push($news, $news0);
}

return $news;
?>