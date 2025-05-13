<?php

require_once('config/status_codes.php');
// configフォルダ内にあるstatus_codes.phpファイルを１回だけ読み込む
// $answer_codeは正解のcode
$answer_code = htmlspecialchars($_POST['answer_code'], ENT_QUOTES);
// optionは選択したcode
$option = htmlspecialchars($_POST['option'], ENT_QUOTES);
// ユーザーが選択したステータスコード(option)と正解のコード(answer_code)を受け取る
// htmlspecialchars()で、入力データをHTMLエンティティ（特殊文字を表現するためのコード）に変換し、セキュリティを向上させている。（XSS対策）
if (!$option) {
    header('Location: index.php');
}
// ユーザーが何も選択せずに送信した場合、自動でトップページ(index.php)にリダイレクトされる
foreach ($status_codes as $status_code) {
    if ($status_code['code'] === $answer_code) {
        // codeは正解のcodeが入る
        $code = $status_code['code'];
        // descriptionは正解のdescriptionが入る
        $description = $status_code['description'];
    }
}
// 1.1.foreachループを使って$status_codes配列の核要素を順番に取り出す
// 2.取り出した$status_codeのcodeが$answer_codeと一致しているかチェックしてtrueだったら18行～19行目が処理される
// 3.一致していれば、そのcodeとdescriptionの値を変数$codeと$descriptionに代入
// $status_codesの中から、ユーザーが選択したコード(answer_code)に一致するデータを探し、変数($code)と$descriptiponに情報をセットする
$result = $option === $code;
// ユーザーの選択($option)と、正解($code)を比較し、一致すれば$result=true（正解）、違えば$result=false（不正解）になる
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Code Quiz</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/result.css">
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/">
                Status Code Quiz
            </a>
        </div>
    </header>

    <main>
        <div class="result__content">
            <div class="result">
                <?php if ($result): ?>
                    <h2 class="result__text--correct">正解</h2>
                <?php else: ?>
                    <h2 class="result__text--incorrect">不正解</h2>
                <?php endif; ?>
            </div>
            <div class="answer-table">
                <table class="answer-table__inner">
                    <tr class="answer-table__row">
                        <th class="answer-table__header">ステータスコード</th>
                        <td class="answer-table__text">
                            <?php echo $code ?>
                        </td>
                    </tr>
                    <tr class="answer-table__row">
                        <th class="answer-table__header">説明</th>
                        <td class="answer-table__text">
                            <?php echo $description ?>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </main>
</body>

</html>