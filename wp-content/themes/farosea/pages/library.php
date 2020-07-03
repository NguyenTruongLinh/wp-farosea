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
                <ul id="flexiselDemo31">
                    <li><div class="boxpros1"><a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/pic-dv-1.jpg" alt="" /></a></div></li>
                    <li><div class="boxpros1"><a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/pic-dv-2.jpg" alt="" /></a></div></li>
                    <li><div class="boxpros1"><a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/pic-dv-1.jpg" alt="" /></a></div></li>
                    <li><div class="boxpros1"><a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/pic-dv-2.jpg" alt="" /></a></div></li>
                    <li><div class="boxpros1"><a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/pic-dv-1.jpg" alt="" /></a></div></li>
                    <li><div class="boxpros1"><a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/pic-dv-2.jpg" alt="" /></a></div></li>
                </ul>
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
                <ul id="flexiselDemo32">
                    <li><div class="boxpros1"><a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/pic-dv-1.jpg" alt="" /></a></div></li>
                    <li><div class="boxpros1"><a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/pic-dv-2.jpg" alt="" /></a></div></li>
                    <li><div class="boxpros1"><a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/pic-dv-1.jpg" alt="" /></a></div></li>
                    <li><div class="boxpros1"><a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/pic-dv-2.jpg" alt="" /></a></div></li>
                    <li><div class="boxpros1"><a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/pic-dv-1.jpg" alt="" /></a></div></li>
                    <li><div class="boxpros1"><a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/pic-dv-2.jpg" alt="" /></a></div></li>
                </ul>
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
