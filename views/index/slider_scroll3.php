<style>
    .slider_scroll {
        width: 890px;
        height: 310px;
        box-shadow: 1px 1px 2px rgba(0, 0, 0, .4);
        margin-top: 10px;
        background: white;
        border-radius: 4px;
        overflow: hidden;
        float: right;
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
        width: 780px;
        float: right;
        overflow: hidden;
    }

    .slider_scroll_content_main ul {
        padding: 0;
        margin: 0;
        height: 100%;
    }

    .slider_scroll_content_main ul li {
        width: 195px;
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
<!----------//////////SLIDER SCROLL 3\\\\\\\\\\----------->
<div class="slider_scroll">
    <h3>پر فروش ترین‌ها</h3>
    <div class="slider_scroll_content">
        <div class="slider_scroll_content_prev">
            <span class="prev" onclick="sliderScroll('right',this);"></span>
        </div>
        <div class="slider_scroll_content_main">
            <ul>
                <li>
                    <a>
                        <img src="public/images/sliderscroll2_1.jpg" alt="">
                        <p>لپ تاپ سونی</p>
                        <p class="price">2,300,000</p>
                    </a>
                </li>
                <li>
                    <a>
                        <img src="public/images/sliderscroll2_2.jpg" alt="">
                        <p>گوشی موبایل هوآوی</p>
                        <p class="price">1,360,000</p>
                    </a>
                </li>
                <li>
                    <a>
                        <img src="public/images/sliderscroll2_3.jpg" alt="">
                        <p>لپ تاپ لنوو</p>
                        <p class="price">3,800,000</p>
                    </a>
                </li>
                <li>
                    <a>
                        <img src="public/images/sliderscroll2_4.jpg" alt="">
                        <p>لپ تاپ ایسر</p>
                        <p class="price">1,700,000</p>
                    </a>
                </li>
                <li>
                    <a>
                        <img src="public/images/scrollslider_5.jpg" alt="">
                        <p>مودم 4G</p>
                        <p class="price">340,000</p>
                    </a>
                </li>
            </ul>
        </div>
        <div class="slider_scroll_content_next">
            <span class="next" onclick="sliderScroll('left',this);"></span>
        </div>
    </div>
</div>
<!----------//////////SLIDER SCROLL 3\\\\\\\\\\----------->
<script>
    function sliderScroll(direction, tag) {
        var span_tag = $(tag);
        var sliderScrollTag = span_tag.parents('.slider_scroll');
        var sliderScrollUl = sliderScrollTag.find('.slider_scroll_content_main ul');
        var sliderScrollItems = sliderScrollUl.find('li');
        var marginRightNew;
        var sliderScrollItemsNumber = sliderScrollItems.length;
        var sliderScrollNumbers = Math.ceil(sliderScrollItemsNumber / 4);
        var maxNegativeMargin = (sliderScrollNumbers - 1) * (-780);
        var nextScroll = $('.slider_scroll_content_next .next');
        var prevScroll = $('.slider_scroll_content_prev .prev');
        sliderScrollUl.css('width', sliderScrollItemsNumber * 195);
        var marginRightOld = sliderScrollUl.css('margin-right');
        marginRightOld = parseFloat(marginRightOld);
        if (direction == 'left') {
            marginRightNew = marginRightOld - 780;
        }
        if (direction == 'right') {
            marginRightNew = marginRightOld + 780;
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