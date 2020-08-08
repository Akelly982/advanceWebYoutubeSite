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
    
    
<!--    search for product fake navbar top-->
    <div class="container-fluid akBkgPrimary">
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
        <div class="col-sm-3"></div>
        <div class="row col-sm-5" style="padding-top:17px">
            <a href="#" class="akPadding10 akTextLightHover">Specials</a>
            <a href="#" class="akPadding10 akTextLightHover">Recently added</a>
            <a href="#" class="akPadding10 akTextLightHover">Catagories</a>
<!--
bootStrap navBar drop down
catagories should be a drop down........
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1
                <span class="caret"></span></a>
                <ul class="dropdown-menu">
                <li><a href="#">Page 1-1</a></li>
                <li><a href="#">Page 1-2</a></li>
                <li><a href="#">Page 1-3</a></li>
                </ul>
            </li>
-->
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