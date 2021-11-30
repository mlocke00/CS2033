<?php
    require 'model/ProductDAO.php'; 

    if(isset($_GET['productID'])){
        $productid=$_GET['productID'];
    }
    
    $method=$_SERVER['REQUEST_METHOD'];
    if($method=='POST'){
        $productid=$_POST['productID'];
        $submit=$_POST['submit'];
        if($submit=='CONFIRM'){
            $productDAO = new ProductDAO();
            $productDAO->deleteProduct($productid);
        }
        header("Location: index.php");
        exit;
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CS 2033 | Confirm Delete</title>
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
                        <h5 class="card-title">Delete Product</h5>
                        <p class="card-text">Confirm Deletion of Product from the list.</p>
                        <form action="delProduct.php" method="POST">
                            <input type="hidden" name="productID" value="<?php echo $productid; ?>">
                            <button class="btn btn-primary" type="submit" name="submit" value="CONFIRM" >Confirm</button> 
                            <button class="btn btn-primary" type="submit" name="submit" value="CANCEL" >Cancel</button>   
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
