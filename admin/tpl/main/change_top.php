<main>

    <br>
    <hr>
    <br>

    <h2>車両情報一覧検索</h2>
    <form action="" method="post">
        <p>※ ハイフン、スペースなしで入力する。</p>
        
        <p>車種名</p>
        <input type="text" placeholder="検索文字列を入力"></input>
        <p>メーカ</p>
        <select name="maker">
            <option value="">レクサス</option>
            <option value="">トヨタ</option>
            <option value="">日産</option>
            <option value="">ホンダ</option>
            <option value="">マツダ</option>
            <option value="">スバル</option>
            <option value="">三菱</option>
            <option value="">スズキ</option>
            <option value="">ダイハツ</option>
            <option value="">いすゞ</option>
            <option value="">光岡自動車</option>
            <option value="">トミーカイラ</option>
            <option value="">ゼロスポーツ</option>
            <option value="">日野自動車</option>
            <option value="">UDトラックス</option>
            <option value="">三菱ふそう</option>
        <select>

        <p>形状</p>
        <select name="form">
            <option value="">セダン</option>
            <option value="">クーペ</option>
            <option value="">コンパクトカー</option>
            <option value="">オープンカー</option>
            <option value="">ミニバン</option>
            <option value="">ワンボックス</option>
            <option value="">ステーションワゴン</option>
            <option value="">SUV</option>
            <option value="">軽自動車</option>
        <select>
        <button type="submit" value="search" name="search">検索する</button>
    </form>

    <br>
    <hr>
    <br>

    <h2>案件情報一覧</h2>
    <form action="" method="post">
        <table border="1">
            <tr>
                <th>車台番号</th>
                <th>メーカ</th>
                <th>車種名</th>
                <th>年式</th>
                <th>形状</th>
                <th>登録日</th>
            </tr>
            <?php for($i=0; $i<10; $i++): ?>
            <tr>
                <td><?= "木原" ?></td>
                <td><?= "松井" ?></td>
                <td><?= "00000001" ?></td>
                <td><?= "フェアレディ" ?></td>
                <td><?= "入金待ち" ?></td>
                <td><button type="submit" value="cancel" name="regist">確認する</button></td>
            <tr>
            <?php endfor ?>
        </table>
    </form>
    <hr>
</main>
<!-- main ここまで -->
