<?php

require_once('config/status_codes.php');
// status_codes.phpからステータスコードのデータを読み込む
$random_indexes = array_rand($status_codes, 4);
// $status_codesの中からランダム(array_rand)に４つのインデックスを取得する
foreach ($random_indexes as $index) {
    $options[] = $status_codes[$index];
}
// 取得したインデックスを使い、$options配列に４つのランダムなステータスコードを格納する
// 1.$random_indexes配列には、array_rand($status_codes,4)によってランダムに選ばれた４つのキー（インデックス）が入っている
// 2.foreachを使い、$random_indexesの各インデックスを順番に処理
// 3.$status_codes[$index]で、ステータスコードの詳細データを取得し、それを$options[]に追加
$question = $options[mt_rand(0, 3)];
// ４つの選択肢の中からランダムに１つを選び、それをクイズの問題として設定
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
    <link rel="stylesheet" href="css/index.css">
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
        <div class="quiz__content">
            <div class="question">
                <p class="question__text">Q. 以下の内容に当てはまるステータスコードを選んでください</p>
                <p class="question__text">
                    <?php echo $question['description'] ?>
                    <!-- ランダムに選ばれたステータスコードの説明（$question['description']を表示 -->
                    <!-- ユーザーはこの説明を読んで該当するステータスコードを選ぶ -->
                </p>
            </div>
            <form class="quiz-form" action="result.php" method="post">
                <input type="hidden" name="answer_code" value="<?php echo $question['code'] ?>">
                <div class="quiz-form__item">
                    <?php foreach ($options as $option) : ?>
                        <div class="quiz-form__group">
                            <input class="quiz-form__radio" id="<?php echo $option['code'] ?>" type="radio" name="option" value="<?php echo $option['code'] ?>">
                            <label class="quiz-form__label" for="<?php echo $option['code'] ?>">
                                <?php echo $option['code'] ?>
                            </label>
                        </div>
                    <?php endforeach; ?>
                    <!-- 取得した４つのステータスコード（$options）を選択肢として表示 -->
                    <!-- input type="radio"を使い、ユーザーが選択できるようにしている -->
                </div>
                <div class="quiz-form__button">
                    <button class="quiz-form__button-submit" type="submit">
                        <!-- formタグにaction="result.php"を設定しているため、回答がresult.phpに送信される -->
                        <!-- 選んだステータスコードが正解かどうかはresult.phpで判定される -->
                        回答
                    </button>
                </div>
            </form>
        </div>
    </main>
</body>

</html>