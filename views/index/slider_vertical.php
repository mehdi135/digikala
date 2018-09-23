<style>
    .slider2 {
        width: 890px;
        height: 305px;
        background: white;
        border-radius: 4px;
        overflow: hidden;
        box-shadow: 1px 1px 2px rgba(0, 0, 0, .5);
        margin-top: 10px;
        position: relative;
    }

    a{
        cursor: pointer;
    }

    .slider2_right {
        width: 700px;
        height: 100%;
        float: right;
        background: url('public/images/slider2_bg.jpg');
    }

    .item {
        display: inline-block;
        height: 100%;
    }

    .slider2_left {
        width: 189px;
        height: 305px;
        float: right;
        border-right: 1px solid #5f5f5f;
        background-color: #f5f5f5;
    }

    .slider2_left ul {
        width: 189px;
        height: 305px;
        padding: 0;
        margin: 0;
    }

    .slider2_left ul li {
        height: 12.5%;
        width: 100%;
        display: inline-block;
    }

    .slider2_left ul li a {
        display: inline-block;
        height: 100%;
        width: 189px;
        text-align: center;
        line-height: 35px;
        cursor: pointer;
    }

    .slider2_right_right {
        width: 400px;
        height: 100%;
        float: right;
    }

    .slider2_right_right p:first-child {
        color: red;
        font-size: 15pt;
        margin: 35px 35px 0 0;
    }

    .slider2_right_right p {
        font-size: 10.5pt;
        margin: -2px 35px 0 0;
    }

    .slider2_right_left {
        width: 300px;
        height: 100%;
        float: right;
    }

    .slider2_right_left p {
        text-align: center;
        font-size: 17pt;
    }

    .slider2_right_left img {
        margin-right: 40px;
    }

    .price_info {
        height: 35px;
        margin-right: 35px;
    }

    .price_info_old {
        width: 75px;
        height: 100%;
        background: #ccc;
        float: right;
        position: relative;
        color: #FFFFFF;
        font-size: 25pt;
        text-align: center;
        line-height: 39px;
    }

    .price_info_old span {
        width: 55px;
        height: 1px;
        background: black;
        transform: rotate(-23deg);
        position: absolute;
        right: 10px;
        bottom: 15px;
    }

    .price_info_old::after {
        content: '';
        position: absolute;
        z-index: 2;
        left: -12px;
        top: 0;
        bottom: 0;
        margin: auto;
        width: 0;
        height: 0;
        border-style: solid;
        border-width: 8px 12px 8px 0;
        border-color: transparent #cccccc transparent transparent;
    }

    .price_info_new {
        width: 155px;
        margin-right: 2px;
        height: 100%;
        background: red;
        float: right;
        position: relative;
        color: white;
        line-height: 39px;
        font-size: 25pt;
        text-align: center;
    }

    .price_info_new::before {
        content: '';
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        margin: auto;
        width: 0;
        height: 0;
        border-style: solid;
        border-width: 9px 14px 9px 0;
        border-color: transparent #ffffff transparent transparent;
    }

    .price_info_new span {
        display: inline-block;
        float: left;
        font-size: 11pt;
        padding-left: 12px;
        margin: 0;
    }

    .flipTimer, .flipTimer div {
        direction: ltr;
    }

    .flipTimer {
        position: absolute;
        bottom: 10px;
        transform: scale(.3);
        right: -135px;
    }

    .slider2_finished {
        width: 700px;
        height: 100%;
        position: absolute;
        top: 0;
        right: 0;
        background: rgba(0, 0, 0, .01);
        color: red;
        line-height: 235px;
        font-size: 35pt;
        text-align: center;
        display: none;
        z-index: 2;
    }

    .slider2_left .active {
        background: red;
        color: white;
        position: relative;
    }

    .slider2_left .active::after {
        content: "";
        position: absolute;
        right: -17px;
        top: 0;
        width: 0;
        height: 0;
        border-style: solid;
        border-width: 19px 0 19px 17px;
        border-color: transparent transparent transparent #ff0000;
    }
</style>

<?php
$time_end=$data[2];
?>

<div class="slider2">
    <div class="flipTimer" style="direction: ltr;">
        <div class="hours"></div>
        <div class="minutes"></div>
        <div class="seconds"></div>
    </div>
    <div class="slider2_finished">تمام شد!</div>
    <div class="slider2_right">
        <?php
        $getSlider2=$data[1];
        foreach ($getSlider2 as $value) {
            ?>
            <a class="item" href="<?= URL ?>product/index/<?= $value['id']; ?>">
                <div class="slider2_right_right">
                    <p>پیشنهاد شگفت انگیز امروز : </p>
                    <div class="price_info">
                        <div class="price_info_old"><?= $value['price']; ?><span></span></div>
                        <div class="price_info_new"><?= $value['price_total']; ?> <span>تومان</span></div>
                    </div>
                    <p style="margin-top: 20px;">توان: 2.5 وات</p>
                    <p>مقاوم دربرابر ضربه</p>
                </div>
                <div class="slider2_right_left">
                    <p><?= $value['title']; ?></p>
                    <img src="public/images/products/<?= $value['id']; ?>/product_220.jpg">
                </div>
            </a>
            <?php
        }
        ?>
    </div>
    <div class="slider2_left">
        <ul>
            <?php
            $getProduct = $data[1];
            foreach ($getProduct as $value) {
                ?>
                <li>
                    <a><?= $value['title']; ?></a>
                </li>
                <?php
            }
            ?>
        </ul>
    </div>
</div>
<script>
    /*----------////////// SLIDER2  JQUERY \\\\\\\\\\----------*/
    var sliderTag2 = $('.slider2');
    //    تعداد آیتمهای داخل اسلایدر رو نگه میدارد
    var sliderItems2 = sliderTag2.find('.item');
    //    اسلایدی که باید به عنوان اسلاید بعدی ظاهر بشه و در واقع نوبت بعدی رو نشون میدهد
    var nextSlid2 = 1;
    //عدد تعداد آیتمها را در خود نگه میدارد
    var numItems2 = sliderItems2.length;
    var navItem2 = $('.slider2_left li');
    var sliderNavigators2 = sliderTag2.find(navItem2);
    //    فاصله زمانی اجرای دستور و تعویض تصویر اسلایدر
    var timOut2 = 5000;

    slider2();
    var sliderInterval2 = setInterval(slider2, timOut2);
    sliderTag2.mouseleave(function () {
        clearInterval(sliderInterval2);
        sliderInterval2 = setInterval(slider2, timOut2);
    });

    function slider2() {
        sliderNavigators2.removeClass('active');
        if (nextSlid2 > numItems2) {
            nextSlid2 = 1;
        }
        if (nextSlid2 < 1) {
            nextSlid2 = numItems2;
        }
        sliderItems2.hide();
        sliderItems2.eq(nextSlid2 - 1).fadeIn(100);
        sliderNavigators2.eq(nextSlid2 - 1).addClass('active');
        nextSlid2++;
    }

    function goToSlid2(index) {
        nextSlid2 = index;
        slider2();
    }

    navItem2.click(function () {
        clearInterval(sliderInterval2);
        var index = $(this).index();
        goToSlid2(index + 1);
    });
    $('.flipTimer').flipTimer({
        direction: 'down',
        date: '<?= $time_end ?>',
        callback: function () {
            $('.slider2_right_right').css('opacity', .4);
            $('.slider2_right_left').css('opacity', .4);
            $('.slider2_finished').fadeIn(200);
        }
    });
    /*----------////////// SLIDER2  JQUERY \\\\\\\\\\----------*/
</script>