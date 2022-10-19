<?php include("module.php");?>
<?php session_start();
?>
<html>
        <body>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <style>
                table, th, td {
                                border: 3px solid black;
                                border-collapse: collapse;
                                text-align: center;
                                padding: 20px;
                                background-color:white;
                                margin-left: 280px;
                }            
                 #profile{color:red;}
                </style>
                <h3 style="text-align: center;"> User Details</h3>
           <table>
                <thead>
                <tr>
                    <th> id </th>
                    <th> FirstName </th>
                    <th> Last Name </th>
                    <th> Username </th>
                    <th> Email </th>
                    <th> Mobile </th>
                </tr>
                </thead>
                <tbody id="table"> </tbody>
          </table>


        </body>
          <script
                    src="https://code.jquery.com/jquery-3.6.0.js"
                    >
        </script>
        <script>
                $( document ).ready(function() 
                {
                    var custom_method="select_data";
                    $.ajax({
                                type: "GET",
                                url: "sql.php",
                                data:{  custom_method },
                            
                                success: function(result) 
                                {
                                 // alert(result);
                                  console.log(result);//typeof keyword using find data type
                                  var data=JSON.parse(result); //convert string to  object 
                                  console.log(data);
                                  var table='<tr><td>'+data.id+'</td><td>'+data.firstname+'</td><td>'+data.lastname+'</td><td>'+data.username+'</td><td>'+data.email+'</td><td>'+data.mobile+'</td</tr';
                                  console.log(table);
                                  $("#table").append(table);
                                    //location.reload();
                                },
                                error: function(xhr, status, error) {
                                        console.error(xhr);
                                    }
                    });

                });

        </script>
        </html>
    