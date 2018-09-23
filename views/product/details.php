<!----------//////////DETAILS\\\\\\\\\\----------->
<style>
    #details .right {
        width: 450px;
        float: right;
        margin-top: 10px;
        background: white;
    }

    #details .right #top_icon {
        text-align: left;

    }

    .right #top_icon #favorit, #share {
        background: url("public/images/slices.png") no-repeat;
        display: inline-block;
        width: 20px;
        height: 20px;
        margin-left: 15px;
        margin-top: 10px;
    }

    .right #top_icon #favorit {
        background-position: -161px -186px;
    }

    .right #top_icon #share {
        background-position: -211px -187px;
    }

    #details .right .galery {
        text-align: center;
    }

    #details .right .galery #main_pic {
        margin-top: 15px;
    }

    #details .right .galery ul {
        float: right;
        width: 100%;
        padding: 0;
        margin: 0;
        direction: ltr;
    }

    #details .right .galery ul li {
        display: inline-block;
        width: 80px;
        height: 80px;
        border: 1px solid #dad8d8;
        border-radius: 4px;
        overflow: hidden;
        margin-top: 10px;
        text-align: center;
        box-shadow: 1px 2px 3px rgba(0, 0, 0, .2);
    }

    #details .right .galery ul li img {
        position: relative;
        top: 5px;
        width: 70px;
        height: 70px;
    }

    #details .right .galery span {
        background: url(public/images/slices.png) no-repeat -567px -34px;
        width: 30px;
        height: 12px;
        display: inline-block;
        position: relative;
        top: 30px;
    }

