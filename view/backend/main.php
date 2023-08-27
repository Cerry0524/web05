<?php
if(!isset($_SESSION['user'])){
    include "./view/backend/login.php";
}else{
?>
<div class="rb tab">
    <h2 class="ct">請選擇所需功能</h2>
</div>
<?php
}