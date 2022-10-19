<?php
require('db.php');

if($_POST['custom_method'] == "create")
{
    $name=$_POST['name'];
    $lastname=$_POST['lname'];
    // echo $name;
    // exit;
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
    $dob=$_POST['dob'];
    $gender=$_POST['gender'];
    $nation=$_POST['nationlity'];
    $state=$_POST['state'];
    $qualifi=$_POST['checkbox'];
    $qualification=implode(',',$qualifi);
    $address=$_POST['address'];
    $fname=$_FILES['picture']['name'];
   
    $ext=strtolower(end(explode('.',$fname)));//extention  convert lower 
    if($ext=='png' ||  $ext=='jpeg'|| $ext=='jpg' || $ext=='gif'){
    $directory='profilepicture';//folder directory  
    $fnewname=$name.'.'.$ext;//rename
    $picturefullpath=$directory.'/'.$fnewname;//rename
    $upload=move_uploaded_file($_FILES['picture']['tmp_name'],"$picturefullpath"); 
   // echo"png";
    }   
    if(!$upload){
      echo( ' Failed to Upload the file  ! file is not an image');exit;
   }  
    $sql="INSERT INTO crud_form_data(firstname,lastname,phone,email,password,conpassword,dob,gender,nationlity,state,qualification,address,picture) VALUES ('$name','$lastname','$phone','$email','$password','$cpassword','$dob','$gender','$nation','$state','$qualification','$address','$picturefullpath')";
    //echo $sql;
    $connection=mysqli_query($conn,$sql);
     echo ("success");
    

  
}

if($_GET['custom_method'] == "get_all_data")
{
    $query="SELECT *,
    (SELECT name from country WHERE id=crud_form_data.nationlity)as countryname,
    (SELECT statename from state WHERE id=crud_form_data.state ) as statename from  crud_form_data ";
    
    $result = mysqli_query($conn,$query);
    $cust=mysqli_fetch_all($result, MYSQLI_ASSOC);
   // $cust=mysqli_fetch_assoc($result);
    $country="SELECT * from  country ";
    $conn1 = mysqli_query($conn,$country);
    $conn2=mysqli_fetch_all($conn1, MYSQLI_ASSOC);

    $data = array();//multiple value passing in json
    $data['alldata'] = ($cust);
    $data['country'] = ($conn2);
   
    if($data) {
      echo json_encode($data);
    } else {
          echo "failed";
    } 
    }
    if($_GET['custom_method'] == "get_state_countryid")
    {
      $countryid=$_GET['countryid'];
      $state="SELECT*FROM state WHERE countryid=$countryid"; 
      $con1=mysqli_query($conn,$state);
      $con2=mysqli_fetch_all($con1, MYSQLI_ASSOC);
     
    if($con2) {
      echo json_encode($con2);
    } else {
          echo "failed";
    } 
    }



if($_POST['custom_method'] == "update")
{
  $fname=$_FILES['picture']['name'];
  $size=$_FILES['picture']['size'];
  $ext=strtolower(end(explode('.',$fname)));
  $yes=$_POST['form_data'];
 
  if($_POST['form_data'] == 'no')
  {
      $name=$_POST['name'];
      $lastname=$_POST['lname'];
      $phone=$_POST['phone'];
      $email=$_POST['email'];
      $id=$_POST['id'];
      $password=$_POST['password'];
      $cpassword=$_POST['cpassword'];
      $dob=$_POST['dob'];
      $gender=$_POST['gender'];
      $nation=$_POST['nationlity'];
      $state=$_POST['state'];
      $qualifi=$_POST['checkbox'];
      $qualification=implode(",",$qualifi);
      $address=$_POST['address'];
      $update="UPDATE crud_form_data SET firstname='$name',lastname='$lastname',phone='$phone',email='$email',password='$password',conpassword='$cpassword',dob='$dob',gender='$gender',nationlity='$nation',state='$state',qualification='$qualification',address='$address'WHERE id=$id";
      echo ($update);
      $uptresult=mysqli_query($conn,$update);
      echo("update success");
  
  }
  else if($_POST['form_data'] == 'yes')
        {
            if($ext=='png' || $ext=='jpeg'|| $ext=='jpg' || $ext=='gif')
            {
              $name=$_POST['name'];
              $lastname=$_POST['lname'];
              $phone=$_POST['phone'];
              $email=$_POST['email'];
              $id=$_POST['id'];
              $password=$_POST['password'];
              $cpassword=$_POST['cpassword'];
              $dob=$_POST['dob'];
              $gender=$_POST['gender'];
              $nation=$_POST['nationlity'];
              $state=$_POST['state'];
              $qualifi=$_POST['checkbox'];
              $qualification=implode(",",$qualifi);
              $address=$_POST['address'];
              $fname=$_FILES['picture']['name'];
              $ext=strtolower(end(explode('.',$fname)));//extention  convert lower 
              $directory='profilepicture';//folder directory  
              $fnewname=$name.'.'.$ext;//rename
              $picturefullpath=$directory.'/'.$fnewname;//rename
              $upload=move_uploaded_file($_FILES['picture']['tmp_name'],"$picturefullpath"); 
              $update="UPDATE crud_form_data SET firstname='$name',lastname='$lastname',phone='$phone',email='$email',password='$password',conpassword='$cpassword',dob='$dob',gender='$gender',nationlity='$nation',state='$state',qualification='$qualification',address='$address',picture='$picturefullpath' WHERE id=$id";
              echo ($update);
              $uptresult=mysqli_query($conn,$update);
              echo("update success");
            }
            else
            {
                  echo "File upload error Please correct format"; exit;
            }
          } 
        
}

if($_POST['custom_method']== "delete")
{
 $id=$_POST['id'];
 $select="SELECT*FROM crud_form_data WHERE id=$id";
 $result = mysqli_query($conn,$select);
 //$row=mysqli_fetch_all($result, MYSQLI_ASSOC);
 $row=mysqli_fetch_assoc($result);
 $profilepicturepath = $row['picture'];
 //echo $profilepicturepath;
 if(file_exists($profilepicturepath))
 {
  unlink($profilepicturepath);
 }
 $deleteq="DELETE FROM crud_form_data WHERE id=$id";
 $deleteresult=mysqli_query($conn,$deleteq);
  echo"deleted successful";
}
if($_GET['custom_method'] == "user_all_data")
{
   $colunvalue=$_GET['colunvalue'];
$colunname=$_GET['coluname'];  
 $query="SELECT * FROM  crud_form_data WHERE  $colunname ='$colunvalue'";
  // echo $query;
    $result = mysqli_query($conn,$query);
    $data= mysqli_num_rows($result);
    echo json_encode($data);
    }

 ?> 
