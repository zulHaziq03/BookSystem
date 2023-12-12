<?php
$con = mysqli_connect("localhost","root","","booktbl");
$no = $_GET['no'];
$delete = "DELETE FROM buku WHERE no = '$no'";
$del=mysqli_query($con,$delete);
if(!$del){
    echo mysqli_error($con);
}
else{
    header("Location: viewBookList.php");
}
?>