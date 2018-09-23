<style>
    #main {
        width: 1160px;
        height: 100%;
        padding: 20px;
        background: white;
        margin: 10px auto;
        border-radius: 3px;
        box-shadow: 0 2px 3px rgba(0, 0, 0, .2);
        overflow: hidden;
    }

    #main::after {
        content: "";
        clear: both;
        display: block;
    }

</style>

<div id="main">
    <?php
    $productInfo=$data['productInfo'];
    if($productInfo['special']==1){
        require ('offer.php');
    }
    require ('details.php');
    ?>
</div>
<?php
require ('introduction.php');
require ('slider_scroll.php');
require ('tabs.php');
require ('gallery.php');
?>
<script>
    $('.input_checkbox').click(function () {
        if ($(this).is(':checked')) {
            $(this).parents('li').find('.check_label').addClass('checked');
        } else {
            $(this).parents('li').find('.check_label').removeClass('checked');
        }
    });

</script>
</div>