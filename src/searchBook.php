<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Include Tailwind CSS and DaisyUI stylesheets -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@1.0.0/dist/full.css" rel="stylesheet">
    <title>Search Book</title>
</head>

<body class="bg-gray-100">

    <!-- Navigation Bar -->
    <div class="navbar bg-base-100">
        <div class="flex-none">
            <button class="btn btn-square btn-ghost">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    class="inline-block w-5 h-5 stroke-current">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16"></path>
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

    <!-- Main Content -->
    <div class="max-w-md mx-auto mt-8 p-6 bg-white shadow-lg shadow-cyan-500/50 rounded-md">
        <form id="form1" name="carian" method="post" action="viewSearchBook.php">
            <div class="mb-4">
                <label for="textfield" class="block text-sm font-medium text-gray-600">Name</label>
                <input type="text" name="title" id="textfield"
                    class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:ring focus:border-blue-300">
            </div>
            <div class="flex items-center justify-end">
                <input type="submit" name="submit" id="button" value="Submit"
                    class="btn btn-primary">
            </div>
        </form>
        <a href="viewBookList.php" class="mt-4 block text-blue-500 hover:underline">RECORD</a>
    </div>

</body>

</html>
