<?php
include_once "base.php";

$seat1=[1,2,3];
$seat2=[4,5,6,7];
$seat3=[8,9,10];
$seat4=[11,12];
$seat5=[13,14,15];
$seat6=[16,17];
$seat7=[18,19];
$seat8=[20];

echo serialize($seat1);
echo "<br>";
echo serialize($seat2);
echo "<br>";
echo serialize($seat3);
echo "<br>";
echo serialize($seat4);
echo "<br>";
echo serialize($seat5);
echo "<br>";
echo serialize($seat6);
echo "<br>";
echo serialize($seat7);
echo "<br>";
echo serialize($seat8);
echo "<br>";


a:3:{i:0;i:1;i:1;i:2;i:2;i:3;}
a:4:{i:0;i:4;i:1;i:5;i:2;i:6;i:3;i:7;}
a:3:{i:0;i:8;i:1;i:9;i:2;i:10;}
a:2:{i:0;i:11;i:1;i:12;}
a:3:{i:0;i:13;i:1;i:14;i:2;i:15;}
a:2:{i:0;i:16;i:1;i:17;}
a:2:{i:0;i:18;i:1;i:19;}
a:1:{i:0;i:20;}


INSERT INTO `orders` (`id`, `no`, `date`, `session`, `seats`, `movie`) VALUES (NULL, '202308260001', '20230826', '14:00~16:00', 'a:3:{i:0;i:1;i:1;i:2;i:2;i:3;}', '線院片01');
INSERT INTO `orders` (`id`, `no`, `date`, `session`, `seats`, `movie`) VALUES (NULL, '202308260002', '20230827', '16:00~18:00', 'a:4:{i:0;i:4;i:1;i:5;i:2;i:6;i:3;i:7;}', '線院片02');
INSERT INTO `orders` (`id`, `no`, `date`, `session`, `seats`, `movie`) VALUES (NULL, '202308260003', '20230828', '18:00~20:00', 'a:3:{i:0;i:8;i:1;i:9;i:2;i:10;}', '線院片03');
INSERT INTO `orders` (`id`, `no`, `date`, `session`, `seats`, `movie`) VALUES (NULL, '202308260004', '20230826', '20:00~22:00', 'a:2:{i:0;i:11;i:1;i:12;}', '線院片04');
INSERT INTO `orders` (`id`, `no`, `date`, `session`, `seats`, `movie`) VALUES (NULL, '202308260005', '20230827', '22:00~24:00', 'a:3:{i:0;i:13;i:1;i:14;i:2;i:15;}', '線院片05');
INSERT INTO `orders` (`id`, `no`, `date`, `session`, `seats`, `movie`) VALUES (NULL, '202308260006', '20230828', '14:00~16:00', 'a:2:{i:0;i:16;i:1;i:17;}', '線院片06');
INSERT INTO `orders` (`id`, `no`, `date`, `session`, `seats`, `movie`) VALUES (NULL, '202308260007', '20230826', '16:00~18:00', 'a:2:{i:0;i:18;i:1;i:19;}', '線院片07');
INSERT INTO `orders` (`id`, `no`, `date`, `session`, `seats`, `movie`) VALUES (NULL, '202308260008', '20230827', '18:00~20:00', 'a:1:{i:0;i:20;}', '線院片01');
INSERT INTO `orders` (`id`, `no`, `date`, `session`, `seats`, `movie`) VALUES (NULL, '202308260009', '20230828', '20:00~22:00', 'a:3:{i:0;i:1;i:1;i:2;i:2;i:3;}', '線院片02');
INSERT INTO `orders` (`id`, `no`, `date`, `session`, `seats`, `movie`) VALUES (NULL, '202308260010', '20230826', '22:00~24:00', 'a:4:{i:0;i:4;i:1;i:5;i:2;i:6;i:3;i:7;}', '線院片03');
INSERT INTO `orders` (`id`, `no`, `date`, `session`, `seats`, `movie`) VALUES (NULL, '202308260011', '20230827', '14:00~16:00', 'a:3:{i:0;i:8;i:1;i:9;i:2;i:10;}', '線院片04');
INSERT INTO `orders` (`id`, `no`, `date`, `session`, `seats`, `movie`) VALUES (NULL, '202308260012', '20230828', '16:00~18:00', 'a:2:{i:0;i:11;i:1;i:12;}', '線院片05');
INSERT INTO `orders` (`id`, `no`, `date`, `session`, `seats`, `movie`) VALUES (NULL, '202308260013', '20230826', '18:00~20:00', 'a:3:{i:0;i:13;i:1;i:14;i:2;i:15;}', '線院片06');
INSERT INTO `orders` (`id`, `no`, `date`, `session`, `seats`, `movie`) VALUES (NULL, '202308260014', '20230827', '20:00~22:00', 'a:2:{i:0;i:16;i:1;i:17;}', '線院片07');
INSERT INTO `orders` (`id`, `no`, `date`, `session`, `seats`, `movie`) VALUES (NULL, '202308260015', '20230828', '22:00~24:00', 'a:2:{i:0;i:18;i:1;i:19;}', '線院片01');
INSERT INTO `orders` (`id`, `no`, `date`, `session`, `seats`, `movie`) VALUES (NULL, '202308260016', '20230826', '14:00~16:00', 'a:1:{i:0;i:20;}', '線院片02');
INSERT INTO `orders` (`id`, `no`, `date`, `session`, `seats`, `movie`) VALUES (NULL, '202308260017', '20230827', '16:00~18:00', 'a:2:{i:0;i:16;i:1;i:17;}', '線院片04');
INSERT INTO `orders` (`id`, `no`, `date`, `session`, `seats`, `movie`) VALUES (NULL, '202308260018', '20230828', '18:00~20:00', 'a:2:{i:0;i:18;i:1;i:19;}', '線院片05');
INSERT INTO `orders` (`id`, `no`, `date`, `session`, `seats`, `movie`) VALUES (NULL, '202308260019', '20230826', '20:00~22:00', 'a:1:{i:0;i:20;}', '線院片08');
















