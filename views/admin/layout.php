<style>
    #main {
        width: 1160px;
        margin: 10px auto;
        background: white;
        padding: 20px;
    }

    #main::after{
        content:"";
        clear:both;
        display:block;
    }

    .right{
        width: 200px;
        float: right;
        height: 200px;
        padding: 20px;
    }

    .right ul{
        border: 1px solid gray;
        border-radius: 3px;
        padding: 0;
        margin: 0;
        box-shadow: 1px 2px 3px gray;
    }

    .right ul li{
        padding: 10px;
        border-bottom: 1px dotted #a6a6a6;
    }

    .right ul li:last-child{
        border-bottom: none;
    }

    .right ul li:hover{
        background: #eaeaea;
    }

    .right ul li a{
        display: block;
    }

    table.list{
        width: 100%;
        padding: 10px;
        text-align: center;
    }

    table.list tr:first-child{
        color: #0000d8;
    }

    table.list td{
        padding: 4px;
        border: 1px solid gray;
    }
    .btn_green_small{
        float: left;
        width: 40px;
        height: 25px;
        margin: 5px 0 -3px 10px;
        border: 1px solid gray;
        border-radius: 3px;
        padding: 5px 30px 5px 30px;
        background: green;
        color: white;
        text-align: center;
        box-shadow: 1px 1px 3px grey;
    }
    .btn_red_small{
        float: left;
        width: 40px;
        height: 25px;
        margin: 5px 0 -3px 10px;
        border: 1px solid gray;
        border-radius: 3px;
        padding: 5px 30px 5px 30px;
        background: red;
        color: white;
        text-align: center;
        box-shadow: 1px 1px 3px grey;
    }

    .btn_blue_small{
        float: left;
        border-radius: 3px;
        margin: 10px;
        width: 110px;
        height: 40px;
        font-size: 13pt;
        text-align: center;
        background: blue;
        color: white;
        line-height: 38px;
        box-shadow: 1px 1px 3px grey;
    }
</style>

<div id="main">

    <div class="right">
        <ul>
            <li>
                <a>
                    داشبورد
                </a>
            </li>
            <li>
                <a href="admincategory/index">
                    مدیریت دسته ها
                </a>
            </li>
            <li>
                <a href="adminproduct/index">
                    مدیریت محصولات
                </a>
            </li>
        </ul>
    </div>
    <script>
        function submitform() {
            $('form').submit();
        }
    </script>