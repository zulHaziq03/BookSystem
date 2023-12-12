<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../dist/output.css" rel="stylesheet">
    <title>Login User</title>
   
</head>
<body class="flex items-center justify-center h-screen bg-slate-950 ">
    <div class="card w-96 h-60 bg-base-100 shadow-xl shadow-cyan-500/50">
        <form method="post" class="text-center"><br>
  <h1><b>Login</b></h1><br>

            <div class="container">
                <label for="username"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="username" required class="p-2 mb-2 border-solid border-2 border-sky-500 rounded"><br>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" required class="p-2 mb-2 border-solid border-2 border-sky-500 rounded "><br>
                    
                <div class="card-actions justify-center">
                    <button class="btn btn-primary  " type="submit" name="submit">Login</button>
                </div>
            </div><br>
            <div>
            <p >   Sign Up Here!!!  </p> <br>
                <button type="button" class="registerBtn" onclick="document.location='Register.php'">Sign Up</button><br>
                <span class="psw">Forgot <a href="">password?</a></span>
            </div>
            
        </form>
        
    </div>
    <?php
    session_start();
    $con = mysqli_connect("localhost","root","","booktbl");
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query = "select * from user where username= '$username' and password= '$password'";

        $result = mysqli_query($con,$query);
        $rows = mysqli_num_rows($result);
        if ($rows==1){
            $_SESSION['username'] =$username;
            header("location:home.php");

        }
        else{
            echo "<script>alert('Wrongly inserted username or password!'); location='index.php'</script>";
        }

    }
    ?>
  
</body>
</html>
<!--npx tailwindcss -i ./src/index.css -o ./dist/output.css --watch-->
