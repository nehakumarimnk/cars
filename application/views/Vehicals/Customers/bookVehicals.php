<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Cars</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/bootstrap.min.css'; ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
</head>

<body style=" background-color: lime;">
    <div class="navbar navbar-dark bg-dark">

        <div class="container">
            <a hreaf="#" class="navbar-brand">BOOK CARS </a>
            <a href='<?php echo base_url() . "index.php/Users/logout"; ?>'>Logout </a>

        </div>
    </div>

    <div class="main_body" style="display: flex;justify-content: space-between;">

        <?php $this->load->view('menu'); ?>
        <div class="container" style="padding-top: 10px;">
            <h4>BOOK CARS</h3>

            <?php if (!empty($getVehicals)) {
                            $array = json_decode(json_encode($getVehicals), true);
                            // print_r($array);
                            foreach ($array as $car) { ?>
                               <hr> <h3>CARS DETAILS:
                                    <br>
                                    <td><?php echo "Name :".$car['v_name']."," ?></td>
                                    <td><?php echo "Model :".$car['v_model'].","  ?></td>
                                    <td><?php echo "Number :".$car['v_number'].","  ?></td>
                                    <td><?php echo "Seating Capacity :".$car['seating_capacity'].","  ?></td>
                                    <td><?php echo "Rent :".$car['rent_per_day'] ?></td>
                                </h4>
                                <hr>
                                    <?php } } ?>

            <form method="post" name="createUsers" action="<?php echo base_url() . 'index.php/Vehicals/Customers/BookVehicals/create/'.$car['cid']; ?>" enctype="multipart/form-data">


                <div class="form-group row">
                   




                    <label class="col-md-3 col-form-label">Number of Day <span class="text-danger">*</span></label>
                    <div class="col-md-9">
                        <select class="form-control input-height" name="t_days">
                            <option value="10">Max 30 Days</option>

                            <?php 
                                for ($i =1; $i<31; $i++) { ?>
                                    <option value=<?php echo $i; ?> > <?php echo $i; ?> </option>
                            <?php }
                             ?>
                        </select>
                        <br>
                    </div>
                    <br>

                    <label class="col-md-3 col-form-label">Start Day <span class="text-danger">*</span></label>
                    <div class="col-md-9">
                        <input type="date" class="form-control" placeholder="₹" name='s_day' required>
                        <br>
                    </div>


                </div>

                <br>

                <br>
                <br>
                <div class="form-group">
                    <button class="btn btn-primary">Book</button>
                    <a href="<?php echo base_url() . 'index.php/Vehicals/ViewVehicals'; ?>" class="btn-secondary btn">Cancel</a>
                </div>
        </div>

    </div>
    </form>

    <!-- <hr> -->
    <form method="post" name="createUser" action="<?php echo base_url() . 'index.php/school_class/section_c/add/'; ?>" enctype="multipart/form-data">
        <div class="row">



            <div class="col-md-6">





            </div>
    </form>


    </div>
</body>

</html>