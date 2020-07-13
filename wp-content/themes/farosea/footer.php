<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package farosea
 */

?>

<style type="text/css">
    .carousel-indicators { bottom: -60px !important; }
    .boxnews-h { visibility: unset !important; }
</style>

<div class="follow-menu">
    <ul>
        <li>
            <a class="open-popup-form" href="javascript:void(0);" onclick="openPopupGround('.popup-form')">
                <img src="<?php echo get_template_directory_uri() ?>/images/nhantin.png">
                <img class="hover" src="<?php echo get_template_directory_uri() ?>/images/nhan-tin-hover.png">
            </a>
        </li>
        <li><div class="g-doc"></div></li>
        <li class="facebook">
            <a target="_blank" href="https://www.facebook.com/thefarosea/?eid=ARALZZhrjemtszL5NCZfoAcf3A1U-hUMwMjjCJ7ZgXNbGg9Nxarl08NZBuNHkAiUA0RvysLfP93TIiP0">
                <img src="<?php echo get_template_directory_uri() ?>/images/facebookvienxanh.png">
                <img class="hover" src="<?php echo get_template_directory_uri() ?>/images/facebook-hover.png">
            </a>
        </li>
        <li><div class="g-ngang"></div></li>
        <li class="youtube">
            <a target="_blank" href="https://www.youtube.com/channel/UCjP_-TQIgn0CYJpO_kWVGtw">
                <img src="<?php echo get_template_directory_uri() ?>/images/youtubevienxanh.png">
                <img class="hover" src="<?php echo get_template_directory_uri() ?>/images/youtube-hover.png">
            </a>
        </li>
    </ul>
</div>

<div class="main-01" id="footer-sc">
    <div class="ShowBan-05">
        <div class="container-footer">
            <div class="row">
                <div class="col-md-12">
                    <div class="footer">
                        <div class="logo-f"><img src="<?php echo get_template_directory_uri() ?>/images/l1f.png" alt="" /></div>
                        <p class="p1">CÔNG TY CỔ PHẦN DỊCH VỤ BẤT ĐỘNG SẢN F.HOUSE</p>
                        <p class="p2 hidden-sm">&nbsp;</p>
                        <p class="p2">&nbsp;</p>
                        <p class="p2">Địa chỉ: 149 đường số 19, phường An Phú, Quận 2, TP.HCM</p>
                        <p class="p2">Điện thoại: <a href="tel:028 225 36 229">028 225 36 229</a> – <a href="tel:0933 209 777">0933 209 777</a></p>
                        <p class="p2">Email: <a href="mailto:cskh@fhouse.vn">cskh@fhouse.vn</a></p>
                        <p class="p2">Tax: 0314757986</p>
                        <p class="p2 hidden-sm">&nbsp;</p>
                        <p class="p2">&nbsp;</p>
                        <p class="p2">Địa chỉ dự án The Farosea: 719 đường Tỉnh Lộ, xã Thuận Quý, huyện Hàm Thuận Nam, tỉnh Bình Thuận</p>
                        <p class="p2">Hotline: <a href="tel:0911 522 221">0911 522 221</a> – <a
                                    href="tel:0911 522 220">0911 522 220</a></p>
                        <div class="row">
                            <div class="col-md-2 col-sm-4 col-xs-4">
                                <div class="ncc">
                                    <p>Chủ đầu tư</p>
                                    <div class="ncc-img overflow-hidden">
                                        <img src="<?php echo get_template_directory_uri() ?>/images/LOGO_NhaBe.png" alt=""/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-4">
                                <div class="ncc">
                                    <p>Đơn vị phát triển</p>
                                    <div class="ncc-img overflow-hidden">
                                        <img src="<?php echo get_template_directory_uri() ?>/images/l3f.png" alt=""/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-4">
                                <div class="ncc">
                                    <p>Thiết kế kiến trúc</p>
                                    <div class="ncc-img overflow-hidden">
                                        <img src="<?php echo get_template_directory_uri() ?>/images/l4f.png" alt=""/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-4">
                                <div class="ncc">
                                    <p>Quản lý vận hành</p>
                                    <div class="ncc-img overflow-hidden">
                                        <img src="<?php echo get_template_directory_uri() ?>/images/l5f.png" alt=""/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-4">
                                <div class="ncc">
                                    <p>Bảo lãnh dự án</p>
                                    <div class="ncc-img overflow-hidden">
                                        <img src="<?php echo get_template_directory_uri() ?>/images/MBbank.png" alt=""/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-4">
                                <div class="ncc">
                                    <p>Tiếp thị và phân phối</p>
                                    <div class="ncc-img overflow-hidden">
                                        <img src="<?php echo get_template_directory_uri() ?>/images/Gia-Hung-Land.png" alt=""/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="p2">&nbsp;</p>
                        <p class="p2">&nbsp;</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="popup-form">
    <div class="overlay"></div>
    <a class="close-popup" onclick="closePopupGround('.popup-form')"><i class="fas fa-times"></i></a>
    <h2 class="title">ĐĂNG KÝ NHẬN <br> THÔNG TIN TƯ VẤN</h2>
    <form action="<?php echo admin_url('admin-ajax.php') ?>" method="POST">
        <div class="form-row">
            <div class="col-md-3">
                <div class="form-group">
                    <select name="gender" id="">
                        <option value="Ông">Ông</option>
                        <option value="Bà">Bà</option>
                    </select>
                </div>
            </div>
            <div class="col-md-9">
                <div class="form-group">
                    <input name="first-name" type="text" placeholder="Họ và tên">
                    <i class="fas fa-user"></i>
                </div>
            </div>
        </div>
        <div class="form-group">
            <input name="phone-number" type="text" placeholder="Điện thoại">
            <i class="fas fa-phone"></i>
        </div>
        <div class="form-group">
            <input name="email" type="email" placeholder="Email">
            <i class="fas fa-envelope"></i>
        </div>
        <p class="form-error"></p>

        <div class="text-center btn-group-submit">
            <button class="popup-submit">ĐĂNG KÝ</button>
        </div>
    </form>
