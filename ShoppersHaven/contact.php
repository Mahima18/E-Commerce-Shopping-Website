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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="style.css"> 
    </style>
    <title>Contact | Shopper's Haven</title>
</head>
<body>
  <!-- Header -->
  <?php include './includes/header.php'; ?>

  <!-- Content -->
  <div class="content">
    <div class="container">
      
    <div class="row">
        <div class="col-md-10" style="padding-top:70px;">
          <h2 class="p-bold">Live Support</h2>
          <div class="box-padding-10">
          <h4>24 Hours | 7 Days a Week | 365 Days a Year - Live Technical Support</h4>
          <p class="text-muted">
            <h4>How can we help you?</h4>
            1. Product Help
            <br>
            2. Shopping FAQs
            <br>
            3. Troubleshooting
            <br>
            4. Repair Service
            <br>
            5. Service Centers
          </p>
        </div>
        </div>

        <div class="col-md-2">
          <img src="./img/live_support.png" class="img-responsive live-support-img" alt="Live Support" style="padding-top:50px;">
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col-md-8">
        <h2 class="p-bold">Contact Us</h2>
        <div class="box-padding-10">
        <form action="#" method="POST">
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$"  required>
          </div>
          <div class="form-group">
          <label for="email">Email</label>
            <input type="email" name="email" class="form-control"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
          </div>
          <div class="form-group">
            <label for="message">Message</label>
            <textarea name="message" cols="85" class="form-control" rows="10"></textarea>
          </div>
          <input type="submit" class="btn btn-primary" value="Submit">
        </form>
        </div>
        </div>

        <div class="col-md-4">
          <div class="box-padding-rl">
            <h2 class="p-bold">Contact Information:</h2>
            <p class="text-muted">221 B, Baker Street, Opposite Little Big Bakery,</p>
            <p class="text-muted">12-568-875, Washington</p>
            <p class="text-muted">USA</p>
            <p class="text-muted">Phone : (00) 222 666 444</p>
            <p class="text-muted">Email : support@shoppers-haven.com</p>
            <p class="text-muted">Follow Us On: <a href="#"><i class="fa fa-instagram"></i>  </a> <a href="#"><i class="fa fa-facebook-square"></a></i></p>                  
          </div>
        </div>
      </div>
    </div>
  </div>
  <br>

    <!-- Footer -->
    <?php include './includes/footer.php'; ?>
</body>
</html>