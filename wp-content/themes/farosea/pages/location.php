<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package farosea
 *
 * Template name: Vi tri
 */

get_header();
?>

    <div class="bg-header"></div>

    <div class="main-ct location-page" id="kieuhanh">
        <video id="video-viewport" poster="/vcommon/top/video/video_firstframe.jpg" autoplay="autoplay" playsinline loop muted fullscreen>
            <source src="<?php echo get_template_directory_uri() ?>/images/maps_composition.mp4" type="video/mp4">
        </video>
        <div class="opacity-b50"></div>
        <div class="box-ct-2">
            <div class="title-01 tt-vang-1 wow fadeInUp" data-wow-delay="0.5s">
                <p>Tâm điểm</p>
                <a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/vang-vn.png" alt="" /></a>
                <p>Kết nối danh lam</p>
            </div>
            <div class="ctent-01 ct-vang-1 wow fadeInUp" data-wow-delay="0.8s">
                <p>Tọa lạc tại mặt tiền tuyến đường ven biển quốc gia ĐT719, The Farosea sở hữu địa thế phong thủy vô giá “Tọa sơn hướng hải”, mang đến không gian sống khoáng đạt, vượng khí dồi dào và tài lộc viên mãn</p>
                <p>Đặc biệt, với vị trí nằm trong tâm điểm vùng du lịch và giữa các quần thể nghỉ dưỡng cao cấp, The Farosea chính là “điểm nối liên hoàn” các thắng cảnh du lịch nổi tiếng của Kê Gà và Bình Thuận. Từ đây, chỉ mất 5 phút để di chuyển đến ngọn Hải Đăng cổ, núi Tà Cú, chùa Linh Sơn Trường Thọ và tượng Phật nằm, suối nước nóng Bưng Thị, bãi Đá Nhảy, dinh Thầy Thím..</p>
            </div>
        </div>
    </div>
    <div class="maps">
        <iframe class="wow fadeIn" data-wow-delay="0.3s" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.85579065647!2d108.0119764147218!3d10.745595662700564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175d545522729c9%3A0x21ed5123ad93072a!2sThe%20Farosea!5e0!3m2!1sen!2s!4v1593705955295!5m2!1sen!2s" style="padding: 89px 40px 40px 40px; width: 100%; height: 550px;" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>

<?php
get_footer();
