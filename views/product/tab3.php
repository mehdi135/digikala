<style>
    .comments_result {
        width: 510px;
        float: right;
    }

    .comments_send {
        width: 630px;
        float: left;
    }

    .arrow_icon {
        width: 16px;
        height: 16px;
        background: url(public/images/left-arrow.png) no-repeat;
        display: inline-block;
        float: right;
        margin-right: -7px;
        margin-top: 35px;
    }

    .comments_result .title_section {
        margin: 30px 15px;
        float: right;
        font-weight: bold;
    }

    .comments_result .title_section span {
        margin-right: 15px;
        font-weight: normal;
    }

    .comments_result .row {
        width: 100%;
        float: right;
    }

    .comments_result .row ul {
        padding: 0;
        height: 10px;
        float: left;
        margin: 9px 0;
    }

    .comments_result .row ul li {
        width: 62px;
        height: 100%;
        border-left: 1px solid white;
        float: right;
        background: #e7e7e7;
    }

    .comments_result .row ul li span {
        height: 100%;
        margin-left: 1px;
        display: block;
        background: green;
    }

    .comments_result .row ul li span.full {
        width: 100%;
    }

    .comments_result .row .title {
        font-size: 11pt;
    }

    .comments_send p:first-child {
        font-size: 14pt;
        font-weight: bold;
    }

    .comments_send .nazar_button {
        display: inline-block;
        cursor: pointer;
        width: 140px;
        height: 35px;
        color: white;
        background: dodgerblue;
        float: left;
        border-radius: 4px;
        text-align: center;
        line-height: 33px;
        box-shadow: 0 3px 3px rgba(0, 0, 0, .2);
    }

    .comments {
        float: right;
        width: 100%;
    }

    .nazarat_karbaran {
        font-size: 13pt;
        margin: 30px 20px 10px 0;
        font-weight: bold;
    }

    .horizontal_line {
        width: 100%;
        height: 1px;
        background: #e4e4e4;
        float: right;
        margin: 0 0 20px 0;
    }

    .comments .comment {
        width: 1178px;
        margin: 20px 0;
        border-radius: 4px;
        float: right;
        background: #fbfbfbe6;
        overflow: hidden;
        box-shadow: 0 3px 10px rgba(0, 0, 0, .1);
    }

    .comments .comment .comment_heder {
        width: 100%;
        height: 45px;
        background: #f1efef;
        float: right;
    }

    .comments .comment .comment_heder .right {
        float: right;
    }

    .comments .comment .comment_heder .right .comment_icon {
        float: right;
        width: 35px;
        height: 35px;
        background: url("public/images/slices.png") no-repeat -260px -545px;
        margin: 7px;
    }

    .comments .comment .comment_heder .left .comment_icon {
        float: right;
        width: 28px;
        height: 17px;
        background: url("public/images/slices.png") no-repeat -607px -30px;
        margin: 15px;
    }

    .comments .comment .comment_heder .right .comment_name {
        margin-right: 60px;
        display: block;
        font-size: 13pt;
    }

    .comments .comment .comment_heder .right .comment_date {
        font-size: 9pt;
        margin-right: 57px;
        display: block;
    }

    .comments .comment .comment_heder .left {
        float: left;
        width: 500px;
        line-height: 45px;
    }

    .comments .comment .comment_heder .left .like {
        float: right;
        cursor: pointer;
        width: 65px;
        height: 25px;
        line-height: 45px;
        border-radius: 3px;
        background: white;
        border: 1px solid #e2e2e2;
        margin: 9px 30px 0 0;
        box-shadow: 0 1px 1px rgba(0, 0, 0, .2);
    }

    .comments .comment .comment_heder .left .like .like_icon {
        float: right;
        width: 19px;
        height: 19px;
        line-height: 40px;
        background: url(public/images/slices.png) no-repeat -303px -189px;
        margin: 3px 8px 0 0;
    }

    .comments .comment .comment_heder .left .like .like_count {
        float: right;
        line-height: 28px;
        font-size: 11pt;
        margin: 0 10px 0 0;
    }

    .comments .comment .comment_heder .left .dislike {
        float: right;
        cursor: pointer;
        width: 65px;
        height: 25px;
        line-height: 45px;
        border-radius: 3px;
        background: white;
        border: 1px solid #e2e2e2;
        margin: 9px 30px;
        box-shadow: 0 1px 1px rgba(0, 0, 0, .2);
    }

    .comments .comment .comment_heder .left .dislike .like_icon {
        float: right;
        width: 19px;
        height: 19px;
        line-height: 40px;
        background: url(public/images/slices.png) no-repeat -264px -190px;
        margin: 3px 8px 0 0;
    }

    .comments .comment .comment_heder .left .dislike .like_count {
        float: right;
        line-height: 28px;
        font-size: 11pt;
        margin: 0 10px 0 0;
    }

    .comments .comment .comment_heder .left .title {
        margin: 0 20px;
        float: right;
        font-size: 11pt;
    }

    .comment_content {
        width: 1155px;
        float: left;
        padding: 10px;
    }

    .comment_content .right {
        float: right;
        width: 400px;
    }

    .comment_result {
        width: 450px;
        float: right;
        margin: 30px 0;
    }

    .comment_result .title_section {
        margin: 30px 15px;
        float: right;
        font-weight: bold;
    }

    .comment_result .title_section span {
        margin-right: 15px;
        font-weight: normal;
    }

    .comment_result .row {
        width: 100%;
        float: right;
    }

    .comment_result .row ul {
        padding: 0;
        height: 10px;
        float: left;
        margin: 11px 0;
    }

    .comment_result .row ul li {
        width: 50px;
        height: 100%;
        border-left: 1px solid white;
        float: right;
        background: #e7e7e7;
    }

    .comment_result .row ul li span {
        height: 100%;
        margin-left: 1px;
        display: block;
        background: grey;
    }

    .comment_result .row ul li span.full {
        width: 100%;
        background: gray;
    }

    .comment_result .row .title {
        font-size: 11pt;
    }

    .comment_content .left {
        width: 650px;
        float: left;
        margin: 30px 0;
    }

    .comment_content .left .title {
        font-size: 15pt;
        font-weight: bold;
    }

    .comment_content .left .noghat {
        float: right;
        display: block;
        padding: 0;
    }

    .comment_content .left .noghat .govat {
        width: 305px;
        float: right;
        padding: 0;
    }

    .comment_content .left .noghat .govat li {
        padding: 3px 10px;
    }

    .comment_content .left .noghat .govat .govat_li {
        color: green;
        font-size: 13pt;
        font-weight: bold;
    }

    .comment_content .left .noghat .zaf {
        width: 305px;
        float: left;
        padding: 0;
    }

    .comment_content .left .noghat .zaf li {
        padding: 3px 10px;
    }

    .comment_content .left .noghat .zaf .zaf_li {
        color: red;
        font-size: 13pt;
        font-weight: bold;
    }

    .comment_content .left .nazar {
        display: block;
        float: right;
    }

    .zaf_icon {
        width: 13px;
        height: 13px;
        display: inline-block;
        margin-left: 10px;
        background: url("public/images/slices.png") no-repeat -245px -80px;
    }

    .govat_icon {
        width: 13px;
        height: 13px;
        display: inline-block;
        margin-left: 10px;
        background: url("public/images/slices.png") no-repeat -220px -80px;
    }
