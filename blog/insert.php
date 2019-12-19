<?php
session_start();
if(!isset($_SESSION['login']))
{
    header('location:http://localhost/loginform/dashboard.php');
    //echo 'redirecting';
}
    require __DIR__. "/../config.php";
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $post_title = $_POST['post_title'];
    $content =  $_POST['content'];
    $author_name = $_POST['author_name'];
    $email = $_SESSION['login'];
    //$post_date = date($_POST['post_date']);
    //$post_date =  "STR_TO_DATE(".$_POST['post_date'].", 'Y:m:d')";
        // try{
            $userSql = "SELECT id FROM data WHERE email = :email";
            $userStmt = $conn->prepare($userSql);
            $userStmt->execute([':email' => $email]);
            // if($userStmt->rowCount() == 0)
            // {
            $userResult = $userStmt->fetch(PDO::FETCH_OBJ);
            //print_r ($userResult);
        // }
        // catch(PDOException $e)
        // {
        //     print_r ($e);
        // }
        // die();
            //insert posts into database
        try
        {
            if($userStmt->rowCount() != 0)
           {
            $sql= "INSERT INTO blog (user_id, post_title, content, author_name) VALUES(:user_id, :post_title, :content, :author_name)";
            $stmt = $conn->prepare($sql);
            //to return object use '->'
            $stmt->execute([':user_id' => $userResult->id, ':post_title' => $post_title , ':content' => $content, ':author_name' => $author_name]);
            
                if($stmt->rowCount() != 0)
                {
                header('location:blog.php');
                }else{
                    echo "There have some ERROR";
                     }
             }
        }
            catch(PDOException $e)
            {
            print_r ("ERROR: Could not able to execute $sql. " . $e->getMessage());
            }
            
