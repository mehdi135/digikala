<?php
require('views/admin/layout.php');
$edit=$data['edit'];
$categoryInfo=$data['categoryInfo'];
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

    .span_title{
        padding: 5px 5px;
        display: inline-block;
        width: 130px;
    }

    .input_category{
        width: 200px;
        height: 24px;
        border: 1px solid #b7b7b7;
        border-radius: 3px;
        margin: 10px;
        vertical-align: middle;
        padding-right: 5px;
    }

    select{
        width: 120px;
        padding: 3px 5px;
        border-radius: 3px;
        margin: 10px;
        vertical-align: middle;
    }

    option{
        text-align: center;
    }

</style>
<div class="left">
    <p class="left_title">
        <?php
        if ($edit=='') {
            ?>
            ایجاد دسته جدید
            <?php
        }else {
            ?>
            ویرایش دسته
            <?php
        }
        ?>

    </p>
    <form action="admincategory/addcategory/<?= $categoryInfo['id']; ?>/<?= $edit; ?>" method="post">
        <div class="row">
            <span class="span_title">
                عنوان دسته:
            </span>
            <input type="text" name="title" class="input_category" value="<?php if ($edit==''){}else{echo $categoryInfo['title'];}?>">
        </div>
        <div class="row">
            <span class="span_title">
                دسته والد:
            </span>
            <select name="parent" autocomplete="off">
                <option>
                    انتخاب کنید
                </option>
                <?php
                $category= $data['category'];
                $parentid=$data['categoryId'];
                if ($edit=='') {
                    $selectedId = $parentid;
                }else{
                    $selectedId=$categoryInfo['parent'];
                }
                foreach ($category as $row) {
                    if($row['id']==$selectedId){
                        $select='selected';
                    }else{
                        $select='';
                    }
                    ?>
                    <option value=" <?= $row['id']; ?>"<?= $select ?>>
                        <?= $row['title']; ?>
                    </option>
                    <?php
                }
                ?>
            </select>
            <a class="btn_blue_small" onclick="submitform()">
                اجرای عملیات
            </a>
        </div>
    </form>
    </div>
</div>

