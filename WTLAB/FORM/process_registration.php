<?php
// Establish a MySQL database connection
$host = "localhost";
$username = "your_username";
$password = "your_password";
$database = "your_database_name";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $register_number = $_POST["register_number"];
    $email = $_POST["email"];
    $dob = $_POST["dob"];
    $address = $_POST["address"];
    $course = $_POST["course"];
    $phone = $_POST["Phone"];
    $resume = $_FILES["resume"]["name"];
    $photo = $_FILES["photo"]["name"];

    
    $upload_dir = "uploads/";
    move_uploaded_file($_FILES["resume"]["tmp_name"], $upload_dir . $resume);
    move_uploaded_file($_FILES["photo"]["tmp_name"], $upload_dir . $photo);

    
    $sql = "INSERT INTO user_info (name, register_number, email, dob, address, course, phone, resume, photo)
            VALUES ('$name', $register_number, '$email', '$dob', '$address', '$course', $phone, '$resume', '$photo')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful! Data has been added to the database.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


$conn->close();
?>
