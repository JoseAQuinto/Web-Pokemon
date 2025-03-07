<?php

// Inicializamos los puntos de cada personalidad
$personalidades = [
    "valiente" => 0,
    "calmado" => 0,
    "sociable" => 0,
    "energetico" => 0
];

// Procesamos respuestas y asignamos puntos

// Pregunta 1 - Tiempo libre
switch ($_POST['pregunta1']) {
    case "aventura":
        $personalidades["valiente"]++;
        $personalidades["energetico"]++;
        break;
    case "relax":
        $personalidades["calmado"]++;
        break;
    case "social":
        $personalidades["sociable"]++;
        break;
}

// Pregunta 2 - Personalidad
switch ($_POST['pregunta2']) {
    case "valiente":
        $personalidades["valiente"]++;
        break;
    case "calmado":
        $personalidades["calmado"]++;
        break;
    case "energetico":
        $personalidades["energetico"]++;
        break;
}

// Pregunta 3 - Clima preferido
switch ($_POST['pregunta3']) {
    case "sol":
        $personalidades["energetico"]++;
        break;
    case "lluvia":
        $personalidades["calmado"]++;
        break;
    case "nublado":
        $personalidades["sociable"]++;
        break;
}

// Determinar personalidad dominante
arsort($personalidades);
$personalidadDominante = array_key_first($personalidades);

// Asignar Pokémon según personalidad
$pokemon = "";

switch ($personalidadDominante) {
    case "valiente":
        $pokemon = "Charmander";
        break;
    case "calmado":
        $pokemon = "Squirtle";
        break;
    case "sociable":
        $pokemon = "Bulbasaur";
        break;
    case "energetico":
        $pokemon = "Pikachu";
        break;
    default:
        $pokemon = "Ditto";  // Por si acaso
        break;
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="CSS/styles.css">
    <title>Resultado - Tu Pokémon</title>
</head>
<body>
    <h1>¡Tu Pokémon es <?= $pokemon ?>!</h1>
    <p>Según tus respuestas, tienes una personalidad <strong><?= $personalidadDominante ?></strong>.</p>
    <p>¡Eres como <?= $pokemon ?>!</p>
    <a href="index.html">Volver al inicio</a>
</body>
</html>
