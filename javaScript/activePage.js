$(document).ready(function(){
    alert("i exist");
    
    $("#productsPg").click(function(event)){
        var currentPage = $('#myPage').val();
        alert(currentPage);
        if (currentPage == "0"){
        $("#homePg").addClass("active");
        }else if (currentPage == "1"){
            $("#productsPg").addClass("active");
        }else if (currentPage == "2"){
            $("#aboutPg").addClass("active");
        }else{
        //nothing
        }
    }
    
}
                  