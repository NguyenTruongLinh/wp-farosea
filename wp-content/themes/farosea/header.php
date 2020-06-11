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

<!--	--><?php //wp_head(); ?>

    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/js/vendor/full-page/fullpage.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/all.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/main.css">
</head>

<body>
    <div class="fa-header_section">
        <div class="container-fluid">
            <div class="d-flex justify-content-between align-items-center">
                <div class="fa-header_phone">
                    <a href="#"><i class="far fa-phone-alt"></i></a>
                </div>
                <div class="fa-header_logo">
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri() ?>/img/logo/logo.png" alt="logo">
                    </a>
                </div>
                <div class="fa-header_navbar">
                    <a href="#"><i class="far fa-bars"></i></a>
                </div>
            </div>
        </div>
        <div class="fa-header_menu">
            <a href="#" class="fa-close_menu"><i class="far fa-times-circle"></i></a>
            <img class="logo-menu" src="<?php echo get_template_directory_uri() ?>/img/logo/logo-menu.png" alt="logo menu">
            <ul class="fa-header_menu_list">
                <li class="fa-header_menu_item">
                    <a href="#">Trang chủ</a>
                </li>
                <li class="fa-header_menu_item">
                    <a href="#">Giới thiệu</a>
                </li>
                <li class="fa-header_menu_item">
                    <a href="#">Câu chuyện dự án</a>
                </li>
                <li class="fa-header_menu_item">
                    <a href="#">Vị trí</a>
                </li>
                <li class="fa-header_menu_item">
                    <a href="#">Tiện ích</a>
                </li>
                <li class="fa-header_menu_item">
                    <a href="#">Mặt bằng</a>
                </li>
                <li class="fa-header_menu_item">
                    <a href="#">Thư viện</a>
                </li>
                <li class="fa-header_menu_item">
                    <a href="#">Tin tức</a>
                </li>
                <li class="fa-header_menu_item">
                    <a href="#">Liên hệ</a>
                </li>
            </ul>
        </div>
    </div>

