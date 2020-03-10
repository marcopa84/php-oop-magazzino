<?php
class Ithem
{
    public $bar_code;
    public $brand;
    public $size;
    public $color;
    public $price;
}

class Tshirts extends Ithem
{
    public $long_sleeve;
}
class Pants extends Ithem
{
    public $brand;
    public $size;
    public $color;
    public $height;
}
class Shoes extends Ithem
{
    public $type;
}