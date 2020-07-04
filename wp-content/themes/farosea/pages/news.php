<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package farosea
 *
 * Template name: Tin tuc
 */

get_header();
?>

    <div class="bg-header"></div>

    <div class="ct-news-page">
        <div class="container-full">
            <div class="row">
                <?php
                    global $post;
                    $posts = get_posts();
                    if ($posts) :
                ?>
                    <?php foreach ($posts as $post) : ?>
                        <div class="col-md-4 col-sm-6 ct_post">
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
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php
get_footer();
