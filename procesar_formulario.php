<?php
//Recoge en el array los datos descritos en el formulario y los asigna a una nueva variable. Para posteriormente utilizarla para imprimirla en los resultados del formulario.
$nombre = $_GET['nombre'];
$apellidos = $_GET['apellidos'];
$fecha = $_GET['fnacimiento'];
$email = $_GET['email'];
$telefono = $_GET['telefono'];
/*Evita que los campos de texto se queden vacíos, no se utiliza isset porque éste se encarga de saber si existe. Como pueden
enviarse cadenas vacías, es mejor utilizar: empty(). Importante la condición OR ||*/
    if(empty($_GET['nombre']) || empty($_GET['apellidos'])||empty($_GET['fnacimiento'])||empty($_GET['email'])||empty($_GET['telefono'])){
        echo 'Por favor, completa todos los campos.<br/>';
    }
    else{//Envía al navegador los datos recogidos del formulario. concatenando con la variable definida anteriormente.
        echo "Nombre:".$nombre."<br/>";
        echo "Apellidos:".$apellidos."<br/>";
        echo "Fecha de nacimiento:".$fecha."<br/>";
        echo "Email:".$email."<br/>";
        echo "Teléfono:".$telefono."<br/>";
    }

/*Almacena el checkbox aceptar condiciones se almacene en una variable para comprobar que exita (isset)
 y poder enviar un mensaje en caso de no aceptarlas*/
    if(isset($_GET['condiciones'])){   //Crear un bucle if-else para comprobar que está establecido el checkbox condiciones y almacenado por lo tanto en su variable
        echo "Has aceptado los términos y condiciones.<br/>";   //Si lo has aceptado y por lo tanto existe(almacenado en array), lanza al navegador el echo (Condiciones aceptadas)
    }
    else{
        echo "Debes aceptar los términos y condiciones.<br/>";   //Si NO se aceptan y por lo tanto no existe en array), lanza al navegador el echo (DEBES aceptarlas)
    }

//EJERCICIO 2: Almacenar las actividades en array y recorrer con foreach.
    if(isset($_GET['actividades'])){//Si exite o es establecido un valor al checkbox y por tanto almacenado en el array... hace x instrucción
        print_r($_GET ['actividades']);// print_r es un método para recorrer un array y muestra la posición de cada elemento dentro del array. var_dump muestra el número de string y el número de elementos del array.
    }
    $actividad=$_GET['actividades'];
    foreach($_GET['actividades'] as $indice => $actividad){
        echo $actividad. '<br/>'
    }
    //Recorrer el array con un for y count que cuente los elementos 
?>
