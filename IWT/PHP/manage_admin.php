<?php
// Start session and check if the admin is logged in
session_start();
if (!isset($_SESSION['admin_email'])) {
    // Redirect to login page if not logged in
    header('Location: admin_login.php');
    exit;
}

// Include the database connection
require 'connection.php';

// Define the function to delete an admin
function deleteAdmin($conn, $admin_id) {
    $sql = "DELETE FROM admin WHERE admin_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $admin_id);
    $stmt->execute();
    $stmt->close();
}

// Handle admin deletion
if (isset($_GET['delete'])) {
    $admin_id = intval($_GET['delete']);
    deleteAdmin($conn, $admin_id);
    header('Location: view_admins_customers.php');
    exit;
}

// Handle form submission for updating an admin
if (isset($_POST['update'])) {
    // Retrieve and sanitize user inputs
    $admin_id = intval($_POST['admin_id']);
    $firstName = $_POST['First_name'];
    $lastName = $_POST['Last_name'];
    $email = $_POST['email'];

    // Update the admin information in the database
    $sql = "UPDATE admin SET First_name = ?, Last_name = ?, email = ? WHERE admin_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sssi', $firstName, $lastName, $email, $admin_id);
    if ($stmt->execute()) {
        echo '<script>alert("Admin information updated successfully."); window.location.href="view_admins_customers.php";</script>';
    } else {
        echo 'Error updating admin information: ' . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

// Check if an admin ID is provided for editing
$admin_id = isset($_GET['id']) ? intval($_GET['id']) : 0;
$admin = null;

if ($admin_id > 0) {
    // Fetch the admin data from the database
    $sql = "SELECT * FROM admin WHERE admin_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $admin_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $admin = $result->fetch_assoc();

    // Check if admin data is found
    if (!$admin) {
        echo 'Admin not found.';
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
    <title>Manage Admin</title>
    <link rel="stylesheet" href="\IWT\CSS\manageadmincustomer.css">
</head>
<body>
    <div class="container mt-4">
        <h1>Manage Admin</h1>
        <?php if ($admin_id > 0 && $admin) { ?>
            <!-- Form to edit and update admin -->
            <form action="manage_admin.php" method="POST">
                <input type="hidden" name="admin_id" value="<?php echo htmlspecialchars($admin_id); ?>">
                <div class="mb-3">
                    <label for="First_name" class="form-label">First Name</label>
                    <input type="text" name="First_name" id="First_name" class="form-control" value="<?php echo htmlspecialchars($admin['First_name']); ?>" required>
                </div>
                <div class="mb-3">
                    <label for="Last_name" class="form-label">Last Name</label>
                    <input type="text" name="Last_name" id="Last_name" class="form-control" value="<?php echo htmlspecialchars($admin['Last_name']); ?>" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control" value="<?php echo htmlspecialchars($admin['email']); ?>" required>
                </div>
                <button type="submit" name="update" class="btn btn-primary">Save Changes</button>
                <a style="text-align:center" href="view_admins_customers.php" class="btn btn-secondary">Cancel</a>
            </form>
        <?php } else { ?>
            <p>Invalid admin ID.</p>
        <?php } ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
