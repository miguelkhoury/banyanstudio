<?php
/**
 * The template used for displaying the contact page content in front-page.php
 *
 * @package _s
 */
?>



<?php
$id=5211;

$post = get_post($id);

$title = apply_filters('the_title', $post->post_title);?>

<h1> <?php echo $title; ?> </h1>

<?php $content = apply_filters('the_content', $post->post_content);

echo $content; ?>
