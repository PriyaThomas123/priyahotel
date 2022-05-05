<?php
    session_start();
    if(isset($_SESSION["deliceSession"]) != session_id()){
       header("Location: front_page.php");
       die();
    }
    else{
?>

<!DOCTYPE html>
<html>
<head>
    
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>CART</title>
    
    <!-- Link external css-->
    <link rel="stylesheet" href="stylesheet/cart.css">

    <!-- font style -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--  Bootstsrap css  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >

</head>
<body> 

<!---------- Header Section starts ------------>
<header class="header">
        
            <a href="#" class="logo"><i class="fa fa-cutlery"></i>Delice</a>
            
            <nav class="navbar">
                <a href="home1.php">Home</a>
                <a href="categories.php">Menu</a>
                <a href="logout.php">Logout</a>
            </nav>
</header>

<center>
<br><br><br><br><br><br>
<!---------- Home Section starts ------------>
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center border rounded bg-light my-5">
            <h1>MY CART</h1>
        </div>

        <div class="col-lg-9">

            <table class="table">
                <thead class="text-center">
                    <tr>
                        <th scope="col">Serial No.</th>
                        <th scope="col">Item Name</th>
                        <th scope="col">Item Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Total</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <?php
                       if(isset($_SESSION['cart']))
                       {
                        foreach($_SESSION['cart'] as $key => $value)
                        {
                            $sr=$key+1;
                            echo"
                                <tr>
                                    <td>$sr</td>
                                    <td>$value[Item_name]</td>
                                    <td>$value[Price]<input type='hidden' class='iprice' value='$value[Price]'></td>
                                    <td><input class='text-center iquantity' onchange='subTotal()' type='number' value='$value[quantity]' min='1' max='10'></td>
                                    <td class='itotal'></td>
                                    <td>
                                        <form action='manage_cart.php' method='POST'>
                                            <button name='Remove_Item' class='btn btn-sm btn-outline-danger'>REMOVE</button>
                                            <input type='hidden' name='Item_Name' value='$value[Item_name]'>
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
            <div class="border bg-light rounded p-4 ">
                <h4>Grand Total:</h4>
                <h5 class="text-right" id="gtotal"></h5> 
                <br>
                <form>
                    <button class="btn btn-primary btn-block">Make purchase</button>
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

    function subTotal()
    {
        gt=0;
        for(i=0;i<iprice.length;i++)
        {
            itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);

            gt=gt+(iprice[i].value)*(iquantity[i].value);

            
        }
        gtotal.innerText=gt;
    }


    subTotal();

</script>

</body>
</html> 


<?php
}
?>