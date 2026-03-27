<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      #display {
    width: 600px;
    margin-top: 20px;
    padding: 20px;
    border: 2px solid black;
    border-radius: 15px;
    background-color: #f5f5f5;
    font-family: Arial, sans-serif;
    font-size: 16px;
    line-height: 1.8;
}
    </style>
</head>
<body>
    <?php
$name="";
$password;
$email="";
$company="";
$gender="";
$comment="";

function sanitizer($data){
    $data=trim($data);
    $data=htmlspecialchars($data);
    $data=stripcslashes($data);
return $data;
}


if($_SERVER["REQUEST_METHOD"]=='POST'){
    
$name = $_POST['name'];
$password = $_POST['password'];
$email = $_POST['email'];
$company = $_POST['company'];
$gender = $_POST['gender'];
$comment = $_POST['comment'];




echo "<div id='display'>
your name is : $name <br>
your password is : $password <br>
your email is : $email <br>
your company is : $company <br>
your gender is : $gender <br>
your comment is : $comment <br>
</div>";






}?>
</body>
</html>
