<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./styles/styles.css" rel="stylesheet"  type="text/css">
    <link rel="stylesheet" href="./styles/slider.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
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
          <a href="#" class="desktop-item">Menu</a>
          <input type="checkbox" id="showMega">
          <label for="showMega" class="mobile-item">Menu</label>
          <div class="mega-box">
            <div class="content">
              <div class="row">
              <header>Cursos</header>
                <ul class="mega-links">
                  <li><a href="#">1000 Programadores</a></li>
                  <li><a href="#">Intro</a></li>
                  <li><a href="#">Programador@s</a></li>
                  <li><a href="#">PHIIP</a></li>
                </ul>
              </div>
              <div class="row">
                <header>Carreras</header>
                <ul class="mega-links">
                  <h3 class="espe">Técnicatura en Desarrollo de Software ></h3>
                  <li><a href="#">-Programacion 1</a></li>
                  <li><a href="#">-Ingles</a></li>
                  <li><a href="#">-Competencias del Emprendedor</a></li>
                </ul>
              </div>

              <div class="row">
                <header>Para Empresas</header>
                <ul class="mega-links">
                  <h3 class="espe">Capacitaciones ></h3>
                  <li><a href="#">-Programacion 1</a></li>
                  <li><a href="#">-Ingles</a></li>
                  <li><a href="#">-PHIIP</a></li>
                </ul>
              </div>

              <div class="row">
                <header>Nosotros</header>
                <ul class="mega-links">
                  <li><a href="#">Equipo</a></li>
                  <li><a href="#">Valores</a></li>
                  <li><a href="#">Mision</a></li>
                  <li><a href="#">Vision</a></li>
                </ul>
              </div>

              <div class="row">
                <header>Nuestros Clientes</header>
                <ul class="mega-links">
                  <li><a href="#">Ministerios</a></li>
                  <li><a href="#">UPAteCO</a></li>
                  <li><a href="#">Silentium</a></li>
                </ul>
              </div>




            </div>
          </div>
        </li>

        <li>
          <a href="#" class="desktop-item">Nosotros</a>
          <input type="checkbox" id="showDrop">
          <label for="showDrop" class="mobile-item">Nosotros</label>
          <ul class="drop-menu p-0">
            <li><a href="#">Equipo</a></li>
            <li><a href="#">Valores</a></li>
            <li><a href="#">Mision</a></li>
            <li><a href="#">Vision</a></li>
          </ul>
        </li>

      </ul>
      <label for="menu-btn" class="btn menu-btn"><i class="fas fa-bars"></i></label>
    </div>
  </nav>

