<!doctype html>
<html lang="en">
    
<head>
    <title>Home</title>
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
    <div class="akBkgPrimary akMinHeight25"></div>
    
<!--    Input container -->
    <div class="akLoginBkg akFlexColCenter">
        <div class="akBkgPrimary akBorderRadius10 akPaddingLeft40 akPaddingRight40 akPaddingBottom20">
            <h1 class="akTextAccent text-center akPaddingBottom10">Sign up</h1>
            <form>
            <div class="form-group">
                <label for="" class="akTextLight">Username</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="" class="akTextLight">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="" class="akTextLight">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="akFlexColCenter akPaddingTop10">
                <button type="submit" class="btn akBkgAccent akTextLightHover akBold">Submit</button>
            </div>
            </form>
        </div>
    </div>

</body>
    
<footer>
    <?php
    include 'modularContent/footer/footer.php';
    ?>
</footer>
    
</html>