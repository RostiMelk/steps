<?php 

function remove_menus(){
  
    remove_menu_page( 'jetpack' );                    //Jetpack* 
    remove_menu_page( 'edit.php' );                   //Posts
    remove_menu_page( 'edit-comments.php' );          //Comments
  
}
add_action( 'admin_menu', 'remove_menus' );

