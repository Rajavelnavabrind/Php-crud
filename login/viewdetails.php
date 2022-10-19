<?php session_start();
include("module.php");?>
<html>
    <head> <title> View details </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
      <style>
                table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 20%;
            }

            td, th {
            border: 5px solid #dddddd;
            text-align: left;
            padding: 8px;
            }

            tr:nth-child(even) {
            background-color: #dddddd;
            }

        </style>
    
     </head>
   <body>
 
        <?php 
                require('db.php');
                $id=$_GET['id'];
                $query="SELECT*FROM staff WHERE id=$id";
                $connect=mysqli_query($conn,$query);
                $row=mysqli_fetch_assoc($connect);
                
            ?>
        <div style="margin-left: 256px;"> 
            <a href='staffdetails.php'>Go back</a>   
            <h2> View Details </h2>
         <div>
                <table>
                        <tr><th>S.no</th><td><?=$row['id'];?></td></tr>
                        <tr><th>Firstname</th><td><?=$row['fname'];?></td></tr>
                        <tr><th>Lastname</th><td><?=$row['lname'];?></td></tr>
                        <tr><th>Email</th><td><?=$row['email'];?></td></tr>
                        <tr><th>Mobile</th><td><?=$row['mobile'];?></td></tr>
                        <tr><th>Dept</th><td><?=$row['dept'];?></td></tr>
                        <tr><th>Role</th><td><?=$row['role'];?></td></tr>
                        <tr><th>Address</th><td><?=$row['address'];?></td></tr>  
                </table>
        </div>
     </div>
       
      </html>