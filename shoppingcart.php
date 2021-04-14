<?php  include('header.php');
        session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EASY PAY SHOPPING</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

</head>
<body>


<div class="container">    
    <div class="row text-center py-4">
    <div class="col-md-3 col-sm-6 my-3 my-md-0">
        <form action="managecart.php"method="POST">
            <div class="card shadow">
            <div>
                <img src="./upload/product103.jpg"class="img-fluid card-img-top">
            </div>
            <div class="card-body">
                <h5 class="card-title">ASHIRVAD ATTA</h5>
                    <p class="card-text">Price : Rs.250 </p>
                    <button type="submit"class="btn btn-warning"name="add">Add to cart</button>
                    <input type="hidden"name="Item_name"value="ASHIRVAD ATTA">
                    <input type="hidden"name="price"value="250">

            </div>
            </div>
        </form>
        </div>
        <div class="col-md-3 col-sm-6 my-3 my-md-0">
        <form action="managecart.php"method="POST">
            <div class="card shadow">
            <div>
                <img src="./upload/product104.jpg"class="img-fluid card-img-top">
            </div>
            <div class="card-body">
                <h5 class="card-title">AMUL MILK(FRESH TO YOUR DOOR) PACK OF 6</h5>
                    <p class="card-text">Price : DISCOUNT PRICE:Rs. 450</p>
                    
                    <button type="submit"class="btn btn-warning"name="add">Add to cart</button>
                    <input type="hidden"name="Item_name"value="AMUL MILK">
                    <input type="hidden"name="price"value="450">
            </div>
            </div>
        </form>

        </div>

            <div class="col-md-3 col-sm-6 my-3 my-md-0">
            <form action="managecart.php"method="POST">
            <div class="card shadow">
            <div>
                <img src="./upload/product105.jpg"class="img-fluid card-img-top">
            </div>
            <div class="card-body">
                <h5 class="card-title">TATA CHANA DAAL(THE FRESH BITE)</h5>
                    <p class="card=text">Price : Rs. 300</p>
                    
                    <button type="submit"class="btn btn-warning"name="add">Add to cart</button>
                    <input type="hidden"name="Item_name"value="TATA CHANA DAAL">
                    <input type="hidden"name="price"value="300">
            </div>
            </div>
        </form>

            </div>
<div class="col-md-3 col-sm-6 my-3 my-md-0">
<form action="managecart.php"method="POST">
            <div class="card shadow">
            <div>
                <img src="./upload/product109.jpg"class="img-fluid card-img-top">
            </div>
            <div class="card-body">
                <h5 class="card-title">OUR DAIRY COMBO</h5>
                    <p class="card-text">price : Rs. 800</p>

                    <button type="submit"class="btn btn-warning"name="add">Add to cart</button>
                    <input type="hidden"name="Item_name"value="DAIRY COMBO">
                    <input type="hidden"name="price"value="800">
            </div>
            </div>
        </form>

</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>

</body>
</html>