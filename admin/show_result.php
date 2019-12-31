<?php 

  include 'config.php';

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>HSTU R M S | Show Result</title>
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
           <li><a href="http://localhost/fp/admin/assign_teachers.php"><span class=""><i style="font-size:17px;" class=""></i></span>Assign Teacher</a></li>
           
         </ul>
       </li>

    <li ><a href="">Result Archive <span style="font-size:17px;" class=""><i class=""></i></span></a></li>
    
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
<br><br>

<div class="container-fluid">
      <div class="col-md-6">
        <br>
        <h4>   Get result Sheet by searching <strong>Course Code</strong></h4>
        <form action="show_result.php" method="POST">
          <div class="form-group">
            <label>Course Code</label>
            <input type="text" name="code"class="form-control" required>
          </div>
          
    <button type="search" name ="search"class="btn btn-primary">Search</button>
      </form>
  </div>
</div>
<div class="container">
    <form action="" method='POST'>
      <h2 align="center"> Hajee Mohammad Danesh Science and Technology University,Dinajpur-5200,Bangladeh</h2>
<?php 

    if(isset($_POST['search']))
    {
      $code=$_POST['code'];
      

      $query="SELECT * FROM  course_info where courseid='$code'";
      $query_run=mysqli_query($con,$query);

      while($row=mysqli_fetch_array($query_run))
      {
        $courseid      =$row['courseid'];
        $coursename      =$row['coursename'];
        $credit     =$row['credit'];
        $levelsemester =$row['levelsemester'];
        $dept =$row['dept'];
        ?>
        <h3 align="center"> B.Sc <?php echo $dept ?> Level/semester <?php echo $levelsemester ?>
        <h3 align="center">Grade Point Report (Theoritical)</h3>
        <br>
       <h4> Course Title :<b> <?php echo $coursename  ?> </b>&emsp; Course Code : <b><?php echo $courseid ?></b> &emsp; Credit Hours : <b><?php echo $credit ?></b>&emsp;</h4>
        <br>
<?php

      }
    }

?>      
      <br>
          <table class="table table-bordered table-hover">
            <tr >
              <th style="text-align: center;" rowspan="2">Student ID</th>
              <th style="text-align: center;" rowspan="2">Attendence</th>
              <th style="text-align: center;"rowspan="2">Quiz</th>
              <th style="text-align: center;"rowspan="2">Mid</th>
              <th style="text-align: center;"colspan="2">Final</th>
              <th style="text-align: center;" rowspan="2">Total</th>
              <th style="text-align: center;"rowspan="2">Marks(%)</th>
              <th style="text-align: center;"rowspan="2">Grade</th>
              <th style="text-align: center;"rowspan="2">Point</th>
            </tr>
            <tr align="center">
 
              <th style="text-align: center;">Section A</th>
              <th style="text-align: center;">Section B</th>

              </tr> 



<?php 

    if(isset($_POST['search']))
    {
      $code=$_POST['code'];
      

      $query="SELECT * FROM  result where cid='$code'";
      $query_run=mysqli_query($con,$query);

      while($row=mysqli_fetch_array($query_run))
      {
        $cid       =$row['cid'];
        $id       =$row['id'];
        $attn     =$row['attn'];
        $avrquiz  =$row['avrquiz'];
        $mid      =$row['mid'];
        $secA     =$row['secA'];
        $secB     =$row['secB'];
        $total    =$row['total'];
        $marks_per=$row['marks_per'];
        $grade    =$row['grade'];
        $point    =$row['point'];

        

        ?>

        <tr>
          <td style="text-align: center;"> <?php  echo $id ?></td>
          <td style="text-align: center;"> <?php  echo $attn ?></td>

          <td style="text-align: center;"> <?php  echo $avrquiz ?></td>
          <td style="text-align: center;"> <?php  echo $mid ?></td>
          <td style="text-align: center;"> <?php  echo $secA ?></td>
          <td style="text-align: center;"> <?php  echo $secB ?></td>
          <td style="text-align: center;"> <?php  echo $total ?></td>
          <td style="text-align: center;"> <?php  echo $marks_per ?></td>
          <td style="text-align: center;"> <?php  echo $grade ?></td>
          <td style="text-align: center;"> <?php  echo $point ?></td>

        </tr>




<?php
      }



 
    }
    ?>

      </table>
    </form>
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
