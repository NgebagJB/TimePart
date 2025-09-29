<!DOCTYPE html>
<html lang="en">
    <?php include "Component/Header.php" ?>
<body>
    <?php include "Component/Navbar.php" ?>
    <?php include "Pages/Home.php" ?>
    <?php include "Component/Footer.php" ?>
    <?php include "Route/Web.php" ?>

    <?php
    
        // $page = isset($_GET['View']) ? $_GET['View'] : 'home'

        // if($page == 'home') include "View/Home.php"
        // else if($page == 'home') include "View/Product.php"
    
    ?>
</body>
</html>