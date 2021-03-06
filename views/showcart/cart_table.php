<style>
    .cart_table {
        width: 100%;
    }

    .cart_table > table {
        width: 98%;
        margin: 20px auto;
        border: 1px solid #ccc;
        box-shadow: 0 2px 4px rgba(0, 0, 0, .2);
    }

    .cart_table > table > tbody > tr {
        text-align: center;
    }

    .cart_table > table > tbody > tr:first-child {
        background: #e4e4e4;
    }

    .cart_table > table > tbody > tr:nth-child(odd) {

    }

    .cart_table > table > tbody > tr:nth-child(even) {

    }

    .cart_table > table > tbody > tr > td {
        border-left: 1px solid #ebebeb;
    }

    .cart_table > table > tbody > tr > td:first-child {
        text-align: right;
    }

    .cart_table > table > tbody > .ditails > td:last-child {
        background: #ffe1d2;
        color: red;
        text-align: center;
        font-size: 25pt;
        cursor: pointer;
    }

    .cart_table > table > tbody > .ditails > td > img {
        float: right;
        margin: 15px 0;
        width: 100px;
        height: 100px;
    }

    .cart_table > table > tbody > .ditails > td > span {
        margin: 7px 0;
        text-align: center;
    }

    .cart_table > table > tbody > .ditails > td > .adad {
        margin-left: 10px;
    }

    .ditails > td > .name {
        font-size: 15pt;
        float: right;
        width: 80%;
        margin-top: 2px;
    }

    .ditails > td > .name:hover {
        cursor: pointer;
        color: red;
    }

    .cart_table > table > tbody > tr > td:first-child {
        width: 550px !important;
    }

    .ditails > td > .color {
        float: right;
        width: 80%;
        margin: 16px 0 7px 0;;
    }

    .ditails > td > .color > div {
        float: right;
        margin: 5px 0;
    }

    .select_div {
        width: 50px;
        height: 25px;
        border: 1px solid #dadada;
        margin: auto;
        text-align: center;
        cursor: pointer;
        position: relative;
    }

    .select_div_icon {
        width: 21px;
        height: 16px;
        float: left;
        position: relative;
        top: 7px;
        left: 5px;
        background: url("public/images/slices.png") no-repeat -33px -462px;
    }

    .select_div_item_number {
        width: 50px;
        position: absolute;
        top: 25px;
        left: -1px;
        display: none;
        border: 1px solid #dadada;
    }

    .select_div_item_number span {
        display: block;
        text-align: center;
        background: white;
        padding: 2px;
    }

    .select_div_item_number span:first-child {
        padding: 6px;
    }

    .select_div_item_number span:hover {
        background: #dadada;
    }

    .color_circle {
        width: 20px;
        height: 20px;
        display: inline-block;
        border-radius: 50%;
        background: red;
        margin: 0 5px;
        vertical-align: middle;
    }
</style>
<div class="cart_table">
    <table cellspacing="0">
        <tr class="title">
            <td>شرح محصول</td>
            <td>تعداد</td>
            <td>قیمت واحد</td>
            <td>مبلغ کل</td>
            <td></td>
        </tr>
        <tr class="ditails">
            <td>
                <img src="public/images/favoite1.png">
                <div class="name">گوشی آیفون 8 مدل 120 گیگابایتی</div>
                <div class="color">
                    <div>رنگ
                        <span class="color_circle"></span>
                        <span>قرمز</span>
                    </div>
                </div>
                <div class="guranty">گارانتی یک ساله خودم</div>
            </td>
            <td class="select">
                <div class="select_div" onclick="selectNumber(this);">
                    <span class="number_show">1</span>
                    <span class="select_div_icon"></span>
                    <div class="select_div_item_number">
                        <span onclick="showSelectNumber(this);">1</span>
                        <span onclick="showSelectNumber(this);">2</span>
                        <span onclick="showSelectNumber(this);">3</span>
                        <span onclick="showSelectNumber(this);">4</span>
                        <span onclick="showSelectNumber(this)">5</span>
                        <span onclick="showSelectNumber(this)">6</span>
                        <span onclick="showSelectNumber(this)">7</span>
                        <span onclick="showSelectNumber(this)">8</span>
                        <span onclick="showSelectNumber(this)">9</span>
                        <span onclick="showSelectNumber(this)">10</span>
                    </div>
                </div>
            </td>
            <td><span class="adad">42،000،000</span><span class="matn">ریال</span></td>
            <td><span class="adad">42،000،000</span><span class="matn">ریال</span></td>
            <td><span>×</span></td>
        </tr>
    </table>
</div>
<script>
    function selectNumber(tag) {
        $('.select_div_item_number').slideToggle(300);
    }

    function showSelectNumber(tag) {
        var tag=$(tag);
        var txt = tag.text();
        $('.number_show').text(txt);
    }
</script>