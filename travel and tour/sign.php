<?php
include 'connection.php';

// Check if the user is logged in 
$loggedIn = false;


session_start();
if (isset($_SESSION['user_id'])) {
    $loggedIn = true;
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dayo Travel Access</title>

        <!-- links--> 
        <link rel="stylesheet" href="styles.css"/>
        <!--Icon link-->
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
         <!-- font links--> 
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Kalam&display=swap" rel="stylesheet">
        <style>
body{
    color: white;
}
              form {
            background-color: #197e1a9b;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(111, 19, 19, 0.1);
            padding: 20px;
            width: 300px;
            margin: 20px auto;
        }

         .footer h2 {
    color: #fff;
        }


       
        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #09651e;
        }

        .form-switch {
            text-align: center;
            margin-top: 30px;
        }

        .form-switch a {
            text-decoration: none;
            color: #09550b;
            font-weight: bold;
        }

        
    
        </style>
    </head>

<body>
    
 <nav>
        <div class="navbar">
            
                <!-- logo nav/ size adjust--> 
                <img src="IMAGES/DAYO LOGO.png" width="100" 
                    height="100"></a>
                    <div id="navLinks" class="nav-links">

                    <i class='bx bx-x' onclick="hideMenu()"></i>
                    
                   
                    </div>
                
<section class="banner"></section>
<script type="text/javascript">
    window.addEventListener("scroll", function () {
      var header = document.querySelector("nav");
      header.classList.toggle("sticky", window.scrollY > 0);
    });
  </script>
  
                </div>
                <i class='bx bx-menu-alt-right'onclick="showMenu" ></i>
 </nav>
        </div>
    </section>



</div>
    <form action="login_db.php" id="loginForm" method="post">
    <h2>Login</h2>
    
    <label for="loginEmail">Email</label>
    <input name="email" type="email" required>

    <label for="loginPassword">Password</label>
    <input name="password" type="password" required>

    <button type="submit">Login</button>

    <div class="form-switch">
      <p>Don't have an account? <a href="#" onclick="switchForm('registerForm')">Register</a></p>
    </div>
  </form>


  <form action="reg_db.php" id="registerForm" style="display: none;" method="post">
    <h2>Register</h2>
    <label for="registerFullname">Full Name</label>
    <input type="text"  name="fullname" required>

    <label for="registerEmail">Email</label>
    <input type="email" name="email" required>

    <label for="registerPassword">Password</label>
    <input type="password" name="password" required>

    <button type="submit">Register</button>

    <div class="form-switch">
      <p>Already have an account? <a href="#" onclick="switchForm('loginForm')">Login</a></p>
    </div>
  </form>

  <script>
    function switchForm(formId) {
      document.getElementById('loginForm').style.display = 'none';
      document.getElementById('registerForm').style.display = 'none';

      document.getElementById(formId).style.display = 'block';
    }
  </script>


       <!--Footer-->
       <footer>
        <div class="footer-columns">
            <div class="footer-column">
                <p><a href="About_2.html">About us</a></p>
                 
            </div>
           
            <div class="footer-column">
               
                <h2>Contact</h2>
                <p>
                    (074) 309-6836 / +63 938 589-4505
                    cbstccustomerservice@gmail.com
                </p> 
                <h3>Developed by JML</h3>
            </div>
            <div class="footer-column">

<h2>Address</h2>
                <p>
                    #65 2nd Floor Decibar Building, Lower Bonifacio, Baguio City, Philippines 
                    &nbsp;&nbsp;&nbsp;(In front of Caltex Bonifacio)
                </p>
                
               
                
                
            </div>
        </div>
    </footer>


        <script src="script.js"></script>

    </body>

</html>