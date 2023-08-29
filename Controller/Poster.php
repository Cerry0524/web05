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
            'rows'=>$this->all(" order by `rank` asc"),
        ];
        return $this->view("./view/backend/poster.php",$view);
    }
    function show(){
        return $this->all(['sh'=>1]," order by `rank` asc");
    }
}