</div>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NS5DJ57"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<!--<script id="bx24_form_button" data-skip-moving="true">-->
<!--    (function(w,d,u,b){w['Bitrix24FormObject']=b;w[b] = w[b] || function(){arguments[0].ref=u;-->
<!--        (w[b].forms=w[b].forms||[]).push(arguments[0])};-->
<!--        if(w[b]['forms']) return;-->
<!--        var s=d.createElement('script');s.async=1;s.src=u+'?'+(1*new Date());-->
<!--        var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);-->
<!--    })(window,document,'https://b24-tvi5rl.bitrix24.vn/bitrix/js/crm/form_loader.js','b24form');-->
<!---->
<!--    b24form({"id":"2","lang":"vn","sec":"t9wl4y","type":"button","click":""});-->
<!--</script>-->
<!--<script id="bx24_form_delay" data-skip-moving="true">-->
<!--    (function(w,d,u,b){w['Bitrix24FormObject']=b;w[b] = w[b] || function(){arguments[0].ref=u;-->
<!--        (w[b].forms=w[b].forms||[]).push(arguments[0])};-->
<!--        if(w[b]['forms']) return;-->
<!--        var s=d.createElement('script');s.async=1;s.src=u+'?'+(1*new Date());-->
<!--        var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);-->
<!--    })(window,document,'https://b24-tvi5rl.bitrix24.vn/bitrix/js/crm/form_loader.js','b24form');-->
<!---->
<!--    b24form({"id":"2","lang":"vn","sec":"t9wl4y","type":"delay","delay":5});-->
<!--</script>-->

<script type="text/javascript">
    $(window).on('load', function(event) {
        $('body').removeClass('preloading');
        $('.load').delay(1500).fadeOut('fast');
    });

    $(document).on('keyup', '.form-group input, .form-group textarea', function () {
        if ($(this).val()) {
            $(this).closest('.form-group').addClass('input-valid');
        } else {
            $(this).closest('.form-group').removeClass('input-valid');
        }
    });
    $(document).on('change', '.form-group select', function () {
        if ($(this).find('option').length !== 0) {
            $(this).closest('.form-group').addClass('input-valid');
        }
    });
    $($('.form-group input:not(:checkbox), .form-group textarea')).each(function (index, item) {
        if ($(this).val() !== '') {
            $(this).closest('.form-group').addClass('input-valid');
        }
        if ($('.form-group select').find('option').length !== 0) {
            $('.form-group select').closest('.form-group').addClass('input-valid');
        }
    });

    $('.popup-form form').submit(function (event) {
        event.preventDefault();
        let url = $(this).attr('action');
        let gender = $(this).find('select[name="gender"]');
        let firstName = $(this).find('input[name="first-name"]');
        let phoneNumber = $(this).find('input[name="phone-number"]');
        let email = $(this).find('input[name="email"]');
        let button = $('.popup-submit');

        checkError(firstName);
        checkError(phoneNumber);
        checkError(email);

        if (firstName.val() && phoneNumber.val() && email.val()) {
            $.ajax({
                type: 'POST',
                dataType: 'json',
                url: url,
                data: {
                    action: 'send_form_information',
                    'gender': gender.val(),
                    'first-name': firstName.val(),
                    'phone-number': phoneNumber.val(),
                    'email': email.val(),
                },
                beforeSend: function() {
                    button.text('Đang đăng ký...');
                    button.attr('disabled', !0)
                },
                success: function(data) {
                    var r = confirm("Đăng ký nhận tin thành công!");
                    if (r === true) {
                        location.reload();
                    }
                    button.text('Đăng ký');
                    button.attr('disabled', !1);
                },
                error: function(error) {
                    console.log(error.message)
                }
            })
        } else {
            $('.form-error').text('Vui lòng điền đẩy đủ thông tin!');
        }
    });

    function checkError(element) {
        if (element.val() === '') {
            element.addClass('input-error');
        } else {
            element.removeClass('input-error');
        }
    }
