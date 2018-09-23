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
$product = $data['product'];

require('views/admin/layout.php');
?>
<div class="left">
    <p class="left_title">
            مدیریت محصولات
    </p>
    <style>

        .edit_icon {
            width: 23px;
            height: 23px;
        }
    </style>

    <a class="btn_green_small" href="adminproduct/addproduct">
        افزودن
    </a>
    <a onclick="submitform();" class="btn_red_small">
        حذف
    </a>
    <form action="" method="post">
        <table class="list" cellspacing="0">
            <tr>
                <td>
                    کد
                </td>
                <td>
                    عنوان
                </td>
                <td>
                    قیمت
                </td>
                <td>
                    تخفیف
                </td>
                <td>
                    ویرایش
                </td>
                <td>
                    انتخاب
                </td>
            </tr>
            <?php
            foreach ($product as $row) {
                ?>
                <tr>
                    <td>
                        <?= $row['id'] ?>
                    </td>
                    <td>
                        <?= $row['title'] ?>
                    </td>
                    <td>
                        <?= $row['price'] ?>
                    </td>
                    <td>
                        <?= $row['discount'] ?>
                    </td>
                    <td>
                        <a href="adminproduct/addproduct/<?= $row['id'] ?>">
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