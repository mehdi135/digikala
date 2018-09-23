<!----------//////////serach\\\\\\\\\\----------->
<style>
    #search {
        float: right;
        height: 40px;
        width: 100%;
    }

    #search input {
        width: 280px;
        height: 18px;
        margin-right: 13px;
        border-radius: 4px;
        border: 1px solid #cac4c4;
        float: right;
        overflow: hidden;
        padding-right: 5px;
    }

    #search_icon {
        width: 20px;
        height: 20px;
        background: white url(public/images/search2.png) no-repeat center;
        float: right;
        position: relative;
        right: -21px;
        top: 1px;
        cursor: pointer;
        border-radius: 4px;
    }

    .exist {
        margin-right: 15px;
        position: relative;
    }

    .exist_back {
        width: 40px;
        height: 21px;
        display: inline-block;
        background: url("public/images/btnchecked.png") no-repeat 0 0;
    }
    .exist.active .exist_back {
        background-position: -40px 0 !important;
    }

    .exist_yesno {
        background: url(public/images/yesno.png) no-repeat 0 -21px;
        width: 29px;
        height: 21px;
        position: absolute;
        top: -5px;
        left: 4px;
        cursor: pointer;
    }

    #search_span {
        margin-right: 5px;
        position: relative;
        top: -6px;
        font-size: 10pt;
    }

    .display_type {
        float: left;
        margin-left: 50px;
    }

    .type_display {
        margin-left: 7px;
        font-size: 10pt;
    }

    .type_one, .type_two {
        width: 24px;
        height: 24px;
        vertical-align: middle;
        display: inline-block;
        background: url("public/images/displaytype.png") no-repeat;
        cursor: pointer;
    }

    .type_one {
        background-position: -24px -24px;
    }

    .type_two {
        background-position: 0 -24px;
    }

    .exist_yes{
        background-position: 0 0 !important;
    }

    .exist_no{
        background-position: 0 -21px !important;
    }
</style>

<div id="search">
    <input type="text" placeholder="جستجو:">
    <span id="search_icon"></span>
    <span class="exist">
            <span class="exist_back"></span>
            <span class="exist_yesno"></span>
            </span>
    <span id="search_span">فقط نمایش کالاهای موجود</span>
    <span class="display_type">
                <span class="type_display">نوع نمایش</span>
                <span class="type_one"></span>
                <span class="type_two"></span>
            </span>
</div>

<script>

    $('.exist').click(function () {
        if($(this).hasClass('active')){
            $('.exist_yesno',this).animate({'marginLeft':'0'},400);
            $('.exist_yesno',this).addClass('exist_no');
            $('.exist_yesno',this).removeClass('exist_yes');
        }else{
            $('.exist_yesno',this).animate({'marginLeft':'10px'},400);
            $('.exist_yesno',this).addClass('exist_yes');
            $('.exist_yesno',this).removeClass('exist_no');
        }
        $('.exist').toggleClass('active');
    });
</script>
<!----------//////////serach\\\\\\\\\\----------->