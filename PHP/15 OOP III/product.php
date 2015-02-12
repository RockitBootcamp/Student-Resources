<?php 

// this assumes that the northwind database is available

require_once('db.php');

class Product {
    public $name;
    public $price;
    public $id;

    public function __construct($row) {
        $this->id = $row['ProductID'];
        $this->name = $row['ProductName'];
        $this->price = $row['UnitPrice'];
    }

    public static function getProductByID($id) {
        $db = DB::getDB();
        $row = $db->getByID($id, 'Products', 'ProductID');
        $product = new Product($row);
        return $product;
    }


    public static function getAll() {
        $db = DB::getDB();
        $prod_rows = $db->getAll('Products');
        $products = [];
        foreach($prod_rows as $row) {
            $products[] = new Product($row);
        }
        return $products;
    }
}


































?>
