<?php 

// オークション情報をDBから引っ張るのでいったんパラメータにしてます。
$array = (
    "001" => "12/19開催オークション",
    "002" => "12/26開催オークション",
    "003" => "1/2開催オークション",
    "004" => "1/9開催オークション",
)

?>
<main>
    <h2>出品登録</h2>
    <form name="" method="post">
        <table border="1">
            <tr>
                <label>
                    <td>登録する車両番号</td>
                    <td><input type="text" name="vNum" value="" required></td>
                </label>
            </tr>
            <tr>
                <label>
                    <td>オークション情報</td>
                    <td>
                        <select name="auction">
                            <?php foreach($array as $value): ?>
                                <option value=$value["""]>冬開催オークション</option>
                            <?php endforeach; ?>
                        </select>
                    </td>
                </label>
            </tr>
        <table>
    </form>
</main>
<!-- main ここまで -->