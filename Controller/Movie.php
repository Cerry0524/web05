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
        $today = date("Y-m-d");
        $prevdate = date("Y-m-d", strtotime(" - 2 days"));
        $rows = $this->paginate(4, " where `sh`=1 && `ondate` between '$prevdate' and '$today' order by `rank` desc");
        return  $rows;
    }
    function getMovie(){
        $today = date("Y-m-d");
        $prevdate = date("Y-m-d", strtotime(" - 2 days"));
        $rows = $this->all(" where `sh`=1 && `ondate` between '$prevdate' and '$today'" );
        $html='';
        foreach ($rows as $row) {
            $html .= "<option value='{$row['id']}'>";
            $html .= $row['name'];
            $html .= "</option>";
        }
        return  $html;
    }
    function getDate($movieId){
        $ondate=strtotime($this->find($movieId)['ondate']);
        $today=strtotime(date("Y-m-d"));
        $diff=3-floor(($today-$ondate)/(60*60*24));
        $html='';
        for ($i=0; $i < $diff; $i++) { 
            $date=date("Y-m-d",strtotime("+$i days"));
            $html .= "<option value='$date'>";
            $html .= date("m月d日l",strtotime("+$i days"));
            $html .= "</option>";
        }
        return $html;
    }
}
