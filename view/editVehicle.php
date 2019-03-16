<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Car Agency - Edit Vehicle</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
</head>

<body>
    <?php include 'partials/header.php';?>
 
    <main class="container col-lg-4">
  <?php
    // var_dump($vehicle);
    $msg=isset($msg)?$msg:"";
    $errors=isset($errors)?$errors:array();
  ?>
         <section class="form-box">
            <h1 class="form-caption text-center">Edit vehicle</h1>
            <form action="routes.php">
                <div class="form-group">
                    <input class="form-control" type="text" name="imeproizvodjaca" 
                    value="<?php if(isset($vehicle['imeproizvodjaca'])){ echo $vehicle['imeproizvodjaca'];}else{echo $vehicleProducer;}?>">
                    <span style=color:orange;>
                        <?php
                                 if(array_key_exists("imeproizvodjaca", $errors)){
                                     echo $errors["imeproizvodjaca"];
                                    }
                           ?>
                    </span>
                    
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" name="model" 
                    value="<?php if(isset($vehicle['model'])){ echo $vehicle['model'];}else{echo $vehicleModel;}?>">
                    <span style=color:orange;>
                        <?php
                                 if(array_key_exists("model", $errors)){
                                     echo $errors["model"];
                                    }
                           ?>
                    </span>
                </div>
                <div class="form-group">
                    <input class="form-control" type="number" name="godiste" 
                    value="<?php if(isset($vehicle['godiste'])){ echo $vehicle['godiste'];}else{echo $vehicleYearOfProduce;}?>">
                    
                    <span style=color:orange;>
                        <?php
                                 if(array_key_exists("godiste", $errors)){
                                     echo $errors["godiste"];
                                    }
                           ?>
                    </span>

                </div>

                <div class="form-group">
                    <input class="form-control" type="number" name="kubikaza" 
                    value="<?php  if(isset($vehicle['kubikaza'])){ echo $vehicle['kubikaza'];}else{echo $enginePower;}?>">
                    
                    <span style=color:orange;>
                        <?php
                                 if(array_key_exists("kubikaza", $errors)){
                                     echo $errors["kubikaza"];
                                    }
                           ?>
                    </span>


                </div>

                <div class="form-group">
                    <input class="form-control" type="number" name="cena" 
                    value="<?php  if(isset($vehicle['cena'])){ echo $vehicle['cena'];}else{echo $vehiclePrice;}?>">
                    <span style=color:orange;>
                        <?php
                                 if(array_key_exists("cena", $errors)){
                                     echo $errors["cena"];
                                    }
                           ?>
                    </span>
                  

                </div>


                <div class="form-group">
                    <input class="form-control" type="text" name="kategorija" 
                    value="<?php  if(isset($vehicle['kategorija'])){ echo $vehicle['kategorija'];}else{echo $vehicleCategory;}?>">
                    <span style=color:orange;>
                        <?php
                                 if(array_key_exists("kategorija", $errors)){
                                     echo $errors["kategorija"];
                                    }
                           ?>
                    </span>
                  

                </div>
                               <!-- //send hidden data $idvzl to Controller -->
                <div>
                <input type="hidden" name="idvzl" value="<?php if(isset($vehicle['idvzl'])) echo $vehicle['idvzl']; ?>">
                </div>


                <div class="form-group">
                    <input class="btn btn-success form-control" type="submit" name="page" value="Edit Vehicle" />
                </div>
            </form>
            
            <h6><span style=color:red;><?php echo $msg; ?></span></h6>   

               
        </section>     
        <?php

        $vehicleProducer = isset($_GET["imeproizvodjaca"])?$_GET["imeproizvodjaca"]:"";
        $vehicleModel = isset($_GET["model"])?$_GET["model"]:"";
        $vehicleYearOfProduce = isset($_GET["godiste"])?$_GET["godiste"]:"";
        $enginePower = isset($_GET["kubikaza"])?$_GET["kubikaza"]:"";
        $vehiclePrice = isset($_GET["cena"])?$_GET["cena"]:"";
        $vehicleCategory = isset($_GET["kategorija"])?$_GET["kategorija"]:"";
     // var_dump($vehicleModel);
       ?>

    </main>
    <?php include 'partials/footer.php';?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>


</html>