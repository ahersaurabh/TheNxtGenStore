<?php 
require_once ('controllers/authController.php'); ?>

<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="signupstyle.css">
    <title>Register</title>
</head>
<body>




<div class="container">
    <div class="row">
        <div class="col-md-4 offset-md-4 form-div">
            <form action="newsignup.php" method ="post">
                <h3 class="text-center">Register</h3>


               <?php if(count($errors) > 0):?>
                 <div class="alert alert-danger">
                     <?php foreach($errors as $error): ?>
                        <li><?php  echo $error; ?> </li>
                     <?php endforeach; ?>   
                </div>
               <?php endif; ?>     
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" value= "<?php echo $username;?>" class="form-control form-control-lg">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" value="<?php echo $email;?>" class="form-control form-control-lg">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control form-control-lg">
                </div>
                <div class="form-group">
                    <label for="passwordConf">Confirm Password</label>
                    <input type="password" name="passwordConf" class="form-control form-control-lg">
                </div>
                <div class="form-group">
                    <button class="submit" name="signup-btn" class="btn btn-primary btn-block btn-lg">Sign Up</button> 
                </div>  
                <p class="text-center">Already a member?<a href="newlogin.php">Sign In</a></p>
            </form>

        </div>       
    </div>
</div>
</html>
</body>




