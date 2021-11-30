<?php
    require_once 'Product.php';

    class ProductDAO {


        public function getConnection(){
            $mysqli = new mysqli("127.0.0.1", "cs2033user", "Spring-2021", "prodDB");
            if ($mysqli->connect_errno) {
                $mysqli=null;
            }
            return $mysqli;
        }

        public function addProduct($product){
            $connection=$this->getConnection();
            $stmt = $connection->prepare("INSERT INTO products (categoryID, productCode, productName, listPrice) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ss", $product->getCategoryID(), $product->getProductCode(), $product->getProductName(), $product->getListPrice());
            $stmt->execute();
            $stmt->close();
            $connection->close();
        }

        public function deleteProduct($productid){
            $connection=$this->getConnection();
            $stmt = $connection->prepare("DELETE FROM products WHERE productID = ?");
            $stmt->bind_param("i", $productid);
            $stmt->execute();
            $stmt->close();
            $connection->close();
        }

        public function getProducts(){
            $connection=$this->getConnection();
            $stmt = $connection->prepare("SELECT * FROM products;"); 
            $stmt->execute();
            $result = $stmt->get_result();
            while($row = $result->fetch_assoc()){
                $product = new Product();
                $product->load($row);
                $products[]=$product;
            }    
            $stmt->close();
            $connection->close();
            return $products;
        }



    }
?>
