
<?php

session_start();
require_once "functions.php";

// Comprobar administrador
if (!isset($_SESSION["role"]) || $_SESSION["role"] != "admin") {
    header("Location: home.php");
    exit();
}

// Variables vacías
$id = "";
$titulo = "";
$autor = "";
$imagen = "";
$descripcion = "";

// Comprobar si estamos editando
if (isset($_GET["id"])) {

    $id = $_GET["id"];

    if (isset($_SESSION["libros"][$id])) {

        $titulo = $_SESSION["libros"][$id]["titulo"];
        $autor = $_SESSION["libros"][$id]["autor"];
        $imagen = $_SESSION["libros"][$id]["imagen"];
        $descripcion = $_SESSION["libros"][$id]["descripcion"];

    }

}

// Procesar formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $titulo = $_POST["titulo"];
    $autor = $_POST["autor"];
    $imagen = $_POST["imagen"];
    $descripcion = $_POST["descripcion"];
    $id = $_POST["id"];

    if ($titulo != "" && $autor != "") {

        // Si tiene ID, editamos
        if ($id != "") {

            editarLibro($id, $titulo, $autor, $imagen, $descripcion);

        } else {

            // Si no tiene ID, agregamos
            agregarLibro($titulo, $autor, $imagen, $descripcion);

        }

        header("Location: home.php");
        exit();

    }

}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Biblioteca Virtual</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>

    <header class="bg-light py-3 mb-4 shadow-sm">

        <div class="container d-flex align-items-center justify-content-between">

            <div>
                <h4>👋 Bienvenido, <?php echo $_SESSION["username"]; ?></h4>
                <p class="text-muted">Admin ✏️</p>
            </div>

            <a href="home.php" class="btn btn-secondary btn-sm">
                Volver a la Biblioteca
            </a>

        </div>

    </header>

    <div class="container">

        <div class="text-center mb-5">

            <?php if ($id != "") { ?>

                <h2 class="fw-bold">Editar libro</h2>
                <p class="lead">Modifica los datos del libro</p>

            <?php } else { ?>

                <h2 class="fw-bold">Agregar libro</h2>
                <p class="lead">Añade un nuevo libro</p>

            <?php } ?>

        </div>

        <form method="POST" class="mx-auto" style="max-width: 600px;">

            <input type="hidden" name="id" value="<?php echo $id; ?>">

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="titulo"
                       name="titulo" value="<?php echo $titulo; ?>"
                       placeholder="Título" required>
                <label for="titulo">Título</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="autor"
                       name="autor" value="<?php echo $autor; ?>"
                       placeholder="Autor" required>
                <label for="autor">Autor</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="imagen"
                       name="imagen" value="<?php echo $imagen; ?>"
                       placeholder="URL de la Imagen">
                <label for="imagen">URL de la Imagen</label>
            </div>

            <div class="form-floating mb-4">
                <textarea class="form-control" id="descripcion"
                          name="descripcion" placeholder="Descripción"
                          style="height: 150px;"><?php echo $descripcion; ?></textarea>
                <label for="descripcion">Descripción</label>
            </div>

            <div class="d-grid">

                <button type="submit" class="btn btn-primary btn-lg">
                    Guardar
                </button>

            </div>

        </form>

    </div>

</body>
</html>
