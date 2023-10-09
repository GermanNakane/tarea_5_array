<?php
/* 1. Almacenar en un array los 10 primeros números pares 
y mostrar en pantalla uno debajo del otro. */
echo "<h3>Diez primeros números pares</h3>\n";
$i=0;
$pares=array();
for($num=2; $num<=20; $num+=2){
    $pares[$i]=$num;
    $i++;
}
foreach($pares as $valor) {
    print "<p>$valor</p>\n";   
}
echo "<br> <br>";
/* 2. Crear un array e introducir los siguientes valores: 
Pedro, Ana, 34 y 1, sin asignar el índice de la
matriz. . Mostrar el esquema del array con print_r(). */
echo "<h3>Crear un array y mostrarlo con print_r</h3><br>";
$variado=array("Pedro", "Ana", 34, 1);
print_r($variado);
echo "<br> <br>";
/* 3. Crear un array asociativo e introducir los siguientes valores:
Nombre: Pedro
Apellido: Torres
Dirección: Av. Mayor 3703
Teléfono: 1122334455 */
echo "<h3>Crear array asociativo</h3><br>";
$ficha["Nombre"]="Pedro";
$ficha["Apellido"]="Torres";
$ficha["Dirección"]="Av. Mayor 3703";
$ficha["Teléfono"]=1122334455;
print_r($ficha);
echo "<br> <br>";

/* 4. Crear un array introduciendo las ciudades: Madrid, 
Barcelona, Londres, New York, Los Ángeles y Chicago, 
sin asignar índices al array. A continuación, muestra el 
contenido del array.
Ejemplo: La ciudad con el índice 0 tiene el nombre Madrid. */
echo "<h3>Índices y ciudades</h3>\n";
$cities=array("Madrid", "Barcelona", "Londres", "New York", "Los Ángeles", "Chicago");
foreach($cities as $indice=>$ciudad){
    print "<p>La ciudad con el índice $indice tiene el nombre $ciudad<p>\n";
}
echo "<br> <br>";
/* 5. Repite el ejercicio anterior pero ahora se ha de crear índices, 
MD para Madrid, BCL para Barcelona, LD para Londres, NY para New York, 
LA para Los Ángeles y CCG para Chicago. Ejemplo: El índice de Madrid es MD. */
echo "<h3>ABREV y ciudades</h3>\n";
$cities2["MD"]="Madrid";
$cities2["BCL"]="Barcelona";
$cities2["LD"]="Londres";
$cities2["NY"]="New York";
$cities2["LA"]="Los Ángeles";
$cities2["CCG"]="Chicago";

foreach($cities2 as $indice2=>$ciudad2){
    print "<p>El índice de $ciudad2 es $indice2<p>\n";
}
?>