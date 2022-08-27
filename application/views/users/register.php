<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Application</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/bootstrap.min.css'; ?>">
    <link rel = "stylesheet" type = "text/css" 
   href = "<?php echo base_url(); ?>assets/css/style.css">
</head>

<body style=" background-color: white;" >
    <div class="navbar navbar-dark bg-dark">
        <div class="container">
           Register FORM
        </div>
    </div>

    <div class="main_body" style="display: flex;justify-content: space-between;">

<?php $this->load->view('menu');?>

    <div class="container" style="padding-top: 10px;">
        <h3></h3>
        <!-- <hr> -->
        <form method="post" name="createUser" action="<?php echo base_url() . 'index.php/Register/Registers/create'; ?>" enctype="multipart/form-data">
            <div class="row">

           

            <div class="col-md-6">
            <div class="form-group row">
            <div class="form-group row">
                            <label class="col-md-3 col-form-label">You're a? <span class="text-danger">*</span></label>
                            <div class="col-md-9">
                                <select class="form-control input-height" name="role">
                                    <option value="1">Customer</option>
                                    <option value="2">Car Rental Agency</option>
                                </select>
                            </div>
                        </div>
                            <label class="col-md-3 col-form-label">Email <span class="text-danger">*</span></label>
                            <div class="col-md-9">
                                <input type="email" class="form-control" placeholder="Enter Email" name='username' required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Password <span class="text-danger">*</span></label>
                            <div class="col-md-9">
                                <input type="password" class="form-control" placeholder="Enter Password" name='password' required>
                            </div>
                        </div>
                        <hr>
                        <br>
                <div class="form-group row">
                            <label class="col-md-3 col-form-label">First Name <span class="text-danger">*</span></label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" placeholder="Enter First name" name='First_Name' required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Last Name <span class="text-danger">*</span></label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" placeholder="Enter Last name" name='Last_Name'>
                            </div>
                        </div>
              
           

                        
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Gender <span class="text-danger">*</span></label>
                            <div class="col-md-9">
                                <select class="form-control input-height" name="Gender">
                                    <option value="">Select...</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                        </div>
                   

                    </div>
                    <br>
                    <br>
                    <div class="form-group">
                        <button class="btn btn-primary">Create</button>
                        <a href="<?php echo base_url() . 'index.php/Users/index'; ?>" class="btn-secondary btn">Cancel</a>
                    </div>
                        </div>

                       
                 
                  </div>
                    <!-- <div class="form-group">
                        <button class="btn btn-primary">Create</button>
                        <a href="<?php echo base_url() . 'index.php/add/index'; ?>" class="btn-secondary btn">Cancel</a>
                    </div> -->
                </div>

            </div>
        </form>
    </div>
</body>

</html>