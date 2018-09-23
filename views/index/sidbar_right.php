<style>
    #sidbar_right {
        width: 290px;
        float: right;
    }

    #sidbar_right > img {
        border-radius: 4px;
        overflow: hidden;
        width: 100%;
    }

    /*----------//////////digikala_tv\\\\\\\\\\----------*/
    #digikala_tv {
        padding: 0;
        margin: -10px 0;
    }

    #digikala_tv > li {
        border-radius: 4px;
        overflow: hidden;
        height: 160px;
        margin-top: 10px;
    }

    #digikala_tv > li:hover .circle {
        background: rgba(255, 255, 255, .5);
    }

    #digikala_tv > li .circle {
        transition: all 1s ease;
    }

    #digikala_tv li a {
        display: inline-block;
        width: 100%;
        height: 160px;
        position: relative;

    }

    #digikala_tv li a::before {
        content: "";
        width: 100%;
        height: 160px;
        display: block;
        position: absolute;
        background: rgba(0, 0, 0, .4);
    }

    #digikala_tv > li > a > img {
        display: inline-block;
        width: 100%;
        height: 100%;
    }

    #digikala_tv > li > a > span {
        width: 50px;
        height: 50px;
        border-radius: 100%;
        display: inline-block;
        background: rgba(255, 255, 255, .3);
        position: absolute;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        margin: auto;
        transition: all 1s ease;
    }

    #digikala_tv > li > a > span img {
        padding: 18px 14px;
    }

    /*----------//////////digikala_tv\\\\\\\\\\----------*/

    /*----------//////////digikala_tv_pic\\\\\\\\\\----------*/
    #sidbar_right_pic {
        padding: 0;
        margin: 0;
    }

    #sidbar_right_pic > li {
        width: 290px;
        height: 265px;
        margin-top: 10px;
        border-radius: 4px;
        overflow: hidden;
        box-shadow: 1px 1px 2px rgba(0, 0, 0, .5);
    }

    #sidbar_right_pic > li:first-child {
        width: 290px;
        height: 265px;
        margin-top: 20px;
        border-radius: 4px;
        overflow: hidden;
    }

    #sidbar_right_pic > li > a {
        width: 100%;
        height: 100%;
        display: inline-block;
    }

    #sidbar_right_pic > li > a > span {
        width: 100%;
        height: 100%;
        display: inline-block;
    }

    /*----------//////////digikala_tv_pic\\\\\\\\\\----------*/

    /*----------//////////sidbar_right_last_news\\\\\\\\\\----------*/
    #sidbar_right_last_news {
        width: 290px;
        background: white;
        margin-top: 10px;
        border-radius: 4px;
        overflow: hidden;
    }

    #sidbar_right_last_news > h3 {
        background: #f7f9fa;
        font-weight: normal;
        font-size: 12pt;
        padding-right: 15px;
        line-height: 37px;
        margin: 0;
    }

    #sidbar_right_last_news > ul {
        width: 290px;
        height: 75px;
        padding: 15px;
    }

    #sidbar_right_last_news > ul > li {
        width: 100%;
        height: 100%;
        margin-bottom: 20px;
    }

    #sidbar_right_last_news > ul > li:hover {
        color: red;
    }

    .col_right {
        width: 60px;
        height: 60px;
        border-radius: 100%;
        display: inline-block;
        float: right;
    }

    .col_right > img {
        width: 60px;
        height: 60px;
        border-radius: 100%;
        display: inline-block;
    }

    .col_left {
        width: 200px;
        float: right;
        font-size: 11pt;
        padding-right: 20px;
    }

    .col_left > p {
        margin: 0;
    }

    .col_left > p:nth-child(2) {
        font-size: 9pt;
        color: gray;
    }

    /*----------//////////sidbar_right_last_news\\\\\\\\\\----------*/

    /*----------//////////sidbar_right_logo\\\\\\\\\\----------*/
    .sidbar_right_logo {
        width: 290px;
        height: 300px;
        margin-top: 10px;
    }

    .sidbar_right_logo > a {
        display: block;
        background: white;
        float: right;
        height: 95px;
        width: 120px;
        margin-bottom: 10px;
        border-radius: 4px;
        overflow: hidden;
        padding: 0 10px;
        line-height: 110px;
        box-shadow: 1px 1px 2px rgba(0, 0, 0, .4);
    }

    .sidbar_right_logo > a:nth-child(even) {
        float: left;
        margin-left: 0;
    }

    .sidbar_right_logo > a > img {
        width: 100%;
    }

    /*----------//////////sidbar_right_logo\\\\\\\\\\----------*/
