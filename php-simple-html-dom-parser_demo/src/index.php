<?php
require "vendor/autoload.php";

use Sunra\PhpSimple\HtmlDomParser;

$dom = HtmlDomParser::file_get_html("http://bilibili.com");

$elems = $dom->find('title',0)->innertext;

echo "<pre>";
var_dump($elems);