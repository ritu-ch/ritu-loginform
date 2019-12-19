
<?php
session_start();
if(isset($_SESSION['login']))
{
    header('location:http://localhost/loginform/dashboard.php');
    //echo 'redirecting';
}
require __DIR__."./config.php";
?>

<?php
    //if(!empty($_POST))
    // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // $email = $_POST["email"];
    // $password = md5($_POST["password"]);
    try
    {
        if(!empty($_POST))
        {
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $email = $_POST["email"];
            $password = md5($_POST["password"]);
        //checking for unique index
            $uniqueSql = "SELECT id FROM data WHERE email = :email";
            $uniqueStmt = $conn->prepare($uniqueSql);
            $uniqueStmt->execute([':email' => $email]);
            if($uniqueStmt->rowCount() == 0)
            {
            // Sql for Register User
                $sql = 'INSERT INTO data (email, password) VALUES(:email, :password)';
                $stmt = $conn->prepare($sql);
                $stmt->execute([':email' => $email, ':password' => $password]);

            if($stmt->rowCount() > 0)
            {
                $_SESSION['login'] = $email;
               header('location:http://localhost/loginform/dashboard.php');
            }else
            {
                echo "There was a Problem while Submitting Your Data. Please Try Again. ERROR CODE 001";

            }
        }
        else{
            echo "This Email Is Already Registered";
            }
        }
    }
    catch(PDOException $e)
        {
        die("ERROR: Could not able to execute $sql. " . $e->getMessage());

        }
    // endif;

    
?>

<!DOCTYPE html>

<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>Registration</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
	<body>
		<div class="header">
			<h2 class="text-center">Register</h2>
		</div>
		
		<div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="" method="POST" >
                        <div class="form-group">
                            <label >Email address</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        
                        <button type="submit" class="btn btn-primary" name="login">Register</button>
                    </form>
                    <!-- <h2 class="text-right"><p><a href='http://localhost/loginform/login1.php'>LOGIN</a></p></h2> -->
                </div>
            </div>
        </div>
			
        
		
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

	</body>
</html>