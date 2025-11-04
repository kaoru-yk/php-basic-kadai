<?php
// 連想配列
$vegetable_data = ['name' => '玉ねぎ', 'price' => '200', 'origin' => '北海道'];

//連想配列$vegetable_dataのキーと値を1つずつ順番に出力する
foreach ($vegetable_data as $key => $value) {
    echo "{$key}：{$value} <br>";
}
?>
