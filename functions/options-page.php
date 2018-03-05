<?php

if (function_exists('acf_add_options_page')) {
    $author = wp_get_current_user();
    if(isset($author->roles[0])){
        $current_role = $author->roles[0];
    }else{
        $current_role = 'no_role';
    }

    if($current_role == 'administrator' || $current_role == 'editor'){
        acf_add_options_page(array(
            'page_title' => 'Colors & Logos',
            'menu_title' => 'Colors & Logos ',
            'menu_slug' => 'custom-acf-menu',
            'capability' => 'edit_posts',
            'redirect' => true,
            'position' => 20,
            'icon_url' => 'dashicons-admin-appearance',
            
        ));

        acf_add_options_sub_page(array(
            'page_title' => 'Static fields',
            'menu_title' => 'Static fields',
            'parent_slug' => 'custom-acf-menu',
        ));
    }
}