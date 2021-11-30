<?php
    require 'model/ProductDAO.php';

    $productDAO = new ProductDAO();
    $products=$productDAO->getProducts();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CS 2033 | List Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>

    <!-- Image and text -->
    <nav class="navbar navbar-light bg-light" style="margin-bottom: 20px">
    <a class="navbar-brand" href="listProducts.php">
        <img src="images/lion.png" width="12%" height="12%" class="d-inline-block align-middle" alt="">
        CS 2033 Web Systems
    </a>
    </nav>
    <div class="container">
        <div class="col">
        <a class="btn btn-primary" href="addProduct.php" role="button">Add Product</a>
        <table class="table table-bordered table-striped">
                <thead><tr><th>Product ID</th><th>Category ID</th><th>Product Code</th><th>Product Name</th><th>List Price</th></tr></thead>
                <tbody>
                    <?php
                        for($index=0;$index<count($products);$index++){
                            echo "<tr><td><input type=\"radio\" name=\"productID\" value=\"".$products[$index]->getProductID()."\"></td>";
                            echo "<td>".$products[$index]->getCategoryID()."</td>";
                            echo "<td>".$products[$index]->getProductCode()."</td></tr>";
                            echo "<td>".$products[$index]->getProductName()."</td>";
                            echo "<td>".$products[$index]->getListPrice()."</td></tr>";
                        }
                    ?>
                </tbody>        
            </table>  
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>