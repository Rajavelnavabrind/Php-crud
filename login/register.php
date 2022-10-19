
<html>

    <head>
        <title>Registration Page </title>
        
    </head>
<body>

    <style>
                  input[type=text], input[type=password] ,input[type=email],input[type=number]
                {
                    width: 150%;
                    padding: 12px 20px;
                    margin: 8px 0;
                    border: 1px solid #ccc;
                    
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
    <div class="form">
      <form name="form"id="form">
         <center>
                      <h3> Registration Page </h3> 
                 <table>
                        <tr><td>Firstname:</td><td><input type="text" id="fname" name="fname" value=""></td></tr>
                        <tr><td><label id="efname" style="color: red;"></label></td></tr>
                        <tr><td>Lastname:  </td><td><input type="text" id="lname" name="lname" value=""></td></tr>
                        <tr><td>Username: </td><td><input type="text" id="username" name="username" value=""></td></tr>
                        <tr><td>Email : </td><td><input type="email" id="email" name="email" value=""></td></tr>
                        <tr><td>Password  :</td><td><input type="password" id="password" name="password" value=""></td></tr>
                        <tr><td>Conform Password :</td><td><input type="password" id="cpassword" name="cpassword" value=""></td></tr>
                        <tr><td>Mobile Number :</td><td><input type="number" id="mobile" name="mobile" value=""></td></tr>
                        <tr><td style="color:black;">Role</td>
                                <td><select id="role" name="role" style='padding: 10px 10px;font-size: 17px;margin-top: 5px;'>
                                <option>------Select------</option>
                                <option name="staff" value="staff">Staff</option>
                                <option name="student" value="student">Student</option>
                                </select></td>
                             </tr>
                     
                        <div>
                          <tr><td></td><td><center><button name="submit" id="submit" value="Submit">submit</button><button name="Reset" value="Reset">Reset</button><br><br><a href="login.php"> Already register account?</a></center></td></tr>                
                       </div>
                      
                    </table>
            </center>
      </form>
    </div>
        <script
                    src="https://code.jquery.com/jquery-3.6.0.js"
                    integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
                    crossorigin="anonymous">
        </script>
        <script>
              $("#submit").click(function(e)
              {
                 e.preventDefault();
                var fname=$("#fname").val();
                var lname=$("#lname").val();
                var user=$("#username").val();
                var email=$("#email").val();
                var password=$("#password").val();
                var cpassword=$("#cpassword").val();
                var mobile=$("#mobile").val();
                var formdata=new FormData($("#form")[0]);
                formdata.append('custom_method','insert');

               if(fname=="" && lname==""&& user=="" && email=="" && password=="" && cpassword=="")
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
                if(user=="")
                {
                    alert("enter username pls fill out");
                    return false
                }
                var filter=/^[a-zA-z0-9]{5,10}/;
                if(filter.test(user))
                {

                }
                else
                {
                document.getElementById('username').focus();
                alert("username minimum 5 character")
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
               
                if(password=="")
                {
                    alert("enter password pls fill out");
                    return false ;
                }
                var filter= /^[A-Za-z0-9]{5,50}$/;
                if(filter.test(password))
                {   }
                else
                {
                    alert("Enter valid password Minumum 5 character and number")
                    return false;
                }
                
                if(cpassword=="")
                {
                    alert("enter conform password pls fill out");
                    return false;
                }
                if($("#password").val() != $("#cpassword").val())
                {
                    alert("password mismatch");
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
                
           
                 $.ajax({
                        type: "POST",
                        url: "sql.php",
                        data: formdata,
                        processData:false,
                        contentType: false,
                        cache: false,
                        success: function(result) {
                            if(result == ' Account Registered Successfully') 
                            {
                                alert("Registration success");
                                window.location.href="login.php";
                                return;
                            }
                                alert(result);
                               // location.reload();
                                            
                            },
                            error: function(xhr, status, error) {
                                console.error(xhr);
                            }
                     });
             });


              


         </script>
</body>
</html>
