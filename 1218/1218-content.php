<?php
    $url_host= 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root= addcslashes(realpath($_SERVER['DOCUMENT_ROOT']),
    '\\');
    $pattern_uri= '/' . $pattern_document_root . '(.*)$/';
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path= $url_host . $matches[1][0];
    $url_path= str_replace('\\', '/', $url_path);
    ?>
    <div class="type-1218" id='gioi-thieu-ktroyal'>

        <!--ABOUT COMPANY-->
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="<?php echo $url_path ?>/images/about-image.png" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo $url_path ?>/images/content-rooms-1.png" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo $url_path ?>/images/content-rooms-3.png" alt="">
                </div>
                
            </div>
            <div class="about">
				<h1>KT-ROYAL</h1>
				<div class="border"></div>
				<p class="title-content">Giới Thiệu Công Ty</p>
			</div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
        <!--INFO COMPANY-->
        <div class="container">
            <div class="row">
                <!--INFO 1-->
                <div class="col-md-4 col-sm-12">
                    <div class="tit">
                        <span class="tittle">TẦM NHÌN CỦA</span><span class="tittle tittle-sub"> CÔNG TY</span>
                    </div>
                    <div class="border border-text"></div>
                    <p class="content">Nâng cao chất lượng cuộc sống của Quý khách hàng. Sự đổi mới liên tục của thiết kế và kết cấu kỹ thuật là tầm nhìn của công ty.</p>
                </div>
                <!--INFO 2-->
                <div class="col-md-4 col-sm-12">
                    <div class="tit">
                        <span class="tittle">TRÁCH NHIỆM</span><span class="tittle tittle-sub"> & NIỀM TIN</span>
                    </div>
                    <div class="border border-text"></div>
                    <p class="content">Công trình của Quý khách hàng như thể công trình của chúng tôi.</p>
                </div>
                <!--INFO 3-->
                <div class="col-md-4 col-sm-12">
                    <div class="tit">
                        <span class="tittle">CHIẾN LƯỢC</span><span class="tittle tittle-sub"> KINH DOANH</span>
                    </div>
                    <div class="border border-text"></div>
                    <p class="content">Xây dựng một đội ngũ cạnh tranh và hướng tới chất lượng thiết kế cao hơn để đáp ứng các mục tiêu hoạt động của công ty.</p>
                </div>
            </div>
            <!--END INFO-->
        </div>
        <!--END INFO-->
    </div>