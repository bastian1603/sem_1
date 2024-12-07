<?php
include '../koneksi.php';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $user = mysqli_real_escape_string($conn, $user);
    $pass = mysqli_real_escape_string($conn, $pass);
    $data = mysqli_query($conn, "SELECT * FROM users WHERE username='$user' AND password='$pass' ");
    $row = mysqli_fetch_array($data);
    
    
    if (mysqli_num_rows($data) > 0) {
       
        session_start();
        $_SESSION['username'] = $row['id'];
        header("Location: ../../dashboard/"); //PINDAHI  KE DASHBOARD DISINI//
        exit();

    } else {
        
        echo "<script>
        alert('Username atau password salah!'); 
        window.location.href = '../login/';
        </script>";
    }
}
?>
