<main>

    <br>
    <hr>
    <br>

    <h2>案件一覧検索</h2>
    <form action="" method="post">
        <input type="radio" name="radio" value="" checked="checked">全件検索
        <input type="radio" name="radio" value="">キャンセル
        <input type="radio" name="radio" value="">督促中
        <p>案件状況</p>
        <select name="status">
            <option value="">商談中</option>
            <option value="">書類待ち</option>
            <option value="">入金待ち</option>
            <option value="">督促中</option>
            <option value="">入金完了</option>
            <option value="">点検・整備中</option>
            <option value="">点検・整備完了</option>
            <option value="">車両発送</option>
            <option value="">発送完了(納車完了)</option>
        <select>
        <p>担当者名</p>
        <input type="text" placeholder="検索文字列を入力"></input>
        <button type="submit" value="search" name="search">検索する</button>
    </form>

    <br>
    <hr>
    <br>

    <h2>案件情報一覧</h2>
    <form action="" method="post">
        <table border="1">
            <tr>
                <th>担当者名</th>
                <th>顧客名</th>
                <th>車両番号</th>
                <th>車種名</th>
                <th>状態</th>
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
