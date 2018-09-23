<?php

class model_index extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    function getSlider1(){

        $sql="SELECT * FROM tbl_slider1";
        $result=$this->doSelect($sql);
        return $result;
    }

    function getSlider2(){
        $sql="SELECT * FROM tbl_product WHERE special=?";
        $values=[1];
        $result=$this->doSelect($sql,$values);
        foreach($result as $key=>$value){
            $price_total=$this->calculateDiscount($value['price'],$value['discount'])[1];
            $result[$key]['price_total']=$price_total;
        }
        $first_row=$result[0];
        $time_special=$first_row['time_special'];

        $options=self::getOption();
        $duration_special=$options['special_time'];

        $time_special=$time_special+$duration_special;
        date_default_timezone_set("Asia/Tehran");
        $date=date('F d,Y H:i:s',$time_special);
        return [$result,$date];
    }

    function onlyDigikala(){
        $sql='SELECT * FROM tbl_product WHERE only_digikala=?';
        $values=[1];
        $result=$this->doSelect($sql,$values);
        return $result;
    }

    function mostViewd(){
        $lim='SELECT * FROM tbl_option WHERE setting="limit_slider"';
        $result1=$this->doSelect($lim,[],1);
        $limit=$result1['value'];

        $sql='SELECT * FROM tbl_product ORDER BY visit DESC limit '.$limit.' ';
        $result=$this->doSelect($sql);
        return$result;
    }

    function lastProduct(){
        $lim='SELECT * FROM tbl_option WHERE setting="limit_slider"';
        $result1=$this->doSelect($lim,[],1);
        $limit=$result1['value'];

        $sql='SELECT * FROM tbl_product ORDER BY id DESC limit '.$limit.' ';
        $result=$this->doSelect($sql);
        return$result;
    }
}

?>