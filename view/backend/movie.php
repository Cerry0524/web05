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

                <div >
                    <div style="float: right;">
                        <button>編輯電影</button>
                        <button>刪除電影</button>
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