</script>

<script>
    function openNav() {
        document.getElementById("myNav").style.width = "100%";
    }
    function closeNav() {
        document.getElementById("myNav").style.width = "0%";
    }
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script type="text/javascript">
    $('.owl-library').owlCarousel({
        center: true,
        items:2,
        loop:false,
        margin:50,
        dots: true,
        nav: true,
        navText: ['<img src="<?php echo get_template_directory_uri() ?>/images/button-previous.png" />', '<img src="<?php echo get_template_directory_uri() ?>/images/button-next.png" />'],
        autoplay: true,
        autoplayTimeout: 6000,
        autoplayHoverPause: true,
        responsive:{
            0:{
                items:1
            },
            767:{
                items:2
            },
        }
    });
    $('#owl-images').owlCarousel({
        center: true,
        items:2,
        loop:false,
        margin:50,
        dots: true,
        nav: true,
        navText: ['<img src="<?php echo get_template_directory_uri() ?>/images/button-previous.png" />', '<img src="<?php echo get_template_directory_uri() ?>/images/button-next.png" />'],
        autoplay: true,
        autoplayTimeout: 6000,
        autoplayHoverPause: true,
        responsive:{
            0:{
                items:1
            },
            767:{
                items:2
            },
        }
    });
    $('.owl-ground').owlCarousel({
        items:1,
        loop: true,
        dots: false,
        margin:0,
        nav: true,
        navText: ['<img src="<?php echo get_template_directory_uri() ?>/images/button-previous.png" />', '<img src="<?php echo get_template_directory_uri() ?>/images/button-next.png" />'],
        autoplay: true,
        autoplayTimeout: 10000,
        autoplayHoverPause: true,
    });
    $('map area').click(function (event) {
        event.preventDefault();
    });
    function openPopupGround(element) {
        $(element).addClass('show');
        $('body').addClass('overflow-hidden');
    }
    function closePopupGround(element) {
        $(element).removeClass('show');
        $('body').removeClass('overflow-hidden');
    }
</script>

<script src="https://cdn.jsdelivr.net/picturefill/2.3.1/picturefill.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/lightgallery@1.7.2/dist/js/lightgallery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/lightgallery@1.7.2/modules/lg-video.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/lightgallery@1.7.2/modules/lg-thumbnail.min.js"></script>

<script type="text/javascript">
    $('.gallery').lightGallery({
        selector: '.children'
    });
    $('#video-gallery').lightGallery({
        selector: '#video-gallery .owl-item article'
    });
</script>

<script src="<?php echo get_template_directory_uri() ?>/js/image-map.js"></script>
<script type="text/javascript">
    ImageMap('img.usemap');
</script>

<!--scroll-active-->
<script type="text/javascript">
    $(document).ready(function () {
        $(document).on("scroll", onScroll);
        //smoothscroll
        $('a[href^="#"]').on('click', function (e) {
            e.preventDefault();
            $(document).off("scroll");
            $('a').each(function () {
                $(this).removeClass('active');
            })
            $(this).addClass('active');
            var target = this.hash,
                menu = target;
            $target = $(target);
            $('html, body').stop().animate({
                'scrollTop': $target.offset().top+0
            }, 500, 'swing', function () {
                window.location.hash = target;
                $(document).on("scroll", onScroll);
            });
        });
    });
    function onScroll(event){
        var scrollPos = $(document).scrollTop();
        $('#menu-center a').each(function () {
            var currLink = $(this);
            var refElement = $(currLink.attr("href"));
            if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
                $('#menu-center ul li a').removeClass("active");
                currLink.addClass("active");
            }
            else{
                currLink.removeClass("active");
            }
        });
    }
</script><!--scroll-active-->
<script  src="<?php echo get_template_directory_uri() ?>/sch/script.js"></script><!--scroll-top-->

