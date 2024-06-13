<?php
// Start session and check if the admin is logged in
session_start();
if (!isset($_SESSION['admin_email'])) {
    // Redirect to the login page if not logged in
    header('Location: admin_login.php');
    exit;
}

// Include the database connection
require 'connection.php';

// Function to delete an admin or customer
function deleteUser($conn, $table, $id) {
    // Determine the column name based on the table
    $column = ($table === 'admin') ? 'admin_id' : 'cus_id';

    // Prepare the SQL statement for deletion
    $sql = "DELETE FROM $table WHERE $column = ?";
    $stmt = $conn->prepare($sql);
    if ($stmt) {
        $stmt->bind_param('i', $id);
        $stmt->execute();
        $stmt->close();
    }
}

// Handle deletion requests
if (isset($_GET['delete_admin'])) {
    $admin_id = intval($_GET['delete_admin']);
    deleteUser($conn, 'admin', $admin_id);
    echo '<script>alert("Admin deleted successfully."); window.location.href="view_admins_customers.php";</script>';
    exit;
} elseif (isset($_GET['delete_customer'])) {
    $customer_id = intval($_GET['delete_customer']);
    deleteUser($conn, 'customer', $customer_id);
    echo '<script>alert("Customer deleted successfully."); window.location.href="view_admins_customers.php";</script>';
    exit;
}

// Fetch all admins
$sql = "SELECT admin_id, First_name, Last_name, email FROM admin";
$admins = $conn->query($sql);

// Fetch all customers
$sql = "SELECT cus_id, First_name, Last_name, email FROM customer";
$customers = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>View Admins and Customers</title>
    <link rel="stylesheet" href="\IWT\CSS\viewadminscustomers.css">
    
</head>
<body>
<header>
    <?php
    include '\xampp\htdocs\IWT\PHP\header.php';
    ?>
    </header>
    <div class="container mt-4">
        <!-- Navigation Bar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
            <a class="navbar-brand" href="#">Admin Panel</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="admin_signup.php">Add Admin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="signup.php">Add Customer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin_logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Admins Table -->
        <h2 class="mt-4">Admins</h2>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Admin ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($admin = $admins->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo htmlspecialchars($admin['admin_id']); ?></td>
                        <td><?php echo htmlspecialchars($admin['First_name']); ?></td>
                        <td><?php echo htmlspecialchars($admin['Last_name']); ?></td>
                        <td><?php echo htmlspecialchars($admin['email']); ?></td>
                        <td>
                            <a href="manage_admin.php?id=<?php echo htmlspecialchars($admin['admin_id']); ?>" class="btn btn-warning btn-sm">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <a href="view_admins_customers.php?delete_admin=<?php echo htmlspecialchars($admin['admin_id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this admin?')">
                                <i class="fas fa-trash"></i> Delete
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

        <!-- Customers Table -->
        <h2 class="mt-4">Customers</h2>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Customer ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($customer = $customers->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo htmlspecialchars($customer['cus_id']); ?></td>
                        <td><?php echo htmlspecialchars($customer['First_name']); ?></td>
                        <td><?php echo htmlspecialchars($customer['Last_name']); ?></td>
                        <td><?php echo htmlspecialchars($customer['email']); ?></td>
                        <td>
                            <a href="manage_customer.php?id=<?php echo htmlspecialchars($customer['cus_id']); ?>" class="btn btn-warning btn-sm">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <a href="view_admins_customers.php?delete_customer=<?php echo htmlspecialchars($customer['cus_id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this customer?')">
                                <i class="fas fa-trash"></i> Delete
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.net/npm/@fortawesome/fontawesome-free/js/all.min.js"></script>
    <footer>
        <?php
        include '\xampp\htdocs\IWT\PHP\footer.php';
        ?>
        </footer>
</body>
</html>
