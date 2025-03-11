<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Header</title>
        <style>
        *{
            justify-content:center;
        }
        
        body{
            margin-left:0px;
            margin-top:0px;
        }
        
        .header{
            display:flex;
            background-color:black;
            max-width:1500px;
            height:65px;
            margin:auto;
        }
        .headerText{
            margin-top:20px;
            color:white;
            width:auto;
            height:auto;
            font-size:20px;
            font-weight:bold;
            font-family:'Georgia';
        }
        .headerText a{
            text-decoration:none;
            color:inherit;
        }
        .headerText a:hover{
            
        }
        .headerLogo{
            margin-left:460px;
            margin-right:335px;
            transform:scale(0.65);
            width:auto;
            height:auto;
        }
        
        </style>
    </head>
    <body>
        <div class="header">
        <div class="headerText" style="margin-left:48px"><a href="Shop.php">SHOP</a></div>
        <div class="headerLogo"><a href=""><img src="../Image/Wo'eY Logo(White).png" alt="Wo'eY logo(White)"/></a></div>
        <div class="headerText" style="margin-right:70px"><a href="Cart.php">CART</a></div>
        <div class="headerText" style="margin-right:50px"><a href="Account.php">ACCOUNT</a></div>
        </div>        
    </body>
</html>
