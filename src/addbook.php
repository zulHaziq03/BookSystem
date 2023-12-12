<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../dist/output.css" rel="stylesheet">
    <title>Add Book</title>
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
            <a href="viewBookList.php" class="btn btn-ghost text-xl">View Book</a>
            <a href="addBook.php" class="btn btn-ghost text-xl">Add Book</a>
            <a href="searchBook.php" class="btn btn-ghost text-xl">Search Book</a>
            <a href="logout.php" class="btn btn-ghost text-xl">Logout</a>
        </div>
    </div>

    <!-- Main Content -->
    <div class="flex items-center justify-center h-screen bg-slate-950">
        <div class="card w-96 bg-white shadow-lg shadow-cyan-500/50 p-6 rounded-md">
            <div class="space-y-4">
                <h3 class="text-2xl font-bold">Add Book</h3>
                <!-- Add Book Form -->
                <?php
                // Include the connection file
                include "connection.php";

                // Check if the form is submitted
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // Retrieve form data
                    $isbn = mysqli_real_escape_string($con, $_POST["isbn"]);
                    $title = mysqli_real_escape_string($con, $_POST["title"]);
                    $author = mysqli_real_escape_string($con, $_POST["author"]);
                    $quantity = mysqli_real_escape_string($con, $_POST["quantity"]);
                    $price = mysqli_real_escape_string($con, $_POST["price"]);
                    $category = mysqli_real_escape_string($con, $_POST["category"]);

                    // Perform the database insertion
                    $query = "INSERT INTO buku (isbn, title, author, quantity, price, category) VALUES ('$isbn','$title', '$author', '$quantity', '$price','$category')";
                    $result = mysqli_query($con, $query);

                    // Check if the insertion was successful
                    if ($result) {
                        echo '<script>alert("Data has been succesfully inserted!");</script>';
                    } else {
                        echo "Error adding book: " . mysqli_error($con);
                    }
                }
                ?>
                <form method="POST">
                <div class="mb-4">
                        <label for="isbn" class="block text-sm font-medium text-gray-600">Isbn </label>
                        <input type="text" name="isbn" id="isbn" class="mt-1 p-2 w-full border rounded-md">
                    </div>
                    <div class="mb-4">
                        <label for="title" class="block text-sm font-medium text-gray-600">Title </label>
                        <input type="text" name="title" id="title" class="mt-1 p-2 w-full border rounded-md">
                    </div>

                    <div class="mb-4">
                        <label for="author" class="block text-sm font-medium text-gray-600">Author </label>
                        <input type="text" name="author" id="author" class="mt-1 p-2 w-full border rounded-md">
                    </div>

                    <div class="mb-4">
                        <label for="quantity" class="block text-sm font-medium text-gray-600">Quantity</label>
                        <input type="number" name="quantity" id="quantity" class="mt-1 p-2 w-full border rounded-md">
                    </div>
                    <div class="mb-4">
                        <label for="price" class="block text-sm font-medium text-gray-600">Price</label>
                        <input type="number" step="0.01" name="price" id="price" class="mt-1 p-2 w-full border rounded-md">
                    </div>
                    <div class="mb-4">
                        <label for="category" class="block text-sm font-medium text-gray-600">category </label>
                        <input type="text" name="category" id="category" class="mt-1 p-2 w-full border rounded-md">
                    </div>
                    <div class="flex items-center justify-end">
                        <button type="submit" class="btn btn-primary">Add Book</button>
                    </div>
                </form>
                <!-- End Add Book Form -->
            </div>
        </div>
    </div>

</body>

</html>
