<?php  
 //Database connectivity  
 $con=mysqli_connect('localhost','root','','dayo_travel_access_user_db');  
 $sql=mysqli_query($con,"select * from registration");  
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

body {
    height: auto;
   
      align-items: center;
      justify-content: center;
      color: #333;
      color: #333;
    }
    .edit-profile {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            background-color: #f8f8f8;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .edit-profile form {
            display: flex;
            flex-direction: column;
        }

        .edit-profile label {
            margin-bottom: 8px;
        }

        .edit-profile input {
            padding: 10px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        .edit-profile button {
            padding: 12px;
            background-color: #19ac14;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        .edit-profile button:hover {
            background-color: #18866a;
        }
        </style>
    </head>


    
 <nav>
        <div class="navbar">
            
                <!-- logo nav/ size adjust--> 
                <a href="index.html"><img src="IMAGES/DAYO LOGO.png" width="100" 
                    height="100"></a>
                    <div id="navLinks" class="nav-links">

                    <i class='bx bx-x' onclick="hideMenu()"></i>
                    
                    <ul class="menu">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="packages.html">Packages</a></li>
                        <li><a href="plan.html">Make your own Itinerary</a></li>
                        <li><a href="transaction.php">Transaction</a></li>
                        <li><a href="About.html">About</a></li>
                       <li><a href="settings.html">Profile</a></li>
                       <li class="right-align"><a href="sign.html">Log Out</a></li>
                    </ul>
        
                    </ul>
                    </div>
                
<section class="banner"></section>
<script type="text/javascript">
    window.addEventListener("scroll", function () {
      var header = document.querySelector("nav");
      header.classList.toggle("sticky", window.scrollY > 0);
    });
  </script>
  
              


  

        </div>
        </section>


    
</div>

<header>
    <h1>Edit Profile</h1>
<section class="edit-profile">
<form action="updated_profile.php" method="post">
            <label for="full_name">Full Name:</label>
            <input type="text" id="full_name" name="fullname" placeholder="Enter your full name" required>

            <label for="new_password">New Password:</label>
            <input type="password" id="new_password" name="new_password" placeholder="Enter new password" required>

            <label for="confirm_password">Confirm Password:</label>
            <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm new password" required>

            <button type="submit">Update Profile</button>
        </form>
</section>

 
</header>
       <!--Footer-->
       <footer>
        <div class="footer-columns">
            <div class="footer-column">
                <p><a href="About.html">About us</a></p>
                <p>Activities you can enjoy</p>
                <p><a href="adventure.html">Adventure</a></p>
                <p><a href="heritage.html">Heritage</a></p>
                <p><a href="culinary.html">Culinary</a></p>
            </div>
            <div class="footer-column">
                <p><a href="FAQ.html">Frequently Asked Questions</a></p>
                <p><a href="terms and condition.html">Terms and Conditions</a></p>
            </div>
            <div class="footer-column">
                <h2>Address</h2>
                <p>
                    #65 2nd Floor Decibar Building, Lower Bonifacio, Baguio City, Philippines (In front of Caltex Bonifacio)
                </p>
                <h2>Contact</h2>
                <p>
                    (074) 309-6836 / +63 938 589-4505
                    cbstccustomerservice@gmail.com
                </p>
            </div>
            <div class="footer-column">
                <h3>Developed by JML</h3>
                
                
            </div>
        </div>
    </footer>


 

        </script>

    </body>

</html>