<?php 

  include 'config.php';

  $Delete_Record_id=$_GET['Delete'];
  $query= "DELETE FROM course_info WHERE courseid='$Delete_Record_id'";
  $query_run=mysqli_query($con,$query);
  if($query_run)
          {
            echo "
            <script>
              alert('you are successfully Deleted');
              window.location.href='course_info.php';
            </script>
            ";
          }

 ?>