</style>
<div class="comments_result">
    <?php
    $comment_params = $data['comment_param'];
    $comment_params_scores = $data['comment_param_scores'];
    ?>
    <span class="arrow_icon"></span>
    <p class="title_section">
        امتیاز کاربرات به :
        <span>
                    گوشی سونی مدل Z1
                </span>
    </p>
    <?php
    foreach ($comment_params as $value) {
        $score = $comment_params_scores[$value['id']-1];
        $part1 = floor($score);
        $part2 = $score - $part1;
        $num_li=$part1;
        ?>
        <div class="row">
                    <span class="title">
                        <?= $value['title']; ?>
                    </span>
            <ul>
                <?php
                for($i=0;$i<$part1;$i++) {
                    ?>
                    <li>
                        <span></span>
                    </li>
                    <?php
                }
                ?>
                <?php
                if($part1<5) {
                    $num_li++;
                    ?>
                    <li>
                        <span style="width: <?= $part2 * 100 ?>%;"></span>
                    </li>
                    <?php
                }
                ?>
                <?php
                for($x=$num_li;$x<5;$x++) {
                    ?>
                    <li>

                    </li>
                    <?php
                }
                ?>
            </ul>
        </div>
        <?php
    }
    ?>
</div>

<div class="comments_send">
    <p>
        شما هم می‌توانید در مورد این کالا نظر دهید :
    </p>
    <p>
        شما هم می‌توانید در مورد این کالا نظر دهید :
        شما هم می‌توانید در مورد این کالا نظر دهید :
        شما هم می‌توانید در مورد این کالا نظر دهید :
        شما هم می‌توانید در مورد این کالا نظر دهید :
        شما هم می‌توانید در مورد این کالا نظر دهید :
    </p>
    <span class="nazar_button">نظر خود را بنویسید</span>