</style>

<!----------//////////sidbar_right\\\\\\\\\\----------->
<div id="sidbar_right">
    <img src="public/images/Euro2016-290.52.jpg" alt="">
    <!----------//////////digikala_tv\\\\\\\\\\----------->
    <ul id="digikala_tv">
        <li>
            <a>
                <img src="public/images/TV_100_Innovative_Products.jpg" alt="">
                <span class="circle"> <img src="public/images/play-button.png" alt=""></span>
            </a>
        </li>
        <li>
            <a>
                <img src="public/images/Motorola_Moto_360_1_Min_Intro.jpg" alt="">
                <span class="circle"> <img src="public/images/play-button.png" alt=""></span>
            </a>
        </li>
    </ul>
    <!----------//////////digikala_tv\\\\\\\\\\----------->

    <!----------//////////digikala_tv_pic\\\\\\\\\\----------->
    <ul id="sidbar_right_pic">
        <li>
            <a>
                <span style="background: url(public/images/li1.jpg) no-repeat center;"></span>
            </a>
        </li>
        <li>
            <a>
                <span style="background: url(public/images/li2.jpg) no-repeat center;"></span>
            </a>
        </li>
        <li>
            <a>
                <span style="background: url(public/images/li3.jpg) no-repeat center;"></span>
            </a>
        </li>
    </ul>
    <!----------//////////digikala_tv_pic\\\\\\\\\\----------->

    <!----------//////////sidbar_right_last_news\\\\\\\\\\----------->
    <div id="sidbar_right_last_news">
        <h3>تازه ترین خبرها</h3>
        <ul>
            <li>
                <a>
                    <div class="col_right">
                        <img src="public/images/SanDisk_Headquarters_Milpitas-60x60.jpg">
                    </div>
                    <div class="col_left">
                        <p>کارت حافظه های 256 گیگابایتی SanDisk معرفی شدند</p>
                        <p>پنج شنبه 3 اردیبهشت 97</p>
                    </div>
                </a>
            </li>
            <li>
                <a>
                    <div class="col_right">
                        <img src="public/images/news_one.jpg">
                    </div>
                    <div class="col_left">
                        <p>کارت حافظه های 256 گیگابایتی SanDisk معرفی شدند</p>
                        <p>پنج شنبه 3 اردیبهشت 97</p>
                    </div>
                </a>
            </li>
            <li>
                <a>
                    <div class="col_right">
                        <img src="public/images/news_two.jpg">
                    </div>
                    <div class="col_left">
                        <p>کارت حافظه های 256 گیگابایتی SanDisk معرفی شدند</p>
                        <p>پنج شنبه 3 اردیبهشت 97</p>
                    </div>
                </a>
            </li>
            <li>
                <a>
                    <div class="col_right">
                        <img src="public/images/news_three.jpg">
                    </div>
                    <div class="col_left">
                        <p>کارت حافظه های 256 گیگابایتی SanDisk معرفی شدند</p>
                        <p>پنج شنبه 3 اردیبهشت 97</p>
                    </div>
                </a>
            </li>
            <li>
                <a>
                    <div class="col_right">
                        <img src="public/images/news_four.jpg">
                    </div>
                    <div class="col_left">
                        <p>کارت حافظه های 256 گیگابایتی SanDisk معرفی شدند</p>
                        <p>پنج شنبه 3 اردیبهشت 97</p>
                    </div>
                </a>
            </li>
            <li>
                <a>
                    <div class="col_right">
                        <img src="public/images/news_five.jpg">
                    </div>
                    <div class="col_left">
                        <p>کارت حافظه های 256 گیگابایتی SanDisk معرفی شدند</p>
                        <p>پنج شنبه 3 اردیبهشت 97</p>
                    </div>
                </a>
            </li>
        </ul>
    </div>
    <!----------//////////sidbar_right_last_news\\\\\\\\\\----------->

    <!----------//////////sidbar_right_logo\\\\\\\\\\----------->
    <div class="sidbar_right_logo">
        <a><img src="public/images/panasonic.png"></a>
        <a><img src="public/images/lg.png"></a>
        <a><img src="public/images/lenovo.png"></a>
        <a><img src="public/images/x.vision.png"></a>
        <a><img src="public/images/adata.png"></a>
        <a><img src="public/images/asus.png"></a>
        <a><img src="public/images/nivea.png"></a>
        <a><img src="public/images/samsung-brand.jpg"></a>
    </div>
    <!----------//////////sidbar_right_logo\\\\\\\\\\----------->
</div>
<!----------//////////sidbar_right\\\\\\\\\\----------->