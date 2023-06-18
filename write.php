 <?php

$day = $_POST['day'];
$place = $_POST['place'];
$course = $_POST['course'];
$eat = $_POST['eat'];
$other = $_POST['other'];

$data = $day . $place . $course . $eat . $other . "\n";
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