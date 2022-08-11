<?php
session_start();
if (isset($_POST['Preview'])) {

    $filename = $_FILES["backgroundpic"]["name"];
    $tempname = $_FILES["backgroundpic"]["tmp_name"];
    $folder = "./img/" . $filename;
    move_uploaded_file($tempname, $folder);

    $_SESSION['preview'] = $folder;
    header('Location: preview.php');
}
?>