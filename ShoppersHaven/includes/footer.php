<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h4>Information</h4>
                <p><a href="about.php">About Us</a></p>
                <p><a href="contact.php">Contact Us</a></p>
            </div>
            
            <div class="col-md-4">
                <h4>My Account</h4>
                <p><a href="#" class="text-center" type="button" data-toggle="modal" data-target="#triggerlogin">Login</a></p>
                <p><a href="signup.php">Sign Up</a></p>
            </div>

            <div class="col-md-4">
                <h4>Contact Us</h4>
                <p><span class="glyphicon glyphicon-phone"></span> : +91-123-0000000</p>
                <p><span class="glyphicon glyphicon-envelope"></span> : support@shoppers-haven.com</p>
            </div>

        </div>
    </div>
</footer>

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

