<?php 

  include 'config.php';

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>HSTU R M S | Teacher Information</title>
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
        
<div id="wrapper">
  <nav class="navbar navbar-inverse navbar-fixed-top " role="navigation">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <h3 class="customTXT headerDiv middie-position">HSTU Result Management System</h3>
    </div>
    <div class="collapse navbar-collapse navbar-ex1-collapse">
      <ul class="nav navbar-nav side-nav">
        <!-- FOR ADMIN  -->
         <li><a href="http://localhost/fp/teacher/dash_teacher_log.php">Dashboard<span style="font-size:17px;" class=""></span></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Information <span class="caret"></span><span style="font-size:17px;" class=""></span></a>
          <ul class="dropdown-menu forAnimate" role="menu" style="background-color:#384f66;">
            <li><a href="http://localhost/fp/teacher/student_info_WEO.php"><span class=""><i class=""></i></span>Student's Info</a></li>
            <li><a href="http://localhost/fp/teacher/teacher_info.php"><span class=""></span>Teacher's Info</a></li>
            <li><a href="http://localhost/fp/teacher/course_info_WEO.php"><span class=""></i></span>Course Info</a></li>
             <li><a href="http://localhost/fp/teacher/result_info.php"><span class=""></i></span>Result Info</a></li>

          </ul>
        </li>
        <li class="dropdown">
         <a href="#" class="dropdown-toggle" data-toggle="dropdown">Process <span class="caret"></span><i style="font-size:18px;" class=""></i></a>
         <ul class="dropdown-menu forAnimate" role="menu" style="background-color:#384f66;">
             <li><a href="http://localhost/fp/teacher/add_result.php"><span class=""><i style="font-size:17px;" class=""></i></span>Assign Result</a>
             </li>

           
         </ul>
       </li>

    <li ><a href="http://localhost/fp/teacher/show_result.php">Result Archive <span style="font-size:17px;" class=""><i class=""></i></span></a></li>
    
    <li ><a href="">Settings<span style="font-size:17px;" class=""></span></a></li>
    <li ><a href="http://localhost/fp/teacher/contact.php">Contact<span style="font-size:17px;" class=""><i class=""></i></span></a></li>


    <!-- FOR STUDENT -->
     </ul>
 <!--close  For Authority user access  -->

 
 <ul class="nav navbar-nav navbar-right navbar-user" style="margin-right:0px;">
   <a href="http://localhost/fp/teacher/dashboard.php">LOGOUT </a>
    
   
 
</ul>
</div>
</nav>
<br><br>
<div class="container">
      <h2 align="center"> Hajee Mohammad Danesh Science and Technology University,Dinajpur-5200,Bangladeh</h2>
            <h3 align="center" >Students Information </h3>

        <br>
        <input class="form-control" id="myInput" type="text" placeholder="Search..">
        <br>
        <table class="table table-bordered table-hover" >
      <tr >
        <th style="text-align: center;">Serial Number </th>
        <th style="text-align: center;">Teacher Name </th>
        <th style="text-align: center;">Email</th>
        <th style="text-align: center;">Course ID</th>
        
      </tr>

 <?php 
      $query = "SELECT * from assign_teacher";
     $query_run=mysqli_query($con,$query);

      while($row=mysqli_fetch_array($query_run))
      
        {
        	$id       =$row['id'];
        	$name     =$row['name'];
        	$email   =$row['email'];
          $cid   =$row['courseid'];
   
        ?>

         <tbody id="myTable">
         <tr>
          <td style="text-align: center;"> <?php  echo $id ?></td>
          <td style="text-align: center;"> <?php  echo $name ?></td>
          <td style="text-align: center;"> <?php  echo $email ?></td>
          <td style="text-align: center;"> <?php  echo $cid ?></td>
        

      </tr>
      </tbody>

<?php } ?>
</table>
</div>




</section>
<!--close main containt body-->
              <footer class="col-sm-12">
                <p class="pull-right">Powered by CSE Department </p>
              </footer>
            </div><!-- close div id wrapper -->
          </div><!-- close div id page-wrapper -->

          <script type='text/javascript' src="http://urms.morningsunit.com/assets/js/bootstrap.min.js"></script>
          <script type='text/javascript' src="http://urms.morningsunit.com/assets/js/jquery.dataTables.min.js"></script>
          <script type='text/javascript' src="http://urms.morningsunit.com/assets/js/dataTables.bootstrap.min.js"></script>
          <script type='text/javascript' src="http://urms.morningsunit.com/assets/js/dataTables.responsive.min.js"></script>
          <script type='text/javascript' src="http://urms.morningsunit.com/assets/js/responsive.bootstrap.min.js"></script>
          <script type='text/javascript' src="http://urms.morningsunit.com/assets/toastr/build/toastr.min.js"></script>
          <script type='text/javascript' src="http://urms.morningsunit.com/assets/js/calendar.js"></script>
          <script type='text/javascript' src="http://urms.morningsunit.com/assets/datepicker/js/bootstrap-datepicker.js"></script>


        

        


    <script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

  </body>
  </html>
