<?php
// 問題②
// 以下の条件でPHPファイルを作成してください。

// 条件

// ・変数に点数（0〜100の数値）を入れる
// 点数によって以下のメッセージを出力する
// 80以上：優秀です
// 60以上80未満：合格です
// 60未満：不合格です



function score_check($score)
{
    if ($score >= 80) {
        echo '優秀です';
    } elseif ($score >= 60) {
        echo '合格です';
    } else {
        echo '不合格です';
    }
}


score_check(100);
