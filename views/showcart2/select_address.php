<style>

    .content {
        float: right;
        width: 100%;
        margin: 30px 0 0 0;
    }

    .content > table {
        width: 100%;
        margin: auto;
        border: 1px solid gray;
        border-radius: 4px;
        overflow: hidden;
        box-shadow: 0 2px 3px rgba(0, 0, 0, .2);
    }

    .content > table > tbody > tr {

    }

    .content > table > tbody > tr > td {
        border-bottom: 1px solid gray;
        border-left: 1px solid gray;;
        padding: 7px;
    }

    .content > table > tbody > tr > .green_circle {
        border-bottom: 1px solid gray;
        border-left: 1px solid gray;;
        padding: 7px;
        cursor: pointer;
        position: relative;
    }

    .content > table > tbody > tr > .green_circle.active::before {
        content: '';
        position: absolute;
        top: 0;
        right: 0;
        width: 0;
        height: 0;
        border-style: solid;
        border-width: 0 45px 45px 0;
        border-color: transparent #00ff33 transparent transparent;
    }

    .content > table > tbody > tr > .green_circle.active::after {
        content: '';
        position: absolute;
        width: 25px;
        height: 20px;
        top: 3px;
        right: 0;
        background: url("public/images/slices.png") no-repeat -670px -120px;
    }

    .content > table > tbody > tr > .green_circle.active {
        background: rgba(0, 252, 0, 0.07);
    }

    .content > table > tbody > tr > .green_circle > .circle {
        width: 15px;
        height: 15px;
        border: 2px solid gray;
        border-radius: 50%;
        display: inline-block;
    }

    .content > table > tbody > tr > .green_circle.active > .circle {
        width: 15px;
        height: 15px;
        border: 2px solid blue;
        border-radius: 50%;
        display: inline-block;
        background: blue;
        position: relative;
    }

    .content > table > tbody > tr > .green_circle.active > .circle::before {
        content: '';
        position: absolute;
        width: 5px;
        height: 5px;
        border-radius: 50%;
        background: white;
        top: 5px;
        right: 5px;
        display: inline-block;
    }

    .tbl_last_cart td span {
        width: 21px;
        height: 17px;
        display: block;
        margin: auto;
    }

</style>
<div class="content">
    <table cellspacing="0">
        <tr>
            <td class="green_circle active" style="width: 55px;text-align: center;" rowspan="3">
                <span class="circle"></span>
            </td>
            <td colspan="3" style="font-size: 15pt;">مهدی باقری</td>
            <td style="width: 33px;height: 156px;padding: 0; border-left: none;" rowspan="3">
                <table class="tbl_last_cart" cellspacing="0" cellpadding="0" style="width: 100%;height: 100%;">
                    <tr>
                        <td style="border-bottom: 1px solid gray;background: rgba(0, 0, 255, 0.1) ;text-align: center;">
                            <span style="background:url(public/images/slices.png) no-repeat -810px -444px;"></span>
                        </td>
                    </tr>
                    <tr>
                        <td style="border-bottom: 1px solid gray;background: rgba(255, 0, 0, 0.1) ;text-align: center;">
                            <span style="background:url(public/images/slices.png) no-repeat -810px -505px;"></span></td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td style="width: 200px;">استان : آذربایجان غربی</td>
            <td rowspan="2">سلام دوستان من این مودم رو واسه باغ گرفتم که بدجوری مشکل نویز داشتم یعنی دوتا مودمم
                اونقدر قطع و وصل میشدن که اعصابم رو بهم میریختن ولی این خیلی راحتم کرده آنتن دهی خوبی هم داره در کل
                خیلی ازش راضی هستم
            </td>
            <td style="width: 200px;">شماره تماس اظطراری: 09143472967</td>
        </tr>
        <tr>
            <td style="width: 200px;">شهر : ارومیه</td>
            <td style="width: 200px;">شماره تماس ثابت : <br>04433837620</td>
        </tr>
    </table>
</div>
<div class="content">
    <table cellspacing="0">
        <tr>
            <td class="green_circle" style="width: 55px;text-align: center;" rowspan="3">
                <span class="circle"></span>
            </td>
            <td colspan="3" style="font-size: 15pt;">مهدی باقری</td>
            <td style="width: 33px;height: 156px;padding: 0; border-left: none;" rowspan="3">
                <table class="tbl_last_cart" cellspacing="0" cellpadding="0" style="width: 100%;height: 100%;">
                    <tr>
                        <td style="border-bottom: 1px solid gray;background: rgba(0, 0, 255, 0.1) ;text-align: center;">
                            <span style="background:url(public/images/slices.png) no-repeat -810px -444px;"></span>
                        </td>
                    </tr>
                    <tr>
                        <td style="background: rgba(255, 0, 0, 0.1) ;text-align: center;"><span
                                style="background:url(public/images/slices.png) no-repeat -810px -505px;"></span></td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td style="width: 200px;">استان : آذربایجان غربی</td>
            <td rowspan="2">سلام دوستان من این مودم رو واسه باغ گرفتم که بدجوری مشکل نویز داشتم یعنی دوتا مودمم
                اونقدر قطع و وصل میشدن که اعصابم رو بهم میریختن ولی این خیلی راحتم کرده آنتن دهی خوبی هم داره در کل
                خیلی ازش راضی هستم
            </td>
            <td style="width: 200px;">شماره تماس اظطراری: 09143472967</td>
        </tr>
        <tr>
            <td style="width: 200px;">شهر : ارومیه</td>
            <td style="width: 200px;">شماره تماس ثابت : <br>04433837620</td>
        </tr>
    </table>
</div>
<script>
    $('.content > table > tbody > tr > .green_circle').click(function () {
        $('.content > table > tbody > tr > .green_circle').removeClass('active');
        $(this).addClass('active');
    });
</script>