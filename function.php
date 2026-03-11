<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Function</title>
</head>
<body>
    
<?php

$String="My Name Is Hashir";

echo "<h1> String functions:</h1>";
echo strlen($String)."<br>";
echo str_word_count($String)."<br>";
echo strrev($String)."<br>";
echo strpos($String,"Hashir")."<br>";
echo str_replace("Hashir","Hammad",$String)."<br>";
echo ucwords($String)."<br>";
echo strtolower($String)."<br>";


echo "<h1> PHP Numeric functions:</h1>"."<br>";
 echo is_finite(10),"<br>";
//  echo is_infinite(1/0)."<br>";
 echo is_nan(acos(8))."<br>";


 echo "<h1> PHP Math functions:</h1>"."<br>";
 echo pi()."<br>";
 echo min(10,9,4,6,90)."<br>";
 echo max(25,90,89,101)."<br>";
 echo abs(-90)."<br>";
 echo sqrt(64)."<br>";
 echo round(10.2)."<br>";
 echo round(10.8)."<br>";
 echo rand()."<br>"; 


 echo "<h1> PHP Math functions:</h1>"."<br>";

  define("Name","hashir");
  echo Name."<br>";



  define("name",array("Hasshir","Hammad","Jahzaib"))."<br>";
  print_r (name)."<br>";

 define("stName","hammad");
  function STUDENTNAME(){
    echo stName."<br>";
  }
STUDENTNAME();

// convertion function
echo "<h1> PHP convertion   functions:</h1>"."<br>";

//string to float
$String="15.897";
$Conversion = floatval($String);
var_dump($Conversion);
echo "<br>";
echo $Conversion."<br>";

//  float to integer
$float=1234.789;
$integer=(int)$float;
var_dump($integer);
echo"<br>";
echo $integer."<br>";

//  float to integer
$float=1234.9087;
$integer=(int)$float;
var_dump($integer);
echo"<br>";
echo $integer;







?>
</body>
</html>