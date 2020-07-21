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
    <title>Cart | Shopper's Haven</title>
</head>
<body>
    <!-- Header -->
    <?php require './includes/header.php'; ?>

    <!-- Content -->
    <div class="row decor_bg" style="min-height: 600px; padding-top: 80px">
      <div class="col-md-6 col-md-offset-3">
         <table class="table table-striped">
         <!--show table only if there are items added in the cart-->
         <?php
         $sum = 0;
         $id = '';
         $user_id = $_SESSION['user_id'];
         $query = "SELECT items.price AS Price, items.id, items.name AS Name FROM user_items JOIN items ON user_items.item_id = items.id WHERE user_items.user_id='$user_id' and status='Added to cart'";
         $result = mysqli_query($con, $query)or die($mysqli_error($con));
         if (mysqli_num_rows($result) >= 1) {
         ?>
         <thead>
         <tr>
            <th>Item Number</th>
            <th>Item Name</th>
            <th>Price</th>
            <th></th>
            </tr>
         </thead>
         <tbody>
         <?php
            while ($row = mysqli_fetch_array($result)) {
            $sum+= $row['Price'];
            $id .= $row['id'] . ", ";
            echo "<tr><td>" . "#" . $row['id'] . "</td><td>" . $row['Name'] . "</td><td>Rs " . $row['Price'] . "</td><td><a href='cart-remove.php?id={$row['id']}' class='remove_item_link'> Remove</a></td></tr>";
            }
            $id = rtrim($id, ", ");
            echo "<tr><td></td><td>Total</td><td>Rs " . $sum . "</td><td><a href='success.php?itemsid=" . $id . "' class='btn btn-primary'>Confirm Order</a></td></tr>";
            ?>
            </tbody>
            <?php
            } else {
            echo "Add items to the cart first!";
            }
            ?>
            <?php
                     ?>
         </table>
      </div>
   </div>

    <!-- Footer -->
    <?php require './includes/footer.php'; ?>  
</body>
</html>