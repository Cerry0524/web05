<?php
include_once    "../base.php";
dd($_POST);

if (!empty($_FILES['poster']['tmp_name'])) {
    $_POST['poster'] = $_FILES['poster']['name'];
    move_uploaded_file($_FILES['poster']['tmp_name'], "../upload/" . $_FILES['poster']['name']);
}
if (!empty($_FILES['tri']['tmp_name'])) {
    $_POST['tri'] = $_FILES['tri']['name'];
    move_uploaded_file($_FILES['tri']['tmp_name'], "../upload/" . $_FILES['tri']['name']);
}
$_POST['ondate']=$_POST['year']."-".$_POST['month']."-".$_POST['day'];
unset($_POST['year']);
unset($_POST['month']);
unset($_POST['day']);

$Movie->save($_POST);

to("../backend.php?do=movie");