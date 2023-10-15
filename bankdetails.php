
<?php
session_start(); // Start the session

// Check if the user is logged in (i.e., user ID is set in the session)
if (!isset($_SESSION['user_id'])) {
    // Redirect to the login page or show an access denied message if not logged in
    header("Location: signup.php"); // Replace with your login page
    exit();
}

require_once("db_connection.php");

// Check if the form has been submitted for updating user information
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["update_profile"])) {
    $newUsername = $_POST["newUsername"];
    $newEmail = $_POST["newEmail"];

    // Update user data in the database based on the user's ID
    $user_id = $_SESSION['user_id'];
    $sqlUpdate = "UPDATE users SET username = ?, email = ? WHERE id = ?";
    $stmtUpdate = mysqli_prepare($conn, $sqlUpdate);
    mysqli_stmt_bind_param($stmtUpdate, "ssi", $newUsername, $newEmail, $user_id);

    if (mysqli_stmt_execute($stmtUpdate)) {
        // Update user data in the session
        $_SESSION['username'] = $newUsername;
        $_SESSION['email'] = $newEmail;
    } else {
        $updateError = "Error updating user information: " . mysqli_error($conn);
    }

    mysqli_stmt_close($stmtUpdate);
}

// Retrieve user data from the session
$username = $_SESSION['username'];
$newemail = $_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>MST Coin Auction - Your Dashboard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <link rel="stylesheet" href="bank.css">
    <link href='https://fonts.googleapis.com/css?family=Young Serif' rel='stylesheet'>
    <link rel="icon" href="images/logo2.png" type="image/x-icon">
    <script defer src="JS_index3.js"></script>
    <link rel="icon" href="images/logo2.png" type="image/x-icon">
</head>

<body>
    <header>
        <h1>Welcome to MST</h1>
    </header>
    <nav>
        <ul>
            <li><a href="dashboard.php"><i class="feather icon-home"></i> Dashboard</a></li>
            <li class="topnav-right"><a href="index.php">Sign Out</a></li>
            <li class="topnav-right"><a href="profile.php">Profile</a></li>
        </ul>
    </nav>

    <main>
        <section class="bank-details-section" id="bankDetailsForm">
            <div class="container">
                <h2>Banking Details</h2>
                <p>Enter or update your banking information below:</p>
                <form id="bankDetailsForm" action="process_bank_details.php" method="post"
                    onsubmit="return validateBankDetailsForm();">
                    <div class="form-group">
                        <label for="accountHolder">Account Holder Name</label>
                        <input type="text" id="accountH" name="accountHolder" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="accountNumber">Account Number</label>
                        <input type="text" id="accountN" name="accountNumber" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="bankName">Bank Name</label>
                        <input type="text" id="bankN" name="bankName" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="branch">Branch</label>
                        <input type="text" id="branc" name="branch" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Banking Details</button>
                </form>
            </div>
        </section>
    </main>
</body>


</html>