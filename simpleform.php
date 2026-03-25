<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Form </title>
    <style>
        body{
            background-color:#f5f5dc;
        }
        #main{
        margin-left:250px;
        margin-top:60px;
        width:800px;
        height:420px;
         border: 2px solid black;
         display:flex;
            grid-template-columns: 1fr 1fr;
        }
        #form-section{
            padding-top:50px;
            padding-left:100px;
            width:300px ;
            height:370px;
            background-image: url("img45.png");
            
        }
        input::placeholder{
            color:black;
        }
        input{
            font-family:Arial, Helvetica, sans-serif;
        }
        
    </style>
</head>
<body>
    <div id="main">
        <div id="img">
            <img src="img2.jpg" alt=""  width="450px" height="420px">
        </div>
    
    <div id="form-section">
    <form action="get.php" method="get">
    <label for="name">Name</label>
    <input type="text" name="name" id="name"placeholder="Enter your Name"><br><br>

    <label for="email">Email</label>
    <input type="email" name="email" id="email" placeholder="Enter your email"><br><br>

    <label for="age">Age</label>
<input type="text" name="age" id="age" placeholder="Enter your age"><br><br>

    <label>Gender</label><br><br>

    <input type="radio" name="gender" id="male" value="Male">
    <label for="male">Male</label><br><br>

    <input type="radio" name="gender" id="female" value="Female">
    <label for="female">Female</label><br><br>

    <button type="submit">Submit</button>
</form>
</div>
</div>
</body>
</html>