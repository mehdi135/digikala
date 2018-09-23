<style>
    .input_checkbox {
        vertical-align: middle;
        margin-left: 7px;
        opacity: 0;
    }

    .check_label {
        width: 17px;
        height: 17px;
        display: inline-block;
        vertical-align: middle;
        position: absolute;
        border-radius: 2px;
        margin: 7px 4px 0 0;
        background: url(public/images/a-checkbox-medium-sprite.png) no-repeat -1px -3px;
    }

    .check_label.checked {
        background: url(public/images/a-checkbox-medium-sprite.png) no-repeat -1px -32px;
        border: none;
    }

    .color_checkbox {
        width: 5px;
        height: 13px;
        vertical-align: middle;
        display: inline-block;
        margin-right: -3px;
        margin-left: 7px;
    }

    #content {
        width: 905px;
        float: left;
    }
</style>
<div id="content">
    <?php
    require ('content_page_navigator.php');
    require ('content_filter_top.php');
    require ('content_search.php');
    require ('content_sort.php');
    require ('content_pagination.php');
    require ('content_products.php');
    ?>
</div>