<style>

    .factor {
        float: right;
        width: 100%;
        vertical-align: middle;
        margin: 20px 0;
    }

    .factor .circle {
        width: 15px;
        height: 15px;
        border-radius: 50%;
        border: 2px solid gray;
        display: inline-block;
        position: relative;
        top: 4px;
        right: 20px;
        cursor: pointer;
        margin-left: 22px;
    }

    .factor .circle.active {
        width: 15px;
        height: 15px;
        border-radius: 50%;
        border: 2px solid blue;
        display: inline-block;
        position: relative;
        top: 4px;
        right: 20px;
        background: blue;
        cursor: pointer;
        margin-left: 22px;
    }

    .factor .circle.active::before {
        content: '';
        width: 5px;
        height: 5px;
        border-radius: 50%;
        display: inline-block;
        position: relative;
        top: -6px;
        right: 5px;
        background: white;
        cursor: pointer;
        margin-left: 22px;
    }
</style>

<div class="factor">
    <span>آیا مایل هستید به همراه این سفارش فاکتور ارسال شود ؟</span>
    <span class="circle"></span>
    <span>بله</span>
    <span class="circle"></span>
    <span>خیر</span>
</div>

<script>
    $('.factor .circle').click(function () {
        $('.factor .circle').removeClass('active');
        $(this).addClass('active');
    });
</script>