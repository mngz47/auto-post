<?php

include  'wp-includes/post.php';

if($_POST['title'] && $_POST['content'] && $_POST['category']){
	
// Create post object
$my_post = array(
  'post_title'    => $_POST['title'],
  'post_content'  => $_POST['content'],
  'post_status'   => 'publish',
  'post_author'   => 1,
  'post_category' => $_POST['category']
);
 
// Insert the post into the database
echo wp_insert_post( $my_post );
	
}

?>