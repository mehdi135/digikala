<?php

class Model
{

    public static $conn='';
    public function __construct()
    {
        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $dbname = 'db_digikala';
        $utf = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8');


        self::$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password, $utf);
        //set the PDO error mode to exception
        self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public static function getOption()
    {
        $sql='SELECT * FROM tbl_option';
        $stmt=self::$conn->prepare($sql);
        $stmt->execute();
        $options=$stmt->fetchAll(2);

        $options_new=[];
        foreach ($options as $option){
            $setting=$option['setting'];
            $value=$option['value'];
            $options_new[$setting]=$value;
        }

        return $options_new;
    }

    function calculateDiscount($price,$discount){
        $price_discount=($discount*$price)/100;
        $price_total=$price-$price_discount;
        return[$price_discount,$price_total];
    }

    function doSelect($sql,$values=[],$fetch='',$fetchStyle=PDO::FETCH_ASSOC){

        $stmt=self::$conn->prepare($sql);

        foreach($values as $key=>$value){
            $stmt->bindValue($key+1,$value);
        }
        $stmt->execute();
        if($fetch==''){
            $result=$stmt->fetchAll($fetchStyle);
        }else{
            $result=$stmt->fetch($fetchStyle);
        }
        return $result;
    }

    function doQuery($sql,$values=[]){

        $stmt=self::$conn->prepare($sql);

        foreach($values as $key=>$value){
            $stmt->bindValue($key+1,$value);
        }
        $stmt->execute();
    }

}

?>