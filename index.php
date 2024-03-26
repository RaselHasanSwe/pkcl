<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <?php include 'routes/header.php'?>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">
    <!-- Start Loader -->
    <?php include 'routes/loader.php'?>
    <!-- End Loader -->

    <!-- Start Navbar -->
    <header>

        <?php include 'routes/nav.php'?>
        <!-- Side Nav-->
        <?php include 'routes/nav-mobile.php'?>
    </header>
    <!-- End Navbar -->

    <!-- Start Banner (Removed)-->
    <!-- banner start -->
    <?php include 'routes/sections/banner.php'?>
    <!-- banner end -->
    <!-- End Banner -->


    <!-- sust start -->
    <?php include 'routes/sections/product_features.php'?>
    <?php include 'routes/sections/certification.php'?>
    <?php include 'routes/sections/tech.php'?>
    <?php include 'routes/sections/products.php'?>
    <?php include 'routes/sections/buyers.php'?>
    <?php include 'routes/sections/sust.php'?>

    <!-- Partner  -->
    <?php include 'routes/sections/partner.php'?>
    <!-- End Partner -->
    <!-- Start Comments -->
    <?php include 'routes/sections/contact.php'?>
    <!-- End Comments -->

    <!-- Start Get Started Popup -->
    <?php include 'routes/sections/contact-modal.php'?>

    <!-- End Get Started Popup -->

    <!-- MODALS -->
    <!-- Material Certify -->
    <?php include 'routes/sust-modal/sus6.php'?>



    <!-- Start Footer -->
    <?php include 'routes/footer.php'?>
    <!-- End Footer -->

    <?php include 'routes/footer-js.php'?>
</body>

</html>