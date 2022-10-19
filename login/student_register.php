<?php session_start();
 include("module.php");?>
<html>
    <head>
        <title>Student Register Page </title>  
        <style>
            input[type=text], input[type=password] ,input[type=email],input[type=number],textarea
                {
                    width: 150%;
                    padding: 12px 20px;
                    margin: 8px 0   ;
                    border: 2px solid #ccc;
                    
                }
                button[name=submit]
                {
                    background-color: blue;
                    width: 40%;
                    color: white;
                    padding: 10px 10px;
                    cursor: pointer;
                    font-size: large;
                    margin-right:5px;
                    border:none;
                   
                }
                button[name=Reset]
                {
                    background-color: red;
                    width:40%;
                    color: white;
                    padding: 10px 10px;
                    cursor: pointer;
                    font-size: large;
                    margin-left:5px;
                    border:none;
                   
                }


         </style>
   
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   


</head>
  <body>
     <div style="    margin-bottom: 65px;">
        <form id="form">
            <center>
            <a href="studentdetails.php"  style="margin-left: 924px; font-size: 19px;font-weight: bold;">Back</a>
            
                
                  <h3> Student Register </h3>
                <table>
                    <tr><td>Firstname:</td><td><input type="text" id="fname" name="fname" value=""onkeypress="return /[a-z ]/i.test(event.key)"></td></tr>
                    <tr><td>Lastname:</td><td><input type="text" id="lname" name="lname" value=""onkeypress="return /[a-z ]/i.test(event.key)"></td></tr>
                    <tr><td>Email:</td><td><input type="email" id="email" name="email" value=""></td></tr>
                    <tr><td>Mobile:</td><td><input type="number" id="mobile" name="mobile" value="" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');" ></td></tr>
                    <tr><td>Gender:</td><td><input type="radio" name="Gender" id="Male" value="Male">Male
						<input type="radio" name="Gender"id="Female" value="Female">Female<tr>  
                    <tr><td>Department:</td><td><input type="text" id="dept" name="dept" value=""></td></tr>                  
                    <tr><td>Address</td><td><textarea  id="address" name="address" value=""></textarea></td></tr>
                    <tr><td></td><td><center><button name="submit" id="submit" value="Submit">submit</button><button name="Reset" value="Reset">Reset</button></td>
                    
                </table>
            </center>
        </form>
     </div>

     <script
                    src="https://code.jquery.com/jquery-3.6.0.js"
                    >
        </script>
       <script>
       $("#submit").click(function(e)
       {
        e.preventDefault();
                var fname=$("#fname").val();
                var lname=$("#lname").val();
                var mobile=$("#mobile").val();
                var email=$("#email").val();
                var dept=$("#dept").val();
                var role=$("#role").val();
                var address=$("#address").val();
         
         var formdata=new FormData($("#form")[0]);
         formdata.append("custom_method","student_register");

         if(fname=="" && lname==""&& mobile=="" && email=="" && dept=="" && role=="" && address=="")
               {
                alert("Please fill the all data");
                return false;
               }
               
                if(fname=="")
                {
                    alert("enter first name pls fill out");
                    $("#fname").focus();
                    return false
                }
                var filter=/^[a-zA-z]{3,10}/;
                if(filter.test(fname))
                {

                }
                else
                {
                document.getElementById('fname').focus();
                alert("enter valid name  minmum 3 chracter");
                return false;
                }
               
                if(lname=="")
                {
                    alert("enter lastname  pls  fill out");
                    return false;
                }
               
                if(email=='')
                {
                    alert("Enter fill Email id");
                    return false;
                }
                var filter = /^([a-zA-Z0-9_\.\-]{4,10})+\@(([a-zA-Z0-9\-]{4,8})+\.)+([a-zA-Z0-9]{2,4})+$/;
                if(filter.test(email))
                {  }
                else{
                        alert(" enter the invaild mail")
                        document.getElementById('email').focus();
                        return false;
                     }
               if(mobile=="")
                {
                    alert("Enter mobile number pls fill out");
                }
                
                 var filter= /^[0-9]{10}$/;
                 if(filter.test(mobile))
                 {}
                 else
                 {
                    alert("Invalid mobile number");
                    return false;
                 }
               
               
                if(dept=="")
                {
                    alert("enter dept pls fill out");
                    return false ;
                }
                var filter=/^[a-zA-z]{3,15}/;
                if(filter.test(dept))
                {

                }
                else
                {
                document.getElementById('dept').focus();
                alert("enter valid department  minmum 3 chracter");
                return false;
                }
            
                
                if(role=="")
                {
                    alert("enter Destination role pls fill out");
                    return false;
                }
                var filter=/^[a-zA-z]{3,15}/;
                if(filter.test(role))
                {

                }
                else
                {
                document.getElementById('role').focus();
                alert("enter valid name  minmum 3 chracter");
                return false;
                }
                if(address=="")
                {
                    alert("enter address  pls fill out");
                    return false;
                }
                var filter=/^[a-zA-z]{5,50}/;
                if(filter.test(address))
                {

                }
                else
                {
                document.getElementById('address').focus();
                alert("enter valid address minmum 5chracter");
                return false;
                }
                
         
         
         $.ajax({
                
                        type: "POST",
                        url: "sql.php",
                        data: formdata,
                        processData:false,
                        contentType: false,
                        cache: false,
                        success: function(result) 
                        {
                            if(result=="register successful")
                            {
                            alert(result);
                           window.location.href="studentdetails.php"
                           return;
                            }
                            alert(result);
                            location.reload();
                        },
                        error: function(xhr, status, error) {
                                console.error(xhr);
                            }


         });
 
       });




    </script>

   </body>
</html>