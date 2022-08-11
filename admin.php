<?php
session_start();
/*if (isset($_POST['Preview'])) {

    $filename = $_FILES["backgroundpic"]["name"];
    $tempname = $_FILES["backgroundpic"]["tmp_name"];
    $folder = "./img/" . $filename;
    move_uploaded_file($tempname, $folder);

    $_SESSION['preview'] = $folder;
    header('Location: preview.php');
}*/
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style/styles.css">
<link rel="stylesheet" href="style/admin.css">
<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
<script src = "scripts/jquery-3.6.0.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://cdn.rawgit.com/mozilla/localForage/master/dist/localforage.js"></script>
</head>
<body>
<!-- Navbar Menu -->
    <nav class="navbar" id="navbar">
        <img class="logo" src="logo.svg">
        <ul class="nav-links" id="nav-links">
            <li><a href="#">Links</a></li>
            <li><a href="product.html" target="_blank">Profile</a></li>
            <li><a href="pricing.html">Pricing</a></li>
            <li><a class="sign-in" href="signin.html">Sign In</a><li>
            <li><a href="javascript:void" onclick="openNav()" class="icon"><i class='bx bx-menu mobile-menu'></i></a></li>
        </ul>
    </nav>

<!-- Mobile Navbar-->
    <div class="mobnavbar" id="mobnavbar">
        <ul class="nav-links mobile" id="nav-links">
            <li><a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a></li>
            <li><a href="#">Links</a></li>
            <li><a href="product.html" target="_blank">Profile</a></li>
            <li><a href="pricing.html">Pricing</a></li>
            <li><a class="sign-in" href="signin.html">Sign In</a><li>
        </ul>
    </div>

<!-- Main content -->
<div class="main-container">
    <!-- Top Container content -->
    <div class="top-container">
        <div class="top-container-flex">
            <div class="profile-picture-container">
                <img src="img/profile.jpg" class="img-profile-picture">
                <i id="myBtn" class="bx bx-edit edit-icon"></i>
            </div>
            <div class="top-text-container">
                <h3>@Distinct</h3>
            </div>
            
        </div>
    </div>

    <!-- Form Links content -->
    <div class="form-links">
        <h2 class="mb">Links</h2>
        <form id="link-form" class="mb" action="insert.php" method="POST">
            <div id="new-item-box" class="new-link">
                <div class="input-label">
                    <label for="title" class="label">Title of link</label>
                    <input type="text" name="title" placeholder="Insert the title" class="-input">
                </div>

                <div class="input-label">
                    <label for="title" class="label">Link/URL</label>
                    <input type="text" name="link" placeholder="e.g: https://www.whatsapp.com/" class="-input">
                </div>
            </div>

            <input type="submit" for="link-form" id="submit-link-form" value="Submit" class="hidden"></input>
        
        </form>
            <div class="bottom-button">
                <!-- Add new form link content -->
                <a class="add-new-button" href="add-new-form">Add New Link +</a>
                <label for="submit-link-form" tabindex="0" class="submit">Submit</label>
            </div>
    </div>

    <!-- Layout selector -->
    <div class="layout mb">
        <h2 class="mb">Layout</h2>
        <form id="layout-form" class="mb" action="" method="POST">
        <div class="layout-form">
        <label for="layout">Page Layout:</label>
            <select name="layoutproduct" id="layout" class="classic">
                <option value="Links,Images,Videos">Links,Images,Videos</option>
                <option value="Links,Videos,Images">Links,Videos,Images</option>
                <option value="Images,Links,Videos">Images,Links,Videos</option>
                <option value="Images,Videos,Link">Images,Videos,Link</option>
                <option value="Videos,Link,Images">Videos,Link,Images</option>
                <option value="Videos,Images,Link">Videos,Images,Link</option>
            </select>
        </div>
        <input type="submit" id="submit-img-form" value="Submit" class="hidden"></input>
        </form>
        <div class="bottom-button">
            <label for="submit-img-form" tabindex="0" class="submit">Submit</label>
        </div>

    </div>
    
    <!-- Form Image content -->
    <div class="form-image">
        <h2 class="mb">Image</h2>
        <form id="img-form" class="mb" action="" method="POST">
            <div id="new-img-box" class="new-image">
                <div class="input-label">
                    <p>Select an image</p>
                    <label for="img-file-upload" class="custom-file-upload">
                        <i class='bx bx-cloud-upload upload-icon'></i>
                    </label>
                    <input type="file" id="img-file-upload" name="image" accept="image/*">
                </div>

                <div class="input-label">
                    <label for="title" class="label">Title</label>
                    <input type="text" name="title" placeholder="Insert the title" class="-input">
                </div>
            </div>

            <input type="submit" id="submit-img-form" value="Submit" class="hidden"></input>

        </form>

        <div class="bottom-button">
            <!-- Add new form image content -->
            <a class="add-new-button" href="add-new-image">Add New Image +</a>
            <label for="submit-img-form" tabindex="0" class="submit">Submit</label>
        </div>
    </div>

