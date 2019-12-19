
<?php
require ('config.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['email'])){
    $email = $_POST["email"];
    $password = md5($_POST["password"]);
       
 //Checking is user existing in the database or not
    $picdata = "SELECT * FROM data WHERE email = :email";
    $stmt = $conn->prepare($picdata);
    $stmt->execute([':email' => $email]);
    
        if($rows==1){
            $_SESSION['login'] = $email;
                    // Redirect user to index.php
            header("Location: register.php");
            }else{
            echo "<div class='form'>
            <h3>email/password is incorrect.</h3>
            <br/>Click here to <a href='login.php'>Login</a></div>";
            }
            }else{
            ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<title>Login</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>

            <div class="form">
            <h1>Log In</h1>
            <form action="register.php" method="post">
            Email Please:
            <input type="text" name="email" placeholder="Email" required /></br></br>
            Password Please:
            <input type="password" name="password" placeholder="Password" required /></br>
            <input name="login" type="submit" value="Login"> 
            </form>
            <p>Not registered yet? <a href='http://localhost/loginform/register.php'>Register Here</a></p>
            </div>
            <?php } ?>
    </body>
</html>