<?php
session_start();
date_default_timezone_set("Asia/Taipei");

include_once __DIR__."/Controller/Movie.php";
include_once __DIR__."/Controller/Order.php";
include_once __DIR__."/Controller/Poster.php";

$Movie=new Movie;
$Order=new Order;
$Poster=new Poster;

function dd($array){
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}
function to($url){
    header("location:".$url);
}