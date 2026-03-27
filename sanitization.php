<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form-Sanitization</title>
    <style>
        #form-sanitization{
            width:600px;
            height:600px;
            border:2px solid black;
            border-radius:15px;
            background-image:url('img-001.png');
            margin-left:300px;
            
        }
        form{
            padding-top:30px;
            padding-left:30px;
        }
textarea::placeholder,input::placeholder{
    color:black;
    
}

    </style>
</head>
<body>
    <div id="form-sanitization">
<form action="cleaner.php" method="POST">
   <b> <label for="name">Name:</label><br><br></b>
    <input type="text" name="name" id="name" placeholder="Enter your email"><br><br>
   <b> <label for="password">Password:</label><br><br></b>
    <input type="text" name="password" id="Password" placeholder="Enter your Password"><br><br>

   <b> <label for="email">Email:</label><br><br></b>
    <input type="email" name="email" id="email" placeholder="Enter your Email"><br><br>
    <b><label for="company">Company:</label><br><br></b>
    <input type="company" name="company" id="company" placeholder="Enter your company name"><br><br>
   <b> <label for="gender"> Select Your Gender:</label><br><br></b>
   <b> <input type="radio" name="gender" id="Male" value="Male">Male</b>
   <b> <input type="radio" name="gender" id="Female" value="Female">Female<br><br></b>
   <b> <label for="Comment">Comment:</label><br><br></b>
    <textarea name="comment" id="coment" rows="6" cols="50" placeholder="Enter your comment"></textarea><br><br>
    <button type="submit">Submit</button>
</form>




?>
</div>
</body>
</html>