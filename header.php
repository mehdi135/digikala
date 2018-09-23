<!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?= URL ?>">
    <meta charset="UTF-8">
    <title>فروشگاه اینترنتی دیجی کالا</title>
    <script src="public/js/jquery-3.3.1.min.js"></script>
    <script src="public/js/jquery.flipTimer.js"></script>
    <script src="public/js/jquery.elevatezoom.js"></script>
    <script src="public/js/scroll/jquery.mCustomScrollbar.js"></script>
    <link rel="stylesheet" href="public/js/scroll/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="public/css/flipTimer.css">
    <script src="public/3d/jsc3d.js"></script>
    <script src="public/3d/jsc3d.touch.js"></script>
    <script src="public/3d/jsc3d.webgl.js"></script>
</head>
<body class="yekan" style="margin: 0; background:#e7e7e7;">


<!------------------بخش هدر سایت//////////---------------------->
<style>

    @font-face {
        font-family: 'yekan';
        src: url('public/fonts/Yekan.ttf') format('truetype'),
        url('public/fonts/Yekan.eot?#iefix') format('embedded-opentype');
    }

    .yekan {
        font-family: yekan;
    }

    .font_small {
        font-size: 9pt;
    }

    .font_medium {
        font-size: 11pt;
    }

    .font_larg {
        font-size: 13pt;
    }

    li {
        list-style: none;
        cursor: pointer;
    }

    a {
        cursor: pointer;
        text-decoration: none;
        color: black;
    }

    a, div, span, img, ul, li {
        text-align: right;
        direction: rtl;
    }

    #header {
        width: 1200px;
        height: 100px;
        margin: auto;
        padding-top: 10px;
    }

    #header_left {
        width: 200px;
        height: 100%;
        float: left;
    }

    #header_left img {
        float: left;
    }

    #heder_right {
        width: 900px;
        height: 100%;
        float: right;
    }

    #heder_right_top {
        height: 40px;
    }

    #heder_right_bottom {
        height: 60px;
    }

    #heder_right_bottom_shopping {
        width: 190px;
        height: 40px;
        float: right;
        border-radius: 3px;
        overflow: hidden;
    }

    #heder_right_bottom_shopping_basket {
        width: 60px;
        height: 40px;
        float: right;
        background: #62b965 url(public/images/shopping.png) center no-repeat;
    }

    #heder_right_bottom_shopping_counter {
        width: 130px;
        height: 40px;
        background: #4caf50;
        float: right;
    }

    #shopping_counter {
        width: 25px;
        height: 25px;
        border-radius: 100%;
        background: #eeeeee;
        text-align: center;
        float: left;
        margin: 8px 15px;
        line-height: 27px;
    }

    #shopping_basket {
        text-align: center;
        color: white;
        margin: 0 auto;
        padding-right: 20px;
        line-height: 39px;
    }

    #heder_right_bottom_shopping_search {
        width: 500px;
        height: 38px;
        float: right;
        margin: 1px 15px 0 0;
        border-radius: 3px;
        overflow: hidden;
    }

    #heder_right_bottom_shopping_search_icon {
        width: 40px;
        height: 40px;
        background: #9da3b1 url(public/images/search.png) no-repeat center;
        float: right;
    }

    #input_top {
        height: 34px;
        width: 397px;
        float: right;
        padding-right: 10px;
        color: #5f5f5f;
        margin-top: 0px;
        border: 1px solid #a1a1a1;
    }

    #shopping_link:hover {
        color: #000;
    }

</style>
<header style="background: white;">
    <div class="font_medium" id="header">
        <div id="heder_right">
            <div id="heder_right_top">
                <img src="public/images/locke.png" alt="" style="">
                <span>فروشگاه اینترنتی دیجی کالا،
                    <a  href="<?= URL ?>signin">وارد شوید</a>
                </span>
                <img src="public/images/user.png" alt="" style="margin:0 20px 0 3px;">
                <a href="<?= URL ?>register">ثبت نام کنید</a>
                <img src="public/images/gift-box.jpg" alt="" style="margin: 0 20px 0 3px;">
                <a>کارت هدیه</a>
            </div>
            <div id="heder_right_bottom">
                <a id="shopping_link">
                    <div id="heder_right_bottom_shopping">
                        <div id="heder_right_bottom_shopping_basket">
                        </div>
                        <div id="heder_right_bottom_shopping_counter">
                            <span id="shopping_basket">سبد خرید</span>
                            <span id="shopping_counter">0</span>
                        </div>
                    </div>
                </a>
                <div id="heder_right_bottom_shopping_search">
                    <input type="text" id="input_top" placeholder="محصول، دسته یا برند مورد نظرتان را جستجو کنید ...">

                    <a>
                        <div id="heder_right_bottom_shopping_search_icon"></div>
                    </a>
                </div>
            </div>

        </div>
        <div id="header_left">
            <img src="public/images/digikala_logo.png" alt="">
        </div>

    </div>
