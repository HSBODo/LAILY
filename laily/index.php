<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>LAILY</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="https://shop-phinf.pstatic.net/20210901_50/1630475975899wacOO_JPEG/31611874611157425_258975115.jpg?type=m120" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />

        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



        <style>
            a{color: black;}

        </style>
    </head>
    <?
    include "forms/select.php";
    ?>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">

            <?php
            include "../laily/common/nav.php"
            ?>
        </nav>
        <!-- Header-->
        <header class="bg-laily py-5" >
         <?php
            include "../laily/common/header.php"

         ?>
        </header>
        
        <!-- Section-->
        <section class="py-5" style="min-height: 500px;">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

                    <?php
                        while($data = mysqli_fetch_array($result)){


                       

                    ?>

                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <a href="<?=$data['link']?>"><img class="card-img-top" src="upload/<?=$data['photo']?>" alt="..." /></a>
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                   <a href="<?=$data['link']?>" style="text-decoration: none; " > <h5 class="fw-bolder"><?=$data['title']?></h5></a>
                                    <!-- Product price-->
                                    <?=$data['price']?>원
                                    
                                </div>
                                  <!-- Product date-->
                                <div class="text-center">
                                   
                                   <?=$data['regdate']?>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                   <?php
                        }
                   ?>
                   
                    
            </div>
        </section>
        <!-- Footer-->

           <?php
                include "../laily/common/footer.php"
           ?>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
