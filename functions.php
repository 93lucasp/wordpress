<?php 
    register_sidebar(array(
        'name'          => __( 'Sidebar cat blog' ),
        'id'            => 'unique-sidebar-id',    // ID should be LOWERCASE  ! ! !
        'description'   => '',
        'class'         => '',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>' )
    );
    
    register_nav_menu('main', 'Main navigation menu');
    
    query_posts( array( 'post_type' => array('post', 'portfolio') ) );

?>