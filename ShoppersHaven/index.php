<?php
    include './includes/common.php';
    if(isset($_SESSION['email'])){
        header("location:home.php");
    }
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
    <title>Welcome | Shopper's Haven</title>
</head>
<body>
    <!-- Header -->
        <?php include './includes/header.php'; ?>

    <!-- Content -->
        <div class="content" style="padding-top:80px;">
            <div class="container-fluid">
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
                               <a href="signup.php"><button class="btn btn-primary btn-block">Order Now!</button></a>
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
                                <a href="signup.php"><button class="btn btn-primary btn-block">Order Now!</button></a>
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
                                <a href="signup.php"><button class="btn btn-primary btn-block">Order Now!</button></a>
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
                                <a href="signup.php"><button class="btn btn-primary btn-block">Order Now!</button></a>
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
                                <a href="signup.php"><button class="btn btn-primary btn-block">Order Now!</button></a>
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
                                <a href="signup.php"><button class="btn btn-primary btn-block">Order Now!</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!-- Footer -->
    <?php
        include './includes/footer.php';
    ?>
</body>
</html>