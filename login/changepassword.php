<?php include("module.php");
session_start();?>
<html>
    <head> 
            <title> Change password </title>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>

                    input[type=password] 
                {
                    width: 150%;
                    padding: 14px 50px;
                    margin: 8px 0;
                    border: 1px solid #ccc;
                    
                }
                input[type=submit]
                {
                    background-color: blue;
                    color: white;
                    padding: 14px 20px;
                    margin-right:3px;  
                    cursor: pointer;
                    font-size: large;
                    border:none;
                    width: 100%;
                }

            </style>
   </head>
    
    <body>
        <div>
                <h3 style='text-align:center;'> Change your  password</h3> 
                <p style="color:red; margin-left: 43%;"><?php echo $_SESSION['msg1'];?><?php echo $_SESSION['msg1']="";?></p>
                
                <form name="chngpwd" id="chngpwd"  onSubmit="return valid();">
                       <a href="demo.php" style="margin-left:88%;">Go back</a>
                        <table align="center">
                                <tr height="50">
                                    <td>Old Password :</td>
                                    <td><input type="password" name="opwd" id="opwd"></td>
                                </tr>
                            
                                <tr height="50">
                                    <td>New Passowrd :</td>
                                    <td><input type="password" name="npwd" id="npwd"></td>
                                </tr>
                                <tr height="50">
                                    <td>Confirm Password :</td>
                                    <td><input type="password" name="cpwd" id="cpwd"></td>
                                </tr>
                                <tr>
                                    
                                    <td><input type="submit" name="Submit" id="submit" value="Change Passowrd" /></td>
                                </tr>
                                
                        </table>
                </form>
            </div>
           
    </body>
    <script
                    src="https://code.jquery.com/jquery-3.6.0.js">
             </script>
             <script>

              $("#submit").click(function(e)
              { 
                 e.preventDefault();
                 var opwd=$("#opwd").val();
                 var npwd=$("#npwd").val();
                 var cpwd=$("#cpwd").val();
               

                var formdata=new FormData($("#chngpwd")[0]);
                formdata.append('custom_method','change_pwd');
               
                $.ajax({ 
                        type: "POST",
                        url: "sql.php",
                        data: formdata,
                        processData:false,
                        contentType: false,
                        cache: false,
                        success: function(result) {
                        if(result == "password changed")  
                        {
                            alert(result);
                            location.reload();
                            return;
                        }
                        // console.log(result);
                         alert(result);
                         location.reload();
                                            
                            },
                            error: function(xhr, status, error) {
                                console.error(xhr);
                            }
                     });
             }); 


                </script>
        
</html>