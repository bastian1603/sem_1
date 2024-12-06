<?php 

include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
          $id_user = mysqli_real_escape_string($conn, $_POST["id_user"]);
          $username = mysqli_real_escape_string($conn, $_POST["username"]);
          $password = $_POST["password"];

          $role = mysqli_real_escape_string($conn, $_POST["role"]);

          $hashed_pass = password_hash($password, PASSWORD_DEFAULT);

          $query = "INSERT INTO user (id, username, password, role) VALUES ('$id_user', '$username', 
          '$hashed_pass', '$role'";

          if(mysqli_query($conn, $query)) {
                    echo "<script>alert('Registrasi Berhasil'); window.location='login.php';</script>";
          }else {
                    echo "<script>alert('Registrasi gagal: " . mysqli_error($conn) ."'); window.history.back();</script>";
          }
}

?>