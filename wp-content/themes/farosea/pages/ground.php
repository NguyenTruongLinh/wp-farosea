<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package farosea
 *
 * Template name: Mat bang
 */

get_header();
?>
    <div id="menu-center" class="sliderpage">
        <ul>
            <li><a href="#mb-01" class="active"><span></span></a></li>
            <li><a href="#mb-02"><span></span></a></li>
            <li><a href="#footer-sc"><span></span></a></li>
        </ul>
    </div>

    <div class="bg-header"></div>

    <div class="main-ct" id="mb-01">
        <img src="<?php echo get_template_directory_uri() ?>/images/bg-mb-1.jpg" alt="" class="wow fadeIn" data-wow-delay="0.3s" />
        <div class="opacity-b50"></div>
        <div class="tit-mb"><img src="<?php echo get_template_directory_uri() ?>/images/tit-mb-1.png" alt="" class="wow fadeIn" data-wow-delay="0.4s" /></div>
        <div class="view-mb-1a wow fadeIn" data-wow-delay="0.4s">
            <ul>
                <li class="m-1">
                    <span>Căn hộ loại A</span>
                    <p>Diện tích tim đường: 31.58 m2</p>
                    <p>Diện tích thông thủy: 28.96 m2</p>
                </li>
                <li class="m-2">
                    <span>CĂN HỘ LOẠI F (căn góc)</span>
                    <p>Diện tích tim đường: 40.52 m2</p>
                    <p>Diện tích thông thủy: 37.57 m2</p>
                </li>
                <li class="m-3">
                    <span>Căn hộ loại E (căn góc)</span>
                    <p>Diện tích tim đường: 47.57 m2</p>
                    <p>Diện tích thông thủy: 41.28 m2</p>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-ct" id="mb-02">
        <img src="<?php echo get_template_directory_uri() ?>/images/bg-mb-2.jpg" alt="" class="wow fadeIn" data-wow-delay="0.3s" />
        <div class="opacity-b50"></div>
        <div class="tit-mb">
            <img src="<?php echo get_template_directory_uri() ?>/images/tit-mb-2.png" alt="" class="wow fadeIn" data-wow-delay="0.4s" />
        </div>
        <div class="view-mb-1a wow fadeIn" data-wow-delay="0.4s">
            <ul>
                <li class="m-1">
                    <span>Căn hộ loại A</span>
                    <p>Diện tích tim đường: 31.58 m2</p>
                    <p>Diện tích thông thủy: 28.96 m2</p>
                </li>
                <li class="m-2">
                    <span>Căn hộ loại E (căn góc)</span>
                    <p>Diện tích tim đường: 47.57 m2</p>
                    <p>Diện tích thông thủy: 41.28 m2</p>
                </li>
                <li class="m-3">
                    <span>Căn hộ loại B</span>
                    <p>Diện tích tim đường: 31.98 m2</p>
                    <p>Diện tích thông thủy: 29.58 m2</p>
                </li>
                <li class="m-1">
                    <span>Căn hộ loại F (căn góc)</span>
                    <p>Diện tích tim đường: 40.52 m2</p>
                    <p>Diện tích thông thủy: 37.57 m2</p>
                </li>
                <li class="m-2">
                    <span>Căn hộ loại C</span>
                    <p>Diện tích tim đường: 31.56 m2</p>
                    <p>Diện tích thông thủy: 28.73 m2</p>
                </li>
                <li class="m-3">
                    <span>Căn hộ loại G (căn góc)</span>
                    <p>Diện tích tim đường: 43.19 m2</p>
                    <p>Diện tích thông thủy: 39.39 m2</p>
                </li>
                <li class="m-1">
                    <span>Căn hộ loại D</span>
                    <p>Diện tích tim đường: 39.08 m2</p>
                    <p>Diện tích thông thủy: 36.16 m2</p>
                </li>
                <li class="m-2">
                    <span>Căn hộ loại H (căn góc)</span>
                    <p>Diện tích tim đường: 43.26 m2</p>
                    <p>Diện tích thông thủy: 39.74 m2</p>
                </li>
            </ul>
        </div>
    </div>

<?php
get_footer();
