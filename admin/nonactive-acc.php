<?php
require '../function.php';
$id = $_GET["user_id"];

$status = "0";

$query = "UPDATE user SET status='$status' WHERE user_id='$id'";
$result = mysqli_query($conn, $query);
    if ($result) {
        echo "<script>
                alert('Akun berhasil dinonaktifkan!'); window.location='index.php';
            </script>";
    } else {
        echo "<script>
                alert('Akun gagal dinonaktifkan!'); window.location='index.php';
            </script>";
    }
?>