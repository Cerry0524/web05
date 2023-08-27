<?php
include_once    "../base.php";
// dd($_POST);
if (!empty($_FILES['img']['tmp_name'])) {
    move_uploaded_file($_FILES['img']['tmp_name'], "../upload/" . $_FILES['img']['name']);
    $_POST['img'] = $_FILES['img']['name'];
}
$_POST['sh'] = 1;
$_POST['ani'] = rand(1, 3);

$Poster->save($_POST);

to("../backend.php?do=poster");
