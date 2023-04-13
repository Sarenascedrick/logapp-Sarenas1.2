<html>
<head><title>Calculation Result</title></head>
<body>
<?php

$val1 = $_POST['val1'];
$val2 = $_POST['val2'];
$operator = $_POST['calc'];

// test if input is_numeric
if(is_numeric($val1) && is_numeric($val2)){
    // test if calc is not null
    if(!empty($val1 . $val2)){
        switch($operator){
            case 'add':
                $result = $val1 + $val2;
                break;
            case 'sub':
                $result = $val1 - $val2;
                break;
            case 'mul':
                $result = $val1 * $val2;
                break;
            case 'div':
                if($val2 == 0){
                    echo "Cannot divide by zero!";
                    break;
                }
                $result = $val1 / $val2;
                break;
            default: 
                echo 'Invalid operator'; 
                break;
        }
        echo "Calculation result: $result";
    }
    else{ 
        echo "Invalid entry - please retry"; 
    }
}
else{ 
    echo "Invalid input - please retry"; 
}
?>


</body>
</html>