<?php
    include '../config.php';
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), $sala);
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1218" id='gioi-thieu-ktroyal'>

    <!--ABOUT COMPANY-->
    <div class="bg-about">
        <h1>KT-ROYAL</h1>
        <div class="boder"></div>
        <p class="title-content">Giới Thiệu Công Ty</p>
    </div>

    <!--INFO COMPANY-->
    <div class="container line">
        <div class="row">
            <!--INFO 1-->
            <div class="col-md-4 col-sm-6 text">
                <div class="tit">
                    <span class="tittle">TẦM NHÌN CỦA</span><span class="tittle tittle-sub"> CÔNG TY</span>
                </div>
                <div class="boder boder-text"></div>
                <p class="content">Nâng cao chất lượng cuộc sống của Quý khách hàng. Sự đổi mới liên tục của thiết kế và kết cấu kỹ thuật là tầm nhìn của công ty.</p>
            </div>
            <!--INFO 2-->
            <div class="col-md-4 col-sm-6">
                <div class="tit">
                    <span class="tittle">TRÁCH NHIỆM</span><span class="tittle tittle-sub"> & NIỀM TIN</span>
                </div>
                <div class="boder boder-text"></div>
                <p class="content">Công trình của Quý khách hàng như thể công trình của chúng tôi.</p>
            </div>
            <!--INFO 3-->
            <div class="col-md-4 col-sm-6">
                <div class="tit">
                    <span class="tittle">CHIẾN LƯỢC</span><span class="tittle tittle-sub"> KINH DOANH</span>
                </div>
                <div class="boder boder-text"></div>
                <p class="content">Xây dựng một đội ngũ cạnh tranh và hướng tới chất lượng thiết kế cao hơn để đáp ứng các mục tiêu hoạt động của công ty.</p>
            </div>
        </div>
        <!--END INFO-->
    </div>
    <!--END INFO-->
</div>