<style>
    .introduction {
        width: 1160px;
        padding: 20px;
        background: white;
        margin: 10px auto;
        border-radius: 3px;
        box-shadow: 0 2px 3px rgba(0, 0, 0, .2);
        overflow: hidden;
        max-height: 430px;
        position: relative;
    }

    .introduction.active {
        max-height: none !important;
    }

    .introduction .show_more {
        display: block;
        width: 100%;
        text-align: center;
        position: absolute;
        bottom: 0;
        background: #f7f5f5;
        right: 0;
    }
</style>
<div class="introduction">
    <a class="show_more">نمایش بیشتر</a>
    <?= $productInfo['introduction'];?>
</div>
<script>
    $('.introduction .show_more').click(function () {
        var intro = $('.introduction');
        intro.toggleClass('active');
        if (intro.hasClass('active')) {
            $(this).text('نمایش کمتر');
        } else {
            $(this).text('نمایش بیشتر');
        }

    });

</script>