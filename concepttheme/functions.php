<?php

register_nav_menus(array(
  'primary' => __( 'Primary Menu', 'concepttheme'),
  'footer' => __( 'Footer Menu', 'concepttheme')
 ) );

register_sidebar( array(
  'name'          => __( 'First Sidebar', 'my theme' ),
  'description'   => __( 'IT IS FOR LATEST NEWS', ' theme' ),
  'id'            => 'sidebar-1',
  
 ));


register_sidebar( array(
  'name'          => __( 'Second Sidebar', 'my theme' ),
  'description'   => __( 'IT IS FOR LATEST Message', 'my theme' ),
  'id'            => 'sidebar-2',
  
 ));
 ?>