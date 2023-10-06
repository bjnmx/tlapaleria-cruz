<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!--    <meta name="viewport" content="width=device-width, initial-scale=1.0">-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title  id="pageTitle"> Login</title>
    <link rel="stylesheet" href="./css/login.css">

    <script src="./js/animacionLogin.js"></script><!--    showlogin  showLoading-->
</head>
<body>


<div class="login-container">


    <h2>Iniciar sesión</h2>

    <form action="" method="POST">
        <label for="usuario" id="usuarioLabel">Nombre de usuario</label>
        <input type="text" id="login_usuario" name="login_usuario" placeholder="Nombre de usuario" oninput="changeTextColor('login_usuario')" pattern="[a-zA-Z0-9]{4,20}" maxlength="20" required>
        <br><br>

        <label for="clave" id="claveLabel">Contraseña</label>
        <input type="password" id="login_clave" name="login_clave" placeholder="Contraseña" oninput="changeTextColor('login_clave')" pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100"><ul></ul>

        <button type="submit" class="custom-btn" onclick="showLoading()">Login</button><br><br>

    </form>

</div>




</body>
</html>


