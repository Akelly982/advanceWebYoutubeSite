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
    include 'modularContent/nav/navEmpty.php';
    ?>
</navigation>

<body>
    <!-- spacer here to help clear fixed navbar   -->
    <div class="akBkgPrimary akMinHeight25"></div>
    
<!--    Input container -->
    <div class="akSignUpBkg akFlexColCenter">
        <div class="akBkgPrimary akBorderRadius10 akPaddingLeft40 akPaddingRight40 akPaddingBottom20">
            <h1 class="akTextAccent text-center akPaddingBottom10">Login</h1>
<!--            The FORM method POST-->
            <form method="post" action="database/loginResult.php">
            <div class="form-group">
                <label class="akTextLight">Email address</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label class="akTextLight">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="akFlexColCenter akPaddingTop10">
                <button type="submit" class="btn akBkgAccent akTextLightHover akBold">Login</button>
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