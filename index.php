<?php
require __DIR__.'./config.php';
session_start();

if($_SESSION['login'] == $_POST["email"]){
    $email = $_POST["email"];
    $password = md5($_POST["password"]);
    $picdata = "SELECT * FROM data WHERE email = :email";
    $stmt = $conn->prepare($picdata);
    $stmt->execute([':email' => $email]);
    // Redirect user to index.php
    header("Location: dashboard.php");
    }else{
    echo "<div class='form'>
    <h3>email/password is incorrect.</h3>
    <br/>Click here to <a href='register.php'>Login</a></div>";
    }
// if(isset($_SESSION['login']))
// {
//     header('location:http://localhost/loginform/dashboard.php');
//     //echo 'redirecting';
// }
// If form submitted, insert values into the database.
// if (isset($_POST['email'])){
   
 //Checking is user existing in the database or not
    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <title>LOGIN</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="" method="POST">
                        <div class="form-group">
                            <label >Email address</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        
                        <button type="submit" class="btn btn-primary" name="login">Sign In</button>
                    </form>
                    <h2 class="text-right"><p>Not registered yet? <a href='http://localhost/loginform/register.php'>Register Here</a></p></h2>
                </div>
            </div>
        </div> 
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>