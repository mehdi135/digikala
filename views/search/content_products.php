<!----------//////////PRODUCTS\\\\\\\\\\----------->
<style>
    #pagination ul li {
        font-size: 10pt;
        float: right;
        width: 25px;
        height: 20px;
        margin-right: 5px;
        text-align: center;
        border-radius: 4px;
        border: 1px solid #a9a2a2;
        box-shadow: 1px 2px 2px rgba(0, 0, 0, .2);
    }

    #products {
        display: inline-block;
        width:100%;
    }

    #products ul {
        display: inline-block;
        padding-right: 0;
        width:100%;
    }

    #products ul li {
        width: 219px;
        height: 300px;
        margin-right: 5px;
        float: right;
        display: inline-block;
        margin-top: 10px;
        border-radius: 4px;
        border: 1px solid #a9a2a2;
        box-shadow: 1px 2px 2px rgba(0, 0, 0, .2);
    }

    #products ul li a {
        display: block;
        height: 100%;
        margin: 3px 5px 3px 5px;
        position: relative;
    }

    #products .description{
        height:215px;
        display: none;
    }

    .products_img, .products_colors {
        text-align: center;
    }

    .products_colors {
        height: 23px;
    }

    .products_color {
        display: inline-block;
        width: 12px;
        height: 12px;
        border-radius: 4px;
        border: 1px solid #a9a2a2;
        box-shadow: 1px 2px 2px rgba(0, 0, 0, .2);
    }

    .products_stars {
        direction: ltr;
    }

    .products_stars_gray {
        width: 55px;
        height: 9px;
        background: url(public/images/stars.png) repeat-x 0 -9px;
        position: relative;
    }

    .products_stars_red {
        width: 55px;
        height: 9px;
        top: 0;
        left: 0;
        position: absolute;
        background: url(public/images/stars.png) repeat-x 0 0;
    }

    .products_title {
        font-size: 9pt;
        text-align: left;
        height: 33px;
        margin-top: 2px;
    }

    .products_price_red {
        font-size: 10pt;
        color: red;
        text-decoration: line-through;
        margin: 0;
    }

    .products_price_green {
        font-size: 12pt;
        color: green;
        margin: 0;
    }

    .products_add_cart {
        display: inline-block;
        width: 30px;
        height: 30px;
        position: absolute;
        left: 0;
        bottom: 10px;
        background: url("public/images/addtocart-min.png") no-repeat center;
    }

    .display1 li{
        width: 100% !important;

    }

    .display1 .right{
        float: right;
        width: 217px;
        height: 100%;
    }

    .display1 .left{
        float: left;
        width: 660px;
        height:100%;
    }

    .display1 .products_stars{
        margin-left: 80px !important;
    }

    .display1 .products_title{
        font-size: 14pt !important;
        text-align: right !important;
    }

    .display1 .description{
        display: block !important;

    }
</style>

<div id="products" class="">
    <ul>
        <li>
            <a>
                <div class="right">
                    <div class="products_img">
                        <img src="public/images/product1.jpg" alt="">
                    </div>
                    <div class="products_colors">
                        <span class="products_color" style="background: silver;"></span>
                        <span class="products_color" style="background: gold;"></span>
                        <span class="products_color" style="background: white;"></span>
                    </div>
                    <div class="products_stars">
                        <div class="products_stars_gray">
                            <div class="products_stars_red">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="left">
                    <div class="products_title">Apple</div>
                    <div class="description">توضیحات محصول</div>
                    <div class="products_price"><p class="products_price_red">200,000 تومان</p></div>
                    <div class="products_price"><p class="products_price_green">100,000 تومان</p></div>
                    <span class="products_add_cart"></span>
                </div>
            </a>
        </li>
        <li>
            <a>
                <div class="right">
                    <div class="products_img">
                        <img src="public/images/product2.jpg" alt="">
                    </div>
                    <div class="products_colors">
                        <span class="products_color" style="background: silver;"></span>
                        <span class="products_color" style="background: gold;"></span>
                        <span class="products_color" style="background: white;"></span>
                    </div>
                    <div class="products_stars">
                        <div class="products_stars_gray">
                            <div class="products_stars_red">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="left">
                    <div class="products_title">Apple</div>
                    <div class="description">توضیحات محصول</div>
                    <div class="products_price"><p class="products_price_red">200,000 تومان</p></div>
                    <div class="products_price"><p class="products_price_green">100,000 تومان</p></div>
                    <span class="products_add_cart"></span>
                </div>
            </a>
        </li>
        <li>
            <a>
                <div class="right">
                    <div class="products_img">
                        <img src="public/images/product3.jpg" alt="">
                    </div>
                    <div class="products_colors">
                        <span class="products_color" style="background: silver;"></span>
                        <span class="products_color" style="background: gold;"></span>
                        <span class="products_color" style="background: white;"></span>
                    </div>
                    <div class="products_stars">
                        <div class="products_stars_gray">
                            <div class="products_stars_red">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="left">
                    <div class="products_title">Apple</div>
                    <div class="description">توضیحات محصول</div>
                    <div class="products_price"><p class="products_price_red">200,000 تومان</p></div>
                    <div class="products_price"><p class="products_price_green">100,000 تومان</p></div>
                    <span class="products_add_cart"></span>
                </div>
            </a>
        </li>
        <li>
            <a>
                <div class="right">
                    <div class="products_img">
                        <img src="public/images/product1.jpg" alt="">
                    </div>
                    <div class="products_colors">
                        <span class="products_color" style="background: silver;"></span>
                        <span class="products_color" style="background: gold;"></span>
                        <span class="products_color" style="background: white;"></span>
                    </div>
                    <div class="products_stars">
                        <div class="products_stars_gray">
                            <div class="products_stars_red">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="left">
                    <div class="products_title">Apple</div>
                    <div class="description">توضیحات محصول</div>
                    <div class="products_price"><p class="products_price_red">200,000 تومان</p></div>
                    <div class="products_price"><p class="products_price_green">100,000 تومان</p></div>
                    <span class="products_add_cart"></span>
                </div>
            </a>
        </li>
    </ul>
</div>
<script>
    $('.type_one').click(function () {
        $('#products').addClass('display1');
        $(this).css('background-position', '-24px 0px');
        $('.type_two').css('background-position', '0 0');
    });
    $('.type_two').click(function () {
        $('#products').removeClass('display1');
        $(this).css('background-position', '0 -24px');
        $('.type_one').css('background-position', '-24px -24px');
    });
</script>
<!----------//////////PRODUCTS\\\\\\\\\\----------->