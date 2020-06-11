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
    <div id="fullpage">
        <div class="section fa-section_1" id="section1">
            <div class="fa-section_1_content">
                <div class="fa-slogan">
                    <img src="<?php echo get_template_directory_uri() ?>/img/logo/logo-gold.png" alt="logo gold">
                    <p>- Nơi xúc cảm rạng ngời</p>
                </div>
                <div class="fa-description">
                    <span>Lấy cảm hứng từ vẻ đẹp hùng vĩ của ngọn hải đăng Kê Gà,</span>
                    <span>The Farosea như một biểu tượng kiến trúc đặc sắc giữa thiên nhiên kỳ vĩ.</span>
                </div>
            </div>
        </div>
        <div class="section fa-section_2" id="section2">
            <div class="container-fluid fa-container">
                <div class="row">
                    <div class="col-md-6">
                        <img class="w-100" src="<?php echo get_template_directory_uri() ?>/img/home/banner-2.png" alt="banner 2">
                    </div>
                    <div class="col-md-6">
                        <div class="fa-slogan">
                            <h4>NGỌN HẢI ĐĂNG</h4>
                            <img src="<?php echo get_template_directory_uri() ?>/img/home/kieu-hanh.png"
                                 alt="kieu hanh">
                            <h4>GIỮA THỦ PHỦ RESORT MỚI</h4>
                        </div>
                        <p class="description">Lấy cảm hứng từ vẻ đẹp hùng vĩ của ngọn hải đăng Kê Gà, Farosea như một biểu tượng kiến trúc trường tồn giữa thiên nhiên hùng vĩ. Taị the Farosea, mỗi sớm mai thức dậy, du khách mới ngắm trọn vẹn ánh dương rạng ngời, vẻ đẹp thiên nhiên tuyệt mỹ của vịnh Kê Gà.</p>
                        <a href="#" class="see-more">Tìm hiểu thêm</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="section fa-section_3" id="section3">
            <div class="container-fluid fa-container">
                <div class="introduce">
                    <h3>GIỚI THIỆU DỰ ÁN</h3>
                    <h5>TỔNG QUAN DỰ ÁN</h5>
                    <p>The Farosea nằm trong quần thể du lịch nghỉ dưỡng hiện hữu thu hút nhiều du khách.
                        Dự án đươc quy hoạch theo phong cách phóng khoáng, hiện đại. Bên cạnh đó, bãi tắm hoàn toàn riêng tư,
                    khép kín chỉ dành phục vụ cho cư dân và du khách nội khu là đặc quyền mà Farosa dành tặng những chủ nhân tương lai.</p>
                </div>
            </div>
        </div>
        <div class="section fa-section_4" id="section4">
            <div class="container-fluid fa-container">
                <div class="fa-slogan">
                    <h4>TÂM ĐIỂM</h4>
                    <img src="<?php echo get_template_directory_uri() ?>/img/home/vang.png"
                         alt="vang">
                    <h4>KẾT NỐI DANH LAM</h4>
                </div>
                <p class="description">The Farosea tọa lạc ngay mặt tiền ĐT 719 – tuyến đường ven biển Quốc gia đẹp nhất Việt Nam. Đặc biệt, với vị trí nằm trong tâm điểm vùng du lịch và giữa các quần thể nghỉ dưỡng cao cấp, The Farosea chính là “điểm nối liên hoàn” các thắng cảnh du lịch nổi tiếng của Kê Gà và Bình Thuận.</p>
            </div>
        </div>
        <div class="section fa-section_5" id="section5">
            <div class="utilities">
                <div class="container-fluid fa-container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="logo">
                                <img src="<?php echo get_template_directory_uri() ?>/img/logo/logo-gold.png" alt="logo gold">
                            </div>
                            <div class="pool-view">
                                <img class="w-100" src="<?php echo get_template_directory_uri() ?>/img/home/poolview.png" alt="poolview">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="fa-slogan">
                                <h4>TIỆN ÍCH HOÀN MỸ</h4>
                                <img src="<?php echo get_template_directory_uri() ?>/img/home/thang-hoa.png"
                                     alt="vang">
                                <h4>CẢM XÚC</h4>
                            </div>
                            <p class="description">The Farosea được xây dựng trong tổ hợp nghỉ dưỡng ven biển đẳng cấp, dành cho chủ nhân xứng tầm.
                                Trọn vẹn tận hưởng kỳ nghỉ dưỡng trong không gian xanh mát của vùng biển hài hòa và được trải nghiệm các dịch vụ chăm sóc, giải trí theo tiêu chuẩn 5 sao.</p>
                            <a href="#" class="see-more">Tìm hiểu thêm</a>
                            <img class="w-100" src="<?php echo get_template_directory_uri() ?>/img/home/poolview-2.png" alt="poolview">
                        </div>
                    </div>
                </div>
                <div class="wave" style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M-13.82,-1.47 C319.69,64.63 316.87,86.34 534.71,-11.34 L521.72,-30.09 L-11.00,-21.20 Z" style="stroke: none; fill: #006838;"></path></svg></div>
            </div>
            <div class="architecture">
                <div class="container-fluid fa-container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="fa-slogan">
                                <h4>KIẾN TRÚC</h4>
                                <img src="<?php echo get_template_directory_uri() ?>/img/home/xanh.png"
                                     alt="vang">
                                <h4>ĐỘC ĐÁO</h4>
                            </div>
                            <div class="description">
                                <p>Tất cả căn hộ tại The Farosea đều được thiết kế có góc nhìn trọn ra biển, ngập tràn ánh sáng thiên nhiên và gió trời. Đây là điểm nhấn độc đáo khó có nơi nào sánh bằng.</p>
                                <p>Hệ thống cửa sổ và ban công rộng thoáng, tầng cao căn hộ nâng lên đến 10m giúp gia chủ thu trọn vào tầm mắt ánh dương rạng ngời, tận hưởng vẻ đẹp tuyệt mỹ của bức tranh sơn thủy hữu tình nơi biển trời khoáng đạt.</p>
                                <p>Bên cạnh đó các mảng xanh được bố trí tinh tế và khoa học phủ mọi tầng cao mang đến cảm giác thư thái, dễ chịu, giao hòa cùng thiên nhiên. </p>
                            </div>
                        </div>
                        <div class="col-md-8">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section fa-section_7" id="section7">
            <div class="container-fluid fa-container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="d-flex align-items-center justify-content-between">
                            <img src="<?php echo get_template_directory_uri() ?>/img/home/phone-screen-1.png" alt="phone">
                            <img src="<?php echo get_template_directory_uri() ?>/img/home/appstore.png" alt="phone">
                            <img src="<?php echo get_template_directory_uri() ?>/img/home/phone-screen-2.png" alt="phone">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="fa-slogan">
                            <h4>QUẢN LÝ TÀI SẢN</h4>
                            <img src="<?php echo get_template_directory_uri() ?>/img/home/vang.png"
                                 alt="vang">
                        </div>
                        <p>Tại Farosea Resort, công nghệ tiên tiến được ứng dụng nhằm mang lại sự minh bạch thông tin, hiệu quả trong quản lý tài sản và thuận ích tối đa.</p>
                        <p>Với ứng dụng di động được thiết kế đặc biệt kết nối trực tiếp với chủ đầu tư, khách hàng có thể:</p>
                        <ul class="row">
                            <li class="col-md-4">
                                Theo dõi tức thời hiệu quảkhai thác: tỉ lệ khai thác, lợi nhuận.
                            </li>
                            <li class="col-md-4">
                                Cập nhật nhanh hóng thông tin dự án: pháp lý, tiến độ xây dựng, tiến độ thanh toán.
                            </li>
                            <li class="col-md-4">
                                Tương tác trực tiếp với chủ đầu tư: nhận thông báo, hỏi đáp.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="section fa-section_8" id="section8">
            <div class="container-fluid fa-container">
                <div class="news">
                    <h3>TIN TỨC</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="news-item">
                                <a href="#" class="img-cover">
                                    <img src="<?php echo get_template_directory_uri() ?>/img/home/news-1.png" alt="news">
                                </a>
                                <h5 class="news-title">
                                    <a href="#">Tâm điểm vàng tham quan dự án</a>
                                    <span>01/01/2020</span>
                                </h5>
                                <a href="#" class="see-more">Chi tiết -</a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="news-top-right">
                                <a href="#" class="img-cover">
                                    <img src="<?php echo get_template_directory_uri() ?>/img/home/news-2.png" alt="news">
                                </a>
                                <div class="content">
                                    <div>
                                        <h5 class="news-title"><a href="#">Tâm điểm vàng tham quan dự án</a></h5>
                                        <a href="#" class="see-more">Chi tiết -</a>
                                    </div>
                                    <span>01/01/2020</span>
                                </div>
                            </div>
                            <div class="news-bottom-right">
                                <div class="news-item">
                                    <a href="#" class="img-cover">
                                        <img src="<?php echo get_template_directory_uri() ?>/img/home/news-1.png" alt="news">
                                    </a>
                                    <h5 class="news-title">
                                        <a href="#">Tâm điểm vàng tham quan dự án</a>
                                        <span>01/01/2020</span>
                                    </h5>
                                    <a href="#" class="see-more">Chi tiết -</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section fa-section_9" id="section9">
            <div class="container-fluid fa-container">
                <div class="logo-foot">
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri() ?>/img/logo/logo-white.png" alt="logo white">
                    </a>
                </div>
                <h3 class="border-bot">CÔNG TY CỔ PHẦN DỊCH VỤ BẤT ĐỘNG SẢN F.HOUSE</h3>
                <div class="address border-bot">
                    <p>149 đường 19, phường An Phú, Quận 2, TP HCM</p>
                    <p>028 225 36 229 - 0933 209 777</p>
                    <p>cskh@fhouse.vn</p>
                    <p>Tax: 0314757986</p>
                </div>
                <div class="address-project">
                    <p>Địa chỉ dự án The Farose: Xã Thuận Quý, huyện Hàm Thuận Nam, Bình Thuận</p>
                    <p>Website: www.farosea.vn</p>
                    <p>Hotline:</p>
                </div>
                <div class="supplier row">
                    <div class="col-md-2">
                        <h5>CHỦ ĐẦU TƯ</h5>
                        <img src="<?php echo get_template_directory_uri() ?>/img/logo/logo-1.png" alt="logo">
                    </div>
                    <div class="col-md-2">
                        <h5>ĐƠN VỊ PHÁT TRIỂN</h5>
                        <img src="<?php echo get_template_directory_uri() ?>/img/logo/logo-2.png" alt="logo">
                    </div>
                    <div class="col-md-2">
                        <h5>THIẾT KẾ KIẾN TRÚC</h5>
                        <img src="<?php echo get_template_directory_uri() ?>/img/logo/logo-3.png" alt="logo">
                    </div>
                    <div class="col-md-2">
                        <h5>QUẢN LÍ VẬN HÀNH</h5>
                        <img src="<?php echo get_template_directory_uri() ?>/img/logo/logo-4.png" alt="logo">
                    </div>
                    <div class="col-md-2">
                        <h5>BẢO LÃNH DỰA ÁN</h5>
                        <img src="<?php echo get_template_directory_uri() ?>/img/logo/logo-5.png" alt="logo">
                    </div>
                    <div class="col-md-2">
                        <h5>TIẾP THỊ VÀ PHÂN PHỐI</h5>
                        <img src="<?php echo get_template_directory_uri() ?>/img/logo/logo-1.png" alt="logo">
                    </div>
                </div>
                <div class="note">
                    <p>(*) Chúng tôi đặc biệt cẩn trọng trong việc chuẩn bị nội dung trên website này. Các thông tin/hình ảnh/bản vẽ chỉ thể hiện thông số kỹ thuật, tính thẩm mỹ và sự sáng tạo tại thời điểm được đăng tải và mang tính chất tham khảo, không đại diện chính xác cho điều kiện xây dựng thực tế và không mang tính đại diện hay là một phần của hợp đồng.</p>
                </div>
            </div>
        </div>
    </div>
<?php
get_footer();
