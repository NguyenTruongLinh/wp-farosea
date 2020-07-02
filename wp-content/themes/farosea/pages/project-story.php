<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package farosea
 *
 * Template name: Cau chuyen du an
 */

get_header();
?>
    <div id="menu-center" class="sliderpage">
        <ul>
            <li><a href="#kega" class="active"><span></span></a></li>
            <li><a href="#kieuhanh"><span></span></a></li>
            <li><a href="#binhminh"><span></span></a></li>
            <li><a href="#lytuong"><span></span></a></li>
            <li><a href="#footer-sc"><span></span></a></li>
        </ul>
    </div>

    <div class="bg-header"></div>

    <div class="main-ct" id="kega">
        <img src="<?php echo get_template_directory_uri() ?>/images/pic-kega.jpg" alt="" class="wow fadeIn" data-wow-delay="0.3s" />
        <div class="opacity-b50"></div>
        <div class="box-ct-1">
            <div class="title-01 tt-kega wow fadeInUp" data-wow-delay="0.5s">
                <a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/kega-vn.png" alt="" /></a>
                <p>Ốc đảo nơi thiên đường</p>
            </div>
            <div class="ctent-01 ct-kega wow fadeInUp" data-wow-delay="0.8s">
                <p>Tọa lạc ngay cửa ngõ du lịch Bình Thuận, Kê Gà không chỉ được biết đến như một thủ phủ resort đang trỗi dậy mà còn là một ốc đảo có cảnh sắc thiên nhiên tuyệt mỹ với biển ngọc lấp lánh, cát trắng mịn màng như dãi lụa óng ánh tỏa sáng dưới ánh mặt trời.</p>
                <p>Cũng bởi vẻ đẹp thiên nhiên nguyên sơ, mộc mạc tựa bức bích họa sống động mà Kê Gà được mệnh danh là Hawaii của người Việt. Một vùng đất mang đến vô vàn trải nghiệm khám phá hấp dẫn cho du khách.</p>
            </div>
        </div>
    </div>

    <div class="main-ct" id="kieuhanh">
        <img src="<?php echo get_template_directory_uri() ?>/images/pic-kieuhanh.jpg" alt="" class="wow fadeIn" data-wow-delay="0.3s" />
        <div class="opacity-b50"></div>
        <div class="box-ct">
            <div class="title-01 tt-kieuhanh-1 wow fadeInUp" data-wow-delay="0.5s">
                <p>Ngọn hải đăng</p>
                <a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/kieuhanh-vn-1.png" alt="" /></a>
                <p>GIỮA THỦ PHỦ RESORT MỚI</p>
            </div>
            <div class="ctent-01 ct-kieuhanh-1 wow fadeInUp" data-wow-delay="0.8s">
                <p>Lấy cảm hứng từ vẻ đẹp hùng vĩ của ngọn hải đăng Kê Gà, Farosea như một biểu tượng kiến trúc trường tồn giữa thiên nhiên hùng vĩ. Taị the Farosea, mỗi sớm mai thức dậy, du khách mới ngắm trọn vẹn ánh dương rạng ngời, vẻ đẹp thiên nhiên tuyệt mỹ của vịnh Kê Gà.</p>
            </div>
        </div>
    </div>

    <div class="main-ct" id="binhminh">
        <img src="<?php echo get_template_directory_uri() ?>/images/pic-binhminh.jpg" alt="" class="wow fadeIn" data-wow-delay="0.3s" />
        <div class="box-ct">
            <div class="title-01 tt-binhminh wow fadeInUp" data-wow-delay="0.5s">
                <p>Nơi ngắm</p>
                <a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/binhminh-vn.png" alt="" /></a>
                <p>Đẹp nhất Việt Nam</p>
            </div>
            <div class="ctent-01 ct-binhminh wow fadeInUp" data-wow-delay="0.8s">
                <p>Lấy cảm hứng từ vẻ đẹp hùng vĩ của ngọn hải đăng Kê Gà, Farosea như một biểu tượng kiến trúc trường tồn giữa thiên nhiên hùng vĩ. Taị the Farosea, mỗi sớm mai thức dậy, du khách mới ngắm trọn vẹn ánh dương rạng ngời, vẻ đẹp thiên nhiên tuyệt mỹ của vịnh Kê Gà.</p>
            </div>
        </div>
    </div>]

    <div class="main-ct" id="lytuong">
        <img src="<?php echo get_template_directory_uri() ?>/images/pic-lytuong.jpg" alt="" class="wow fadeIn" data-wow-delay="0.3s" />
        <div class="opacity-b50"></div>
        <div class="box-ct-1">
            <div class="title-01 tt-lytuong wow fadeInUp" data-wow-delay="0.5s">
                <p>Điểm đến</p>
                <a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/lytuong-vn.png" alt="" /></a>
                <p>Nơi vịnh thiên đường</p>
            </div>
            <div class="ctent-01 ct-lytuong wow fadeInUp" data-wow-delay="0.8s">
                <p>Lấy cảm hứng từ vẻ đẹp hùng vĩ của ngọn hải đăng Kê Gà, Farosea như một biểu tượng kiến trúc trường tồn giữa thiên nhiên hùng vĩ. Taị the Farosea, mỗi sớm mai thức dậy, du khách mới ngắm trọn vẹn ánh dương rạng ngời, vẻ đẹp thiên nhiên tuyệt mỹ của vịnh Kê Gà.</p>
            </div>
        </div>
    </div>

<?php
get_footer();
