<style>

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
</style>
<?php
$category = $data['category'];
$categoryInfo = [];
$parent = [];
if (isset($data['categoryInfo'])) {
    $categoryInfo = $data['categoryInfo'];
}
if (isset($data['parent'])) {
    $parent = $data['parent'];
}

require('views/admin/layout.php');
?>
<div class="left">
    <p class="left_title">
        مدیریت دسته ها
        {
        <?php
        foreach ($parent as $row) {
            ?>
            <a href="admincategory/showchildren/<?= $row['id']; ?>" style="color: white">
                <?= $row['title']; ?> -
            </a>
            <?php
        }
        if (isset($categoryInfo['title'])) {
            echo $categoryInfo['title'];
        } else {
            echo "دسته های اصلی";
        }
        ?>
        }
    </p>
    <style>

        .edit_icon {
            width: 23px;
            height: 23px;
        }
    </style>

    <a href="admincategory/addcategory/<?= @$categoryInfo['id']; ?>" class="btn_green_small">
        افزودن
    </a>
    <a onclick="submitform();" class="btn_red_small">
        حذف
    </a>
    <form action="admincategory/deletecategory/<?= @$categoryInfo['id']; ?>" method="post">
        <table class="list" cellspacing="0">
            <tr>
                <td>
                    ردیف
                </td>
                <td>
                    عنوان دسته
                </td>
                <td>
                    مشاهده زیردسته ها
                </td>
                <td>
                    ویرایش
                </td>
                <td>
                    انتخاب
                </td>
            </tr>
            <?php
            foreach ($category as $row) {
                ?>
                <tr>
                    <td>
                        <?= $row['id'] ?>
                    </td>
                    <td>
                        <?= $row['title'] ?>
                    </td>
                    <td>
                        <a href="admincategory/showchildren/ <?= $row['id'] ?>">
                            <img src="public/images/view_icon.png" alt="">
                        </a>
                    </td>
                    <td>
                        <a href="admincategory/addcategory/ <?= $row['id'] ?>/edit">
                            <img src="public/images/edit_icon.ico" alt="" class="edit_icon">
                        </a>
                    </td>
                    <td>
                        <input type="checkbox" name="id[]" value="<?= $row['id'] ?>">
                    </td>
                </tr>
                <?php
            }
            ?>
        </table>
    </form>
</div>
</div>