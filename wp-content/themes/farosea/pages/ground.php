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
        <map name="image-map" onclick="openPopupGround('.popup-mb-01')">
            <area target="" alt="" title="" href="javascript:void(0);" coords="371,322,449,251,530,251,523,271,1136,283,1139,982,1093,1013,901,1016,842,960,842,853,740,852,708,881,659,872,635,828,515,757,488,753,393,702,362,663" shape="poly">
        </map>
        <div class="ground-img-hover">
            <img class="usemap" usemap="#image-map" src="<?php echo get_template_directory_uri() ?>/images/mat-bang-1.png" alt="" />
        </div>
        <div class="opacity-b50"></div>
        <div class="tit-mb"><img src="<?php echo get_template_directory_uri() ?>/images/tit-mb-1.png" alt="" class="wow fadeIn" data-wow-delay="0.4s" /></div>
        <div class="view-mb-1a wow fadeIn" data-wow-delay="0.4s">
            <ul>
                <li class="m-1 color-ch-a">
                    <span>Căn hộ loại A</span>
                    <p>Diện tích tim đường: 31.58 m2</p>
                    <p>Diện tích thông thủy: 28.96 m2</p>
                </li>
                <li class="m-2 color-ch-f">
                    <span>CĂN HỘ LOẠI F (căn góc)</span>
                    <p>Diện tích tim đường: 40.52 m2</p>
                    <p>Diện tích thông thủy: 37.57 m2</p>
                </li>
                <li class="m-3 color-ch-e">
                    <span>Căn hộ loại E (căn góc)</span>
                    <p>Diện tích tim đường: 44.57 m2</p>
                    <p>Diện tích thông thủy: 41.28 m2</p>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-ct" id="mb-02">
        <img src="<?php echo get_template_directory_uri() ?>/images/bg-mb-2.jpg" alt="" class="wow fadeIn" data-wow-delay="0.3s" />
        <map name="image-map-2" onclick="openPopupGround('.popup-mb-02')">
            <area target="" alt="" title="" href="#" coords="350,346,416,280,505,287,498,302,1112,314,1117,979,1086,1026,876,1031,820,994,818,882,717,879,686,902,632,896,611,850,496,784,464,785,376,731,342,680" shape="poly">
        </map>
        <div class="ground-img-hover">
            <img class="usemap" usemap="#image-map-2" src="<?php echo get_template_directory_uri() ?>/images/mat-bang-2.png" alt="" />
        </div>
        <div class="opacity-b50"></div>
        <div class="tit-mb">
            <img src="<?php echo get_template_directory_uri() ?>/images/tit-mb-2.png" alt="" class="wow fadeIn" data-wow-delay="0.4s" />
        </div>
        <div class="view-mb-1a wow fadeIn" data-wow-delay="0.4s">
            <ul>
                <li class="m-1 color-ch-a">
                    <span>Căn hộ loại A</span>
                    <p>Diện tích tim đường: 31.58 m2</p>
                    <p>Diện tích thông thủy: 28.96 m2</p>
                </li>
                <li class="m-2 color-ch-e">
                    <span>Căn hộ loại E (căn góc)</span>
                    <p>Diện tích tim đường: 44.57 m2</p>
                    <p>Diện tích thông thủy: 41.28 m2</p>
                </li>
                <li class="m-3 color-ch-b">
                    <span>Căn hộ loại B</span>
                    <p>Diện tích tim đường: 31.98 m2</p>
                    <p>Diện tích thông thủy: 29.58 m2</p>
                </li>
                <li class="m-1 color-ch-f">
                    <span>Căn hộ loại F (căn góc)</span>
                    <p>Diện tích tim đường: 40.52 m2</p>
                    <p>Diện tích thông thủy: 37.57 m2</p>
                </li>
                <li class="m-2 color-ch-c">
                    <span>Căn hộ loại C</span>
                    <p>Diện tích tim đường: 31.56 m2</p>
                    <p>Diện tích thông thủy: 28.73 m2</p>
                </li>
                <li class="m-3 color-ch-g">
                    <span>Căn hộ loại G (căn góc)</span>
                    <p>Diện tích tim đường: 43.19 m2</p>
                    <p>Diện tích thông thủy: 39.39 m2</p>
                </li>
                <li class="m-1 color-ch-d">
                    <span>Căn hộ loại D</span>
                    <p>Diện tích tim đường: 39.08 m2</p>
                    <p>Diện tích thông thủy: 36.16 m2</p>
                </li>
                <li class="m-2 color-ch-h">
                    <span>Căn hộ loại H (căn góc)</span>
                    <p>Diện tích tim đường: 43.26 m2</p>
                    <p>Diện tích thông thủy: 39.74 m2</p>
                </li>
            </ul>
        </div>
    </div>

    <div class="mb-popup popup-mb-01">
        <a class="close_popup" onclick="closePopupGround('.popup-mb-01')"><img src="<?php echo get_template_directory_uri() ?>/images/close-popup.png" alt="close popup"></a>
        <div class="overlay"></div>
        <div class="owl-carousel owl-theme owl-ground">
            <div class="container-full pt-30">
                <div class="row">
                    <div class="col-md-5 text-center">
                        <img class="hero" src="<?php echo get_template_directory_uri() ?>/images/can-ho-02.png" alt="">
                        <img class="hero-1" src="<?php echo get_template_directory_uri() ?>/images/can-ho-mb-02.png" alt="">
                        <p>Mặt bằng căn hộ điển hình</p>
                    </div>
                    <div class="col-md-7">
                        <div class="description">
                            <h3 class="title">Căn hộ loại A</h3>
                            <ul class="view-mb">
                                <li>
                                    <p>Diện tích tim tường</p>
                                    <span>31.58 m2</span>
                                </li>
                                <li>
                                    <p>Diện tích thông thuỷ</p>
                                    <span>28.96 m2</span>
                                </li>
                            </ul>
                        </div>
                        <img class="hero-3" src="<?php echo get_template_directory_uri() ?>/images/can-ho-bg-02.png" alt="can-ho-bg-01">
                        <p class="warning">Hình dự án là hình ảnh 3D, chỉ mang tính chất minh họa,
                            chi tiết và kích thước có thể thay đổi theo từng vị trí cụ thể.Khách hàng nên xem xét và hỏi rõ nhân viên bán hàng.</p>
                    </div>
                </div>
            </div>
            <div class="container-full pt-30">
                <div class="row">
                    <div class="col-md-5 text-center">
                        <img class="hero" src="<?php echo get_template_directory_uri() ?>/images/can-ho-01.png" alt="">
                        <img class="hero-1" src="<?php echo get_template_directory_uri() ?>/images/can-ho-mb-01.png" alt="">
                        <p>Mặt bằng căn hộ điển hình</p>
                    </div>
                    <div class="col-md-7">
                        <div class="description">
                            <h3 class="title">Căn hộ loại B</h3>
                            <ul class="view-mb">
                                <li>
                                    <p>Diện tích tim tường</p>
                                    <span>31.56 m2</span>
                                </li>
                                <li>
                                    <p>Diện tích thông thuỷ</p>
                                    <span>28.73 m2</span>
                                </li>
                            </ul>
                        </div>
                        <img class="hero-3" src="<?php echo get_template_directory_uri() ?>/images/can-ho-bg-01.png" alt="can-ho-bg-01">
                        <p class="warning">Hình dự án là hình ảnh 3D, chỉ mang tính chất minh họa,
                            chi tiết và kích thước có thể thay đổi theo từng vị trí cụ thể.Khách hàng nên xem xét và hỏi rõ nhân viên bán hàng.</p>
                    </div>
                </div>
            </div>
            <div class="container-full pt-30">
                <div class="row">
                    <div class="col-md-5 text-center">
                        <img class="hero" src="<?php echo get_template_directory_uri() ?>/images/can-ho-03.png" alt="">
                        <img class="hero-1" src="<?php echo get_template_directory_uri() ?>/images/can-ho-mb-03.png" alt="">
                        <p>Mặt bằng căn hộ điển hình</p>
                    </div>
                    <div class="col-md-7">
                        <div class="description">
                            <h3 class="title">Căn hộ loại G</h3>
                            <ul class="view-mb">
                                <li>
                                    <p>Diện tích tim tường</p>
                                    <span>43.19 m2</span>
                                </li>
                                <li>
                                    <p>Diện tích thông thuỷ</p>
                                    <span>39.39 m2</span>
                                </li>
                            </ul>
                        </div>
                        <img class="hero-3" src="<?php echo get_template_directory_uri() ?>/images/can-ho-bg-03.png" alt="can-ho-bg-01">
                        <p class="warning">Hình dự án là hình ảnh 3D, chỉ mang tính chất minh họa,
                            chi tiết và kích thước có thể thay đổi theo từng vị trí cụ thể.Khách hàng nên xem xét và hỏi rõ nhân viên bán hàng.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mb-popup popup-mb-02">
        <a class="close_popup" onclick="closePopupGround('.popup-mb-02')"><img src="<?php echo get_template_directory_uri() ?>/images/close-popup.png" alt="close popup"></a>
        <div class="overlay"></div>
        <div class="owl-carousel owl-theme owl-ground">
            <div class="container-full pt-30">
                <div class="row">
                    <div class="col-md-5 text-center">
                        <img class="hero" src="<?php echo get_template_directory_uri() ?>/images/can-ho-02.png" alt="">
                        <img class="hero-1" src="<?php echo get_template_directory_uri() ?>/images/can-ho-mb-02.png" alt="">
                        <p>Mặt bằng căn hộ điển hình</p>
                    </div>
                    <div class="col-md-7">
                        <div class="description">
                            <h3 class="title">Căn hộ loại A</h3>
                            <ul class="view-mb">
                                <li>
                                    <p>Diện tích tim tường</p>
                                    <span>31.58 m2</span>
                                </li>
                                <li>
                                    <p>Diện tích thông thuỷ</p>
                                    <span>28.96 m2</span>
                                </li>
                            </ul>
                        </div>
                        <img class="hero-3" src="<?php echo get_template_directory_uri() ?>/images/can-ho-bg-02.png" alt="can-ho-bg-01">
                        <p class="warning">Hình dự án là hình ảnh 3D, chỉ mang tính chất minh họa,
                            chi tiết và kích thước có thể thay đổi theo từng vị trí cụ thể.Khách hàng nên xem xét và hỏi rõ nhân viên bán hàng.</p>
                    </div>
                </div>
            </div>
            <div class="container-full pt-30">
                <div class="row">
                    <div class="col-md-5 text-center">
                        <img class="hero" src="<?php echo get_template_directory_uri() ?>/images/can-ho-01.png" alt="">
                        <img class="hero-1" src="<?php echo get_template_directory_uri() ?>/images/can-ho-mb-01.png" alt="">
                        <p>Mặt bằng căn hộ điển hình</p>
                    </div>
                    <div class="col-md-7">
                        <div class="description">
                            <h3 class="title">Căn hộ loại B</h3>
                            <ul class="view-mb">
                                <li>
                                    <p>Diện tích tim tường</p>
                                    <span>31.56 m2</span>
                                </li>
                                <li>
                                    <p>Diện tích thông thuỷ</p>
                                    <span>28.73 m2</span>
                                </li>
                            </ul>
                        </div>
                        <img class="hero-3" src="<?php echo get_template_directory_uri() ?>/images/can-ho-bg-01.png" alt="can-ho-bg-01">
                        <p class="warning">Hình dự án là hình ảnh 3D, chỉ mang tính chất minh họa,
                            chi tiết và kích thước có thể thay đổi theo từng vị trí cụ thể.Khách hàng nên xem xét và hỏi rõ nhân viên bán hàng.</p>
                    </div>
                </div>
            </div>
            <div class="container-full pt-30">
                <div class="row">
                    <div class="col-md-5 text-center">
                        <img class="hero" src="<?php echo get_template_directory_uri() ?>/images/can-ho-03.png" alt="">
                        <img class="hero-1" src="<?php echo get_template_directory_uri() ?>/images/can-ho-mb-03.png" alt="">
                        <p>Mặt bằng căn hộ điển hình</p>
                    </div>
                    <div class="col-md-7">
                        <div class="description">
                            <h3 class="title">Căn hộ loại G</h3>
                            <ul class="view-mb">
                                <li>
                                    <p>Diện tích tim tường</p>
                                    <span>43.19 m2</span>
                                </li>
                                <li>
                                    <p>Diện tích thông thuỷ</p>
                                    <span>39.39 m2</span>
                                </li>
                            </ul>
                        </div>
                        <img class="hero-3" src="<?php echo get_template_directory_uri() ?>/images/can-ho-bg-03.png" alt="can-ho-bg-01">
                        <p class="warning">Hình dự án là hình ảnh 3D, chỉ mang tính chất minh họa,
                            chi tiết và kích thước có thể thay đổi theo từng vị trí cụ thể.Khách hàng nên xem xét và hỏi rõ nhân viên bán hàng.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
get_footer();
