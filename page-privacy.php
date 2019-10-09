<?php
/* Template Name: Page Privacy */ 

get_header();

$privacy_content = get_field("privacy_content", $post->ID);

echo '<div class="medium privacy_content">'.$privacy_content.'</div>';

?>