<?php

require_once __DIR__ . "/../includes/iniciar.php";

if (isset($_POST['accion'])) {

    if ($_POST['accion'] == "reciclar") {

        $contenedor = $_POST['contenedor'];

        $residuo = $_SESSION['basura'][0];

        if (isset($_SESSION['contenedores'][$contenedor])) {

            if ($_SESSION['contenedores'][$contenedor] >= $capacidadMaxima) {

                $_SESSION['mensaje'] = "El contenedor está llenisimo";
            } 

            // Comprobamos si es el contenedor correcto
            else if ($residuos[$residuo] == $contenedor) {

                // Eliminar
                array_shift($_SESSION['basura']);

                // + 1 al contador
                $_SESSION['contenedores'][$contenedor]++;

                // Sumamos un residuo reciclado
                $_SESSION['reciclados']++;

                // meto un residuo aleatorio a la cola
                $nuevoResiduo = array_rand($residuos);

                array_push($_SESSION['basura'], $nuevoResiduo);

                $_SESSION['mensaje'] = "Muy bieeen, has reciclado bien";

            } else {

                $_SESSION['mensaje'] = "Mal hecho bro, prueba otro contenedor, espabila";

            }

        }

    }

    // Vaciar los contenedores
    if ($_POST['accion'] == "vaciar") {

        $_SESSION['contenedores'] = [
            "papel" => 0,
            "vidrio" => 0,
            "plastico" => 0,
            "organico" => 0
        ];

        $_SESSION['mensaje'] = "Vaciaste los contenedores";
    }
}

// Volver a la pagina principal
header("Location: index.php");
exit();
