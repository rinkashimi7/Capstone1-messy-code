<?php
$con=mysqli_connect('localhost','root','','dayo_travel_access_user_db');  
$sql=mysqli_query($con,"select * from reserve_booking");  
$row=mysqli_fetch_assoc($sql);
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

        

        
    </head>

<body>
    
    
        <section class="sub-header_15">
            <nav>
                <!-- logo nav/ size adjust--> 
                <a href="index.html"><img src="IMAGES/DAYO LOGO.png" width="170" 
                    height="170"></a>
                    <div id="navLinks" class="nav-links">

                    <i class='bx bx-x' onclick="hideMenu()"></i>
                    
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="packages.html">Packages</a></li>
                        <li><a href="FAQ.html">FAQ</a></li>
                        <li><a href="transaction.php">Transaction</a></li>
                        <li><a href="About.html">About</a></li>
                       <li><button class="btnLogin-popup">Login</button></li> 
                    </ul>

                </div>
                <i class='bx bx-menu-alt-right'onclick="showMenu" ></i>
            </nav>

            </div>
                <i class='bx bx-menu-alt-right'onclick="showMenu" ></i>
            </nav><section class="banner"></section>
            <script type="text/javascript">
                window.addEventListener("scroll", function () {
                  var header = document.querySelector("nav");
                  header.classList.toggle("sticky", window.scrollY > 0);
                });
              </script>
              
                            </div>
                            <i class='bx bx-menu-alt-right'onclick="showMenu" ></i>
                        </nav>


            
 <section class="section">
    <div class="wrapper">
        <span class="icon-close"><i class='bx bx-x'></i></span>

<!--LogIn-->
        <div class="logreg-box">
            <div class="form-box login">
                <div class="logreg-title">
                    <h2>Login</h2>
                    <p>Please login to use Dayo Travel Access</p>
                </div>
                <form action="#">
                    <div class="input-box">

                        <span class="icon"><i class='bx bxs-envelope'></i></span>
                        <!--d pa maayos ung sa input bumababa yung Email text-->
                        <input type="email" required>
                        <label>Email</label> 
                    </div>

                    
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-lock-alt' ></i></span>
                        <input type="password" required>
                        <label>Password</label> 
                    </div>

                    <div class="remember-forgot">
                        <label><input type="checkbox">Remember me</label>
                        <a href="#">Forgot password?</a></div>

                        <button type="submit" class="btn">Login</button>

                        <div class="logreg-link">
                            <p>Don't have an account?
                                <a href="#" class="register-link">Register</a>
                            </p>
                        </div>
                </form>
            </div>



            <!--Register form-->


            <div class="form-box register">
                <div class="logreg-title">
                    <h2>Registration</h2>
                    <p>Please provide the following to verify your identity</p>
                </div>


                <form action="#">
                    <div class="input-box">
                        <span class="icon"><i class='bx bx-user'></i></span>
                        <input type="text" required>
                        <label>Full Name</label> 
                    </div>
                
                    

                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-envelope'></i></span>
                        <input type="email" required>
                        <label>Email</label> 
                    </div>

                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-lock-alt'></i></span>
                        <input type="password" required>
                        <label>Password</label> 
                    </div>

                    <div class="remember-forgot">
                        <label>
                            <input type="checkbox" id="agreeTermsCheckbox">I agree to the
                            <a href="terms and condition.html" id="showTermsLink" class="terms-link">Terms & Conditions</a>
                           
                        </label>
                        <a href="#">Forgot password?</a>
                    </div>
                    
                    <button type="submit" class="btn">Register</button>
                    
                    <div class="logreg-link">
                        <p>Already have an account?
                            <a href="#" class="login-link">Login</a>
                        </p>
                    </div>
                    
                    
                    </div>
                    
                
                    
                    
                    </body>
                    </html>



        </div>


        <div class="media-options">
            <a href="#">

                <i class='bx bxl-google' ></i>
                <span>Login with Google </span>
            
            
            </a><form action="book_3.php" method = "POST">
        </div>

        
    </div>

    
  <div class="information">
        <h2>Information Details:</h2>
  
    <div>
        <p><b><em>Name: </em></b><?php echo $row['fullname'] ?> </p>
        <p><b><em>Email: </em></b> <?php echo $row["email"]; ?></p>
        <p><b><em>CP#: </em></b> <?php echo $row["cp_num"]; ?></p>
        <p><b><em>Packages: </em></b> <?php echo $row["package"]; ?></p>
        <p><b><em>Adult Count: </em></b><?php echo $row["adult_count"]; ?></p>
        <p><b><em>Kids Count: </em></b><?php echo $row["kid_count"]; ?></p>
        <p><b><em>Vehicle: </em></b><?php echo $row["vehicle"]; ?></p>
        <p><b><em>Travel Date: </em></b><?php echo $row["trav_date"]; ?></p>
        <p><b><em>Travel Time: </em></b><?php echo $row["trav_time"]; ?></p>
        <p><b><em>Pick-Up Location: </em></b><?php echo $row["street"]; ?>, <?php echo $row["brgy"]; ?></p>
        
                   
    </p>
    </div></form>
    
    <form action="book_3.php">
    <p><b><em>Status: </em></b><?php  
                           if ($row['status']==1) {  
                                echo "Pending Request";  
                           }if ($row['status']==2) {  
                                echo "Acccepted";  
                           }if ($row['status']==3) {  
                                echo "Denied";  
                           }  
                           ?></p>
    <?php  
                       if ($row['status']==1) {    
                       }if ($row['status']==2) {  ?>
                        <button type="submit" class="reservation">Payment </button>
                      <?php }if ($row['status']==3) {  
                       }  
                       ?></p>
</form>
                         </div>
                        
       
                         

        <style>

            .information{
                background-color: #18866ad3;
                height: 100%;
                width: 35%;
                padding: 50px 20px 50px 20px;
                margin-left: 20px;
                margin-bottom: 20px;
              
            }

            body {
              font-family: Arial, sans-serif;
            background-image: url(IMAGES/WALLPAPER.png);
              height: auto;
              display: flex;
              flex-direction: column;
              align-items: left;
              justify-content: left;
              
            }
          .reservation{
            color: #ffffff;
            background-color: rgb(9, 169, 28);
            padding:5px 5px 5px 5px;
            
           
          }
           
            form {
             
              padding: 40px;
              color: rgb(162, 30, 30);
              border-radius: 8px;
              box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
              background-color: rgba(255, 255, 255, 0.9); /* Set the background color with some transparency */
     
       
            }
        
          form h2{
            color: rgb(133, 16, 16);
          }
          
          
          .sub-header_15{
    background-color: #92a2b566;
    background-position: center;
  
    position: relative;
  
    color:rgb(255, 255, 255);
    }

    button:hover {
      background-color: #18866a;
      text-align: center;
    }

    p{
        text-align: left;
       
       
    }

    h2{
        text-align: left;
    }
    </style>        
 </section>
 
  
</div>




</section>






        <script src="script.js"></script>

    </body>

</html>