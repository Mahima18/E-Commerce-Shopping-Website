<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>About | Shopper's Haven</title>
</head>
<body>
  
<nav class="navbar navbar-default navbar-fixed-top">
<div class="container">
    <div class="navbar-header">
        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#myNav">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a href="index.php" class="navbar-brand">Shopper's Haven</a>
    </div>
    <div class="collapse navbar-collapse" id="myNav">
        <ul class="nav navbar-nav navbar-right">
            <?php if(isset($_SESSION['email'])) { ?>                
                <li><a href="cart.php" class="text-center"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                <li><a href="settings.php" class="text-center"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
                <li><a href="logout.php" class="text-center"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>                
            <?php } else { ?>
                <li><a href="signup.php" class="text-center"><span class="glyphicon glyphicon-user"></span> Signup</a></li>
                <li><a href="#" class="text-center" type="button" data-toggle="modal" data-target="#triggerlogin"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                <li><a href="about.php" class="text-center"><span class="glyphicon glyphicon-tasks"></span> About Us</a></li>
                <li><a href="contact.php" class="text-center"><span class="glyphicon glyphicon-phone"></span> Contact Us</a></li>
            <?php } ?>
        </ul>
    </div>
</div>
</nav>

<!-- Login Modal -->
<div class="modal fade" id="triggerlogin" role="dialog" >
    <div class="modal-dialog">
    <div class="modal-content">        
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h3>LOGIN</h3>
    </div>
        <div class="modal-body">
            <p class="text-warning" style="color: goldenrod"><i>Login to make a purchase</i></p>
                    <form method="post" action="login_script.php">
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" name="email" placeholder="E-mail" class="form-control" required pattern="[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Password</label>
                            <input type="password" name="password" placeholder="Password" class="form-control" required  pattern=".{5,}" title="Must contain at least 5 characters">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                        <div class="form-group">
                            <a href="#" >Forgot Password?</a>
                        </div>
                        <div><p class="text-danger">
                            <?php
                            if(isset($_GET['m1'])){
                                echo $_GET['m1'];
                            }
                            ?>
                            </p>
                        </div>
                    </form>
                    <br/>
        </div>                    
        <div class="modal-footer">
            Don't have an account? <a href="signup.php">Register</a>
        </div>
    </div>
    </div>
</div>


</body>
</html>


