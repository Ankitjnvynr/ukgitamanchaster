<?php
include '_db.php';

// Retrieve form data
$name = $_POST['s-name'] ?? '';
$phone = $_POST['s-phone'] ?? '';
$email = $_POST['s-email'] ?? '';

// Validate form data
if (!validateFormData($name, $phone, $email)) {
    error_log("Invalid form data: name=$name, phone=$phone, email=$email");
    echo "Invalid form data. Please try again.";
    exit; // Terminate script execution after displaying error message
}

// Create table if not exists
try {
    $sql = "CREATE TABLE IF NOT EXISTS our_sponsors (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(255) NOT NULL,
        phone VARCHAR(15) NOT NULL,
        email VARCHAR(255) NOT NULL
    )";

    $conn->query($sql); // Execute SQL query directly
    echo "Table created successfully. ";
} catch (Exception $e) {
    error_log("Error creating table: " . $e->getMessage());
    echo "An error occurred while creating the table. Please try again.";
    exit; // Terminate script execution after displaying error message
}

// Insert form data into table
try {
    // Construct SQL statement with interpolated values
    $sql = "INSERT INTO our_sponsors (name, phone, email) VALUES ('$name', '$phone', '$email')";

    // Execute SQL statement
    $conn->query($sql);

    echo "New record created successfully";
} catch (Exception $e) {
    error_log("Error: " . $e->getMessage());
    echo "An error occurred while inserting the data. Please try again.";
    exit; // Terminate script execution after displaying error message
}

// Close database connection
$conn = null;

function validateFormData($name, $phone, $email)
{
    // Implement form data validation logic here
    // For example:
    if (empty($name) || empty($phone) || empty($email)) {
        return false;
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return false;
    }
    // Add more validation logic as needed
    return true;
}
