<?php
  session_start();

  if(!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
  }

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <title>Dashboard</title>
   <style>
    .nav-link:hover {
      background-color: gold;
      color: white !important;
    }
  </style>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-info fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand text-white" href="#">SELAMAT DATANG ADMIN</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="ms-auto d-flex align-items-center">
          <div class="icon">
            <i class="fas fa-envelope-square me-3"></i>
            <i class="fas fa-bell-slash me-3"></i>
            <i class="fas fa-user-circle me-3"></i> <!-- Profil User Icon -->
            <i class="fas fa-sign-out-alt me-3"></i>
          </div>
        </div>
      </div>
    </div>
  </nav>

  <div class="row g-0 mt-5">
    <!-- Sidebar -->
    <!-- Main Content -->
    <div class="row g-0 mt-5">
        <!-- Sidebar -->
        <div class="col-md-2 bg-info mt-2 pt-4">
            <ul class="nav flex-column ms-3 mb-5">
                <li class="nav-item">
                    <a class="nav-link active text-white" href="dashboard.php">
                        <i class="fas fa-tachometer-alt me-2"></i>Dashboard
                    </a>
                    <hr class="bg-secondary">
                </li>
        
                <?php if ($role === 'mahasiswa' || $role === 'admin'): ?>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="mahasiswa.php">
                            <i class="fas fa-user-graduate me-2"></i>Daftar Mahasiswa
                        </a>
                        <hr class="bg-secondary">
                    </li>
                <?php endif;?>

                <?php if ($role === 'dosen' || $role === 'admin'): ?>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="dosen.php">
                            <i class="fas fa-chalkboard-teacher me-2"></i>Daftar Dosen
                        </a>
                        <hr class="bg-secondary">
                    </li>
                <?php endif;?>
                
                <?php if ($role === 'pegawai' || $role === 'admin'): ?>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="pegawai.php">
                            <i class="fas fa-users me-2"></i>Daftar Pegawai
                        </a>
                        <hr class="bg-secondary">
                    </li>
                <?php endif;?>

                </ul>
        </div>
    <!-- Content -->
    <div class="col-md-10 p-5 pt-2">
      <h3><i class="fas fa-tachometer-alt me-2"></i> Dashboard</h3><hr>

      <!-- Dashboard Cards -->
      <div class="row text-white">
        <div class="col-md-4">
          <div class="card bg-primary mb-3">
            <div class="card-body">
              <h5 class="card-title"><i class="fas fa-user-graduate me-2"></i>Mahasiswa</h5>
              <p class="card-text">Total: 100</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card bg-success mb-3">
            <div class="card-body">
              <h5 class="card-title"><i class="fas fa-chalkboard-teacher me-2"></i>Dosen</h5>
              <p class="card-text">Total: 50</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card bg-warning mb-3">
            <div class="card-body">
              <h5 class="card-title"><i class="fas fa-users me-2"></i>Pegawai</h5>
              <p class="card-text">Total: 30</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

    <div class="container mt-5">
      <h5>Selamat datang, <?= htmlspecialchars($_SESSION['username']);?>!</h5>
      <a href="logout.php" class="btn btn-danger mt-3">Logout</a>
    </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
