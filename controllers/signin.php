<?php

class Signin extends Controller{

    public function __construct()
    {
    }
    function index(){
        $this->view('signin/index');
    }
}

?>