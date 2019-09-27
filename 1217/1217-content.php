<?php

$url_host = 'http://'.$_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1217">
    <div class="container">
        <div class="row">
            <!--FORM CONTACT-->
            <div class="contact_us">
                <!--TITLE-->
                <div class="contact_title">
                    <img src="<?php echo $url_path ?>/images/contactus-title.png" alt= "img1">
                    <div class="content_sub">Chúng tôi cung cấp giải pháp xây dựng thông minh, giảm tối đa chi phí xây dựng cho Quý khách hàng. Quý khách gửi thông tin yêu cầu, chúng tôi chân thành phục vụ Quý khách.</div>
                </div>
                <!--END TITLE-->
                <!--FORM INFORMATION-->
                    <div class="contact_form">
                        <form class="form_info" action="#" method="post" name="main-contactform">
                            <div class="row">
                                <!--CONTACT PERSON-->
                                <div class="col-md-4 col-sm-6 padding-20">
                                    <label class="input">
                                        <input type="text" id="name" name="name" placeholder="Họ và tên">
                                    </label>
                                </div>
                                <!--CELL PHONE-->
                                <div class="col-md-4 col-sm-6 padding-20">
                                    <label class="input">
                                        <input type="text" id="phone" name="phone" placeholder="Số điện thoại">
                                    </label>
                                </div>
                                <!--EMAIL-->
                                <div class="col-md-4 col-sm-6 padding-20">
                                    <label class="input">
                                        <input type="text" id="email" name="email" placeholder="Email">
                                    </label>
                                </div>
                                <!--ADDRESS-->
                                <div class="col-md-4 col-sm-6 padding-20">
                                    <label class="input">
                                        <input type="text" id="address" name="address" placeholder="Địa chỉ">
                                    </label>
                                </div>
                                <!--CATEGORY-->
                                <div class="col-md-4 col-sm-6 padding-20">
                                    <select class="select" name="select_name" id="type">
                                        <option value="0" selected disabled="disabled">Loại công trình</option>
                                        <option value="1">Residential</option>
                                        <option value="2">Commercial space</option>
                                        <option value="3">Office</option>
                                        <option value="4">Old house renovation</option>
                                    </select>
                                    <i class="fa fa-sort-desc" aria-hidden="true"></i>
                                    <i class="fa fa-sort-up" aria-hidden="true"></i>
                                </div>
                                <!--CONTENT-->
                                <div class="typehouse col-md-12 col-sm-12">
                                    <h4>Mô tả thêm</h4>
                                    <!--MESSAGE-->
                                    <div class="col-md-12 padding-20">
                                        <textarea rows="5" class="detail" placeholder="Nội dung"></textarea>
                                    </div>
                                </div>
                                <!--SUBMIT-->
                                <div class="col-md-12 padding-20">
                                        <button type="submit" class="button" onclick="return validateForm()">Gửi</button>
                                </div>
                            </div>
                        </form>
                    </div>
                
                <!--END FORM CONTACT-->
            </div>
        </div>
    </div>
</div>