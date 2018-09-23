<?php

class Panel extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $this->view('panel/index');
    }
}


?>