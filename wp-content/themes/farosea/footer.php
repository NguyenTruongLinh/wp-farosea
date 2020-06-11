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


<?php //wp_footer(); ?>
    <script src="<?php echo get_template_directory_uri() ?>/js/jquery-3.5.1.min.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/js/vendor/full-page/scrolloverflow.min.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/js/vendor/full-page/fullpage.min.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/js/main.js"></script>
    <script type="text/javascript">
        var myFullpage = new fullpage('#fullpage', {
            anchors: ['firstPage', 'secondPage', '3rdPage', '4thPage', '5thPage', '7thPage', '9thPage'],
            navigation: true,
            navigationPosition: 'right',
            navigationTooltips: ['First page', 'Second page', 'Third and last page'],
            scrollOverflow: true
        });
    </script>
</body>
</html>
