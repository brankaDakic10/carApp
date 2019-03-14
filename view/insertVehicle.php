<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Car Agency-Insert Vehicle</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
</head>

<body>
    <?php include 'partials/header.php';?>
    <?php
    require_once "../model/DAO.php";
    $dao = new DAO();
    $allProducers= $dao->getAllProducers();
    $allCategories = $dao->getAllCategories();
     //    take $msg and $errors array from Controller
    //    because include(they are available)
    $msg = isset($msg)? $msg:"";
    $errors = isset($errors)? $errors:array();
    ?>
    <main class="container col-lg-4">

<!--imeproizvodjaca,model,godiste,kubikaza,cena,kategorija-->
<!--        start section with form-->
            <section class="form-box">
                <h1 class="form-caption text-center ">Insert vehicle</h1>
              
                <form action="routes.php">
                    <div class="form-group">
                        <h5 class="text-center">
                        Select a vehicle manufacturer:</h5>
                        <select class="form-control" name="imeproizvodjaca">
                            <option value=""></option>
                            <?php
                            foreach($allProducers as $p)
                            {
                                echo"<option value='$p[imeproizvodjaca]'>$p[imeproizvodjaca]</option>";
                            }

                            ?>

                        </select>
                        
                        <span style=color:orange;>*
                          <?php
                                 if(array_key_exists("imeproizvodjaca", $errors)){
                                     echo $errors["imeproizvodjaca"];
                                    }
                           ?>
                        </span>



                    </div>


                    <div class="form-group">

                        <input class="form-control" type="text" name="model" id="model" placeholder="Enter vehicle model">
                        <span style=color:orange;>*
                          <?php
                                 if(array_key_exists("model", $errors)){
                                     echo $errors["model"];
                                    }
                           ?>
                        </span>
 
                    </div>


                    <div class="form-group">

                        <input class="form-control" type="text" name="godiste" id="godiste" placeholder="Enter year of produce">
                        <span style=color:orange;>*
                          <?php
                                 if(array_key_exists("godiste", $errors)){
                                     echo $errors["godiste"];
                                    }
                           ?>
                        </span>

                    </div>
                    <div class="form-group">

                        <input class="form-control" type="text" name="kubikaza" id="kubikaza" placeholder="Enter engine power">
                        <span style=color:orange;>*
                          <?php
                                 if(array_key_exists("kubikaza", $errors)){
                                     echo $errors["kubikaza"];
                                    }
                           ?>
                        </span>

                    </div>

                    <div class="form-group">

                        <input class="form-control" type="number" name="cena" id="cena" placeholder="Enter price">
                        <span style=color:orange;>*
                          <?php
                                 if(array_key_exists("cena", $errors)){
                                     echo $errors["cena"];
                                    }
                           ?>
                        </span>

                    </div>



                    <div class="form-group">
                        <h5 class="text-center "> Select a vehicle category :</h5>
                        <select class="form-control" name="kategorija">
                            <option value=""></option>
                            <?php
                            foreach($allCategories as $c)
                            {
                                echo"<option value='$c[kategorija]'>$c[kategorija]</option>";
                            }

                            ?>
                        </select>
                        <span style=color:orange;>*
                          <?php
                                 if(array_key_exists("kategorija", $errors)){
                                     echo $errors["kategorija"];
                                    }
                           ?>
                        </span>

                    </div>
                    <div class="form-group">
                    <input class="btn btn-success form-control" type="submit" name="page" value="Insert Vehicle" />
                    </div>
                </form>
                
             <span style=color:red;><?php echo $msg; ?></span>
         
          
            </section>
<!--        end section with form-->

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