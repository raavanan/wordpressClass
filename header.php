<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title><?php bloginfo('name'); ?></title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/stylesheets/base.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/stylesheets/skeleton.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/stylesheets/flexslider.css" type="text/css">

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico">
	<link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_url'); ?>/images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_url'); ?>/images/apple-touch-icon-114x114.png">

</head>
<body>



	<!-- Primary Page Layout
	================================================== -->

	<!-- Delete everything in this .container and get started on your own site! -->

	
        <header>
            <div class="container">

		<div class="five columns">
            <div class="brand">
			<h1 class="remove-bottom" style="margin-top: 40px"><?php bloginfo('name'); ?></h1>
			<h5><?php bloginfo('description'); ?></h5>
			</div>
		</div><!--Logo-->
                <div class="qoute six columns offset-by-four omega">
                    "A healthy lifestyle + food blog, with the mission of making healthy eating and physical training simple & easy..."
                    </div>
                <div class="four columns search offset-by-eleven">
                <form action="#" method="get">
                <input type="text" name="search" id="search-text"><input type="submit" value="S" id="search">
                                            
                </form>
               </div><!-- Search Form-->
              <nav class="fourteen columns offset-by-one">
            <?php wp_nav_menu(array('container_class' => 'main_nav', 'container' => 'nav'));?>
            
            </nav>   
            
            
            </div><!--container-->
          <?php wp_head(); ?>
            </header>