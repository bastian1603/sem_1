<?php

session_start();

include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $user = $_POST["user"];
    $pass = $_POST["pass"];
    $user = mysqli_real_escape_string($conn, $user);
    $pass = mysqli_real_escape_string($conn, $pass);

    $data = mysqli_query($conn, "SELECT * FROM user WHERE username = '$user' AND password = '$pass'");

    $row = mysqli_fetch_array($data);

    if (mysqli_num_rows($data) > 0) {
        $_SESSION['username'] = $row['username'];
        header("Location: dashboard.php");
        exit();
    } else {
        $error = "Username atau password salah.";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>

    <div class="row justify-content-center">
        <div class="col-md-4">
            <h3 class="text-center">Login</h3>
            
            <?php if(isset($error)) : ?>
                <div class="alert alert-danger">
                    <?= $error ?>
                </div>
            <?php endif; ?>

            <form method="POST" action="">
                <div class="mb-3">
                    <label for="user" class="form-label">Username</label>
                    <input type="text" class="form-control" id="user" name="user" required>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
            
                <button type="submit" class="btn btn-primary w-100">Login</button>
            </form>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>