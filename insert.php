
<?php

   $inserted=false;
    
    if(isset($_POST['submit']))
    {

$serverName = "localhost";
$userName = "root";
$password = "";

$conn = mysqli_connect($serverName, $userName, $password);

if(!$conn)
{
    die("connection Error".mysqli_connect_error());
}
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query = "INSERT into `login`.`login_info`(`username`, `password`) values ('$username','$password')";

        if(mysqli_query($conn , $query))
        {
            // echo "Data successfully inserted";
            $inserted=TRUE;
        }
        else{
            echo mysqli_connect_error($conn);
        }
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Registration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    .msg{color:green;
margin-top: 10px ;
margin-left:10px;
}
</style>
</head>
<body class="bg-light">

<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow-lg p-4" style="width: 400px;">
        <h3 class="text-center mb-4">User Registration</h3>
        
        <form action="insert.php" method="post">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" class="form-control" id="username" placeholder="Enter username" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Enter password" required>
            </div>

            <?php if($inserted == true)
{ echo" <p class='msg'> 'Register succefully'<p>";
}?>
            <div class="d-grid">
                <button type="submit" name="submit" class="btn btn-primary">Register</button>
            </div>
        </form>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html> 