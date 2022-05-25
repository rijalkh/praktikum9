<?php 
	include "koneksi.inc.php";

	$username = $_POST["username"];
	$password = $_POST["password"];

	$sql = mysqli_query($conn,"select username, password from users where password='$password'");

    $cek = mysqli_num_rows($sql);
    
    $row = mysqli_fetch_array($sql);

    if ($cek==0 OR $username!=$row['username'] AND $password!=$row['password']) {
        echo "Login gagal, username dan password salah..!";
    } else {
        header("location:cetak.php");
    }

    
    mysqli_close($conn);
?>
