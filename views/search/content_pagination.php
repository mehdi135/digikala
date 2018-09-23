<!----------//////////PAGINATION\\\\\\\\\\----------->
<style>
    #pagination {
        float: right;
        width: 100%;
    }

    #prev {
        font-size: 10pt;
        float: left;
        width: 60px;
        height: 20px;
        border: 1px solid #a9a2a2;
        border-radius: 4px;
        text-align: center;
        box-shadow: 1px 2px 2px rgba(0, 0, 0, .2);
    }

    #next {
        font-size: 10pt;
        margin-right: 5px;
        float: left;
        width: 60px;
        height: 20px;
        border: 1px solid #a9a2a2;
        border-radius: 4px;
        text-align: center;
        box-shadow: 1px 2px 2px rgba(0, 0, 0, .2);
        background: -moz-linear-gradient(top, #fff 0%, #efefef 100%);
        background: -webkit-linear-gradient(top, #fff 0%, #efefef 100%);
        background: -o-linear-gradient(top, #fff 0%, #efefef 100%);
        background: -ms-linear-gradient(top, #fff 0%, #efefef 100%);
    }

    #pagination ul {
        padding: 0;
        margin: 0;
        float: left;

    }


</style>

<div id="pagination">
    <span id="next">صفحه بعد</span>
    <ul>
        <li>1</li>
        <li>2</li>
    </ul>
    <span id="prev">صفحه قبل</span>
</div>
<!----------//////////PAGINATION\\\\\\\\\\----------->