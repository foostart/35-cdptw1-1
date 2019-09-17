<?php
    $url_host= $_SERVER['HTTP_HOST'];

    $pattern_document_root= addcslashes(realpath($_SERVER['DOCUMENT_ROOT']),
    '\\');

    $pattern_uri= '/' . $pattern_document_root . '(.*)$/';
    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path= $url_host . $matches[1][0];

    $url_path= str_replace('\\', '/', $url_path);
    ?>
    <div id="home_quicklinks">
        <a class="quicklink link1" href="#">
            <div class="ql_caption">
                <div class="outer">
                    <div class="inner">
                        <h2>Member</h2>
                    </div>
                </div>
            </div>
            <span class="ql_top"></span>
            <span class="ql_bottom"></span>
        </a>
        <a class="quicklink link2" href="#">
            <div class="ql_caption">
                <div class="outer">
                    <div class="inner">
                        <h2>Event</h2>
                    </div>
                </div>
            </div>
            <span class="ql_top"></span>
            <span class="ql_bottom"></span>
        </a>
        <a class="quicklink link3" href="#">
            <div class="ql_caption">
                <div class="outer">
                    <div class="inner">
                        <h2>Gallery </h2>
                    </div>
                </div>
            </div>
            <span class="ql_top"></span>
            <span class="ql_bottom"></span>
        </a>
    </div>
    <div class="hexagon">
        <div class="hexTop"></div>
        <div class="hexBottom"></div>
    </div>
