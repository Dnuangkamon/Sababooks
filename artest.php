<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>article test</title>
</head>
<body>
<?php
    $url2 = "article.json";
    $response2 = file_get_contents($url2); 
    $result2 = json_decode($response2); 
    foreach ($result2 as $article) {
        echo "<img src='$article->cover' width='50%'>";
        echo "<p>ID : $article->id</p>";
        echo "<p>name : $article->name</p>";
        echo "<p>บทความ : $article->description</p><hr style='border-top: 3px solid red;'>";
    }
    
    ?>
</body>
</html>