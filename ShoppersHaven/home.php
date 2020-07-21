<?php
     $con = mysqli_connect("localhost:3308","root","1234","store") 
     or die(mysqli_error($con));
     session_start();
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
    <title>Home | Shopper's Haven</title>
</head>
<body>
    <!-- Header -->
    <?php
            include './includes/header.php';
            include './includes/check_if_added.php';
            $user_id = $_SESSION['user_id'];
            $email = $_SESSION['email'];
            $query = "SELECT name FROM users WHERE email = '$email'";
            $result = mysqli_query($con,$query) or die(mysqli_error($con));
            $row = mysqli_fetch_array($result);
            $name = $row['name'];
        ?>

    <!-- Content -->
        <div class="content">
            <div class="container-fluid" style="padding-top:80px;">
                <div class="jumbotron">
                    <?php 
                        echo "<h4 class='text-center text-muted'>Welcome $name!</h4>";
                    ?>
                </div>
                <!-- Row 1 -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading">Mobile 1</div>
                            <div class="panel-body"><img src="./img/one-plus-8.png" class="img-responsive img-phone" alt="Phone"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">One Plus 8</h4>
                                <p>Display : 6.55-inch (1080x2400)</p>
                                <p>Processor : Qualcomm Snapdragon 865</p>
                                <p>Battery : 3800mAH</p>
                                <p>Camera : 48MP + 16MP + 2MP Rear | 16MP Front Camera</p>
                                <p>RAM & Storage : 6GB RAM + 128GB Storage</p>
                                <p class="p-bold">Price : Rs.41,999/-</p>
                                <?php if(check_if_added_to_cart(1)) {                                    
                                    echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                                } else {?>                                    
                                    <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                    <div class="panel panel-default text-center">
                            <div class="panel-heading">Mobile 2</div>
                            <div class="panel-body"><img src="./img/one-plus-8pro.png" class="img-responsive img-phone" alt="Phone"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">One Plus 8 Pro</h4>
                                <p>Display : 6.78-inch (1440x3168)</p>
                                <p>Processor : Qualcomm Snapdragon 865</p>
                                <p>Battery : 4510mAh</p>
                                <p>Camera : 48MP + 8MP + 48MP + 5MP Rear | 16MP Front</p>
                                <p>RAM & Storage : 8GB RAM + 128GB Storage</p>
                                <p class="p-bold">Price : Rs.54,999/-</p>
                                <?php if(check_if_added_to_cart(2)) {
                                    echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                                } else {?>
                                    <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                    <div class="panel panel-default text-center">
                            <div class="panel-heading">Mobile 3</div>
                            <div class="panel-body"><img src="./img/iphone-xs-max.jpg" class="img-responsive img-phone" alt="Phone"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">iPhone XS Max</h4>
                                <p>Display : 6.50-inch (1242x2688)</p>
                                <p>Processor : Hexa-core Apple A12 Bionic</p>
                                <p>Battery : 3174mAh</p>
                                <p>Camera : 12MP + 12MP Rear | 7MP Front Camera</p>
                                <p>RAM & Storage : 4GB RAM + 64GB Storage</p>
                                <p class="p-bold">Price : Rs.69,900/-</p>
                                <?php if(check_if_added_to_cart(3)) {
                                    echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                                } else {?>
                                    <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row 2 -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading">Mobile 4</div>
                            <div class="panel-body"><img src="./img/iphonexr.webp" class="img-responsive img-phone" alt="Phone"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">iPhone XR</h4>
                                <p>Display : 6.10-inch (828x1792)</p>
                                <p>Processor : Hexa-core Apple A12 Bionic</p>
                                <p>Battery : 2942mAh</p>
                                <p>Camera : 12MP Rear | 7MP Front Camera</p>
                                <p>RAM & Storage : 3GB RAM + 64GB Storage</p>
                                <p class="p-bold">Price : Rs.52,500/-</p>
                                <?php if(check_if_added_to_cart(4)) {
                                    echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                                } else {?>
                                    <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                    <div class="panel panel-default text-center">
                            <div class="panel-heading">Mobile 5</div>
                            <div class="panel-body"><img src="./img/mi10.jpg" class="img-responsive img-phone" alt="Phone"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">Mi 10, Twilight Grey</h4>
                                <p>Display : 6.67-inch (2340 x 1080)</p>
                                <p>Processor : Qualcomm Snapdragon 865</p>
                                <p>Battery : 4780mAh</p>
                                <p>Camera : 108MP + 13MP + 2MP + 2MP Rear | 20MP Front</p>
                                <p>RAM & Storage : 8GB RAM + 128GB Storage</p>
                                <p class="p-bold">Price : Rs.50,999/-</p>
                                <?php if(check_if_added_to_cart(5)) {
                                    echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                                } else {?>
                                    <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                    <div class="panel panel-default text-center">
                            <div class="panel-heading">Mobile 6</div>
                            <div class="panel-body"><img src="./img/pixel4xl.webp" class="img-responsive img-phone" alt="Phone"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">Google Pixel 4 XL</h4>
                                <p>Display : 6.30-inch (1440x3040)</p>
                                <p>Processor : Qualcomm Snapdragon 855</p>
                                <p>Battery : 3700mAh</p>
                                <p>Camera : 16MP + 12.2MP Rear | 8MP Front Camera</p>
                                <p>RAM & Storage : 6GB RAM + 64GB Storage</p>
                                <p class="p-bold">Price : Rs.83,900/-</p>
                                <?php if(check_if_added_to_cart(6)) {
                                    echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                                } else {?>
                                    <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row 3 -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="panel panel-default text-center">
                        <div class="panel-heading">Mobile 7</div>
                            <div class="panel-body"><img src="./img/samsung-s20.webp" class="img-responsive img-phone" alt="Phone"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">Samsung Galaxy S20 Plus</h4>
                                <p>Display : 6.7-inch(1440x3200) pixels</p>
                                <p>Processor : Qualcomm SM8250 Snapdragon 865</p>
                                <p>Battery : 4500mAh</p>
                                <p>Camera : 64MP Rear | 10MP Front Camera</p>
                                <p>RAM & Storage : 8GB RAM + 128GB Storage</p>
                                <p class="p-bold">Price : Rs.77,999/-</p>
                                <?php if(check_if_added_to_cart(7)) {
                                    echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                                } else {?>
                                    <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                    <div class="panel panel-default text-center">
                    <div class="panel-heading">Mobile 8</div>
                            <div class="panel-body"><img src="./img/asusrog.jpg" class="img-responsive img-phone" alt="Phone"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">Asus ROG Phone 2</h4>
                                <p>Display : 6.59-inch (1080x2340)</p>
                                <p>Processor : 2.6GHz octa-core</p>
                                <p>Battery : 6000mAh</p>
                                <p>Camera : 48MP + 13MP Rear | 24MP Front Camera</p>
                                <p>RAM & Storage : 8GB RAM + 128GB Storage</p>
                                <p class="p-bold">Price : Rs.39,999/-</p>
                                <?php if(check_if_added_to_cart(8)) {
                                    echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                                } else {?>
                                    <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                    <div class="panel panel-default text-center">
                    <div class="panel-heading">Mobile 9</div>
                            <div class="panel-body"><img src="./img/p30pro.jpg" class="img-responsive img-phone" alt="Phone"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">Huawei P30 Pro</h4>
                                <p>Display : 6.47-inch (1080x2340)</p>
                                <p>Processor : HiSilicon Kirin 980</p>
                                <p>Battery : 3700mAh</p>
                                <p>Camera : 40MP + 20MP + 8MP Rear | 32MP Front Camera</p>
                                <p>RAM & Storage : 8GB RAM + 256GB Storage</p>
                                <p class="p-bold">Price : Rs.59,990/-</p>
                                <?php if(check_if_added_to_cart(9)) {
                                    echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                                } else {?>
                                    <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Row 4 -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="panel panel-default text-center">
                        <div class="panel-heading">Mobile 10</div>
                            <div class="panel-body"><img src="./img/minote10.jpg" class="img-responsive img-phone" alt="Phone"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">Xiaomi Mi Note 10</h4>
                                <p>Display : 6.30-inch (1440x3040)</p>
                                <p>Processor : Qualcomm Snapdragon 855</p>
                                <p>Battery : 3700mAh</p>
                                <p>Camera : 16MP + 12.2MP Rear | 8MP Front Camera</p>
                                <p>RAM & Storage : 6GB RAM + 64GB Storage</p>
                                <p class="p-bold">Price : Rs.83,900/-</p>
                                <?php if(check_if_added_to_cart(10)) {
                                    echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                                } else {?>
                                    <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                    <div class="panel panel-default text-center">
                    <div class="panel-heading">Mobile 11</div>
                            <div class="panel-body"><img src="./img/oppofind.webp" class="img-responsive img-phone" alt="Phone"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">Oppo Find X2 Pro</h4>
                                <p>Display : 6.47-inch (1080x2340)</p>
                                <p>Processor : Qualcomm Snapdragon 865</p>
                                <p>Battery : 5260mAh</p>
                                <p>Camera : 108MP Rear | 32MP Front Camera</p>
                                <p>RAM & Storage : 6GB RAM + 128GB Storage</p>
                                <p class="p-bold">Price : Rs.51,190/-</p>
                                <?php if(check_if_added_to_cart(11)) {
                                    echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                                } else {?>
                                    <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                    <div class="panel panel-default text-center">
                    <div class="panel-heading">Mobile 12</div>
                            <div class="panel-body"><img src="./img/sonyxperia.jpg" class="img-responsive img-phone" alt="Phone"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">Sony Xperia 1 II</h4>
                                <p>Display : 6.5-inch (1644x3840)</p>
                                <p>Processor : Qualcomm Snapdragon 855</p>
                                <p>Battery : 4000mAh</p>
                                <p>Camera : 12MP Rear | 8MP Front Camera</p>
                                <p>RAM & Storage : 8GB RAM + 256GB Storage</p>
                                <p class="p-bold">Price : Rs.54,999/-</p>
                                <?php if(check_if_added_to_cart(12)) {
                                    echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                                } else {?>
                                    <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!-- Footer -->
    <?php include './includes/footer.php'; ?>
</body>
</html>