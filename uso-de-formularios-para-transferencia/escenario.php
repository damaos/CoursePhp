<?php
function Escenario($ListEscenario){
    //Se crea la tabla y sus encabezados
echo "<div class='container text-center'><table class='table table-striped table-bordered'>";
            echo "<tr>";
            echo "<th colspan='6'><h3>Escenario</h3></th>";
            echo "<tr>";
                /*-- Se crean los encabezados de las tabla*/
                echo "<th></th>
                <th>1</th>
                <th>2</th>
                <th>3</th>
                <th>4</th> 
                <th>5</th>
            </tr>";
    //Se recorre el Array mediante con un foreach y se imprime cada fila y columna de la tabla
$i=1;
foreach ($ListEscenario as $fila) {
    echo "<tr>";
       echo "<th>";
       echo $i;
       echo "</th>";
    foreach ($fila as $silla) {
        echo "<td>";
        echo $silla;
        echo "</td>";
    }
    echo "</tr>";
    $i++;
    }
echo "</table> <div>";
}
?>