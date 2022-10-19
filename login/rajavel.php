<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    #table,th,td{

        border:1px solid black;
        border-collapse: collapse;
    }
   
    </style>
    <button id="tableidd">table</button>
    <button id="formid">form</button>
<div class="inside">
             <form id=form  action="#">
                <div>
                <center>
                        <table>
                            <tr><td></td><td><center><h2 style="color:white;"> Login  Page </h2></center></td></tr>
                            <tr><td style=" color: black;"> Username: </td><td><input type="text" id="username" name="username" value=""></td></tr>
                            <tr><td style=" color: black;">Password: </td><td><input type="password" id="password" name="password" value=""></td></tr>
                            <tr><td style="color:black; ">Role</td>
                                <td><select  class="roleid"id="role" name="role" style='padding: 10px 10px;font-size: 17px;margin-top: 5px;'>
                                <option  selected disabled value="">------Select------</option>
                                <option  value="admin">Admin</option>
                                <option value="staff">Staff</option>
                                <option value="student">Student</option>
                                </select></td>  
                             </tr>
                             <tr><td>country</td>
                             <td><select id="country" name="country"style='padding: 10px 10px;font-size: 17px;margin-top: 5px;'>
                                <option>---select---</option>
                                <?php include("db.php");
                                $result = mysqli_query($conn,"SELECT * FROM country");
                                while($row = mysqli_fetch_array($result)) {
                                ?>
                                <option value="<?php echo $row['id'];?>"><?php echo $row["name"];?></option>
                                <?php
                                }
                                ?>
                                
                             </select></td></tr>
                             <tr><td>state</td>
                             <td><select id="state"name="state"style='padding: 10px 10px;font-size: 17px;margin-top: 5px;'>
                                <!-- <option>---select---</option> -->
                             </select></td></tr>
                            <tr><td></td><td><button name="login" id="login" value="login" >Login</button><button type="reset"  value="reset" >reset</button><br>
                        
                            <p style="color:white;">Not an user ?<a href="register.php" style="color:black;"> Registration</a><p>
            
                        </table>
                  </center>
                </div>
             </form>
             </div>
  <div id=tableid>
    <table id=table>
        <tr>
        <th>id</th>
        <th>username</th>
        <th>password</th>
        <th>role</th>
       </tr>
    <tbody id=tbody> </tbody>
    </table>
</div>

<script
                    src="https://code.jquery.com/jquery-3.6.0.js">
             </script>
             <script>
                   $(document).ready(function($) 
                     {
                        $("#tableid").hide();

                                var custom_method="getdata";
                                
                                
                                    $.ajax({ 
                                            type: "GET",
                                            url: "rajavel_sql.php",
                                            data: { custom_method },
                                         
                                            dataType: "json",
                                            cache: false,
                                            success: function(result) {
                                            
                                                //console.log(result);
                                              
                                              //  var data=JSON.parse(result);
                                                console.log(result);
                                               
                                                $.each(result, function (i, item) 
                                                {
                                                    table +='<tr><td>'+item.id+'</td><td>'+item.username+'</td><td>' +item.password+'</td><td>'+item.role+'</td><td><i class="fa fa-edit" style="color:blue;" title="edit" onclick="editFunction(\''+item.username+'\',\''+item.password+'\',\''+item.role+'\',\''+item.country+'\',\''+item.state+'\')"</td></tr>';
    
                                                });
                                                $("#tbody").append(table);
                                                },
                                                error: function(xhr, status, error) {
                                                    console.error(xhr);
                                                }
                                        });
                                

                    $('#country').on('change', function () {
                    var country_id = this.value;  
                    alert(country_id);
                    $.ajax({
         
                    url: "rajavel_sql.php",
                    type: "POST",
                    data: {
                    country_id: country_id
                    },
                    cache: false,
                    success: function(result){
                    $("#state").html(result);
                   // $('#city-dropdown').html('<option value="">Select State First</option>'); 
                    
                
                }

                    });
                    

                    });      
                          });
                function editFunction(username,password,role,country,state)
                {
                    alert(role);
                    $("#username").val(username);
                    $("#role").val(role);
                    $("#password").val(password);
                    $("#country").val(country);
                    $("#state").val(state);
                     console.log(country);
                     console.log(state);
                    $("#tableid").hide();
                   $(".inside").show();   
                }


       $("#login").click(function(){

                                        var username=$("#username").val();
                                        var password=$("#password").val();
                                        var role=$("#role").val();
                                        //var role2 = $('select#role option:selected').val();
                                        console.log(role);
                                        console.log(username);
                                       
                                    var data=$("#form").serialize() +  "&parameter1=value1&parameter2=value2";//append data
                                    
                                    if(username=='')
                                        {
                                            alert("username is  emplty ");
                                            return  false;
                                        }
                                         
                                    if(password=='')
                                        {
                                            alert("password is  emplty ");
                                            return  false;
                                        }
                                         
                                    if(role==null )
                                        {
                                           alert("role is empty");
                                            return  false;
                                        }
                                   
                                    
                                    $.ajax({

                                            type: "POST",
                                            url: "rajavel_sql.php",
                                            data:data,
                                         
                                          //  dataType: "json",
                                            cache: false,
                                            success: function(result) {
                                            
                                               alert(result);
                                                console.log(result);
                                               location.reload();
                                               
                                                },
                                                error: function(xhr, status, error) {
                                                    console.error(xhr);
                                                }

                    });


                    });
$("#tableidd").click(function(){
 $(".inside").hide();
 $("#tableid").show();
});
$("#formid").click(function(){
 $("#tableid").hide();
 $(".inside").show();
 
});


 </script>
 