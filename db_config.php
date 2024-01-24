<?php
$servername = "localhost";
$username = "admin";
$password = "admin";
$database = "burger_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the request is a POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the JSON data from the request body
    $orderData = json_decode(file_get_contents("php://input"), true);

    // Extract table number and items from the order data
    $tableNumber = $orderData['tableNumber'];
    $orderItems = $orderData['items'];

    // Validate and sanitize data (you should do more thorough validation in a production environment)
    $tableNumber = mysqli_real_escape_string($conn, $tableNumber);

    // Insert order items into the database
    foreach ($orderItems as $item) {
        $itemName = mysqli_real_escape_string($conn, $item['name']);
        $itemPrice = $item['price'];
        $itemQuantity = $item['quantity'];

        $insertQuery = "INSERT INTO orders (table_number, item_name, item_price, item_quantity) 
                        VALUES ('$tableNumber', '$itemName', $itemPrice, $itemQuantity)";

        // Execute the query
        if (!$conn->query($insertQuery)) {
            echo json_encode(['error' => 'Error inserting data into the database']);
            exit();
        }
    }

    // Send a response (you can customize this based on your needs)
    echo json_encode(['success' => true]);
} else {
    // Handle non-POST requests or provide an error response
    echo json_encode(['error' => 'Invalid request method']);
}

// Close the database connection
$conn->close();
?>