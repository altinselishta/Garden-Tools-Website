<?php
include_once 'databaseConnectionPr.php';
include_once 'productsPr.php';

class ProductsRepositoryPr {
    private $connection;

    function __construct() {
        $conn = new DatabaseConnectionPr();
        $this->connection = $conn->startConnection();
    }

    function getAllProducts(){
        $conn = $this->connection;

        $sql = "SELECT * FROM products";

        $statement = $conn->query($sql);
        $products = $statement->fetchAll(PDO::FETCH_ASSOC);

        $result = [];
        foreach ($products as $product) {
            $result[] = new ProductsPr($product['ID'], $product['Emri'], $product['Cmimi'], $product['Pershkrimi'], $product['Fotografia']);
        }

        return $result;
    }
}
?>