<?php
    echo '<hr/>';
    switch($_POST['operation']){
        case '0':
            echo $_POST['num1']+$_POST['num2'];
        break;
        case '1':
            echo $_POST['num1']-$_POST['num2'];
        break;
        case '2':
            echo $_POST['num1']*$_POST['num2'];
        break;
        case '3':
            echo $_POST['num1']/$_POST['num2'];
        break;
    }
    echo '<hr/>';
?>