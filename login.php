<!DOCTYPE php>
<html>
     <head>
      <title>Login form</title>
         <link rel="stylesheet" type="text/css" href="style.css">
     </head>

     <body>

        <div class="loginbox">
        <img src="avater.png" class="avater">
            <h1>Login Here</h1>
            <form action="welcome.php" method ="get">
                <p>Username</p>
                <input type="text" name="uname" placeholder="Enter username">
                <p>Password</p>
                <input type="password" name="password"placeholder="Enter password">
                <input type="submit" name=""value="Login">

                <a href="#">Lost your password</a><br>
                <a href="#">Don't have an account ?</a><br>

            </form>
        
        </div>

     </body>
   
</html>