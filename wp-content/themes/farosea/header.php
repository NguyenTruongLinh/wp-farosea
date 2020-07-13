<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package farosea
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <meta property="og:url" content="thefarosea.vn" />
    <meta property="og:title" content="The Farosea | Ngọn Hải đăng kiêu hãnh giữa thủ phủ Resort" />
    <meta property="og:image" content="http://thefarosea.vn/wp-content/uploads/2020/07/Meta-image01.jpg" />
    <meta property="og:description" content="Lấy cảm hứng từ vẻ đẹp hùng vĩ của ngọn hải đăng Kê Gà, The Farosea như một biểu tượng kiến trúc trường tồn giữa thiên nhiên hùng vĩ." />
	<?php wp_head(); ?>

    <!-- Load Roboto font -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <!-- Load css styles -->

    <!-- Bootstrap --------------------------------------------------------------------------->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/css/bootstrap.css" />                  <!---->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/css/bootstrap-responsive.css" />       <!---->
    <!---------------------------------------------------------------------------------------->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />       <!---->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />       <!---->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/js/lightgallery/css/lightgallery.min.css" />       <!---->

    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/css/style.css?v=<?php echo date("YmdHm"); ?>" />

    <link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/images/ico/favicon.ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <?php if (is_page_template('pages/contact.php')) : ?>
        <style>
            @media (min-height: 600px) {
                #footer-sc {
                    height: 100vh;
                    position: fixed;
                }
                #footer-sc .ShowBan-05 {
                    height: 100%;
                    display: flex;
                    align-items: center;
                    padding-top: 300px;
                    overflow: auto;
                }
            }
        </style>
    <?php endif; ?>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-NS5DJ57');</script>
    <!-- End Google Tag Manager -->
</head>
</head>

<body class="preloading">
    <div class="load">
        <img src="<?php echo get_template_directory_uri(); ?>/images/loading-pages.gif">
    </div>

    <nav class="header">
        <div class="logo"><a href="<?php echo home_url() ?>"><img src="<?php echo get_template_directory_uri() ?>/images/logo.png" alt="LaPhong" /></a></div>
        <div class="call-phone">
<!--            <a href="tel:"><img src="--><?php //echo get_template_directory_uri() ?><!--/images/call-phone.png" alt="" /></a>-->
            <div class="ring">
                <div class="ring-circle"></div>
                <div class="ring-circle-fill"></div>
                <div class="ring-img-circle">
                    <a href="tel:0911 522 220" class="btn-img">
                        <img src="<?php echo get_template_directory_uri() ?>/images/icon-phone-ring.png" width="50">
                    </a>
                </div>
            </div>
        </div>
        <div class="language">
            <ul>
                <li class="vn active"><a href="#">VN</a></li>
                <li class="en"><a href="#">EN</a></li>
            </ul>
        </div>
        <div id="myNav" class="overlay">
            <div class="logo-menu">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <div class="overlay-content">
                    <a href="<?php echo home_url() ?>">Trang chủ</a>
                    <a href="<?php echo home_url() ?>/gioi-thieu">Giới thiệu</a>
                    <a href="<?php echo home_url() ?>/cau-chuyen-du-an">Câu chuyện dự án</a>
                    <a href="<?php echo home_url() ?>/vi-tri">Vị trí</a>
                    <a href="<?php echo home_url() ?>/tien-ich">Tiện ích</a>
                    <a href="<?php echo home_url() ?>/mat-bang">Mặt bằng</a>
                    <a href="<?php echo home_url() ?>/thu-vien">Thư viện</a>
                    <a href="<?php echo home_url() ?>/tin-tuc">Tin tức</a>
                    <a href="<?php echo home_url() ?>/lien-he">Liên hệ</a>
                </div>
            </div>
        </div>
        <span class="mNav" onclick="openNav()">&#9776;</span>
    </nav>
