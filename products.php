<!doctype html>
<html lang="en">
    
<head>
    <title>Products</title>
    <?php
    include 'modularContent/head/headLocal.php';
    ?>
</head>
    

<navigation>
    <?php
    include 'modularContent/nav/navSelector.php';
    ?>
</navigation>

<body>
    <!-- spacer here to help clear fixed navbar   -->
    <div class="akBkgLight akMinHeight50"></div>
    
    
<!--    search for product top-->
    <div class="container-fluid akBkgPrimary">
        <div class="row">
            <div class="col-sm-4 akBkgTest akMinHeight50">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search">
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit">
                        <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-sm-3"></div>
            <div class="col-sm-5 akBkgTest akMinHeight50" >
                <a href="#" class="akPadding10 akTextLightHover">Specials</a>
                <a href="#" class="akPadding10 akTextLightHover">Recently added</a>
                <a href="#" class="akPadding10 akTextLightHover">Catagories</a>
            </div>
        </div>
    </div>
   
    
    <!-- spacer   -->
    <div class="akBkgLight akMinHeight50"></div>
    
    <!--  recently added list    -->
    <?php
        for($i=0; $i<3; $i++){
            include 'modularContent/itemView.php';
        }
    ?>
    
    <!-- spacer   -->
    <div class="akBkgLight akMinHeight100"></div>
</body>
    
<footer>
    <?php
    include 'modularContent/footer/footer.php';
    ?>
</footer>
    
</html>