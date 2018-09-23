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
</style>

<h4 style="float: right;margin: 50px 5px 0 0;">شیوه ارسال : </h4>

<div class="send_way">
    <table>
        <tr>
            <td><span class="circle"></span></td>
            <td><span class="icon" style="background-position: -871px -288px;"></span><span>سلام دوستان من این مودم رو واسه باغ گرفتم که بدجوری مشکل نویز داشتم یعنی دوتا مودمم
                    اونقدر قطع و وصل میشدن که اعصابم رو بهم میریختن
                </span>
            </td>
            </td>
            <td>
                <span class="hazine">هزینه ارسال</span>
                <span class="mablagh">رایگان</span>
            </td>
        </tr>
    </table>
</div>
<div class="send_way">
    <table>
        <tr>
            <td><span class="circle"></span></td>
            <td><span class="icon" style="background-position: -871px -357px;"></span><span>سلام دوستان من این مودم رو واسه باغ گرفتم که بدجوری مشکل نویز داشتم یعنی دوتا مودم
                </span>
            </td>
            </td>
            <td>
                <span class="hazine">هزینه ارسال</span>
                <span class="mablagh">4،800 تومان</span>
            </td>
        </tr>
    </table>
</div>
<script>
    $('.send_way .circle').click(function () {
        $('.send_way .circle').removeClass('active');
        $(this).addClass('active');
    });
</script>