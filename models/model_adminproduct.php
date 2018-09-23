<?php

class model_adminproduct extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    function getProduct()
    {
        $sql = "SELECT * FROM tbl_product";
        $result = $this->doSelect($sql);
        return $result;
    }

    function getCategory()
    {
        $sql = "SELECT * FROM tbl_category";
        $result = $this->doSelect($sql);
        return $result;
    }

    function getColor()
    {
        $sql = "SELECT * FROM tbl_color";
        $result = $this->doSelect($sql);
        return $result;
    }

    function getGarranty()
    {
        $sql = "SELECT * FROM tbl_garranty";
        $result = $this->doSelect($sql);
        return $result;
    }

    function addproduct($data = [], $productId)
    {
        $title = $data['title'];
        $categoryId = $data['categoryId'];
        $price = $data['price'];
        $introduction = $data['introduction'];
        $discount = $data['discount'];
        $tedad_mojod = $data['tedad_mojod'];
//        $colors=$data['color'];
//        $colors=join(',',$colors);
//        $garranty=$data['garranty'];
//        $garranty=join(',',$garranty);

        if ($productId == '') {
            $sql = "INSERT INTO tbl_product (title,price,cat,introduction,tedad_mojod,discount) VALUES (?,?,?,?,?,?)";
            $value = [$title, $price, $categoryId, $introduction, $tedad_mojod, $discount];
            $this->doQuery($sql, $value);
        } else {
            $sql = "UPDATE tbl_product SET (title=?,price=?,cat=?,introduction=?,tedad_mojod=?,discount=? WHERE id=?)";
            $value = [$title, $price, $categoryId, $introduction, $tedad_mojod, $discount, $productId];
            $this->doQuery($sql, $value);
        }
    }

    function getProductInfo($productId){
        $sql="SELECT * FROM tbl_product WHERE id=?";
        $value=['productId'=>$productId];
        $result=$this->doSelect($sql,$value,1);
        $colors=$result['colors'];
        $garranty=$result['garranty'];
        $colors=explode(',',$colors);
        $garranty=explode(',',$garranty);
        $result['colorsInfo']=[];

        foreach ($colors as $color){
            $sql="SELECT * FROM tbl_color WHERE id=?";
            $colorInfo=$this->doSelect($sql,[$color],1);
            array_push($result['colorsInfo'],$colorInfo);
        }

        return $result;
    }

}

?>