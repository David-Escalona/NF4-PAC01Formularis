<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Verificar si se han proporcionado todos los datos necesarios
    if (isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['num3']) && isset($_POST['operacion'])) {
        // Obtener los datos del formulario
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $num3 = $_POST['num3'];
        $operacion = $_POST['operacion'];

        // Realizar la operación seleccionada
        switch ($operacion) {
            case 'sumar':
                $resultado = $num1 + $num2 + $num3;
                $operacionTexto = 'Suma';
                break;
            case 'restar':
                $resultado = $num1 - $num2 - $num3;
                $operacionTexto = 'Resta';
                break;
            case 'multiplicar':
                $resultado = $num1 * $num2 * $num3;
                $operacionTexto = 'Multiplicación';
                break;
            case 'dividir':
                // Verificar si el divisor es diferente de cero para evitar la división por cero
                if ($num2 != 0 && $num3 != 0) {
                    $resultado = $num1 / $num2 / $num3;
                    $operacionTexto = 'División';
                } else {
                    $resultado = 'Error: División por cero';
                    $operacionTexto = 'División';
                }
                break;
            default:
                $resultado = 'Error: Operación no válida';
                $operacionTexto = 'Operación no válida';
        }

        // Mostrar el resultado
        echo "<h2>Resultado de la $operacionTexto:</h2>";
        echo "<p>Número 1: $num1</p>";
        echo "<p>Número 2: $num2</p>";
        echo "<p>Número 3: $num3</p>";
        echo "<p>Resultado: $resultado</p>";
    } else {
        echo "Por favor, complete todos los campos del formulario.";
    }
} else {
    echo "Acceso no válido.";
}
?>



