<?php 
  
  $host_name ='localhost';
  $name ='root';
  $pass ='';
  $db ='fp';
  
  $con=mysqli_connect($host_name,$name,$pass) or die('Database error!');
  mysqli_select_db($con,$db);
 ?>
<!DOCTYPE html>
<html lang="en">
 <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>HSTU R M S | Controller Section login</title>
    <link rel="shortcut icon" href="hstu_logo.PNG"/>
    <meta name="generator" content="Bootply" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link href="http://urms.morningsunit.com/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://urms.morningsunit.com/assets/css/bootstrap.css" rel="stylesheet">
    <link href="http://urms.morningsunit.com/assets/css/customsDashboard.css" rel="stylesheet">
    <link href="http://urms.morningsunit.com/assets/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="http://urms.morningsunit.com/assets/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="http://urms.morningsunit.com/assets/font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="http://urms.morningsunit.com/assets/toastr/build/toastr.min.css" rel="stylesheet" type="text/css">
    <link href="http://urms.morningsunit.com/assets/datepicker/css/datepicker.css" rel="stylesheet" type="text/css">


    <link href="http://urms.morningsunit.com/assets/jtext/jquery-te-1.4.0.css" rel="stylesheet" type="text/css">
    
    <link href="https://fonts.googleapis.com/css?family=Play:400,700&subset=cyrillic,cyrillic-ext,greek,latin-ext" rel="stylesheet">
    
    <script type='text/javascript' src="http://urms.morningsunit.com/assets/js/jquery-1.12.0.min.js"> </script>
    <script type='text/javascript' src="http://urms.morningsunit.com/assets/jtext/jquery-te-1.4.0.min.js"> </script>
</head>

<body>
        

  <nav class="navbar navbar-inverse navbar-fixed " role="navigation">
    <div class="navbar-header">
      
      <h3 class="customTXT headerDiv middie-position">HSTU Result Management System</h3>
    </div>
  </nav>


    <div class="container">
      <div class="col-md-12">
        <h2> Login here </h2>
        <form action="controller_login.php" method="POST">
          <div class="form-group">
            <label>Email</label>
            <input type="text" name="user"class="form-control" required>
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="Password" name="password"class="form-control" required>
          </div>
          <button type="submit" name ="login"class="btn btn-primary">Login
          </button>
          <h5>if you're not registered,<a href="http://localhost/fp/controller/controller_register.php">click here </a></h5>

        </form>
      </div>
    </div>
    <?php 
      
    if(isset($_POST['login']))
    {

        $email = $_POST['user'];
        $password = $_POST['password'];

       $query="select * from controller where email = '$email' AND password = '$password' ";
       $querycheck=mysqli_query($con,$query);

       if($querycheck)
       {
          if(mysqli_num_rows($querycheck)>0)
          {
              echo "
                  <script>
                      alert('You are successfully logged in.');
                      window.location.href='dash_controller_log.php';
                  </script>

              ";
          }
          else{
            echo "
                  <script>
                      alert('User-Name or Password not correct.');
                      window.location.href='controller_login.php';
                  </script>

              ";
          }
       }
       else{
         echo "
                  <script>
                      alert('Database Error.');
                      window.location.href='controller_login.php';
                  </script>

              ";
       }


    }
    else{
      //login er 
    }

 

 ?>




   





          <script type='text/javascript' src="http://urms.morningsunit.com/assets/js/bootstrap.min.js"></script>
          <script type='text/javascript' src="http://urms.morningsunit.com/assets/js/jquery.dataTables.min.js"></script>
          <script type='text/javascript' src="http://urms.morningsunit.com/assets/js/dataTables.bootstrap.min.js"></script>
          <script type='text/javascript' src="http://urms.morningsunit.com/assets/js/dataTables.responsive.min.js"></script>
          <script type='text/javascript' src="http://urms.morningsunit.com/assets/js/responsive.bootstrap.min.js"></script>
          <script type='text/javascript' src="http://urms.morningsunit.com/assets/toastr/build/toastr.min.js"></script>
          <script type='text/javascript' src="http://urms.morningsunit.com/assets/js/calendar.js"></script>
          <script type='text/javascript' src="http://urms.morningsunit.com/assets/datepicker/js/bootstrap-datepicker.js"></script>


          <script>
          $(document).ready(function() {
           $('#myTable').DataTable();
         } );
          </script>

          <!-- Success notification  -->
          

        <!-- error notification  array-->
        

        <!-- Errors notification  -->
        
      
    <script type="text/javascript">
      $(document).ready(function () {
        var url = window.location;
        $('ul.nav a[href="'+ url +'"]').parent().addClass('active');
        $('ul.nav a').filter(function() {
         return this.href == url;
       }).parent().addClass('active');
      });
    </script> 

  </body>
  </html>
