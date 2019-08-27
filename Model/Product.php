<?php


class Product
{
    public $id;
    public $name;
    public $note;
    public $price;

    public function __construct( $name, $note, $price)
    {
        $this->name = $name;
        $this->note = $note;
        $this->price = $price;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getNote()
    {
        return $this->note;
    }

    public function getPrice()
    {
        return $this->price;
    }
}