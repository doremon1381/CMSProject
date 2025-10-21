<?php include("includes/header.php") ?>
        <!-- Responsive navbar-->
         <!-- NAVITAION -->
        <?php include('includes/navigation.php') ?>
        <!-- Page header with logo and tagline-->
        <header class="py-5 bg-light border-bottom mb-4">
            <div class="container">
                <div class="text-center my-5">
                    <h1 class="fw-bolder">Welcome to Blog Home!</h1>
                    <p class="lead mb-0">A Bootstrap 5 starter layout for your next blog homepage</p>
                </div>
            </div>
        </header>
        <!-- Page content-->
        <div class="container">
            <div class="row">
                <?php include("includes/blog.php") ?>
                <!-- Side widgets-->
                <?php include('includes/sidebar.php') ?>
            </div>
        </div>
<?php include("includes/footer.php") ?>