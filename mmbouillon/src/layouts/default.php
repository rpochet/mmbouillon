<!doctype html class="no-js" lang="fr">

<?php
$config = require_once (dirname(__FILE__) . '{{root}}/assets/php/config.php');
$labels = require_once (dirname(__FILE__) . '{{root}}/assets/php/labels.php');

$lastSegment = basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

?>

{{!-- This is the base layout for your project, and will be used on every page. --}}

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title><?php echo $labels['title'];?></title>
    
    <script defer src="https://use.fontawesome.com/releases/v5.0.1/js/all.js"></script>
    
    <link rel="stylesheet" href="{{root}}assets/css/app.css">
    
<!--     <script src="javascripts/modernizr.foundation.js"></script> -->
    
    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Playfair+Display:400italic' rel='stylesheet' type='text/css' />
    
    <!-- IE Fix for HTML5 Tags -->
    <!--[if lt IE 9]>
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>

    <div class="row page_wrap">
        <!-- page wrap -->
        
        <div class="twelve columns">
            <!-- page wrap -->

            <!-- NOTE: This is the off-canvas menu that appears when you click on the hamburger menu on smaller screens. Everything in the `.off-canvas` div belongs in `src/layouts/default.html`. Copy this section into the `default.html` file and remove it from this file.  -->
            <div class="off-canvas mmbouillon-header-off-canvas position-left" id="mmbouillon-header" data-off-canvas>
            
              <!-- Close button -->
              <button class="close-button" aria-label="Close menu" type="button" data-close>
                <span aria-hidden="true">&times;</span>
              </button>
            
              <ul class="vertical menu menu-hover-lines">
                <li class="main-nav-link <?php echo ($lastSegment == 'medecin.php' ? 'active' : '');?>"><a href="medecin.php"><?php echo $labels['medecin.title'];?></a></li>
                <li class="main-nav-link <?php echo ($lastSegment == 'infirmiere.php' ? 'active' : '');?>"><a href="infirmiere.php"><?php echo $labels['infirmiere.title'];?></a></li>
                <li class="main-nav-link <?php echo ($lastSegment == 'psychologue.php' ? 'active' : '');?>"><a href="psychologue.php"><?php echo $labels['psychologue.title'];?></a></li>
                <li class="main-nav-link <?php echo ($lastSegment == 'dieteticienne.php' ? 'active' : '');?>"><a href="dieteticienne.php"><?php echo $labels['dieteticienne.title'];?></a></li>
                <li class="main-nav-link <?php echo ($lastSegment == 'sagefemme.php' ? 'active' : '');?>"><a href="sagefemme.php"><?php echo $labels['sagefemme.title'];?></a></li>
                <li class="main-nav-link <?php echo ($lastSegment == 'kinesitherapeute.php' ? 'active' : '');?>"><a href="kinesitherapeute.php"><?php echo $labels['kinesitherapeute.title'];?></a></li>
              </ul>
            
              <hr>
            
              <!-- Menu -->
              <ul class="menu vertical">
                <li class="absence"><a href="absence.php"><?php echo $labels['absence.title'];?></a></li>
                <li><a href="contact.php"><?php echo $labels['contact.title'];?></a></li>
              </ul>
            
            </div>
            
            <!-- NOTE: This is the header menu that appears at the top of your site. -->
            <div class="off-canvas-content" data-off-canvas-content>
              <div class="mmbouillon-header-top show-for-large">
                <div class="row align-justify">
                  <div class="mmbouillon-header-top-message">
                    <?php echo $labels['title'];?>
                  </div>
                  <div class="mmbouillon-header-top-links">
                    <ul>
                      <li class="absence"><a href="absence.php"><?php echo $labels['absence.title'];?></a></li>
                      <li><a href="contact.php"><?php echo $labels['contact.title'];?></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            
              <div class="mmbouillon-header show-for-large">
                <div class="row align-justify align-middle">
                  <div class="shrink column">
                    <ul class="vertical medium-horizontal menu menu-hover-lines">
<!--                       <li><a href="#"><img class="logo" src="https://placehold.it/160x50"></a></li> -->
                      <li class="main-nav-link <?php echo ($lastSegment == 'medecin.php' ? 'active' : '');?>"><a href="medecin.php"><?php echo $labels['medecin.title'];?></a></li>
                      <li class="main-nav-link <?php echo ($lastSegment == 'infirmiere.php' ? 'active' : '');?>"><a href="infirmiere.php"><?php echo $labels['infirmiere.title'];?></a></li>
                      <li class="main-nav-link <?php echo ($lastSegment == 'psychologue.php' ? 'active' : '');?>"><a href="psychologue.php"><?php echo $labels['psychologue.title'];?></a></li>
                      <li class="main-nav-link <?php echo ($lastSegment == 'dieteticienne.php' ? 'active' : '');?>"><a href="dieteticienne.php"><?php echo $labels['dieteticienne.title'];?></a></li>
                      <li class="main-nav-link <?php echo ($lastSegment == 'sagefemme.php' ? 'active' : '');?>"><a href="sagefemme.php"><?php echo $labels['sagefemme.title'];?></a></li>
                      <li class="main-nav-link <?php echo ($lastSegment == 'kinesitherapeute.php' ? 'active' : '');?>"><a href="kinesitherapeute.php"><?php echo $labels['kinesitherapeute.title'];?></a></li>
                    </ul>
                  </div>
<!--                   <div class="shrink column"> -->
<!--                     <ul class="menu"> -->
<!--                       <li><input type="search" placeholder="Search"></li> -->
<!--                       <li><button type="button" class="button search-button"></button></li> -->
<!--                     </ul> -->
<!--                   </div> -->
                </div>
              </div>
            
<!--               <div class="mmbouillon-header-mobile hide-for-large"> -->
<!--                 <div class="mmbouillon-header-mobile-left"> -->
<!--                   <button class="menu-icon" type="button" data-toggle="mmbouillon-header"></button> -->
<!--                   <form class="mmbouillon-header-search-exandable"> -->
<!--                     <input type="search" placeholder="Search"> -->
<!--                   </form> -->
<!--                 </div> -->
<!--                 <div class="mmbouillon-header-mobile-center"> -->
<!--                   <a href="#"><img class="logo" src="https://placehold.it/130x30"></a> -->
<!--                 </div> -->
<!--                 <div class="mmbouillon-header-mobile-right"> -->
<!--                   <i class="fa fa-shopping-cart"></i> -->
<!--                 </div> -->
<!--               </div> -->
            </div>

            <div class="row">
                <div class="twelve columns">

                    {{!-- Pages you create in the src/pages/ folder are inserted here
                    when the flattened page is created. --}} {{> body}}

                </div>
            </div>

        </div>

    </div>
    <!-- end page wrap) -->

    <script src="{{root}}assets/js/app.js"></script>
    
</body>
</html>
