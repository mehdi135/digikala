<?php

class model_admincategory extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public $allchildrenids=[];

    function getCategory()
    {
        $sql = "SELECT * FROM tbl_category";
        $result = $this->doSelect($sql);
        return $result;
    }

    function getChildren($idcategory)
    {
        $sql = "SELECT * FROM tbl_category WHERE parent=?";
        $values = [$idcategory];
        $result = $this->doSelect($sql, $values);
        return $result;
    }

    function getParents($idcategory)
    {

        $categoryInfo = $this->categoryInfo($idcategory);
        $parent = $categoryInfo['parent'];
        $all_parent = [];
        while ($parent != 0) {
            $sql = "SELECT * FROM tbl_category WHERE id=?";
            $values = [$parent];
            $result = $this->doSelect($sql, $values, 1);
            array_push($all_parent, $result);
            $parent = $result['parent'];
        }
        return array_reverse($all_parent);
    }

    function categoryInfo($idcategory = 1)
    {
        $sql = "SELECT * FROM tbl_category WHERE id=?";
        $values = [$idcategory];
        $result = $this->doSelect($sql, $values, 1);
        return $result;
    }

    function addCategory($title, $parent, $edit, $categoryId)
    {
        if ($edit == '') {
            $sql = "INSERT INTO tbl_category (title,parent) VALUES (?,?)";
            $stmt = self::$conn->prepare($sql);
            $stmt->bindValue(1, $title);
            $stmt->bindValue(2, $parent);
            $stmt->execute();
        } else {
            $sql = "UPDATE tbl_category SET title=?,parent=? WHERE id=?";
            $stmt = self::$conn->prepare($sql);
            $stmt->bindValue(1, $title);
            $stmt->bindValue(2, $parent);
            $stmt->bindValue(3, $categoryId);
            $stmt->execute();
        }

    }

    function getCilds($catIds){
        $childrenIds=[];
        foreach ($catIds as $catId){
            $children=$this->getChildren($catId);
            foreach ($children as $child){
                array_push($childrenIds,$child['id']);
            }
        }
        return $childrenIds;
    }

    function deleteCategory($ids = [])
    {
        $this->allchildrenids=array_merge($this->allchildrenids,$ids);
        while (sizeof($ids)>0){
            $childrenIds=$this->getCilds($ids);
            $this->allchildrenids=array_merge($this->allchildrenids,$childrenIds);
            $ids=$childrenIds;
        }

        // convert arry for string
        $x=join(',',$this->allchildrenids);
        $sql="DELETE FROM tbl_category WHERE id IN (".$x.")";
        $stmt=self::$conn->prepare($sql);
        $stmt->execute();
    }

}

?>