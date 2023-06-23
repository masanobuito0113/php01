<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>思い出記録</title>
</head>
<body>
    <div class="container w-75">
    <h2 class="text-center text-info mx-4 my-4">デート記録フォーム</h2>
    <ul class="my-4">
    <form action="write.php" method="post">
       <li class="my-4"><label for="start">デートした日時:</label>
        <input type="date" name="day"
         value="2023-06-22"
         min="2000-01-01" max="2040-12-31"></li>
        <li class="my-4">メインで行った場所： <input class="w-75" type="text" name="place"></li>
        <li class="my-4">デートコース： <input class="w-10" type="text" name="courseA">→<input class="w-10" type="text" name="courseB">→<input class="w-10" type="text" name="courseC"></li>
        <li class="my-4">食べたもの：<input class="w-75" type="text" name="eat"></li>
        <li class="my-4">その他の思い出： <input class="w-75" type="text" name="other"></li>
        </ul>
        <input type="submit" value="送信">
        </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>