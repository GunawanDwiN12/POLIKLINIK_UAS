<?php
include_once("koneksi.php");

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
}else{
     header("Location: index.php");
     exit();
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, 
    initial-scale=1.0"> 

    <!-- Bootstrap Online -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Sistem Informasi Poliklinik</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <title>Sistem Informasi Poliklinik</title>   <!--Judul Halaman-->
</head>
<body>
<nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      Sistem Informasi Poliklinik
    </a>
    <button class="navbar-toggler"
    type="button" data-bs-toggle="collapse"
    data-bs-target="#navbarNavDropdown"
    aria-controls="navbarNavDropdown" aria-expanded="false"
    aria-label="Toggle navigation">
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="dashboard.php">
            Home
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button"
          data-bs-toggle="dropdown" aria-expanded="false">
            Data Master
          </a>
          <ul class="dropdown-menu">
            <li>
              <a class="dropdown-item" href="dashboard.php?page=dokter">
                Dokter
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="dashboard.php?page=pasien">
                Pasien
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="dashboard.php?page=dataObat">
                Data Obat
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" 
          href="dashboard.php?page=periksa">
            Periksa
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" 
          href="dashboard.php?page=detailPeriksa">
            Detail Periksa
          </a>
        </li>
      </ul>
    </div>
    <a class="btn btn-primary" href="index.php" role="button">Logout</a>
  </div>
</nav>
    <main role="main" class="container">
    <?php
    if (isset($_GET['page'])) {
    ?>
        <h2><?php echo ucwords($_GET['page']) ?></h2>
    <?php
        include($_GET['page'] . ".php");
    } else {
        echo "Selamat Datang di Sistem Informasi Poliklinik";
    }
    ?>
</main>
</body>
</html>

