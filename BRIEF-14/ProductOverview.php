<?php 
    include "connexion.php";
    $Shop=$_GET["id"];
    $query = "SELECT FROM produit WHERE idProduit = $Shop ";
    $result = mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styleProductOverview.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style-header.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    include "Navbar.php";


    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo' 
            <div id="frame">
                <div id="descreption-quantite-button">
                        <h1>Exfoliating Soap</h1>
                        <div id="product-descreption">
                            <p id="descriprtion">descriprtion kjgukfhlirvjmvze fzemojveriovjeromf ermovjerzvojerov ermovjeromvjkermovkd ermofjeovjzermovjermovj reevmojrvmoervjemo ermovjervmoe</p>                    <div>
                            <div id="quantite-button">
                                <div>
                                    <label for="">SELECT QUANTITY</label>
                                    <div class="container">
                                        <input type="button" class="crementation" onclick="decrementValue()" value="-" class="button_increment" />
                                        <input type="text" name="quantity" value="1"  size="1"  id="quantity" />
                                        <input type="button" class="crementation" onclick="incrementValue()" value="+" class="button_increment"/>
                                    </div>
                                </div>
                                <div id="button-addtocart">
                                    <!-- <button type="submit" name="Proceed">Proceed to Checkout</button> -->
                                    <a href="CartPage.php">ADD TO CART</a>
                                </div>
                            </div>
                        </div>
                    </div>   
                </div>
                <div id="div-img">
                <img class="card-img-top" src="'. 'images/'. $row["image"].'" alt="HTML5 Icon" style="width:100%">
                </div>
            </div>
            ' ;
        }   }
        ?>     
            <script src="script.js"></script>
    <?php 
     include "footer.php";
    ?> 
    <!-- <img src="image/test-photo.jpg" alt="" width="300" height="300"> -->
</body>
</html>
