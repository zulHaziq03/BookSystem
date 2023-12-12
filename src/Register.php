<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../dist/output.css" rel="stylesheet">
    <title>Register</title>
</head>
<body>
<body class="bg-gray-100 h-screen flex items-center justify-center">
    <div class="card w-96 bg-white shadow-lg shadow-cyan-500/50 p-6 rounded-md">
        <h3 class="text-2xl font-bold mb-4">REGISTER ACCOUNT</h3>
        <form method="POST">
            <div class="mb-4">
                <label for="username" class="block text-sm font-medium text-gray-600">Username:</label>
                <input type="text" name="username" class="mt-1 p-2 w-full border rounded-md" required>
            </div>

            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-600">Password:</label>
                <input type="password" name="password" class="mt-1 p-2 w-full border rounded-md">
            </div>

            <div class="mb-4">
                <label for="repeatPassword" class="block text-sm font-medium text-gray-600">Repeat Password:</label>
                <input type="password" name="repeatPassword" class="mt-1 p-2 w-full border rounded-md">
            </div>

            <button type="submit" name="Submit" class="bg-blue-500 text-white p-2 rounded-md">Submit</button>
        </form>

        <div class="mt-4">
            <a href="index.php" class="text-blue-500">LOGIN</a>
            <span class="mx-2">|</span>
            <a href="view.php" class="text-blue-500">RECORD</a>
        </div>
    </div>

    <?php
    include "connection.php";

    // Check if the form is submitted
    if (isset($_POST['Submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $repeatPassword = $_POST['repeatPassword'];

        // Check if passwords match
        if ($password != $repeatPassword) {
            echo "<script>alert('Passwords did not match!')</script>";
        } else {
            // Insert data into the database
            $insert = "INSERT INTO user(username, password) VALUES ('$username', '$password')";

            if (mysqli_query($con, $insert)) {
                echo '<script>alert("Data has been successfully inserted!");</script>';
            } else {
                echo 'Error: ' . mysqli_error($con);
            }
        }
    }
    ?>
</body>
</body>
</html>