<?php
include '../config.php';
$url_host = 'http://'.$_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), $sala);
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1220">
    <div class="container work">
        <div class="row">
            <!--TITLE-->
            <div class="col-md-12 footer">
                <h4>QUY TRÌNH<span>&nbsp;PHÁT TRIỂN DỰ ÁN</span> </h4>
              <div class="vien" ></div>
          </div>
          <!--END TITLE-->
          <!--CONTENT-->
          <div class="center">
            <div class="row">
                <!--COL1-->
                <div class="col-md-6 col-sm-6 col-xs-12 bad">
                    <!--ITEM 1-->
                    <div class="col-md-4 col-sm-4 col-xs-4 bod">
                        <div class="fbox-icon">
                            <a href="#"><i >1</i></a>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8 col-xs-8">
                        <h3>PHÂN TÍCH YÊU CẦU</h3>
                        <p>
                            Cùng khách hàng phân tích yêu cầu dự án
                            <br><strong>Chuyên nghiệp</strong>  trong các giải pháp xây dựng và lựa chọn kỹ thuật
                            <br><strong>Tư vấn</strong>  lựa chọn thiết bị chính hãng, chất lượng cao

                        </p>
                    </div>
                    <div class="divider divider-center"><i > . </i></div>

                    <!--ITEM 2-->
                    <div class="col-md-4 col-sm-4 col-xs-4 bod">
                        <div class="fbox-icon">
                            <a href="#"><i >2</i></a>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8 col-xs-8">
                        <h3>THIẾT KẾ</h3>
                        <p>
                            Đội ngủ thiết kế đã từng thiết kế nhiều công trình lớn
                            <br><strong>Phát thảo</strong> mô hình dự án
                            <br><strong>Thiết kế</strong> kiến trúc dự án
                        </p>
                    </div>
                    <div class="divider divider-center"><i > . </i></div>

                    <!--ITEM 3-->
                    <div class="col-md-4 col-sm-4 col-xs-4 bod">
                        <div class="fbox-icon">
                            <a href="#"><i >3</i></a>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8 col-xs-8">
                        <h3>XÂY DỰNG</h3>
                        <p>
                            Đội ngủ thi công cần cù, chịu khó. Làm việc đúng với yêu cầu đề ra.
                            <br><strong>Tin tưởng</strong> anh em trong đội ngủ thi công
                        </p>
                    </div>
                    <div class="divider divider-center"><i > . </i></div>

                    <!--ITEM 4-->
                    <div class="col-md-4 col-sm-4 col-xs-4 bod">
                        <div class="fbox-icon">
                            <a href="#"><i >4</i></a>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8 col-xs-8">
                        <h3>TRANG TRÍ</h3>
                        <p>
                            Tính thẩm mỹ cao và mang tính hiện đại
                            <br><strong>Phong thủy</strong> cả nội thất và ngoại thất
                        </p>
                    </div>
                    <div class="divider divider-center"><i > . </i></div>
                </div>

                <!--COL2-->
                <div class="col-md-6 col-sm-6 col-xs-12 bad dong2">
                    <!--ITEM 5-->
                    <div class="col-md-4 col-sm-4 col-xs-4 bod">
                        <div class="fbox-icon">
                            <a href="#"><i >5</i></a>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8 col-xs-8">
                        <h3>KIỂM TRA CHẤT LƯỢNG</h3>
                        <p>
                            Kiểm tra xuyên suốt trong tất cả các bước trong quy trình xây dựng
                            <br><strong>Đảm bảo</strong> đúng 100% với yêu cầu
                        </p>
                    </div>
                    <div class="divider divider-center"><i > . </i></div>

                    <!--ITEM 6-->
                    <div class="col-md-4 col-sm-4 col-xs-4 bod">
                        <div class="fbox-icon">
                            <a href="#"><i >6</i></a>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8 col-xs-8">
                        <h3>BÀN GIAO</h3>
                        <p>
                            Đảm bảo sự hài lòng nhất đến với khách hàng
                            <br><strong>Thoải mái</strong> với công trình đúng như mong đợi
                        </p>
                    </div>
                    <div class="divider divider-center"><i > . </i></div>

                    <!--ITEM 7-->
                    <div class="col-md-4 col-sm-4 col-xs-4 bod">
                        <div class="fbox-icon">
                            <a href="#"><i >7</i></a>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8 col-xs-8">
                        <h3>Bảo trì</h3>
                        <p>
                            Cam kết hỗ trợ công trình suyên suốt trong quá trình sử dụng của Quý khách hàng
                            <br><strong>Đội ngủ</strong> hỗ trợ trực tiếp khách hàng khi có vấn đề
                        </p>
                    </div>
                    <div class="divider divider-center"><i > . </i></div>

                    <!--ITEM 8-->
                    <div class="col-md-4 col-sm-4 col-xs-4 bod">
                        <div class="fbox-icon">
                            <a href="#"><i >8</i></a>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8 col-xs-8">
                        <h3>QUAN HỆ</h3>
                        <p>
                            Chúng tôi luôn giữ quan hệ xuyên suốt với khách hàng
                            <br><strong>Hợp tác</strong> cùng phát triển, tham gia dự án trong tương lai
                        </p>
                    </div>
                    <div class="divider divider-center"><i > . </i></div>
                </div>
                <!--/END COL2-->
            </div>
        </div>
        <!--END CONTENT-->
        </div>
    </div>
</div>