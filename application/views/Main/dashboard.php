<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cars</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/bootstrap.min.css'; ?>">
</head>

<body>
    <div class="navbar navbar-dark bg-dark">
        <div class="container">
            <a href="#" class="navbar-brand">Cars

            </a>

            <a href='<?php echo base_url() . "index.php/Users/logout"; ?>'>Logout </a>

        </div>
    </div>
    <div class="main_body" style="display: flex;justify-content: space-between;">

        <?php $this->load->view('menu'); ?>



        <div class="container" style="padding-top: 20px;">


            <h1> WELCOME, Logged In As: <?php echo $users['First_Name'];

                                        if ($users['role'] == 2) {
                                        ?>
                        <h3>You're a Agency</h3>                
            </h1>

            <hr>
            <h3> <a href='<?php echo base_url() . "index.php/Vehicals/Agency/AddVehicals"; ?>'>Add New Vehicle</a>
            <h3> <a href='<?php echo base_url() . "index.php/Vehicals/Agency/ViewBookings"; ?>'>View booked cars </a>
                <h3> <a href='<?php echo base_url() . "index.php/Vehicals/ViewVehicals/mycars"; ?>'>View My Vechials </a>
                <br><hr>
                <h3> <a href='<?php echo base_url() . "index.php/Vehicals/ViewVehicals"; ?>'>View All Vechials </a>
                <?php } 
                if ($users['role'] == 1) {
                    
                ?>
                        <h3>You're a Customer</h3>         
                        <hr>       

                    <h3> <a href='<?php echo base_url() . "index.php/Vehicals/ViewVehicals"; ?>'>Available cars to rent</a>
                        <h3> <a href='<?php echo base_url() . "index.php/Vehicals/Customers/BookedVehicals/"; ?>'>Your Bookings </a>

                        <?php

                                        }
                        ?>
        </div>

</body>

</html>