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

       if($check_query === 1 ){
           echo"you are soo good";
       }else{
           echo"not successfull" ;
       }
        
   }
?>

<!doctype html>
<html>
    <head>
            <title>student signup</title>
            <link rel="stylesheet" href="assets/css/index.css">
            <script src="js/jquery-3.3.1.min.js">
                
            </script>
    </head>
    
    <body>
        <div class="rbox">
                <div class=rbox2>

            <form action="login.php" method="post">
                    <table cellspacing=10px cellpadding=10px >
                        <tbody>
                            <thead>
                                <tr >
                                    <th class="heading">
                                       Please Login
                                    </th>
                                </tr>
                            </thead>
                            <tr>
                                <td>
                                        <label>ID</label>
                                </td>
                                
                            </tr>
                            <td>
                                    
                                    <input type="text"  class="input" id="firstname" name="index_no" required="required"  placeholder="Index number">
                            </td>
                           
                            <tr>
                            
                              
                                
                            </tr>
                            <tr>
                                    <td>
                                            <label>Password:</label>
                                    </td>
                                    
                                </tr>
                                <tr>
                                
                                    <td>
                                        
                                            <input type="password" class="input" id="lastname" required="required" name="pswd"  placeholder="password">
                                    </td>
                                    
                               </tr>
                               <tr>
                                            <td>
                                                    <button name="log_btn" class="btn"> Login</button>
                                            </td>
                                           
                                        </tr>
                        </tbody>
                    </table>
    
                </form>
                </div>
        </div>
    </body>
</html>