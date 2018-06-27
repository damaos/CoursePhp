<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
    <title>Uso de arreglos</title>
</head>
<body>
    <h3 class="center-align">Lista de personas</h3>
    <?php
    $personas = array(
        array(
            'Juan Perez', 'Cra. 45 # 45-56','3456789','23/12/1997','Amarillo'
        ),
        array(
            'Pablo Manrique', 'Clle 23 # 12-19 Sur','3214567','12/10/1980','Verde'
        ),
        array(
            'Nancy Peña', 'Av 34 # 16-12', '2135423', '07/06/2000','Rojo'
        ),
        array(
            'Nancy Peña', 'Av 34 # 16-12', '2135423', '07/06/2000','Prueba'
        ),
    );

    $colores = array(
        "Amarillo" => "Riqueza y Alegria",
        "Verde" => NULL,
        "Rojo" => NULL
    );

    $noAplica = '<td><small><i><span style="color:red">No se encontró ningún significado</span></i></small></td>'
    ?>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Direccion</th>
                <th>Teléfono</th>
                <th>Cumpleaños</th>
                <th>Color favorito</th>
                <th>Significado</th>
            </tr>
        </thead>
        <tbody>
            <?php
            /* Nombre del Desarrollador es Danilo Martinez Osorno
            Curso de desarrollo web con php
            Actividad de aprendizaje 2
            Evidencia: Taller “Uso de arreglos”
             */

            foreach($personas as $i => $persona) { # se itera el array de las personas
                echo '<tr>';
                foreach($persona as $j => $campo) { # se pinta la informacion de cada persona
                    echo '<td>' . $campo . '</td>';

                    if (array_key_exists($campo, $colores) && $j==4) { # Se compara si hay colores que coincidan en el array de $personas y el de $colores.
                        if ($colores[$campo]) {                        # Condicion que asegura que el color tenga algún significado.
                            echo '<td>' . $colores[$campo] . '</td>'; 
                        } else {
                            echo $noAplica; # si el color no tiene manda un error que de no existe!.
                        }
                    } elseif ($j==4) {
                        echo $noAplica;
                    }
                }
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
</body>
</html>