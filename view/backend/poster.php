<form action="./api/update_poster.php" method="post">
    <div style="height:300px;overflow:auto;width:100%">
        <h2 class="ct">預告片清單</h2>
        <table class="ct" style="width: 80%;margin:auto;">
            <tr>
                <td>預告片海報</td>
                <td>預告片片名</td>
                <td>預告片排序</td>
                <td>操作</td>
            </tr>
            <?php
            foreach ($rows as $idx => $row) {
                $prev = ($idx == 0) ? $row['id'] : $rows[$idx - 1]['id'];
                $next = (array_key_last($rows) == $idx) ? $row['id'] : $rows[$idx + 1]['id'];
            ?>
                <tr>
                    <td>
                        <img src="./upload/<?= $row['img']; ?>" style="width:90px;heigth:120px">
                    </td>
                    <td>
                        <input type="text" name="name[]" value="<?= $row['name']; ?>">
                    </td>
                    <td>
                        <button class="sw" data-sw="<?= $row['id']; ?>-<?= $prev; ?>">往上</button>
                        <button class="sw" data-sw="<?= $row['id']; ?>-<?= $next; ?>">往下</button>
                    </td>
                    <td>
                        <select name="ani[]">
                            <option value="1" <?=($row['ani']==1)?"selected":"";?>>淡入</option>
                            <option value="2" <?=($row['ani']==2)?"selected":"";?>>縮放</option>
                            <option value="3" <?=($row['ani']==3)?"selected":"";?>>滑出</option>
                        </select>
                        <input type="checkbox" name="sh[]" value="<?= $row['id']; ?>" <?= ($row['sh'] == 1) ? "checked" : ""; ?>>顯示
                        <input type="checkbox" name="del[]" value="<?= $row['id']; ?>">刪除
                        <input type="hidden" name="id[]" value="<?= $row['id']; ?>">
                    </td>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>
    <div class="ct">
        <input type="submit" value="編輯確定">
        <input type="reset" value="重置">
    </div>
</form>
<script>
    $(".sw").click(function() {
        // console.log($(this));
        $.post("./api/sw.php", {
            sw: $(this).data('sw')
        }, (res) => {
            location.reload();
        })
    })
</script>
<hr>
<form action="./api/add_poster.php" method="post" enctype="multipart/form-data">
    <h2 class="ct">新增預告片海報</h2>
    <div style="display:flex;margin:auto;width:80%">
        <label>預告片海報</label>
        <input type="file" name="img">
        <label>預告片片名</label>
        <input type="text" name="name">
    </div>
    <br>
    <div class="ct">
        <input type="submit" value="新增">
        <input type="reset" value="重置">
    </div>
</form>