<?php
require('views/admin/layout.php');
$productInfo=$data['productInfo'];
?>
<style>
    .row {
        width: 100%;
        float: right;
        margin-top: 5px;
    }

    .left {
        float: left;
        border: 1px solid gray;
        border-radius: 3px;
        width: 896px;
        box-shadow: 1px 2px 3px gray;
        margin: 20px 10px;
    }

    .left_title {
        margin: 0;
        text-align: center;
        background: #505050;
        color: white;
        display: block;
        height: 40px;
        line-height: 38px;
    }

    .span_title {
        padding: 5px 5px;
        display: inline-block;
        width: 130px;
    }

    .input_category {
        width: 200px;
        height: 24px;
        border: 1px solid #b7b7b7;
        border-radius: 3px;
        margin: 10px;
        vertical-align: middle;
        padding-right: 5px;
    }

    select {
        width: 120px;
        padding: 3px 5px;
        border-radius: 3px;
        margin: 10px;
        vertical-align: middle;
    }

    option {
        text-align: center;
    }

    .text_area {
        width: 500px;
        height: 250px;
        vertical-align: top;
        border: 1px solid #b7b7b7;
        border-radius: 3px;
        margin: 10px;
        padding-right: 5px;
    }

    .span_item {
        display: inline-block;
        height: 26px;
        width: 70px;
        border-radius: 3px;
        vertical-align: middle;
        background: #e80076;
        color: white;
        position: relative;
        text-align: center;
    }

    .span_item img {
        height: 14px;
        width: 14px;
        cursor: pointer;
        position: absolute;
        left: 0;
    }

</style>
<div class="left">
    <p class="left_title">
        ایجاد محصول جدید
    </p>
    <form action="adminproduct/addproduct" method="post">
        <div class="row">
            <span class="span_title">
                عنوان محصول:
            </span>
            <input type="text" name="title" class="input_category" value="<?= $productInfo['title']; ?>">
        </div>
        <div class="row">
            <span class="span_title">
                دسته والد:
            </span>
            <select name="categoryId" autocomplete="off">
                <option>
                    انتخاب کنید
                </option>
                <?php
                $category = $data['category'];
                $categoryId=$productInfo['cat'];
                foreach ($category as $row) {
                    if($row['id']==$categoryId){
                        $selected='selected';
                    }else{
                        $selected='';
                    }
                    ?>
                    <option value=" <?= $row['id']; ?>"<?= $selected ?>>
                        <?= $row['title']; ?>
                    </option>
                    <?php
                }
                ?>
            </select>
        </div>
        <div class="row">
            <span class="span_title">
                قیمت:
            </span>
            <input type="text" name="price" class="input_category" value="<?= $productInfo['price']; ?>">
        </div>

        <div class="row">
            <span class="span_title">
                معرفی اجمالی:
            </span>
            <textarea name="introduction" class="text_area"><?= $productInfo['introduction']; ?></textarea>
        </div>

        <div class="row">
            <span class="span_title">
                تعداد موجود:
            </span>
            <input type="text" name="tedad_mojod" class="input_category" value="<?= $productInfo['tedad_mojod']; ?>">
        </div>

        <div class="row">
            <span class="span_title">
                میزان تخفیف (%):
            </span>
            <input type="text" name="discount" class="input_category" value="<?= $productInfo['discount']; ?>">
        </div>

        <div class="row">
            <span class="span_title">
                انتخاب رنگ:
            </span>
            <?php
            $colors = $data['colors'];
            ?>
            <select autocomplete="off">
                <option>
                    انتخاب کنید
                </option>
                <?php
                foreach ($colors as $color) {
                    ?>
                    <option  data-title="<?php echo $color['title']; ?>"
                            onclick=addColor(this,"<?php echo $color['id']; ?>","<?php echo $color['hex']; ?>") value="<?= $color['id']; ?>">
                        <?= $color['title']; ?>
                    </option>
                    <?php
                }
                ?>
            </select>

            <?php
            $colosInfo=$productInfo['colorsInfo'];
            foreach ($colosInfo as $row) {
                ?>
                <span style="background: <?= $row['hex']; ?>" class="span_item" ><input type="hidden" value="<?= $row['id']; ?>" name="color[]"><?= $row['title']; ?><img onclick="removeItem(this);" src="public/images/close-icon.gif"></span>
                <?php
            }
            ?>
        </div>
        <div class="row">
            <span class="span_title">
                انتخاب گارانتی:
            </span>
            <?php
            $garranty = $data['garranty'];
            ?>
            <select autocomplete="off">
                <option>
                    انتخاب کنید
                </option>
                <?php
                foreach ($garranty as $value) {
                    ?>
                    <option data-title="<?php echo $value['title']; ?>"
                            onclick=addGarranty(this,"<?php echo $value['id']; ?>") value="<?= $value['id']; ?>">
                        <?= $value['title']; ?>
                    </option>
                    <?php
                }
                ?>
            </select>
        </div>

        <a class="btn_blue_small" onclick="submitform()">
            اجرای عملیات
        </a>
</div>
</form>
</div>
</div>

<script>
    function addColor( tag, colorId, colorCode) {

        var optionTag = $(tag);
        var colorName = optionTag.attr('data-title')
        var spanTag = '<span style="background: '+colorCode+'" class="span_item" ><input type="hidden" value="'+colorId+'" name="color[]">' + colorName + '<img onclick="removeItem(this);" src="public/images/close-icon.gif"></span>';
        var divRow = optionTag.parents('.row');
        divRow.append(spanTag);
    }

    function addGarranty( tag, garrantyId) {

        var optionTag = $(tag);
        var garrantyName = optionTag.attr('data-title');
        var spanTag = '<span class="span_item" ><input type="hidden" value="'+garrantyId+'" name="garranty[]">' + garrantyName + '<img onclick="removeItem(this);" src="public/images/close-icon.gif"></span>';
        var divRow = optionTag.parents('.row');
        divRow.append(spanTag);
    }

    function removeItem(tag) {
        var removeTag=$(tag);
        var spanItem=removeTag.parents('.span_item');
        spanItem.remove();
    }

</script>

