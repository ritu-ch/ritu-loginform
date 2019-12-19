<?php
session_start();
if(!isset($_SESSION['login']))
{
    header('location:http://localhost/loginform');
    //echo 'redirecting';
}
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
          <title>BLOG POST</title>
          <link rel="stylesheet" type="text/css" href="style.css">
        </head>
    <body>
        <div class="header">
			<h2 class="text-center">Post Your Blog</h2>
		</div>
		
		<div class="container">
            <div class="row">
                <div class="col-12">
                <form action="insert.php" method="post">
                    <table>
                        <div class="form-group"></div>
                        <tr>
                        <td>Post Title :</td>
                        <td><br /><input type="text" id="post_title" name="post_title"/></td>
                        </tr>
                        </div>
                        <div class="form-group">
                        <tr>
                        <td>Content :</td>
                        <td><br /><textarea id="content" name="content"></textarea></td>
                        </tr>
                        </div>
                        <div class="form-group">
                        <tr>
                        <td>Author Name : </td>
                        <td><br /><input type="text" id="author_name" name="author_name"/></td>
                        </tr>
                        </div>
                        <tr>
                        <td></td>
                        <td class="text-center"><br />
                        <input id="submit" type="submit" value="Save">
                        </td>
                        </tr>
                    </table>
                </form>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>