<?php
/*
public   : class-> y, Subclass-> y, World->y;
protected: class->y, Subclass-> y, World->N;
private  : class->y, Subsclass->N, world->N;
*/

require_once("data/Product.php");

use data\{Product, ProductDummy};

$product = new Product("Apple", 2000);
echo $product->getName() . PHP_EOL;
echo $product->getPrice() . PHP_EOL;

$dummy = new ProductDummy("Mango", 4000);
echo $dummy->info();