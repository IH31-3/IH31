<main>
    <h2>案件検索画面</h2>
    <form action="" method="get">
        <!-- <input type="hidden" name="page" value="matter_top"> buttonかhiddenかで保持するかも-->
        <ul>
            <li>
                指定なし<input type="radio" name="status" value="0" checked="">
                督促中<input type="radio" name="status" value="1">
                案件詳細<input type="radio" name="status" value="2">
            </li>

            <!-- <li><input type="text" name="text" placeholder="検索文字列を入力"></input>--><button type="submit" name="page" value="matter_top">検索</button></li> 
        </ul>
    </form>
    
    <br>

    <h2>検索結果</h2>
    <ul>
        <?php if(!empty($result[0])):
                foreach($result as $data):?>

            <li><?= "ID:".$data[0] ?></li>
            <li><?= "顧客名:".$data[2] ?></li>
            <li><?= "金額:".$data[5] ?></li>
            <li><?= "状態:".$data[1] ?></li>
            <li><a href="http://127.0.0.1/IH31/admin/index.php?page=matter_detail&id=<?= $data[0] ?>">詳細へ</a></li>

            <br>

        <?php  endforeach;
            endif; ?>
    </ul>
    <a href="http://127.0.0.1/IH31/admin/index.php">トップへ戻る</a>
</main>
<!-- main ここまで -->
