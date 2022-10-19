<?php session_start();


?>

<html>
    <head>
        <title>REGEISTER DATA</title>
        <href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
       <style>
                body {
                font-family: "Lato", sans-serif;
                }

                .sidenav {
                /* display: none; */
                height: 100%;
                width: 250px;
                position: fixed;
                z-index: 1;
                top: 0;
                left: 0;
                background-color: #111;
                color:white;
                overflow-x: hidden;
                padding-top: 60px;
                }

                .sidenav a {
                padding: 8px 8px 8px 32px;
                text-decoration: none;
                font-size: 25px;
                color: #818181;
                display: block;
                }

                .sidenav a:hover {
                color: #f1f1f1;
                }

                .sidenav .closebtn {
                position: absolute;
                top: 0;
                right: 25px;
                font-size: 36px;
                margin-left: 50px;
                }

              
                body {
                margin: 0;
                font-family: Arial, Helvetica, sans-serif;
                }

                .topnav {
                overflow: auto;
                background-color: #2f2f7e;
                position:fixed;
                width:100%;
                top: 0px;
                height: 55px
                 
       
              
                }

                .topnav a {
                    float: left;
                    color: #f2f2f2;
                    text-align: center;
                    padding: 14px 16px;
                    text-decoration: none;
                    font-size: 25px;
                    font-weight: 600;
                }

                .topnav a:hover {
                background-color: #ddd;
                color: black;
                }

                .topnav a.active {
                background-color: #04AA6D;
                color: white;
                }

                .topnav-right {
                float: right;
                

                }
                span{
                color:white;
               
               
                }
                footer
                 {
                    position: fixed;
                    bottom:0;
                    left: 0;
                    width:100%;
                    text-align: center;
                    padding: 3px;
                    background-color: #2f2f7e ;
                    color: white;
                }
               /* .topnav-home{
                margin-bottom:3px;
                margin-top:3px;
               } */
               @media screen and (max-height: 450px) {
                .sidenav {padding-top: 50px;}
                .sidenav a {font-size: 50px;}
                }    
                
                 
        </style>
        

        <style>
                

            
                .action {
                    position: fixed;
                    top: 20px;
                    right: 30px;
                   
                }

                .action .profile {
                    position: relative;
                    width: 73px;
                    height: 60px;              
                    overflow: hidden;
                    cursor: pointer;
                }

                .action .profile img {
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                    
                }

                .action .menu {
                    position: absolute;
                    top: 120px;
                    right: -10px;
                    padding: 10px 20px;
                    width: 200px;
                    box-sizing: 0 5px 25px rgba(0, 0, 0, 0.1);
                    border-radius: 15px;
                    transition: 0.5s;
                    visibility: hidden;
                    background-color: white;
                    opacity: 0;
                }

                .action .menu.active {
                    top: 30px;
                    visibility: visible;
                    opacity: 1;
                }

                .action .menu::before {
                    content: "";
                    position: absolute;
                    top: -5px;
                    right: 28px;
                    width: 20px;
                    height: 20px;
                    background: #fff;
                    transform: rotate(45deg);
                }

                .action .menu h4 {
                    width: 100%;
                    text-align: center;
                    font-size: 18px;
                    font-weight: 500;
                    color: #555;
                    line-height: 1.5em;
                }

                .action .menu h4 span {
                    
                    color: #cecece;
                    font-weight: 300;
                    
                }

                .action .menu ul li {
                    list-style: none;
                    border-top: 1px solid rgba(0, 0, 0, 0.05);
                    display: flex;
                    align-items: center;
                }

                .action .menu ul li img {
                   
                    opacity: 0.5;
                    transition: 0.5s;
                  
                }

                .action .menu ul li:hover img {
                       
                    opacity: 1;
                }

                .action .menu ul li a {
                    display: flex;
                    text-decoration: none;
                    color: #161515;
                    font-weight: 500;
                    transition: 0.5s; 
                    font-size: 17px;  
                }

                .action .menu ul li:hover a {
                    color: blue;
                }
                h3{
                    text-align: center;
                }
                .password{
                    display:none;
                }
                .setting li:nth-child(1):hover .password{
                    display: inline-block;
                }
        </style>

        
    </head>
       <body>
            <div class="topnav">
                
                   <span style="font-size:30px;cursor:pointer; position:relative; top: 7px;font-weight: 600; margin-left: 12px;" onclick="openNav()">&#9776; Menu</span>
                    
                 <div class="action">
                     <div class="profile" onclick="menuToggle();">
                     <i class="fa fa-gear" style="font-size:20px;color: white ">Setting</i>
                     </div>
                            <div class="menu" style="width:265px;">
                                <h3 >Welcome <?php  echo $_SESSION['username'];?> </h3>
                               
                                <ul class='setting'>
                               
                                <li>
                                    <img src="setting.png" /><a href="changepassword.php"> Password Setting</a>
                                </li>
                               
                                <li>
                                    <img src="logout.png" /><a href="logout.php">Logout</a>
                                </li>
                                </ul>
                         </div>
                 </div>
            </div>
           


            <div id="sidenav" class="sidenav" style="background: #2f2f7e;">
                <!-- <a class="closebtn" onclick="closeNav()">&times;</a> -->
                <img src="logo.jpg" style="  border-radius: 70%;width: 107px; margin-left: 57px;margin-top: -40px; margin-bottom: 29px;"> 
                <a href="demo.php"  id='dash'>Dashboard</a>
                <?php if( $_SESSION['role']== 'admin'){ echo"<a href='staffdetails.php'  id='staff'>Staff Record</a> <a href='studentdetails.php' id='student'>Student Record</a>";}?>
                <?php if( $_SESSION['role']== 'staff'){ echo"<a href='staffdetails.php'>Staff Record</a>";}?>
                <?php if( $_SESSION['role']== 'student'){ echo"<a href='studentdetails.php'>Student Record</a>";}?>
                <a href="mydeatils.php" id='profile'>My pofile</a>
                <a href="about.php" id='about'>About</a>
                      
            </div>
            <div style="margin-top:80px; ">
           
  
    
   
    
   
                 
            </div>
          
                <script>
                        // function openNav() {
                        // document.getElementById("mySidenav").style.display = "block";
                        // }

                        // function closeNav() {
                        // document.getElementById("mySidenav").style.display = "none";
                        // }

                        function menuToggle() 
                        {
                            const toggleMenu = document.querySelector(".menu");
                            toggleMenu.classList.toggle("active");
                        }
                        
                       
                       
                        
               </script>
            <footer>
                    <p>© Copyright 2022 Created by Rajavel Magento Trainee<br>
                   </p>
            </footer>
    
    </body>
</html> 
