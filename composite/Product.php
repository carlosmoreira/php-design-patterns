<?php

/**
 * Created by PhpStorm.
 * User: CarlosMoreira
 * Date: 9/25/2016
 * Time: 4:36 PM
 */
class Product extends ProductComponent
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $price;

    /**
     * Product constructor.
     * @param string $name
     * @param int $price
     */
    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }


    public function displayProductInfo()
    {
        echo $this->name . " " . $this->price . "<br>";
    }
}