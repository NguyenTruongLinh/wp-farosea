<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package farosea
 *
 * Template name: Gioi thieu
 */

get_header();
?>

    <div class="bg-header"></div>

    <div class="main-ct">
        <img src="<?php echo get_template_directory_uri() ?>/images/pic-gt-1.jpg" alt="" class="wow fadeIn" data-wow-delay="1s" />
        <div class="box-gt-1">
            <div class="title-04 wow fadeInUp" data-wow-delay="1s">
                <p>Tổng quan dự án</p>
            </div>
            <div class="ctent-04 wow fadeInRight" data-wow-delay="1s">
                <ul>
                    <li class="tqda-01">
                        <p>Tên dự án: The Farosea</p>
                        <p>Chủ đầu tư: Công ty Cổ phần Du lịch Nhà Bè Bình Thuận</p>
                    </li>
                    <li class="tqda-02">
                        <p>Vị trí: mặt tiền đường ven biển quốc gia ĐT719, xã Thuận Quí, H.Hàm Thuận Nam, tỉnh Bình Thuận.</p>
                    </li>
                    <li class="tqda-03">
                        <p>Diện tích: 3.700 m2</p>
                        <p>Tổng diện tích: 06 ha</p>
                    </li>
                    <li class="tqda-04">
                        <p>Sản phẩm: 360 căn hộ nội thất hoàn thiện</p>
                        <p>Thời gian bàn giao dự kiến: Quý III/2022</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="matbangxaydung">
        <div class="title-05 wow fadeInUp" data-wow-delay="1s">
            <p>Mặt bằng dự án</p>
        </div>
        <img src="<?php echo get_template_directory_uri() ?>/images/matbangxaydung.jpg" alt="" class="wow fadeIn" data-wow-delay="1s" />
    </div>

<?php
get_footer();
