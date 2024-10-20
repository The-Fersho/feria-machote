<?php
// Require the constants
require('./app/config/constantes.php');
?>
<!doctype html>
<html lang="es">
<head>
    <title>Registrarse</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="./assets/img/favicon.ico" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png" />

    <!-- implementar tailwind -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="./style.css"> -->
    <link rel="stylesheet" href="cl-icon/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        * {
  margin: 0;
  padding: 0;
  font-family: arial;
  color: #fff;
}
body {
  width: 100vw;
  height: 100vh;
  background: #ffffff;
  display: grid;
  justify-content: center;
  align-content: center;
}
::-webkit-input-placeholder {
  color: #eee;
}
.wrapper {
  position: relative;
  width: 800px;
  height: auto;
  display: grid;
  grid-template-columns: 1fr 1fr;
  border: 3px solid #76bdff;
  box-shadow: 0 0 50px 0 #099dff;
}

.form {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}
.title {
  padding-top: 20px;
  padding-bottom: 10px;
  font-size: 17px;
  color:#000000;
}
.inp {
  padding-bottom: 5px;
  border-bottom: 2px solid #eee;
}
.input {
  border: none;
  outline: none;
  background: none;
  width: 260px;
  margin-top: 10px;
  padding-right: 10px;
  font-size: 14px;
  color: rgb(0, 4, 255);
}
.btnagregar {
  border: none;
  outline: none;
  width: 288px;
  margin-top: 15px;
  padding: 10px 0;
  font-size: 15px;
  border-radius: 40px;
  letter-spacing: 1px;
  cursor: pointer;
  color: #ffffff;
  background: linear-gradient(45deg,  rgb(0, 4, 255), #76bdff);
}
.footer {
  margin-top: 15px;
  margin-bottom: 15px;
  padding-left: 20px;
  letter-spacing: 0.5px;
  font-size: 14px;
  color: #000000;
}
.link {
  color: #76bdff;
  text-decoration: none;
  padding-left: 5px;
}
.banner {
  position: absolute;
  top: 0;
  right: 0;
  width: 460px;
  height: 407px;
  background: linear-gradient(to right, rgb(0, 4, 255), #76bdff);
  clip-path: polygon(0 0, 100% 0, 100% 100%, 60% 100%);
  padding-right: 60px;
  text-align: right;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: flex-end;
}

.wel_text {
  font-size: 40px;
  margin-top: -50px;
  line-height: 50px;
}
.para {
  margin-top: 10px;
  font-size: 18px;
  line-height: 24px;
  letter-spacing: 1px;
}

.fondonavegacion{
  color: rgb(255, 255, 255);
  border: none;
  padding: 5px 10px;
  border-radius: 5px;
  box-shadow: 4px 4px 2px 1px rgba(0, 0, 0, 0.2);
}
    </style>
</head>

<body>
    <div class="wrapper">
    <form class="form" method="POST">
            <h3 class="text-center title">Crear usuario Nuevo</h3>
            <?php
            include "modelo/conexion.php";
            include "controlador/crear_usuario.php";
            ?>

            <div class="inp">
              <input for="exampleInputEmail1" type="text" class="input form-control" name="name" placeholder="Nombre">
            </div>

            <div class="inp">
              <input for="phone" type="text" class="input form-control" name="phone" placeholder="Telefono">
            </div>

            <div class="inp">
              <input for="email" type="text" class="input form-control" name="email" placeholder="correo o usuario">
            </div>

            <div class="inp">
              <input type="password" for="pass" class="input form-control" name="pass"placeholder="Contraseña">
            </div>
            <div class="centrar">
              <button type="submit" name="btnregistrar" value="ok" class="btnagregar  btn btn-primary">agregar</button>
              <p class="footer">ya tienes una cuenta <a href="login.php" class="link">Inicia sesión</a></p>
            </div>
          </form>
    
        <div class="banner">
            <h1 class="wel_text">Bienvenid@</h1><br>
            <p class="para"></p>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>