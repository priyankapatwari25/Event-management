<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "event_management_auth_project";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $user_id = $_POST["exampleInputuserid"];
    $password = $_POST["exampleInputPassword1"];

    $sql = "SELECT * FROM user_auth WHERE email = '$user_id' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        header("Location: ../user_portal.html");
        exit;
    } else {
        header("Location: ../user_login.html");
        exit;
    }

    $conn->close();
}
?>
