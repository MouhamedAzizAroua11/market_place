
<!DOCTYPE html>
<html lang="en">
<?php
    require_once "../app/connection/Connection.php";
    require_once('../app/models/Mark.php');
    require_once('../app/models/Category.php');
    require_once('../app/models/Product.php');

?>

<?php
    //block head
    require_once "template/head.php";
?>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <?php
            require_once "template/spinner.php";
        ?>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
            <?php
            require_once "template/siderbar.php";
            ?>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <?php
            require_once "template/navbar start.php";
            ?>
            <!-- Navbar End -->


            <!-- Sale & Revenue Start -->
                <?php
                if(isset($_GET['page']))
                {
                    switch($_GET['page'])
                    {
                    case "add":
                        require_once "template/product/add.php";
                    break;
                    case "list":
                        require_once "template/product/list.php";
                    break;
                    case "update":
                        require_once "template/product/update.php";
                    break;
                    }
                }
                else
                {
                    echo "Page not found";
                }
                ?>
            <!-- Sale & Revenue End -->


            <!-- Sales Chart Start -->
                <?php
                // require_once "template/salesChartStart.php";
                ?>
            <!-- Sales Chart End -->


            <!-- Recent Sales Start -->
                <?php
                // require_once "template/recentSales.php"; 
                ?>
            <!-- Recent Sales End -->


            <!-- Widgets Start -->
                <?php
                // require_once "template/widegts.php";
                ?>
            <!-- Widgets End -->


            <!-- Footer Start -->  
                <?php
                require_once "template/footer.php";
                ?>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>