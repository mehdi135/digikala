<style>
    .adres > p {
        float: right;
        font-size: 14pt;
        margin: 0;
        font-weight: bold;
    }

    .adres > div {
        float: left;
        width: 140px;
        height: 40px;
        border-radius: 4px;
        color: white;
        background: gray;
        line-height: 38px;
        text-align: center;
        cursor: pointer;
        box-shadow: 0 2px 3px rgba(0, 0, 0, .2);
    }
</style>
<div class="adres">
    <p>انتخاب آدرس :</p>
    <div>افزودن آدرس جدید</div>
</div>
<script>
    $('.adres > div').click(function () {
        $('.dark , .product_adress').fadeIn(100);
    });
</script>