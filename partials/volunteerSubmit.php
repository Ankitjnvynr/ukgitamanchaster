<?php
include '_db.php';
try {
    $sql = "CREATE TABLE IF NOT EXISTS volunteer_data (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(50) NOT NULL,
        age INT(3) NOT NULL,
        city VARCHAR(50) NOT NULL,
        organisation VARCHAR(50) NOT NULL,
        organisation_name VARCHAR(50) NOT NULL,
        telephone VARCHAR(15) NOT NULL,
        email VARCHAR(50) NOT NULL,
        sewa1 VARCHAR(50) NOT NULL,
        sewa2 VARCHAR(50) NOT NULL,
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";
    
    if ($conn->query($sql) === true) {
        // echo "Table volunteer_data created successfully";
    } else {
        
    }
} catch (\Throwable $th) {
    echo "ERROR: Could not able to execute $sql. " . $conn->error;
}
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Escape user inputs for security
    $name = $conn->real_escape_string($_POST['v-name']);
    $age = $conn->real_escape_string($_POST['v-age']);
    $city = $conn->real_escape_string($_POST['v-city']);
    $organisation = $conn->real_escape_string($_POST['organisation']);
    $organisation_name = $conn->real_escape_string($_POST['v-organisation-name']);
    $telephone = $conn->real_escape_string($_POST['v-Telephone']);
    $email = $conn->real_escape_string($_POST['v-email']);
    $sewa1 = $conn->real_escape_string($_POST['v-sewa1']);
    $sewa2 = $conn->real_escape_string($_POST['v-sewa2']);

    // Attempt insert query execution
    $sql = "INSERT INTO volunteer_data (name, age, city, organisation, organisation_name, telephone, email, sewa1, sewa2) 
            VALUES ('$name', '$age', '$city', '$organisation', '$organisation_name', '$telephone', '$email', '$sewa1', '$sewa2')";
    if ($conn->query($sql) === true) {
        echo 'done';
    } else {
        echo "ERROR: Could not able to execute $sql. " . $conn->error;
    }
    // Close connection
    $conn->close();
}
?>

