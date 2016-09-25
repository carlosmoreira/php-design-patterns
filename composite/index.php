<?php

require_once 'ProductComponent.php';
require_once 'ProductGroup.php';
require_once 'Product.php';

//ProductComponent
//ProductGroup
//Product


$allProducts = new ProductGroup("All Products");

$cereal = new ProductGroup("Cereal");
$cereal->add(new Product("Kellogs", 10));
$cereal->add(new Product("Chereos", 14));

$fruit = new ProductGroup("Fruit");
$fruit->add(new Product("Tomatoies", 4));
$fruit->add(new Product("Banannas", 2));

$allProducts->add($cereal);
$allProducts->add($fruit);

$allProducts->add(new ProductGroup("Dairy"));

$allProducts->displayProductInfo();
