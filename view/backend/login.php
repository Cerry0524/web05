<div style="color: :red;">
    <?php
    if (isset($error)) {
        echo $error;
    }
    ?>
</div>

<form action="./api/login.php" method="post">
<table>
    <tr>
        <td>帳號</td>
        <td><input type="text" name="acc"></td>
    </tr>
    <tr>
        <td>密碼</td>
        <td><input type="text" name="pw"></td>
    </tr>
</table>
<div>
    <input type="submit" value="登入">
    <input type="reset" value="重置">
</div>
</form>
