<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package farosea
 *
 * Template name: Thu vien
 */

get_header();
?>
    <div id="menu-center" class="sliderpage">
        <ul>
            <li><a href="#hinhanh" class="active"><span></span></a></li>
            <li><a href="#video"><span></span></a></li>
            <li><a href="#brochure"><span></span></a></li>
        </ul>
    </div>

    <div class="index-thuvien" id="hinhanh">
        <img src="<?php echo get_template_directory_uri() ?>/images/farosea-thuvien.png">
        <div class="list-thuvien">
            <p>Hình ảnh</p>
        </div>
        <div class="top-301">
            <div class="listpros1">
                <div class="owl-carousel owl-theme owl-library">
                    <?php $getposts = new WP_query(); $getposts->query('post_status=publish&post_type=gallery'); ?>
                    <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                    <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                    <article class="gallery">
                        <div class="boxpros1">
                            <a class="children" href="<?php echo get_the_post_thumbnail_url() ?>">
                                <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="" />
                            </a>
                            <?php $gallery = get_field('thu-vien-con') ?>
                            <?php foreach ($gallery as $item => $value) : ?>
                                <a class="children hidden" href="<?php echo $value ?>">
                                    <img src="<?php echo $value ?>" alt="" />
                                </a>
                            <?php endforeach; ?>
                            <p class="title"><?php the_title() ?></p>
                        </div>
                    </article>
                    <?php endwhile; wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
    </div>

    <div class="index-thuvien" id="video">
        <img src="<?php echo get_template_directory_uri() ?>/images/farosea-thuvien.png">
        <div class="list-thuvien">
            <p>Video</p>
        </div>
        <div class="top-301">
            <div class="listpros1">
                <div id="video-gallery" class="owl-carousel owl-theme owl-library">
                    <?php $getposts = new WP_query(); $getposts->query('post_status=publish&post_type=videos'); ?>
                    <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                    <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                        <article data-src="<?php the_field('video_con'); ?>">
                            <div class="boxpros1">
                                <img src="<?php echo get_template_directory_uri() ?>/images/youtube-thumbnail-1.jpg" alt="" />
                            </div>
                        </article>
                    <?php endwhile; wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
    </div>

    <div class="index-thuvien" id="brochure">
        <img src="<?php echo get_template_directory_uri() ?>/images/farosea-thuvien.png">
        <div class="list-thuvien">
            <p>Brochure</p>
        </div>
        <div class="main-brochure">
            <a href="<?php echo get_template_directory_uri() ?>/images/b2_Farosea_brochure_v7_2504.pdf" download="<?php echo get_template_directory_uri() ?>/images/b2_Farosea_brochure_v7_2504.pdf"><img src="<?php echo get_template_directory_uri() ?>/images/pic-brochure.png" alt="" /></a>
        </div>
    </div>

<?php
get_footer();
