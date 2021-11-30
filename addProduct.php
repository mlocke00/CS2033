<?php
    require 'model/ProductDAO.php';

    $method=$_SERVER['REQUEST_METHOD'];
    if($method=='POST'){
        $categoryID=$_POST['categoryID'];
        $productCode=$_POST['productCode'];
        $productName=$_POST['productName'];
        $listPrice=$_POST['listPrice'];
        $product = new Product();
        $product->setCategoryID($categoryID);
        $product->setProductCode($productCode);
        $product->setProductName($productName);
        $product->setListPrice($listPrice);
        $productDAO = new ProductDAO();
        $productDAO->addProduct($product);
        header("Location: index.php");
        exit;
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CS 2033 | Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>

    <!-- Image and text -->
    <nav class="navbar navbar-light bg-light" style="margin-bottom: 20px">
    <a class="navbar-brand" href="listProducts.php">
        <img src="images/lion.png" width="12%" height="12%" class="d-inline-block align-middle" alt="">
        CS 2033 Web Systems DAO Pattern Example Version 2
    </a>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Product List</h5>
                        <p class="card-text">Add a new product to the list.</p>
                        <form action="addProduct.php" method="POST">
                            <label for="categoryID" class="form-label">Category ID</label>
                            <input type="text" class="form-control mb-3" id="categoryID" name="categoryID" placeholder="Enter the Category ID" required>
                            <label for="productCode" class="form-label">Product Code</label>
                            <input type="text" class="form-control mb-3" id="productCode" name="productCode" placeholder="Enter the Product Code" required>
                            <label for="productName" class="form-label">Product Name</label>
                            <input type="text" class="form-control mb-3" id="productName" name="productName" placeholder="Enter the Product Name" required>
                            <label for="listPrice" class="form-label">List Price</label>
                            <input type="text" class="form-control mb-3" id="listPrice" name="listPrice" placeholder="Enter the List Price" required>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>      
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>
