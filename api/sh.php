<?php
include_once    "../base.php";
// dd($_POST);
$row=$Movie->find($_POST['id']);
$row['sh']=($row['sh']+1)%2;
echo $Movie->save($row);