<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN UP / ICpEP.SE Student Yearbook Management System</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>
<body>
    <header class="header">
        <a href="index.php" class="logo">
        </a>
        <nav class="nav">
            <a href="index.php">Home</a>
            <a href="gallery.php">Gallery</a>
            <a href="about.php">About Us</a>
            <a href="account.php">Account</a>
        </nav>
    </header>
    <br><br><br><br><br><br><br><br>
    <div class="container" id="signup">
        <h1 class="form-title">Sign Up</h1>
        <form method="post" action="register.php">
            <div class="input-group">
                <label for="fName">First Name</label>
                <input type="text" name="fName" id="fName" placeholder="Ex.. Albert, Grace..." required><br>
            </div>
            <div class="input-group">
                <label for="lName">Last Name</label>
                <input type="text" name="lName" id="lName" placeholder="Ex.. Einstein, Hopper..." required><br>
            </div>
            <div class="input-group">
                <label for="stdID">Student ID</label>
                <input type="text" name="stdID" id="stdID" placeholder="Ex.. 2202798, 2087689..." required><br>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Ex.. Albert123, Hopper234 ..." required><br><br>
            </div>
            <input type="submit" class="btn" value="Sign Up" name="signUp"><br>
        
            <p>By clicking the Sign Up button, you agree to our<br><br>
                <a href="#">Terms and Condition</a><br> 
                and<br>
                <a href="#">Policy Privacy</a><br>
                </p><br>
        </form>
        <div class="links">
            <p>Already have an account?</p>
            <button id="signInButton">Sign In</button>
        </div>
    </div>

    <div class="container" id="signIn" style="display: none;">
        <h1 class="form-title">Sign In</h1>
        <form method="post" action="register.php">
            <div class="input-group">
                <label for="stdID">Student ID</label>
                <input type="text" name="stdID" id="stdID" placeholder="Ex.. 2202798, 2087689..." required><br>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Ex.. Albert123, Hopper234 ..." required><br><br>
            </div>
            <input type="submit" class="btn" value="Sign In" name="signIn"><br>
            
            <p>By clicking the Sign In button, you agree to our<br><br>
                <a href="#">Terms and Condition</a><br> 
                and<br>
                <a href="#">Policy Privacy</a><br>
                </p><br>
        </form>
        <div class="links">
            <p>Don't have an account yet?</p>
            <button id="signUpButton">Sign Up</button>
        </div>
    </div>
    <div class="footer">
        <div class="top">
            <div class="container">
                <div class="textwidget">
                    <p>
                        <span class="address">
                            Northwest Samar State University | College of Engineering and Architecture | Rueda Street, Calbayog City 6710, Philippines
                            <br>
                            Contact Us by <a href="mailto:signup@nwssuybms.edu">e-mail</a>
                        </span>
                        <span class="copyright">© 2024 ICpEP.SE Student Yearbook Management System. All Rights Reserved.</span>
                    </p>
                </div>
                <div class="social-links center-mobile">
                    <span class="followus">Follow Us</span>
                    <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
                    <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
                </div>
                <div class="center-mobile">
                    <img style="max-width: 241px;" src="emblem.png" alt="FDLP Emblem">
                </div>
            </div>
        </div>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
   