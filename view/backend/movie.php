<button>新增電影</button>
<hr>
<div class="movies" style="width:80%;margin:auto;overflow:auto;height:400px">
    <?php
    foreach ($rows as $idx => $row) {
    ?>
        <div class="movie" style="display: flex;justify-content:space-between;">
            <div>
                <img src="../upload/<?= $row['poster']; ?>" style="width:90px;height:120px">
            </div>

            <div>
                分級:
                <img src="../icon/03C0<?= $row['level']; ?>.png" style="width:20px;height:20px">
            </div>

            <div style="display: flex;flex-direction:column;width:60%">
                <div style="display: flex;justify-content:space-between;">
                    <div>片名:<?= $row['name']; ?></div>
                    <div>片長:<?= $row['length']; ?></div>
                    <div>上映時間:<?= $row['ondate']; ?></div>
                </div>

                <div style="display: flex;justify-content:space-between;">
                    <div>
                        <button class="sw" data-sw="<?= $row['id']; ?>-<?= $prev; ?>">往上</button>
                        <button class="sw" data-sw="<?= $row['id']; ?>-<?= $next; ?>">往下</button>
                    </div>
                    <div>
                        <button class="sh" data-id="<?= $row['id']; ?>"> <?= ($row['sh'] == 1) ? "顯示" : "隱藏"; ?></button>
                    </div>
                    <div>
                        <button onclick="location.href='?do=update_movie&id=<?= $row['id']; ?>'">編輯電影</button>
                        <button class="del" data-id="<?= $row['id']; ?>"> 刪除電影</button>
                    </div>
                </div>

                <div>
                    <?= $row['intro']; ?>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
</div>
<script>
    $(".sw").click(function() {
        // console.log($(this));
        $.post("./api/sw.php", {
            sw: $(this).data('sw')
        }, (res) => {
            location.reload();
        })
    })
    $(".sh").click(function() {
        // console.log($(this));
        $.post("./api/sh.php", {
            id: $(this).data('id')
        }, (res) => {
            location.reload();
        })
    })
    $(".del").click(function() {
        // console.log($(this));
        $.post("./api/del_movie.php", {
            id: $(this).data('id')
        }, (res) => {
            location.reload();
            // console.log(res);
        })
    })
</script>