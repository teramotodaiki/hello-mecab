<?php
require 'vendor/autoload.php';

use meCab\meCab;

$mecab = new meCab();
var_dump($mecab->analysis('すもももももももものうち'));
