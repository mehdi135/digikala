<?php

class Controller{

    function __construct()
    {

    }

    function view($viewUrl,$data=[],$noIncloudHeader='',$noIncloudFooter=''){
        if($noIncloudHeader==''){
            require ('header.php');
        }
        require ('views/'.$viewUrl.'.php');
        if ($noIncloudFooter==''){
            require ('footer.php');
        }
    }

    function model($modelUrl){
        require ('models/model_'.$modelUrl.'.php');
        $className='model_'.$modelUrl;
        $this->model=new $className;
    }
}

?>