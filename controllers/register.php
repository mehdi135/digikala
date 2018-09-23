<?php

class Register extends Controller{

    public function __construct()
    {
    }
    function index(){
        $this->view('register/index');
    }
}

?>