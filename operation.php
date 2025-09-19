<?php
// Check if the form has been submitted

session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the input values             
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];

    // Perform the calculation based on the operation
    switch($operation) {
        case 'add':
            $result = $num1 + $num2;
            break;
        case 'subtract':
            $result = $num1 - $num2;
            break;
        case 'multiply':
            $result = $num1 * $num2;
            break;
        case 'divide':
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                $result = "Error: Division by zero!";
            }
            break;
        default:
            $result = "Invalid operation!";
    }

    echo "<h3>The result is: $result</h3>";
}
exit();
?>