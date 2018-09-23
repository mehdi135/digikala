<style>
    .slider_scroll {
        width: 1200px;
        height: 310px;
        box-shadow: 1px 1px 2px rgba(0, 0, 0, .4);
        background: white;
        border-radius: 4px;
        overflow: hidden;
        margin: 10px auto;
    }

    .slider_scroll h3 {
        background: #f7f9fa;
        height: 35px;
        padding-right: 10px;
        padding-top: 7px;
        margin: 0;
        font-weight: normal;
    }

    .slider_scroll_content {
        height: 268px;
    }

    .slider_scroll_content_prev {
        width: 55px;
        height: 100%;
        float: right;
        position: relative;
    }

    .slider_scroll_content_prev .prev {
        width: 17px;
        height: 26px;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        margin: auto;
        display: inline-block;
        background: url("public/images/slices.png") no-repeat -850px -687px;
        position: absolute;
    }

    .slider_scroll_content_next {
        width: 55px;
        height: 100%;
        float: left;
        position: relative;
    }

    .slider_scroll_content_next .next {
        width: 17px;
        height: 26px;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        margin: auto;
        display: inline-block;
        background: url("public/images/slices.png") no-repeat -811px -687px;
        position: absolute;
    }

    .slider_scroll_content_main {
        height: 100%;
        width: 1090px;
        float: right;
        overflow: hidden;
    }

    .slider_scroll_content_main ul {
        padding: 0;
        margin: 0;
        height: 100%;
        width: 100%;
    }

    .slider_scroll_content_main ul li {
        width: 218px;
        height: 100%;
        float: right;
    }

    .slider_scroll_content_main ul li a {
        width: 100%;
        height: 100%;
        display: block;
        text-align: center;
    }

    .slider_scroll_content_main ul li a p {
        margin: 0;
    }

    .price {
        color: green;
        padding-top: 10px;
    }
</style>
<div class="slider_scroll">
    <h3>فقط در دیجی کالا</h3>
    <div class="slider_scroll_content">
        <div class="slider_scroll_content_prev">
            <span class="prev" onclick="sliderScroll('right',this);"></span>
        </div>
        <div class="slider_scroll_content_main">
            <ul>
                <?php
                $onlyDigikala=$data['onlyDigikala'];
                foreach ($onlyDigikala as $value) {
                    ?>
                    <li>
                        <a>
                            <img width="150px" src="public/images/products/<?= $value['id']; ?>/product_220.jpg">
                            <img src="public/images/exclusive-blue.png">
                            <p><?= $value['title']; ?></p>
                            <p class="price"><?= $value['price']; ?></p>
                        </a>
                    </li>
                    <?php
                }
                ?>
            </ul>
        </div>
        <div class="slider_scroll_content_next">
            <span class="next" onclick="sliderScroll('left',this);"></span>
        </div>
    </div>
</div>
<script>
    /*----------////////// SLIDER SCROLL JQUERY \\\\\\\\\\----------*/


    function sliderScroll(direction, tag) {
        var span_tag = $(tag);
        var sliderScrollTag = span_tag.parents('.slider_scroll');
        var sliderScrollUl = sliderScrollTag.find('.slider_scroll_content_main ul');
        var sliderScrollItems = sliderScrollUl.find('li');
        var marginRightNew;
        var sliderScrollItemsNumber = sliderScrollItems.length;
        var sliderScrollNumbers = Math.ceil(sliderScrollItemsNumber / 5);
        var maxNegativeMargin = (sliderScrollNumbers - 1) * (-1090);
        var nextScroll = $('.slider_scroll_content_next .next');
        var prevScroll = $('.slider_scroll_content_prev .prev');
        sliderScrollUl.css('width', sliderScrollItemsNumber * 218);
        var marginRightOld = sliderScrollUl.css('margin-right');
        marginRightOld = parseFloat(marginRightOld);
        if (direction == 'left') {
            marginRightNew = marginRightOld - 1090;
        }
        if (direction == 'right') {
            marginRightNew = marginRightOld + 1090;
        }
        if (marginRightNew < maxNegativeMargin) {
            marginRightNew = 0;
        }
        if (marginRightNew > 0) {
            marginRightNew = maxNegativeMargin;
        }
        sliderScrollUl.animate({'marginRight': marginRightNew}, 1000);
    }

    nextScroll.click(function () {
        sliderScroll('left');
    });
    prevScroll.click(function () {
        sliderScroll('right');
    });
    /*----------////////// SLIDER SCROLL  JQUERY \\\\\\\\\\----------*/
</script>