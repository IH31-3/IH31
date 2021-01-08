<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- reset css -->
    <!-- <link rel="stylesheet" type="text/css" href="./css/destyle.css"> -->

    <!-- header css -->
    <!-- <link rel="stylesheet" type="text/css" href="./css/adHeader.css"> -->
    
    <!-- main css -->
    <!-- <link rel="stylesheet" type="text/css" href="./css/main.css"> -->

    <!-- footer css -->
    <!-- <link rel="stylesheet" type="text/css" href="./css/footer.css"> -->
    <title><?= $const["title"] ?></title>
</head>

<body>
<header>
    <div id="header-width">
        <nav>
            <form action="" method="get">
                <button type="submit" value="index" name="page"><img src="<?= $const["path_to_logo_image"] ?>" alt="HALMORTOR" width="300px"></button>
                <button class="mNav" type="submit" value="regist" name="page">登録</button>
                <button class="mNav" type="submit" value="matter" name="page">案件</button>
                <button class="mNav" type="submit" value="change" name="page">変更・管理</button>
                <button id="logOut" type="submit" value="logout" name="page">ログアウト</button>
            </form> 
            <!-- <a href="http://127.0.0.1/IH31/admin/index.php?page=regist">aaa</a>
            <a href="http://127.0.0.1/IH31/admin/index.php?page=matter">bbb</a> -->
        </nav>
    </div>
</header>
<!-- header ここまで-->