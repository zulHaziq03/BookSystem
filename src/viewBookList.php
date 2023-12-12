<?php
$con = mysqli_connect("localhost", "root", "", "booktbl");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Include Tailwind CSS and DaisyUI stylesheets -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@1.0.0/dist/full.css" rel="stylesheet">
    <title>View Record</title>
</head>

<body class="bg-gray-100">

    <!-- Navigation Bar -->
    <div class="navbar bg-base-100">
        <div class="flex-none">
            <button class="btn btn-square btn-ghost">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-5 h-5 stroke-current">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
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
    <!-- End Navigation Bar -->

    <div class="max-w-2xl mx-auto mt-8">
        <div class="card bg-white shadow-lg shadow-cyan-500/50 p-6 rounded-md">
            <h3 class="text-2xl font-bold mb-4">VIEW RECORD</h3>
            <table class="w-full table-auto">
                <thead>
                    <tr>
                        <th class="border-b">No</th>
                        <th class="border-b">ISBN</th>
                        <th class="border-b">Title</th>
                        <th class="border-b">Author</th>
                        <th class="border-b">Price (RM)</th>
                        <th class="border-b">Quantity</th>
                        <th class="border-b">Category</th>
                        <th class="border-b">Edit</th>
                        <th class="border-b">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $record = "SELECT * FROM buku";
                    $result = mysqli_query($con, $record);
                    while ($data = mysqli_fetch_assoc($result)) {
                    ?>
                        <tr>
                            <td class="border-b"><?php echo $data['no']; ?></td>
                            <td class="border-b"><?php echo $data['isbn']; ?></td>
                            <td class="border-b"><?php echo $data['title']; ?></td>
                            <td class="border-b"><?php echo $data['author']; ?></td>
                            <td class="border-b"><?php echo $data['price']; ?></td>
                            <td class="border-b"><?php echo $data['quantity']; ?></td>
                            <td class="border-b"><?php echo $data['category']; ?></td>
                            <td class="border-b">
                                <a href="editBook.php?no=<?php echo $data['no'];?>" class="text-blue-500 hover:underline">Edit</a>
                            </td>
                            <td class="border-b">
                                <a href="deleteBook.php?no=<?php echo $data['no'];?>" onclick="return confirm('Are you sure want to delete!')" class="text-red-500 hover:underline">Delete</a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>
