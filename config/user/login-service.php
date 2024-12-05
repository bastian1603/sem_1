<?php
include '../koneksi.php';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
       
        session_start();
        $_SESSION['username'] = $username;
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
