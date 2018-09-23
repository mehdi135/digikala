<style>
    .slider {
        height: 310px;
        position: relative;
    }

    .slider .prev {
        width: 19px;
        height: 33px;
        display: block;
        position: absolute;
        right: 20px;
        top: 120px;
        z-index: 2;
        cursor: pointer;
        background: url(public/images/arrow_slider.png) no-repeat 0 -33px;
    }

    .slider .next {
        width: 19px;
        height: 33px;
        display: block;
        position: absolute;
        top: 120px;
        left: 20px;
        cursor: pointer;
        z-index: 2;
        background: url(public/images/arrow_slider.png) no-repeat;
    }

    .slider_img {
        height: 310px;
        width: 100%;
        position: relative;
        border-radius: 4px;
        box-shadow: 1px 1px 2px rgba(0, 0, 0, .6);
    }

    .slider_img a {
        display: none;
        width: 100%;
        height: 100%;
    }

    .slider_navigator {
        height: 50px;
        width: 100%;
        position: absolute;
        bottom: 0;
        background: rgba(0, 0, 0, .6);
    }

    .slider_navigator ul {
        margin: 0;
        width: 890px;
        height: 50px;
        padding: 0;
    }

    .slider_navigator ul li {
        height: 100%;
        width: 20%;
        float: right;
    }

    .slider_navigator ul li a {
        width: 100%;
        height: 100%;
        color: white;
        display: inline-block;
        text-align: center;
        line-height: 45px;
        float: right;
    }

    .slider_navigator .active > a {
        background: white;
        color: black;
        position: relative;
    }

    .slider_navigator .active > a::after {
        content: "";
        position: absolute;
        top: -10px;
        left: 0;
        right: 0;
        margin: 0 auto;
        width: 0;
        height: 0;
        border-style: solid;
        border-width: 0 12.5px 10px 12.5px;
        border-color: transparent transparent #ffffff transparent;
    }
</style>

<div class="slider">
    <span class="prev"></span>
    <span class="next"></span>
    <!----------//////////SLIDER_IMG\\\\\\\\\\----------->
    <div class="slider_img">

        <?php
        $getSlider1 = $data[0];
        foreach ($getSlider1 as $value) {
            ?>
            <a class="item" href="<?= $value['link']; ?>">
                <img src="<?= $value['img']; ?>">
            </a>
            <?php
        }
        ?>
        <!----------//////////SLIDER_NAVIGATOR\\\\\\\\\\----------->
        <div class="slider_navigator">
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
        <!----------//////////SLIDER_NAVIGATOR\\\\\\\\\\----------->
    </div>
    <!----------//////////SLIDER_IMG\\\\\\\\\\----------->
</div>

<script>
    /*----------////////// SLIDER_TOP  JQUERY \\\\\\\\\\----------*/
    var sliderTag = $('.slider');
    //    تعداد آیتمهای داخل اسلایدر رو نگه میدارد
    var sliderItems = sliderTag.find('.item');
    //    اسلایدی که باید به عنوان اسلاید بعدی ظاهر بشه و در واقع نوبت بعدی رو نشون میدهد
    var nextSlid = 1;
    //    Next ICON Var in slider
    var next = $('.next');
    //    Prev ICON Var in slider
    var prev = $('.prev');
    //عدد تعداد آیتمها را در خود نگه میدارد
    var numItems = sliderItems.length;
    var navItem = $('.slider_navigator li');
    var sliderNavigators = sliderTag.find(navItem);
    //    فاصله زمانی اجرای دستور و تعویض تصویر اسلایدر
    var timOut = 5000;

    slider();
    var sliderInterval = setInterval(slider, timOut);
    sliderTag.mouseleave(function () {
        clearInterval(sliderInterval);
        sliderInterval = setInterval(slider, timOut);
    });

    function slider() {
        sliderNavigators.removeClass('active');
        if (nextSlid > numItems) {
            nextSlid = 1;
        }
        if (nextSlid < 1) {
            nextSlid = numItems;
        }
        sliderItems.hide();
        sliderItems.eq(nextSlid - 1).fadeIn(100);
        sliderNavigators.eq(nextSlid - 1).addClass('active');
        nextSlid++;
    }

    function goToNext() {
        clearInterval(sliderInterval);
        slider();
    }

    function goToPrev() {
        clearInterval(sliderInterval);
        nextSlid = nextSlid - 2;
        slider();
    }

    function goToSlid(index) {
        nextSlid = index;
        slider();
    }

    next.click(function () {
        clearInterval(sliderInterval);
        goToNext()
    });

    prev.click(function () {
        clearInterval(sliderInterval);
        goToPrev();
    });

    navItem.click(function () {
        clearInterval(sliderInterval);
        var index = $(this).index();
        goToSlid(index + 1);
    });
    /*----------////////// SLIDER_TOP  JQUERY \\\\\\\\\\----------*/
</script>