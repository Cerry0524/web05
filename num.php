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

INSERT INTO `poster` (`id`, `name`, `img`, `sh`, `ani`, `rank`) VALUES (NULL, '', '', '', '', '');
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

UPDATE `movie` SET `rank`='1' WHERE `id`='1';
UPDATE `movie` SET `rank`='4' WHERE `id`='4';
UPDATE `movie` SET `rank`='5' WHERE `id`='5';
UPDATE `movie` SET `rank`='6' WHERE `id`='6';
UPDATE `movie` SET `rank`='7' WHERE `id`='7';
UPDATE `movie` SET `rank`='8' WHERE `id`='8';
UPDATE `movie` SET `rank`='9' WHERE `id`='9';
UPDATE `movie` SET `rank`='10' WHERE `id`='10';
UPDATE `movie` SET `rank`='11' WHERE `id`='11';
UPDATE `movie` SET `rank`='12' WHERE `id`='12';
UPDATE `movie` SET `rank`='13' WHERE `id`='13';
UPDATE `movie` SET `rank`='14' WHERE `id`='14';
UPDATE `movie` SET `rank`='15' WHERE `id`='15';
UPDATE `movie` SET `rank`='16' WHERE `id`='16';
UPDATE `movie` SET `rank`='17' WHERE `id`='17';
UPDATE `movie` SET `rank`='18' WHERE `id`='18';
UPDATE `movie` SET `rank`='19' WHERE `id`='19';
UPDATE `movie` SET `rank`='20' WHERE `id`='20';
UPDATE `movie` SET `rank`='21' WHERE `id`='21';
UPDATE `movie` SET `rank`='22' WHERE `id`='22';
UPDATE `movie` SET `rank`='23' WHERE `id`='23';
UPDATE `movie` SET `rank`='24' WHERE `id`='24';
UPDATE `movie` SET `rank`='25' WHERE `id`='25';















