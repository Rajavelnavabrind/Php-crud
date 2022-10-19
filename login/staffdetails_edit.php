<!-- <option value="January"<?=$row['month'] == 'January' ? ' selected="selected"' : '';?>>January</option> -->
<?php session_start();
 include("module.php");?>
<html>
    <head>
        <title>Staff Register Page </title>  
        <style>
            input[type=text], input[type=password] ,input[type=email],input[type=number],textarea
                {
                    width: 150%;
                    padding: 12px 20px;
                    margin: 8px 0   ;
                    border: 2px solid #ccc;
                    
                }
                button[name=update]
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
    </head>
  <body>
    <?php
      include("db.php");
      $id=$_GET['id']; 
      $query= "SELECT*FROM staff WHERE id='$id'  ";
      $connect=mysqli_query($conn,$query);
      $row=mysqli_fetch_assoc($connect);
     $country=$row['country'];
     $state=$row['state'];
     //   echo $id;
     //   print_r($row);
    ?>
     <div style="    margin-bottom: 65px;">
        <form id="form">
            <center>
            <a href="staffdetails.php"  style="margin-left: 924px; font-size: 19px;font-weight: bold;">Back</a>
                  <h3> Staff Register </h3>
                <table>
                    <tr><td><input type="hidden" name="id" value=<?=$row['id'];?>></td></tr>
                    <tr><td>Firstname:</td><td><input type="text" id="fname" name="fname" value="<?=$row['fname'];?>"></td></tr>
                    <tr><td>Lastname:</td><td><input type="text" id="lname" name="lname" value="<?=$row['lname'];?>"></td></tr>
                    <tr><td>Email:</td><td><input type="email" id="email" name="email" value="<?=$row['email'];?>"></td></tr>
                    <tr><td>Mobile:</td><td><input type="number" id="mobile" name="mobile" value="<?=$row['mobile'];?>"></td></tr>
                    <tr><td>country</td>
                             <td><select id="country" name="country"style='padding: 10px 10px;font-size: 17px;margin-top: 5px; ' onchange="staffstateedit(this.value,0,0)">
                                <option selected disabled>---select---</option>
                                <?php 
                               
                                include("db.php");
                                $result = mysqli_query($conn,"SELECT * FROM country");
                                while($rowc= mysqli_fetch_array($result)) {
                                    $cid=$rowc['id']; //country id
                                 
                                ?>
                                <option value="<?php echo $cid;?>"<?php if($country==$cid){echo "selected";}?>><?php echo $rowc["name"];?></option>
                                <?php
                                }
                                ?> 
                            </select></td></tr>
                  <tr><td>state</td>
                         <td><select id="state"name="state"style='padding: 10px 10px;font-size: 17px;margin-top: 5px;'>
                                <option selected>---select---</option>
                                <script>
                                    function  staffstateedit(countryid,data,state)
                                            {
                                                alert(countryid);
                                                            var  state="<?php echo $row['state'];?>"
                                                            var custom_method="select_state_edit";
                                                            alert(state);
                                                $.ajax({
                                                            type: "POST",
                                                            url: "sql.php",
                                                            data: {custom_method,countryid},
                                                            cache: false,
                                                            success: function(result) 
                                                            {
                                                            // alert(result);
                                                                var data=JSON.parse(result)
                                                                console.log(data);

                                                                $("#state").empty();

                                                                    var ddlCustomers = $("#state"); 
                                                                    $(data).each(function ()
                                                                    {

                                                                    var option = $("<option/>");

                                                                    //Set countryId in Value part.
                                                                    option.val(this.countryid);

                                                                    //Set state Name in Text part.
                                                                    option.html(this.statename);

                                                                    //Add the Option element to DropDownList.
                                                                    ddlCustomers.append(option);
                                                                    
                                                                    return;
                                                                    });
                                                                if(data==1) 
                                                                {
                                                                $("#state").val(state);
                                                                }
                                                            },
                                                            error: function(xhr, status, error) {
                                                                    console.error(xhr);
                                                                }

                                                        


                                                });
                                            }
                                    </script>
                             </select></td></tr>
                    <tr><td>Department:</td><td><input type="text" id="dept" name="dept" value="<?=$row['dept'];?>"></td></tr>
                    <tr><td>Destination Role:</td><td><input type="text" id="role" name="role" value="<?=$row['role'];?>"></td></tr>
                    <tr><td>Address</td><td><textarea  id="address" name="address"><?=$row['address'];?></textarea></td></tr>
                    <tr><td></td><td><center><button name="update" id="update" value="update">Update</button><button name="Reset" value="Reset">Reset</button></td>
                    
                </table>
            </center>
        </form>
     </div>

     <script
                    src="https://code.jquery.com/jquery-3.6.0.js"
                    >
        </script>
       <script>
        
       $("#update").click(function(e)
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
         formdata.append("custom_method","staffdetails_edit");

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
                            if(result=="update successful")
                            {
                            alert(result);
                            window.location.href="staffdetails.php"
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