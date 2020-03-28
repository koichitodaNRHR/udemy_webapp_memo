<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/style.css">

<title>PHP</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">PHP</h1>    
</header>

<main>
<h2>Practice</h2>
<pre>
    <?php

    require('memo_dbconnect.php');

    $statement = $dbh->prepare('UPDATE memos SET memo=? WHERE id=?');
    $statement->execute(array($_POST['memo'], $_POST['id']));

    ?>
</pre>
<p><a href="memo_index.php">戻る</a></p>
</main>
</body>    
</html>