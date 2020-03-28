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
    // この手法は、セキュリティの部分で問題がある
    // $dbh->exec('INSERT INTO memos SET memo="' . $_POST['memo'] . '", created_at=NOW()');
    $statement = $dbh->prepare('INSERT INTO memos SET memo=?, created_at=NOW()');
    // ?を複数使った場合に、1番目の?、2番目の?とできる
    $statement->bindParam(1, $_POST['memo']);
    $statement->execute();
    // $statement->execute(array($_POST['memo']));

    ?>
</pre>
</main>
</body>    
</html>