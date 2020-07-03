<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package farosea
 */

get_header();
?>
    <div id="menu-center" class="sliderpage">
        <ul>
            <li><a href="#video-sc" class="active"><span></span></a></li>
            <li><a href="#kieuhanh"><span></span></a></li>
            <li><a href="#tongquan"><span></span></a></li>
            <li><a href="#vang"><span></span></a></li>
            <li><a href="#thanghoa"><span></span></a></li>
            <li><a href="#xanh"><span></span></a></li>
            <li><a href="#thongminh"><span></span></a></li>
            <li><a href="#news-sc"><span></span></a></li>
            <li><a href="#footer-sc"><span></span></a></li>
        </ul>
    </div>

    <div class="section hp-video wow fadeIn" data-wow-delay="0.3s" id="video-sc">
        <video id="video-viewport" poster="/vcommon/top/video/video_firstframe.jpg" autoplay loop muted controls fullscreen>
            <source src="<?php echo get_template_directory_uri() ?>/images/farosea.mp4" type="video/mp4">
        </video>
        <div class="note-banner wow fadeInRight" data-wow-delay="0.5s">
            <img src="<?php echo get_template_directory_uri() ?>/images/note-banner.png" alt="" />
        </div>
    </div>

    <div class="section main-05" id="kieuhanh">
        <div class="ShowBan-kieuhanh">
            <div class="title-01 tt-kieuhanh wow fadeInUp" data-wow-delay="0.3s">
                <p>Ngọn hải đăng</p>
                <a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/kieuhanh-vn.png" alt="" /></a>
                <p>GIỮA THỦ PHỦ RESORT MỚI</p>
            </div>
            <div class="ctent-01 ct-kieuhanh wow fadeInUp" data-wow-delay="0.5s">
                <p>Lấy cảm hứng từ vẻ đẹp hùng vĩ của ngọn hải đăng Kê Gà, Farosea như một biểu tượng kiến trúc trường tồn giữa thiên nhiên hùng vĩ. Taị the Farosea, mỗi sớm mai thức dậy, du khách mới ngắm trọn vẹn ánh dương rạng ngời, vẻ đẹp thiên nhiên tuyệt mỹ của vịnh Kê Gà.</p>
                <a href="#">Tìm hiểu thêm</a>
            </div>
        </div>
        <div class="img-kieuhanh wow fadeInRight" data-wow-delay="0.4s">
            <img src="<?php echo get_template_directory_uri() ?>/images/ban1-1.jpg" />
        </div>
    </div>

    <div class="section main-01" id="tongquan">
        <div class="ban1">
            <div class="ShowBan-01 wow fadeInUp" data-wow-delay="0.5s">
                <img class="img-position-a" src="<?php echo get_template_directory_uri() ?>/images/ban2.jpg" alt="">
                <div class="opacity-b50"></div>
                <div class="container-full">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="title-02 tt-duan">
                                <p>GIỚI THIỆU DỰ ÁN</p>
                                <span>TỔNG QUAN DỰ ÁN</span>
                            </div>
                            <div class="ctent-01 ct-duan">
                                <p>The Farosea nằm trong quần thể du lịch nghỉ dưỡng hiện hữu thu hút nhiều du khách.</p>
                                <p>&nbsp;</p>
                                <p>Dự án đươc quy hoạch theo phong cách phóng khoáng, hiện đại. Bên cạnh đó, bãi tắm hoàn toàn riêng tư, khép kín chỉ dành phục vụ cho cư dân và du khách nội khu là đặc quyền mà Farosa dành tặng những chủ nhân tương lai.</p>
                                <a class="ct-title" href="<?php echo home_url()?>/gioi-thieu">Tìm hiểu thêm</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section main-04" id="vang">
        <div class="ShowBan-tongquan">
            <div class="title-01 tt-vang wow fadeInUp" data-wow-delay="0.3s">
                <p>Tâm điểm</p>
                <a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/vang-vn.png" alt="" /></a>
                <p>Kết nối danh lam</p>
            </div>
            <div class="ctent-01 ct-vang wow fadeInUp" data-wow-delay="0.5s">
                <p>The Farosea tọa lạc ngay mặt tiền ĐT 719 – tuyến đường ven biển Quốc gia đẹp nhất Việt Nam. Đặc biệt, với vị trí nằm trong tâm điểm vùng du lịch và giữa các quần thể nghỉ dưỡng cao cấp, The Farosea chính là “điểm nối liên hoàn” các thắng cảnh du lịch nổi tiếng của Kê Gà và Bình Thuận. </p>
                <a class="ct-title" href="<?php echo home_url()?>/vi-tri">Tìm hiểu thêm</a>
            </div>
        </div>
        <video id="video-viewport" poster="/vcommon/top/video/video_firstframe.jpg" autoplay loop muted fullscreen>
            <source src="<?php echo get_template_directory_uri() ?>/images/maps_vector_motion.mp4" type="video/mp4">
        </video>
    </div>

    <div class="section main-02" id="thanghoa">
        <div class="ShowBan-02">
            <div class="container-full">
                <div class="row">
                    <div class="col-md-12">
                        <div class="pks1 wow fadeInLeft" data-wow-delay="0.5s">
                            <img src="<?php echo get_template_directory_uri() ?>/images/pk1.png">
                        </div>
                        <div class="pks2 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="title-01 tt-thanghoa">
                                <p>Tiện ích hoàn mỹ</p>
                                <a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/thanghoa-vn.png" alt="" /></a>
                                <p>Cảm xúc</p>
                            </div>
                            <div class="ctent-01 ct-thanghoa">
                                <p>The Farosea được xây dựng trong tổ hợp nghỉ dưỡng ven biển đẳng cấp, dành cho chủ nhân xứng tầm.</p>
                                <p>&nbsp;</p>
                                <p>Trọn vẹn tận hưởng kỳ nghỉ dưỡng trong không gian xanh mát của vùng biển hài hòa và được trải nghiệm các dịch vụ chăm sóc, giải trí theo tiêu chuẩn 5 sao.</p>
                                <a href="#">Tìm hiểu thêm</a>
                            </div>
                            <div class="pks">
                                <img src="<?php echo get_template_directory_uri() ?>/images/pk2.png" style="width: 100%; float: left; margin-top: 20px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="chan01"><img src="<?php echo get_template_directory_uri() ?>/images/chan01.png" alt="" /></div>

    <div class="section main-01" id="xanh">
        <div class="ban1" data-stellar-background-ratio="0.5" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/ban5.jpg);">
            <div class="ShowBan-04 wow fadeInUp" data-wow-delay="0.5s">
                <div class="opacity-b50"></div>
                <div class="container-full">
                    <div class="row">
                        <div class="div-xanh">
                            <div class="title-01 tt-xanh">
                                <p>KIẾN TRÚC</p>
                                <a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/xanh-vn.png" alt="" /></a>
                                <p>Độc đáo</p>
                            </div>
                            <div class="ctent-01 ct-xanh">
                                <p>Tất cả căn hộ tại The Farosea đều được thiết kế có góc nhìn trọn ra biển, ngập tràn ánh sáng thiên nhiên và gió trời. Đây là điểm nhấn độc đáo khó có nơi nào sánh bằng.</p>
                                <p>&nbsp;</p>
                                <p>Hệ thống cửa sổ và ban công rộng thoáng, tầng cao căn hộ nâng lên đến 10m giúp gia chủ thu trọn vào tầm mắt ánh dương rạng ngời, tận hưởng vẻ đẹp tuyệt mỹ của bức tranh sơn thủy hữu tình nơi biển trời khoáng đạt.</p>
                                <p>&nbsp;</p>
                                <p>Bên cạnh đó các mảng xanh được bố trí tinh tế và khoa học phủ mọi tầng cao mang đến cảm giác thư thái, dễ chịu, giao hòa cùng thiên nhiên.</p>
                            </div>
                        </div>
                        <div class="architecture section animatedParent">
                            <div class="cards-content">
                                <div class="cards-list tab-content animated fadeIn delay-100">
                                    <div id="card-apartment-1" class="tab-pane fade in active tab-padding">
                                        <div class="cards-list-item">

                                            <a href="#" class="card-item card-item-01" style="background-image:url(<?php echo get_template_directory_uri() ?>/vila/phoicanh-1-1.png)" data-hover-img="
                                            <?php echo get_template_directory_uri() ?>/vila/phoicanh-1-1.png,
                                            <?php echo get_template_directory_uri() ?>/vila/phoicanh-1-2.png,
                                            <?php echo get_template_directory_uri() ?>/vila/phoicanh-1-3.png,
                                            <?php echo get_template_directory_uri() ?>/vila/phoicanh-1-4.png,
                                            <?php echo get_template_directory_uri() ?>/vila/phoicanh-1-5.png, ">
                                                <h5>Căn 1B</h5>
                                                <div><h4>31.98 m2</h4></div>
                                                <img class="hover-slide-img" src="<?php echo get_template_directory_uri() ?>/vila/phoicanh-1-1.png">
                                            </a>

                                            <a href="#" class="card-item card-item-02" style="background-image:url(<?php echo get_template_directory_uri() ?>/vila/phoicanh-2-2.png)" data-hover-img="
                                            <?php echo get_template_directory_uri() ?>/vila/phoicanh-2-1.png,
                                            <?php echo get_template_directory_uri() ?>/vila/phoicanh-2-2.png,
                                            <?php echo get_template_directory_uri() ?>/vila/phoicanh-2-3.png,
                                            <?php echo get_template_directory_uri() ?>/vila/phoicanh-2-4.png,
                                            <?php echo get_template_directory_uri() ?>/vila/phoicanh-2-5.png, ">
                                                <h5>Căn 26A</h5>
                                                <div><h4>31.58 m2</h4></div>
                                                <img class="hover-slide-img" src="<?php echo get_template_directory_uri() ?>/vila/phoicanh-2-2.png">
                                            </a>

                                            <a href="#" class="card-item card-item-03" style="background-image:url(<?php echo get_template_directory_uri() ?>/vila/phoicanh-3-3.png)" data-hover-img="
                                            <?php echo get_template_directory_uri() ?>/vila/phoicanh-3-1.png,
                                            <?php echo get_template_directory_uri() ?>/vila/phoicanh-3-2.png,
                                            <?php echo get_template_directory_uri() ?>/vila/phoicanh-3-3.png,
                                            <?php echo get_template_directory_uri() ?>/vila/phoicanh-3-4.png,
                                            <?php echo get_template_directory_uri() ?>/vila/phoicanh-3-5.png, ">
                                                <h5>Căn 21A</h5>
                                                <div><h4>31.58 m2</h4></div>
                                                <img class="hover-slide-img" src="<?php echo get_template_directory_uri() ?>/vila/phoicanh-3-3.png">
                                            </a>

                                            <a href="#" class="card-item card-item-02" style="background-image:url(<?php echo get_template_directory_uri() ?>/vila/phoicanh-4-4.png)" data-hover-img="
                                            <?php echo get_template_directory_uri() ?>/vila/phoicanh-4-1.png,
                                            <?php echo get_template_directory_uri() ?>/vila/phoicanh-4-2.png,
                                            <?php echo get_template_directory_uri() ?>/vila/phoicanh-4-3.png,
                                            <?php echo get_template_directory_uri() ?>/vila/phoicanh-4-4.png,
                                            <?php echo get_template_directory_uri() ?>/vila/phoicanh-4-5.png, ">
                                                <h5>Căn 16A</h5>
                                                <div><h4>31.58 m2</h4></div>
                                                <img class="hover-slide-img" src="<?php echo get_template_directory_uri() ?>/vila/phoicanh-4-4.png">
                                            </a>

                                            <a href="#" class="card-item card-item-01" style="background-image:url(<?php echo get_template_directory_uri() ?>/vila/phoicanh-5-5.png)" data-hover-img="
                                            <?php echo get_template_directory_uri() ?>/vila/phoicanh-5-1.png,
                                            <?php echo get_template_directory_uri() ?>/vila/phoicanh-5-2.png,
                                            <?php echo get_template_directory_uri() ?>/vila/phoicanh-5-3.png,
                                            <?php echo get_template_directory_uri() ?>/vila/phoicanh-5-4.png,
                                            <?php echo get_template_directory_uri() ?>/vila/phoicanh-5-5.png, ">
                                                <h5>Căn 10A</h5>
                                                <div><h4>31.58 m2</h4></div>
                                                <img class="hover-slide-img" src="<?php echo get_template_directory_uri() ?>/vila/phoicanh-5-5.png">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section main-03" id="thongminh">
        <div class="ShowBan-03">
            <div class="container-full">
                <div class="row">
                    <div class="col-md-7 col-sm-12 col-xs-12">
                        <div class="ig-thongminh wow fadeInLeft" data-wow-delay="0.5s">
                            <img src="<?php echo get_template_directory_uri() ?>/images/app.png">
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-12 col-xs-12 wow fadeInRight" data-wow-delay="0.5s">
                        <div class="title-01 tt-thongminh">
                            <p>Quản lý tài sản</p>
                            <a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/thongminh-vn.png" alt="" /></a>
                        </div>
                        <div class="ctent-01 ct-thongminh">
                            <p>Tại Farosea Resort, công nghệ tiên tiến được ứng dụng nhằm mang lại sự minh bạch thông tin, hiệu quả trong quản lý tài sản và thuận ích tối đa.</p>
                            <p>&nbsp;</p>
                            <p>Với ứng dụng di động được thiết kế đặc biệt kết nối trực tiếp với chủ đầu tư, khách hàng có thể:</p>
                        </div>
                        <div class="ctent-02">
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <p class="nt-thongminh">Theo dõi tức thời hiệu quảkhai thác: tỉ lệ khai thác, lợi nhuận.</p>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <p class="nt-thongminh">Cập nhật nhanh hóng thông tin dự án: pháp lý, tiến độ xây dựng, tiến độ thanh toán.</p>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <p class="nt-thongminh">Tương tác trực tiếp với chủ đầu tư: nhận thông báo, hỏi đáp.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
        $recent_posts = wp_get_recent_posts(array(
            'numberposts' => 3, // Number of recent posts thumbnails to display
            'post_status' => 'publish' // Show only the published posts
        ));
        if (count($recent_posts) > 0) :
    ?>
    <div class="main-01" id="news-sc">
        <div class="ban1" data-stellar-background-ratio="0.5">
            <div class="ShowBan-01">
                <img class="img-position-a" src="<?php echo get_template_directory_uri() ?>/images/ban6.jpg" alt="">
                <div class="opacity-b50"></div>
                <div class="container-footer">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="title-03 wow fadeInDown" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
                                <span>Tin tức</span>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="news-home">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                        <div class="boxnews-h boxnews-h1 wow fadeInLeft" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
                                            <a class="pic" href="<?php echo get_permalink($recent_posts[0]['ID']) ?>">
                                                <img src="<?php echo get_the_post_thumbnail_url($recent_posts[0]['ID']) ?>" alt="<?php echo $recent_posts[0]['post_title'] ?>">
                                                <div class="news-newest">New</div>
                                            </a>
                                            <div class="tit-view">
                                                <a class="tit" href="<?php echo get_permalink($recent_posts[0]['ID']) ?>"><?php echo $recent_posts[0]['post_title'] ?></a>
                                                <a class="view" href="<?php echo get_permalink($recent_posts[0]['ID']) ?>">Chi tiết -</a>
                                            </div>
                                            <span><?php echo get_the_date('d/m/Y', $recent_posts[0]) ?></span>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                        <?php if (count($recent_posts) >= 2) : ?>
                                            <div class="boxnews-h boxnews-h2 wow fadeInRight" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInRight;">
                                                <a class="pic" href="<?php echo get_permalink($recent_posts[1]['ID']) ?>">
                                                    <img src="<?php echo get_the_post_thumbnail_url($recent_posts[1]['ID']) ?>" alt="<?php echo $recent_posts[1]['post_title'] ?>">
                                                </a>
                                                <div class="tit-view">
                                                    <a class="tit" href="<?php echo get_permalink($recent_posts[1]['ID']) ?>"><?php echo $recent_posts[1]['post_title'] ?></a>
                                                    <a class="view" href="<?php echo get_permalink($recent_posts[1]['ID']) ?>">Chi tiết -</a>
                                                </div>
                                                <span><?php echo get_the_date('d/m/Y', $recent_posts[1]) ?></span>
                                            </div>
                                        <?php endif; ?>

                                        <?php if (count($recent_posts) >= 3) : ?>
                                            <div class="boxnews-h boxnews-h3 wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                                                <a class="pic" href="<?php echo get_permalink($recent_posts[2]['ID']) ?>">
                                                    <img src="<?php echo get_the_post_thumbnail_url($recent_posts[2]['ID']) ?>" alt="<?php echo $recent_posts[2]['post_title'] ?>">
                                                </a>
                                                <div class="tit-view">
                                                    <a class="tit" href="<?php echo get_permalink($recent_posts[2]['ID']) ?>"><?php echo $recent_posts[2]['post_title'] ?></a>
                                                    <a class="view" href="<?php echo get_permalink($recent_posts[2]['ID']) ?>">Chi tiết -</a>
                                                </div>
                                                <span><?php echo get_the_date('d/m/Y', $recent_posts[2]) ?></span>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
<?php
get_footer();
