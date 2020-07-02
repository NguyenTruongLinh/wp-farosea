<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package farosea
 *
 * Template name: Tien ich
 */

get_header();
?>

    <div class="bg-header"></div>

    <div class="main-tich">
        <div class="container-full">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-06 wow fadeInUp" data-wow-delay="0.5s">
                        <p>Tiện ích</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="index-tich-1">
            <div class="tich-left">
                <div class="title-01 tt-5sao wow fadeInUp" data-wow-delay="0.5s">
                    <p>Đẳng cấp </p>
                    <a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/5sao-vn.png" alt="" /></a>
                </div>
                <div class="ctent-01 ct-5sao wow fadeInUp" data-wow-delay="0.8s">
                    <p>Các tiện ích hiện đại và đẳng cấp tại Farosea mang đến cho du khách những trải nghiệm khó quên, nơi mỗi giác quan được nâng niu và chiều chuộng, nơi mỗi phút giây trôi qua là sự bừng sáng của niềm vui như ánh bình minh rực rỡ rạng ngời.</p>
                </div>
            </div>
            <div class="tich-right">
                <div class="tit-tich-right"><p>Công viên Bốn mùa</p></div>
                <a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/tich-2.jpg" alt=""/></a>
            </div>
        </div>
    </div>

    <div class="main-dichvu">
        <div class="container-full">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="title-01 tt-traitim wow fadeInUp" data-wow-delay="0.5s">
                        <p>Dịch vụ từ</p>
                        <a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/traitim-vn.png" alt="" /></a>
                    </div>
                    <div class="ctent-01 ct-traitim wow fadeInUp" data-wow-delay="0.8s">
                        <p>Tại the Farosea, mỗi du khách đều có thể cảm nhận sự thoải mái, tiện nghi như chính ngôi nhà của mình với đội ngũ nhân viên phục vụ tận tình, chuyên nghiệp cùng các dịch vụ đẳng cấp 5 sao đến từ các thương hiệu uy tín quốc tế. </p>
                    </div>
                </div>
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <div class="top-30">
                        <div class="listpros">
                            <ul id="flexiselDemo3">
                                <li><div class="boxpros"><a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/pic-dv-1.jpg" alt="" /></a></div></li>
                                <li><div class="boxpros"><a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/pic-dv-2.jpg" alt="" /></a></div></li>
                                <li><div class="boxpros"><a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/pic-dv-1.jpg" alt="" /></a></div></li>
                                <li><div class="boxpros"><a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/pic-dv-2.jpg" alt="" /></a></div></li>
                                <li><div class="boxpros"><a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/pic-dv-1.jpg" alt="" /></a></div></li>
                                <li><div class="boxpros"><a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/pic-dv-2.jpg" alt="" /></a></div></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-md-2 col-sm-4 col-xs-6">
                            <div class="mn-dichvu">
                                <img src="<?php echo get_template_directory_uri() ?>/images/ic-dv-1.png" alt="" />
                                <a href="#">Dịch vụ phòng</a>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6">
                            <div class="mn-dichvu">
                                <img src="<?php echo get_template_directory_uri() ?>/images/ic-dv-2.png" alt="" />
                                <a href="#">Dịch vụ gửi hành lý</a>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6">
                            <div class="mn-dichvu">
                                <img src="<?php echo get_template_directory_uri() ?>/images/ic-dv-3.png" alt="" />
                                <a href="#">Dịch vụ dọn phòng</a>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6">
                            <div class="mn-dichvu">
                                <img src="<?php echo get_template_directory_uri() ?>/images/ic-dv-4.png" alt="" />
                                <a href="#">Dịch vụ giặt là</a>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6">
                            <div class="mn-dichvu">
                                <img src="<?php echo get_template_directory_uri() ?>/images/ic-dv-5.png" alt="" />
                                <a href="#">Dịch vụ hỗ trợ tour du lịch</a>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6">
                            <div class="mn-dichvu">
                                <img src="<?php echo get_template_directory_uri() ?>/images/ic-dv-6.png" alt="" />
                                <a href="#">Dịch vụ đưa đón</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="banner-full">
        <a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/bn-full-1.jpg" alt="" ></a>
    </div>

<?php
get_footer();
