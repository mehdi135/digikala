<style>
    .section_fanni .arrow_icon {
        width: 16px;
        height: 16px;
        background: url(public/images/left-arrow.png) no-repeat;
        display: inline-block;
        float: right;
        margin-right: -7px;
        margin-top: 35px;
    }

    .section_fanni .title_section {
        margin: 30px 15px;
        float: right;
    }

    .section_fanni .row {
        width: 100%;
        height: 40px;
        float: right;
        margin-top: 10px;
        font-size: 10.5pt;
        color: #4c4c4c;
    }

    .section_fanni .row .param {
        width: 200px;
        height: 100%;
        float: right;
        background: #e7e7e7;
        padding-right: 20px;
        line-height: 40px;
        border-radius: 3px;
        box-shadow: 0 1px 2px rgba(0, 0, 0, .2);
    }

    .section_fanni .row .value {
        width: 925px;
        height: 100%;
        float: left;
        line-height: 42px;
        background: #EBEFF2;
        padding-right: 20px;
        border-radius: 3px;
        box-shadow: 0 1px 2px rgba(0, 0, 0, .2);
    }
</style>
    <span class="arrow_icon"></span>
<?php
$fanni=$data['fanni'];
foreach ($fanni as $value) {
    $children=$value['children'];
    ?>
    <h4 class="title_section"><?= $value['title']; ?></h4>
    <?php
    foreach ($children as $child) {
        ?>
        <div class="row">
            <div class="param"><?= $child['title']; ?></div>
            <div class="value">

                <?php
                if ($child['value']==""){
                    echo "-";
                }else{
                    echo $child['value'];
                }
                ?>
            </div>
        </div>
        <?php
    }
        ?>
    <?php
}
?>