<!-- Form video content -->
    <div class="form-video">
        <h2 class="mb">Video</h2>
        <form id="vid-form" class="mb" action="" method="POST">
            <div id="new-vid-box" class="new-video">
                <div class="input-label">
                    <p>Select a video</p>
                    <label for="vid-file-upload" class="custom-file-upload">
                        <i class='bx bx-cloud-upload upload-icon'></i>
                    </label>
                    <input type="file" id="vid-file-upload" name="video" accept="video/*">
                </div>

                <div class="input-label">
                    <label for="title" class="label">Title</label>
                    <input type="text" name="title" placeholder="Insert the title" class="-input">
                </div>
            </div>

            <input type="submit" id="submit-vid-form" value="Submit" class="hidden"></input>

        </form>

        <div class="bottom-button">
            <!-- Add new form video content -->
            <a class="add-new-button" href="add-new-video">Add new video +</a>
            <label for="submit-img-form" tabindex="0" class="submit">Submit</label>
        </div>
    </div>

    <!-- Background Image content -->
    <div class="form-image">
        <h2 class="mb">Background Image</h2>
        <form id="bgimage-form" class="mb" action="" method="POST" enctype="multipart/form-data">
            <div id="new-img-box" class="new-image">
                <div class="input-label">
                <p>Select an image for background</p>
                <label for="bgimg-file-upload" class="custom-file-upload">
                    <i class='bx bx-cloud-upload upload-icon'></i>
                </label>
                <input type="file" id="bgimg-file-upload" name="backgroundpic" accept="image/*" value="" required>
                </div>
            </div>

            <!--Select Background image from preset images -->
            <div>
            <h3 class="mb">Or Select background Image from Our Preset</h3>
            <div class="select-image-preset">
                <div class="radio-container">
                <input type="radio" name="bg-img" id="myCheckbox1" />
                <label for="myCheckbox1" class="checkbox-label">
                <img class="checkbox-img" src="img/bg1.jpg">
                </label>
                </div>
            <div class="radio-container">
            <input type="radio" name="bg-img" id="myCheckbox2" />
            <label for="myCheckbox2" class="checkbox-label">
            <img class="checkbox-img" src="img/bg2.jpg">
            </label></div>
            <div class="radio-container">
            <input type="radio" name="bg-img" id="myCheckbox3" />
            <label for="myCheckbox3" class="checkbox-label">
            <img class="checkbox-img" src="img/bg3.jpg">
            </label></div></div>
            </div>

        <input type="submit" id="preview-bgimg-form" value="Submit" name="Preview" class="hidden" formaction="previewprocess.php" formtarget="_blank"></input>
        <input type="submit" id="submit-bgimg-form" value="Submit" class="hidden"></input>

        </form>
        <div class="bottom-button">
        <label for="preview-bgimg-form" tabindex="0" class="add-new-button">Preview Background</label>
        <label for="submit-bgimg-form" tabindex="0" class="submit">Submit</label>
        </div>
    </div>

</div>


<!-- Modal Div -->
<div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <div class="cont-button"><span class="close">&times;</span></div>
            <div class="modal-container">
                <form id="image-form" action="" method="POST">
                    <div class="profile-picture-modal-container">
                        <img src="img/profile.jpg" class="img-profile-picture">
                        <h4>Update Profile Picture</h4>
                        <label for="img-file-upload" class="profile-file-upload">
                        <i class='bx bx-cloud-upload profile-upload-icon'></i>
                        </label>
                        <input type="file" id="img-file-upload" name="profilepic" accept="image/*">
                    </div>

                    <!-- Input for updating username -->
                    <div class="input-modal-label">
                        <label for="title" class="label">Update Username</label>
                        <input type="text" name="title" placeholder="Username" class="input-username-label">
                    </div>
                <input type="submit" id="submit-img-form" value="Submit" class="hidden"></input>
                </form>
            <label for="submit-img-form" tabindex="0" class="submit">Submit</label>
        </div>
    </div>
</div>
<script>

/*form=document.getElementById("bgimage-form");
function preview() {
    form.submit();
    form.action="previewprocess.php";
    //form.target="_blank"

}*/

</script>
<script src="scripts/duplicate.js"></script>
<script src="scripts/editprofile.js"></script>
<script src="scripts/responsivemenu.js"></script>
<script src="preview.js"></script>
</body>
</html>