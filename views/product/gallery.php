<style>
    #product_gulary {
        width: 95%;
        height: 95%;
        position: fixed;
        background: white;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        margin: auto;
        z-index: 4;
        border-radius: 5px;
        overflow: hidden;
        display: none;
    }

    #dark {
        width: 100%;
        height: 100%;
        position: fixed;
        background: black;
        opacity: .3;
        top: 0;
        display: none;
    }

    #product_gulary #gulary_heder {
        width: 98.5%;
        height: 50px;
        background: #e5e3e3;
        float: right;
        padding-right: 1.5%;
        line-height: 6px;
    }

    #product_gulary #gulary_heder h4 {
        float: right;
        display: inline-block;
    }

    #gulary_heder_close_icon {
        width: 26px;
        height: 26px;
        float: left;
        background: #ececec url("public/images/slices.png") no-repeat -1048px -43px;
        border-radius: 50%;
        margin: 10px;
        border: 1px solid lightgrey;
        cursor: pointer;
    }

    #product_gulary .right {
        width: 1240px;
        height: 100%;
        float: right;
        margin-top: 2.2%;
        text-align: center;
    }

    #product_gulary .left {
        width: 263px;
        height: 100%;
        float: left;
    }

    #product_gulary .left ul {
        height: 100%;
        float: left;
        padding: 0;
        margin: 0;
    }

    #product_gulary .left ul li {
        width: 232px;
        height: 200px;
        float: left;
        background: white;
        border-bottom: 1px solid #ccc;
        border-right: 1px solid #ccc;
        text-align: center;
        position: relative;
        opacity: .5;
    }

    #product_gulary .left ul li:first-child {
        opacity: 1;
    }

    #product_gulary .left ul li.active::after {
        border-bottom: 15px solid transparent;
        border-left: 16px solid #ddd;
        border-top: 16px solid transparent;
        content: "";
        position: absolute;
        right: -16px;
        top: 85px;
        z-index: 14;
    }

    #product_gulary .left ul li.active::before {
        border-bottom: 15px solid transparent;
        border-left: 15px solid #fff;
        border-top: 15px solid transparent;
        content: "";
        position: absolute;
        right: -14px;
        top: 85px;
        z-index: 15;
    }

    #product_gulary .left ul li img {
        max-width: 100%;
        max-height: 100%;
        position: relative;
        top: 40px;
    }

    .icon3d {
        width: 45px;
        height: 45px;
        background: url(public/images/slices.png) no-repeat -362px -114px;
        display: inline-block;
        position: absolute;
        left: 0;
        bottom: 4px;
    }

    #cv {
        width: 1240px;
        height: 100%;
    }

</style>
<div id="dark"></div>
<div id="product_gulary">
    <div id="gulary_heder">
        <h4><?= $productInfo['title']; ?></h4>
        <span id="gulary_heder_close_icon"></span>
    </div>
    <div class="right">
        <!--<div class="item">-->
        <canvas id="cv" width="420px" height="320px"></canvas>
        <img class="mainImage" src="public/images/products/1/gallery/large/1472662586.jpg">
        <!--</div>-->
    </div>
    <div class="left">
        <ul>

            <?php
            $getGallery = $data['getGallery'];
            foreach ($getGallery as $gallery) {
                ?>
                <?php
                if ($gallery['threed'] == 1) {
                    ?>
                    <li data-main-image="">
                        <img src="public/images/products/<?= $productInfo['id']; ?>/gallery/small/ax1.jpg">
                        <span class="icon3d"></span>
                    </li>
                    <?php
                }else{
                ?>
                <li data-main-image="public/images/products/<?= $gallery['idproduct']; ?>/gallery/large/<?= $gallery['img']; ?>">
                    <img src="public/images/products/<?= $gallery['idproduct']; ?>/gallery/small/<?= $gallery['img']; ?>">
                </li>
                <?php
            }}
            ?>
        </ul>
    </div>
</div>
<script>

    var productGallary = $('#product_gulary');
    var productGallaryThumbnils = productGallary.find('.left ul li');

    function showGallary(imageUrl, index) {
        productGallaryThumbnils.removeClass('active');
        productGallaryThumbnils.eq(index).addClass('active');

        if (imageUrl.length > 0) {
            productGallary.find('.mainImage').attr('src', imageUrl);
            $('#cv').fadeOut(0);
            $('.mainImage').fadeIn(200);
        } else {
            $('.mainImage').fadeOut(0);
            $('#cv').fadeIn(200);
        }
    }


    productGallaryThumbnils.click(function () {
        var index = $(this).index();
        var mainImageUrl = $(this).attr('data-main-image');
        showGallary(mainImageUrl, index);
        productGallaryThumbnils.css('opacity', '.5');
        productGallaryThumbnils.removeClass('active');
        $(this).addClass('active');
        $(this).css('opacity', '1');
    });

    $('#details .right .galery ul li').click(function () {
        var index = $(this).index();
        index++;
        if (index > 4) {
            index = 0;
        }
        var mainImageUrl = productGallaryThumbnils.eq(index).attr('data-main-image');
        $('#dark').fadeIn(1500);
        $('#product_gulary').fadeIn(1500);
        productGallaryThumbnils.css('opacity', '.5');
        productGallaryThumbnils.eq(index).css('opacity', '1');
        $(this).addClass('active');
        showGallary(mainImageUrl, index);
    });

    $('#gulary_heder_close_icon').click(function () {
        $('#dark').fadeOut(200);
        $('#product_gulary').fadeOut(200);
    });


    $("#product_gulary .left").mCustomScrollbar({
        setWidth: false,
        setHeight: false,
        setTop: 0,
        setLeft: 0,
        axis: "y",
        scrollbarPosition: "inside",
        scrollInertia: 950,
        autoDraggerLength: true,
        autoHideScrollbar: true,
        autoExpandScrollbar: false,
        alwaysShowScrollbar: 0,
        snapAmount: null,
        snapOffset: 0,
        mouseWheel: {
            enable: true,
            scrollAmount: "auto",
            axis: "y",
            preventDefault: false,
            deltaFactor: "auto",
            normalizeDelta: false,
            invert: false,
            disableOver: ["select", "option", "keygen", "datalist", "textarea"]
        },
        scrollButtons: {
            enable: true,
            scrollAmount: "auto",
            scrollType: "stepless",
        },
        keyboard: {
            enable: true,
            scrollAmount: "auto",
            scrollType: "stepless",
        },
        contentTouchScroll: 25,
        advanced: {
            autoExpandHorizontalScroll: false,
            autoScrollOnFocus: "input,textarea,select,button,datalist,keygen,a[tabindex],area,object,[contenteditable='true']",
            updateOnContentResize: true,
            updateOnImageLoad: true,
            updateOnSelectorChange: false,
            releaseDraggableSelectors: false
        },
        theme: "3d-dark",
        live: false,
        liveSelector: null
    });

    var canvasTag = document.getElementById('cv');
    var viewer = new JSC3D.Viewer(canvasTag, {
        SceneUrl: 'public/images/products/<?= $productInfo['id']; ?>/3d/bmw.obj',
        InitRotationX: -100,
        InitRotationY: 50,
        InitRotationZ: 20,
        RenderMode: 'texturesmooth'
    });
    viewer.init();
    viewer.update();


</script>