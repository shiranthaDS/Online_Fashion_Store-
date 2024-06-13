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

// Function to delete a customer
function deleteCustomer($conn, $customer_id) {
    $sql = "DELETE FROM customer WHERE cus_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $customer_id);
    $stmt->execute();
    $stmt->close();
}

// Handle customer deletion
if (isset($_GET['delete'])) {
    $customer_id = intval($_GET['delete']);
    deleteCustomer($conn, $customer_id);
    header('Location: view_admins_customers.php');
    exit;
}

// Handle form submission for updating customer information
if (isset($_POST['update'])) {
    // Retrieve and sanitize user inputs
    $customer_id = intval($_POST['cus_id']);
    $firstName = $_POST['First_name'];
    $lastName = $_POST['Last_name'];
    $email = $_POST['email'];

    // Update customer information in the database
    $sql = "UPDATE customer SET First_name = ?, Last_name = ?, email = ? WHERE cus_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sssi', $firstName, $lastName, $email, $customer_id);
    if ($stmt->execute()) {
        echo '<script>alert("Customer information updated successfully."); window.location.href="view_admins_customers.php";</script>';
    } else {
        echo 'Error updating customer information: ' . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

// Check if a customer ID is provided for editing
$customer_id = isset($_GET['id']) ? intval($_GET['id']) : 0;
$customer = null;

if ($customer_id > 0) {
    // Fetch the customer data from the database
    $sql = "SELECT * FROM customer WHERE cus_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $customer_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $customer = $result->fetch_assoc();

    // Check if customer data is found
    if (!$customer) {
        echo 'Customer not found.';
        exit;
    }

    // Close the statement
    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Manage Customer</title>
    <link rel="stylesheet" href="\IWT\CSS\manageadmincustomer.css">
</head>
<body>
    <div class="container mt-4">
        <h1>Manage Customer</h1>
        <?php if ($customer_id > 0 && $customer) { ?>
            <!-- Form to edit and update customer -->
            <form action="manage_customer.php" method="POST">
                <input type="hidden" name="cus_id" value="<?php echo htmlspecialchars($customer_id); ?>">
                <div class="mb-3">
                    <label for="First_name" class="form-label">First Name</label>
                    <input type="text" name="First_name" id="First_name" class="form-control" value="<?php echo htmlspecialchars($customer['First_name']); ?>" required>
                </div>
                <div class="mb-3">
                    <label for="Last_name" class="form-label">Last Name</label>
                    <input type="text" name="Last_name" id="Last_name" class="form-control" value="<?php echo htmlspecialchars($customer['Last_name']); ?>" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control" value="<?php echo htmlspecialchars($customer['email']); ?>" required>
                </div>
                <button type="submit" name="update" class="btn btn-primary">Save Changes</button>
                <a href="view_admins_customers.php" class="btn btn-secondary">Cancel</a>
            </form>
        <?php } else { ?>
            <p>Invalid customer ID.</p>
        <?php } ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
