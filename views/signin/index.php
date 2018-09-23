<style>
    #main {
        width: 1200px;
        height: 500px;
        background: white;
        box-shadow: 0px 2px 3px rgba(0, 0, 0, .2);
        margin: 10px auto;
    }

    /*--------------- main_header STYLE ---------------*/
    #main_header {
        height: 160px;
        width: 100%;
        background: #fafcfc;
        padding-top: 20px;
    }

    #main_header > span {
        font-size: 16pt;
        color: #969ba8;
        padding-right: 15px;
    }

    #main_header_icon {
        height: 60px;
        width: 70px;
        background: url(images/slices.png) -770px -17px;
        display: block;
        margin: auto;
    }
    /*--------------- main_header STYLE ---------------*/

    /*--------------- main_header_bottom_right STYLE ---------------*/
    .main_header_bottom_right {
        width: 40%;
        float: right;
        padding: 30px 30px 0 0;
    }

    .main_header_bottom_right > input {
        width: 250px;
        height: 30px;
        border: 1px solid #ccc;
        color: #7c7c7c;
        direction: ltr;
        border-radius: 4px;
        float: left;
        margin-left: 110px;
    }

    .main_header_bottom_right > div {
        padding-top: 35px;
    }

    .main_header_bottom_email > span {
        width: 90px;
        height: 37px;
        box-shadow: 0 1px 2px rgba(0, 0, 0, .4);
        border-radius: 4px;
        float: left;
        background: #208de6;
        color: #ffffff;
        font-size: 11pt;
        text-align: center;
        line-height: 36px;
        cursor: pointer;
    }

    .input_signin {
        direction: ltr;
        width: 200px;
    }

    .label_signin {
        width: 100px;
        display: inline-block;
    }

    /*--------------- main_header_bottom_right STYLE ---------------*/

    /*--------------- main_header_bottom_left STYLE ---------------*/
    .main_header_bottom_left {
        width: 50%;
        float: left;
    }

    .main_header_bottom_left ul {
        padding: 0;
    }

    .main_header_bottom_left li {
        padding-top: 15px;
    }

    .main_header_bottom_left i {
        width: 25px;
        height: 25px;
        background: url(images/slices.png);
        vertical-align: middle;
        display: inline-block;
        margin-left: 15px;
    }

    /*--------------- main_header_bottom_left STYLE ---------------*/

    /*--------------- Check_Lable STYLE ---------------*/
    .check_label {
        width: 13px;
        height: 13px;
        display: inline-block;
        vertical-align: middle;
        position: absolute;
        bottom: 6px;
        border: 1px solid #5d5d5d;
        border-radius: 2px;
    }

    .check_label.checked {
        background: url(images/slices.png) -193px -82px #3542bf;
        border: none;
    }

    .check_div {
        position: relative;
    }

    .check_input {
        vertical-align: middle;
        margin: 0 0 0 10px;
        z-index: 2;
        position: relative;
        opacity: 0;
    }

    /*--------------- Check_Lable STYLE ---------------*/
</style>

<div id="main">
    <!----------//////////MAIN HEDER\\\\\\\\\\----------->
    <div id="main_header">
        <i id="main_header_icon"></i>
        <span>ورود به دیجی کالا</span>
        <div class="main_header_bottom_right">
            <div>
                <label class="label_signin">پست الکترونیکی :</label>
                <input class="input_signin" type="text" placeholder="Email:">
            </div>
            <div>
                <label class="label_signin">کلمه عبور :</label>
                <input class="input_signin" type="password" placeholder="password:">
            </div>
            <div class="check_div">
                <label class="check_label"></label>
                <input class="check_input" type="checkbox">قوانین را مطالعه نموده و با آن موافقت مینمایم
            </div>
            <div class="check_div">
                <label class="check_label"></label>
                <input class="check_input" type="checkbox">خبرنامه را برای من ارسال کن
            </div>
            <div class="main_header_bottom_email">
                <span>ثبت نام</span>
            </div>
        </div>
        <div class="main_header_bottom_left">
            <ul>
                <li><i style="background-position: -981px -332px;"></i>ساده تر و سریعتر خرید کنید</li>
                <li><i style="background-position: -981px -290px;"></i>به سادگی سوابق خرید و فعالیتهای خود را مدیریت
                    کنید
                </li>
                <li><i style="background-position: -981px -246px;"></i>لیست علاقه مندیهای خود را بسازید و تغییرات آن را
                    دنبال کنید
                </li>
                <li><i style="background-position: -981px -204px;"></i>نقد، بررسی و نظرات خود را با دیگران به اشتراک
                    بگذارید
                </li>
                <li><i style="background-position: -981px -166px;"></i>در جریان فروش های ویژه و قیمت روز محصولات قرار
                    بگیرید
                </li>
            </ul>
        </div>
    </div>
    <!----------//////////MAIN HEDER\\\\\\\\\\----------->
</div>

<script>
    $('.check_input').click(function () {
        if ($(this).is(':checked')) {
            $(this).parents('.check_div').find('.check_label').addClass('checked');
        } else {
            $(this).parents('.check_div').find('.check_label').removeClass('checked');
        }
    });

</script>