<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require './php_utils/_dbconnect.php';

    $email = $_POST["email"];
    $password = md5($_POST["password"]);

    $sql = "SELECT * FROM `myUsers` WHERE `email` = '$email' AND `password` = '$password'";

    $result = mysqli_query($conn, $sql);

    $num = mysqli_num_rows($result);

    if ($num == 1) {
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['email'] = $email;

        $sqlFetchUserDetails = "SELECT `name`, `image_path` FROM `myUsers` WHERE `email` = '" . $_SESSION['email'] . "'";
        $sqlFetchUserDetailsResult = mysqli_query($conn, $sqlFetchUserDetails);
        $details = mysqli_fetch_assoc($sqlFetchUserDetailsResult);

        $_SESSION['user_name'] = $details['name'];
        $_SESSION['user_photo'] = $details['image_path'];

        echo "welcome.php";
        exit;
    } else { //If No then
        echo "Invalid username or password";
    }
}
