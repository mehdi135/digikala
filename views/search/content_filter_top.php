<!----------//////////filter_top\\\\\\\\\\----------->
<style>
    .filter_top {
        padding: 3px;
        margin: 10px 10px 0 0;
        float: right;
    }

    .filter_top > li {
        width: 130px;
        height: 23px;
        display: inline-block;
        font-size: 10pt;
        border: 1px solid #d5d4d4;
        padding-right: 5px;
        border-radius: 5px;
        position: relative;
        cursor: pointer;
    }

    .filter_top > li > img {
        float: left;
        margin-top: 4px;
        margin-left: 10px;
    }

    .filter_top li .options {
        width: 155px;
        height: 205px;
        background: white;
        box-shadow: -4px 4px 3px rgba(0, 0, 0, .2);
        border-right: 1px solid #cec7c7;
        position: absolute;
        top: 22px;
        right: -1px;
        overflow-y: auto;
        overflow-x: hidden;
        display: none;
        z-index: 2;
    }

    .options ul {
        padding: 0;
        margin-top: 20px
    }

    .options ul li {
        padding-right: 10px;
    }

    .square {
        width: 10px;
        height: 10px;
        background: url(public/images/spritefiltercontrols.png) no-repeat -58px -154px;
        display: inline-block;
        vertical-align: middle;
        margin-left: 5px;
    }

    .square_hover {
        background: url(public/images/spritefiltercontrols.png) no-repeat -58px -205px !important;
    }

    .square_selected {
        background: url(public/images/spritefiltercontrols.png) no-repeat -58px -255px !important;
    }

    #filter_selected .filter_selected_span {
        font-size: 8.5pt;
        border: 1px solid #cecece;
        border-radius: 3px;
        margin-right: 10px;
        margin-left: 5px;
        padding: 0 6px 3px 3px;
        display: block;
        float: right;
    }

    #filter_selected .remove_filter {
        width: 6px;
        height: 8px;
        display: inline-block;
        margin-right: 7px;
        background: url(public/images/spritefiltercontrols.png) no-repeat -58px -383px !important;
        cursor: pointer;
    }

</style>

<div id="filter_selected" style="width: 100%;">


</div>

