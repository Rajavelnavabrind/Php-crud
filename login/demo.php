<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

#dash {
        color: red;
    }
  
  table, th, td {
    border: 3px solid black;
    border-collapse: collapse;
    text-align: center;
    
  }
  th, td {
    padding: 15px;
  }
  table{
      width:50%;
      margin-left:100px;
  }
  .main{ margin-left: 200px; }
</style>

<?php
include("module.php");
require('db.php');
$query="SELECT*FROM login ";
$connect1=mysqli_query($conn,$query);
$result=mysqli_num_rows($connect1);
 echo"<div class='main'>";  
 echo'<table class="hi">';
 echo"<h3> USER REGISTER DETAILS </h3>";
 echo"<div>";
 echo "<tr>";
 echo"<th> id </th>";
 echo"<th> firstname </th>";
 echo"<th> lastname </th>";
 echo"</tr>";
 while($row=mysqli_fetch_assoc($connect1))
 {
  
   echo"<tr>";
   echo "<td>" . $row['id'] . "</td>";
   echo "<td>" . $row['firstname'] . "</td>";
   echo "<td>" . $row['lastname'] . "</td>";
   echo"</tr>";
  
 }
 echo"</div>";
 echo"</table>";
 echo"</div>";

?>
</html>
