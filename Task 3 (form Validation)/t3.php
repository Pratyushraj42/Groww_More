<?php
$servername = "localhost"; // Change to your database server name
$username = "root"; // Change to your database username
$password = ""; // Change to your database password
$dbname = "ef"; // Change to your database name

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Create a connection to the database
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Extract form data
    $dp = $_POST['dp'] ? $_POST['dp'] : 'https://simpleicon.com/wp-content/uploads/account.png';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $dob = $_POST['dob'];
    $gend = $_POST['gend'];

    // Insert data into the database
    $sql = "INSERT INTO form (dp, name, email, pass, dob, gend) VALUES ('$dp', '$name', '$email', '$pass', '$dob', '$gend')";

    if ($conn->query($sql) === TRUE) {
        // Data inserted successfully, redirect to avoid form resubmission
        header("Location: ".$_SERVER['PHP_SELF']);
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>










<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation in HTML</title>
    <link rel="stylesheet" href="t3.css">
    <!-- Fontawesome CDN Link For Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <style>
        .sliding-table {
            white-space: nowrap;
            overflow: hidden;
            width: 100%;
        }

        .sliding-table table {
            display: inline-block;
            white-space: nowrap;
            
        }
        .user-image {
            display: inline-block;
            width: 50px; /* Adjust the width as needed */
            height: 50px; /* Adjust the height as needed */
            margin-right: 10px;
            vertical-align: middle;
        }

    </style>
</head>
<body>
    <form method="post">
        <h2>Form Validation</h2>
        <div class="form-group fullname">
            <label for="profilepic">Image Url</label>
            <input name="dp" type="text" id="fullname" placeholder="Image Url (Profile Photo)">
        </div>
        <div class="form-group fullname">
            <label for="fullname">Full Name</label>
            <input name="name" type="text" id="fullname" placeholder="Enter your full name">
        </div>
        <div class="form-group email">
            <label for="email">Email Address</label>
            <input name="email" type="text" id="email" placeholder="Enter your email address">
        </div>
        <div class="form-group password">
            <label for="password">Password</label>
            <input name="pass" type="password" id="password" placeholder="Enter your password">
            <i id="pass-toggle-btn" class="fa-solid fa-eye"></i>
        </div>
        <div class="form-group date">
            <label for="date">Birth Date</label>
            <input name="dob" type="date" id="date" placeholder="Select your date">
        </div>
        <div class="form-group gender">
            <label for="date">Gender</label>
            <input name="gend" type="text" id="date" placeholder="(ex: Male,Female,Other)">
        </div>
        <div class="form-group submit-btn">
        <button type="submit">Register</button>
        </div>
    </form>
    <div class="sliding-table" id="displayData">
        <?php
        // Display submitted data from the database
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM form";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table>";
            echo "<tr><th>User Image</th><th>Full Name</th><th>Email Address</th><th>Password</th><th>Birth Date</th><th>Gender</th></tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td><img class='user-image' src='" . $row['dp'] . "' alt='User Image'></td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>Hidden</td>";
                echo "<td>" . $row['dob'] . "</td>";
                echo "<td>" . $row['gend'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        }
        $conn->close();
        ?>
    </div>
</body>
</html>