<?php
// １、学生データの定義(配列は $変数=[];、キーも[]で)
$students = [
    ["name" => "田中太郎", "score" => 85],
    ["name" => "佐藤花子", "score" => 92],
    ["name" => "鈴木一郎", "score" => 78],
    ["name" => "高橋美咲", "score" => 65],
    ["name" => "伊藤健太", "score" => 58],
];

// ２、評価判定関数を作成
function getGrade($score) {
    if ($score => 90) {
        return "A";
    } elseif ($score => 80) {
        return "B";
    } elseif ($score => 70) {
        return "C";
    } elseif ($score => 60) {
        return "D";
    } else {
        return "F";
    }
}

// ３、全員の成績をループで処理する

 // 統計情報の初期化 (ループ処理のforsach内で加算していくから)
$pass_count = 0; //合格
$fail_count = 0; //不合格
$totla_score = 0; //合計点数

echo "<h1>成績判定システム</h1>";
echo "<h2>【個別成績】</h2>"

　// 各学生の成績を処理
foreach ($students as $student) { //$studentとゆう新たな変数に代入してループさせる）
    $name = $student["name"];  //  $student["name"]は個別の名前を指している（田中、佐藤、鈴木...）
    $score = $student["score"]; // $student["score"]は個別の点数を指している（85、92、75...）
    $grade = getGrade($score); // getGradeとゆう関数をつけた($score)を$gradeに代入する（90以上はA、80以上はB...）

    // 合格・不合格のカウント
    if ($score >= 60) {
        $pass_count++;
    } else {
        $fail_count++;
    }

    //　合計点の集計
    $totla_score += $score; // 加算演算子+=で田中85～伊藤58まで足し算する

    // 結果の表示
    echo "{"name"}: {$score}点 - 評価{$grade}<br>";
}

// ４、統計情報を表示する
 // 平均点の計算
$average = $total_score / count($students);

echo "<h2>【統計情報】</h2>";
echo "合格者数: {$pass_count}人<br>";
echo "不合格者数: {$fail_count}人<br>";
echo "平均点: " . number_format($average, 1) . "点<br>"; //number_format($average, 1)で小数点以下1桁にフォーマットします。75.6のように表示されます。
?>
