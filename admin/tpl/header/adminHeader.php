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
                <button class="mNav" type="submit" value="regist" name="page"><?= $const["regist"] ?></button>
                <button class="mNav" type="submit" value="matter" name="page"><?= $const["matter"] ?></button>
                <button class="mNav" type="submit" value="change" name="page"><?= $const["change"] ?></button>
                <button id="logOut" type="submit" value="logout" name="page"><?= $const["log_out"] ?></button>
            </form>
        </nav>
    </div>
</header>
<!-- header ここまで-->