</header>
<!------------------بخش هدر سایت//////////---------------------->

<!---------------بخش منوی بالای سایت/////////////---------------->
<style>

    #nav {
        background: #F7F8FA;
        -webkit-box-shadow: 1px 1px 2px rgba(0, 0, 0, .4);
        border-top: 1px solid #dddddd;
    }

    #menu_top {
        width: 1200px;
        height: 40px;
        margin: auto;

    }

    #menu_top > ul {
        margin: 0;
        padding: 0;
        height: 100%;
        width: 100%;
        position: relative;
        font-size: 11pt;
        z-index: 2;
    }

    #menu_top > ul > li {
        list-style: none;
        float: right;
        height: 100%;
        padding-right: 15px;
        line-height: 37px;
    }

    #menu_top > ul > li > a {
        display: inline-block;
        height: 100%;
    }

    #menu_top > ul > li > span {
        background: url(public/images/down-arrow.png) center no-repeat;
        width: 8px;
        height: 6px;
        display: inline-block;
        padding-right: 15px;
    }

    #menu_top > ul > li > ul {
        height: 40px;
        width: 1200px;
        padding: 0;
        margin: auto;
        position: absolute;
        background: white;
        right: 0;
        box-shadow: 1px 1px 2px rgba(0, 0, 0, .4);
        border-top: 1px solid #dddddd;
        display: none;
    }

    #menu_top > ul > li > ul > li {
        list-style: none;
        float: right;
        height: 100%;
        padding-right: 30px;
        line-height: 37px;
    }

    #menu_top > ul > li > ul > li > a {
        width: 100%;
        height: 100%;
        display: inline-block;
    }

    .menu_top3 {
        width: 1200px;
        height: 400px;
        background: white;
        border-top: 1px solid #dddddd;
        box-shadow: 1px 1px 2px rgba(0, 0, 0, .4);
        position: absolute;
        margin: auto;
        right: 0;
        top: 40px;
        display: none;
        z-index: 4;
    }

    .menu_top3_divs {
        width: 299px;
        height: 100%;
        border-left: 1px solid #cccccc;
        float: right;
    }

    .menu_top3_divs ul {
        padding: 0;
        font-size: 11pt;
    }

    .menu_top3_divs ul li {
        padding-right: 25px;
        height: 30px;
    }

    .menu_top3_divs ul li:first-child {
        padding-right: 15px;
        color: deepskyblue;
    }

    .hover_blue:hover {
        color: deepskyblue;
    }

    .menu_top3_divs ul li a {
        width: 100%;
        height: 100%;
        display: inline-block;
    }

    .discount {
        height: 40px;
        width: 160px;
        float: left;
        position: absolute;
        left: 0;
        padding-left: 15px;
        background: #EBEFF2;
        font-size: 11pt;
    }

    .discount a {
        height: 100%;
        display: inline-block;
        line-height: 38px;
        margin-right: 35px;
    }

    #discount_img {
        background: url(public/images/discount.png) right no-repeat;
        width: 18px;
        height: 18px;
        display: inline-block;
        position: absolute;
        right: 0;
        margin: 11px 8px;
    }

    .active_menu {
        background: white;
    }

    .active_menu > a {
        color: red;
    }

