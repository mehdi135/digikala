<style>
    #sidebar {
        width: 250px;
        border: 1px solid #ccc;
        float: right;
    }

    #sidebar ul {
        padding-right: 15px;
        margin-top: 7px;
    }

    #sidebar ul li {
        font-weight: normal;
    }

    #sidebar > ul > li > ul li span {
        width: 8px;
        height: 8px;
        display: inline-block;
        background: url(public/images/slices.png) no-repeat -274px -83px;
        margin: 7px;
        vertical-align: middle;
    }

    #sidebar h3 {
        height: 30px;
        color: white;
        background: darkgray;
        padding: 5px 10px 0 0;
        margin: 0;
        font-size: 12pt;
        font-weight: normal;
        line-height: 20px;
    }

    #sidebar h3 .arrow {
        width: 20px;
        height: 20px;
        background: url(public/images/slices.png) no-repeat -438px -422px;
        float: left;
        display: inline-block;
        margin: 5px;
    }

    .sidebar_line {
        border: 1px solid #ccc;
        display: block;
        margin: 15px;
    }
</style>
<!----------//////////SIDBAR\\\\\\\\\\----------->
<div id="sidebar">
    <h3>گوشی موبایل
        <span class="arrow"></span>
    </h3>
    <ul>
        <li style="font-weight: bold;">کالای دیجیتال
            <ul>
                <li><span></span>موبایل
                    <ul>
                        <li><span></span>گوشی موبایل

                        </li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>

    <div class="sidebar_line"></div>
    <ul>
        <li style="font-weight: bold;">براساس نوع</li>
        <li><label class="check_label"></label>
            <input class="input_checkbox" type="checkbox">سیستم عامل اندروید
        </li>
        <li><label class="check_label"></label>
            <input class="input_checkbox" type="checkbox">سیستم عامل ios
        </li>
        <li><label class="check_label"></label>
            <input class="input_checkbox" type="checkbox">سیستم عامل ویندوز فون
        </li>
        <li><label class="check_label"></label>
            <input class="input_checkbox" type="checkbox">سایر سیستم عامل ها
        </li>
    </ul>

    <div class="sidebar_line"></div>
    <ul>
        <li style="font-weight: bold;">براساس سازنده</li>
        <li><label class="check_label"></label>
            <input class="input_checkbox" type="checkbox">اپل
        </li>
        <li><label class="check_label"></label>
            <input class="input_checkbox" type="checkbox">سامسونگ
        </li>
        <li><label class="check_label"></label>
            <input class="input_checkbox" type="checkbox">ایسوس
        </li>
        <li><label class="check_label"></label>
            <input class="input_checkbox" type="checkbox">فراسو
        </li>
    </ul>

    <div class="sidebar_line"></div>
    <ul>
        <li style="font-weight: bold;">براساس رنگ</li>
        <li><label class="check_label"></label>
            <input class="input_checkbox" type="checkbox">
            <span class="color_checkbox" style="background: blue;"></span>آبی
        </li>
        <li><label class="check_label"></label>
            <input class="input_checkbox" type="checkbox">
            <span class="color_checkbox" style="background: red;"></span>قرمز
        </li>
        <li><label class="check_label"></label>
            <input class="input_checkbox" type="checkbox">
            <span class="color_checkbox" style="background: brown;"></span>قهوه ای
        </li>
        <li><label class="check_label"></label>
            <input class="input_checkbox" type="checkbox">
            <span class="color_checkbox" style="background: green;"></span>سبز
        </li>
    </ul>
</div>
<!----------//////////SIDBAR\\\\\\\\\\----------->