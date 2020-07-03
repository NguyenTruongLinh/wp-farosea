<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package farosea
 */

get_header();
?>

<?php while ( have_posts() ) :the_post(); ?>
<div class="post-wrapper">
    <div class="post-banner_img" style="background: url(<?php the_post_thumbnail_url() ?>); background-attachment: fixed; background-position: center top; background-repeat: no-repeat; background-size: cover;">
        <h2><?php the_title(); ?></h2>
    </div>
    <div class="container-full">
        <div class="content">
            <?php the_content(); ?>
        </div>
    </div>
</div>
<?php endwhile; ?>

<?php
get_footer();
