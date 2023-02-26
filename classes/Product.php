<?php

abstract class Product
{
    public $id;
    public $sku;
    public $name;
    public $price;
    public $height;
    public $width;
    public $length;
    public $weight;

    abstract public function setValues($id, $sku, $name, $price, $size, $height, $width, $length, $weight);
    abstract public function getCard();

}