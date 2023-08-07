<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>STORE WITH MORE</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div>
           <?php
            require 'header.php';
           ?>
           <div id="bannerImage">
               <div class="container">
                   <center>
                   <div id="bannerContent">
                       <h1>Offer!!!</h1>
                       <p>upto 20% off on selected products</p>
                       <a href="products.php" class="btn btn-danger">Shop Now</a>
                   </div>
                   </center>
               </div>
           </div>
           <div class="container">
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                           <a href="products.php">
                                <img src="images/best_selling_2.jpg" alt="men suit">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">Men clothing</p>
                                        <p>Best men outfits.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="images/c_undershirt.png" alt="women top">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">Women clothing</p>
                                    <p>Attractive women garments.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="images/top_rated_2.jpg" alt="accesorries">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">Accesorries</p>
                                   <p>An exclusive accesorries collection.</p>
                               </div>
                           </center>
                       </div>
                   </div>
               </div>
           </div>
            <br><br> <br><br><br><br>
           <footer class="footer"> 
               <div class="container">
               <center>
                   <p>Copyright &copy <a href="#">LJIET</a>. All Rights Reserved.</p>
                   <p>Developed By Krutarth Patel and Team..</p>
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>