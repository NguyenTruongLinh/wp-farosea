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

    <div class="related-news">
        <div class="container-full">
            <h3 class="title">TIN TỨC KHÁC</h3>
            <?php
            global $post;
            $posts = get_posts([
                'post_status' => 'publish',
                'showposts' => 3,
                'offset' => 1
            ]);
            if ($posts) :
            ?>
            <div class="row">
                <?php foreach ($posts as $post) : ?>
                <div class="col-md-4 col-sm-6 col-xs-6 ct_post">
                    <div class="img-news shine_img">
                        <a href="<?php the_permalink(); ?>">
                            <img src="<?php the_post_thumbnail_url() ?>" alt="<?php the_title(); ?>" class="img-responsive">
                        </a>
                    </div>
                    <h3>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h3>
                    <p><?php the_excerpt() ?></p>
                    <p class="date">Ngày đăng: 05-12-2019</p>
                    <a href="<?php the_permalink(); ?>" class="view_news">Chi tiết</a>
                </div>
                <?php endforeach;?>
            </div>
            <?php endif; ?>
        </div>
    </div>

<?php
get_footer();
