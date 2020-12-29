<main>
    <hr>
    <h1>メイン画面</h1>
    <hr>
    <h2>GET送受信テスト</h2>
    <form action="" method="get">
        <ul>
            <li>名前：<input type="text" name="name" placeholder="名前を入力"></input></li>
            <li>年齢：<input type="text" name="age" placeholder="年齢を入力"></input></li>
            <li>性別：<input type="text" name="gender" placeholder="性別を入力"></input></li>
            <li>住所：<input type="text" name="address" placeholder="住所を入力"></input></li>
        </ul>
        <button type="submit" name="switch_process_with_button_name">送信</button>
    </form>
    <?php var_dump($hoge) ?>

    <hr>
    <h2>POST送受信テスト</h2>
    <form action="" method="post">
        <ul>
            <li>趣味：<input type="text" name="hobby" placeholder="趣味を入力"></input></li>
            <li>資格：<input type="text" name="qualification" placeholder="資格を入力"></input></li>
            <li>長所：<input type="text" name="advantages" placeholder="長所を入力"></input></li>
            <li>短所：<input type="text" name="disadvantages" placeholder="短所を入力"></input></li>
        </ul>
        <button type="submit" name="switch_process_post_data">送信</button>
    </form>
    <?php var_dump($fuga) ?>
    <hr>
</main>
<!-- main ここまで -->
