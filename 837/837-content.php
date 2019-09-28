<?php
    $url_host= $_SERVER['HTTP_HOST'];

    $pattern_document_root= addcslashes(realpath($_SERVER['DOCUMENT_ROOT']),
    '\\');

    $pattern_uri= '/' . $pattern_document_root . '(.*)$/';
    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path= $url_host . $matches[1][0];

    $url_path= str_replace('\\', '/', $url_path);
    ?>
    <div class="type-837">
        <div class="container">
            <div class="row">
                <ul id="hexGrid">
                    <li class="hex">
                        <a class="hexIn" href="#">
                            <div class="hexLink">
                                <div class="caption">Member</div>
                            </div>
                        </a>
                    </li>
                    <li class="hex">
                        <a class="hexIn" href="#">
                            <div class="hexLink">
                                <div class="caption">Event</div>
                            </div>
                        </a>
                    </li>
                    <li class="hex">
                        <a class="hexIn" href="#">
                            <div class="hexLink">
                                <div class="caption">Gallery</div>
                            </div>
                        </a>
                    </li>
                    <li class="hex">
                        <a class="hexIn" href="#">
                            <div class="hexLink">
                                <img src="./images/meow.png" alt="a">
                            </div>
                        </a>
                    </li>
                    <li class="hex">
                        <a class="hexIn" href="#">
                            <div class="hexLink">
                                <img src="./images/meow-2.png" alt="a">
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

    </div>