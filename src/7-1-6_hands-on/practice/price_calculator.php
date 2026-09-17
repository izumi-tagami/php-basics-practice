<?php
$product_name = "ノートパソコン";
$price = 80000;
$quantity = 2;
$tax_nate = 0.1;
$subtotal = $price * $quantity;
$tax_amount = $subtotal * $tax_nate;
$total = $subtotal + $tax_amount;

echo "商品名: $product_name";
echo '<br>';
echo '単価: ' . number_format($price) . '円';
echo '<br>';
echo "数量: {$quantity}個";
echo '<br>';
echo '小計: ' . number_format($subtotal) . '円';
echo '<br>';
echo '消費税(10%): ' . number_format($tax_amount) . '円';
echo '<br>';
echo '<strong>合計金額: ' . number_format($total) . '円</strong>';