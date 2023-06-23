 <?php

$day = $_POST['day'];
$place = $_POST['place'];
$courseA = $_POST['courseA'];
$courseB = $_POST['courseB'];
$courseC = $_POST['courseC'];
$eat = $_POST['eat'];
$other = $_POST['other'];

$data = $day . $place . $courseA . $courseB . $courseC . $eat . $other . "\n";
file_put_contents('data/data.txt', $data, FILE_APPEND)

?> 

<html>


<head>
    <meta charset="UTF-8">
    <title>入力中  </title>
</head>
<body>
    入力したらお待ちください
</body>
</html>