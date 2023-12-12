<?php
$con = mysqli_connect("localhost","root","","booktbl");
$no = $_GET['no'];
$m = "SELECT * FROM buku WHERE no = '$no'";
$result = mysqli_query($con, $m);
$data = mysqli_fetch_assoc($result);
if (isset($_POST['Submit'])) {
    $isbn = $_POST['isbn'];
    $title = $_POST['title'];
    $author = $_POST['author'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $category = $_POST['category'];
    $edit = "UPDATE buku SET isbn = '$isbn', title = '$title', author='$author', price='$price', category='$category', quantity='$quantity' WHERE no = '$no'";
    if (mysqli_query($con, $edit)) {
        echo "<script>alert('List of Book has been successfully updated'); location='viewBookList.php';</script>";
    } else {
        echo "Error updating record: " . mysqli_error($con);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Include Tailwind CSS and DaisyUI stylesheets -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@1.0.0/dist/full.css" rel="stylesheet">
    <title>Edit Book</title>
</head>

<body class="bg-gray-100 p-8">

    <div class="max-w-md mx-auto">
        <div class="card bg-white shadow-lg shadow-cyan-500/50 p-6 rounded-md">
            <h3 class="text-2xl font-bold mb-4">EDIT BOOK</h3>
            <form method="POST">
                <div class="mb-4">
                    <label for="isbn" class="block text-sm font-medium text-gray-600">ISBN</label>
                    <input type="text" name="isbn" id="isbn" value="<?php echo $data['isbn']; ?>" class="mt-1 p-2 w-full border rounded-md">
                </div>
                <div class="mb-4">
                    <label for="title" class="block text-sm font-medium text-gray-600">Title</label>
                    <input type="text" name="title" id="title" value="<?php echo $data['title']; ?>" class="mt-1 p-2 w-full border rounded-md">
                </div>
                <div class="mb-4">
                    <label for="author" class="block text-sm font-medium text-gray-600">Author</label>
                    <input type="text" name="author" id="author" value="<?php echo $data['author']; ?>" class="mt-1 p-2 w-full border rounded-md">
                </div>
                <div class="mb-4">
                    <label for="price" class="block text-sm font-medium text-gray-600">Price (RM)</label>
                    <input type="text" name="price" id="price" value="<?php echo $data['price']; ?>" class="mt-1 p-2 w-full border rounded-md">
                </div>
                <div class="mb-4">
                    <label for="quantity" class="block text-sm font-medium text-gray-600">Quantity</label>
                    <input type="text" name="quantity" id="quantity" value="<?php echo $data['quantity']; ?>" class="mt-1 p-2 w-full border rounded-md">
                </div>
                <div class="mb-4">
                    <label for="category" class="block text-sm font-medium text-gray-600">Category</label>
                    <input type="text" name="category" id="category" value="<?php echo $data['category']; ?>" class="mt-1 p-2 w-full border rounded-md">
                </div>
                <div class="flex items-center justify-end">
                    <input type="submit" name="Submit" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>

</body>

</html>
