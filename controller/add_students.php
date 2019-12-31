<?php 

  include 'config.php';

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>HSTU R M S | Assign Students</title>
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
        <li><a href="http://localhost/fp/controller/dash_controller_log.php">Dashboard<span style="font-size:17px;" class=""></span></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Information <span class="caret"></span><span style="font-size:17px;" class=""></span></a>
          <ul class="dropdown-menu forAnimate" role="menu" style="background-color:#384f66;">
               <li><a href="http://localhost/fp/controller/student_info.php"><span class=""><i class=""></i></span>Student's Info</a></li>
            <li><a href="http://localhost/fp/controller/course_info.php"><span class=""></i></span>Course Info</a></li>
          </ul>
        </li>
        <li class="dropdown">
         <a href="#" class="dropdown-toggle" data-toggle="dropdown">Process <span class="caret"></span><i style="font-size:18px;" class=""></i></a>
         <ul class="dropdown-menu forAnimate" role="menu" style="background-color:#384f66;">
            <li><a href="http://localhost/fp/controller/add_students.php"><span class=""><i style="font-size:17px;" class=""></i></span>Assign Students</a></li>
           <li><a href="http://localhost/fp/controller/assign_courses.php"><span class=""><i style="font-size:17px;" class=""></i></span>Assign Courses</a></li>
           
         </ul>
       </li>

    <li ><a href="http://localhost/fp/controller/show_result.php">Result Archive <span style="font-size:17px;" class=""><i class=""></i></span></a></li>
    
    <li ><a href="">Settings<span style="font-size:17px;" class=""></span></a></li>
    <li ><a href="http://localhost/fp/controller/contact.php">Contact<span style="font-size:17px;" class=""><i class=""></i></span></a></li>


    <!-- FOR STUDENT -->
     </ul>
 <!--close  For Authority user access  -->

 
 <ul class="nav navbar-nav navbar-right navbar-user" style="margin-right:0px;">
   <a href="http://localhost/fp/controller/dashboard.php">LOGOUT </a>
    
   
 
</ul>
</div>
</nav>
<br>
<div id="page-wrapper">


 
<div class="container">
      <div class="col-md-6">
        <br>
        <h2> Assign Students </h2>

        <br>
        <form action="add_students.php" method="POST">
          <div class="form-group">
            <label>Student Name</label>
            <input type="text" name="studentname"class="form-control" required>
          </div>
          <div class="form-group">
            <label>Student ID</label>
            <input type="text" name="sid"class="form-control" required>
          </div>
         <div class="form-group">
            <label>Session</label>
            <input type="text" name="session"class="form-control" required>
          </div>
         
          <div class="form-group">
            <label>Department</label>
            <select name="department" required>
            	<option value="">Select Department</option>
            	<option value="CSE">CSE</option>
            	<option value="ECE">ECE</option>
            	<option value="EEE">EEE</option>
            	<option value="Agriculture">Agriculture</option>
            	<option value="Fisherise">Fisherise</option>
            	<option value="DVM">DVM</option>
            	<option value="Civil">Civil</option>
            	<option value="Architecture">Architecture</option>

            </select>          
        </div>
         <div class="form-group">
            <label>Faculty</label>
            <select name="faculty" required>
            	<option value="">Select Faculty</option>
            	<option value="CSE">CSE</option>
            	<option value="Science">Science</option>
            	<option value="BBA">BBA</option>
            	<option value="Agriculture">Agriculture</option>
            	<option value="DVM">DVM</option>
            	<option value="Engineering">Engineering</option>
            	<option value="Sociology">Sociology</option>

            </select>           </div>
          <button type="submit" name ="submit"class="btn btn-primary">Submit
          </button>

        </form>
      </div>
    </div>

<?php 
      
    if(isset($_POST['submit']))
    {
        $studentname = $_POST['studentname'];
        $sid = $_POST['sid'];
        $session =$_POST['session'];
        $dept =$_POST['department'];
        $faculty =$_POST['faculty'];
        $insertion = "insert into student_info values('$studentname','$sid','$session','$dept','$faculty')";
          $run = mysqli_query($con,$insertion);
          if($run)
          {
            echo "
            <script>
              alert('you are successfully submitted');
              window.location.href='add_students.php';
            </script>
            ";
          }
    }

     

 

 ?>





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
