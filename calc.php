<?php 

    include 'class.php';

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $cal = $_POST['cal'];

    $calcu = new Calculator($num1, $num2, $cal);
    
    echo $calcu->cal();
?>  