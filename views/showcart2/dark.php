<style>
    .dark {
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, .6);
        position: fixed;
        top: 0;
        left: 0;
        z-index: 3;
        display: none;
    }

    .product_adress {
        width: 50%;
        height: 98%;
        background: white;
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        z-index: 4;
        margin: auto;
        display: none;
    }

    .dark .product_adress .head {
        width: 100%;
        height: 50px;
        float: right;
        background: rgba(227, 227, 227, 0.24);
    }

    .dark .product_adress .head .head_close {
        width: 30px;
        height: 30px;
        float: left;
        border-radius: 50%;
        cursor: pointer;
        text-align: center;
        border: 1px solid gray;
        color: red;
        font-size: 20px;
        line-height: 26px;
        margin: 9px;
        background: white;
    }

    .product_adress_name {
        float: right;
        margin: 20px 0 0 0;
        padding-right: 10px;
        width: 95%;
        position: relative;
    }

    .product_adress_input {
        width: 220px;
        height: 25px;
        vertical-align: middle;
        float: left;
        margin-left: 250px;
        padding: 0 5px;
    }

    .select_input {
        width: 120px;
        height: 27px;
        border: 1px solid gray;
        float: left;
        margin-right: 10px;
        padding: 0 5px;
        cursor: pointer;
    }

    .btn_green {
        width: 165px;
        height: 40px;
        display: inline-block;
        line-height: 38px;
        background: green;
        color: white;
        float: left;
        font-size: 10pt;
        border-radius: 4px;
        text-align: center;
        cursor: pointer;
        box-shadow: 0 2px 3px rgba(0, 0, 0, .2);
    }

    .btn_gray {
        width: 140px;
        height: 40px;
        display: inline-block;
        line-height: 38px;
        background: gray;
        color: white;
        float: right;
        font-size: 10pt;
        border-radius: 4px;
        text-align: center;
        cursor: pointer;
        box-shadow: 0 2px 3px rgba(0, 0, 0, .2);
    }

    .shahar {
        float: left;
        margin-left: 94px;
        padding: 0;
        width: 120px;
        height: 32px;
        border-radius: 4px;
        position: absolute;
        top: 0;
        left: 35px;
    }
</style>

<div class="dark">
    <div class="product_adress">
        <div class="head">
            <span class="head_close">×</span>
        </div>
        <div class="product_adress_name">
            <span>نام و نام خانوادگی تحویل گیرنده :</span>
            <input class="product_adress_input" type="text">
        </div>
        <div class="product_adress_name">
            <span>شماره تماس ضروری ( تلفن همواه) :</span>
            <input style="direction: ltr;" placeholder="09.." class="product_adress_input" type="text">
        </div>
        <div class="product_adress_name">
            <span>شماره تلفن ثابت :</span>
            <input style="width: 50px;" class="product_adress_input" type="text">
            <input style="width: 150px;margin-left: 5px;" class="product_adress_input" type="text">
        </div>
        <div class="product_adress_name">
            <span>استان/ شهر تحویل گیرنده :</span>
            <div style="" class="shahr shahar">
                <select class="selectpicker" title="انتخاب شهر" style="width: 100%;height: 100%;border: none;cursor: pointer;" onchange="mahale(this);">
                </select>
            </div>
            <div style="float: left; position: relative; right: -260px;">
                <select class="selectpicker" data-live-search="true" onchange="ostan(this);">
                    <option value="">
                        انتخاب استان
                    </option>

                    <option value="آذربایجان شرقی" data-val="41">آذربایجان شرقی</option>
                    <option value="آذربایجان غربی" data-val="44" data-tokens="urmia ارومیه orumieh">آذربایجان غربی</option>
                    <option value="اردبیل" data-val="45">اردبیل</option>
                    <option value="اصفهان" data-val="31">اصفهان</option>
                    <option value="تهران" data-val="21">تهران</option>

                </select>
            </div>
        </div>
        <div class="product_adress_name">
            <span>محله :</span>

            <div style="width: 220px;margin-left: 260px;padding: 0;" class="select_input mahale">

                <select style="width: 100%;height: 100%;border: none;cursor: pointer;" onchange="mahale(this);">
                </select>
            </div>
        </div>
        <div class="product_adress_name">
            <span>آدرس پستی :</span>
            <textarea style="width: 285px;height: 100px;margin-left: 183px;padding: 7px;cursor: text;"
                      class="select_input" placeholder="ادامه آدرس خود را وارد نمایید....."></textarea>
        </div>
        <div class="product_adress_name">
            <span>کد پستی :</span>
            <input class="product_adress_input" type="text">
        </div>
        <div class="product_adress_name">
            <span>طول جغرافیایی :</span>
            <input class="product_adress_input" type="text">
        </div>
        <div class="product_adress_name">
            <span>عرض جغرافیایی :</span>
            <input class="product_adress_input" type="text">
        </div>
        <div style="margin: 50px 30px 20px 0;float: right;width: 90%;position: relative;bottom: -50px;">
            <div class="btn_green">ثبت اطلاعات و بازگشت</div>
            <div class="btn_gray">انصراف</div>
        </div>
    </div>
</div>

<script>
    $('.dark .product_adress .head .head_close').click(function () {
        $('.dark , .product_adress').fadeOut(200);
    });

    $('.selectpicker').selectpicker();
</script>