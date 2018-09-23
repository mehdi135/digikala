<style>
    .tab_div {
        width: 1200px;
        margin-top: 10px;
        background: white;
        margin: auto;
        border-radius: 4px;
        overflow: hidden;
        box-shadow: 1px 2px 3px rgba(0, 0, 0, .2);
    }

    .tab {
        width: 100%;
        margin: 0;
        padding: 0;
        background: #f2f2f2;
        float: right;
    }

    .tab_div .tab li {
        display: inline-block;
        width: 140px;
        height: 60px;
        line-height: 60px;
        border-left: 1px solid #ccc;
        float: right;
        position: relative;
        padding-right: 40px;
    }

    .tab_div .tab li.active {
        display: inline-block;
        width: 130px;
        background: white;
        color: deepskyblue;
        height: 60px;
        line-height: 60px;
        border-left: 1px solid #ccc;
        float: right;
        font-size: 12pt;
        font-weight: bold;
        border-top: 3px solid blue;
        box-shadow: -3px -2px 2px rgba(0, 0, 0, .2);
    }

    .tab_div .tab_childe {
        width: 100%;
        float: right;
    }

    .tab_div .tab_childe section {
        width: 1180px;
        float: right;
        margin: 10px;
        overflow: hidden;
        display: none;
    }

    .tab_div .tab_childe section.active {
        width: 1180px;
        float: right;
        padding: 10px;
        display: inline-block;
    }

    .tab_div .tab li::before {
        content: '';
        width: 30px;
        height: 30px;
        display: inline-block;
        background: url(public/images/slices.png) no-repeat;
        position: absolute;
        top: 18px;
        right: 5px;
    }

    .tab_div .tab .naghd::before {
        content: '';
        background-position: -104px -264px;
    }

    .tab_div .tab .fanni::before {
        content: '';
        background-position: -316px -264px;
    }

    .tab_div .tab .nazar::before {
        content: '';
        background-position: -260px -264px;
    }

    .tab_div .tab .soal::before {
        content: '';
        background-position: -210px -264px;
    }

    .tab_div .tab .mogayese::before {
        content: '';
        background-position: -460px -264px;
    }

    .tab_div .tab .naghd.active::before {
        content: '';
        background-position: -104px -308px;
    }

    .tab_div .tab .fanni.active::before {
        content: '';
        background-position: -316px -308px;
    }

    .tab_div .tab .nazar.active::before {
        content: '';
        background-position: -260px -308px;
    }

    .tab_div .tab .soal.active::before {
        content: '';
        background-position: -210px -308px;
    }

    .tab_div .tab .mogayese.active::before {
        content: '';
        background-position: -460px -308px;
    }

    .tab_childe .item {
        padding: 0 15px;
        margin-bottom: 30px;
        cursor: pointer;
    }

    .tab_childe .item h4 {
        font-size: 14pt;
        width: 100%;
        margin: 0;
        position: relative;
        padding-right: 35px;
        line-height: 0;
        display: inline-block;
    }

    .tab_childe .item h4::after {
        content: '';
        width: 100%;
        height: 1px;
        background: #c7c7c7;
        position: absolute;
        top: 3px;
        display: inline-block;
    }

    .tab_childe .item h4 i {
        background: url(public/images/slices.png) no-repeat -257px -608px;
        width: 31px;
        height: 56px;
        display: inline-block;
        position: absolute;
        right: -30px;
        top: -25px;
        cursor: pointer;
    }

    .tab_childe .item h4 i.active {
        background: url(public/images/slices.png) no-repeat -205px -608px;
    }

    .tab_childe .item h4 span {
        position: relative;
        right: -20px;
        cursor: pointer;
    }

    .tab_childe .item:first-child i {
        background: url(public/images/slices.png) no-repeat -154px -615px;
        width: 31px;
        height: 44px;
        display: inline-block;
        position: absolute;
        right: -32px;
        top: -15px;
    }

    .tab_childe .item:first-child i.active {
        background: url(public/images/slices.png) no-repeat -99px -615px;
    }

    .tab_childe .item:last-child i {
        background: url(public/images/slices.png) no-repeat -314px -615px;
        width: 31px;
        height: 44px;
        display: inline-block;
        position: absolute;
        right: -33px;
        top: -26px;
    }

    .tab_childe .item:last-child i.active {
        background: url(public/images/slices.png) no-repeat -208px -608px;
        width: 31px;
        height: 44px;
        display: inline-block;
        position: absolute;
        right: -33px;
        top: -26px;
    }

    .itemcontiner {
        margin: 40px 20px;
        border-right: 3px solid #f0f1f2;
    }

    .itemcontiner .item .description {
        display: none;
    }

</style>
<div class="tab_div">
    <ul class="tab">
        <li class="active naghd">
            نقد و بررسی تخصصی
        </li>
        <li class="fanni">
            مشخصات فنی
        </li>
        <li class="nazar">
            نظرات کاربران
        </li>
        <li class="soal">
            پرسش و پاسخ
        </li>
        <li class="mogayese">
            مقایسه سریع
        </li>
    </ul>
    <div class="tab_childe">

        <section style="display: inline-block;">
        </section>
        <section class="section_fanni">
        </section>
        <section>
        </section>
        <section>
        </section>
        <section>
        </section>
<?php
//require ('tab1.php');
//require ('tab2.php');
//require ('tab3.php');
//require ('tab4.php');
//require ('tab5.php');
?>
    </div>
</div>
<script>
    $('.tab_div .tab li').click(function () {
        var this_tag = $(this);
        var index = this_tag.index();
        var section = $('.tab_childe section');
        $('.tab_div .tab li').removeClass('active');
        this_tag.addClass('active');
        section.fadeOut(0);

        var url='<?=URL?>product/tab/<?= $productInfo['id']; ?>/<?= $productInfo['idcategory']; ?>';
        var data={'number':index};
        $.post(url,data,function(msg){
            section.html(msg);
        });

        section.eq(index).fadeIn(100);
    });



</script>