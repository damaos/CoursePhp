<!DOCTYPE html>
<html>
<head>
    <title>Uso de formularios para transferencia.</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

</head>
<?php
     /*
    Danilo Martinez Osorno
    DESARROLLO WEB CON PHP(1703038)
    Taller “Uso de formularios para transferencia”
    */

# se llaman los archivos que contienen las funciones para imprimir el escenario y la accion que realiza el usuario.
require("cast.php");
require("actions.php");

// condicion de confirmacion de que el usuario haya enviado el formulario
if(isset($_REQUEST["Enviar"])){
                //Se captura la información enviada del formulario
                $fila = $_POST['fila'];
                $puesto = $_POST['puesto'];
                $accion = $_POST['accion'];
                $StringEscenario=$_POST['listEscenario'];
                //El String generado en el input oculto se convierte en un Array
                $count=0;
                for($i=0;$i<5;$i++){
                    for($j=0;$j<5;$j++){
                        $count=5*$i+$j;
                        //Cada captura cada elemento del Array extrayendo dicho elemento del String
                        $listEscenario[$i][$j]=substr($StringEscenario,$count,1);
                    }
                    $count=0;
                }
        //Se devuelve el Array con la información modificada por el usuario
        $listEscenario=Accion($fila,$puesto,$accion,$listEscenario);
        //Se ejecuta la funcion para mostrar el Escenario, dado el Array modificado
        Escenario($listEscenario);
}
//Se ejecuta el else if cuando el usario borra la informacion del formulario y cuando se carga la página
else if(isset($_REQUEST["Reset"]) || !isset($_REQUEST["Enviar"])){
    $listEscenario=array(
    array("L","L","L","L","L"),
    array("L","L","L","L","L"),
    array("L","L","L","L","L"),
    array("L","L","L","L","L"),
    array("L","L","L","L","L"));
    Escenario($listEscenario);
}
?>
    
<body>
<div class="container text-center">
    <table class="table">
        <form method="post">
            <!-- Se separa el array $listEscenario en un String y de oculta-->
            <input type="text" name="listEscenario" value="<?php foreach ($listEscenario as $fila) {foreach ($fila as $puesto){echo $puesto;}}?>" style="display:none" />
            <!-- Se crean los inputs que van a capturar la información introducida por el usario y las acciones-->
            <tr>
                <td>Fila: </td>
                <td>
                    <!-- Se muesta la lista con las opciones posibles para la fila-->
                    <select name="fila">
                        <option size="4">1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Puesto: </td>
                <td>
                    <!-- Se muesta la lista con las opciones posibles para la puesto-->
                    <select  name="puesto">
                        <option size="4">1</option>
                        <option size="4">2</option>
                        <option size="4">3</option>
                        <option size="4">4</option>
                        <option size="4">5</option>
                    </select>
                </td>
            </tr>
            <!-- Se muestra el radio button con las acciones posibles-->
            <tr>
                <td>Reservar: </td>
                <td>
                    <input  type="radio" name="accion" value="R" />
                </td>
            </tr>
            <tr>
                <td>Comprar: </td>
                <td>
                    <input  type="radio" name="accion" value="V" />
                </td>
            </tr>
            <tr>
                <td>Liberar: </td>
                <td>
                    <input  type="radio" name="accion" value="L" checked="checked" />
                </td>
            </tr>
            <tr>
                <!-- Se muestran los botones con las acciones de enviar la información o borrar toda la informacion ingresada-->
                <td>
                    <input id="borrar" class="btn" type="submit" value="Borrar" name="Reset" />
                </td>
                <td>
                    <input class="btn" type="submit" value="Enviar" name="Enviar" />
                </td>
            </tr>
        </form>
    </table>
    </div>
</body>