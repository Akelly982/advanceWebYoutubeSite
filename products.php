<!doctype html>
<html lang="en">
<?php
    session_start();
?>
<head>
    <title>Products</title>
    <?php
        include 'modularContent/head/headLocal.php';
    ?>
<script>
    //inline JQuery AJAX
    $(document).ready(function(){
        
        $("#btnProductSpecials").click(function(){
            $.ajax({
                url:"database/getProductSpecials.php",
                method:"POST",
                data : {specials:1},  // just a variable with value 1
                success : function(myResult){
                $("#productsPageViewer").html(myResult);
                }         
            });  
        }); 
        
       $("#btnProductRecentlyAdded").click(function(){
            $.ajax({
                url:"database/getProductsRecentlyAdded.php",
                method:"POST",
                data : {specials:1},  // just a variable with value 1
                success : function(myResult2){
                $("#productsPageViewer").html(myResult2);
                }            
            });  
        }); 
        
        $("#btnCategoryShirts").click(function(){
            $.ajax({
                url:"database/getProductsByCategoryId.php",
                method:"POST",
                data : {myCategoryId:1},  // just a variable with value 1
                success : function(myResult3){
                $("#productsPageViewer").html(myResult3);
                }            
            });  
        }); 
        
        $("#btnCategoryMerchandise").click(function(){
            $.ajax({
                url:"database/getProductsByCategoryId.php",
                method:"POST",
                data : {myCategoryId:5},  // just a variable with value 1
                success : function(myResult2){
                $("#productsPageViewer").html(myResult2);
                }            
            });  
        });
        
        $("#btnCategoryHoodies").click(function(){
            $.ajax({
                url:"database/getProductsByCategoryId.php",
                method:"POST",
                data : {myCategoryId:4},
                success : function(myResult2){
                $("#productsPageViewer").html(myResult2);
                }            
            });  
        });
        
        $("#btnCategoryHats").click(function(){
            $.ajax({
                url:"database/getProductsByCategoryId.php",
                method:"POST",
                data : {myCategoryId:2},
                success : function(myResult2){
                $("#productsPageViewer").html(myResult2);
                }            
            });  
        });
        
//        $("#btnDetailView1").click(function(){
//            $.ajax({
//                url:"database/getProductDetail.php",
//                method:"GET",
//                data : {myid:},
//                success : function(myResult2){
//                $("#productsPageViewer").html(myResult2);
//                }            
//            });  
//        });
        
    });
    
</script>   
</head>
    

<navigation>
    <?php
    include 'modularContent/nav/navSelector.php';
    ?>
</navigation>

<body>
    <!-- spacer here to help clear fixed navbar   -->
    <div class="akBkgPrimary akMinHeight50"></div>
    
    
<!--    search for product top-->
    <div class="container-fluid akBkgPrimary">
        <div class="row">
            <div class="col-sm-4 akPaddingTop10 akPaddingBottom10">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search">
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit">
                        <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-sm-2"></div>
<!--            NOTE: navbar-nav keeps <li> element in row-->
            <div class="col-sm-6 akPaddingTop5 navbar-nav navbar-right row akPaddingLeft20" >
                <li class="akListStyleNone akPadding10"><a href="#" class="akTextLight akTextLightHover" id="btnProductSpecials"> Specials</a></li>
                <li class="akListStyleNone akPadding10"><a href="#" class="akTextLight akTextLightHover" id="btnProductRecentlyAdded"> Recently added</a></li>
<!--                drop down catagory-->
                <li class="dropdown akListStyleNone akPadding10">
                    <a href="#" class="akTextLight akTextLightHover dropdown-toggle akpadding10" data-toggle="dropdown" > Catagories <span class="caret"></span></a>
                    <ul class="dropdown-menu" id="">
                        <?php
                            include'database/getCategories.php'
                        ?>
                    </ul>
                </li>s
            </div>
        </div>
    </div>
   
    
    <!-- spacer   -->
    <div class="akBkgLight akMinHeight50"></div>
    
    <!--  recently added list    -->
    <div class="akBkgLight">
        <div class="container">
            <div class="row">
                <div id="productsPageViewer">
<!--                what you see first -->
                    <?php
                        include "database/getProductsRandom.php";
                    ?>
                </div>
            </div>
        </div>
    </div>
    
    
    <!-- spacer   -->
    <div class="akBkgLight akMinHeight100"></div>
</body>
    
<footer>
    <?php
    include 'modularContent/footer/footer.php';
    ?>
</footer>
    
</html>