<?php
// 問題⑦
// 以下の条件でPHPファイルを作成してください。
// ファイル名： practice07.php
// 条件

// 映画のタイトル・ジャンル・評価を持つ連想配列を5本分作る
// 以下の2つの関数を作成する

// 評価の平均を計算して返す関数
// 評価が一番高い映画のタイトルを返す関数


// 2つの関数の結果を出力する

// 出力イメージ
// 平均評価：3.6
// 最高評価の映画：インターステラー



$my_movie_score = [
    [
        "title" => "インターステラー",
        "score" => 5,
    ],
    [
        "title" => "this is I",
        "score" => 2,
    ],
    [
        "title" => "インセプション",
        "score" => 4,
    ],
    [
        "title" => "グレイテスト・ショーマン",
        "score" => 5,
    ],
    [
        "title" => "地獄の花園",
        "score" => 2,
    ],
];


function top_score($array)
{
    // scoreの最大値を取得
    $array_counts = array_column($array, "score");
    $max_score = max($array_counts);

    //最大値のscoreのタイトルを取得
    foreach ($array as $k => $v) {
        if ($v["score"] === $max_score) {
             echo  "最高評価の映画：" . $v["title"] . PHP_EOL;
        };
    }
};

function average_score($array)
{

    $array_counts = array_column($array, "score");
    echo '平均評価：' . array_sum($array_counts) / count($array_counts);
};

top_score($my_movie_score);
average_score($my_movie_score);
