
<!DOCTYPE html>
<html lang="en">
   <head>
      <title>CRUD </title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
      <!-- edit and delete icon -->
      <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
   </head>
   <body>
      <nav class="navbar navbar-expand-sm bg-primary navbar-dark fixed-top ">
         <ul class="navbar-nav ">
            <li class="nav-item active" id="li_crud">
               <a class="nav-link" href="#" id="nav-crud">Registration</a>
            </li>
            <li class="nav-item" id="li_about">
               <a class="nav-link" href="#" id="nav-about">  Details</a>
            </li>
         </ul>
      </nav>
      <br></br>
      <br></br>
      <div class="container ">
         <div class="row " >
            <div class="col-md-12 crud">
               <h2>CUSTOMER DATA</h2>
            </div>
            <div class="col-md-12 text-center  rightcrud"  >
               <h2>TABLE</h2>
            </div>
         </div>
         <div class="row " >
            <div class="col-md-12 crud">
               <form action="#" enctype="application/x-www-form-urlencoded" id="form" name="form">
                  <!--username start -->
                  <div class="form-group" id="divname">
                     <label for="name">First Name:<span>( at least 3 characters)</span></label>   
                     <input type="text box" class="form-control" id="name" placeholder="Enter first name" name="name" onchange="myfunction(value,'firstname')" minlength="3"  onkeypress="return/[a-zA-Z ]/.test(event.key)" >
                     <label id="error_name" style="color:red;"></label>
                  </div>
                  <!--username end -->
                  <div class="form-group" id="namediv">
                     <label for="lname">Last Name:</label>
                     <input type="text" class="form-control" id="lname" placeholder="Enter  last name" name="lname" onkeypress="return /[a-zA-Z ]/.test(event.key)" >
                     <label id="error_lname" style="color:red;"></label>
                  </div>
                  <div class="form-group" id="phonediv">
                     <label for="phone" >Phone Number:</label>
                     <input type="number" class="form-control" id="phone" placeholder="Enter phone number" name="phone" onchange="myfunction(value,'phone')" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');" >
                     <label id="error_phone" style= "color:red;"></label>
                  </div>
                  <div class="form-group "id="iddiv">
                     <label for="id">Id:</label>
                     <input class="form-control" type="text" id="id" placeholder="Enter the Id value" name="id"> 
                     </label>
                  </div>
                  <div class="form-group">
                     <label for="exampleInputEmail1">Email address</label>
                     <input type="email" class="form-control" id="exampleInputEmail1"  placeholder="Enter email" name="email"onchange="myfunction(value,'email')">
                     <small id="emailHelp" class="form-text text-muted"> Email patterrn:rajavel@gmail.com</small>
                     <label id="error_email" style="color: red;"></label>
                  </div>
                  <div class="form-group">
                     <label for="exampleInputPassword1">Password</label>
                     <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                     <small >Atleast FirstOne Uppercase and  min 5 character Smallcase then one special char then one Number pattern: Abcdef@1</small><br>
                        <label id="error_password1" style="color: red;"  ></label>
                        <label id ="error_password2" style="color: green;"></label>  
                  </div>
                  <div class="form-group">
                     <label for="exampleInputPassword1">Confirm Password</label>
                     <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password"  name="cpassword">
                     <label id="error_password3" style="color: red;" ></label><br>
                     <input type="checkbox" onclick="myFunctionpassword()">Show Password
                  </div>
                  <div>
                     
                        <div class="form-group " id="dobdiv" >
                           <label for="dob" >Date of Birth:</label>
                           <input type="date" class="form-control" id="dob"  name="dob" >
                           <label id="error_dob" style="color: red;"></label>
                        </div>
                        <div>
                           <label for="genderMale">Gender :</label>
                        </div>
                        <div class="form-group radio" id="genderid" >
                           <label class="radio-inline"><input type="radio" name="gender" id="genderMale" value="male"  > Male</label>
                           <label class="radio-inline"><input type="radio" name="gender" id="genderFemale" value="female" > Female</label>    
                        </div>
                  </div>
                  <div>
                     <label>Nationality</label>
                  <select class="form-control bfh-countries" id="nation" name="nationlity"  onchange="statefun(this.value, 0, 0)">  
                     <option selected disabled>--Select City--</option>
                     </select> 
                  </div>           
                  <div>
                     <label>State</label>
                     <select name="state" class="states form-control" id="stateId">
                     <option selected disabled>--Select state--</option>
                     </select>
                  </div>
                  <div>
                     <label>Qualification</label>
                     <div class="form-check " >
                     <label class="form-check-label col-md-1" for="check1" > 
                     <input type="checkbox" class="form-check-input checkbox" id="checkbox1" name="checkbox[0]" value="sslc" >SSLC
                     </label>
                     <label class="form-check-label col-md-1" for="check2"> 
                     <input type="checkbox" class="form-check-input checkbox" id="checkbox2" name="checkbox[1]" value="hsc" >HSC
                     </label>
                     <label class="form-check-label col-md-1" for="check3"> 
                     <input type="checkbox" class="form-check-input checkbox" id="checkbox3" name="checkbox[2]" value="UG" >UG
                     </label>
                     <label class="form-check-label col-md-1" for="check3"> 
                     <input type="checkbox" class="form-check-input checkbox" id="checkbox4" name="checkbox[3]" value="PG" >PG
                     </label>
                     </div> 
                  </div>
                  <div class="form-group">
                     <label for="address">Address:</label>
                     <textarea class="form-control" rows="5" id="address" name="address"></textarea>
                  </div>
                  <br></br>
                  <div class="custom-file">
                     <input type="file" class="custom-file-input" id="picture" name="picture">
                     <label class="custom-file-label" for="picture">Choose file...</label><br>
                     <label id ="error_file" style="color: red;"></label> 
                  </div>
                  
                  <br></br>
                  <div class="float-right">
                     <button type="button" class="btn btn-primary" id="reset">Reset</button>
                     <button type="submit" class="btn btn-primary" id="submit" >Submit</button>
                     <button type="update" class="btn btn-primary" id="update">update</button>
                     <button type="delete" class="btn btn-primary" id="delete">Delete</button>
                  </div>
                  <br></br>        
               </form>
            </div>
         </div>
         <div class="row" style="overflow-x:auto;">
            <div class="col-md-12 rightcrud" id="tablediv"  >
               <table class="table table-bordered text-center" >
                  <thead>
                     <tr>
                        <th>Id</th>
                        <th>FirstName</th>
                        <th>LastName</th>
                        <th>Phone</th>
                        <th>Dob</th>
                        <th>Email</th>
                        <th>Gender</th>
                        <th>Nationality</th>
                        <th>state</th>
                        <th>Address</th>
                        <th>Qualification</th>
                        <th >Edit </th>
                        <th> Delete</th>
                        <th>Image</th>
                        <th>Downloads</th>
                     </tr>
                  </thead>
                  <tbody id="tbody"></tbody>
               </table>
            </div>
         </div>
      </div>
      <script
         src="https://code.jquery.com/jquery-3.6.0.js"
         integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
         crossorigin="anonymous"></script>
     <script>
           


         function statefun(value, datafrom, state)
                     {
   
          var custom_method = "get_state_countryid";
            $.ajax({
              type: "GET",
               url: "restcrud.php",
               data: {
                  custom_method: custom_method,
                  countryid:value
               },
               success: function(res) {
                  
                  var data = JSON.parse(res);
                  
             
                 $("#stateId").empty();

                 var ddlCustomers = $("#stateId"); 
                 var i=0;
                  $(data).each(function ()
                  {
                     if(i==0)
                    {
                       var option = $("<option/>");
                     
                     //Set CustomerId in Value part.
                     option.val(0);
      
                     //Set Customer Name in Text part.
                     option.html("--select state--");
      
                     //Add the Option element to DropDownList.
                     ddlCustomers.append(option);
                      
                    } 
                    i++;
                   
                    var option = $("<option/>");

                     //Set countryId in Value part.
                     option.val(this.countryid);
                     
                     //Set state Name in Text part.
                     option.html(this.statename);
      
                     //Add the Option element to DropDownList.
                     ddlCustomers.append(option);

              
                  });
                  
                 alert(datafrom);
                  alert(state);
                if(datafrom == 1)
                {
                  $("#stateId").val(state); 
                }
                    
               }
                  });

                     
                     }
                  
         function myfunction(value,name)
         {
        
           var colunname=name; //db column name static method create db value
           var colunvalue=value; // input field value
          var custom_method = "user_all_data";
            $.ajax({
              type: "GET",
               url: "restcrud.php",
               data: {
                  coluname:colunname,
                  colunvalue:colunvalue,
                  custom_method: custom_method
               },
               success: function myfunction(res)
                {
                  console.log(res);
                  
                 if(res > 0)
                  {
                  //   if(confirm("hi")) {
                  //    alert("hi");
                  //    return;
                  //   }
                   alert("aleready exist")
                     $("#submit").hide(); 
                     $("#update").hide();
                          
                  }
                  else{
                    
                     $("#submit").show();
                     // $("#update").show();
                     // $("#submit").hide();
                     
                                  
                  }
                 
               }
         });
         } 
        
        //show password 
         function myFunctionpassword()
          {
           
            var a = document.getElementById("exampleInputPassword1");
            if (a.type === "password") 
            {
               a.type = "text";
            } else 
            {
               a.type = "password";
            }
            var x = document.getElementById("exampleInputPassword2");
            if (x.type === "password") 
            {
               x.type = "text";
            } else 
            {
               x.type = "password";
            }
        }
        $("#name").keyup(function()
            {
               var name=$("#name").val();
               var filter=/^([a-zA-Z]{3,50})/;
               if (!filter.test(name))
               {
                 // alert("true");
                  $("#error_name").text("Enter the Valid First name");
                   //name.focus;
               }
               else{
                 $("#error_name").text("");
               }

            });



            $("#lname").keyup(function()
            {
               var name1=$("#lname").val();
               var filter= /^[a-zA-Z]{1,50}/;
               if (!filter.test(name1))
               {
                 // alert("true");
                  $("#error_lname").text("Enter the Valid Last name");
                    name1.focus;
               }
               else{
                 $("#error_lname").text("");
               }
            

            });

         $("#phone").keyup(function()
         {
            
            var phonenumber=$("#phone").val();
            var filter= /^[0-9]{10}$/;
            if(!filter.test(phonenumber))
            {
              // alert("hi");
               $("#error_phone").text("Enter the Valid Phonenumber");
             
            }
            else
            {
               $("#error_phone").text("");
            }
            
         }
         );

        $("#exampleInputEmail1").keyup(function()
            {
               var email = $("#exampleInputEmail1").val();
               var filter = /^([a-zA-Z0-9_\.\-]{4,10})+\@(([a-zA-Z0-9\-]{4,8})+\.)+([a-zA-Z0-9]{2,4})+$/;
               if (!filter.test(email)) {
                 
                 $("#error_email").text("Enter the Valid Email Address");
                  // email.focus;
                  return false;
               } else {
                  $("#error_email").text("");
               }
            });   
            $("#exampleInputPassword1").keyup(function()
            {
               var password1=$("#exampleInputPassword1").val();
               var filter=/([A-Z].*[a-z]{5}.*[!,%,&,@,#,$,^,*,?,_,~].*[0-9])/;
               if(!filter.test(password1))
               {
                  $("#error_password1").text("Password Strength  is weak");
                  $("#error_password1").show();
                  $("#error_password2").hide(); 
                      
               }
                  
               else 
               {
                  $("#error_password2").text("Password Strenth  is strong");
                  $("#error_password1").hide();
                  $("#error_password2").show();

               }
            }
            
            );
            $("#picture").change(function()
            {
               //var file=$("#picture")[0].files;  //   total count file
                 var file=$("#picture").val();   //  file path  get jquery
               
                // file path get js
                // var file = document.getElementById('picture');
                // var filePath = file.value;
               
               // Allowing file type
               var allowedExtensions =
                 /(\.jpg|\.jpeg|\.png|\.gif)$/i;
                 console.log(allowedExtensions.test(file));//test used in boolean result
                 console.log(allowedExtensions.exec(file)); // exec used in  array result
                 
              if (!allowedExtensions.test(file))
               {
                  alert('Invalid file type');
                  $("#error_file").text("Invalid file type, only accept This format Jpg,Jpeg,Png,Gif");
                  return false;
                }
              
            }
            );

         
        
         $("#submit").click(function(e) {
             e.preventDefault();
            var name = $("#name").val();
            var lname= $("#lname").val();
            var phone = $("#phone").val();
            var email=$("#exampleInputEmail1").val();
            var password=$("#exampleInputPassword1").val();
            var cpassword=$("#exampleInputPassword2").val();
            var dob=$("#dob").val();
            var gender = document.getElementsByName('gender');
            for (var radio of gender)
            {
               if (radio.checked) {
                     var gender = radio.value;
               }
            }
            var nationlity=$("#nation").val();
            var state=$("#stateId").val();
            var address=$('#address').val();
            var file=$("#picture")[0].files;
            var custom_method = "create";
            var selected_checkboxes = new Array();
            $("#form input[type=checkbox]:checked").each(function () {
            selected_checkboxes.push(this.value);
            });

            // console.log(file);
            // return;
            var formdata=new FormData($("#form")[0]);//formdata create an object
           // formdata.append('checkboxvalues',selected_checkboxes.join(','));
            formdata.append('custom_method','create');//want add extra field this method using
            
            // console.log(formdata);
            //  return;

           //validation         
            if(name=='')
            {
               //alert('enter first name fill out');
               document.getElementById('name').focus();
               $("#error_name").text("Enter first name fill out")
               return false;
            }
            var filter=/^[a-zA-z]{3,10}/;
            if(filter.test(name))
            {

            }
            else
            {
               document.getElementById('name').focus();
               $("#error_name").text("Enter valid name ")
               return false;
            }
             if(lname=='')
            {
               //alert('enter last name fill out');
               document.getElementById('lname').focus();
               $("#error_lname").text("Enter last name fill out");
               
               return false;
            }else
            if(phone=='')
            {
              // alert('enter phone number fill out');
               document.getElementById('phone').focus();
               $("#error_phone").text("Enter Phonenumber fill out");
               return false;
            }
            var phonenumber=$("#phone").val();
            var filter= /^[0-9]{10}$/;
            if(filter.test(phonenumber))
            {
            }
            else
            {
               document.getElementById('phone').focus();
               $("#error_phone").text("Enter the Valid Phonenumber");
               return false;
            }
            if(email=='')
            {
               //alert('enter email fill out');
               
               document.getElementById('exampleInputEmail1').focus();
              
               $("#error_email").text("Enter Email fill out")
               return false;
            }
            var filter = /^([a-zA-Z0-9_\.\-]{4,10})+\@(([a-zA-Z0-9\-]{4,8})+\.)+([a-zA-Z0-9]{2,4})+$/;
            if(filter.test(email))
            {  }
            else{
               //alert(" enter the invaild mail")
               document.getElementById('exampleInputEmail1').focus();
             
               $("#error_email").text("Enter the Valid Email Address");
               return false;
            }
          if(password=='')
          {
            alert("Enter the password fill out");
            return false;
          }
          var filter=/([A-Z].*[a-z]{5}.*[!,%,&,@,#,$,^,*,?,_,~].*[0-9])/;
          if(filter.test(password))
          {
          }
          else
          {
            
            //alert("Enter the strength is a strong password");
            document.getElementById('exampleInputPassword1').focus(); 
            return false;
          }
           if(cpassword=='')
          {
            alert("Enter the confirmpassword fill out");
            return false;
          }
          if ($('#exampleInputPassword1').val() != $('#exampleInputPassword2').val())
          {
            // alert("password mismatch");
              $('#error_password3').text("Password mismatch");
              document.getElementById('exampleInputPassword2').focus(); 
              return false;
          } 
           //dob validatation
          if(dob=='')
          {
           // alert("Enter Birth of Date fill out");
          // document.getElementByid('dob').focus();
          //document.forms['form']['dob'].focus();
          $("#dob").focus();
          $("#error_dob").text("Enter Birth of Date fill out");
            return false;
          }
          //radio button validation
          var radio='false';
          if(document.getElementById('genderMale').checked)
          {
            var radio='true';
          }
          if(document.getElementById('genderFemale').checked)
          {
            var radio='true';
          }
          if(radio == 'false')
          {
            
            alert("Empty value gender pls selected ");
            $("#genderid").focus();
            //  document.getElementByid('genderMale').focus();
            //document.forms['form']['genderMale'].focus();
            return false;
          }
          if(nationlity=='')
          {
            alert("empty");
            return false;
          }
          if(state=='')
         {
            alert("state empty");
            return false;
         }
         
        //checkbox validatation
          if (selected_checkboxes.length > 0)
                  {
                     
                  }else
                  {
                     alert('checkbox box value empty');
                     return false;
                  }                   
         if(file.length>0)
         {
           
         }
         else{
            alert("File is Empty fill out");
            return false;
         }

          //var file=$("#picture")[0].files;  //   total count file
            var file=$("#picture").val();   //  file path  get jquery
                  
                  // file path get js
                  // var file = document.getElementById('picture');
                  // var filePath = file.value;
               
               // Allowing file type
               var allowedExtensions =
                  /(\.jpg|\.jpeg|\.png|\.gif)$/i;
                  console.log(allowedExtensions.test(file));//test used in boolean result
                  console.log(allowedExtensions.exec(file)); // exec used in  array result
                  
               if (!allowedExtensions.test(file))
               {
                  //alert('Invalid file type');
                  $("#error_file").text("Invalid file type, only accept This format Jpg,Jpeg,Png,Gif");
                  return false;
               }

         
           
            // phone number 
            // if(phone.length >10)
            // {
            //    alert("Phonenumber More than 10 digit");
            //    return false;
            // }
            // else if(phone.length <10)
            // {
            //    alert("phonenumber  less than 10 digit")
            //    return false;
            // }
            //  //password matching validation
           
               
               //    email vaidation on submit button click
               //      var email = $("#exampleInputEmail1").val();
               //       var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                     
               //       if (!filter.test(email)) {
               //         alert('The email address you provide is not valid');
               //          $("#exampleInputEmail1").focus();
               //          return false;
               //       } else {
                     
               //        }
                  
       
            $.ajax({
               type: "POST",
               url: "restcrud.php",
               data: formdata,
               processData:false,
               contentType: false,
               cache: false,
               success: function(result) {
                  
               console.log(result);
               alert(result);
               location.reload();
                  
               },
               error: function(xhr, status, error) {
                  console.error(xhr);
               }
            });
         });
         
         $(document).ready(function($) {

          
           
            //on page load, get all data from db using ajax
            document.getElementById("update").style.display = "none";
            document.getElementById("iddiv").style.display = "none";
            document.getElementById("delete").style.display = "none";
            //radiobutton=document.getElementById("genderMale");
            //radiobutton.checked=true;
            //document.getElementById("tbody").style.display = "none";
            //document.getElementById("tableheaddiv").style.display = "none";
            //document.getElementsByClassName("abtdiv")[1].style.display = "none";
            //$("#tablediv").hide();
            //  $("#nav-about").click(function() {
            
            var custom_method = "get_all_data";
            $.ajax({
              type: "GET",
               url: "restcrud.php",
               data: {
                  custom_method: custom_method
               },
               success: function(res) {
                  var data = JSON.parse(res);
                 
                 
                  var alldata = data['alldata'];
                  var country = data['country'];
              
                  console.log(country);
                  //console.log(res);
                  console.log(alldata);

                 
                  var national = $("#nation");
                  $(country).each(function () {
                     var option = $("<option />");

                     //Set CustomerId in Value part.
                     option.val(this.id);
      
                     //Set Customer Name in Text part.
                     option.html(this.name);
      
                     //Add the Option element to DropDownList.
                     national.append(option);
                  });
                
                 
                  var table_tr = '';
                  $.each(alldata, function(i, item) {
                     
                     table_tr += '<tr><td>' + item.id+ '</td><td>' + item.firstname + '</td><td>' + item.lastname +'</td><td>' + item.phone + '</td><td>' + item.dob +'</td><td>' + item.email + '</td><td>' + item.gender + '</td><td>' + item.countryname + '</td><td>'+    item.statename + '</td><td>' + item.address  +'</td><td>'+item.qualification+'</td><td> <i class="fa fa-edit" style="color:blue;" title="edit" onclick="editFunction(' + item.id + ',\'' + item.firstname + '\',\'' + item.lastname + '\',' + item.phone + ',\'' + item.email + '\',\'' + item.dob + '\',\'' + item.gender +'\',\'' + item.nationlity +'\',\'' + item.address + '\',\'' + item.password + '\',\'' + item.conpassword + '\',\'' + item.state+ '\',\''+item.qualification+'\',\'' +item.picture+'\')"></i></td><td><i class="fa fa-times" style="color:red;"title="delete" onclick="deleteFunction(' + item.id + ',\'' + item.picture + '\')"></i></td><td><img src='+item.picture+'  width="50" height="60"></td><td><a href='+item.picture+' download class="fa fa-download" style="font-size:20px;color:green"></a></td></tr>';
                  });
                  $('#tbody').append(table_tr);
               }
            });
         });


         function editFunction(id, name,lname, phone, email,dob,gender,nation,address,password,cpassword,state,qualification,picture) {
            $("#nation").val(nation);
            statefun(nation, 1, state); //edit
          //  $("#stateId").val(state); 
            document.getElementById("name").value=name;
            $("#lname").val(lname);
            document.getElementById("phone").value = phone;
            document.getElementById("id").value = id; //
            document.getElementById("dob").value = dob; 
            if(gender == "male") {
               // genderMale
               document.getElementById("genderMale").checked = true;
            } else {
               document.getElementById("genderFemale").checked = true;
            }     
             $("#exampleInputEmail1").val(email);
            document.getElementById("address").value = address; 
            $("#exampleInputPassword1").val(password);
            $("#exampleInputPassword2").val(cpassword);
            
              console.log(qualification);
              let strcpy=qualification.split(','); //converted array
             // console.log(strcpy);
              for(let i=0; i<strcpy.length;i++) //for loop
              {
               console.log(strcpy[i]);
               if(strcpy[i] == "sslc") {
                  $("#checkbox1").prop("checked",true);
               }
               else if(strcpy[i] == "hsc")
               {
                  $("#checkbox2").prop("checked",true);
               }else if (strcpy[i]== "UG")
               {
                  $("#checkbox3").prop("checked",true);
               }else if (strcpy[i]== "PG")
               {
                  $("#checkbox4").prop("checked",true);
               }            
               
              }
           var picture=$("#picture")[0].files;
         //   console.log(picture);
         //   return;
            //   console.log ($('#picture').prop('files'));
         
            document.getElementById("update").style.display = "inline"; //javascript
            document.getElementById("submit").style.display = "none";
            $(".rightcrud").hide();
            $(".crud").show();
            $("#li_about").removeClass().addClass("nav-item");
             $("#li_crud").removeClass().addClass("nav-item active");
             
         }
         
         function deleteFunction(id)
         {  
            if(confirm("Are you sure on Delete"))
            {
               var custom_method = "delete";
               $.ajax({
                  type: "POST",
                  url: "restcrud.php",
                  data: {
                     id:id,
                     
                     custom_method: custom_method
                  },
                  cache: false,
                  success: function(result) {
                     alert(result);
                     location.reload();
                  },
                  error: function(xhr, status, error) {
                     console.error(xhr);
                  }
               });
            }
          
         }
         
         $("#update").click(function(e) {
            e.preventDefault();
           
            
            var name = $("#name").val();
            var phone = $("#phone").val();
            var lname= $("#lname").val();
            var id =$("#id").val();
            var email=$("#exampleInputEmail1").val();
            var dob=$("#dob").val(); 
            var nationlity=$("#nation").val();
            var state=$("#stateId").val();
            var custom_method = "update";
            var address=$('#address').val();
            var file=$("#picture")[0].files;
            var gender = document.getElementsByName('gender');
            for (var radio of gender)
            {
               if (radio.checked) {
                     var gender = radio.value;
               }
            }
            var checkboxes = new Array();
            $("#form input[type=checkbox]:checked").each(function () {
                checkboxes.push(this.value);
            });
            var password=$("#exampleInputPassword1").val();
            var cpassword=$("#exampleInputPassword2").val();

            var formdata= new FormData($("#form")[0]);
            formdata.append("custom_method","update");
            
            
            if(file.length == 0)
            { 
               formdata.append("form_data","no");
            }else if(file.length >0)
            {
               formdata.append("form_data","yes");
            }
             //validation         
             if(name=='')
            {
               //alert('enter first name fill out');
               document.getElementById('name').focus();
               $("#error_name").text("Enter first name fill out")
               return false;
            }
            var filter=/^[a-zA-z]{3,10}/;
            if(filter.test(name))
            {

            }
            else
            {
               document.getElementById('name').focus();
               $("#error_name").text("Enter valid name ")
               return false;
            }
             if(lname=='')
            {
               //alert('enter last name fill out');
               document.getElementById('lname').focus();
               $("#error_lname").text("Enter last name fill out");
               
               return false;
            }else
            if(phone=='')
            {
              // alert('enter phone number fill out');
               document.getElementById('phone').focus();
               $("#error_phone").text("Enter Phonenumber fill out");
               return false;
            }
            var phonenumber=$("#phone").val();
            var filter= /^[0-9]{10}$/;
            if(filter.test(phonenumber))
            {
            }
            else
            {
               document.getElementById('phone').focus();
               $("#error_phone").text("Enter the Valid Phonenumber");
               return false;
            }
            if(email=='')
            {
               //alert('enter email fill out');
               
               document.getElementById('exampleInputEmail1').focus();
              
               $("#error_email").text("Enter Email fill out")
               return false;
            }
            var filter = /^([a-zA-Z0-9_\.\-]{4,10})+\@(([a-zA-Z0-9\-]{4,8})+\.)+([a-zA-Z0-9]{2,4})+$/;
            if(filter.test(email))
            {  }
            else{
               //alert(" enter the invaild mail")
               document.getElementById('exampleInputEmail1').focus();
             
               $("#error_email").text("Enter the Valid Email Address");
               return false;
            }
          if(password=='')
          {
            alert("Enter the password fill out");
            $('#exampleInputPassword1').focus();
            return false;
          }
          var filter=/([A-Z].*[a-z]{5}.*[!,%,&,@,#,$,^,*,?,_,~].*[0-9])/;
          if(filter.test(password))
          {
          }
          else
          {
            
            //alert("Enter the strength is a strong password");
            document.getElementById('exampleInputPassword1').focus(); 
            return false;
          }
           if(cpassword=='')
          {
            alert("Enter the confirmpassword fill out");
            $('#exampleInputPassword2').focus();
            return false;
          }
          if ($('#exampleInputPassword1').val() != $('#exampleInputPassword2').val())
          {
            // alert("password mismatch");
              $('#error_password3').text("Password mismatch");
              document.getElementById('exampleInputPassword2').focus(); 
              return false;
          } 
           //dob validatation
          if(dob=='')
          {
           // alert("Enter Birth of Date fill out");
          // document.getElementByid('dob').focus();
          //document.forms['form']['dob'].focus();
          $("#dob").focus();
          $("#error_dob").text("Enter Birth of Date fill out");
            return false;
          }
          //radio button validation
          var radio='false';
          if(document.getElementById('genderMale').checked)
          {
            var radio='true';
          }
          if(document.getElementById('genderFemale').checked)
          {
            var radio='true';
          }
          if(radio == 'false')
          {
            
            alert("Empty value gender pls selected ");
            $("#genderid").focus();
            //  document.getElementByid('genderMale').focus();
            //document.forms['form']['genderMale'].focus();
            return false;
          }
          if(nationlity=='')
          {
            alert("empty");
            return false;
          }
          if(state=='')
         {
            alert("state empty");
            return false;
         }
         
        //checkbox validatation
          if (checkboxes.length > 0)
                  {
                     
                  }else
                  {
                     alert('checkbox box value empty');
                     return false;
                  }       
               
                  
            $.ajax({
               type: "POST",
               url: "restcrud.php",
               data: formdata,
               // data: {
               //    name: name,
               //    lname: lname,
               //    phone: phone,
               //    id:id,
               //    email:email,
               //    dob:dob, 
               //    gender:gender,      
               //    nationlity:nationlity,
               //    address:address,
               //    checkboxes:checkboxes,
               //    custom_method: custom_method
               // },
               processData:false,
               contentType: false,              
               cache: false,
               success: function(result) {
                  alert(result);
                  location.reload();
                  
               },
               error: function(xhr, status, error) {
                  console.error(xhr);
               }
            });
           

         });
         
         $("#nav-crud").click(function(){
            // $(".abtdiv").hide();//jquery hide syntax
             $(".crud").show();
             $(".rightcrud").hide();
            $("#li_about").removeClass().addClass("nav-item");
              $("#li_crud").removeClass().addClass("nav-item active");
            //  $("#tablediv").hide();
            //  $("#tableheaddiv").hide();
             
         });
            $(".rightcrud").hide();//ready function
            //   $("#tablediv").hide();
            //  $("#tableheaddiv").hide();
         
         $("#nav-about").click(function(){
            $(".crud").hide();//.class and #id call
            $(".rightcrud").show();
            //document.getElementById("tableheaddiv").style.display = "show";
            $("#li_about").removeClass().addClass("nav-item active");// active
            $("#li_crud").removeClass().addClass("nav-item");
            // $("#tableheaddiv").show()
            // $("#tablediv").show();     
         });
         $("#reset").click(function(){
           if(confirm("Are you sure on Reset All data"))
           {
            document.location.reload(true);
           }
         });

         $(function()
         {
            var dtToday = new Date();
            
            var month = dtToday.getMonth() + 1;
            var day = dtToday.getDate();
            var year = dtToday.getFullYear();
            if(month < 10)
               month = '0' + month.toString();
            if(day < 10)
               day = '0' + day.toString();
            
            var maxDate = year + '-' + month + '-' + day;
            //  alert(maxDate);
            $('#dob').attr('max', maxDate);
         });      
         
        

      </script>
   </body>
</html>
