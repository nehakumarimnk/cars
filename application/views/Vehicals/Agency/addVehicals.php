<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Cars</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/bootstrap.min.css'; ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
</head>

<body style=" background-color: lime;">
    <div class="navbar navbar-dark bg-dark">

        <div class="container">
            <a hreaf="#" class="navbar-brand">ADD CARS </a>
            <a href='<?php echo base_url() . "index.php/Users/logout"; ?>'>Logout </a>

        </div>
    </div>

    <div class="main_body" style="display: flex;justify-content: space-between;">

        <?php $this->load->view('menu'); ?>
        <div class="container" style="padding-top: 10px;">
            <h3>ADD CARS</h3>



            <form method="post" name="createUsers" action="<?php echo base_url() . 'index.php/Vehicals/Agency/AddVehicals/create'; ?>" enctype="multipart/form-data">


                <div class="form-group row">
                    <label class="col-md-3 col-form-label">Vehical Name <span class="text-danger">*</span></label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" placeholder="Enter Vehical Name" name='v_name' required>
                        <br>
                    </div>

                    <label class="col-md-3 col-form-label">Vehical Model <span class="text-danger">*</span></label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" placeholder="Enter Vehical Model" name='v_model' required>
                        <br>
                    </div>

                    <label class="col-md-3 col-form-label">Vehical Number <span class="text-danger">*</span></label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" placeholder="Enter Vehical Number" name='v_number' required>
                        <br>
                    </div>




                    <label class="col-md-3 col-form-label">Select Seating Capacity <span class="text-danger">*</span></label>
                    <div class="col-md-9">
                        <select class="form-control input-height" name="seating_capacity">
                            <option value="">Select...</option>

                            <?php 
                                for ($i =1; $i<10; $i++) { ?>
                                    <option value=<?php echo $i; ?> > <?php echo $i; ?> </option>
                            <?php }
                             ?>
                        </select>
                        <br>
                    </div>
                    <br>

                    <label class="col-md-3 col-form-label">Rent Amount/Day(₹) <span class="text-danger">*</span></label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" placeholder="₹" name='rent_per_day' required>
                        <br>
                    </div>


                </div>

                <br>

                <br>
                <br>
                <div class="form-group">
                    <button class="btn btn-primary">Insert</button>
                    <a href="<?php echo base_url() . 'index.php/Users/index'; ?>" class="btn-secondary btn">Cancel</a>
                </div>
        </div>

    </div>
    </form>



    </div>
</body>

</html>