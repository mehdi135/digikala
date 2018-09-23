<style>
    .order-tab {
        width: 100%;
        height: 100%;
        border: 1px solid black;
        float: right;
    }

    .order-tab > ul {
        padding: 0;
        margin: 0;
        width: 100%;
        float: right;
        border-bottom: 1px solid black;
        background: #f8f8f8;
    }

    .order-tab > ul > li {
        display: inline-block;
        border-left: 1px solid black;
        width: 120px;
        text-align: center;
        float: right;
        padding: 8px;
    }

    .order-tab > ul > li.active {
        display: inline-block;
        border-left: 1px solid black;
        width: 120px;
        text-align: center;
        float: right;
        padding: 8px;
        background: darkblue !important;
        color: white !important;
    }

    .order-tab > ul > li:hover {
        display: inline-block;
        border-left: 1px solid black;
        width: 120px;
        text-align: center;
        float: right;
        padding: 8px;
        background: #e9e9e9;
    }

    .orders_section section {
        width: 100%;
        float: right;
        display: none;
    }

    .orders_section section:first-child {
        width: 100%;
        float: right;
        padding: 10px 20px;
    }
</style>

<div class="order-tab">

    <ul>
        <li class="peyghamhaye_man active">
            پیغامهای من
        </li>
        <li class="sefareshat_man">
            سفارشات من
        </li>
        <li class="list_alaghe_man">
            لیست مورد علاقه
        </li>
        <li class="naghdhaye_man">
            نقدهای من
        </li>
        <li class="nararat_man">
            نظرات من
        </li>
        <li class="digibonhaye_man">
            دیجی بن های من
        </li>
        <li class="karthaye_hadyeye_man">
            کارتهای هدیه من
        </li>
        <li class="etelaresanihaye_man">
            اطلاع رسانی ها
        </li>
    </ul>

    <style>
        .sefareshat_section > table {
            width: 100%;
            padding: 30px 40px;
        }

        .sefareshat_section > table .subtable {
            box-shadow: 0 0 5px #ccc;
            background: white;
        }

        .sefareshat_section > table > tbody > tr:nth-child(odd) {
            background: #eee;
        }

        .sefareshat_section > table > tbody > tr > td {
            border-left: 1px solid darkblue;
        }

        .sefareshat_section > table > tbody > .row .last {
            border-left: none;
            cursor: pointer;
        }

        .sefareshat_section > table > tbody > tr > td:last-child:hover {
            border-left: none;
            cursor: pointer;
            background: #dfdfdf;
        }

        .sefareshat_section > table > tbody > .row td:nth-child(5) {
            color: blue;
        }

        .sefareshat_section > table > tbody > .title {
            background: darkblue !important;
            color: white;
            text-align: center;
        }

        .sefareshat_section > table > tbody > .title td {
            background: darkblue !important;
            color: white !important;
            text-align: center;
        }

        .sefareshat_section > table > tbody > .row {
            text-align: center;
        }

        .sefareshat_section > table > tbody .last_icon {
            display: inline-block;
            width: 25px;
            position: relative;
            top: 4px;
            height: 13px;
            background: url(public/images/slices.png) no-repeat -480px -370px;
        }

        .sefareshat_section > table > tbody .last_icon.active {
            display: inline-block;
            width: 25px;
            position: relative;
            top: 4px;
            height: 13px;
            background: url(public/images/slices.png) no-repeat -436px -370px;
        }

        .subtable {
            padding: 30px 40px;
        }

        .subtable > table {
            width: 100%;
        }

        .subtable > table > tbody > tr:first-child {
            background: gray !important;
            color: white !important;
        }

        .subtable > table > tbody > tr > td {
            text-align: center;
        }

        .subtable > table > tbody > tr > td:last-child {
            border-left: none;
        }

        .subtable > table > tbody > tr:nth-child(odd) {
            background: #eee;
        }

        .details {
            display: none;
        }

        .subtable > .name {
            width: 98%;
            display: block;
            text-align: right;
            margin-top: 30px;
            background: #ccc;
            color: white;
            padding: 5px 10px;
            border-radius: 3px;
        }

        .peyghamha_one > table {
            width: 96%;
            margin: 30px 5px 20px 0;
            text-align: center;
        }

        .peyghamha_one > table > tbody > tr > td {
            width: 33%;
            border-left: 1px solid gray;
        }

        .peyghamha_one > table > tbody > tr > td:last-child {
            border-left: none;
        }

        .peyghamha_one > table > tbody > tr:nth-child(odd) {
            background: #f3f3f3;
        }

        .peyghamha_one > table > tbody > .title {
            background: #ccc !important;
            color: white;
        }

    </style>

    <div class="orders_section">
        <?php
        require ('tab_messages.php');
        require ('tab_orders.php');
        require ('tab_favorite.php');
        require ('tab_naghd.php');
        require ('tab_nazarat.php');
        require ('tab_digibon.php');
        require ('tab_gift_card.php');
        require ('tab_etelaresani.php');
        ?>
    </div>
</div>

<script>
    function showDetailsTr1(tag) {
        var tag = $(tag);
        $('.change_icon',tag).toggleClass('active');
        var parentTr = tag.parents('tr');
        parentTr.next().slideToggle(100);
    }

    $('.order-tab > ul > li').click(function () {
        var index = $(this).index();
        $('.order-tab > ul > li').removeClass('active');
        $(this).addClass('active');
        $('.orders_section > section').fadeOut(0);
        $('.orders_section > section').eq(index).fadeIn(200);
    });

    $('.general_div > table > tbody > tr > .last').click(function () {
        showDetailsTr1(this);
    });
</script>