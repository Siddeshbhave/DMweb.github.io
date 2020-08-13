<?php

//To Handle Session Variables on This Page
session_start();

//If user Not logged in then redirect them back to homepage. 
if(empty($_SESSION['id_retailer'])) {
  header("Location: ../index.php");
  exit();
}

require_once("../db.php");
?>

<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>DADSMOM Website</title>

  <!--<link rel="stylesheet" href="css/AdminLTE.min.css">
  <link rel="stylesheet" href="css/_all-skins.min.css">-->
  <!-- Custom -->
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Permanent+Marker|Shrikhand" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Limelight" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Vollkorn" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="carousel.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <link href="animate.css" rel="stylesheet">
  <link href="css/style1.css" rel="stylesheet" type="text/css">
  <link href="twentyywenty1/css/foundation.css" rel="stylesheet" type="text/css" />
  <link href="twentytwenty1/css/twentytwenty.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="css/animate.css">
   <link rel="stylesheet" href="../css/AdminLTE.min.css">
  <link rel="stylesheet" href="../css/_all-skins.min.css">
  <!-- Custom -->
  <link rel="stylesheet" href="../css/custom.css">
  

<style>
.navbar-fixed-top{
    min-height: 80px;

}
.navbar-collapse{
    padding-top: 15px; 
}

nav.navbar ul li > ul {
  background:#B0BEC5;
  box-shadow: none;
}
</style>
</head>
<div class="wrapper">
<nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>                        
                </button>
                <a class="navbar-brand" href="index.php"><img src="banner/D1.png" height="100" width="100" class="logo" alt=""></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right navbar-dark bg-dark">
                    
                </ul>
            </div>
        </div>
    </nav>
  <br /><br><br><br><br><br>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="margin-left: 0px;">

    <section id="candidates" class="content-header">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="box box-solid">
              <div class="box-header with-border">
                <h3 class="box-title">Welcome <b><?php echo $_SESSION['name']; ?></b></h3>
              </div>
              <div class="box-body no-padding">
                <ul class="nav nav-pills nav-stacked">
                  <li class="active"><a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                  <li><a href=""><i class="fa fa-tv"></i> My Company</a></li>
                  <li><a href=""><i class="fa fa-tv"></i> My Products</a></li>
                  <li><a href=""><i class="fa fa-gear"></i> Settings</a></li>
                 
                  <li><a href="../logout.php"><i class="fa fa-arrow-circle-o-right"></i> Logout</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-9 bg-white padding-2">

            <h3>Overview</h3>
            <div class="alert alert-info alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <i class="icon fa fa-info"></i> In this dashboard you are able to change your account settings, add and manage your products.
            </div>

          </div>
        </div>
      </div>
    </section><br><br><br><br><br><br><br><br><br><br><br><br>

    

  </div>
  <!-- /.content-wrapper -->

 <footer class="py-4 main-footer" style="margin-left: 0px; background-color: black; padding-top: 20px; padding-bottom: 30px">
  
    <div style="color: white">
      <br>
       <center>  &copy; 2018 - upass.cc All Rights Reserved </center> <a target="_blank"></a>
    </div>
  </footer>



</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="../js/adminlte.min.js"></script>

<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Plugin JavaScript -->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>
</html>
