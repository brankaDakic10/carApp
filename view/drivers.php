<!DOCTYPE html>
<html lang="en">
<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>Car Agency - Drivers</title>
    <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <link rel="stylesheet" type="text/css" href="../css/main.css">
</head>
<body >

<?php include "partials/header.php";?>

   <main class="container col-lg-4">


   <section class="row">
            <div class="col-xs-12 text-center">
                <h1>All drivers</h1>

                <div class="table-responsive">
                    <table summary="This table shows how to create responsive tables using Bootstrap's default functionality"
                        class="table table-bordered table-hover">
                        <caption class="text-center">Table with information about all drivers in our company</caption>
                        <thead>
                            <tr >
                                <th>FIRST NAME</th>
                                <th>LAST NAME</th>
                                <th>YEAR OF BIRTH</th>
                                <th colspan="2">ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
             <?php foreach($drivers as $driver){  ?>    
                
                       <tr>
                             <td><?php echo $driver['imevozaca'] ?></td>
                             <td><?php echo $driver['prezimevozaca'] ?></td>
                             <td><?php echo $driver['godiste'] ?></td>
                             <td><a href="#">EDIT</a></td>
                             <td><a href="routes.php?page=deletedriver&idvoz=<?php echo $driver['idvoz'] ?>">DELETE</a></td>
                       </tr>
                <?php }  ?>  


                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="5" class="text-center">Data retrieved from company database.</td>
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