</style>
<nav id="nav">
    <div id="menu_top">
        <ul>
            <li data-time="1">
                <a>کالای دیجیتال</a>
                <span></span>
                <ul>
                    <li data-time="3">
                        <a>موبایل</a>
                        <div class="menu_top3">
                            <div class="menu_top3_divs">
                                <ul>
                                    <li>
                                        <a class="hover_blue">گوشی موبایل</a>
                                    </li>
                                    <li>
                                        <a>Apple</a>
                                    </li>
                                    <li>
                                        <a>Samsung</a>
                                    </li>
                                    <li>
                                        <a>LG</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="menu_top3_divs"></div>
                            <div class="menu_top3_divs"></div>
                            <div class="menu_top3_divs" style="border-left: 0;"></div>
                            <div style="background: url(public/images/mobile1.png)no-repeat center;
                                         width:309px;height:212px;position: absolute;
                                         left: 0;bottom: 10px;"></div>
                        </div>
                    </li>
                    <li data-time="8">
                        <a>تبلت و کتابخوان</a>
                        <div class="menu_top3">
                            <div class="menu_top3_divs">
                                <ul>
                                    <li>
                                        <a class="hover_blue">تبلت</a>
                                    </li>
                                    <li>
                                        <a>Apple</a>
                                    </li>
                                    <li>
                                        <a>Samsung</a>
                                    </li>
                                    <li>
                                        <a>Microsoft</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="menu_top3_divs"></div>
                            <div class="menu_top3_divs"></div>
                            <div class="menu_top3_divs" style="border-left: 0;"></div>
                            <div style="background: url(public/images/tablet-ebook-reader.png)no-repeat
                                         center; width: 379px;height: 335px;position: absolute;
                                         left: 0;bottom: 0;"></div>
                        </div>
                    </li>
                    <li data-time="13">
                        <a>لپ تاپ</a>
                    </li>
                </ul>
            </li>
            <li data-time="2">
                <a>لوازم خانگی</a>
                <span></span>
                <ul>
                    <li data-time="3">
                        <a>صوتی و تصویری</a>
                        <div class="menu_top3">
                            <div class="menu_top3_divs">
                                <ul>
                                    <li>
                                        <a class="hover_blue">تلویزیون براساس سازنده</a>
                                    </li>
                                    <li>
                                        <a>Philips</a>
                                    </li>
                                    <li>
                                        <a>Samsung</a>
                                    </li>
                                    <li>
                                        <a>Snowa</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="menu_top3_divs"></div>
                            <div class="menu_top3_divs"></div>
                            <div class="menu_top3_divs" style="border-left: 0;"></div>
                            <div style="background: url(public/images/video-audio-entertainment.png)
                                         no-repeat center;width: 379px;height: 335px;position: absolute;
                                         left: 0;bottom: 0;"></div>
                        </div>
                    </li>
                    <li data-time="4">
                        <a>لوازم خانگی برقی</a>
                        <div class="menu_top3">
                            <div class="menu_top3_divs">
                                <ul>
                                    <li>
                                        <a class="hover_blue">تبلت</a>
                                    </li>
                                    <li>
                                        <a>Apple</a>
                                    </li>
                                    <li>
                                        <a>Samsung</a>
                                    </li>
                                    <li>
                                        <a>Microsoft</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="menu_top3_divs"></div>
                            <div class="menu_top3_divs"></div>
                            <div class="menu_top3_divs" style="border-left: 0;"></div>
                            <div style="background: url(public/images/tablet-ebook-reader.png)no-repeat
                                         center; width: 379px;height: 335px;position: absolute;
                                         left: 0;bottom: 0;"></div>
                        </div>
                    </li>
                    <li data-time="5">
                        <a>آشپزخانه</a>
                    </li>
                </ul>
            </li>
            <div class="discount">
                <a>
                    <span id="discount_img"></span>
                    پیشنهادهای شگفت انگیز
                </a>
            </div>
        </ul>

    </div>

</nav>
<script>

    var timer = {};

    $('#menu_top li').hover(function () {
        var tag = $(this);
        tag.addClass('active_menu');
        var timerAttr = tag.attr('data-time');
        clearTimeout(timer[timerAttr]);
        timer[timerAttr] = setTimeout(function () {
            $('> ul', tag).fadeIn(0);
            $(' > .menu_top3', tag).fadeIn(0);
        }, 500);
    }, function () {
        var tag = $(this);
        tag.removeClass('active_menu')
        var timerAttr = tag.attr('data-time');
        clearTimeout(timer[timerAttr]);
        timer[timerAttr] = setTimeout(function () {
            $('> ul', tag).fadeOut(0);
            $(' > .menu_top3', tag).fadeOut(0);
        }, 500);
    })
</script>
<!---------------بخش منوی بالای سایت/////////////---------------->