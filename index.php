<?php
require_once 'ithems.php';

$nikeSqualo = new Shoes();


$nikeSqualo->type = 'sneakers';
$nikeSqualo->bar_code = '080123456789';
$nikeSqualo->brand = 'Nike';
$nikeSqualo->size = 46;
$nikeSqualo->color = 'Black';
$nikeSqualo->price = '138,90';



var_dump($nikeSqualo);