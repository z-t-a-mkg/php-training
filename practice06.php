<?php
// 問題⑥
// 以下の条件でPHPファイルを作成してください。
// ファイル名： practice06.php
// 条件

// 映画のタイトルと評価を受け取る関数を作る
// 評価（1〜5）に応じて星（★）を返す
// 関数を使って3本分出力する

// 出力イメージ
// インターステラー：★★★★★
// マトリックス：★★★★
// インセプション：★★★



// function movie_score($name, $score)
// {
//     $star = '★';
//     if ($score === 2) {
//         $star = '★★';
//         echo $name . ':' . $star;
//     } else if ($score === 3) {
//         $star = '★★★';
//         echo $name . ':' . $star;
//     } else if ($score === 4) {
//         $star = '★★★★';
//         echo $name . ':' . $star;
//     } else if ($score === 5) {
//         $star = '★★★★★';
//         echo $name . ':' . $star;
//     } else {
//         echo $name . ':' . $star;
//     }
// }


function movie_score($name, $score)
{
echo $name .':'. str_repeat('★',$score).PHP_EOL;
};





movie_score("インターステラー",5);
movie_score("マトリックス",4);
movie_score("インセプション",3);