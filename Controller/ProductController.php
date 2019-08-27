<?php
include_once '../Model/DBConnect.php';
include_once '../Model/ProductDB.php';
include_once '../Model/Product.php';

class ProductController
{
    public $productDb;

    public function __construct()
    {
        $productDb = new ProductDB();
        $this->productDb = $productDb;
    }

    public function index()
    {
        $product = $this->productDb->display();
        include_once 'View/index.php';
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            include_once "View/add.php";
        }
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_REQUEST['name'];
            $note = $_REQUEST['note'];
            $price = $_REQUEST['price'];
            if (!empty($name) && !empty($note) && !empty($price)) {
                $product = new Product($name, $note, $price);
                $this->productDb->creat($product);
                header('location:index.php');
            } else if (empty($name) || empty($note) || empty($price)) {
                include_once "View/add.php";
            }
        }
    }

    public function update()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            include_once "View/update.php";
        }
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $_REQUEST['id'];
            $name = $_REQUEST['name'];
            $note = $_REQUEST['note'];
            $price = $_REQUEST['price'];

            if (!empty($name)  && !empty($price)) {
                $this->productDb->update($id, $name, $note, $price);
                header('location:index.php');
            } else if (empty($name) || empty($note) || empty($price)) {
                include_once "View/update.php";
            }
        }
    }

    public function delete()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $id = $_REQUEST['id'];
            $this->productDb->delete($id);
            header('location:index.php');
        }
    }

    public function seach()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $name = $_REQUEST['nameProduct'];
            if (!empty($name)) {
                $product = $this->productDb->seach($name);
                include_once 'View/seachProduct.php';
            }
            if (empty($name)) {
                include_once 'View/seachProduct.php';
            }
        }
    }


}
