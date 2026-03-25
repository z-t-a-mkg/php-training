<?php
// 条件

// 映画のタイトルと評価（1〜5）を連想配列で3本分作る
// ループを使って以下のように出力する

// 出力イメージ
// タイトル：インターステラー　評価：5
// タイトル：マトリックス　評価：4
// タイトル：インセプション　評価：3


$movie_score = array(
    "movie_1" => array(
        "title" => "インターステラー",
        "score" => 5
    ),
     "movie_2" => array(
        "title" => "マトリックス",
        "score" => 4
    ),
     "movie_3" => array(
        "title" => "インセプション",
        "score" => 3
    ),
);


foreach($movie_score as $k => $v){
    echo "タイトル：" . $v["title"] . " 評価：" . $v["score"] . PHP_EOL;
}

?>