</div>

<div class="comments">
    <span class="arrow_icon"></span>
    <p class="nazarat_karbaran">
        نظرات کاربران :
    </p>
    <span class="horizontal_line"></span>
    <?php
    $comments = $data['comments'];
    foreach ($comments as $value) {
        ?>
        <div class="comment">
            <div class="comment_heder">
                <div class="right">
                    <span class="comment_icon"></span>
                    <span class="comment_name">مهدی باقری</span>
                    <span class="comment_date"><?= $value['date']; ?></span>
                </div>
                <div class="left">
                    <span class="comment_icon"></span>
                    <p class="title">آیا این نظر برای شما مفید بود ؟</p>
                    <span class="like">
                                <span class="like_icon"></span>
                                <span class="like_count"><?= $value['liked']; ?></span>
                            </span>
                    <span class="dislike">
                                <span class="like_icon"></span>
                                <span class="like_count"><?= $value['disliked']; ?></span>
                            </span>
                </div>
            </div>

            <div class="comment_content">
                <div class="right">
                    <div class="comment_result">
                        <?php
                        $scores = unserialize($value['param']);
                        //                        print_r($scores);
                        foreach ($comment_params as $row) {
                            $param_id = $row['id'];
//                            print_r($param_id);
                            $score = $scores[$param_id - 1];
//                            print_r($score);
                            ?>
                            <div class="row">
                    <span class="title">
                        <?= $row['title'] ?>
                    </span>
                                <ul>
                                    <?php
                                    for ($i = 0; $i < $score; $i++) {
                                        ?>
                                        <li>
                                            <span class="full"></span>
                                        </li>
                                        <?php
                                    }
                                    ?>
                                    <?php
                                    for ($i = 0; $i < 5 - $score; $i++) {
                                        ?>
                                        <li>
                                        </li>
                                        <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>

                <div class="left">
                    <div class="title"><?= $value['title']; ?></div>
                    <div class="noghat">
                        <ul class="govat">
                            <li class="govat_li">نقاط قوت</li>
                            <li><i class="govat_icon"></i><?= $value['posetive']; ?></li>
                        </ul>
                        <ul class="zaf">
                            <li class="zaf_li">نقاط ضعف</li>
                            <li><i class="zaf_icon"></i><?= $value['negative']; ?></li>
                        </ul>
                    </div>
                    <div class="nazar">
                        <p><?= $value['matn']; ?></p>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
    ?>

</div>