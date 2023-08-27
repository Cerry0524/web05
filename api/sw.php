<?php
include_once    "../base.php";
// dd($_POST);
$id=explode("-",$_POST['sw']);

$row0=$Poster->find($id[0]);
$row1=$Poster->find($id[1]);
$tmp='';
$tmp=$row0;
$row0['rank']=$row1['rank'];
$row1['rank']=$tmp['rank'];

$Poster->save($row0);
$Poster->save($row1);