<!-- Script
================================================== -->
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/bootstrap.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/bootstrap.min.js"></script>

<script src="<?php echo get_template_directory_uri() ?>/dist/scripts.min.js"></script>
<!--scroll-background-->

<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/slider-five/slick.css" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/slider-five/cutban.css" />
<script type="text/javascript">
    $(document).ready(function() {
        $('.cards-list-item').slick({
            infinite: true,
            speed: 300,
            slidesToShow: 5,
            slidesToScroll: 1,
            autoplay: false,
            arrows: false,
            dots: false,
            responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 5,
                    slidesToScroll: 1,
                    dots: false,
                    autoplay: true,
                    arrows: true,
                    infinite: true
                }
            },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 5,
                        dots: false,
                        autoplay: true,
                        arrows: true,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        dots: false,
                        autoplay: true,
                        arrows: true,
                        slidesToShow: 5,
                        slidesToScroll: 1
                    }
                }]
        });
    });
</script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/slider-five/script.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/slider-five/slick.min.js"></script>

<!--WoW-->
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/css/animate.css" />
<script src="<?php echo get_template_directory_uri() ?>/js/wow.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/app-wow.js"></script><!--EnD-WoW-->


<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/jquery.flexisel.js"></script>
<script type="text/javascript">
    $(window).load(function() {
        $("#flexiselDemo3").flexisel({
            visibleItems: 1,
            animationSpeed: 250,
            autoPlay: true,
            autoPlaySpeed: 3000,
            pauseOnHover: true,
            enableResponsiveBreakpoints: true,
            responsiveBreakpoints: {
                portrait: {
                    changePoint: 768,
                    visibleItems: 1
                },
                landscape: {
                    changePoint: 992,
                    visibleItems: 1
                },
                tablet: {
                    changePoint: 1361,
                    visibleItems: 1
                }
            }
        });
        $("#flexiselDemo31").flexisel({
            visibleItems: 2,
            animationSpeed: 250,
            autoPlay: true,
            autoPlaySpeed: 3000,
            pauseOnHover: true,
            enableResponsiveBreakpoints: true,
            responsiveBreakpoints: {
                portrait: {
                    changePoint: 768,
                    visibleItems: 1
                },
                landscape: {
                    changePoint: 992,
                    visibleItems: 2
                },
                tablet: {
                    changePoint: 1361,
                    visibleItems: 2
                }
            }
        });
        $("#flexiselDemo32").flexisel({
            visibleItems: 2,
            animationSpeed: 250,
            autoPlay: true,
            autoPlaySpeed: 3000,
            pauseOnHover: true,
            enableResponsiveBreakpoints: true,
            responsiveBreakpoints: {
                portrait: {
                    changePoint: 768,
                    visibleItems: 1
                },
                landscape: {
                    changePoint: 992,
                    visibleItems: 2
                },
                tablet: {
                    changePoint: 1361,
                    visibleItems: 2
                }
            }
        });
        $("#flexiselDemo33").flexisel({
            visibleItems: 1,
            animationSpeed: 250,
            autoPlay: true,
            autoPlaySpeed: 3000,
            pauseOnHover: true,
            enableResponsiveBreakpoints: true,
            responsiveBreakpoints: {
                portrait: {
                    changePoint: 768,
                    visibleItems: 1
                },
                landscape: {
                    changePoint: 992,
                    visibleItems: 1
                },
                tablet: {
                    changePoint: 1361,
                    visibleItems: 1
                }
            }
        });
        $("#flexiselDemo34").flexisel({
            visibleItems: 1,
            animationSpeed: 250,
            autoPlay: true,
            autoPlaySpeed: 3000,
            pauseOnHover: true,
            enableResponsiveBreakpoints: true,
            responsiveBreakpoints: {
                portrait: {
                    changePoint: 768,
                    visibleItems: 1
                },
                landscape: {
                    changePoint: 992,
                    visibleItems: 1
                },
                tablet: {
                    changePoint: 1361,
                    visibleItems: 1
                }
            }
        });
        $("#flexiselDemo35").flexisel({
            visibleItems: 1,
            animationSpeed: 250,
            autoPlay: true,
            autoPlaySpeed: 3000,
            pauseOnHover: true,
            enableResponsiveBreakpoints: true,
            responsiveBreakpoints: {
                portrait: {
                    changePoint: 768,
                    visibleItems: 1
                },
                landscape: {
                    changePoint: 992,
                    visibleItems: 1
                },
                tablet: {
                    changePoint: 1361,
                    visibleItems: 1
                }
            }
        });
    });
</script>

<?php wp_footer(); ?>

</body>
</html>
