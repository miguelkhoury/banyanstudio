<?php
$roots_includes = array(
	'inc/init.php',
	'inc/scripts.php',
	'inc/customize.php',
	'inc/template-tags.php',
);

foreach ( $roots_includes as $file ) {
	if ( ! $filepath = locate_template( $file ) ) {
		trigger_error( sprintf( __( 'Error locating %s for inclusion', 'flat' ), $file ), E_USER_ERROR );
	}
	require_once $filepath;
}
unset( $file, $filepath ); 












add_filter('wp_list_pages','add_search_box', 10, 2);
add_filter('wp_nav_menu_items','add_search_box', 10, 2);
function add_search_box($items, $args) {

        ob_start();
        get_search_form();
        $searchform = ob_get_contents();
        ob_end_clean();

        $items .= '<li>' . $searchform . '</li>';

    return $items;
}    









?>
