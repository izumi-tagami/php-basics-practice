<?php
$score = 100;
echo "初期スコア: {$score}点<br>";

$score += 50; //ボーナスステージクリア
echo "ボーナスステージクリア後: {$score}点<br>";

$score -= 30; //ダメージを受ける
echo "ダメージ後: {$score}点<br>";

$score *= 2; //２倍アイテム
echo "最終スコア: {$score}点";
?>