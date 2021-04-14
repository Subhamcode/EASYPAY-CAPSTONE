<?php include('header.php');
session_start();
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center border rounded bg-light my-5">
                <h1> MY CART</h1>


                </div>

                <div class="col-lg-8">
                <table class="table">
  <thead class="text-center">
    <tr>
      <th scope="col">Serial</th>
      <th scope="col">Item Name</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Total</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody class="text-center">

  <?php
        $total=0;

            if(isset($_SESSION['cart'])){
        foreach($_SESSION['cart']as $key=>$value){
                $sr=$key+1;
            
            echo"

                <tr>

                <td>$sr</td>
                <td>$value[Item_name]</td>
                <td>$value[price]<input type='hidden'class='iprice'value='$value[price]'></td>
                <td><input class='iquantity' onchange='subTotal()'type='number' value='$value[Quantity]'min='0' max='10'</td>
                <td class='itotal'></td>
                <td>
                
                <form action='managecart.php'method='POST'>
                <button  name='remove_item'class='btn btn-sm btn-outline-danger'>REMOVE</button>
                <input type='hidden'name='Item_name'value='$value[Item_name]'>
                
                </form>
                </td>
                </tr>
                ";




        }
    }
        ?>
   
    
  </tbody>
</table>

                </div>

                <div class="col-lg-3">
                   <div class="border bg-light rounded p-4">
                   <h3>GRAND TOTAL:</h3>
                    <h5 class="text-right" id="gtotal"></h5>
                    <br>
                    <form>
                    <a href="razorpay-api/payment.php">CHECKOUT</a>
                    </form>

                   </div>
                </div>



            </div>




        </div>
        <script>
            var gt=0;
            var iprice=document.getElementsByClassName('iprice');
            var iquantity=document.getElementsByClassName('iquantity');
            var itotal=document.getElementsByClassName('itotal');
            var gtotal=document.getElementById('gtotal');
                function subTotal(){
                    gt=0;
                    for(i=0;i<iprice.length;i++){
                         
                           itotal[i].innerText=(iprice[i].value)*(iquantity[i].value); 
                        gt=gt+(iprice[i].value)*(iquantity[i].value); 
                   
                    }
                    gtotal.innerText=gt;
                }
                subTotal();
        </script>
    </body>
    </html>