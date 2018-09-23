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
    require ('sidbar.php');
    require ('content.php');
    ?>
</div>
