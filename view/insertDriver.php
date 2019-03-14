<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Car Agency-Insert Driver</title>
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
   
     //    get $msg and $errors array from Controller
    $msg = isset($msg)? $msg:"";
    $errors = isset($errors)? $errors:array();
    ?>
    <main class="container col-lg-4">

        <!--imevozaca,prezimevozaca,godiste-->
        <!--        start section with form-->
        <section class="form-box">
            <h1 class="form-caption text-center">Insert driver</h1>
            <form action="routes.php">
                <div class="form-group">
                    <input class="form-control" type="text" name="imevozaca" placeholder="Enter first name">
                    <span style=color:orange;>*
                        <?php
                                 if(array_key_exists("imevozaca", $errors)){
                                     echo $errors["imevozaca"];
                                    }
                           ?>
                    </span>
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" name="prezimevozaca" placeholder="Enter last name">
                    <span style=color:orange;>*
                        <?php
                                 if(array_key_exists("prezimevozaca", $errors)){
                                     echo $errors["prezimevozaca"];
                                    }
                           ?>
                    </span>
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" name="godiste" placeholder="Enter year of birth">
                    <span style=color:orange;>*
                        <?php
                                 if(array_key_exists("godiste", $errors)){
                                     echo $errors["godiste"];
                                    }
                           ?>
                    </span>

                </div>
                <div class="form-group">
                    <input class="btn btn-success form-control" type="submit" name="page" value="Insert Driver" />
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