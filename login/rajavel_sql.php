<?php 
 include("db.php");
if($_GET['custom_method']== "getdata")
{

    $query="SELECT*FROM admin";
    $conn=mysqli_query($conn,$query);
    $data=mysqli_fetch_all($conn, MYSQLI_ASSOC);
    //$data=mysqli_fetch_assoc($conn);
     echo json_encode($data);
    //print_r( json_encode($data));
   
  
}

if($_POST['username'])
{
  $u= $_POST['username'];
   $p=$_POST['password'];
   $r=$_POST['role'];
   $country=$_POST['country'];
   $state=$_POST['state'];
      $query=  "INSERT INTO admin(username,password,role,country,state)VALUES('$u','$p','$r','$country','$state')";
      $conn=mysqli_query($conn,$query);
      if($conn)
      {
        echo"inserted";
      }


}

//require_once "db.php";
if($_POST['country_id'])
{
  
  $country_id = $_POST["country_id"];
  $result = mysqli_query($conn,"SELECT * FROM state where countryid = $country_id");
  ?>
  <option value="">Select State</option>
  <?php
  while($row = mysqli_fetch_array($result)) {
  ?>
  <option value="<?php echo $row["id"];?>"><?php echo $row["statename"];?></option>
  <?php
  }
  
}

?>