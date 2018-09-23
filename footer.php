<?php
$option=Model::getOption();
?>

<style>
    footer {
        height: 300px;
        float: right;
        width: 100%;
        margin-top: 45px;

    }

    #footer_top {
        background: #6d717a;
        height: 45px;
        line-height: 45px;
        color: white;
    }

    #footer_bottom {
        height: 255px;
        background: #f7f8fa;
    }

    #footer_top .main {
        width: 1200px;
        height: 100%;
        margin: auto;
    }

    #footer_top i {
        width: 20px;
        height: 20px;
        display: inline-block;
        padding-right: 5px;
        float: left;
        margin-top: 10px;
    }

    #footer_top ul {
        padding: 0;
        margin: 0;
        height: 100%;
        float: left;
    }

    #footer_top li {
        float: left;
        height: 100%;
        padding-right: 50px;

    }

    #footer_top li a {
        color: white;
        height: 100%;
    }

    #footer_main {
        width: 1200px;
        height: 100%;
        margin: auto;
    }

    .footer_bottom_right {
        width: 250px;
        height: 100%;
        float: right;
    }

    .footer_bottom_right ul {
        padding: 0;
    }

    .footer_bottom_right ul li {
        margin-top: 12px;
    }

    .footer_bottom_right ul li:first-child {
        font-size: 16pt;
        margin: 30px 0 20px 0;
    }

    .footer_bottom_center {
        width: 250px;
        height: 100%;
        float: right;
        margin-right: 30px;
    }

    .footer_bottom_center ul {
        padding: 0;
    }

    .footer_bottom_center ul li {
        margin-top: 12px;
    }

    .footer_bottom_center ul li:first-child {
        font-size: 16pt;
        margin: 30px 0 20px 0;
    }

    .footer_bottom_left {
        width: 590px;
        height: 100%;
        float: left;
    }

    .footer_bottom_left input {
        width: 470px;
        height: 30px;
        border: 1px solid #ccc;
        border-radius: 4px;
        float: right;
        padding: 0 10px 5px 0;
        box-shadow: 0 1px 2px rgba(0, 0, 0, .4);
    }

    .footer_bottom_left span {
        width: 90px;
        height: 37px;
        box-shadow: 0 1px 2px rgba(0, 0, 0, .4);
        border-radius: 4px;
        float: left;
        background: #208de6;
        color: white;
        font-size: 10pt;
        text-align: center;
        line-height: 36px;
        cursor: pointer;
    }

    #footer_bottom_left_social {
        height: 48px;
        width: 100%;
        margin-top: 40px;
    }

    #footer_bottom_left_email {
        height: 37px;
        width: 100%;
    }

    .app_button {
        width: 150px;
        height: 48px;
        float: left;
        margin-right: 10px;
    }

    .app_button span {
        width: 100%;
        height: 100%;
    }

    .social_button {
        width: 29px;
        height: 29px;
        float: right;
        border-radius: 8px;
        margin: 10px 0 0 10px;
    }

    .social_button span {
        width: 100%;
        height: 100%;
        background: url(public/images/slices.png);
    }

    /*----------//////////FOOTER\\\\\\\\\\----------*/
</style>

<footer>
    <div id="footer_top">
        <div class="main">
            <span>7 روز هفته، 24 ساعته پاسخگوی شما هستیم</span>
            <ul>
                <li>
                    <a><?= $option['email']; ?></a>
                    <i style="background: url(public/images/slices.png)-318px -417px;"></i>
                </li>
                <li>
                    <a>سوالات متداول</a>
                    <i style="background: url(public/images/slices.png)-357px -417px;"></i>
                </li>
                <li>
                    <a><?= $option['tel']; ?></a>
                    <i style="background: url(public/images/slices.png)-395px -417px;"></i>
                </li>
            </ul>
        </div>
    </div>
    <div id="footer_bottom">
        <div id="footer_main">
            <div class="footer_bottom_right">
                <ul>
                    <li>
                        <a>راهنمای خرید از دیجی کالا</a>
                    </li>
                    <li>
                        <a>ثبت سفارش</a>
                    </li>
                    <li>
                        <a>رویه های ارسال کالا</a>
                    </li>
                    <li>
                        <a>شیوه های پرداخت</a>
                    </li>
                    <li>
                        <a>معرفی دیجی بن</a>
                    </li>
                </ul>
            </div>
            <div class="footer_bottom_center">
                <ul>
                    <li>
                        <a>خدمات مشتریان</a>
                    </li>
                    <li>
                        <a>پاسخ به پرسشهای متداول</a>
                    </li>
                    <li>
                        <a>رویه های بازگرداندن کالا</a>
                    </li>
                    <li>
                        <a>شرایط استفاده</a>
                    </li>
                    <li>
                        <a>حریم خصوصی</a>
                    </li>
                </ul>
            </div>
            <div class="footer_bottom_left">
                <p style="font-size: 18pt">اولین نفری که مطلع می‌شود، باشید!</p>
                <div id="footer_bottom_left_email">
                    <input type="text" placeholder="آدرس ایمیل خود را وارد کنید:">
                    <span>تایید ایمیل</span>
                </div>
                <div id="footer_bottom_left_social">
                    <a class="app_button"><span
                            style="background: url(public/images/android_app_bg.png)no-repeat center;"></span></a>
                    <a class="app_button"><span
                            style="background: url(public/images/ios_app_bg.png)no-repeat center;"></span></a>
                    <a class="social_button"><span style="background-position:-370px -620px;"></span></a>
                    <a class="social_button"><span style="background-position: -411px -620px;"></span></a>
                    <a class="social_button"><span style="background-position:-452px -620px;"></span></a>
                    <a class="social_button"><span style="background-position:-493px -620px;"></span></a>
                    <a class="social_button"><span style="background-position:-618px -620px;"></span></a>
                    <a class="social_button"><span style="background-position:-576px -620px;"></span></a>
                </div>
            </div>
        </div>
    </div>
</footer>

</body>
</html>