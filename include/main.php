<?php
echo '   
<main>

<form action="./include/procesa.php" method="get">


    <label for="nombre">Nombre y apellidos</label>
    <input type="text" value="" name="nombre"><br>

    <label for="averia">Tipo de averia</label><br>
    <select name="averia">
        <option value="1">Motor</option>
        <option value="2">Ruedas</option>
        <option value="3">Pintura</option>
        <option value="4">Interior</option>
    </select><br>

    <label for="marca">Que marca es tu coche</label><br>
    <input type="checkbox" name="marca" value="1"><label for="marca">Mercedes</label><br>
    <input type="checkbox" name="marca" value="2"><label for="marca">Ford</label><br>
    <input type="checkbox" name="marca" value="3"><label for="marca">BMW</label><br>
    <input type="checkbox" name="marca" value="4"><label for="marca">Seat</label><br>

    <label for="puertas">Puertas del coche</label>
    <input type="number" name="puertas"><br>

    <label for="tema">Tema de la paguina</label><br>
    <input type="radio" name="tema"><label for="tema">Claro</label><br>
    <input type="radio" name="tema"><label for="tema">Oscuro</label><br>
    <input type="radio" name="tema"><label for="tema">Pastel</label><br>

    <label for="valoracion">Tu valoracion del servicio</label>
    <input name="valoracion" type="number" max="5" min="0"><br>

    <label for="opinion">Danos tu opinion</label>
    <textarea name="opinion" cols="30" rows="5"></textarea><br>


    <input type="submit" name="Enviar">

</form>



</main>
';
