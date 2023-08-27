<?php
include_once "DB.php";
class Movie extends DB
{
    function __construct()
    {
        parent::__construct('movie');
    }
    function backend()
    {
        $view = [
            'rows' => $this->all(),
        ];
        return $this->view("./view/backend/movie.php", $view);
    }
    function show()
    {
        return $this->paginate(4,['sh'=>1]," order by `rank` desc");
    }
}
