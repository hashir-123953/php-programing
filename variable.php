<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>functions</title>
    <style>
       body{
        background-color: grey;
       }
    
       
    </style>
</head>
<body>
    
<?php 

//Variables 
echo"<h1> <u> Varaiable: </u></h1>";
$_ST_ID=250;
 $_ST_NAME="Hashir";

echo"The Student Id is "."$_ST_ID"."<br>";
echo"The Student Name is "."$_ST_NAME"."<br>";



//Local Varaiable Scope
echo"<h1><u> Local Varaiable Scope:</u></h1>";
function Message(){
    $ST_NAME="Hashir";
    return "My Name Is "."$ST_NAME"."."."<br>";
}

echo Message();


//global Varaiable Scope
echo"<h1><u> Global Varaiable Scope</u>:</h1>";

$ST_NAME="Hashir";

function name(){
    global $ST_NAME;
    return "My Name Is "."$ST_NAME".".";
}

echo name()."<br>";
echo "$ST_NAME";

//static Varaiable Scope
echo"<h1> <u>Static Varaiable Scope:</u></h1>";

$ST_NAME="Hashir";

function ky(){
    static $ST_NAME=0;
    echo  $ST_NAME++ ;
}

echo ky()."<br>";
echo ky()."<br>";
echo ky()."<br>";
echo ky()."<br>";

?>
</body>
</html>