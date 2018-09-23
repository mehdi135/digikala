<style>
    .digibonha_section {
        width: 1115px;

    }

    .digibonha_section > .general_div {
        width: 100%;
        float: right;
    }

    .digibonha_section > .general_div > .top {
        width: 1080px;
        height: 50px;
        line-height: 50px;
        background: #ececec;
        margin: 20px auto;
        padding: 10px 18px;
        border-radius: 4px;
        box-shadow: 0 3px 4px rgba(0,0,0,.2);
    }

    .digibonha_section > .general_div > .top > span {
        margin-left: 25px;
    }

    .digibonha_section > .general_div > .top > input {
        width: 325px;
        height: 25px;
        margin-left: 5px;
    }

    .digibonha_section > .general_div > .top > img{
        vertical-align: middle;
    }

    .general_div > table{
        width: 96%;
        margin: 30px auto;
        border-radius: 4px;
        box-shadow: 0 3px 4px rgba(0,0,0,.2);
    }

    .general_div > table > tbody > tr{
        text-align: center;
        font-size: 11pt;
    }

    .general_div > table > tbody > tr:nth-child(odd){
        background: #e6e6e6;
    }

    .general_div > table > tbody > tr:nth-child(even){
        background: #eeeeee;
    }

    .general_div > table > tbody > tr:first-child{
        background: black !important;
        color: white !important;
    }

    .general_div > table > tbody > tr > td{
        padding: 5px;
        border-bottom: 1px solid black;
    }

    .general_div > table > tbody > tr > .last > .change_icon{
        background: url("public/images/orderdetailsopen.png")no-repeat center;
        width: 29px;
        height:28px;
        display: inline-block;
        cursor: pointer;
    }

    .general_div > table > tbody > tr > .last > .change_icon.active{
        background: url("public/images/orderdetailsclose.png")no-repeat center;
        width: 29px;
        height:28px;
        display: inline-block;
        cursor: pointer;
    }

    .general_div > table > tbody > .row{
        width: 100%;
        background: white !important;
        display: none;
    }

    .digibon_sub_table{

    }

    .digibon_sub_table > table{
        width: 96%;
        height: 100%;
        margin: 20px auto;
        border-radius: 4px;
        box-shadow: 0 3px 4px rgba(0,0,0,.2);
    }

    .digibon_sub_table > table > tbody > tr{
        text-align: center;
        font-size: 11pt;
    }

    .digibon_sub_table > table > tbody > tr:first-child{
        background: blue !important;
        color: white;
    }

    .digibon_sub_table > table > tbody > tr:nth-child(odd){
        background: #e6e6e6;
    }

    .digibon_sub_table > table > tbody > tr:nth-child(even){
        background: #eeeeee;
    }

    .digibon_sub_table > table > tbody > tr > td{
        padding: 7px;
        border-bottom: 1px solid black;
    }
</style>

<section class="digibonha_section">
    <div class="general_div">
        <div class="top">
            <span>کد دریافت دیجی بن</span>
            <input type="text">
            <img src="public/images/SaveVoucher.gif">
        </div>
        <table cellspacing="0">
            <tr>
                <td>ردیف</td>
                <td>کد</td>
                <td>سفارش</td>
                <td>شرح</td>
                <td>تاریخ ثبت</td>
                <td>تاریخ انقضاء</td>
                <td>اعتبار اولیه</td>
                <td>اعتبار مصرفی</td>
                <td>مانده</td>
                <td>وضعیت</td>
                <td>جزئیات</td>
            </tr>
            <tr>
                <td>1</td>
                <td>123</td>
                <td>DGK-123</td>
                <td>DGK-123 دیجی بن دریافتی از سفارش </td>
                <td>تیر ماه 1397</td>
                <td>مرداد ماه 1397</td>
                <td>1</td>
                <td>0</td>
                <td>0</td>
                <td>باطل شده</td>
                <td class="last"><span class="change_icon" src="public/images/orderdetailsopen.png"></span></td>
            </tr>
            <tr class="row">
                <td colspan="11">
                    <div class="digibon_sub_table">
                        <table cellspacing="0">
                            <tr>
                                <td>سفارش</td>
                                <td>نوع</td>
                                <td>تاریخ</td>
                                <td>اعتبار مصرفی</td>
                            </tr>
                            <tr>
                                <td>تراکنشی برای این دیجی بن ثبت نشده است</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </table>
                    </div>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>123</td>
                <td>DGK-123</td>
                <td>DGK-123 دیجی بن دریافتی از سفارش </td>
                <td>تیر ماه 1397</td>
                <td>مرداد ماه 1397</td>
                <td>1</td>
                <td>0</td>
                <td>0</td>
                <td>باطل شده</td>
                <td class="last"><span class="change_icon" src="public/images/orderdetailsopen.png"></span></td>
            </tr>
            <tr class="row">
                <td colspan="11">
                    <div class="digibon_sub_table">
                        <table cellspacing="0">
                            <tr>
                                <td>سفارش</td>
                                <td>نوع</td>
                                <td>تاریخ</td>
                                <td>اعتبار مصرفی</td>
                            </tr>
                            <tr>
                                <td>تراکنشی برای این دیجی بن ثبت نشده است</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </table>
                    </div>
                </td>
            </tr>
        </table>

    </div>
</section>