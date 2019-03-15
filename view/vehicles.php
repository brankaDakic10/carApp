<!DOCTYPE html>
<html lang="en">
<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>Car Agency - Vehicles</title>
    <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <link rel="stylesheet" type="text/css" href="../css/main.css">
</head>
<body >

<?php include "partials/header.php";?>

   <main class="container col-lg-4">


   <section class="row">
            <div class="col-xs-12 text-center">
                <h1>All vehicles</h1>

                <div class="table-responsive">
                    <table summary="This table shows how to create responsive tables using Bootstrap's default functionality"
                        class="table table-bordered table-hover">
                        <caption class="text-center">Table with information about all vehicles in our company</caption>
                        <thead>
                        <tr>
                                <th>VEHICLE PRODUCER</th>
                                <th>VEHICLE MODEL</th>
                                <th>YEAR OF PRODUCTION OF VEHICLE</th>
                                <th>ENGINE POWER</th>
                                <th>PRICE</th>
                                <th>CATEGORY</th>
                                <th colspan="2">ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
             <?php foreach($vehicles as $vehicle){  ?>    
                
                       <tr>
                             <td><?php echo $vehicle['imeproizvodjaca'] ?></td>
                             <td><?php echo $vehicle['model'] ?></td>
                             <td><?php echo $vehicle['godiste'] ?></td>
                             <td><?php echo $vehicle['kubikaza'] ?></td>
                             <td><?php echo $vehicle['cena'] ?></td>
                             <td><?php echo $vehicle['kategorija'] ?></td>
                             <td><a href="routes.php?page=showeditvehicle&idvzl=<?php echo $vehicle['idvzl'] ?>">EDIT</a></td>
                             <td><a href="routes.php?page=deletevehicle&idvzl=<?php echo $vehicle['idvzl'] ?>">DELETE</a></td>
                       </tr>
                <?php }  ?>  


                        </tbody>
                        <tfoot>
                            <tr>
                            <td colspan="8" class="text-center">Data retrieved from database</td>
                            </tr>
                        </tfoot>
                    </table>
                    <?php
                  
                  $msg=isset($msg)?$msg:"";
                  echo "<h6><span style=color:blue;>$msg</span></h6>";
                 ?>
                    </div>
                <!--end of .table-responsive-->
            </div>
   </section>


   
    </main>
<?php include "partials/footer.php";?>

 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>