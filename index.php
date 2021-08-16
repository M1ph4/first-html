<?PHP 
$name = "steffi"; 
$num1 = 5;
$num2 = 27;
$suma = $num1 + $num2;
// echo "hola, soy ". $name. "\n"; 
// echo "la suma de " . $num1 . " más " . $num2 . " es: " . $suma; 
if ($num2 > $num1){
    $result = "approved";
}else {
    $result = "failed" ;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: green;
        }
        .mytext{
            color: grey;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <h1><?= $name ?></h1>
    <h1 class="mytext"><?PHP echo $name; ?></h1>
    <p>My result is: <?= $result ?></p>
</body>
</html>