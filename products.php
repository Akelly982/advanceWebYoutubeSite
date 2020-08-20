<?php
session_start();
?>
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
                <li class="akListStyleNone akPadding10"><a href="#" class="akTextLight akTextLightHover"> Specials</a></li>
                <li class="akListStyleNone akPadding10"><a href="#" class="akTextLight akTextLightHover"> Recently added</a></li>
<!--                drop down catagory-->
                <li class="dropdown akListStyleNone akPadding10">
                    <a href="#" class="akTextLight akTextLightHover dropdown-toggle akpadding10" data-toggle="dropdown" > Catagories <span class="caret"></span></a>
                    <ul class="dropdown-menu" id="">
                        <?php
                            include'database/getCategories.php'
                        ?>
                        <!--
                        <li><a href="#" class="akTextLight akTextLightHover">catagory1</a></li>
                        <li><a href="#" class="akTextLight akTextLightHover">catagory2</a></li>
-->
                    </ul>
                </li>s
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