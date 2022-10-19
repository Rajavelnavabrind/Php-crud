<?php
   require('db.php');
   session_start();
     if($_POST['custom_method'] == "insert")
         {
            $fname=$_POST['fname'];
            $lname=$_POST['lname'];
            $username=$_POST['username'];
            $email=$_POST['email'];
            $password=$_POST['password'];
            $cpassword=$_POST['cpassword'];
            $mobile=$_POST['mobile'];
            $role=$_POST['role'];
           
            $check1="SELECT*FROM login WHERE username='$username'";
            // echo $check;
            $connect1=mysqli_query($conn,$check1);
            $res1=mysqli_num_rows($connect1);
            //echo $res;
            $check2="SELECT*FROM login WHERE email='$email'";
            $connect2=mysqli_query($conn,$check2);
            $res2=mysqli_num_rows($connect2);

            $check3="SELECT*FROM login WHERE mobile='$mobile'";
            $connect3=mysqli_query($conn,$check3);
            $res3=mysqli_num_rows($connect3);

            $query= "INSERT INTO  login (firstname,lastname,username,email,password,cpassword,mobile,role)VALUES('$fname','$lname','$username','$email','$password','$cpassword','$mobile','$role')";
             //echo $query;
            
            // $connection=mysqli_query($conn,$query);
            if($res1==0 && $res2==0 && $res3==0)
            {
                $connection=mysqli_query($conn,$query);
                echo" Account Registered Successfully";
            }
            else if($res1>0 && $res2>0 && $res3>0)
            {
                echo "Username and Email and Mobile number  already  exist";               
            }
            else  if($res1>0 && $res2>0 )
            {
                echo "username and email  already  exist"; 
            }else if($res2>0 && $res3>0)
            {
                echo "Email and Mobile num already  exist";
            }else if($res3>0 && $res1>0)
            {
                echo"Username  and  Mobile num already exist";
            }
            else if ($res1>0)
            {
                echo "Username already exist";
            }else if($res2>0 )
            {
                echo "Email already exist";
            }else if($res3>0)
            {
                echo "Mobile number already exist";
                
            }   

         }
 //login page       
     if($_POST['custom_method'] == 'select')
     {
        $username=$_POST['username'];
        $password=$_POST['password'];
        $role=$_POST['role'];
        $query= "SELECT*FROM login WHERE username='$username' and password='$password' and role='$role'";
       // echo $query;
        $connection=mysqli_query($conn,$query);
        $result=mysqli_num_rows($connection);
        $row=mysqli_fetch_assoc($connection);
          $id=$row['id'];
          $name=$row['firstname'];
          $email=$row['email'];
        // echo json_encode($result2);
        // // echo  $result;

        if($result>0)
        {       
          echo "Logged in successfully";
          $_SESSION['username']=$name;
          $_SESSION['userid']=$id;
          $_SESSION['role']=$role;
          $_SESSION['login']=$username;
          $_SESSION['email']=$email;
         // header(location: "module.php");
        }
      
        else
        {
            echo "Account doesn't exist please Register";
            exit;
          
        }      
     }
//insert  staff details
    if($_POST['custom_method'] == 'staffregister') 
        {
            $fname=$_POST['fname'];
            $lname=$_POST['lname'];
            $email=$_POST['email'];
            $mobile=$_POST['mobile'];
            $dept=$_POST['dept'];
            $role=$_POST['role'];
            $address=$_POST['address'];
            $country=$_POST['country'];
            $state=$_POST['state'];
            $check="SELECT*FROM staff WHERE email='$email'";
            $connect=mysqli_query($conn,$check);
            $result=mysqli_num_rows($connect);
            $check2="SELECT*FROM staff WHERE mobile='$mobile'";
            $connect2=mysqli_query($conn,$check2);
            $result2=mysqli_num_rows($connect2);
            $query="INSERT INTO staff(fname,lname,email,mobile,dept,role,address,country,state) VALUES('$fname','$lname','$email','$mobile','$dept','$role','$address','$country','$state')";
            
            if($result==0 && $result2==0)
            {
                $conn1=mysqli_query($conn,$query);
                echo"register successful";
                
            }
            else if($result>0 && $result2>0){
                echo" already  exist email and mobile";
                
            }else if($result>0)
            {
                echo" already exist email ";
            }
            else if($result2>0)
            {
                echo" already exist mobile ";
            }
        }
 //myprofile
      if($_GET['custom_method'] =='select_data')
            {
              $id=$_SESSION['userid'];
              $query="SELECT*FROM login WHERE id='$id'";
              $connect=mysqli_query($conn,$query);
              $row=mysqli_fetch_assoc($connect);              
              echo json_encode($row);
             
            }

            if($_POST['custom_method'] =='stafflogin')
            {

                $username=$_POST['uname'];
                $password=$_POST['psw'];
                $query= "SELECT*FROM admin WHERE username='$username' and password='$password'";
                  // echo $query;
                $connection=mysqli_query($conn,$query);
                $result=mysqli_num_rows($connection);
                $row=mysqli_fetch_assoc($connection);
                $id=$row['id'];
                $name=$row['username']; 
                if($result==1)
                {
                   echo "login successful";
                   $_SESSION['user']=$name;
                }
                else
                {
                    echo "incorrect details Entry";
                }

            }
