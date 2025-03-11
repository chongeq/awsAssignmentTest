<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Wu'eY SHOP Page</title>
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

        .products{
            margin-left:5px;
            display:flex;
            flex-wrap:wrap;
            justify-content:center;
            align-items:center;
            max-width:1500px;
            margin:auto;
        }
        
        
        .productImg{
            width:340px;
            height:345px;
            margin:10px;
            margin-top:20px;
            background-color:#f3f3f3;
            
            display:flex;
            justify-content:center;
            align-items:center;
        }
        
        .productImg img{
            
        }
        
        .productImg :hover{
            transform:scale(1.03);
        }
        
        .productText{
            font-family:'Courier New';
            font-weight:bold;
            display:flex;
        }
        
        .productText1{
            border:1px solid black;
            margin:10px;
            width:175px;
            text-align:left;
        }
        
        .productText2{
            border:1px solid black;
            margin:10px;
            width:140px;
            text-align:right;
        }
    </style>
    </head>
    <body>
        <?php
        session_start();
        
        $productId=array("P0001","P0002");
        $productImg=array("Wo'eY Logo(Black)","Wo'eY Logo(White)");
        $productName=array("Graduation Essentials Tee","Funny Graduation Tee");
        $productPrice=array(30.00,20.00);
        $productDescription=[["Test1","Test1"],["Test2","test2"]];
        ?>
        
        <!--Header START-->
        <header><?php include('header.php')?></header>
        <!--Header END-->
        
        <!--Title of Page START-->
        <?php
        $fileName=basename(__FILE__);
        $onlyFileName=strtoupper(strstr($fileName,".",true));//to get the String value before the "."
        ?>
        <div class="titleOfPage"><?php echo$onlyFileName?></div>
        <!--Title of Page END-->
        
        <!--Products START-->
        <div class="products">
            <!--Product Listing START-->
            <?php
            for($i=0;$i<count($productImg);$i++){
                $productPrice[$i]=sprintf("%.2f",$productPrice[$i]);
                
                echo"
                <div class='productList'>
                <div class='productImg'><a href='ProductDetails.php'><img src='../Image/$productImg[$i].png'/><!--Product Img list out by PHP retrieved from DB, only one class needed to remain here--></a></div>
                <div class='productText'>
                    <div class='productText1'>$productName[$i]</div>
                    <div class='productText2'>RM $productPrice[$i]</div>
                </div>
                </div>
                ";
            }
            
            ?>
            <!--Product Listing END-->
        </div>
        <!--Products END-->

        <!--Footer START-->
        <footer>
            <?php include('Footer.php') ?>
        </footer>
        <!--Footer END-->
        
    </body>
</html>
