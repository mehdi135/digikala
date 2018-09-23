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


</style>

<div id="main">
    <?php
    require ('order_steps.php');
    require ('first_div.php');
    require ('final_price.php');
    require ('send_way.php');
    require ('last_div.php');
    ?>
</div>

