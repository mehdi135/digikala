<?php

class ShowCart extends Controller{

    public function __construct()
    {
    }
    function index(){
        $this->view('showcart/index');
    }

}

?>