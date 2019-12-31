<?php 

  include 'config.php';


  $Update_Record_id=$_GET['Update'];
  $query= "SELECT * FROM result WHERE id='$Update_Record_id'";
  $query_run=mysqli_query($con,$query);
   while($row=mysqli_fetch_array($query_run))
      
        {
        $cid       =$row['cid'];
        $credit= $row['credit'];
        $id       =$row['id'];
        $attn     =$row['attn'];
        $quiz1 = $row['quiz1'];
        $quiz2 = $row['quiz2'];
        $quiz3 = $row['quiz3'];
        $avrquiz  =$row['avrquiz'];
        $mid      =$row['mid'];
        $secA     =$row['secA'];
        $secB     =$row['secB'];
        $total    =$row['total'];
        $marks_per=$row['marks_per'];
        $grade    =$row['grade'];
        $point    =$row['point'];
        }

        

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>HSTU R M S | Dashboard</title>
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
           
           <li><a href="http://localhost/fp/teacher/add_result.php"><span class=""><i style="font-size:17px;" class=""></i></span>Assign Result</a></li>
           
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





<div class="container-fluid">

 
        <br><br><br>
        <h2 align="center"> Update Result Information </h2>
        <br>
    <form action="update_result_info.php" method='POST'>
      <br>
     <h2 align="center"> Hajee Mohammad Danesh Science and Technology University,Dinajpur-5200,Bangladeh</h2>
      <h3 align="center">Grade Point Report (Theoritical)</h3>
   &emsp; <b>Course ID </b><input type="text" name="cid" value="<?php  echo $cid; ?>">  &emsp;&emsp;

            <label>credit</label>
            <select name="credit" required>
              <option value="">Select credit</option>
              <option value="1"<?php
              if($credit=='1'){
                echo "selected";
              }
              ?>
              >1</option>
              <option value="2"<?php
              if($credit=='2'){
                echo "selected";
              }
              ?>>2</option>
              <option value="3"<?php
              if($credit=='3'){
                echo "selected";
              }
              ?>>3</option>
              <option value="4"<?php
              if($credit=='4'){
                echo "selected";
              }
              ?>>4</option>
            </select>
          
<br>
         &emsp; <table border="1" align="center"  style="text-align: center;" >
            <tr  >
              <th  style="text-align: center;" rowspan="2"> Student ID </th>
              <th style="text-align: center;" rowspan="2"> Attendence </th>
              <th  style="text-align: center;" colspan="3"> Quiz </th>
              <th style="text-align: center;" rowspan="2"> Mid </th>
              <th style="text-align: center;"colspan="2"> Final </th>
            </tr>
            <tr >
              <th style="text-align: center;"> Quiz 1 </th>
              <th style="text-align: center;"> Quiz 2 </th>
              <th style="text-align: center;"> Quiz 3 </th>
              <th style="text-align: center;"> Section A </th>
              <th style="text-align: center;"> Section B </th>
              </tr> 

             <tr>
          <td><input type="text" name="id" value="<?php  echo $id; ?>"></td>
          <td><input type="text" name="attn" value="<?php  echo $attn; ?>"></td>
          <td><input type="text" name="quiz1" value="<?php  echo $quiz1; ?>"></td>
          <td><input type="text" name="quiz2" value="<?php  echo $quiz2; ?>"></td>
          <td><input type="text" name="quiz3" value="<?php  echo $quiz3; ?>"></td>
          <td><input type="text" name="mid" value="<?php  echo $mid; ?>"></td>
          <td><input type="text" name="section_a" value="<?php  echo $secA; ?>"></td>
          <td><input type="text" name="section_b" value="<?php  echo $secB; ?>"></td>  



        </tr>
      </table>
      <br>
      <button type="submit" name ="submit"class="btn btn-primary">Submit
          </button>
    </form>
  </div>
</div>
</body>

</html>