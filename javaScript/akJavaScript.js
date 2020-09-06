$(document).ready(function(){
    
        $("#btnProductSpecials").click(function(event){
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
                success : function(myResult2){
                $("#productsPageViewer").html(myResult2);
                }            
            })  
        }) 
        
        $("#btnCategoryMerchandise").click(function(){
            $.ajax({
                url:"database/getProductsByCategoryId.php",
                method:"POST",
                data : {myCategoryId:1},  // just a variable with value 1
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
        



})
    

