<?php

class Index extends Controller {

    public function __construct()
    {

    }

    function index(){
        $getSlider1=$this->model->getSlider1();
        $only_digikala=$this->model->onlyDigikala();
        $getSlider2=$this->model->getSlider2()[0];
        $date_end=$this->model->getSlider2()[1];
        $mostViewd=$this->model->mostViewd();
        $lastProduct=$this->model->lastProduct();

        $data=[$getSlider1,$getSlider2,$date_end,$only_digikala,$mostViewd,$lastProduct];

        $this->view('index/index',$data);
    }
}

?>