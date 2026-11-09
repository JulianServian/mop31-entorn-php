<?php

session_start();

// miro si existe basura 
if (!isset($_SESSION['basura'])) {

    $_SESSION['basura'] = [
        "papel",
        "botella",
        "lata",
        "manzana",
        "periodico",
        "tarro",
        "botella"
    ];

    // Contadores
    $_SESSION['contenedores'] = [
        "papel" => 0,
        "vidrio" => 0,
        "plastico" => 0,
        "organico" => 0
    ];

    // Residuos reciclados
    $_SESSION['reciclados'] = 0;
}

// Capacidad máxima
$capacidadMaxima = 3;

// Tipos de residuos
$residuos = [
    "papel" => "papel",
    "periodico" => "papel",
    "botella" => "vidrio",
    "tarro" => "vidrio",
    "lata" => "plastico",
    "manzana" => "organico"
];

?>