<ul class="filter_top">
    <li><span class="title">تعداد سیمکارت
                </span>
        <img src="public/images/sideArrow.gif" alt="">
        <div class="options">
            <ul>
                <li data-id="0"><span class="square"></span>نمایش همه</li>
                <div class="sidebar_line" style="margin: 8px 5px 8px 8px;"></div>
                <li data-id="1"><span class="square" style="background-position: -58px -154px;"></span>یک</li>
                <li data-id="2"><span class="square" style="background-position: -58px -154px;"></span>دو</li>
                <li data-id="3"><span class="square" style="background-position: -58px -154px;"></span>سه</li>
            </ul>
        </div>
    </li>
    <li><span class="title">حافظه داخلی
                </span>
        <img src="public/images/sideArrow.gif" alt="">
        <div class="options">
            <ul>
                <li data-id="40"><span class="square"></span>نمایش همه</li>
                <div class="sidebar_line" style="margin: 8px 5px 8px 8px;"></div>
                <li data-id="41"><span class="square" style="background-position: -58px -154px;"></span>یک</li>
                <li data-id="42"><span class="square" style="background-position: -58px -154px;"></span>دو</li>
                <li data-id="43"><span class="square" style="background-position: -58px -154px;"></span>سه</li>
            </ul>
        </div>
    </li>
    <li><span class="title">شبکه های ارتباطی
                </span>
        <img src="public/images/sideArrow.gif" alt="">
        <div class="options">
            <ul>
                <li data-id="50"><span class="square"></span>نمایش همه</li>
                <div class="sidebar_line" style="margin: 8px 5px 8px 8px;"></div>
                <li data-id="51"><span class="square" style="background-position: -58px -154px;"></span>یک</li>
                <li data-id="52"><span class="square" style="background-position: -58px -154px;"></span>دو</li>
                <li data-id="53"><span class="square" style="background-position: -58px -154px;"></span>سه</li>
            </ul>
        </div>
    </li>
    <li><span class="title">رزولوشن عکس
                </span>
        <img src="public/images/sideArrow.gif" alt="">
        <div class="options">
            <ul>
                <li data-id="4"><span class="square"></span>نمایش همه</li>
                <div class="sidebar_line" style="margin: 8px 5px 8px 8px;"></div>
                <li data-id="5"><span class="square" style="background-position: -58px -154px;"></span>2
                    مگاپیکسل
                </li>
                <li data-id="6"><span class="square" style="background-position: -58px -154px;"></span>3
                    مگاپیکسل
                </li>
                <li data-id="7"><span class="square" style="background-position: -58px -154px;"></span>5
                    مگاپیکسل
                </li>
                <li data-id="8"><span class="square" style="background-position: -58px -154px;"></span>7
                    مگاپیکسل
                </li>
                <li data-id="9"><span class="square" style="background-position: -58px -154px;"></span>9
                    مگاپیکسل
                </li>
                <li data-id="10"><span class="square" style="background-position: -58px -154px;"></span>13
                    مگاپیکسل
                </li>
                <li data-id="11"><span class="square" style="background-position: -58px -154px;"></span>16
                    مگاپیکسل
                </li>
                <li data-id="12"><span class="square" style="background-position: -58px -154px;"></span>18
                    مگاپیکسل
                </li>
                <li data-id="13"><span class="square" style="background-position: -58px -154px;"></span>20
                    مگاپیکسل
                </li>
                <li data-id="14"><span class="square" style="background-position: -58px -154px;"></span>22
                    مگاپیکسل
                </li>
            </ul>
        </div>
    </li>
    <li><span class="title">بازه صفحه نمایش
                </span>
        <img src="public/images/sideArrow.gif" alt="">
        <div class="options">
            <ul>
                <li data-id="20"><span class="square"></span>نمایش همه</li>
                <div class="sidebar_line" style="margin: 8px 5px 8px 8px;"></div>
                <li data-id="21"><span class="square" style="background-position: -58px -154px;"></span>یک</li>
                <li data-id="22"><span class="square" style="background-position: -58px -154px;"></span>دو</li>
                <li data-id="23"><span class="square" style="background-position: -58px -154px;"></span>سه</li>
            </ul>
        </div>
    </li>
    <li><span class="title">ویژگیهای خاص
                </span>
        <img src="public/images/sideArrow.gif" alt="">
        <div class="options">
            <ul>
                <li data-id="30"><span class="square"></span>نمایش همه</li>
                <div class="sidebar_line" style="margin: 8px 5px 8px 8px;"></div>
                <li data-id="31"><span class="square" style="background-position: -58px -154px;"></span>2
                    مگاپیکسل
                </li>
                <li data-id="32"><span class="square" style="background-position: -58px -154px;"></span>3
                    مگاپیکسل
                </li>
                <li data-id="33"><span class="square" style="background-position: -58px -154px;"></span>5
                    مگاپیکسل
                </li>
                <li data-id="34"><span class="square" style="background-position: -58px -154px;"></span>7
                    مگاپیکسل
                </li>
                <li data-id="35"><span class="square" style="background-position: -58px -154px;"></span>9
                    مگاپیکسل
                </li>
                <li data-id="36"><span class="square" style="background-position: -58px -154px;"></span>13
                    مگاپیکسل
                </li>
                <li data-id="37"><span class="square" style="background-position: -58px -154px;"></span>16
                    مگاپیکسل
                </li>
                <li data-id="38"><span class="square" style="background-position: -58px -154px;"></span>18
                    مگاپیکسل
                </li>
                <li data-id="39"><span class="square" style="background-position: -58px -154px;"></span>20
                    مگاپیکسل
                </li>
                <li data-id="310"><span class="square" style="background-position: -58px -154px;"></span>22
                    مگاپیکسل
                </li>
            </ul>
        </div>
    </li>
</ul>

<div class="sidebar_line" style="float:right;width: 98%;"></div>
<!----------//////////filter_top\\\\\\\\\\----------->
<script>
    var Items = $('.options li');

    Items.hover(function () {
        $('.square', this).addClass('square_hover');
    }, function () {
        $('.square', this).removeClass('square_hover');
    });

    Items.click(function () {
        var title = $(this).parents('li').find('.title').text();
        var item = $(this).text();
        var id = $(this).attr('data-id');
        var filter_selected = $('#filter_selected');
        var filter_selected_span = filter_selected.find('span[data-id=' + id + ']');
        var len = filter_selected_span.length;

        var span = '<span data-id="' + id + '" class="filter_selected_span">' + title + '' + " : " + '' + item + '' +
            '<i class="remove_filter" onclick="removeSelected(this)"></i></span>';
        if (len > 0) {
            filter_selected_span.remove();
        } else {
            filter_selected.append(span);
        }

        $('.square', this).toggleClass('square_selected');

    });

    function removeSelected(tag) {
        var span_tag = $(tag).parents('.filter_selected_span')
        span_tag.remove();
        var id = span_tag.attr('data-id');
        $('.options li[data-id=' + id + '] span').removeClass('square_selected');

    }

    $('.filter_top li').hover(function () {
        $('.options', this).slideDown(200);
    }, function () {
        $('.options', this).slideUp(0);
    });

    $('.input_checkbox').click(function () {
        if ($(this).is(':checked')) {
            $(this).parents('li').find('.check_label').addClass('checked');
        } else {
            $(this).parents('li').find('.check_label').removeClass('checked');
        }
    });

</script>