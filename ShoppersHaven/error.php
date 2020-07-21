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
    <title>Error | Shopper's Haven</title>
</head>
<body>
    <!-- Header -->
    <?php require './includes/header.php'; ?>

    <!-- Content -->
    <div class="content" style="padding-top:80px;">
          <div class="container">
            <div class="col-xs-12">
              <div class="jumbotron">
                <h3 class="text-center">You have entered the wrong credentials.</h3>
                <h4 class="text-center">Kindly login again with the right credentials.</h4>
                <hr>
                <h5 class="text-center">Click <a href="index.php">here</a> to go back.</h5>
              </div>
            </div>
          </div>
        </div>
    
    <!-- Footer -->
    <?php require './includes/footer.php'; ?>  
</body>
</html>