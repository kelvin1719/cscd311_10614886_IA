<?php
    include("config/config.php");
    $error = error_reporting(E_ALL);
    $fname = "";
    $lname = "";
    $password = "";
    $email = "";
    $index_no = "";

    if(isset($_POST["btn"])){

        $fname = strip_tags($_POST["fname"]);
        $fname = ucfirst($fname);
        $lname = strip_tags($_POST["lname"]);
        $lname = ucfirst($lname);
        $email = strip_tags($_POST["email"]);
        $password = strip_tags($_POST["pswd"]);
        $index_no = strip_tags($_POST["number"]);

        $password = md5($password);

       $query = mysqli_query($connection,"INSERT INTO login VALUES('','$fname','$lname','$email','$index_no','$password') ");

       $_SESSION["number"] = $index_no ;
        
        header('Location: index.php');
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

            <form action="signup.php" method="post">
                    <table cellspacing=10px cellpadding=10px >
                        <tbody>
                            <thead>
                                <tr >
                                    <th class="heading">
                                        Sign Up
                                    </th>
                                </tr>
                            </thead>
                            <tr>
                                <td>
                                        <label>Firstname:</label>
                                </td>
                                
                            </tr>
                            <td>
                                    
                                    <input type="text"  class="input" id="firstname" name="fname" required="required"  placeholder="Firstname">
                            </td>
                           
                            <tr>
                            
                              
                                
                            </tr>
                            <tr>
                                    <td>
                                            <label>lastname:</label>
                                    </td>
                                    
                                </tr>
                                <tr>
                                
                                    <td>
                                        
                                            <input type="text" class="input" id="lastname" required="required" name="lname"  placeholder="lastname">
                                    </td>
                                    
                                </tr>
                                <tr>
                                <td>
                                        <label>Email:</label>
                                </td>
                                
                            </tr>
                            <tr>
                                <td>
                                    <input type="email" class="input" id="Email" required="required" name="email"  placeholder="Email">
                                </td>
                                
                            </tr>

                             <tr>
                                <td>
                                        <label>ID:</label>
                                </td>
                                
                            </tr>
                            <tr>
                                <td>
                                    <input type="number" class="input" id="number" required="required" name="number"  placeholder="Index number">
                                </td>
                                
                            </tr>
                                <tr>
                                        <td>
                                                <label>password:</label>
                                        </td>
                                        
                                    </tr>
                                    <tr>
                                    
                                        <td>  
                                                <input  type="password" class="input" id="pswd" required="required" name="pswd"  placeholder="Password">
                                        </td>
                                        
                                    </tr>
                                    <tr>
                                            <td>
                                                    <label>confirm Password:</label>
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                        
                                            <td>
                                                <div class="field">
                                                    <img class=pswdMatch src="img/kk.png" alt="Image of password Match">
                                                    <input type="password" class="input" id="Cpswd" required="required"  placeholder="confirm password"> 
                                                </div>
                                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <td  class="msg">
                                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                    <button name="btn" class="btn"> Click to submit</button>
                                            </td>
                                           
                                        </tr>
                        </tbody>
                    </table>
    
                </form>
                </div>
        </div>
    </body>
    <script>
      /*  $(document).ready(function(){
           var a = $("#firstname").val();
           console.log(a);
        });*/

         ;
         var Ismatch , pswd , cpswd , pswdImage ;
          pswdImage = document.querySelector(".pswdMatch")
         pswdImage.style.display = "none" ;
        document.getElementById("Cpswd").addEventListener("keyup",function(){
            
            pswd = document.getElementById("pswd").value ;
            cpswd = document.getElementById("Cpswd").value ;
             if(pswd === cpswd ){
                 Ismatch = true;
                 pswdImage.style.display = "block" ;
                 document.getElementById("Cpswd").style.borderBottom = 4+"px solid "+  "rgba(" + 3+ ","+ 117+ "," + 3 +","+ 0.575+")";
                 console.log(pswd);
                 document.querySelector(".msg").innerText = "Password match!" ;
                document.querySelector(".msg").style.color = "lightgreen";
                // document.querySelector("#Cpswd").classList.toggle("correct");
             }else{
                document.getElementById("Cpswd").style.borderBottom = 4+"px solid "+  "rgba(" + 150+ ","+ 5+ "," + 3 +","+ 0.575+")";
                    console.log("No match");
                    document.querySelector(".msg").innerText = "Password does not match" ;
                    document.querySelector(".msg").style.color = "red";
                    Ismatch=false;
                    pswdImage.style.display = "none" ;
             }
 
             if(Ismatch){

                    document.querySelector("#pswd").addEventListener("keyup", function(){
                        pswd =  document.getElementById("pswd").value ;
                        cpswd = document.getElementById("Cpswd").value ;
                        if(pswd === cpswd ){
                            Ismatch = true;
                            document.getElementById("Cpswd").style.borderBottom = 4+"px solid "+  "rgba(" + 3+ ","+ 117+ "," + 3 +","+ 0.575+")";
                            document.querySelector(".msg").innerText = "Password match!" ;
                            document.querySelector(".msg").style.color = "lightgreen";
                            console.log("match");
                            pswdImage.style.display = "block" ;
                        }else{
                           document.getElementById("Cpswd").style.borderBottom = 4+"px solid "+  "rgba(" + 150+ ","+ 5+ "," + 3 +","+ 0.575+")";
                           document.querySelector(".msg").innerText = "Password does not match" ;
                           document.querySelector(".msg").style.color = "red";
                           
                               console.log("No match");
                               Ismatch=false;
                               pswdImage.style.display = "none" ;
                        }
                    });
             }

        });
        

        //0243325766

        
        
        
        
        
    </script>
</html>