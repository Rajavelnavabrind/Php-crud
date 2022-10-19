<?php session_start();
include("module.php");?>
<style>
    table, th, td {
    border: 3px solid black;
    border-collapse: collapse;
    text-align: center;
    padding: 20px;
    background-color:white;
    margin-left:90px;
    margin-top:50px;
    }
    
    body{
        background-color:#92e3ed;;
    }
    td:nth-child(even){
        background-color: #e6f7e9;
    }
    td:nth-child(odd){
        background-color: #e7e4e4;
    }
    .link{
        margin-right: 44px;
        float: right;
        margin-bottom: 34px;
        margin-top: 13px;
        font-weight:bold;
        font-size:25px;
    
    }
    input{
    padding: 5px 55px;
    text-align: center;
    margin-top: 27px;
    }
    .edit
    {
        padding: 10px 20px;
        background-color: #2164c9;
        border: none;
        color: white;
    }
    #student{
        color:red;
    }

</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script>
    $(document).ready(function()
    {
     $("#myinput").on("keyup", function()
     {
        var value = $(this).val().toLowerCase();
        $("#mytable tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
     });
    });
    function myfunction(id)
    {
     if(confirm("are you sure delete"))
       { 
         var custom_method="delete_student"
         $.ajax({
              type:"POST",
              url: "sql.php",
              data:{id:id,
                custom_method: custom_method
            },
            cache: false,
                  success: function(result) {
                    if(result=="deleted success ful")
                    { alert(result);
                     window.location.href="studentdetails.php"
                     return;
                    }
                    location.reload();
                  },
                  error: function(xhr, status, error) {
                     console.error(xhr);
                  }      
 
         });
      }

    };
  
 </script>

<?php
    include("db.php");
  

        $query= "SELECT*FROM student";
        $connect=mysqli_query($conn,$query);
        //$row=mysqli_fetch_assoc($connect);
        echo"<body style='overflow-x:hidden;'>";  
        echo"<div style='margin-left: 240px; margin-bottom: 100px;'>";
        echo"<center><input type='text' placeholder='search' id='myinput'></center>";
        echo"<div class='link'>";
        echo"<a href='student_register.php'>+ Add Student details</a>";
        echo"</div>";
        echo"<div  style='overflow-x: scroll;overflow-y: scroll;width:100%;height: 50%;'>";
        echo'<table class="staff" style="margin-left: 35px; margin-bottom: 231px;">';
       
        echo"<tr>";
        echo"<th> S.no </th>";
        echo"<th>firstname</th>";
        echo"<th> lastname </th>";
        echo"<th> email </th>";
        echo"<th> mobile </th>";
        echo"<th> View</th>";
        echo"<th> Edit </th>";
        echo"<th> Delete </th>";
        echo"</tr>";
        
    
    while($row=mysqli_fetch_assoc($connect))
    {
    
        $id=$row['id'];
        echo"<tbody id='mytable'>";
        echo"<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['fname']."</td>";
        echo "<td>" . $row['lname'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['mobile'] . "</td>";
        
        echo"<td><a href='viewdetails_stud.php?id=$id' class='fa'>&#xf06e;</a></td>";
        echo "<td> <a href='studentdetails_edit.php?id=$id'class='fa'>&#xf044;</td>";
        echo "<td> <i class='fa fa-trash-o' style='color:red;'title='delete' onclick='myfunction(".$id.")'></i></td>";
        echo"</tr>";
        echo"</tbody>";
        
    }
    
   
    echo"</table>";
    echo"</div>";
    echo"</div>";
    echo"</boby>";

    // if($_SESSION['role']=='student')
    // {
    //      $id=$_SESSION['userid'];
    //     $query= "SELECT*FROM student WHERE id='$id'";
    //     $connect=mysqli_query($conn,$query);
    //     //$row=mysqli_fetch_assoc($connect);
    //     echo"<body style='overflow: auto;margin-bottom: 184px;'>";  
    //     echo"<center><input type='text' placeholder='search' id='myinput'></center>";
    //     echo"<div class='link'>";
    //     echo"<a href='student_register.php'>+ Add Student details</a>";
    //     echo"</div>";
    //     echo'<table class="staff" style="margin-left: 35px; margin-bottom: 231px;">';
    //     echo"<div>";
    //     echo"<tr>";
    //     echo"<th> id </th>";
    //     echo"<th>firstname</th>";
    //     echo"<th> lastname </th>";
    //     echo"<th> email </th>";
    //     echo"<th> mobile </th>";
    //     echo"<th>  Gender </th>";
    //     echo"<th> Department </th>";
    //     echo"<th> address </th>";
    //     echo"<th> Edit </th>";
    //     echo"<th> Delete </th>";
    //     echo"</tr>";
        
    
    //     $row=mysqli_fetch_assoc($connect);
        
        
    //         $id=$row['id'];
    //         echo"<tbody id='mytable'>";
    //         echo"<tr>";
    //         echo "<td>" . $row['id'] . "</td>";
    //         echo "<td>" . $row['fname']."</td>";
    //         echo "<td>" . $row['lname'] . "</td>";
    //         echo "<td>" . $row['email'] . "</td>";
    //         echo "<td>" . $row['mobile'] . "</td>";
    //         echo "<td>" . $row['gender'] . "</td>";
    //         echo "<td>" . $row['dept'] . "</td>";
    //         echo "<td>" . $row['address'] . "</td>";
    //         echo "<td> <a href='studentdetails_edit.php?id=$id'>Edit</td>";
    //         echo "<td> <i class='fa fa-times' style='color:red;'title='delete' onclick='myfunction(".$id.")'></i></td>";
    //         echo"</tr>";
    //         echo"</tbody>";
            
        
        
    //     echo"</div>";
    //     echo"</table>";
    //     echo"</boby>";

    // }
?>