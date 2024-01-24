<?php
session_start();
include('db_config.php');

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch orders from the database
$sql = "SELECT * FROM orders";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Add your CSS styles here -->
    <link rel="stylesheet" href="dashboard.css">
</head>

<body>
    <div class="admin-dashboard">
        <h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>

        <!-- Display Orders -->
        <table id="orders-table">
            <tr>
                <th>Table Number</th>
                <th>Price</th>
                <th>Items (with Quantity)</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
            <?php
            // Display orders
            while ($row = $result->fetch_assoc()) {
                echo "<tr data-order-id='{$row['id']}'>
                        <td>{$row['table_number']}</td>
                        <td>{$row['price']}</td>
                        <td>{$row['items']}</td>
                        <td class='status'>Pending</td>
                        <td>
                            <button class='pending-btn'>Pending</button>
                            <button class='completed-btn'>Completed</button>
                            <button class='remove-btn'>Remove</button>
                        </td>
                      </tr>";
            }
            ?>
        </table>

        <a href="logout.php" class="logout-btn">Log out</a>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const table = document.getElementById('orders-table');

                table.addEventListener('click', function (event) {
                    const target = event.target;
                    const row = target.closest('tr');
                    const orderId = row.dataset.orderId;
                    const statusCell = row.querySelector('.status');

                    if (target.classList.contains('pending-btn')) {
                        statusCell.textContent = 'Pending';
                    } else if (target.classList.contains('completed-btn')) {
                        statusCell.textContent = 'Completed';
                    } else if (target.classList.contains('remove-btn')) {
                        row.remove();
                    }

                    // You can add AJAX requests here to update the status in the database.
                });
            });
        </script>
    </div>
</body>

</html>

<?php
// Close the database connection
$conn->close();
?>