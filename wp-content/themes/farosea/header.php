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

    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/css/style.css" />

    <link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/images/ico/favicon.ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
</head>

<body>

    <nav class="header">
        <div class="logo"><a href="<?php echo home_url() ?>"><img src="<?php echo get_template_directory_uri() ?>/images/logo.png" alt="LaPhong" /></a></div>
        <div class="call-phone">
            <a href="tel:"><img src="<?php echo get_template_directory_uri() ?>/images/call-phone.png" alt="" /></a>
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
