<?php
/**
 * The template used for displaying the about page content in front-page.php
 *
 * @package _s
 */
?>




<?php
$id=5232;

$post = get_post($id);

$title = apply_filters('the_title', $post->post_title);

echo $title;

$content = apply_filters('the_content', $post->post_content);

echo $content;
?>