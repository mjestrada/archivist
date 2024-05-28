<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>ICpEP.SE Student Yearbook Management System</title>
    <style>
        body {
            background: url('gallerybg.jpg') no-repeat;
            background-size: cover;
            background-position: center;
            margin: 0;
            font-family: Arial, sans-serif;
        }
    </style>
</head>
<>
    <header class="header">
        <a href="index.php" class="logo">
            <ion-icon name="shield-checkmark-outline"></ion-icon>ICpEP.SE Student Yearbook Management System
        </a>
        <nav class="nav">
            <a href="index.php">Home</a>
            <a href="gallery.php">Gallery</a>
            <a href="about.php">About Us</a>
            <a href="account.php">Account</a>
        </nav>
    </header>

    <div class="gallery-container">
        <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#photoModal" data-bs-image="image/deo_angelo.jpg">
            <img src="images/deo_angelo.jpg" alt="Delos Santos, Deo Angelo Turla">
            <div class="caption">Delos Santos, Deo Angelo Turla</div>
        </div>
        <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#photoModal" data-bs-image="image/karl_merencillo.jpg">
        <img src="images/karl_merencillo.jpg" alt="Marahay, Karl Marahay">
            <div class="caption">Marahay, Karl Merencillo</div>
        </div>
        <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#photoModal" data-bs-image="image/hazel_mira.jpg">
        <img src="images/hazel_mira.jpg" alt="Ronquillo, Hazel Mira">
            <div class="caption">Ronquillo, Hazel Mira</div>
        </div>
        <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#photoModal" data-bs-image="image/rhena_dabalos.jpg">
        <img src="images/rhena_dabalos.jpg" alt="Serito, Rhena Dabalos">
            <div class="caption">Serito, Rhena Dabalos</div>
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
    