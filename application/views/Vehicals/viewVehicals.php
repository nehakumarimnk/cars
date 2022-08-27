<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Cars</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/bootstrap.min.css'; ?>">
</head>

<style>

</style>

<body>
    <div class="navbar navbar-dark bg-dark">
        <div class="container">
            <a hreaf="#" class="navbar-brand">View All Cars</a>
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
                            <h3>Cars List</h3>
                        </div>

                    </div>
                    <hr>

                </div>

            </div>


            <form method="post" name="createUsers" action="<?php echo base_url() . 'index.php/school_pdf/selectStudent'; ?>" enctype="multipart/form-data">


            </form>


            <div class="row">
                <div class="col-md-8">


                    <table class="table table-striped">
                        <tr>
                            <th>C-IDs</th>
                            <th>Name</th>
                            <th>Model</th>
                            <th>Number</th>
                            <th>Seating Capacity</th>
                            <th>Rent/Day</th>





                        </tr>
                        <?php if (!empty($getVehicals)) {
                            $array = json_decode(json_encode($getVehicals), true);
                            // print_r($array);
                            foreach ($array as $car) { ?>
                                <tr>
                                    <td><?php echo $car['id'] ?></td>
                                    <td><?php echo $car['v_name'] ?></td>
                                    <td><?php echo $car['v_model'] ?></td>
                                    <td><?php echo $car['v_number'] ?></td>
                                    <td><?php echo $car['seating_capacity'] ?></td>
                                    <td><?php echo $car['rent_per_day'] ?></td>

                                    <?php
                            
                                    if (isset($user)) {
                                        if ($user['role'] == 2) {
                                            // echo $car['role'];
                                    ?>

                                </tr>
                            <?php       } elseif ($user['role'] == 1) {
                            ?>
                                <td><a href="<?php echo base_url() . 'index.php/Vehicals/Customers/BookVehicals/create/' . $car['cid']; ?>" class="btn btn-primary">Book This Car</a></td>
                            <?php
                                        } else {
                                        }
                                    
                                    } else {
                            ?>
                            <a href="<?php echo base_url() . 'index.php/Vehicals/Customers/BookVehicals/create/' . $car['cid']; ?>" class="btn btn-primary">Login To Book The Cars</a></td>

                    <?php
                                    }
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