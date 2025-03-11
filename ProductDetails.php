<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Wu'eY Product Details Page</title>
        <style>
            *{
                justify-content:center;
            }
            
            .titleOfPage{
                font-family:'Georgia';
                font-size:28px;
                font-weight:bold;
                margin-top:30px;
                margin-bottom:8px;
                margin-left:28px;
                width:1395px;
                height:40px;
                margin:auto;
                padding-top:30px;
            }
            
            .productDetailsList{
                display:flex;
            }
            
            .productImg{
                background-color:#f3f3f3;
                width:450px;
                height:550px;
                margin-left:-255px;
                margin-top:35px;
                margin-bottom:60px;
                margin-right:100px;
                display:flex;
                align-items:center;
                justify-content:center;
            }
            
            .productDetails{
                margin-top:90px;
                font-size:26px;
                font-family:'Lucida Console';
                justify-content:center;
            }
            
            .productDescTitle{
                color:#7f7f7f;
            }
            
            .productDescContent{
                margin-top:20px;
                margin-left:15px;
            }
            
            .productDescContentIn{
                margin-bottom:-10px;
            }
            
            .addToCartBtn{
                width:500px;
                height:40px;
                font-family:'Lucida Console';
                font-size:25px;
                background-color:white;
            }
            
            .addToCartBtn:hover{
                cursor:pointer;
            }
            
        </style>    
    </head>
    <body>
        <!--Header START-->
        <header><?php include('header.php')?></header>
        <!--Header END-->
        
        <!--Title of Page START-->
        <?php
        $fileName=basename(__FILE__);
        $onlyFileName=strstr($fileName,".",true);//to get the String value before the "."
        $onlyFileName=strtoupper(strstr($onlyFileName,"D",true));//to get the String value before the "."
        ?>
        <div class="titleOfPage"><?php echo$onlyFileName?></div>
        <!--Title of Page END-->
        
        <!--Product Details Content START-->
        <?php 
            $productId="P0001";
            $productImg="Wo'eY Logo(Black).png";
            $productName="Graduation Essentials Tee";
            $productPrice=30.00;
            $productPrice=sprintf("%.2f",$productPrice);//to ensure only 2 decimal place 
            $productDescription=array("Test1","Test1","Test1");
            
        ?>
        <!--Product Details Content END-->
        
        <!--Product Form START-->
        <form method="POST" action="Cart.php" name="addToCart">
        <div class="productDetailsList">
            <div class="productImg"><img src="../Image/<?php echo $productImg?>"/></div>
            
            <div class="productDetails">
                <div class="productName"><?php echo $productName?></div>
                <br/>
                <br/>
                <div class="productPrice"><?php echo 'RM'.' '.$productPrice?></div>
                <br/>
                <br/>
                <div class="productDescription">
                    <div class="productDescTitle">Description:</div>
                    <div class="productDescContent">
                        <?php 
                        for($i=0;$i<3;$i++){
                            echo "<div class='productDescContentIn'>• ".$productDescription[$i]."</div><br/>";
                        }
                        ?>
                    </div>
                </div>
                <br/>
                <br/>
                <div class="addToCart">
                <button class="addToCartBtn" name="addToCartBtn">Add to Cart</button>
                </div>
            </div>
            
        </div>
        </form>
        <!--Product Form END-->
        
        <!--Footer START-->
        <footer><?php include('footer.php')?></footer>
        <!--Footer END-->
    </body>
</html>
