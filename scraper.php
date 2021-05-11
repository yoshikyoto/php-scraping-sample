<?php

require_once __DIR__ . '/vendor/autoload.php';

use PHPHtmlParser\Dom;
use PHPHtmlParser\Options;

// 文字コードを設定する。
// 日本語だと文字コードの自動解析がうまく動かないようなので、
// ページに合わせて設定する必要があります
$options = new Options();
$options->setEnforceEncoding('utf8');

// 文字化けする場合は Shift JIS を試してみてください
// $options->setEnforceEncoding('sjis');

// ページを解析
$url = 'https://www.amazon.co.jp/gp/product/B07QNJDLGR';
$dom = new Dom();
$dom->loadFromUrl($url, $options);

// 商品名を取得
$element = $dom->find('#productTitle');
echo $element->text . "\n";
