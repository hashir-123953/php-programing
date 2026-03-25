
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color:#f5f5dc;
            
        }

        </style>
</head>

<body>
    <?php

$name = $_POST['name'];
$email = $_POST['email'];
$age = $_POST['age'];
$gender = $_POST['gender'];


echo "<h1>Your Name Is:&nbsp"."$name</h1>"."<br>";
echo "<h1>Your Email Is:&nbsp"."$email</h1>"."<br>";
echo "<h1>Your Age Is  :&nbsp"."$age</h1>"."<br>";
echo "<h1>Your Gender Is :&nbsp"."$gender</h1>"."<br>";

 echo  "http://localhost/fetch%20api/post.php"
?>
    
</body>
</html>