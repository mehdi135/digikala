<style>
    #main {
        width: 1160px;
        background: white;
        box-shadow: 0px 2px 3px rgba(0, 0, 0, .2);
        margin: 10px auto;
        padding: 20px;
    }

    #main::after {
        content: "";
        clear: both;
        display: block;
    }

    #main > .cart_head {
        width: 98%;
        height: 55px;
        margin: 10px auto;
        border: 1px solid black;
        border-radius: 4px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, .2);
    }

    .left_button {
        width: 165px;
        height: 40px;
        color: white;
        background: green;
        float: left;
        margin: 7px;
        line-height: 38px;
        text-align: center;
        cursor: pointer;
        border-radius: 4px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, .2);
    }

    .right_button {
        width: 165px;
        height: 40px;
        color: white;
        background: #c3c3c3;
        float: right;
        margin: 27px 7px;
        line-height: 38px;
        text-align: center;
        cursor: pointer;
        border-radius: 4px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, .2);
    }

</style>

<div id="main">
    <?php
    require ('cart_head.php');
    require ('cart_table.php');
    require ('table_price.php');
    require ('last_div.php');
    ?>
    <span class="right_button">بازگشت به صفحه اصلی</span>
    <?php
    require ('slider_scroll.php');
    ?>
</div>