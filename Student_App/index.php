<?php
    require"config/config.php";

    $index_no = "";
    $password= "";

   if(isset($_POST["log_btn"])){
       $password = strip_tags($_POST['pswd']);
       $index_no = strip_tags($_POST["index_no"]);

       $password = md5($password);

       $query = mysqli_query($connection , "SELECT * FROM login  WHERE index_no = '$index_no' AND password = '$password'");
       $check_query = mysqli_num_rows($query);

       $_SESSION["index_no"] = $index_no;

       if($check_query === 1 ){
            header("Location: home.php");
       }else{
           echo"not successfull" ;
       }
        
   }
?>



<!doctype html>
<html lang="en-US">
    <head>
        <title> student login</title>
        <meta charset="utf-8">
        <meta name="viewport" content="device-width intial-scale=1.0">
        <meta name="description" content="login to student portal">
        <link rel="stylesheet" href="assets/css/login.css">
        <link rel="stylesheet" href="assets/bootstrap-4.1.3-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="assetsbootstrap-4.1.3-dist/css/bootstrap-grid.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    </head>
    <style>
        *{
            
        }
       
    </style>
    <body>
       <div class="box">
            <h3> Please Login </h3>
           <div class=image-box> <img src="assets/img/logo.png" alt="image of logo"></div><br>
            <form action="index.php" method="post">
                <table cellspacing="10px"cellpadding="10px">
                    <tr>
                        <td>
                           <i class="fa fa-user"></i> ID NUMBER :
                        </td>
                        <td>
                                <input class="form-control" name="index_no" type="text" placeholder="Id number">
                        </td>
                    </tr>
                    <tr>
                        <td>
                           <i class="fa fa-lock"></i> PASSWORD:
                        </td>
                        <td>
                            <input type="password" name="pswd" placeholder="password" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            
                        </td>
                        <td >
                            <br>
                            <button name="log_btn" class="btn-danger">Please Login</button>
                            <button name="sign_btn" class="btn-info" ><a href="signup.php">Sign Up</a></button>
                        </td>
                    </tr>
                </table>
            </form>
       </div>
    </body>
</html>