


<?php
$inserted=false;

if (isset($_POST['name'])){

    $server = "localhost";
    $username = "root";
    $password = "";
    

    $con = mysqli_connect($server, $username, $password);

    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql="INSERT INTO  `data`.`information_data`(`name`,`email`,`password`) 
          VALUES('$name','$email','$password')";

    if($con->query($sql) == true){
        // echo "Data inserted successfully";
        $inserted = true;
    }else{
        echo "Error: $sql <br> $con->error";
    }
    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validation</title>
    <style>
        *{
            padding: 0px;
            margin: 0px;
        }
        #main{
            display: grid;
            grid-template-columns: 1fr 1fr;
           width :760px;
        height: 550px;
         
        margin: 10px 290px ;
        border: 3px black solid;
        background-image: url(img1.avif);
        }
     
        #login{
            padding-top:40px;
            padding-left: 20px;
            padding-right: 20px;
            
        }
        h2,label{
            text-transform: uppercase;
            line-height: 40px;
            font-family: 'Times New Roman', Times, serif;
            letter-spacing: 7px;
            color: white;
        }
        button{
            line-height: 30px;
            text-transform: uppercase;
            width: 80px;
            height: 30px;
            border-radius: 7px; margin-top: 30px;
            background-color: gray;
            color: black;
            margin-top:20px;

            
        }
        .ii{
            /* letter-spacing: 7px; */
        width: 300px;
        height: 25px;
        border-radius: 25px;
        text-align: center;
        font-family: 'Times New Roman', Times, serif;
       }
#chechbox{
 margin-top: 20px;
}
#img{
    padding: 20px;
    object-fit: cover;
    opacity: 1;
}h2{
color:dimgrey;
text-decoration: underline;
text-decoration-color: rgb(183, 186, 186);
text-decoration-thickness: 1px;
}
#name-error , #password-eroor ,#email-error{
         color: red;
}
@media screen and (max-width:767px) {
   #main{
    grid-template-columns: 1fr;
     width :460px;
        height: 900px;
          margin: 8px 10px ;
   }
   #img{
    padding-left: 50px;
   }
    #login{
            padding-top:18px;
            padding-left: 40px;
            padding-right: 20px;
            
        }
}
@media screen and (max-width:1024px) {
   #main{
  
          margin: 10px 100px ;
   }}
   #name,#email,#Password{
    background-color: grey;
    color: white;
   }
   input::placeholder {
    color: white;   /* Yahan apna desired color use karein */
     /* Optional: placeholder ka transparency control */

}
.msg{color:green;
margin-top: 10px ;
margin-left:10px;
}


  </style>
</head>
<body>

?>
    <div id="main">
        <div id="img">
            <img src="img2.jpg" alt=""  width="350px" height="420px">
        </div>

    <form id="login"  method="POST" >
        <h2 >Login</h2>
        <label >Username:-</label>
        <div><input type="text" name="name" id="name" class="ii" required></div>
        <div id="name-error"></div>
        
        <label  >Email:-</label>
        <div> <input type="email" name="email" id="email" class="ii" required></div>
        <div id="email-error"></div>
        
        <label  >Password:-</label>
       <div> <input type="password" name="password" id="Password" class="ii" required></div>
        <div id="password-eroor"></div>
    
       <div> <input type="checkbox"  id="chechbox" required ><span>I agree with term & conditions</span></div>
        <div></div>

<?php if($inserted == true)
{ echo" <p class='msg'> 'login succefully'<p>";
}?>
<button type="submit">Login</button>
    </form>
    </div>
    <!-- <script>
const form = document.getElementById("login");
const userName = document.getElementById("name");
const userPassword = document.getElementById("Password");
const userEmail = document.getElementById("email");

const nameError = document.getElementById("name-error");
const passwordError = document.getElementById("password-eroor");
const emailError = document.getElementById("email-error");

form.addEventListener("submit", function(event){

    // Reset errors
    nameError.textContent = "";
    passwordError.textContent = "";
    emailError.textContent = "";

    let isValid = true;

    const userNameValue = userName.value.trim();
    const userPasswordValue = userPassword.value.trim();
    const userEmailValue = userEmail.value.trim();

    // ✅ Simple & Correct Patterns
    const userNamePattern = /^[A-Za-z]{3,}$/;   // Only letters, minimum 3
    const userPasswordPattern = /^[A-Za-z0-9]{8,}$/; // Min 8 characters
    const userEmailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // Normal email format

    // Username Validation
    if (!userNamePattern.test(userNameValue)) {
        nameError.textContent = "Username must contain only letters (min 3 characters)";
        isValid = false;
    }

    // Password Validation
    if (!userPasswordPattern.test(userPasswordValue)) {
        passwordError.textContent = "Password must be at least 8 characters";
        isValid = false;
    }

    // Email Validation
    if (!userEmailPattern.test(userEmailValue)) {
        emailError.textContent = "Enter a valid email address";
        isValid = false;
    }

    // ❗ Stop submit if invalid
    if (!isValid) {
        event.preventDefault();
    }
});
</script> --> -->
</body>
</html>