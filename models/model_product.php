<?php

class model_product extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    function productInfo($id)
    {

        $sql = "SELECT * FROM tbl_product WHERE id=?";
        $values=[$id];
        $result=$this->doSelect($sql,$values,1);
        $price = $result['price'];
        $discount = $result['discount'];
        $price_calculate = $this->calculateDiscount($price, $discount);
        $result['price_discount'] = $price_calculate[0];
        $result['price_total'] = $price_calculate[1];

        $first_row = $result;
        $time_special = $first_row['time_special'];

        $options=self::getOption();
        $duration_special=$options['special_time'];

        $time_special = $time_special + $duration_special;
        date_default_timezone_set("Asia/Tehran");
        $date = date('F d,Y H:i:s', $time_special);
        $result['date_special']=$date;

        $colors=$result['colors'];
        $colors=explode(',',$colors);
        $colors=array_filter($colors);
        $all_colors=[];
        foreach ($colors as $color){
            $colorInfo=$this->colorInfo($color);
            array_push($all_colors,$colorInfo);
        }
        $result['all_colors']=$all_colors;

        $garranty=$result['garranty'];
        $garranty=explode(',',$garranty);
        $garranty=array_filter($garranty);
        $all_garranty=[];
        foreach ($garranty as $value){
            $garrantyInfo=$this->garrantyInfo($value);
            array_push($all_garranty,$garrantyInfo);
        }
        $result['all_garranty']=$all_garranty;

        return $result;

    }

    function colorInfo($id){
        $sql='SELECT * FROM tbl_color WHERE id=?';
        $values=[$id];
        $result=$this->doSelect($sql,$values,1);
        return $result;
    }

    function garrantyInfo($id){
        $sql='SELECT * FROM tbl_garranty WHERE id=?';
        $values=[$id];
        $result=$this->doSelect($sql,$values,1);
        return $result;
    }

    function onlyDigikala(){
        $sql='SELECT * FROM tbl_product WHERE only_digikala=?';
        $values=[1];
        $result=$this->doSelect($sql,$values);
        return $result;
    }

    function naghd($id){
        $sql="SELECT * FROM tbl_naghd WHERE idproduct=?";
        $values=[$id];
        $result=$this->doSelect($sql,$values);
        return $result;
    }

    function fanni($idcategory,$idproduct){
        $sql="SELECT * FROM tbl_attr WHERE idcategory=? AND parent=0";
        $values=[$idcategory];
        $result=$this->doSelect($sql,$values);
        foreach ($result as $key=>$value){
            $sql2="SELECT tbl_attr.title,tbl_product_attr.value FROM tbl_attr LEFT JOIN tbl_product_attr ON tbl_attr.id=tbl_product_attr.idattr AND tbl_product_attr.idproduct=?  WHERE tbl_attr.parent=? ";
            $values2=[$idproduct,$value['id']];
            $result2=$this->doSelect($sql2,$values2);
            $result[$key]['children']=$result2;
        }
        return $result;
    }

    function comment_param($idcategory,$idproduct){
        $sql="SELECT * FROM tbl_comment_param WHERE idcategory=?";
        $values=[$idcategory];
        $result=$this->doSelect($sql,$values);

        $sq="SELECT * FROM tbl_comment WHERE idproduct=?";
        $val=[$idproduct];
        $res=$this->doSelect($sq,$val);
        $scores_total=[];

        foreach ($res as $row){
            $params_score=$row['param'];
            $params_score=unserialize($params_score);

            foreach ($params_score as $key=>$value){
                $param_id=$key;
                $score=$value;
                if(!isset($scores_total[$param_id])){
                    $scores_total[$param_id]=0;
                }
                $scores_total[$param_id]=$scores_total[$param_id]+$score;
            }
        }
        $total_comments=sizeof($res);
        foreach ($scores_total as $key=>$value){
            $value=$value/$total_comments;
            $scores_total[$key]=$value;
        }

        return [$result,$scores_total];
    }

    function getComment($idproduct){
        $sql="SELECT * FROM tbl_comment WHERE idproduct=?";
        $values=[$idproduct];
        $result=$this->doSelect($sql,$values);
        return $result;
    }

    function getQuestion($idproduct){
        $sql="SELECT * FROM tbl_question WHERE idproduct=? AND parent=0";
        $values=[$idproduct];
        $questions=$this->doSelect($sql,$values);

        $sql="SELECT * FROM tbl_question WHERE parent!=0";
        $all_answers=$this->doSelect($sql);
        $all_answers_new=[];
        foreach ($all_answers as $answer){
            $parent=$answer['parent'];
            $all_answers_new[$parent]=$answer;
        }

//        foreach ($questions as $key=>$row){
//            $sql="SELECT * FROM tbl_question WHERE parent=?";
//            $data=[$row['id']];
//            $answer=$this->doSelect($sql,$data,1);
//            $questions[$key]['answer']=$answer;
//        }

        return [$questions,$all_answers_new];
    }

    function getGallery($idproduct){
        $sql="SELECT * FROM tbl_gallery WHERE idproduct=? ORDER BY threed DESC";
        $values=[$idproduct];
        $result=$this->doSelect($sql,$values);
        return $result;
    }
}

?>