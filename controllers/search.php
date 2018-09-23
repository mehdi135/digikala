<?php

class Search extends Controller{
    public function __construct()
    {
    }
    function index(){
        $this->view('search/index');
    }
}

?>