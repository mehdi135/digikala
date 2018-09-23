<style>
    .send_way {
        float: right;
        width: 100%;
    }

    .send_way > table {
        width: 100%;
        border: 1px solid gray;
        margin-top: 25px;
    }

    .send_way > table > tbody > tr > td:not(:last-child) {
        border-left: 1px solid gray;
    }

    .send_way > table > tbody > tr > td:last-child {
        width: 100px;
        text-align: center;
    }

    .send_way > table > tbody > tr > td:first-child {
        width: 60px;
        cursor: pointer;
    }

    .send_way .circle {
        width: 15px;
        height: 15px;
        border-radius: 50%;
        border: 2px solid gray;
        display: inline-block;
        position: relative;
        top: 4px;
        right: 20px;
        cursor: pointer;
    }

    .send_way .circle.active {
        width: 15px;
        height: 15px;
        border-radius: 50%;
        border: 2px solid blue;
        display: inline-block;
        position: relative;
        top: 4px;
        right: 20px;
        background: blue;
    }

    .send_way .circle.active::before {
        content: '';
        width: 5px;
        height: 5px;
        border-radius: 50%;
        display: inline-block;
        position: relative;
        top: -6px;
        right: 5px;
        background: white;
    }

    .send_way .icon {
        width: 93px;
        height: 55px;
        display: inline-block;
        margin-left: 20px;
        vertical-align: top;
        background: url("public/images/slices.png") no-repeat;
    }

    .hazine {
        text-align: center;
    }

    .mablagh {
        color: #00ff33;
        text-align: center;
        font-size: 14pt;
    }

    .darghah {
        display: inline-block;
        padding: 30px 5px 30px 40px;
        position: relative;
        top: 0;
        right: 23px;
    }

    .pardakht {
        position: relative;
        top: 20px;
        right: 10px;
        font-weight: bold;
    }
</style>

<h4 style="float: right;margin: 50px 5px 0 0;">شیوه پرداخت : </h4>

<div class="send_way">
    <table>
        <tr>
            <td class="select_circle"><span class="circle first"></span></td>
            <td style="border-left: none;">
                <span class="pardakht">پرداخت اینترنتی</span><br>
                <span class="circle"></span>
                <span class="darghah">درگاه پرداخت اینترنتی بانک سامان</span>
                <span class="circle"></span>
                <span class="darghah">درگاه پرداخت اینترنتی بانک پارسیان</span>
            </td>
            <td>
            </td>
        </tr>
    </table>
</div>

<div class="send_way">
    <table>
        <tr>
            <td class="select_circle"><span class="circle"></span></td>
            <td style="border-left: none;">
                <span class="pardakht">کارت به کارت</span><br>
                <span class="darghah">درگاه پرداخت اینترنتی بانک سامان درگاه پرداخت اینترنتی بانک پارسیان</span>
            </td>
            <td>
            </td>
        </tr>
    </table>
</div>

<div class="send_way">
    <table>
        <tr>
            <td class="select_circle"><span class="circle"></span></td>
            <td style="border-left: none;">
                <span class="pardakht">واریز به حساب</span><br>
                <span class="darghah">درگاه پرداخت اینترنتی بانک سامان درگاه پرداخت اینترنتی بانک پارسیان</span>
            </td>
            <td>
            </td>
        </tr>
    </table>
</div>

<script>
    $('.send_way .circle').click(function () {
        $('.send_way .circle').removeClass('active');
        $('.circle.first').addClass('active');
        $(this).addClass('active');
    });

    $('.select_circle').click(function () {
        $('.send_way .circle').removeClass('active');
        $('.circle', this).addClass('active');
    });
</script>