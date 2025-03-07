<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="CSS/styles.css">
    <title>Test Pokémon - ¿Qué Pokémon eres?</title>
</head>
<body>
    <h1>Descubre qué Pokémon eres</h1>
    <form action="resultado.php" method="POST">

        <p>1. ¿Qué prefieres hacer en tu tiempo libre?</p>
        <label><input type="radio" name="pregunta1" value="aventura"> Explorar nuevos lugares</label>
        <label><input type="radio" name="pregunta1" value="relax"> Relajarme en casa</label>
        <label><input type="radio" name="pregunta1" value="social"> Salir con amigos</label>

        <p>2. ¿Cómo te describes?</p>
        <label><input type="radio" name="pregunta2" value="valiente"> Valiente y decidido</label>
        <label><input type="radio" name="pregunta2" value="calmado"> Calmado y reflexivo</label>
        <label><input type="radio" name="pregunta2" value="energetico"> Lleno de energía</label>

        <p>3. ¿Qué clima prefieres?</p>
        <label><input type="radio" name="pregunta3" value="sol"> Soleado</label>
        <label><input type="radio" name="pregunta3" value="lluvia"> Lluvioso</label>
        <label><input type="radio" name="pregunta3" value="nublado"> Nublado</label>

        <button type="submit">Descubrir mi Pokémon</button>
    </form>
</body>
</html>
