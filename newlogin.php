<?php require_once ('controllers/authController.php'); ?>

<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="signupstyle.css">
    <title>Login</title>
</head>
<body>




<div class="container">
    <div class="row">
        <div class="col-md-4 offset-md-4 form-div login">
            <form action="newlogin.php" method ="post">
                <h3 class="text-center">Login</h3>
                <?php if(count($errors) > 0):?>
                 <div class="alert alert-danger">
                     <?php foreach($errors as $error): ?>
                        <li><?php  echo $error; ?> </li>
                     <?php endforeach; ?>   
                </div>
               <?php endif; ?>     

                <div class="form-group">
                    <label for="username">Username or email</label>
                    <input type="text" name="username" class="form-control form-control-lg">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control form-control-lg">
                </div>
                <div class="form-group">
                    <button class="submit" name="login-btn" class="btn btn-primary btn-block btn-lg">Login</button> 
                </div>  
                <p class="text-center">Not a member?<a href="newsignup.php">Sign up</a></p>
            </form>

        </div>       
    </div>
</div>
</html>
</body>




