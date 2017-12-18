<?php
$news = require 'assets/php/news.php';
if (isset($_REQUEST['start'])) {
    $start = $_REQUEST['start'];
} else {
    $start = 0;
}
if(count($news) < $start * $length) {
    $start = 0;
}
$length = 5;
?>

<div class="article-row-section">
  <div class="article-row-section-inner">

    <h2 class="article-row-section-header">News</h2>

    <?php
    foreach (array_slice($news, $start * $length, $length) as $new){
    ?>
    <div class="news-image-gallery-container">
      <div class="row">
        <div class="small-12 medium-12 large-4 columns">
          <div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit data-options="animInFromLeft:fade-in; animInFromRight:fade-in; animOutToLeft:fade-out; animOutToRight:fade-out;">
            <ul class="orbit-container">
              <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
              <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
              
              <?php
              foreach ($new->images as $idx=>$image){
              ?>
              <li class="<?php echo $idx == 0 ? 'is-active' : '';?> orbit-slide">
                <img class="orbit-image" src="<?php echo $image->url;?>" alt="Space">
                <figcaption class="orbit-caption"><?php echo $image->caption;?></figcaption>
              </li>
              <?php
              }
              ?>
            </ul>
            <nav class="orbit-bullets">
              <?php
              foreach ($new->images as $idx=>$image){
              ?>
              <button class="<?php echo $idx == 0 ? 'is-active' : '';?>" data-slide="$idx"><span class="show-for-sr"><?php echo $image->caption;?></span><?php if($idx == 0) {?><span class="show-for-sr">Current Slide</span><?php }?></button>
              <?php
              }
              ?>
            </nav>
          </div>
        </div>
        <div class="small-12 medium-12 large-8 columns">
          <div class="rounded-social-buttons">
            <a class="social-button facebook" href="#"></a>
            <a class="social-button twitter" href="#"></a>
            <a class="social-button linkedin" href="#"></a>
            <a class="social-button google-plus" href="#"></a>
          </div>
          <div class="clearfix"></div>
          <h4 class="news-image-gallery-title"><?php echo $new->title;?></h4>
          <p>
            <?php echo $new->description;?>...
            <a href="#" class="read-more">
              Read More
            </a>
          </p>
        </div>
      </div>
    </div>
    <?php
    }
    ?>
    
    <ul class="pagination pagination-circular" role="navigation" aria-label="Pagination">
      <li class="disabled">« <span class="show-for-sr">Previous page</span></li>
      <li class="current"><span class="show-for-sr">You're on page</span> <?php echo $start + 1;?></li>
      <?php 
      for ($i = 2; $i <= 6; $i++) {
          printf ('<li><a href="news.php?start=%d" aria-label="Page %d">%d</a></li>', $start + $i, $start + $i, $start + $i);
      }
      ?>
      <li><a href="#" aria-label="Next page">» <span class="show-for-sr">Next page</span></a></li>
    </ul>

  </div>
</div>
