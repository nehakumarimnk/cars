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
      <!-- <a href = 'flashdata/add'>Click Here</a> to add flash data.  -->
    <div class="navbar navbar-dark bg-dark">
        <div class="container">
            <a href="#" class="navbar-brand">Cars

            </a>


        </div>
    </div>
    <div class="main_body" style="display: flex;justify-content: space-between;">

        <?php $this->load->view('menu'); ?>



        <div class="container" style="padding-top: 20px;">

        <h2><?php echo $this->session->flashdata('item'); ?></h2> 

        <a href="<?php echo base_url() . 'index.php/Users/login'?>" class="btn btn-primary">Login To Book The Cars</a></td>
            <h1> WELCOME, Guest:
            </h1>

            <hr>

            <h3> <a href='<?php echo base_url() . "index.php/Vehicals/ViewVehicals"; ?>'>Available cars to rent</a>

        </div>

</body>

</html>