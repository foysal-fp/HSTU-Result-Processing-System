<?php 

  include 'config.php';

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>HSTU R M S | Assign courses</title>
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
                <li><a href="http://localhost/fp/admin/dash_admin_log.php">Dashboard<span style="font-size:17px;" class=""></span></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Information <span class="caret"></span><span style="font-size:17px;" class=""></span></a>
          <ul class="dropdown-menu forAnimate" role="menu" style="background-color:#384f66;">
            <li><a href="http://localhost/fp/admin/student_info_WEO.php"><span class=""><i class=""></i></span>Student's Info</a></li>
            <li><a href="http://localhost/fp/admin/teacher_info.php"><span class=""></span>Teacher's Info</a></li>
            <li><a href="http://localhost/fp/admin/course_info_WEO.php"><span class=""></i></span>Course Info</a></li>
          </ul>
        </li>
        <li class="dropdown">
         <a href="#" class="dropdown-toggle" data-toggle="dropdown">Process <span class="caret"></span><i style="font-size:18px;" class=""></i></a>
         <ul class="dropdown-menu forAnimate" role="menu" style="background-color:#384f66;">
           <li><a href="http://localhost/fp/admin/asssign_teachers.php"><span class=""><i style="font-size:17px;" class=""></i></span>Assign teachers</a></li>
           
         </ul>
       </li>

    <li ><a href="http://localhost/fp/admin/show_result.php">Result Archive <span style="font-size:17px;" class=""><i class=""></i></span></a></li>
    
    <li ><a href="">Settings<span style="font-size:17px;" class=""></span></a></li>
        <li ><a href="http://localhost/fp/admin/contact.php">Contact<span style="font-size:17px;" class=""><i class=""></i></span></a></li>


    <!-- FOR STUDENT -->
     </ul>
 <!--close  For Authority user access  -->

 
 <ul class="nav navbar-nav navbar-right navbar-user" style="margin-right:0px;">
   <a href="http://localhost/fp/admin/dashboard.php">LOGOUT </a>
    
   
 
</ul>
</div>
</nav>
<br>
<div id="page-wrapper">


 
<div class="container">
      <div class="col-md-6">
        <br>
        <h2> Assign Teachers </h2>
        <br>
        <form action="assign_teachers.php" method="POST">
          <div class="form-group">
            <label>Teachers Name</label>
            <input type="text" name="tname"class="form-control" required>
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="text" name="email"class="form-control" required>
          </div>
         <div class="form-group">
            <label>Course Code</label>
            <select name="coursecode" required>
              <option value="">Select Course Code</option>
            
<?php
$query=mysqli_query($con,"select * from course_info");
while($row=mysqli_fetch_array($query))
{
  $id=$row["courseid"];
  
?>
              <option value="<?php echo $id ?>"><?php echo $id ; ?></option>
<?php } ?>
</select>
          </div>

        
          <button type="submit" name ="submit"class="btn btn-primary">Submit 
          </button>

        </form>
      </div>
    </div>

<?php 
      
    if(isset($_POST['submit']))
    {
        $name = $_POST['tname'];
        $email =$_POST['email'];
        $course = $_POST['coursecode'];
  
        $insertion = "insert into assign_teacher(name,email,courseid) values('$name','$email','$course')";
          $run = mysqli_query($con,$insertion);
          if($run)
          {
            echo "
            <script>
              alert('you are successfully submitted');
              window.location.href='assign_teachers.php';
            </script>
            ";
          }
    }

     

 

 ?>





<!--close main containt body-->
              <footer class="col-sm-12">
                <p class="pull-right"> </p>
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
