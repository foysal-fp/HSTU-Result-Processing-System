<?php 

  include 'config.php';


  $Update_Record_id=$_GET['Update'];
  $query= "SELECT * FROM course_info WHERE courseid='$Update_Record_id'";
  $query_run=mysqli_query($con,$query);
   while($row=mysqli_fetch_array($query_run))
      
        {
        	$cid       =$row['courseid'];
        	$cname     =$row['coursename'];
        	$credit   =$row['credit'];
          $levelsemester   =$row['levelsemester'];
        	$dept      =$row['dept'];
        	$faculty   =$row['faculty'];
          
     
        }

        

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>HSTU R M S | Update course Information</title>
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
        <h2> Update Course Information </h2>
        <br>
        <form action="update_course_info.php" method="POST">
          <div class="form-group">
            <label>Course Name</label>
            <input type="text" name="coursename"class="form-control"value="<?php echo $cname; ?>" required>
          </div>
          <div class="form-group">
            <label>Course Code</label>
            <input type="text" name="courseid"class="form-control" value="<?php echo $cid; ?>" required>
          </div>
         <div class="form-group">
            <label>Credit</label>
            <input type="text" name="credit"class="form-control" value="<?php echo $credit; ?>" required>
          </div>
          <div class="form-group">
            <label>Level/Semester</label>
            <select name="levelsemester" required>
              <option value="">Select Level/Semester</option>
              <option value="1/1"<?php
              if($levelsemester=='1/1'){
                echo "selected";
              }
              ?>
              >1/1</option>
              <option value="1/2"<?php
              if($levelsemester=='1/2'){
                echo "selected";
              }
              ?>
              >1/2</option>
              <option value="2/1"<?php
              if($levelsemester=='2/1'){
                echo "selected";
              }
              ?>
              >2/1</option>
              <option value="2/2"<?php
              if($levelsemester=='2/2'){
                echo "selected";
              }
              ?>
              >2/2</option>
              <option value="3/1"<?php
              if($levelsemester=='3/1'){
                echo "selected";
              }
              ?>
              >3/1</option>
              <option value="3/2"<?php
              if($levelsemester=='3/2'){
                echo "selected";
              }
              ?>
              >3/2</option>
              <option value="4/1"<?php
              if($levelsemester=='4/1'){
                echo "selected";
              }
              ?>
              >4/1</option>
              <option value="4/2"<?php
              if($levelsemester=='4/2'){
                echo "selected";
              }
              ?>
              >4/2</option>

            </select>
          </div>
         
          <div class="form-group">
            <label>Department</label>
            <select name="department" required>
            	<option value="">Select Department</option>
            	<option value="CSE"<?php
            	if($dept=='CSE'){
            		echo "selected";
            	}
            	?>
            	>CSE</option>

            	<option value="ECE"<?php
            	if($dept=='ECE'){
            		echo "selected";
            	}
            	?>
            	>ECE</option>
            	<option value="EEE"<?php
            	if($dept=='EEE'){
            		echo "selected";
            	}
            	?>
            	>EEE</option>
            	<option value="Agriculture"<?php
            	if($dept=='Agriculture'){
            		echo "selected";
            	}
            	?>>Agriculture</option>
            	<option value="Fisherise"<?php
            	if($dept=='Fisherise'){
            		echo "selected";
            	}
            	?>
            	>Fisherise</option>
            	<option value="DVM"<?php
            	if($dept=='DVM'){
            		echo "selected";
            	}
            	?>
            	>DVM</option>
            	<option value="Civil"<?php
            	if($dept=='Civil'){
            		echo "selected";
            	}
            	?>
            	>Civil</option>
            	<option value="Architecture"<?php
            	if($dept=='Architecture'){
            		echo "selected";
            	}
            	?>
            	>Architecture</option>

            </select>          
        </div>
         <div class="form-group">
            <label>Faculty</label>
            <select name="faculty" required>
            	<option value="">Select Faculty</option>
            	<option value="CSE"<?php
            	if($dept=='CSE'){
            		echo "selected";
            	}
            	?>
            	>CSE</option>
            	<option value="Science"
            	<?php
            	if($dept=='Science'){
            		echo "selected";
            	}
            	?>>Science</option>
            	<option value="BBA"<?php
            	if($dept=='BBA'){
            		echo "selected";
            	}
            	?>>BBA</option>
            	<option value="Agriculture"<?php
            	if($dept=='Agriculture'){
            		echo "selected";
            	}
            	?>>Agriculture</option>
            	<option value="DVM"<?php
            	if($dept=='DVM'){
            		echo "selected";
            	}
            	?>>DVM</option>
            	<option value="Engineering"<?php
            	if($dept=='Engineering'){
            		echo "selected";
            	}
            	?>>Engineering</option>
            	<option value="Sociology"<?php
            	if($dept=='Sociology'){
            		echo "selected";
            	}
            	?>>Sociology</option>

            </select>           </div>
          <button type="submit" name ="submit"class="btn btn-primary">Submit
          </button>

        </form>
      </div>
    </div>







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
  <?php
  include 'config.php';

       if(isset($_POST['submit']))
    {
        $cid = $_POST['courseid'];
        $cname = $_POST['coursename'];
        $credit =$_POST['credit'];
        $levelsemester =$_POST['levelsemester'];
        $dept =$_POST['department'];
        $faculty =$_POST['faculty'];
        $insertion = "UPDATE  course_info SET coursename='$cname',courseid='$cid',credit='$credit',levelsemester='$levelsemester',dept='$dept',faculty ='$faculty' WHERE courseid=$cid";
          $run = mysqli_query($con,$insertion);
          if($run)
          {
            echo "
            <script>
              alert('you are successfully Updated');
              window.location.href='course_info.php';
            </script>
            ";
          }
    }
   



?>
