<?php 


function dtd_post_types() {
   register_post_type('staff', array(
      'show_in_rest' => true,
      'supports' => array('title', 'editor', 'thumbnail'),
      'public' => true,
      'labels' => array(
            'name' => 'Staffs',
            'add_new_item' => 'Add New Staff',
            'edit_item' => 'Edit Staff',
            'all_items' => 'All Staff',
            'singular_name' => 'Staff'
      ),
      'menu_icon' => 'dashicons-admin-users'
   ));
}



?>