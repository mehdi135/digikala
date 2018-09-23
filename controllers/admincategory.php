<?php

class Admincategory extends Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $category = $this->model->getChildren(0);
        $data = ['category' => $category];
        $this->view('admin/category/index', $data);
    }

    function showchildren($idcategory)
    {
        $categoryInfo = $this->model->categoryInfo($idcategory);
        $children = $this->model->getChildren($idcategory);
        $parent = $this->model->getParents($idcategory);
        $data = ['category' => $children, 'parent' => $parent, 'categoryInfo' => $categoryInfo];

        $this->view('admin/category/index', $data);
    }

    function addcategory($categoryId = 0, $edit = '')
    {
        if (isset($_POST['title'])) {
            $title = $_POST['title'];
            $parent = $_POST['parent'];
            $this->model->addCategory($title, $parent, $edit, $categoryId);
        }
        $category = $this->model->getCategory();
        $categoryInfo = $this->model->categoryInfo($categoryId);
        $data = ['category' => $category, 'categoryId' => $categoryId, 'edit' => $edit, 'categoryInfo' => $categoryInfo];
        $this->view('admin/category/addcategory', $data);
    }

    function deletecategory($parentId=0)
    {
        $ids=$_POST['id'];
        $this->model->deleteCategory($ids);
        header('location:'.URL.'admincategory/showchildren/'.$parentId);
    }

}

?>