<?php

$nombre = $_GET['nombre'];
$averia = $_GET['averia'];
$marca = $_GET['marca'];
$puertas = $_GET['puertas'];
$tema = $_GET['tema'];
$valoracion = $_GET['valoracion'];
$opinion = $_GET['opinion'];


include './header.php';


switch ($tema) {
    case 1:
        print "<link rel=\"stylesheet\" href=\"../css/claro.css\">";
        break;
    case 2:
        print "<link rel=\"stylesheet\" href=\"../css/Oscuro.css\">";
        break;
    case 3:
        print "<link rel=\"stylesheet\" href=\"../css/pastel.css\">";
        break;
}



print "<p>Nombre completo del cliente: $nombre </p>";
switch ($averia) {
    case 1:
        print "<p>El motor es una de las piezas fundamentales en el coche, eso es bien sabido. Pero… ¿Qué ocurre si éste se avería? ¿Cómo se puede solventar las averías del motor? </p>";
        break;
    case 2:
        print "<p>La peor avería por llevar los neumáticos en mal estado es siempre el riesgo de accidente. Los neumáticos en mal estado están bien para que los niños jueguen en los colegios. Circular con ellos en malas condiciones es una trampa mortal que, además, genera muchas averías en otros componentes a medio y largo plazo. </p>";
        break;
    case 3:
        print "<p>Es recomendable encerar el auto al menos 4 veces al año (en cada cambio de estación) y de preferencia el uso de productos que contengan teflón o silicón es idóneo para que la suciedad se adhiera, lo que o hará más sencillo de lavar </p>";
        break;
    case 4:
        print "<p>Como norma general, es importante retirar primero polvo y suciedad con agua y algún jabón específico. Luego, hay zonas como el salpicadero o el interior de las puertas que pueden tratarse de forma esporádica con productos específicos para mejorar su brillo o proteger su aspecto original </p>";
        break;
}
switch ($marca) {
    case 1:
        print "<img src=\"../img/MercedesLogo.png\"  style=\"width: 100px; height: 100px;\">";
        break;
    case 2:
        print "<img src=\"../img/fordLogo.png\"  style=\"width: 150px; height: 100px;\">";
        break;
    case 3:
        print "<img src=\"../img/BMWLogo.png\"  style=\"width: 100px; height: 100px;\">";
        break;
    case 4:
        print "<img src=\"../img/SEATLogo.png\"  style=\"width: 130px; height: 100px;\">";
        break;
}
print "<br>";
for ($i = 1; $i <= $puertas; $i++) {
    print "<img src=\"../img/puerta.png\"  style=\"width: 50px; height: 50px;\">";
}
print "<br>";
for ($i = 1; $i <= $valoracion; $i++) {
    print "<img src=\"../img/valoracion.png\"  style=\"width: 15px; height: 15px;\">";
}

include './footer.php';
