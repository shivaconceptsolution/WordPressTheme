<!DOCTYPE html>
<html>
<head>
	<title><?php echo wp_title(); ?></title>
  
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css" />

	<?php

	wp_head();
	?>
</head>
<body>
<div id="container">

<header>
<?php
wp_nav_menu(array("theme_location"=>"primary"));

?>

<p style="color:black;font-weight: bolder; font-size: 24px;margin-top: 30px;margin-left: 50px;"><a href="<?php echo home_url(); ?>"><?php bloginfo('title'); ?> </a></p>
</header>


