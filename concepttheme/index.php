<?php

get_header();
?>

<style type="text/css">
	img
	{
		height: 300px;
		width:500px;
	}

</style>
<section style="height:700px;overflow-y: scroll;">
<?php

 while ( have_posts() )
  {

   the_post() 
   ?>
<div style="margin-top: 50px;margin-left:500px;width:500px;">
	<h1 style="font-size: 36px;font-weight: bolder;"><a href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></h1></a>
<p style="padding: 5px;"><?php
 $content= get_the_content(); 
echo mb_strimwidth($content, 0, 100, '...'); 

?> 
<a href="<?php echo the_permalink(); ?>">read more</a></p>
<hr>
<p style="font-size: 30px;">Author:-  <?php the_author(); ?>  |  Date:-  <?php the_date('Y-M-D'); ?></p>
</div>
<?php
}
?>
</section>


<?php
get_footer();
?>