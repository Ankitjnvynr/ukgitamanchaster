<?php
include '_db.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $country = $_POST['country'];
    $phone = $_POST['phone2'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Check if the table already exists
    $table_name = 'form_submissions';
    $check_table_sql = "SHOW TABLES LIKE '$table_name'";
    $table_exists = $conn->query($check_table_sql)->num_rows > 0;

    if (!$table_exists) {
        // Table doesn't exist, create it
        $create_table_sql = "
        CREATE TABLE $table_name (
            id INT AUTO_INCREMENT PRIMARY KEY,
            country VARCHAR(255) NOT NULL,
            phone VARCHAR(20) NOT NULL,
            name VARCHAR(255) NOT NULL,
            email VARCHAR(255) NOT NULL,
            submission_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )";
        if ($conn->query($create_table_sql) === TRUE) {
            
        } else {
            echo "Error creating table: " . $conn->error . "<br>";
        }
    }

    // Prepare and execute the SQL query to insert form data
    $sql = "INSERT INTO $table_name (country, phone, name, email) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $country, $phone, $name, $email);

    if ($stmt->execute()) {
        // Form data inserted successfully
        echo 1;
    } else {
        // Error occurred during insertion
        echo 'Error: ' . $stmt->error;
    }

    // Close the prepared statement
    $stmt->close();
} else {
    // Invalid request method
    http_response_code(405);
    echo 'Method Not Allowed';
}
?>
