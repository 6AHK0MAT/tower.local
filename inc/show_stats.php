<?php

// Указываем кодировку, в которой будет получена информация из базы 
@mysqli_query ($db, 'set character_set_results = "utf8"');

// Извлекаем статистику по текущей дате (переменная date попадает сюда из файла count.php, который, в свою очередь, подключается в каждом из 4 обычных файлов)
$res = mysqli_query($db, "SELECT `views`, `hosts` FROM `visits` WHERE `date`='$date'");
$row = mysqli_fetch_assoc($res);

$result = mysqli_query($db,"SELECT SUM(`views`) FROM `visits`");
$row_cnt = mysqli_fetch_row($result);
$sum = $row_cnt[0];

/*
$res = mysqli_query($dbh,'SELECT sum(field) FROM table1');
if (FALSE === $res) die("Select sum failed: ".mysqli_error);
$row = mysqli_fetch_row($res);
$sum = $row[0];
*/

?>
<br>
<br>
<?php
//echo '<p>Уникальных посетителей: ' . $row['hosts'] . '<br />';
echo 'Просмотров сегодня: ' . $row['views'] . '<br />';
echo 'Просмотров всего: ' . $sum . '</p>';
?>