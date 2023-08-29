<?php
include_once "../base.php";
// dd($_GET);
echo $Order->getSession($_GET['movie'],$_GET['date']);