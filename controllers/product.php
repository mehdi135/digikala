<?php

class Product extends Controller{

    public function __construct()
    {
    }
    function index($id=1){

        $productInfo=$this->model->productInfo($id);
        $onlyDigikala=$this->model->onlyDigikala();
        $getGallery=$this->model->getGallery($id);

        $data=['productInfo'=>$productInfo,'onlyDigikala'=>$onlyDigikala,'getGallery'=>$getGallery];
        $this->view('product/index',$data);
    }

    function tab($id,$idcategory){

        $number=$_POST['number'];

        switch($number){
            case 0:
                $naghd=$this->model->naghd($id);
                $data=['naghd'=>$naghd];
                $this->view('product/tab1',$data,1,1);
                return;
            case 1:
                $fanni=$this->model->fanni($idcategory,$id);
                $data=['fanni'=>$fanni];
                $this->view('product/tab2',$data,1,1);
                return;
            case 2:
                $comment_param=$this->model->comment_param($idcategory,$id);
                $comment_param_names=$comment_param[0];
                $comment_param_scores=$comment_param[1];
                $comments=$this->model->getComment($id);
                $data=['comment_param'=>$comment_param[0],'comments'=>$comments,'comment_param_scores'=>$comment_param_scores];
                $this->view('product/tab3',$data,1,1);
                return;
            case 3:
                $getQuestion=$this->model->getQuestion($id);
                $question=$getQuestion[0];
                $answers=$getQuestion[1];
                $data=['question'=>$question,'answer'=>$answers];
                $this->view('product/tab4',$data,1,1);
                return;
            case 4:
                $this->view('product/tab5',[],1,1);
                return;
        }
    }
}

?>