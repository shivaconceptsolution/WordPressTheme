<?php

get_header();
?>
<section style="overflow-y: scroll;">

	<div style="float:left;width:70%;">
<?php

 while ( have_posts() )
  {
   the_post() 
   ?>

<p><?php the_content(); ?></p>

<?php
}
?>

</div>
<div style="float:right; width:30%;">

<?php
dynamic_sidebar('sidebar-1');

?>
<hr>
<?php
dynamic_sidebar('sidebar-2');

?>
</div>
</section>


<?php
get_footer();
?>