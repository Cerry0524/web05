<?php
include_once "DB.php";
class Movie extends DB
{
    function __construct()
    {
        parent::__construct('movie');
    }
    function backend(){
        $view=[
            'rows'=>$this->all(),
        ];
        return $this->view("./view/backend/movie.php",$view);
    }
}