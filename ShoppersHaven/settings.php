<?php
    include './includes/common.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Settings | Shopper's Haven</title>
</head>
<body>
    <!-- Header -->
    <?php require './includes/header.php'; ?>

    <!-- Panel for Login -->
<div class="container" style="min-height: 600px; padding-top: 60px; ">
    <div class="row">
        <div class="col-xs-6 col-xs-offset-3">
            <div class="panel" >
                <div class="panel-body">
                    <h3><b>Change Password</b></h3>
                    <form method="post" action="settings_script.php">
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Old Password" name="oldpassword" required = "true">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="New Password" name="newpassword" required = "true">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Re-Type New Password" name="new_password" required = "true">
                        </div>
                        <?php 
                          if(isset($_GET['m1'])){
                            echo $_GET['m1'];
                          } 
                        ?><hr> 
                        <button type="submit" name="submit" class="btn btn-primary">Change</button><br><br>
                    </form><br/>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End of panel -->

    <!-- Footer -->
    <?php require './includes/footer.php'; ?>  

</body>
</html>