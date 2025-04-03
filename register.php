<?php
$servername = "localhost";
$username = "root"; // Default MySQL username
$password = ""; // Leave empty if using XAMPP
$dbname = "SRS";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$student_id = $_POST['student_id'];
$first_name = $_POST['first_name'];
$middle_initial = $_POST['middle_initial'];
$last_name = $_POST['last_name'];
$date_of_birth = $_POST['date_of_birth'];
$gender = $_POST['gender'];
$email_address = $_POST['email_address'];
$phone_number = $_POST['phone_number'];

// Insert data into database
$sql = "INSERT INTO basic_information (student_id, first_name, middle_initial, last_name, date_of_birth, gender, email_address, phone_number) 
        VALUES ('$student_id', '$first_name', '$middle_initial', '$last_name', '$date_of_birth', '$gender', '$email_address', '$phone_number')";

if ($conn->query($sql) === TRUE) {
    echo "Registration successful!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
