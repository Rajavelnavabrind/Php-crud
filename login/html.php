
<html>
  <head>
    
    <title>Static Template</title>
   <style>
        

       
        .action {
            position: fixed;
            top: 20px;
            right: 30px;
        }

        .action .profile {
            position: relative;
            width: 60px;
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
            background: #fff;
            width: 200px;
            box-sizing: 0 5px 25px rgba(0, 0, 0, 0.1);
            border-radius: 15px;
            transition: 0.5s;
            visibility: hidden;
            opacity: 0;
        }

        .action .menu.active {
            top: 70px;
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

        .action .menu h3 {
            width: 100%;
            text-align: center;
            font-size: 18px;
            padding: 20px 0;
            font-weight: 500;
            color: #555;
            line-height: 1.5em;
        }

        .action .menu h3 span {
            font-size: 14px;
            color: #cecece;
            font-weight: 300;
        }

        .action .menu ul li {
            list-style: none;
            padding: 16px 0;
            border-top: 1px solid rgba(0, 0, 0, 0.05);
            display: flex;
            align-items: center;
        }

        .action .menu ul li img {
            max-width: 20px;
            margin-right: 10px;
            opacity: 0.5;
            transition: 0.5s;
        }

        .action .menu ul li:hover img {
             opacity: 1;
        }

        .action .menu ul li a {
            display: inline-block;
            text-decoration: none;
            color: #555;
            font-weight: 500;
            transition: 0.5s;
        }

        .action .menu ul li:hover a {
            color: #ff5d94;
        }
</style>
  </head>
  <body>
    <div class="action">
      <div class="profile" onclick="menuToggle();">
        open
      </div>
      <div class="menu">
        <h3>Someone Famous<br /><span>Website Designer</span></h3>
        <ul>
          <li>
           
            <img src="" /><a href="#">My profile</a>
          </li>
          <li>
            <img src="" /><a href="#">Edit profile</a>
          </li>
          <li>
            <img src="" /><a href="#">Inbox</a>
          </li>
          <li>
            <img src="" /><a href="#">Setting</a>
          </li>
           <li><img src="" /><a href="#">Help</a></li>
          <li>
            <img src="" /><a href="#">Logout</a>
          </li>
        </ul>
      </div>
    </div>
    <script>
      function menuToggle() 
      {
        const toggleMenu = document.querySelector(".menu");
        toggleMenu.classList.toggle("active");
      }
    </script>
  </body>
</html>
