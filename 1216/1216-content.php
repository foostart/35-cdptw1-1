<?php

    $url_host= 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root= addcslashes(realpath($_SERVER['DOCUMENT_ROOT']),
    '\\');
    $pattern_uri= '/' . $pattern_document_root . '(.*)$/';
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path= $url_host . $matches[1][0];
    $url_path= str_replace('\\', '/', $url_path);
    ?>
    <div class="type-1216">
        <div class="container line">
            <div class="row main">
                <div class="top-bar">
                    <div class="top-links">
                        <!--LIST COMPANY-->
                        <ul>
                            <li>
                                <a href="#">Giám đốc</a>
                                <div class="frame sticky">
                                    <p class="title">Thái Trung Kiên</p>
                                    <p><i class="fa fa-envelope"></i>&nbsp;&nbsp;thaikienkts@gmail.com</p>
                                    <p><i class="fa fa-phone"></i>&nbsp;&nbsp;0982.956.427</p>
                                </div>
                            </li>
                            <li>
                                <a href="#">Kỹ thuật</a>
                                <div class="frame sticky">
                                    <p class="title">Bùi Quốc Triều</p>
                                    <p><i class="fa fa-envelope"></i>&nbsp;&nbsp;buiquoctrieu91@gmail.com</p>
                                    <p><i class="fa fa-phone"></i>&nbsp;&nbsp;0905.149.479</p>
                                </div>
                            </li>
                            <li>
                                <a href="#">Chất lượng</a>
                                <div class="frame sticky">
                                    <p class="title">Thái Trung Kiên</p>
                                    <p><i class="fa fa-envelope"></i>&nbsp;&nbsp;thaikienkts@gmail.com</p>
                                    <p><i class="fa fa-phone"></i>&nbsp;&nbsp;0982.956.427</p>
                                </div>
                            </li>
                            <li>
                                <a href="#">Tài chính</a>
                                <div class="frame sticky">
                                    <p class="title">Bùi Quốc Triều</p>
                                    <p><i class="fa fa-envelope"></i>&nbsp;&nbsp;buiquoctrieu91@gmail.com</p>
                                    <p><i class="fa fa-phone"></i>&nbsp;&nbsp;0905.149.479</p>
                                </div>
                            </li>
                        </ul>
                        <!--END LIST COMPANY-->

                    </div>
                    <!--END TOP LINK-->
                    <!--HOTLINE-->
                    <div class="top-text">
                        <span class="text">Hotline:</span><span class="hotline">&nbsp;&nbsp;0982.956.427</span>
                        <div class='icon-social'>
                            <a href="#"><i class="fa fa-facebook fb"></i></a>
                            <a href="#"><i class="fa fa-envelope email"></i></a>
                            <a href="#"><i class="fa fa-skype skype"></i></a>
                        </div>
                    </div>

                    <!--END HOTLINE-->
                </div>
                <!--END TOP BAR-->
            </div>
        </div>
    </div>