<?php
// Database connection variables
$servername = "localhost";
$username = "root"; // Default username for XAMPP
$password = ""; // Default password for XAMPP (empty by default)
$dbname = "contact_data"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data and sanitize inputs
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $mobile_number = htmlspecialchars($_POST['mobile_number']);

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format");
    }

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO contact_details (name, email, mobile_number) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $mobile_number);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Data submitted successfully!";
    } else {
        echo "Failed to submit data: " . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request method.";
}
?>
