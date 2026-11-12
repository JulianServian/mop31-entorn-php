
<?php

session_start();
require_once "functions.php";

// Verificar si ha iniciado sesión
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}

// Verificar el rol
$rol = $_SESSION["role"];

// Obtener los libros
$libros = $_SESSION["libros"];

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Biblioteca Virtual - Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/home.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body class="library-page">

    <!-- Encabezado del usuario -->
    <header class="user-header py-3">
        <div class="container d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">

                <img src="<?php echo $_SESSION["photo"]; ?>"
                     alt="Foto de perfil" class="profile-photo rounded-circle me-3"
                     width="80" height="80">

                <div>
                    <h4 class="m-0">
                        👋 Bienvenido, <?php echo $_SESSION["username"]; ?>
                    </h4>

                    <?php if ($rol == "admin") { ?>

                        <p class="text-muted m-0">
                            <i class="fas fa-user-shield text-success"></i>
                            Admin ✏️
                        </p>

                    <?php } else { ?>

                        <p class="text-muted m-0">Lector 📚</p>

                    <?php } ?>

                </div>
            </div>

            <a href="logout.php" class="btn logout-button btn-sm">
                Cerrar sesión ❌
            </a>
        </div>
    </header>

    <main class="container library-content">

        <div class="library-hero text-center">
            <span class="hero-eyebrow">UN LUGAR PARA CADA HISTORIA</span>
            <h1 class="display-4 fw-bold">Biblioteca <span>Virtual</span></h1>
            <p class="lead">Disfruta explorando nuestra colección de libros</p>
        </div>

        <!-- Botón de agregar libro solo para admin -->

        <?php if ($rol == "admin") { ?>

            <div class="text-center add-book-action">
                <a href="add_edit_book.php" class="btn add-book-button btn-lg">
                    <i class="fas fa-plus-circle me-2"></i>Agregar Nuevo Libro
                </a>
            </div>

        <?php } ?>

        <!-- Mostrar libros -->

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 book-grid">

            <?php foreach ($libros as $id => $libro) { ?>

                <div class="col">
                    <div class="card h-100 book-card">

                        <img src="<?php echo $libro["imagen"]; ?>"
                             class="card-img-top book-cover" alt="<?php echo $libro["titulo"]; ?>">

                        <div class="card-body">

                            <h2 class="card-title">
                                <?php echo $libro["titulo"]; ?>
                            </h2>

                            <p class="card-text book-author">
                                <span>Autor</span>
                                <?php echo $libro["autor"]; ?>
                            </p>

                            <p class="card-text book-description">
                                <?php echo $libro["descripcion"]; ?>
                            </p>

                        </div>

                        <!-- Botones solo para admin -->

                        <?php if ($rol == "admin") { ?>

                            <div class="card-footer book-actions d-flex justify-content-between">

                                <a href="add_edit_book.php?id=<?php echo $id; ?>"
                                   class="btn btn-outline-primary btn-sm">
                                    <i class="fas fa-edit"></i> Editar
                                </a>

                                <a href="delete_book.php?id=<?php echo $id; ?>"
                                   class="btn btn-outline-danger btn-sm">
                                    <i class="fas fa-trash-alt"></i> Eliminar
                                </a>

                            </div>

                        <?php } ?>

                    </div>
                </div>

            <?php } ?>

        </div>
    </main>

</body>
</html>
