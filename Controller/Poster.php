<?php
include_once "DB.php";
class Poster extends DB
{
    function __construct()
    {
        parent::__construct('poster');
    }
    function backend(){
        $view=[
            'rows'=>$this->all(),
        ];
        return $this->view("./view/backend/poster.php",$view);
    }
}