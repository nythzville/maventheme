<?php
/*
*	Primary Pages on Admin
*/

if ( ! class_exists( 'WP_List_Table' ) ) {
		require_once( ABSPATH . 'wp-admin/includes/class-wp-list-table.php' );
	}


function add_primary_menu() {
	global $submenu;

	add_menu_page('Primary Pages', 'All Primary Pages', 1, 'primary-menu', 'primary_menu', 'dashicons-menu', 1);

	// Adding Primary sub menu
	$menu_name = 'primary';
	$locations = get_nav_menu_locations();
	$menu_id = $locations[ $menu_name ] ;
	$menu_items = wp_get_nav_menu_items($menu_id);

	// 
	foreach ($menu_items as $item) {
		$url = 'post.php?post='.$item->object_id.'&action=edit';
		/* Adding Sub Menu */		
		add_submenu_page('primary-menu', $item->title, $item->title, 1, $url );
	}



}

function primary_menu(){
	
	$option = 'per_page';
	$args   = [
		'label'   => 'Menus',
		'default' => 5,
		'option'  => 'menus_per_page'
	];

	add_screen_option( $option, $args );

	?>
	<div class="wrap">
		<h2>Main Pages</h2>
		<div id="poststuff">
			<div id="post-body" class="metabox-holder columns-2">
				<div id="post-body-content">
					<div class="meta-box-sortables ui-sortable">
						<form method="post">
						<?php
						
						$customers =  new Menu_List();
						$customers->prepare_items();
						$customers->display();

						?>
					</form>
					</div>
				</div>
			</div>
			<br class="clear">
		</div>
	</div>
	<?php

}
add_action('admin_menu', 'add_primary_menu');

class Menu_List extends WP_List_Table {
	/** Class constructor */
	public function __construct() {

		parent::__construct( [
			'singular' => __( 'Menu', 'sp' ), //singular name of the listed records
			'plural'   => __( 'Menus', 'sp' ), //plural name of the listed records
			'ajax'     => false //should this table support ajax?

		] );
	}

	function get_columns(){
	  $columns = array(
	  	'cb'        => '<input type="checkbox" />',
	    'title'    		=> 'Title',
	    'url'      		=> 'URL'

	  );
	  return $columns;
	}

	function prepare_items() {

		$items = $this->get_menus();
	  	$columns = $this->get_columns();
	  	$this->process_bulk_action();
	  	$current_page = $this->get_pagenum();
	  	$total_items  = count($items);
	  	$per_page = 10;
	  	$this->set_pagination_args( [
		    'total_items' => $total_items, //WE have to calculate the total number of items
		    'per_page'    => $per_page //WE have to determine how many items to show on a page
		  ] );
	  
	  $hidden = array();
	  $sortable = $this->get_sortable_columns();
	  $this->_column_headers = array($columns, $hidden, $sortable);
	  $this->items = $items;
	}

	function column_default( $item, $column_name ) {
	  switch( $column_name ) { 
	    case 'title':
	    case 'url':

	      return $item[ $column_name ];
	    default:
	      return print_r( $item, true ) ; //Show the whole array for troubleshooting purposes
	  }
	}

	function get_menus(){

		$menu_name = 'primary';
		$locations = get_nav_menu_locations();
		$menu_id = $locations[ $menu_name ] ;
		$menu_obj = wp_get_nav_menu_items($menu_id);
		$menu_arr = [];

		foreach ($menu_obj as $item) {
			array_push($menu_arr, $this->objectToArray($item));
		}
		return $menu_arr;


	}

	// Sorting
	function get_sortable_columns() {
	  $sortable_columns = array(
	    'title' => array('title',false),
	    'url'   => array('url',false)
	  );
	  return $sortable_columns;
	}

	function get_bulk_actions() {
	  $actions = array(
	    'delete'    => 'Delete'
	  );
	  return $actions;
	}

	function column_title($item) {
	  $actions = array(
	            'edit'      => sprintf('<a href="post.php?post=%s&action=%s">Edit</a>',$item['object_id'],'edit'),
	            'delete'    => sprintf('<a href="post.php?post=%s&action=%s">Delete</a>',$item['object_id'],'delete'),
	            'view'    	=> sprintf('<a href="%s">View</a>',$item['url']),

	        );

	  return sprintf('%1$s %2$s', $item['title'], $this->row_actions($actions) );
	}

	function column_cb($item) {
        return sprintf(
            '<input type="checkbox" name="menu[]" value="%s" />', $item['ID']
        );    
    }
	

	// Bulk Action
	public function process_bulk_action() {

	  //Detect when a bulk action is being triggered...
	  if ( 'delete' === $this->current_action() ) {

	    // In our file that handles the request, verify the nonce.
	    $nonce = esc_attr( $_REQUEST['_wpnonce'] );

	    if ( ! wp_verify_nonce( $nonce, 'sp_delete_customer' ) ) {
	      die( 'Go get a life script kiddies' );
	    }
	    else {
	      self::delete_customer( absint( $_GET['customer'] ) );

	      wp_redirect( esc_url( add_query_arg() ) );
	      exit;
	    }

	  }

	  // If the delete bulk action is triggered
	  if ( ( isset( $_POST['action'] ) && $_POST['action'] == 'bulk-delete' )
	       || ( isset( $_POST['action2'] ) && $_POST['action2'] == 'bulk-delete' )
	  ) {

	    $delete_ids = esc_sql( $_POST['bulk-delete'] );

	    // loop over the array of record IDs and delete them
	    foreach ( $delete_ids as $id ) {
	      self::delete_customer( $id );

	    }

	    wp_redirect( esc_url( add_query_arg() ) );
	    exit;
	  }
	}


	// Convert object to array
	function objectToArray($d) 
	{
	    if (is_object($d)) {
	        $d = get_object_vars($d);
	    }

	    if (is_array($d)) {
	
	        return $d;
	    } else {
	        return $d;
	    }
	}
}