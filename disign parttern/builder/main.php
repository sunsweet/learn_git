<?php
/**
 * User: sunsweet
 * Date: 2015/5/14
 * Time: 16:00
 */
require "product.php";
require "productBuilder.php";

$productConfigs = [
    'size' => "100cm",
    'type' => "type name",
    'color' => "red"
];
$builder = new productBuilder($productConfigs);
$builder->build();
$product = $builder->getProduct();
var_dump($product);