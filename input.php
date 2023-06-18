<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>思い出記録</title>
</head>
<body>
    <h1>デート記録フォーム</h1>
    <ul>
    <form action="write.php" method="post">
       <li><label for="start">デートした日時:</label>
        <input type="date" name="day"
         value="2023-06-22"
         min="2000-01-01" max="2040-12-31"></li>
        <li>行った場所: <input type="text" name="place"></li>
        <li>デートコース: <input type="text" name="course"></li>
        <li>食べたもの:<input type="text" name="eat"></li>
        <li>その他の思い出: <input type="text" name="other"></li>
        </ul>
        <input type="submit" value="送信">
        </form>
    
</body>
</html>