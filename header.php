<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/styles.css"  type="text/css">
    <link rel="stylesheet" href="./styles/prog.css"   type="text/css">
    <link rel="stylesheet" href="./styles/1000prog.css" type="text/css">
    <link rel="stylesheet" href="./styles/nosotros.css" type="text/css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<nav>
    <div class="wrapper">
    <a class="logolink" href="./index.php"><img src="./img/Logo-cimneacademiaClaro.png" alt="logo" class="logo"></a>
      <input type="radio" name="slider" id="menu-btn">
      <input type="radio" name="slider" id="close-btn">
      <ul class="nav-links m-0">
        <label for="close-btn" class="btn close-btn"><i class="fas fa-times"></i></label>
          <li>
            <a href="./index.php">Inicio</a>
          </li>
        <li>
          <a href="#" class="desktop-item">Menu <i class='bx bx-collapse-alt bx-tada' ></i></a>
          <input type="checkbox" id="showMega">
          <label for="showMega" class="mobile-item">Menu <i class='bx bx-collapse-alt bx-tada' ></i></label>
          <div class="mega-box">
            <div class="content">
              <div class="row">
              <header>Cursos <i class='bx bx-book bx-tada' ></i></header>
                <ul class="mega-links">
                  <li><a href="./1000prog.php">1000 Programadores</a></li>
                  <li><a href="./intro.php">Intro</a></li>
                  <li><a href="./programadores.php">Programador@s</a></li>
                  <li><a href="./phiip.php">PHIIP</a></li>
                </ul>
              </div>
              <div class="row">
                <header>Carreras <i class='bx bxs-graduation bx-tada' ></i></header>
                <ul class="mega-links">
                  <li><a href="./prog1.php">-Programacion 1</a></li>
                  <li><a href="#">-Ingles</a></li>
                  <li><a href="#">-Competencias del Emprendedor</a></li>
                </ul>
              </div>

              <div class="row">
                <header>Para Empresas <i class='bx bx-buildings'></i></header>
                <ul class="mega-links">
                  <!--<h3 class="espe">Capacitaciones ></h3>-->
                  <li><a href="#">-Programacion 1</a></li>
                  <li><a href="#">-Ingles</a></li>
                  <li><a href="#">-PHIIP</a></li>
                </ul>
              </div>

              <div class="row">
                <header>Nosotros <i class='bx bx-male-female'></i></header>
                <ul class="mega-links">
                  <li><a href="./nosotros.php">Equipo</a></li>
                  <li><a href="./nosotros.php">Valores</a></li>
                  <li><a href="./nosotros.php">Mision</a></li>
                  <li><a href="./nosotros.php">Vision</a></li>
                </ul>
              </div>

              <div class="row">
                <header>Nuestros Clientes <i class='bx bx-building-house'></i></header>
                <ul class="mega-links">
                  <li><a href="#">Ministerios</a></li>
                  <li><a href="#">UPAteCO</a></li>
                </ul>
              </div>

            </div>
          </div>
        </li>

<!--     <li>
          <a href="#" class="desktop-item">Nosotros</a>
          <input type="checkbox" id="showDrop">
          <label for="showDrop" class="mobile-item">Nosotros</label>
          <ul class="drop-menu p-0">
            <li><a href="#">Equipo</a></li>
            <li><a href="#">Valores</a></li>
            <li><a href="#">Mision</a></li>
            <li><a href="#">Vision</a></li>
          </ul>
        </li>-->

      </ul>
      <label for="menu-btn" class="btn menu-btn"><i class="fas fa-bars"></i></label>
    </div>
  </nav>