</style>
<div id="details">
    <div class="right">
        <div id="top_icon">
            <span id="favorit"></span>
            <span id="share"></span>
        </div>
        <div class="galery">
            <img id="main_pic" src="public/images/products/<?= $productInfo['id']; ?>/product_350.jpg"
                 data-zoom-image="public/images/products/<?= $productInfo['id']; ?>/product.jpg">
            <ul>
                <?php
                $getGallery=$data['getGallery'];
                foreach ($getGallery as $gallery) {
                    if($gallery['threed']==0){
                    ?>
                    <li><img src="public/images/products/<?= $productInfo['id']; ?>/gallery/small/<?= $gallery['img']; ?>"</li>
                    <?php
                }}
                ?>
                <li><span></span></li>
            </ul>
        </div>
        <script>
            $('#main_pic').elevateZoom({
                zoomType: "lens",
                lensShape: "round",
                lensSize: 200, 'scrollZoom': true
            });
        </script>
    </div>
    <style>
        #details .left {
            width: 710px;
            float: left;
            margin-top: 10px;
            background: white;;
        }

        #details .left .title {
            width: 100%;
            height: 60px;
            background: #f3f3f3;
            float: right;
            line-height: 35px;
        }

        #details .left .title #name {
            position: relative;
            top: 7px;
            right: 7px;
        }

        #details .left .title #rate {
            float: left;
            font-size: 10pt;
            margin-top: -3px;
            margin-left: -7px;
        }

        .products_stars {
            direction: ltr;
            position: relative;
            top: 15px;
            left: 20px;
            float: left;
        }

        .products_stars_gray {
            width: 55px;
            height: 9px;
            background: url(public/images/stars.png) repeat-x 0 -9px;
            position: relative;
        }

        .products_stars_red {
            width: 35px;
            height: 9px;
            top: 0;
            left: 0;
            position: absolute;
            background: url(public/images/stars.png) repeat-x 0 0;
        }

    </style>
    <div class="left">
        <div class="title"><span id="name"><?= $productInfo['title']; ?></span>
            <div class="products_stars">
                <div class="products_stars_gray">
                    <div class="products_stars_red">
                    </div>
                </div>
                <span id="rate">4 رای از 85 رای</span>
            </div>

        </div>
        <style>
            #details .left .right {
                width: 415px;
                float: right;
                position: relative;
            }

            #details .left .right h4 {
                font-size: 14pt;
                float: right;
            }

            #details .left .right ul {
                padding: 0;
                margin: 0;
                float: right;
                width: 100%;
            }

            #details .left .right ul .button_color {
                width: 75px;
                height: 30px;
                font-size: 11pt;
                line-height: 29px;
                float: right;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-shadow: 1px 2px 3px rgba(0, 0, 0, .2);
                margin-left: 10px;
                position: relative;
                cursor: pointer;
            }

            #details .left .right ul .button_color .color {
                float: right;
                border-radius: 100%;
                width: 20px;
                height: 20px;
                margin: 5px;
                border: 1px solid #ccc;
                z-index: 2;
            }

            #details .left .right ul .button_color .color.active::after {
                content: '';
                width: 12px;
                height: 6px;
                position: absolute;
                right: 11px;
                top: 13px;
                display: inline-block;
                background: url(public/images/slices.png) no-repeat -168px -85px;
                z-index: 3;
            }

            #details .left .right .guaranty {
                width: 390px;
                height: 37px;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-shadow: 1px 2px 3px rgba(0, 0, 0, .2);
                float: right;
                background: #f1f1f1;
                position: relative;
                text-align: center;
                cursor: pointer;
            }

            #details .left .right .guaranty::before {
                content: '';
                width: 21px;
                height: 21px;
                background: url("public/images/slices.png") no-repeat -138px -78px;
                position: absolute;
                top: 9px;
                right: 10px;
            }

            #details .left .right .guaranty_arrow {
                width: 17px;
                height: 13px;
                background: url("public/images/slices.png") no-repeat -33px -462px;
                position: absolute;
                top: 14px;
                left: 10px;
            }

            #details .left .right .guaranty_arrow.uparrow {
                width: 17px;
                height: 13px;
                background: url("public/images/slices.png") no-repeat -33px -750px;
                position: absolute;
                top: 14px;
                left: 10px;
            }

            #details .left .right .guaranty span {
                line-height: 38px;
            }

            #details .left .right .guaranty_ul {
                width: 390px;
                border: 1px solid #ccc;
                margin-top: 2px;
                border-radius: 3px;
                box-shadow: 1px 2px 3px rgba(0, 0, 0, .2);
                display: none;
                cursor: pointer;
                position: absolute;
                top: 228px;
                z-index: 3;
            }

            #details .left .right .guaranty_menu {
                width: 360px;
                height: 37px;
                float: right;
                background: white;
                position: relative;
                padding-right: 30px;
                line-height: 38px;
            }

            #details .left .right .guaranty_menu:hover {
                background: #f1f1f1;
            }

            #details .left .left {
                width: 300px;
                float: left;
            }

        </style>
        <div class="right">
            <h4>انتخاب رنگ :</h4>

            <?php
            $all_colors=$productInfo['all_colors'];
            $all_garranty=$productInfo['all_garranty'];
            ?>

            <ul>
                <?php
                foreach ($all_colors as $value) {
                    ?>
                    <li class="button_color" style="background: #f1f1f1;">
                    <span class="color" style="background: <?= $value['hex']; ?>;">
                    </span>
                        <?= $value['title']; ?>
                    </li>
                    <?php
                }
                ?>
            </ul>
            <h4>انتخاب گارانتی :</h4>
            <div class="guaranty">
                <span class="title_guaranty">انتخاب کنید</span>
                <span class="guaranty_arrow"></span>
            </div>
            <ul class="guaranty_ul">
                <?php
                foreach ($all_garranty as $garranty) {
                    ?>
                    <li data-id="<?= $garranty['id']; ?>" class="guaranty_menu"><?= $garranty['title']; ?></li>
                    <?php
                }
                ?>
            </ul>
            <style>
                .right .prices {
                    float: right;
                    margin-top: 60px;
                }

                .right .prices span {
                    float: right;
                    margin-left: 10px;
                }

                .right .prices .mablagh {
                    text-decoration: line-through;
                }

                .right .takhfif::before {
                    content: '';
                    position: absolute;
                    right: 0;
                    top: 0;
                    bottom: 0;
                    margin: auto;
                    height: 0;
                    border-style: solid;
                    border-width: 5px 6px 5px 0;
                    border-color: transparent #ffffff transparent transparent;
                }

                .right .takhfif {
                    width: 150px;
                    height: 25px;
                    float: right;
                    margin-top: 60px;
                    margin-right: 30px;
                    border-radius: 1px;
                    box-shadow: 1px 2px 3px rgba(0, 0, 0, .2);
                    overflow: hidden;
                    position: relative;
                }

                .right .takhfif .right1 {
                    width: 30%;
                    height: 100%;
                    color: white;
                    font-size: 11pt;
                    padding-right: 3px;
                    background: rgba(255, 0, 0, 0.5);
                    float: right;
                    display: inline-block;
                    text-align: center;
                    line-height: 25px;
                }

                .right .takhfif .left1 {
                    width: 66%;
                    height: 100%;
                    color: white;
                    font-size: 11pt;
                    padding-right: 3px;
                    background: rgba(255, 0, 0, 0.7);
                    float: right;
                    display: inline-block;
                    text-align: center;
                    line-height: 25px;
                }
            </style>
            <div class="prices">
                <span>قیمت</span>
                <span class="mablagh"><?= $productInfo['price']; ?></span>
                <span>تومان</span>
            </div>
            <div class="takhfif">
                <span class="right1">تخفیف</span>
                <span class="left1"><?= $productInfo['price_discount']; ?> تومان</span>
            </div>
            <style>
                .price_for_you {
                    width: 375px;
                    height: 30px;
                    display: inline-block;
                    float: right;
                    margin-top: 30px;
                }

                .price_for_you .price_icon {
                    width: 30px;
                    height: 30px;
                    display: inline-block;
                    vertical-align: middle;
                    background: url("public/images/slices.png") no-repeat -868px -241px;
                    margin-left: 5px;
                }

                .price_for_you .price_matn {
                    margin-left: 15px;
                    font-size: 17pt;
                }

                .price_for_you .price_mablagh {
                    margin-left: 15px;
                    font-size: 22pt;
                    color: green;
                    vertical-align: middle;
                }

                .price_for_you .price_toman {
                    font-size: 11pt;
                    color: green;
                }
            </style>
            <div class="price_for_you">
                <span class="price_icon"></span>
                <span class="price_matn">قیمت برای شما :</span>
                <span class="price_mablagh"><?= $productInfo['price_total']; ?></span>
                <span class="price_toman">تومان</span>
            </div>
            <style>
                .comparison_shoping {
                    width: 400px;
                    height: 40px;
                    float: right;
                    margin-top: 30px;
                }

                .comparison {
                    width: 150px;
                    height: 40px;
                    float: right;
                    border-radius: 3px;
                    box-shadow: 1px 2px 3px rgba(0, 0, 0, .2);
                    overflow: hidden;
                }

                .comparison_matn {
                    width: 110px;
                    height: 40px;
                    background: #b5b3b3;
                    text-align: center;
                    float: right;
                    display: inline-block;
                    line-height: 38px;
                    color: white;
                }

                .comparison_icon {
                    width: 40px;
                    height: 40px;
                    background: #d7d5d5;
                    text-align: center;
                    float: right;
                    display: inline-block;
                }

                .comparison_icon .arrow_icon {
                    width: 17px;
                    height: 13px;
                    background: url(public/images/slices.png) no-repeat -780px -480px;
                    text-align: center;
                    display: inline-block;
                    position: relative;
                    top: -17px;
                    left: -20px;
                }

            </style>
            <div class="comparison_shoping">
                <div class="comparison">
                    <span class="comparison_matn">مقایسه کن</span>
                    <span class="comparison_icon"><span class="arrow_icon"></span></span>
                </div>
                <style>
                    .shoping {
                        width: 205px;
                        height: 40px;
                        float: left;
                        border-radius: 3px;
                        box-shadow: 1px 2px 3px rgba(0, 0, 0, .2);
                        overflow: hidden;

                    }

                    .shoping .shoping_icon {
                        width: 55px;
                        height: 40px;
                        float: right;
                        display: inline-block;
                        background: #00cb00;
                        text-align: center;
                    }

                    .shoping .shoping_icon .arrow_icon {
                        width: 25px;
                        margin-top: 9px;
                        height: 25px;
                        margin-right: 13px;
                        display: inline-block;
                        background: url(public/images/slices.png) no-repeat -160px -420px;
                    }

                    .shoping .shoping_matn {
                        width: 150px;
                        height: 40px;
                        float: right;
                        display: inline-block;
                        background: #00b500;
                        text-align: center;
                        line-height: 38px;
                        color: white;
                    }

                </style>
                <div class="shoping">
                    <span class="shoping_icon"><span class="arrow_icon"></span></span>
                    <span class="shoping_matn">افزودن به سبد خرید</span>
                </div>
            </div>
        </div>
        <script>

            $('#details .left .right ul .button_color').click(function () {
                $('.button_color').css('background', '#fff');
                $(this).css('background', '#f1f1f1');
                $('.color').removeClass('active');
                $('.color', this).addClass('active');
            });

            $('#details .left .right .guaranty').click(function () {
                $('.guaranty_ul').slideToggle(200);
                $('.guaranty_arrow').toggleClass('uparrow');
            });

            $('#details .left .right .guaranty_menu').click(function () {
                var txt = $(this).text();
                $('.guaranty .title_guaranty').text(txt);
                $('.guaranty_ul').slideUp(0);
            });

        </script>
        <div class="left"></div>

        <style>
            /*----------//////////SERVICES FEATURE\\\\\\\\\\----------*/
            .services_feature {
                width: 890px;
                height: 75px;
                border-top: 1px solid #ccc;
                background: white;
                margin-top: 15px;
                float: left;
                transform: scaleX(0.8);
                margin-left: -88px;
            }

            .services_feature ul {
                width: 100%;
                height: 100%;
                margin: 0;
                padding: 0;
            }

            .services_feature ul li {
                width: 20%;
                height: 100%;
                float: right;
            }

            .services_feature ul li a {
                width: 100%;
                height: 100%;
                display: inline-block;
                line-height: 70px;
            }

            .services_feature ul li a i {
                width: 24px;
                height: 24px;
                display: inline-block;
                vertical-align: middle;
                padding-right: 10px;
            }

            .services_feature ul li a span {
                width: 100%;
                height: 100%;
                padding-right: 5px;
                font-size: 10pt;
            }

            /*----------//////////SERVICES FEATURE\\\\\\\\\\----------*/
        </style>
        <!----------//////////services_feature\\\\\\\\\\----------->
        <div class="services_feature">
            <ul>
                <li>
                    <a>
                        <i style="background: url(public/images/slices.png) -210px -473px;"></i>
                        <span>7 روز ضمانت بازگشت کالا</span>
                    </a>
                </li>
                <li>
                    <a>
                        <i style="background: url(public/images/slices.png) -260px -473px;"></i>
                        <span>‍پرداخت در محل</span>
                    </a>
                </li>
                <li>
                    <a>
                        <i style="background: url(public/images/slices.png) -316px -473px;"></i>
                        <span>تحویل اکسپرس</span>
                    </a>
                </li>
                <li>
                    <a>
                        <i style="background: url(public/images/slices.png) -102px -473px;"></i>
                        <span>تضمین بهترین قیمت</span>
                    </a>
                </li>
                <li>
                    <a>
                        <i style="background: url(public/images/slices.png) -156px -473px;"></i>
                        <span>ضمانت اصل بودن کالا</span>
                    </a>
                </li>
            </ul>
        </div>
        <!----------//////////services_feature\\\\\\\\\\----------->
    </div>
</div>
<!----------//////////DETAILS\\\\\\\\\\----------->