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

    <div class="main-ct" id="kieuhanh">
        <img src="<?php echo get_template_directory_uri() ?>/images/pic-vang.jpg" alt="" class="wow fadeIn" data-wow-delay="0.3s" />
        <div class="opacity-b50"></div>
        <div class="box-ct-2">
            <div class="title-01 tt-vang-1 wow fadeInUp" data-wow-delay="0.5s">
                <p>Tâm điểm</p>
                <a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/vang-vn.png" alt="" /></a>
                <p>Kết nói danh lam</p>
            </div>
            <div class="ctent-01 ct-vang-1 wow fadeInUp" data-wow-delay="0.8s">
                <p>Tọa lạc tại mặt tiền tuyến đường ven biển quốc gia ĐT719, The Farosea sở hữu địa thế phong thủy vô giá “Tọa sơn hướng hải”, mang đến không gian sống khoáng đạt, vượng khí dồi dào và tài lộc viên mãn</p>
                <p>Đặc biệt, với vị trí nằm trong tâm điểm vùng du lịch và giữa các quần thể nghỉ dưỡng cao cấp, The Farosea chính là “điểm nối liên hoàn” các thắng cảnh du lịch nổi tiếng của Kê Gà và Bình Thuận. Từ đây, chỉ mất 5 phút để di chuyển đến ngọn Hải Đăng cổ, núi Tà Cú, chùa Linh Sơn Trường Thọ và tượng Phật nằm, suối nước nóng Bưng Thị, bãi Đá Nhảy, dinh Thầy Thím..</p>
            </div>
        </div>
    </div>
    <div class="maps"><img src="<?php echo get_template_directory_uri() ?>/images/maps.jpg" alt="" class="wow fadeIn" data-wow-delay="0.3s" /></div>

<?php
get_footer();
