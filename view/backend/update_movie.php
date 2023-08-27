<h2 class="ct">新增線院片</h2>
<form action="./api/update_movie.php" method="post" enctype="multipart/form-data">
    <?php
    $row = $Movie->find($_GET['id']);
    ?>
    <div>
        <div>影片資料</div>
        <div>
            <table>
                <tr>
                    <td>片名：</td>
                    <td><input type="text" name="name" value="<?= $row['name']; ?>"></td>
                </tr>
                <tr>
                    <td>分級：</td>
                    <td>
                        <select name="level">
                            <option value="1" <?= ($row['level']) == 1 ? "selected" : ""; ?>>普遍級</option>
                            <option value="2" <?= ($row['level']) == 2 ? "selected" : ""; ?>>輔導級</option>
                            <option value="3" <?= ($row['level']) == 3 ? "selected" : ""; ?>>保護級</option>
                            <option value="4" <?= ($row['level']) == 4 ? "selected" : ""; ?>>限制級</option>
                        </select>
                        （請選擇分級）
                    </td>
                </tr>
                <tr>
                    <td>片長：</td>
                    <td><input type="text" name="length" value="<?= $row['length']; ?>"></td>
                </tr>
                <tr>
                    <td>上映日期：</td>
                    <td>
                        <?php
                        $date = explode("-", $row['ondate']);
                        $year = $date[0];
                        $month = $date[1];
                        $day = $date[2];
                        ?>
                        <select name="year">
                            <option value="2023" <?= ($year == 2023) ? "selected" : ""; ?>>2023</option>
                            <option value="2024" <?= ($year == 2024) ? "selected" : ""; ?>>2024</option>
                            <option value="2025" <?= ($year == 2025) ? "selected" : ""; ?>>2025</option>
                        </select>
                        年
                        <select name="month">
                            <?php for ($i = 1; $i <= 12; $i++) {
                            ?>
                                <option value="$i" <?= ($month == $i) ? "selected" : ""; ?>><?= $i; ?></option>
                            <?php
                            }
                            ?>
                        </select>
                        月
                        <select name="day">
                            <?php for ($i = 1; $i <= 31; $i++) {
                            ?>
                                <option value="$i" <?= ($day == $i) ? "selected" : ""; ?>><?= $i; ?></option>
                            <?php
                            }
                            ?>
                        </select>
                        日
                    </td>
                </tr>
                <tr>
                    <td>發行商：</td>
                    <td><input type="text" name="publish" value="<?= $row['publish']; ?>"></td>
                </tr>
                <tr>
                    <td>導演：</td>
                    <td><input type="text" name="director" value="<?= $row['director']; ?>"></td>
                </tr>
                <tr>
                    <td>預告影片：</td>
                    <td>
                        <input type="file" name="tri" id="">
                    </td>
                </tr>
                <tr>
                    <td>電影海報</td>
                    <td>
                        <input type="file" name="poster" id="">
                    </td>
                </tr>
            </table>
        </div>
        <div>
            劇情簡介
        </div>
        <div>
            <textarea name="intro" style="width:80%l;height:100px"><?= $row['intro']; ?></textarea>
        </div>
    </div>
    <hr>
    <div class="ct">
        <input type="hidden" name="id" value="<?=$_GET['id'];?>">
        <input type="submit" value="新增">
        <input type="reset" value="重置">
    </div>
</form>