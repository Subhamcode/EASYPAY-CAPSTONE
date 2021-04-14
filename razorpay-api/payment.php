

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>payment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <style>
    .submit{
        text-align:center
    }
    .checkout1{
        text-align:center
    }
    .data{
        text-align:center
    }
    .styling{
        color:blue;
        font-size:20px;
        font-weight:bold;
    }
    .purchase{
        color:green;

    }


    </style>
</head>
<body>
<div class="data">
<div class="styling"><h2>CHECKOUT FORM</h2></div><br>
<form action="pay.php"method="post">
      <div class="form-group"id=design>  
       <h4> NAME:</h4> <input type="text" name="customername"class="form-control"><br>
        </div>

        <div class="form-group">  
       <h4> EMAIL:</h4> <input type="email" name="email"class="form-control"><br>
        </div>

        <div class="form-group">  
       <h4> CONTACT:</h4> <input type="text" name="contactno"class="form-control"><br>
        </div>


        <div class="form-group">  
       <h4> PRICE TO PAY:</h4> <input type="text" name="price"class="form-control"><br>
        </div>
        <br>

       <div class="purchase"> <p> <h2>Enter the details of the following items you purchased</h2></p><br></div>

        <div class="form-group">  
       <h4> ASHIRVAD ATTA</h4> <input type="text" name=""palceholder="enter the quantity you purchased"><br>
        </div>

        <div class="form-group">  
       <h4> AMUL MILK</h4> <input type="text" name=""palceholder="enter the quantity you purchased"><br>
        </div>

        <div class="form-group">  
       <h4> TATA CHANA DAAL</h4> <input type="text" name=""palceholder="enter the quantity you purchased"><br>
        </div>

        <div class="form-group">  
       <h4> DAIRY COMBO</h4> <input type="text" name=""palceholder="enter the quantity you purchased"><br>
        </div>
        <br>
       
            <div class="submit">
        <input type="submit"name="submit"class="btn btn-success" value="proceed to pay">
        </div>
        <br>
        <br>
</form>
</div>
</body>
</html>