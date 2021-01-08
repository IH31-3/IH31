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

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawVisualization);

      function drawVisualization() {
        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable([
          ['month', '店頭販売', 'サイト販売', '決済済み'],
          ['2020/07',  144,      782,         430],
          ['2020/08',  165,      938,         522],
          ['2020/09',  135,      1120,        599],
          ['2020/10',  157,      1167,        587],
          ['2020/11',  139,      1110,        615],
          ['2020/12',  136,      1254,        629],
        ]);

        var options = {
          title : '過去半年間の売り上げ',
          vAxis: {title: '千万円'},
          hAxis: {title: ''},
          seriesType: 'bars',
          series: {5: {type: 'line'}}
        };

        var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
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