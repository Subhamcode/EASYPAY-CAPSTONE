<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      
    
    <title>USER FRONT PAGE</title>
    <style>
        .jumbotron{
    background: url(images/grocery.png);
    background-size: cover;
        
}
html{
    height: auto;
    background: radial-gradient(circle,#fff,#ccc);
    
}
#container{
    height: 600px;
    width: 500px;
    margin:30px auto;
    background-color: azure;
    box-shadow: 2px 2px 4px 4px;
    border-radius: 4px;
    position:inherit;
}
#top{
    background-color: skyblue;
    height: 120px;
    position: relative;
}
#ORORBAR{

    height: 100px;
    margin: 20px 160px;
    background-color: grey;
    text-align: center;
}

    

#down{
    background-color: skyblue;
    margin-top:100px;
    height:130px;
    
}
#back{
    margin: 10px 10px;
    height: 3px;
    padding: 20px;
    float: left;
    
    
    
    background-color: skyblue;
}
#cart{
    height: 100px;
    margin: 20px 20px;
    left: 700px;
    float:right;
}

#addproduct{
    margin:80px 170px;
    padding:7px;
}


      </style>
  </head>
  <body>
      <div class="jumbotron">
          
          <div id="container">
        <div id="top">
            <div id="back"><img src="images/LogoMakr-3rFpMj.png"height="50px"width="50px"></div>
            <div id="cart"><img src="images/LogoMakr-7rteBp.png"height="70px"width="70px"></div>
        </div>
            
        <div id="ORORBAR"><img src="images/barcode.jpg"height="100px"width="180px">
        </div>
        
              <div id="addproduct"> <a href="shoppingcart.php"><input class="btn btn-success"type="button"value="ADD PRODUCT"></a><br/></div>
         
        <div id="down"></div>
    </div>
      </div>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <script src="javascript.js"></script>
  </body>
</html>