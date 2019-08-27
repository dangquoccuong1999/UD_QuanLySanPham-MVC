<?php
include_once 'DBConnect.php';
include_once 'Product.php';

class ProductDB
{
    public $conn;

    public function __construct()
    {
        $conn = new DBConnect();
        $this->conn = $conn->connect();
    }

    public function display()
    {
        $sql = "SELECT * FROM `Product`";
        $stmt = $this->conn->query($sql);
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $arr = [];
        foreach ($data as $key) {
            $product = new Product($key['name'], $key['note'], $key['price']);
            $product->id = $key['id'];
            array_push($arr, $product);
        }
        return $arr;
    }

    public function creat($product)
    {
        $sql = "INSERT INTO `Product`(`name`, `note`, `price`) VALUES ('$product->name','$product->note','$product->price')";
        $this->conn->query($sql);
    }

    public function update($id, $name, $note, $price)
    {
        $sql = "UPDATE `Product` SET `name`='$name',`note`='$note',`price`='$price' WHERE id ='$id'";
         $this->conn->query($sql);
    }

    public function delete($id)
    {
        $sql = "DELETE FROM `Product` WHERE id = '$id'";
        $this->conn->query($sql);
    }


    public function seach($name)
    {
        $sql = "SELECT * FROM `Product` WHERE name ='$name'";
        $mysql = $this->conn->query($sql);
        $data = $mysql->fetchAll(PDO::FETCH_ASSOC);
        $arr = [];
        foreach ($data as $key) {
            $product = new Product($key['name'], $key['note'], $key['price']);
            $product->id = $key['id'];
            array_push($arr, $product);
        }
        return $arr;
    }

}
