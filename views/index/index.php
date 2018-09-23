<style>
    #main {
        width: 1200px;
        margin: auto;
    }

    #content {
        width: 890px;
        float: left;
    }
</style>

<div id="main">
    <?php
    require('baner.php');
    require('sidbar_right.php');
    ?>
    <div id="content">
        <?php
        require('slider_main.php');
        require('services_feature.php');
        require('slider_vertical.php');
        require('slider_scroll.php');
        require('direct_access.php');
        require('slider_scroll2.php');
        require('slider_scroll3.php');
        require('slider_scroll4.php');
        ?>
    </div>
</div>