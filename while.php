<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $i = 0;
    $sumc = 0;
    $suml = 0;
    while($i<=10){
        
        if ($i%2==0){
            $sumc += $i;
        }
        else{
            $suml += $i;
        }
        $i++;
    }
    echo "Sum of even numbers: ". $sumc. "<br>";
    echo "Sum of odd numbers: ". $suml. "<br>";
    ?>
</body>
</html>