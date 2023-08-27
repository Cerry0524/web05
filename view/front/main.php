<div class="half" style="vertical-align:top;">
    <h1>預告片介紹</h1>
    <div class="rb tab" style="width:95%;">
        <div id="abgne-block-20111227">
            <ul class="lists">
            </ul>
            <ul class="controls">
            </ul>
        </div>
    </div>
</div>
<div class="half">
    <h1>院線片清單</h1>
    <div class="rb tab" style="width:100%;">
        <div class="movies"  style="display:flex;flex-wrap:wrap">
            <?php
            $rows = $Movie->show();
            foreach ($rows as $idx => $row) {
            ?>
                <div class="movie" style="display:flex;flex-wrap:wrap;width:50%">
                    <div style="display:flex;">
                        <div>
                            <img src="./upload/<?= $row['poster']; ?>" style="width:80px;height:100px">
                        </div>
                        <div style="display:flex;flex-direction:column">
                            <div><?= $row['name']; ?></div>
                            <div>
                                分級：
                                <img src="../icon/03C0<?= $row['level']; ?>.png" style="width:20px;height:20px">
                                
                                    <span><?= ($row['level']) == 1 ? "普遍級" : ""; ?></span>
                                    <span><?= ($row['level']) == 2 ? "輔導級" : ""; ?></span>
                                    <span><?= ($row['level']) == 3 ? "保護級" : ""; ?></span>
                                    <span><?= ($row['level']) == 4 ? "限制級" : ""; ?></span>
                              
                            </div>
                            <div>
                                上映日期：<br>
                                <?= $row['ondate']; ?>
                            </div>
                        </div>
                    </div>
                    <div>
                        <button>劇情簡介</button>
                        <button>線上訂票</button>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
        <div class="ct"><?=$Movie->links('main');?> </div>
    </div>
</div>