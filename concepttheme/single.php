<?php

get_header();
?>
<section style="height: 700px; overflow-y: scroll; ">

	<div style="background-color: blue;">
<?php

 if ( have_posts() )
  {
   the_post() 
   ?>
<h1 style="color:white;font-size: 36px;"><?php the_title(); ?></h1>
<p><?php the_content(); ?></p>

<?php
}
?>
</div>
</section>


<?php
get_footer();
?>