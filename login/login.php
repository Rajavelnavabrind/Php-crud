<html>
        <head>
                <title> Login </title>
        </head>
     <body>
       
        <style>
            div
            {

                font-weight: bold;                                            ;
                color:white;
                width:80%;
                margin-left:100px;
                margin-top:100px;
                
                
            }
            td{
                font-weight: bold;
                color:black;
                font-size:large;
            }
            body 
             {
                background-image: url("login.jpeg");
                background-size: cover;
                height: 100%;
            }
                input[type=text], input[type=password] 
                {
                    width: 150%;
                    padding: 14px 50px;
                    margin: 8px 0;
                    border: 1px solid #ccc;
                    
                }
                button[name=login]
                {
                    background-color: blue;
                    color: white;
                    padding: 14px 20px;
                    margin-right:3px;  
                    cursor: pointer;
                    font-size: large;
                    border:none;
                    width: 40%;
                }
                button[type=reset]
                {
                    background-color: red;
                    color: white;
                    padding: 14px 20px;
                    margin: 8px 0;
                    cursor: pointer;
                    width:40%;
                    font-size: large;
                    border:none;
                    margin-left:3px
                }
               
              

            </style>
        <div class="inside">
             <form id=form  action="#">
                <div>
                <center>
                        <table>
                            <tr><td></td><td><center><h2 style="color:white;"> Login  Page </h2></center></td></tr>
                            <tr><td style=" color: #bdd7d7;"> Username: </td><td><input type="text" id="username" name="username" value=""></td></tr>
                            <tr><td style=" color: #bdd7d7;">Password: </td><td><input type="password" id="password" name="password" value=""></td></tr>
                            <tr><td style="color:#bdd7d7;">Role</td>
                                <td><select id="role" name="role" style='padding: 10px 10px;font-size: 17px;margin-top: 5px;'>
                                <option>------Select------</option>
                                <option name="admin" value="admin">Admin</option>
                                <option name="staff" value="staff">Staff</option>
                                <option name="student" value="student">Student</option>
                                </select></td>
                             </tr>
                            <tr><td></td><td><button name="login" id="login" value="login" >Login</button><button type="reset"  value="reset" >reset</button><br>
                        
                            <p style="color:white;">Not an user ?<a href="register.php" style="color:yellow"> Registration</a><p>
            
                        </table>
                  </center>
                </div>
             </form>
             </div>
            
     </body>
            <script
                    src="https://code.jquery.com/jquery-3.6.0.js"
                    integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
                    crossorigin="anonymous">
             </script>
        <script>
            // function myfunc()
            // {
            //     alert ("hi rajavel");
                
            // }
         

              $("#login").click(function(e)
              { 
                 e.preventDefault();
                 var username=$("#username").val();
                 var password=$("#password").val();
               
                 if(username=='' || password == '')
                  {
                        alert("Please fill your username and password")
                        return false;
                  }
                var formdata=new FormData($("#form")[0]);
                formdata.append('custom_method','select');
               
                $.ajax({ 
                        type: "POST",
                        url: "sql.php",
                        data: formdata,
                        processData:false,
                        contentType: false,
                        cache: false,
                        success: function(result) {
                        if(result == 'Logged in successfully')  
                        {
                            alert(result);
                            window.location.href="demo.php";
                            return;
                        }
                        // console.log(result);
                         alert(result);
                        // location.reload();
                                            
                            },
                            error: function(xhr, status, error) {
                                console.error(xhr);
                            }
                     });
             }); 
             
         </script>
</html>