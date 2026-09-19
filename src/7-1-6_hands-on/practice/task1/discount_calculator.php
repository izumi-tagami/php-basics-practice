<?php
//割引計算　要件
$original_price = 5000;
$discount_rate = 0.20;
$discount_amount = $original_price * $discount_rate;
$final_price = $original_price - $discount_amount;

//割引後の金額
    echo " {$final_price}円";
?>