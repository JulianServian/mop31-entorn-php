
<?php

session_start();
require_once "functions.php";

$error = "";

// Usuarios
$usuarios = [
    ["username" => "Admin", "password" => "adminpass", "role" => "admin"],
    ["username" => "usuario", "password" => "usuario123", "role" => "lector"]
];

// Procesar formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];
    $password = $_POST["password"];
    $photo = $_POST["photo"];

    // Recorrer usuarios
    foreach ($usuarios as $usuario) {

        // Comprobar credenciales
        if ($username == $usuario["username"] && $password == $usuario["password"]) {

            $_SESSION["username"] = $usuario["username"];
            $_SESSION["role"] = $usuario["role"];
            $_SESSION["photo"] = $photo;

            header("Location: home.php");
            exit();

        }

    }

    $error = "Usuario o contraseña incorrectos.";

}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca Virtual - Login</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <section>

        <?php for ($i = 0; $i < 180; $i++): ?>
            <span></span>
        <?php endfor; ?>

        <div class="signin">
            <div class="content text-center">

                <h2>Inicia sesión</h2>

                <form method="POST" action="login.php">

                    <div class="inputBox">
                        <input class="p-2 m-2" placeholder="Usuario"
                               type="text" name="username" required>
                    </div>

                    <div class="inputBox">
                        <input class="p-2 m-2" placeholder="Contraseña"
                               type="password" name="password" required>
                    </div>

                    <div class="inputBox">
                        <input class="p-2 m-2" placeholder="Foto de perfil"
                               type="text" name="photo" required>
                    </div>

                    <?php if (!empty($error)) : ?>
                        <div class="alert alert-danger">
                            <?php echo $error; ?>
                        </div>
                    <?php endif; ?>

                    <div class="inputBox">
                        <input class="bg-warning btn mt-2"
                               type="submit" value="Iniciar">
                    </div>

                </form>

            </div>
        </div>

    </section>

</body>
</html>
