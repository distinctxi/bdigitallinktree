<?php
session_start();

if(!empty($_SESSION["preview"])){
    //$_SESSION["previouspage"] exists!
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style/styles.css">
<link rel="stylesheet" href="style/pricing.css">
<link rel="stylesheet" href="style/signin.css">
<link rel="stylesheet" href="style/product.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
<script src="https://cdn.rawgit.com/mozilla/localForage/master/dist/localforage.js"></script>
</head>
<body>

<!-- Main content -->
    <div class="main-container">
        
        <div id="background" class="background" style="background-image: url('<?php echo $_SESSION['preview']; ?>');">
        <!--<video autoplay loop muted class="video-bg">
                        <source src="video/movie.mp4" type="video/mp4">
                        <source src="movie.ogg" type="video/ogg">
                        Your browser does not support the video tag.
                    </video>-->
        </div>
        <!-- Profile Pic, Name & Bio content -->
        <div class="top-container">
            <div class="top-container-flex">
                <div class="profile-picture-container">
                    <img src="img/profile.jpg" class="img-profile-picture">
                </div>
                <div class="top-text-container">
                    <h3>@Kyedae</h3>
                    <br>
                    <p class="bio">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo nihil sed omnis? Illum hic est, id, itaque iste non necessitatibus beatae culpa facilis, quasi iure ad illo provident laborum vel.</p>
                </div>
            </div>
        </div>
        <!-- Links,Image & Video content -->
        <div class="box-links-container">
            <!-- Links container -->
            <div class="links-container">
                <h2>Links</h2>
                <!-- Links content -->
                <div class="box-links">
                    <a href="#"><p>Click on me</p></a>
                </div>

                <div class="box-links">
                    <a href="#"><p>Click on me</p></a>
                </div>
            </div>

            <!-- Image container -->
            <div class="image-container">
                <h2>Images</h2>
                <!-- Image content -->
                <div class="box-image">
                    <img src="img/demo.jpg" class="image-demo">
                </div>
            </div>

            <!-- Video container -->
            <div class="video-container">
                <h2>Video</h2>
                <!-- Video content -->
                <div class="box-video">
                    <video controls class="video-demo">
                        <source src="video/movie.mp4" type="video/mp4">
                        <source src="movie.ogg" type="video/ogg">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>

        </div>
    </div>

<script src="useimage.js"></script>
</body>
</html>