<header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                                 <!-- delete this hard-coded -->
  <a class="navbar-brand" href="/oop/carAgencyApp/view/">CarApp</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="routes.php?page=showinsertvehicle">Insert vehicle<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="routes.php?page=showinsertdriver">Insert driver</a>
      </li>
      <li class="nav-item">
        <a class="nav-link"href="routes.php?page=showdrivervehicle">Vehicle assignment</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="routes.php?page=alldrivers">Drivers</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="routes.php?page=allvehicles">Vehicles</a>
      </li>
       <!-- 
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
     </li>
      -->
    </ul>
    <form class="form-inline my-2 my-lg-0">
    <!-- <span class="text-white">Ulogovan je administrator:<?php echo $loggedInUser['firstname']; ?>&nbsp;</span> -->
    <a href="routes.php?page=logout" class="btn btn-success my-2 my-sm-0" type="submit">Log out</a>

    </form>
  </div>
</nav>
  </header>