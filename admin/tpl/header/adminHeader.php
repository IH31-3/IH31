<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- reset css -->
    <link rel="stylesheet" type="text/css" href="./css/destyle.css">

    <!-- header css -->
    <link rel="stylesheet" type="text/css" href="./css/adHeader.css">
    
    <!-- main css -->
    <link rel="stylesheet" type="text/css" href="./css/main.css">

    <!-- footer css -->
    <link rel="stylesheet" type="text/css" href="./css/footer.css">
    <title><?= $const["title"] ?></title>
</head>

<body>
<header>
    <div id="header-width">
        <nav>
            <ul>
                <li><a href="http://127.0.0.1/IH31/admin/index.php?page=index_top"><img src="<?= $const["path_to_logo_image"] ?>" alt="HALMORTOR" width="300px"></a></li>
                <li class="mNav"><a href="http://127.0.0.1/IH31/admin/index.php?page=regist_top"><?= $const["regist"] ?></a></li>
                <li class="mNav"><a href="http://127.0.0.1/IH31/admin/index.php?page=matter_top"><?= $const["matter"] ?></a></li>
                <li class="mNav"><a href="http://127.0.0.1/IH31/admin/index.php?page=change_top"><?= $const["change"] ?></a></li>
                <li id="logOut"><a href="http://127.0.0.1/IH31/admin/index.php?page=logout_top"><?= $const["log_out"] ?></a></li>
            </ul>
        </nav>
    </div>
</header>
<!-- header ここまで-->