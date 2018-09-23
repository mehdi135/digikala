<?php

class Adminproduct extends Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $products = $this->model->getProduct();
        $data = ['product' => $products];
        $this->view('admin/product/index', $data);
    }

    function addproduct($productId='')
    {
        if(isset($_POST['title'])){
            $this->model->addproduct($_POST,$productId);
        }

        $colors=$this->model->getColor();
        $category=$this->model->getCategory();
        $garranty=$this->model->getGarranty();
        $productInfo=$this->model->getProductInfo($productId);

        $data=['category'=>$category,'colors'=>$colors,'garranty'=>$garranty,'productInfo'=>$productInfo];
        $this->view('admin/product/addproduct',$data);
    }

}

?>