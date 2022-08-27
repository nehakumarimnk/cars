<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Cars</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/bootstrap.min.css'; ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
</head>

<body style=" background-color: lime;">
    <div class="navbar navbar-dark bg-dark">

        <div class="container">
            <a hreaf="#" class="navbar-brand">EDIT CARS </a>
            <a href='<?php echo base_url() . "index.php/Users/logout"; ?>'>Logout </a>
            

        </div>
    </div>

    <div class="main_body" style="display: flex;justify-content: space-between;">

        <?php $this->load->view('menu'); ?>
        <div class="container" style="padding-top: 10px;">
            <h3>EDIT


            <form method="post" name="createUsers" action="<?php echo base_url() . 'index.php/Vehicals/Agency/EditVehicals/edit/'. $getVehicals[0]['cid']; ?>" enctype="multipart/form-data">


                <div class="form-group row">
                    <label class="col-md-3 col-form-label">Vehical Name <span class="text-danger">*</span></label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" value="<?php echo set_value('v_name',$getVehicals[0]['v_name']);?>" placeholder="Enter Vehical Name" name='v_name' required>
                        <br>
                    </div>

                    <label class="col-md-3 col-form-label">Vehical Model <span class="text-danger">*</span></label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" value="<?php echo set_value('v_model',$getVehicals[0]['v_model']);?>" placeholder="Enter Vehical Model" name='v_model' required>
                        <br>
                    </div>

                    <label class="col-md-3 col-form-label">Vehical Number <span class="text-danger">*</span></label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" value="<?php echo set_value('v_number',$getVehicals[0]['v_number']);?>" placeholder="Enter Vehical Number" name='v_number' required>
                        <br>
                    </div>




                    <label class="col-md-3 col-form-label">Select Seating Capacity <span class="text-danger">*</span></label>
                    <div class="col-md-9">
                        <select class="form-control input-height" name="seating_capacity">
        <option value=<?php echo $getVehicals[0]['seating_capacity']; ?> SELECTED ><?php echo "CURRENTLY: ".$getVehicals[0]['seating_capacity']; ?></option>

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
                        <input type="text" class="form-control" value="<?php echo set_value('v_number',$getVehicals[0]['rent_per_day']);?>" placeholder="₹" name='rent_per_day' required>
                        <br>
                    </div>


                </div>

                <br>

                <br>
                <br>
                <div class="form-group">
                    <button class="btn btn-primary">Update</button>
                    <a href="<?php echo base_url() . 'index.php/Users/index'; ?>" class="btn-secondary btn">Cancel</a>
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