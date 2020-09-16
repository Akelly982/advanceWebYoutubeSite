$(document).ready(function(){
    
   
        $("#numQuantity").change(function(e){
            e.preventDefault();
                    
            //get num quantity
            var q = parseFloat($("#numQuantity").val());
            var itemCost = parseFloat($("#itemCost").val());
    
            //quantity * itemCost == result
            var result = q * itemCost;
            
            // empty original text and show result
            $("#showUserQuantity").html(q);
            $("#totalPrice").html(result);
    
        });
            
    
        $("#btnProductSpecials").click(function(event){
            event.preventDefault();   //prevents code from overlapping on run, if Jquery code already running skip
            $.ajax({
                url:"database/getProductSpecials.php",
                method:"POST",
                data : {specials:1},  // just a variable with value 1
                success : function(myResult){
                $("#productsPageViewer").html(myResult);
                }         
            });  
        }); 
        
       $("#btnProductRecentlyAdded").click(function(e){
           e.preventDefault();
            $.ajax({
                url:"database/getProductsRecentlyAdded.php",
                method:"POST",
                data : {specials:1},  // just a variable with value 1
                success : function(myResult2){
                $("#productsPageViewer").html(myResult2);
                }            
            });  
        }); 
        
        $("#btnCategoryShirts").click(function(event){
            event.preventDefault();
            $.ajax({
                url:"database/getProductsByCategoryId.php",
                method:"POST",
                data : {myCategoryId:1},  
                success : function(myResult2){
                $("#productsPageViewer").html(myResult2);
                }            
            })  
        }) 
        
        $("#btnCategoryMerchandise").click(function(event){
            event.preventDefault();
            $.ajax({
                url:"database/getProductsByCategoryId.php",
                method:"POST",
                data : {myCategoryId:5},  
                success : function(myResult2){
                $("#productsPageViewer").html(myResult2);
                }            
            });  
        });
        
        $("#btnCategoryHoodies").click(function(event){
            event.preventDefault();
            $.ajax({
                url:"database/getProductsByCategoryId.php",
                method:"POST",
                data : {myCategoryId:4},
                success : function(myResult2){
                $("#productsPageViewer").html(myResult2);
                }            
            });  
        });
        
        $("#btnCategoryHats").click(function(event){
            event.preventDefault();
            $.ajax({
                url:"database/getProductsByCategoryId.php",
                method:"POST",
                data : {myCategoryId:2},
                success : function(myResult2){
                $("#productsPageViewer").html(myResult2);
                }            
            });  
        });
        
    
        $("#btnSearch").click(function(event){
            event.preventDefault();
            var searchKeyword = $('#searchField').val();
            if (searchKeyword != ""){
              $.ajax({
                url:"database/getProductsBySearch.php",
                method:"POST", 
                data : {searchKey:searchKeyword},
                success : function(myResult){
                $("#productsPageViewer").html(myResult);
                }  
            });  
            }
        });


})
    

