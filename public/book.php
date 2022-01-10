<?php

const API_URL ='https://api.openbd.jp/v1/get?isbn=%s'; // コールするAPIのベースとなるURL

$isbn = '978-4-08-882495-6'; // 検索する本のISBN

$url = sprintf(API_URL, $isbn); // 検索するURLを生成 https://openbd.jp/get?isbn=978-4-08-882495-6

$content = file_get_contents($url); // APIからデータを取得する

$json = json_decode($content, true); // JSON形式のデータをPHPの配列に変換

echo "<pre>";
print_r($json);


