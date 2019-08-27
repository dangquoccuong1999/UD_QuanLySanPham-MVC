<?php
include_once 'Model/DBConnect.php';
include_once 'Model/ProductDB.php';
include_once 'Model/Product.php';
include_once 'Controller/ProductController.php';

$product = new ProductController();
$page = $_REQUEST['action'];

switch ($page) {
    case 'add':
        $product->add();
        break;
    case 'delete':
        $product->delete();
        break;
    case 'update':
        $product->update();
        break;
    case 'seach':
        $product->seach();
    default:
        $product->index();
        break;
}
