<!----------//////////OFFER\\\\\\\\\\----------->

<style>
    #offer {
        height: 60px;
        background: #fff5f5 url("public/images/amazing-offer.png") no-repeat 97% center;
        position: relative;
    }

    .flipTimer, .flipTimer div {
        direction: ltr;
    }

    .flipTimer {
        position: absolute;
        bottom: -20px;
        transform: scale(.3);
        left: -160px;
    }

    #offer_off_one {
        width: 125px;
        height: 30px;
        display: inline-block;
        background: #f50808;
        float: right;
        margin-right: 750px;
        margin-top: 15px;
        text-align: center;
        line-height: 30px;
        border-radius: 0 4px 4px 0;
        box-shadow: 0 2px 2px rgba(0, 0, 0, .2);
    }

    #offer_off_one #number {
        font-size: 18pt;
        font-weight: bold;
        color: white;
        display: inline-block;
        float: right;
        margin-right: 20px;
        line-height: 34px;
    }

    #offer_off_one #toman {
        font-size: 10pt;
        font-weight: bold;
        color: white;
    }

    #offer_off_two {
        width: 65px;
        height: 30px;
        display: inline-block;
        background: #d21010;
        margin-top: 15px;
        text-align: center;
        line-height: 30px;
        font-size: 15pt;
        font-weight: bold;
        color: white;
        border-radius: 4px 0 0 4px;
        box-shadow: 0 2px 2px rgba(0, 0, 0, .2);
    }
</style>
<div id="offer">
    <span id="offer_off_one">
        <span id="number">
            <?= $productInfo['price_discount']; ?>
        </span>
        <span id="toman"> تومان</span>
    </span>
    <span id="offer_off_two">تخفیف</span>
    <div class="flipTimer" style="direction: ltr;">
        <div class="hours"></div>
        <div class="minutes"></div>
        <div class="seconds"></div>
    </div>
    <script>
        $('.flipTimer').flipTimer({
            direction: 'down',
            date: '<?= $productInfo['date_special']; ?>'
        });
    </script>
</div>
<!----------//////////OFFER\\\\\\\\\\----------->