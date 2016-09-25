<?php

/**
 * Created by PhpStorm.
 * User: CarlosMoreira
 * Date: 9/25/2016
 * Time: 4:26 PM
 */
abstract class ProductComponent
{
    public function add(ProductComponent $component ){}
    public function remove(){}
    public function getProductComponent($componentIndex = 0){return null;}
    public function getProductGroupName(){return null;}
    public abstract function displayProductInfo() ;
}