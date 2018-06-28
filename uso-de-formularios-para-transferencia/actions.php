<?php
function Accion($fila,$puesto,$accion,$listEscenario) {

        # dependiendo de lo que elija el usuario se modificara el array $listEscenario

        if($listEscenario[$fila-1][$puesto-1]=="L")
        {
            $listEscenario[$fila-1][$puesto-1]=$accion;
        }
        
        # Condiciones que mandan una alerta dependiendo de la opcion escogida por el usuario

        elseif($listEscenario[$fila-1][$puesto-1]=="V")
        {
            echo "<script>alert('Este puesto ya está vendido";
            if($accion=="L")
            {
                echo "; ¡No se puede liberar!";
            }
            elseif($accion=="R")
            {
                echo "; ¡No se puede reservar!";
            }
            elseif($accion=="V")
            {
                echo "; ¡No se puede volver a vender!";
            }
        echo "')";
        echo "</script>'";
        }
        
        # Condicion que asegura que el puesto esta reservado y ya no se puede reservar
        elseif($listEscenario[$fila-1][$puesto-1]=="R" && $accion=="R")
        {
            echo "<script>
            alert('¡Este puesto ya esta reservado!');
            </script>'";
            }
            //Si el puesto esta reservado y la accion es diferente a reservar se modifica el array con la accion elegida por el usuario
            elseif($listEscenario[$fila-1][$puesto-1]=="R" && $accion!="R")
            {
                $listEscenario[$fila-1][$puesto-1]=$accion;
            }
            //Se retorna el Array modificado
    return $listEscenario;
    }
?>