<?php 

  include 'config.php';

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>HSTU R M S | Assign Result</title>
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
<br><br>


  <div class="container">
      <div class="col-md-6">
        <h2> Assign Result </h2>
        <form action="add_result.php" method="POST">
          <div class="form-group">
            <label>Session</label>
            <input type="text" name="session"class="form-control" required>
          </div>
          <div class="form-group">
            <label>Department</label>
            <input type="text" name="dept"class="form-control" required>
          </div>
    <button type="submit" name ="search"class="btn btn-primary">Submit</button>
      </form>
  </div>
</div>

    <form action="" method='POST'>
      <br>
     <h2 align="center"> Hajee Mohammad Danesh Science and Technology University,Dinajpur-5200,Bangladeh</h2>
      <h3 align="center">Grade Point Report (Theoritical)</h3>
   &emsp; <b>Course ID </b><input type="text" name="cid" value="">  &emsp;&emsp;

            <label>credit</label>
            <select name="credit" required>
              <option value="">Select credit</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
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



<?php 

    if(isset($_POST['search']))
    {
      $session=$_POST['session'];
      $dept=$_POST['dept'];

      $query="SELECT * FROM  student_info where session='$session' and dept='$dept'";
      $query_run=mysqli_query($con,$query);

      while($row=mysqli_fetch_array($query_run))

    {
        $id=$row['sid'];
        
      
  
?>
        
           &emsp; <tr>
          <td><input type="text" name="id[]" value="<?php  echo $id ?>"></td>
          <td><input type="text" name="attn[]" value=""></td>
          <td><input type="text" name="quiz1[]" value=""></td>
          <td><input type="text" name="quiz2[]" value=""></td>
          <td><input type="text" name="quiz3[]" value=""></td>
          <td><input type="text" name="mid[]" value=""></td>
          <td><input type="text" name="section_a[]" value=""></td>
          <td><input type="text" name="section_b[]" value=""></td>  



        </tr>
       

          
        
      


<?php
      }
    }

?>

</table>
<br>
  &emsp;&emsp;&emsp;&emsp;  <button  type="submit" name ="submit"class="btn btn-primary btn-lg ">Submit</button>

</form

>
<?php
    
    if(isset($_POST['submit']))
    {
        $id    = $_POST['id'];
        $cid   = $_POST['cid'];
        $credit= $_POST['credit'];
        $attn  = $_POST['attn'];
        $quiz1 = $_POST['quiz1'];
        $quiz2 = $_POST['quiz2'];
        $quiz3 = $_POST['quiz3'];
        $mid   = $_POST['mid'];
        $secA  = $_POST['section_a'];
        $secB  = $_POST['section_b'];
       

        $length=count($id);
         for ($i=0; $i <$length ; $i++) { 

        $avrquiz[$i]= ($quiz1[$i] + $quiz2[$i] + $quiz3[$i])/ round($credit);
        $avrquiz[$i]=number_format($avrquiz[$i],2);
        $total[$i] = ( $attn[$i]+ ($avrquiz[$i])+$mid[$i]+$secA[$i]+$secB[$i] );
        $total[$i]=number_format($total[$i],2);


         $marks_per[$i] = ($total[$i] * 100) / (12.5 * $credit / 0.25 ) ;
        $marks_per[$i]=number_format($marks_per[$i],2);

        if($marks_per[$i] > 79) { $point[$i] = 4.00; $grade[$i] = "A+"; }
        else if($marks_per[$i] > 74) { $point[$i] = 3.75; $grade[$i] = "A" ; }
        else if($marks_per[$i] > 69) { $point[$i] = 3.50; $grade[$i] = "A-"; }
        else if($marks_per[$i] > 64) { $point[$i] = 3.25; $grade[$i] = "B+"; }
        else if($marks_per[$i] > 59) { $point[$i] = 3.00; $grade[$i] = "B" ; }
        else if($marks_per[$i] > 54) { $point[$i] = 2.75; $grade[$i] = "B-"; }
        else if($marks_per[$i] > 49) { $point[$i] = 2.50; $grade[$i] = "C+"; }
        else if($marks_per[$i] > 44) { $point[$i] = 2.25; $grade[$i] = "C" ; }
        else if($marks_per[$i] > 39) { $point[$i] = 2.00; $grade[$i] = "D" ; }
        else { $point[$i] = 0.00; $grade[$i] = "F"; }
    }




        //$length=count($id);

$insertion = "";
        for ($i=0; $i <$length ; $i++) { 
          


$insertion.= "insert into result (id,cid,credit,attn,quiz1,quiz2,quiz3,avrquiz,mid,secA,secB,total,marks_per,grade,point) values('$id[$i]','$cid','$credit','$attn[$i]','$quiz1[$i]','$quiz2[$i]','$quiz3[$i]','$avrquiz[$i]','$mid[$i]','$secA[$i]','$secB[$i]','$total[$i]','$marks_per[$i]','$grade[$i]','$point[$i]') ;";



        }






        
        
// echo "$insertion";

        

          $run = mysqli_query($con,$insertion);




if ($con->multi_query($insertion) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $insertion . "<br>" . $con->error;
}

$con->close();


   
    }
    ?>



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
