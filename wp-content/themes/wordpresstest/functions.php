<?php
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Home right sidebar',
		'id'            => 'home_right_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );
  register_widget( "Fred" );
}
add_action( 'widgets_init', 'arphabet_widgets_init' );


class Fred extends WP_Widget{
  function __construct() {
    parent::__construct("Fred","Freddy");
  }
  function widget($args, $instance) {
    ?>
    <h1>FRED</h1>
    <?php
  }
}
