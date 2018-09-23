<style>
    .orders_section > .list_moredealage_section {
        width: 100%;
        height: 100%;
        float: right;
    }

    .orders_section > .list_moredealage_section > .favorit_top {
        width: 97%;
        height: 100%;
        background: #e4e4e4;
        float: right;
        margin: 15px;
        padding: 0;
        box-shadow: 0 2px 3px rgba(0, 0, 0, .2);
        border-radius: 4px;
    }

    .orders_section > .list_moredealage_section > .favorit_top > li {
        width: 180px;
        height: 35px;
        background: #f4f4f4;
        margin: 10px;
        padding: 5px;
        float: right;
        border: 1px solid gray;
        border-radius: 4px;
        box-shadow: 0 2px 3px rgba(0, 0, 0, .2);
    }

    .orders_section > .list_moredealage_section > .favorit_top > li.active {
        width: 180px;
        height: 35px;
        background: white !important;
        margin: 10px;
        padding: 5px;
        color: black !important;
        float: right;
        border: 1px solid gray;
        border-radius: 4px;
        box-shadow: 0 2px 3px rgba(0, 0, 0, .2);
    }

    .orders_section > .list_moredealage_section > .favorit_top > li:hover {
        width: 180px;
        height: 35px;
        background: #c7c7c7;
        margin: 10px;
        padding: 5px;
        float: right;
        color: white;
        border: 1px solid gray;
        border-radius: 4px;
        box-shadow: 0 2px 3px rgba(0, 0, 0, .2);
    }

    .orders_section > .list_moredealage_section > .favorit_top > li > a {
        width: 100%;
        height: 100%;
        display: inline-block;
    }

    .orders_section > .list_moredealage_section > .favorit_top > li > a > .icon {
        width: 30%;
        height: 100%;
        display: inline-block;
        float: right;
        text-align: center;
        background: url("public/images/folder_documents_all.png") no-repeat center;
    }

    .orders_section > .list_moredealage_section > .favorit_top > li > a > .matn {
        width: 70%;
        height: 100%;
        display: inline-block;
        float: right;
        text-align: center;
        line-height: 39px;
    }

    .orders_section > .list_moredealage_section > .favorit_top > li.active > a > .matn > .edt {
        width: 16px;
        height: 16px;
        display: inline-block;
        float: left;
        text-align: center;
        line-height: 39px;
        background: url("public/images/icon_edit_16.png") no-repeat center;
    }

    .orders_section > .list_moredealage_section > .favorit_item {
        width: 97%;
        float: right;
        text-align: center;
        margin: 25px 15px;
        border: 1px solid gray;
        border-radius: 4px;
        padding: 0;
        box-shadow: 0 2px 3px rgba(0, 0, 0, .2);
    }

    .orders_section > .list_moredealage_section > .favorit_item > li {
        width: 100%;
        height: 120px;
        float: right;
        text-align: center;
        padding: 5px;
        margin: 30px 0;
    }

    .orders_section > .list_moredealage_section > .favorit_item > li > .icon_item {
        width: 110px;
        height: 110px;
        float: right;
        text-align: center;
        border: 3px solid gray;
        border-radius: 4px;
    }

    .orders_section > .list_moredealage_section > .favorit_item > li > .ditails_item {
        width: 969px;
        height: 88%;
        float: right;
        text-align: center;
        padding: 10px 20px 10px 20px;
    }

    .list_moredealage_section > .favorit_item > li > .ditails_item .top {
        width: 940px;
        height: 40px;
        background: white;
        border-radius: 4px;
        position: relative;
        top: -9px;
        padding: 0 10px;
        line-height: 40px;
        border-top: 1px solid gray;
        border-bottom: 1px solid gray;
    }

    .list_moredealage_section > .favorit_item > li > .ditails_item .top:hover {
        color: red;
    }

    .list_moredealage_section > .favorit_item > li > .ditails_item .top .edit_icon {
        width: 18px;
        height: 18px;
        background: url(public/images/Edit.gif) no-repeat center;
        position: relative;
        padding: 0 10px;
        line-height: 40px;
        float: left;
        top: 10px;
    }

    .list_moredealage_section > .favorit_item > li > .ditails_item .top .delete_icon {
        width: 15px;
        height: 15px;
        background: url(public/images/Delete.gif) no-repeat center;
        position: relative;
        top: 12px;
        line-height: 40px;
        float: left;
    }

    .list_moredealage_section > .favorit_item > li > .ditails_item .bottom {
        height: 67px;
    }

    .line_betwen {
        width: 90%;
        height: 1px;
        background: blue;
        display: block;
        float: right;
        margin: 20px 55px;
    }
</style>

<section class="list_moredealage_section">
    <ul class="favorit_top">
        <li class="active">
            <a>
                <span class="icon"></span>
                <span class="matn">همه پوشه ها</span>
            </a>
        </li>
        <li>
            <a>
                <span class="icon"></span>
                <span class="matn">گوشی<span class="edt"></span></span>
            </a>
        </li>
    </ul>
    <ul class="favorit_item">
        <li>
            <div class="icon_item" style="background: url(public/images/favoite1.png)no-repeat center;"></div>
            <div class="ditails_item">
                <div class="top">گوشی سونی اکسپریا Z1 16GB ram : 2 <i class="delete_icon"></i><i
                        class="edit_icon"></i></div>
                <div class="bottom">گروه گوشی</div>
            </div>
        </li>
        <span class="line_betwen"></span>
        <li>
            <div class="icon_item" style="background: url(public/images/favoite2.png)no-repeat center;"></div>
            <div class="ditails_item">
                <div class="top">گوشی سونی اکسپریا Z1 16GB ram : 2 <i class="delete_icon"></i><i
                        class="edit_icon"></i></div>
                <div class="bottom">گروه گوشی</div>
            </div>
        </li>
        <span class="line_betwen"></span>
    </ul>
</section>
<script>
    $('.list_moredealage_section > .favorit_top > li').click(function () {
        $('.list_moredealage_section > .favorit_top > li').removeClass('active')
        $(this).addClass('active');
    });
</script>