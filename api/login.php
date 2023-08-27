<?php
include_once "../base.php";
if($_POST['acc']=='admin' && $_POST['pw']=='1234'){
    $_SESSION['user']=1;
}else{
    echo $error="帳號密碼錯誤";
}
to("../backend.php");