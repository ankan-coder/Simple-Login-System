<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require './php_utils/_dbconnect.php';

    $Name = $_POST['name'];
    $Email = $_POST['email'];
    $Password = md5($_POST['password']);

    $filename = $_FILES["photo"]["name"];
    $tempname = $_FILES["photo"]["tmp_name"];

    $image_path = "upload/" . $filename;

    // Check whether the username exists in the database table
    $sql_checkusername = "SELECT * FROM `myusers` WHERE `email` ='$Email'";
    $result = mysqli_query($conn, $sql_checkusername);
    $numExistsRows = mysqli_num_rows($result);

    if ($numExistsRows > 0) {
        echo "The Email already exists!";
    } else {
        move_uploaded_file($tempname, $image_path);

        $sql_insertdetails = "INSERT INTO myusers (`name`, `email`, `password`, `image_path`) VALUES ('$Name', '$Email', '$Password', '$image_path')";
        $result_insertdetails = mysqli_query($conn, $sql_insertdetails);

        if ($result_insertdetails) {
            echo "Registered Successfully!";
        } else {
            echo "Error: " . mysqli_connect_errno();
        }
    }
}
