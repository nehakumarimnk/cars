<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Cars Bookings</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/bootstrap.min.css'; ?>">
</head>

<style>

</style>

<body>
    <div class="navbar navbar-dark bg-dark">
        <div class="container">
            <a hreaf="#" class="navbar-brand">View My Cars Bookings</a>
            <a href='<?php echo base_url() . "index.php/Users/logout"; ?>'>Logout </a>

        </div>

    </div>





    <div class="main_body" style="display: flex;">

        <?php $this->load->view('menu'); ?>

        <div style="margin-left: 2%;">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-6">
                            <h3>Cars' Booking List</h3>
                        </div>

                    </div>
                    <hr>

                </div>

            </div>



            <div class="row">
                <div class="col-md-8">


                    <table class="table table-striped">
                        <tr>
                            <th>C-IDs</th>
                            <th>Name</th>
                            <th>Model</th>
                            <th>Number</th>
                            <th>For Total Days</th>
                            <th>Starting Days</th>
                            <th>Customers' Info</th>






                        </tr>
                        <?php if (!empty($getBookedVehicals)) {
                            $array = json_decode(json_encode($getBookedVehicals), true);
                            // print_r($array);
                            foreach ($array as $car) { ?>
                                <tr>
                                    <td><?php echo $car['id'] ?></td>
                                    <td><?php echo $car['v_name'] ?></td>
                                    <td><?php echo $car['v_model'] ?></td>
                                    <td><?php echo $car['v_number'] ?></td>
                                    <td><?php echo $car['t_days'] ?></td>
                                    <td><?php echo $car['s_day'] ?></td>
                                    <td><?php echo $car['First_Name'];echo "/".$car['username'] ?></td>
                                    

                                    
                            <?php
                                    }
                                
                            } else { ?>

                    <tr>
                        <td colspan="5">Records not found</td>
                    </tr>
                <?php  }   ?>


                    </table>
                    <div class="pagination">
                        <style>
                            .pagination {
                                display: inline-block;
                            }

                            .pagination a {
                                color: black;
                                float: left;
                                padding: 8px 16px;
                                text-decoration: none;
                            }

                            .pagination a.active {
                                background-color: #4CAF50;
                                color: white;
                            }

                            .pagination a:hover:not(.active) {
                                background-color: #ddd;
                            }
                        </style>

                    </div>
                </div>

                </p>

            </div>

        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script>