//student  new register
            if($_POST['custom_method'] == 'student_register') 
            {
                $fname=$_POST['fname'];
                $lname=$_POST['lname'];
                $email=$_POST['email'];
                $mobile=$_POST['mobile'];
                $gender=$_POST['Gender'];
                $dept=$_POST['dept']; 
                $address=$_POST['address'];
                $check="SELECT*FROM student WHERE email='$email'";
                $connect=mysqli_query($conn,$check);
                $result=mysqli_num_rows($connect);
                $check2="SELECT*FROM student WHERE mobile='$mobile'";
                $connect2=mysqli_query($conn,$check2);
                $result2=mysqli_num_rows($connect2);
                $query="INSERT INTO student(fname,lname,email,gender,mobile ,dept,address) VALUES('$fname','$lname','$email','$gender','$mobile','$dept','$address')";
                
                if($result==0 && $result2==0)
                {
                    $conn1=mysqli_query($conn,$query);
                    echo"register successful";
                    
                }
                else if($result>0 && $result2>0){
                    echo" already  exist email and mobile";
                    
                }else if($result>0)
                {
                    echo" already exist email ";
                }
                else if($result2>0)
                {
                    echo" already exist mobile ";
                }

            }      
   //staff register update         
            if($_POST['custom_method'] == 'staffdetails_edit') 
            {
                $id=$_POST['id'];
                $fname=$_POST['fname'];
                $lname=$_POST['lname'];
                $email=$_POST['email'];
                $mobile=$_POST['mobile'];
                $dept=$_POST['dept'];
                $role=$_POST['role'];
                $address=$_POST['address'];
                $check2="SELECT*FROM staff WHERE mobile='$mobile'";
                $connect2=mysqli_query($conn,$check2);
                $result=mysqli_num_rows($connect2);
                $query="UPDATE staff SET fname='$fname',lname='$lname',mobile='$mobile',dept='$dept',role='$role',address='$address' WHERE id='$id'";
                    $conn1=mysqli_query($conn,$query);
                    if($conn1)
                    {
                    echo"update successful";
                    }
                else{  echo" update failed";}

            }
            //staff file delete
            if($_POST['custom_method']=='delete')
            {
               $id=$_POST['id'];
               $query="DELETE FROM staff WHERE id='$id'";
               $connect=mysqli_query($conn,$query);
               if($connect)
               {
                echo  "deleted success ful";
               }
            }
            //student file update
            if($_POST['custom_method']=='student_register_edit')
            {
                $id=$_POST['id'];
                $fname=$_POST['fname'];
                $lname=$_POST['lname'];
                $email=$_POST['email'];
                $mobile=$_POST['mobile'];
                $gender=$_POST['Gender'];
                $dept=$_POST['dept']; 
                $address=$_POST['address'];
                
                $query="UPDATE student SET fname='$fname',lname='$lname',gender='$gender',mobile='$mobile' ,dept='$dept',address='$address' WHERE id='$id'";
              
                $conn1=mysqli_query($conn,$query);
                if($conn1)
                {
                    echo"Update successful";
                }
                else{
                        echo "update failed";
                }  


            }
            //student record delete file
            if($_POST['custom_method']=='delete_student')
            {
               $id=$_POST['id'];
               $query="DELETE FROM student WHERE id='$id'";
               $connect=mysqli_query($conn,$query);
               if($connect)
               {
                echo  "deleted successful";
               }
            }

            if($_POST['custom_method']=='change_pwd')
            {
              $opwd=$_POST['opwd'];
              $npwd=$_POST['npwd'];
              $email=$_SESSION['email'];
              $username=$_SESSION['login'];
              $cpwd=$_POST['cpwd'];
              $query="SELECT*FROM login WHERE  password='$opwd' and username='$username'";
              $connect=mysqli_query($conn,$query);
              $row=mysqli_fetch_array($connect);
              //print_r($row);
              if($row>0)
              {
                $query1="UPDATE login  SET password='$npwd',cpassword='$cpwd' WHERE email='$email'";
                $connect1=mysqli_query($conn,$query1);
                echo"password changed";
                $_SESSION['msg1']="password changed";
              }
              else{
                echo "Old password not match";
                $_SESSION['msg1']="Old Password not match !!";
              }

            }
            if($_POST['custom_method']=='select_state')
            {
              $countryid=$_POST['countryid'];
              $query="SELECT*FROM state WHERE countryid='$countryid'";
              $connect=mysqli_query($conn,$query);
              
             ?>
             <option value='' selected disabled>--select state--</option>
             <?php
                 while($row=mysqli_fetch_assoc($connect))
                 {
             ?>
               <option value="<?=$row['id'];?>"><?=$row['statename'];?> </option> 
             <?php    
                 }
       
            
            }
            if($_POST['custom_method']=='select_state_edit')
            {

                
                $countryid=$_POST['countryid'];
                $query="SELECT*FROM state WHERE countryid='$countryid'";
                $connect=mysqli_query($conn,$query);
                $row=mysqli_fetch_all($connect, MYSQLI_ASSOC);
                if($row)
                {
                    echo json_encode($row);
                }
                else
                {
                    echo"failed";
                }
                   

            }
           
 ?>