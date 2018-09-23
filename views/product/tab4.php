<style>
    .input_area {
        width: 1153px;
        margin: 20px 0;
        padding: 10px;
        font-size: 12pt;
    }

    .sabt_porsesh {
        display: inline-block;
        cursor: pointer;
        width: 100px;
        height: 35px;
        color: white;
        background: dodgerblue;
        float: left;
        border-radius: 4px;
        text-align: center;
        line-height: 33px;
        box-shadow: 0 3px 3px rgba(0, 0, 0, .2);
    }

    .soal_javab {
        float: right;
        width: 100%;
        margin: 15px 0;
        border-radius: 4px;
        overflow: hidden;
        background: #eaeaea5e;
        box-shadow: 0 3px 3px rgba(0, 0, 0, .2);
    }

    .soal_javab .heder {
        width: 100%;
        height: 40px;
        float: right;
        background: #dadada6b;
    }

    .soal_javab .heder .heder_right_icon {
        width: 25px;
        height: 25px;
        float: right;
        margin: 8px;
        background: url("public/images/slices.png") no-repeat -281px -124px;
    }

    .soal_javab .heder .porsesh {
        float: right;
        margin: 3px;
        font-size: 15pt;
        font-weight: bold;
    }

    .soal_javab .content {
        width: 1156px;
        float: right;
        padding: 10px;
        font-size: 12pt;
    }

    .heder_left_icon {
        width: 28px;
        height: 15px;
        float: left;
        margin: 15px;
        background: url("public/images/slices.png") no-repeat -609px -32px;
        display: none;
    }

    .heder_left_matn {
        float: left;
        font-size: 11pt;
        margin: 8px 40px 0 0;
    }

    .answer{
        float: right;
        width: 100%;
        margin: 15px 0;
        border-radius: 4px;
        overflow: hidden;
        background: #eaeaea5e;
        box-shadow: 0 3px 3px rgba(0, 0, 0, .2);
    }

    .answer .heder{
        width: 100%;
        height: 40px;
        float: right;
        background: #dadada6b;
        font-weight: bold;
        margin: 0;
        /*line-height: 37px;*/
        padding-right: 10px;
    }

    .ansewer_style{
        float: right;
        padding-right: 10px;
        font-size: 12pt;
    }
</style>
    <span class="arrow_icon"></span>
    <p class="nazarat_karbaran">
        پرسش خود را مطرح نمایید :
    </p>
    <textarea class="input_area" placeholder="متن پرسش خود را اینجا بنویسید ... " name="" id=""
              rows="10"></textarea>
    <span class="sabt_porsesh">ثبت پرسش</span>

    <span class="arrow_icon"></span>
    <p class="nazarat_karbaran">
        پرسشها و پاسخ‌ها :
    </p>
<span class="horizontal_line"></span>
<?php
$question=$data['question'];
$answer=$data['answer'];
foreach ($question as $row) {
    ?>
    <div class="soal_javab">
        <div class="heder">
            <span class="heder_right_icon"></span>
            <span class="porsesh">پرسش</span>
            <span class="heder_left_matn" style="margin:8px 5px 0 50px;"><?= $row['date']; ?></span>
            <span class="heder_left_matn">توسط : مهدی باقری - </span>
            <span class="heder_left_icon"></span>
        </div>
        <div class="content"><?= $row['matn']; ?></div>
    </div>

    <div class="soal_javab">
        <div class="heder">
<!--            <span class="heder_right_icon"></span>-->
            <span class="porsesh">پاسخ:</span>
            <span class="heder_left_matn" style="margin:8px 5px 0 50px;"><?= $answer[$row['id']]['date']; ?></span>
            <span class="heder_left_matn">توسط : مهدی باقری - </span>
            <span class="heder_left_icon"></span>
        </div>
        <p class="ansewer_style">
            <?= $answer[$row['id']]['matn']; ?>
        </p>
    </div>
    <?php
}
?>


<script>
    $('.soal_javab').hover(function () {
        $('.heder_left_icon', this).fadeIn(300);
    }, function () {
        $('.heder_left_icon', this).fadeOut(100);
    });
</script>