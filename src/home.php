<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../dist/output.css" rel="stylesheet">
    <title>Home</title>
</head>

<body class="bg-gray-100">

    <!-- Navigation Bar -->
    <div class="navbar bg-base-100">
        <div class="flex-none">
            <button class="btn btn-square btn-ghost">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-5 h-5 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
            </button>
        </div>
        <div class="flex-1">
            <a href="#" class="btn btn-ghost text-xl">Book System</a>
        </div>
        <div class="flex-none space-x-4">
            <a href="home.php" class="btn btn-ghost text-xl">Home</a>
            <a href="viewbooklist.php" class="btn btn-ghost text-xl">View Book</a>
            <a href="addBook.php" class="btn btn-ghost text-xl">Add Book</a>
            <a href="searchBook.php" class="btn btn-ghost text-xl">Search Book</a>
            <a href="logout.php" class="btn btn-ghost text-xl">Logout</a>
        </div>
    </div>

    <!-- Main Content -->

        <?php
        session_start();

        // Include the connection file
        include "connection.php";

        // Redirect to login page if the user is not logged in
        if (!isset($_SESSION['username'])) {
            header("location: login.php");
            exit();
        }

        // Retrieve the username from the session
        if (isset($_SESSION['username'])) {
            $username = $_SESSION['username'];
        }
        ?>
<div class="flex items-center justify-center h-screen bg-slate-950">
<div class="card w-96 bg-white shadow-lg shadow-cyan-500/50 p-6 rounded-md">
            <div class="space-y-4">
                <h3 class="text-2xl font-bold">Welcome Page</h3>
                <p>Welcome, <?php echo $_SESSION['username']; ?> </p>
            </div>
        </div>
        <!-- Your existing PHP code goes here -->
        <!-- Example: Display user details from the database -->
        <?php
        // Example: Fetch and display user details from the database
        $query = "SELECT * FROM users WHERE username = '$username'";
        $result = mysqli_query($con, $query);

        if ($result) {
            $user = mysqli_fetch_assoc($result);
            echo "<p>Email: " . $user['email'] . "</p>";
            // Add more details as needed
        }
        ?>

        <!-- Your existing content goes here -->

    

    <!-- Include any necessary JavaScript files if needed -->
</div>
</body>

</html>
