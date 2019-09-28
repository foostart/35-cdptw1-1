<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1219">
    <!--LIST COMPANY-->
    <div class="container line">
        <div class="row line-row">
            <!--TITLE-->
            <div class="in">TỔ CHỨC CÔNG TY
                <span class="depa">KTROYAL</span>
            </div>
            <!--END TITLE-->
            <div class="border"></div>
            <!--LIST-->
            <a href="#" class="button hvr-backward">
                <i class="fa fa-arrow-right ican"></i>
                <div class="text">Tổng giám đốc</div>
            </a>
            <a href="#" class="button hvr-backward">
                <i class="fa fa-arrow-right ican"></i>
                <div class="text">Giám đốc kỹ thuật</div>
            </a>
            <a href="#" class="button hvr-backward">
                <i class="fa fa-arrow-right ican"></i>
                <div class="text">Giám đốc chất lượng</div>
            </a>
            <a href="#" class="button hvr-backward">
                <i class="fa fa-arrow-right ican"></i>
                <div class="text">Giám đốc tài chính</div>
            </a>
            <a href="#" class="button hvr-backward">
                <i class="fa fa-arrow-right ican"></i>
                <div class="text">Đội ngủ nhân công</div>
            </a>
            <a href="#" class="button hvr-backward">
                <i class="fa fa-arrow-right ican"></i>
                <div class="text">Đối tác</div>
            </a>
            
            <!--END LIST-->
        </div>
    </div>
    <!--END LIST COMPANY-->
    <hr class="margin-tb-s">
    <!--LIST JOB-->
    <div class="container line">
        <div class="row line-row">
            <!--TITLE-->
            <div class="in">CHÚNG TÔI
                <span class="depa">CUNG CẤP</span>
            </div>
            <!--END TITLE-->

            <div class="border"></div>

            <!--ITEM-->
            <div class="col-lg-2 col-md-4 col-xs-6 ico">
                <i class="fa fa-building icon" aria-hidden="true"></i><br>
                <h3>TỔNG THẦU XÂY DỰNG</h3>
            </div>

            <div class="col-lg-2 col-md-4 col-xs-6 ico">
                <i class="fa fa-object-group icon" aria-hidden="true"></i><br>
                <h3>THIẾT KẾ VÀ THI CÔNG</h3>
            </div>
            <div class="col-lg-2 col-md-4 col-xs-6 ico">
                <i class="fa fa-cubes icon" aria-hidden="true"></i><br>
                <h3>NỘI THẤT</h3>
            </div>
            <div class="col-lg-2 col-md-4 col-xs-6 ico">
                <i class="fa fa-puzzle-piece icon" aria-hidden="true"></i><br>
                <h3>HẠ TẦNG</h3>
            </div>
            <div class="col-lg-2 col-md-4 col-xs-6 ico">
                <i class="fa fa-crosshairs icon" aria-hidden="true"></i><br>
                <h3>CƠ ĐIỆN</h3>
            </div>
            <div class="col-lg-2 col-md-4 col-xs-6 ico">
                <i class="fa fa-hashtag icon" aria-hidden="true"></i><br>
                <h3>DỊCH VỤ KHÁC</h3>
            </div>

            <!--END LIST-->
        </div>
    </div>
    <!--END LIST JOB-->
</div>