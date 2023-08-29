 <style>
     .posts {
         width: 220px;
         height: 210px;
         margin: auto;
         padding-bottom: 20px;
     }

     .post {
         width: 100%;
         height: 100%;
         display: none;
     }

     .post img {
         width: 100%;
         height: 100%;
     }

     .post .name {
         text-align: center;
     }

     .controls {
         display: flex;
         justify-content: space-between;
     }

     .icons {
         width: 320px;
         height: 110px;
         overflow: hidden;
         display: flex;

     }

     .icon {
         padding-left: 1px;
         width: 80px;
         height: 110px;
         flex-shrink: 0;
         position: relative;
         padding-bottom: 20px;
     }

     .icon img {
         width: 100%;
         height: 80%;
     }

     .icon .name {
         text-align: center;
     }

     .right,
     .left {
         border-top: 50px solid transparent;
         border-bottom: 50px solid transparent;
     }

     .right {
         border-left: 25px solid yellow;

     }

     .left {
         border-right: 25px solid yellow;

     }
 </style>
 <div class="half" style="vertical-align:top;">
     <h1>預告片介紹</h1>
     <div class="rb tab" style="width:100%;">
         <div class="posts">
             <?php
                $posters = $Poster->all(['sh' => 1]);
                foreach ($posters as $key => $value) {
                ?>
                 <div class="post" data-ani="<?= $value['ani']; ?>">
                     <img src="../upload/<?= $value['img']; ?>" alt="" >
                     <div class="name"><?= $value['name']; ?></div>
                 </div>
             <?php
                }
                ?>
         </div>
         <div class="controls">
             <div class="left"></div>
             <div class="icons">
                 <?php
                    $posters = $Poster->all(['sh' => 1]);
                    foreach ($posters as $key => $value) {
                    ?>
                     <div class="icon" data-ani="<?= $value['ani']; ?>">
                         <img src="../upload/<?= $value['img']; ?>" alt="">
                         <div class="name"><?= $value['name']; ?></div>
                     </div>
                 <?php
                    }
                    ?>
             </div>
             <div class="right"></div>
         </div>
     </div>
 </div>
 <script>
     $(".post").eq(1).show();
     let now = 0;
     let timer = setInterval(() => {
         ani();
     }, 3000);

     function ani(next) {
         now = $(".post:visible").index();
         if (typeof(next) == 'undefined') {
             next = (now + 1 < $(".post").length) ? now + 1 : 0;
         }
         switch ($(".post").eq(next).data('ani')) {
             case 1:
                 $('.post').eq(now).fadeOut(1000, () => {
                     $('.post').eq(next).fadeIn(1000)
                 })
                 break
             case 2:
                 $('.post').eq(now).hide(1000, () => {
                     $('.post').eq(next).show(1000)
                 })
                 break
             case 3:
                 $('.post').eq(now).slideUp(1000, () => {
                     $('.post').eq(next).slideDown(1000)
                 })
                 break
         }
     }
     $(".icon").click(function() {
         let idx = $(this).index()
         ani(idx)
     })
     $(".icons").hover(
         function() {
             clearInterval(timer);
         },
         function() {
             timer = setInterval(() => {
                 ani();
             }, 3000);
         })
     let page = 0
     $(".right,.left").click(function() {
         if ($(this).hasClass('right')) {
             if (page < $(".icon").length - 4) {
                 page++
             }
         } else {
             if (page > 0) {
                 page--
             }
         }
         $('.icon').animate({
             right: page * 80
         })
     })
 </script>

 <div class="half">
     <h1>院線片清單</h1>
     <div class="rb tab" style="width:100%;">
         <div class="movies" style="display:flex;flex-wrap:wrap">
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
         <div class="ct"><?= $Movie->links('main'); ?> </div>
     </div>
 </div>