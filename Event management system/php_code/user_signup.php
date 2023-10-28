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

    $name = $_POST["exampleInputname1"];
    $email = $_POST["exampleInputemail1"];
    $password = $_POST["exampleInputPassword1"];

    $sql = "INSERT INTO user_auth (name, email, password) VALUES ('$name', '$email', '$password')";

    if ($conn->query($sql) === true) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    header("Location: ../User_login.html");
    exit;
}
?>
