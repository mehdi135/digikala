<style>
    .order_steps {
        width: 100%;
        height: 150px;
        position: relative;
        top: -15px;
        background: #f1f1f1;
    }

    .nemodar > .dashed {
        margin: 50px 100px 0 0;
        display: inline-block;
        position: relative;
        top: -23px;
    }

    .nemodar .dashed.last {
        margin: 50px 4px 0 0;
        display: inline-block;
        position: relative;
        top: -0px;
    }

    .nemodar > ul {
        display: inline-block;
        padding: 0;
        margin: 0;
    }

    .nemodar .dashed span {
        width: 11px;
        height: 3px;
        margin-left: 3px;
        display: inline-block;
        background: #ccc;
    }

    .nemodar.active .dashed span {
        width: 11px;
        height: 3px;
        margin-left: 3px;
        display: inline-block;
        background: #cfcffd;
    }

    .nemodar .dashed.last span {
        width: 11px;
        height: 3px;
        margin-left: 3px;
        display: inline-block;
        background: #ccc;
    }

    .nemodar.active .dashed.last span {
        width: 11px;
        height: 3px;
        margin-left: 3px;
        display: inline-block;
        background: #cfcffd;
    }

    .nemodar {
        display: inline-block;
    }

    .nemodar.active > .circle {
        display: inline-block;
        width: 28px;
        height: 28px;
        margin: -13px 4px;
        border: none;
        border-radius: 50%;
        background: blue url("public/images/slices.png") no-repeat -667px -116px;
    }

    .nemodar > .circle {
        display: inline-block;
        width: 25px;
        height: 25px;
        margin: -13px 4px;
        border: 2px solid gray;
        border-radius: 50%;
        background: white;
    }

    .nemodar > .line {
        display: inline-block;
        width: 200px;
        height: 3px;
        margin: -2px 4px;
        background: #c7c7c7;
    }

    .nemodar.active > .line {
        display: inline-block;
        width: 200px;
        height: 3px;
        margin: -2px 4px;
        background: #CFCFFE;
    }

    .nemodar > .matn {
        display: block;
        position: relative;
        top: 20px;
        right: -3px;
    }

    .nemodar.active > .matn {
        display: block;
        position: relative;
        top: 20px;
        right: -3px;
        color: blue;
        font-weight: bold;
    }
</style>
<div class="order_steps">
    <ul>
        <li class="nemodar active">
            <div class="dashed">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </li>
        <li class="nemodar">
            <span class="circle"></span>
            <span class="line"></span>
            <span class="matn">ورود به دیجی کالا</span>
        </li>
        <li class="nemodar">
            <span class="circle"></span>
            <span class="line"></span>
            <span class="matn">اطلاعات ارسال سفارش</span>
        </li>
        <li class="nemodar">
            <span class="circle"></span>
            <span class="line"></span>
            <span class="matn">بازبینی سفارش</span>
        </li>
        <li class="nemodar">
            <span class="circle"></span>
            <div class="dashed last">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
            <span class="matn">اطلاعات پرداخت</span>
        </li>
    </ul>
</div>