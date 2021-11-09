<?php 
require_once ('controllers/authController.php');

if(!isset($_SESSION['id'])) {
    header('location:newlogin.php');
    exit();
}
?>
<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="signupstyle.css">
    <title>user verify</title>
</head>
<body>




<div class="container">
    <div class="row">
        <div class="col-md-4 offset-md-4 form-div login">
        <?php if(isset($_SESSION['message'])): ?>

            <div class="alert <?php echo $_SESSION ['alert-class']; ?>">
                <?php 
                echo $_SESSION['message'];
                unset($_SESSION['message']);
                unset($_SESSION['alert-class']);
                ?>
            <div>
        <?php endif; ?>        
            <h3>Welcome,<?php echo $_SESSION['username']; ?></h3>
            <a href="indexnew.html" class="logout">Browse Store</a>

 
            <?php if(!$_SESSION['verified']): ?>
            <div class="alert alert-warning"> 
                Your email id is 
                <strong><?php echo $_SESSION['email']; ?></strong>

            </div>
            <?php endif; ?>

            <?php if($_SESSION['verified']): ?>
                <button class="btn btn-block btn-lg btn-primary">I am verified.</button>
            <?php endif; ?>           


        </div>       
    </div>
</div>
</html>
</body>




