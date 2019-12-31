
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
<br>
<div id="page-wrapper">
<!-- main containt body-->
<section >

 
<div class="row">
  <div class="">
    <div class="" >
      <h3 > <img style="height:300px; width:1250px;" src="wajed.jpg" /></h3>
      
    </div>
  </div>

 
</div>
<!--  Basic info     -->
<div class="row">
  <div class="col-md-7 well" style="border:0px solid">

      <p class="well" style="padding:10px;">
        <span class="glyphicon glyphicon-leaf"></span>&nbsp; Basic Information
      </p>
      <table  class="table dt-responsive zero-border">
          <tbody>
            <tr>
                <td>Site Logo</td>
                <td> </td>
                <td><img style="height:170px; width:170px;" src="hstu_logo.PNG" /></td>
            </tr>
              <tr>
                  <td>Site Name</td>
                  <td>:</td>
                  <td> HSTU Result Management System</td>
              </tr>
              <tr>
                  <td>Tag Line</td>
                  <td>:</td>
                  <td>A student Result Management System</td>
              </tr>
              <tr>
                  <td>Grading Scale</td>
                  <td>:</td>
                  <td>4.00</td>
              </tr>
             
  

           </tbody>
      </table>
<br>
</div>
  <!--  grade point    -->
  <div class=" col-md-5 col-sm-12 well pull-right-lg" style="border:0px solid">
      <p class="well" style="padding:10px; margin-bottom:2px;">
        <span class="glyphicon glyphicon-signal"></span>&nbsp; Grade Point Table
      </p>
      <p align="center">Grade Point in Scale of 4.00</p>
      <table class="table table-striped table-bordered dt-responsive" cellspacing="0" width="100%">
    	<thead>
            <tr>
                <th>Grade </th>
                <th>Grade Point</th>
                <th>Marks Obtained ( % )</th>
            </tr>
        </thead>
        <tbody>
                      <tr>
                <td class="capitalize">A+</td>
                <td>4.00</td>
                <td>80 and above</td>
            </tr>
                        <tr>
                <td class="capitalize">A</td>
                <td>3.75</td>
                <td>75 to below 80</td>
            </tr>
                        <tr>
                <td class="capitalize">A-</td>
                <td>3.50</td>
                <td>70 to below 75</td>
            </tr>
                        <tr>
                <td class="capitalize">B+</td>
                <td>3.25</td>
                <td>65 to below 70</td>
            </tr>
                        <tr>
                <td class="capitalize">B</td>
                <td>3.00</td>
                <td>60 to below 65</td>
            </tr>
                        <tr>
                <td class="capitalize">B-</td>
                <td>2.75</td>
                <td>55 to below 60</td>
            </tr>
                        <tr>
                <td class="capitalize">C+</td>
                <td>2.50</td>
                <td>50 to below 55</td>
            </tr>
                        <tr>
                <td class="capitalize">C</td>
                <td>2.25</td>
                <td>45 to below 50</td>
            </tr>
                        <tr>
                <td class="capitalize">D</td>
                <td>2.00</td>
                <td>40 to below 45</td>
            </tr>
                   <tr>
                <td class="capitalize">F</td>
                <td>0.00</td>
                <td>Less than 40</td>
            </tr>
                     </tbody>

    </table>


    </div>
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
