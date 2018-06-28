<?php
function Escenario($listEscenario)
{
    # tabla para pintar el escenario
    echo "<div class='container text-center'><table class='table table-striped table-bordered'>";
    echo "<tr>";
    echo "<th colspan='6'><span class='badge badge-secondary'><h3>Escenario</span></h3></th>";
    echo "<tr>";
    echo "<th><span class='badge badge-secondary'><h3>Filas</span></h3></th>
        <th>1</th>
        <th>2</th>
        <th>3</th>
        <th>4</th> 
        <th>5</th>
    </tr>";
    
$i=1;
foreach ($listEscenario as $fila) # se recorre el array para pintar los campos de la tabla.
 {
    echo "<tr>";
    echo "<th>";
    echo $i;
    echo "</th>";
        foreach ($fila as $silla) 
        {
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