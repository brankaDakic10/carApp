<?php

require_once '../config/db.php';


class DAO{


  private $db;

  private $GETALLPRODUCERS = "SELECT * FROM proizvodjaci ORDER BY imeproizvodjaca ASC";
  private $GETALLCATEGORIES = "SELECT * FROM kategorije";
  private $INSERTVEHICLE = "INSERT INTO vozila(imeproizvodjaca,model,godiste,kubikaza,cena,kategorija) VALUES (?,?,?,?,?,?)";
  private $INSERTDRIVER = "INSERT INTO vozaci(imevozaca,prezimevozaca,godiste) VALUES (?,?,?)";
  private $GETALLVEHICLES = "SELECT * FROM vozila";
  private $GETALLDRIVERS = "SELECT * FROM vozaci";
  private $INSERTDRIVERVEHICLE = "INSERT INTO vozilavozaci(idvzl,idvoz,vremedodele) VALUES (?,?,CURRENT_TIMESTAMP)";
  private $DELETEDRIVER = "DELETE FROM vozaci WHERE idvoz=?";
  private $DELETEVEHICLE = "DELETE FROM vozila WHERE idvzl=?";
  private $GETDRIVERBYID = "SELECT * FROM vozaci WHERE idvoz=?";
  private $UPDATEDRIVER = "UPDATE vozaci SET imevozaca=?, prezimevozaca=?, godiste=? WHERE idvoz=?";
  private $GETVEHICLEBYID = "SELECT * FROM vozila WHERE idvzl=?";

  public function __construct(){
    $this->db = DB::createInstance();
  }



  public function  getAllProducers()
  {
      $statement = $this->db->prepare($this->GETALLPRODUCERS);
      $statement->execute();
      // all results from database
      $result = $statement->fetchAll();
      return $result;
  }


   public function  getAllCategories()
    {
        $statement = $this->db->prepare($this->GETALLCATEGORIES);
        $statement->execute();
        $result = $statement->fetchAll();
        return $result;
    }

  
    public function  insertVehicle($producerName,$model,$yearOfProduce,$enginePower,$price,$category)
    {
        $statement = $this->db->prepare($this->INSERTVEHICLE);
        $statement->bindValue(1, $producerName);
        $statement->bindValue(2, $model);
        $statement->bindValue(3, $yearOfProduce);
        $statement->bindValue(4, $enginePower);
        $statement->bindValue(5, $price);
        $statement->bindValue(6, $category);
        $statement->execute();
        // save data in database
    }
  
    public function insertDriver($firstName,$lastName,$yearOfBirth)
    {
        $statement = $this->db->prepare($this->INSERTDRIVER);
        $statement->bindValue(1, $firstName);
        $statement->bindValue(2, $lastName);
        $statement->bindValue(3, $yearOfBirth);
        $statement->execute();

    }

    public function  getAllVehicles()
    {
        $statement = $this->db->prepare($this->GETALLVEHICLES);
        $statement->execute();
        $result = $statement->fetchAll();
        return $result;
    }
    public function  getAllDrivers()
    {
        $statement = $this->db->prepare($this->GETALLDRIVERS);
        $statement->execute();
        $result = $statement->fetchAll();
        return $result;
    }
                    // assign
    public function insertDriverVehicle($idvzl,$idvoz)
    {
        $statement = $this->db->prepare($this->INSERTDRIVERVEHICLE);
        $statement->bindValue(1, $idvzl);
        $statement->bindValue(2, $idvoz);
        $statement->execute();
        
    }


    public function deleteDriver($idvoz)
    {
        $statement = $this->db->prepare($this->DELETEDRIVER);
        $statement->bindValue(1, $idvoz);
        $statement->execute();
        
    }
   
    
    public function getDriverById($idvoz)
    {
        $statement = $this->db->prepare($this->GETDRIVERBYID);
        $statement->bindValue(1, $idvoz);
        $statement->execute();
   
        $result=$statement->fetch();
        return $result;
        
    }
    
    public function updateDriver($firstName,$lastName,$yearOfBirth,$idvoz)
    {
        $statement = $this->db->prepare($this->UPDATEDRIVER);
        $statement->bindValue(1, $firstName);
        $statement->bindValue(2, $lastName);
        $statement->bindValue(3, $yearOfBirth);
        $statement->bindValue(4, $idvoz);
        $statement->execute();
    }


    public function deleteVehicle($idvzl)
    {
        $statement = $this->db->prepare($this->DELETEVEHICLE);
        $statement->bindValue(1, $idvzl);
        $statement->execute();
    }

    public function getVehicleById($idvzl)
    {
        $statement = $this->db->prepare($this->GETVEHICLEBYID);
        $statement->bindValue(1, $idvzl);
        $statement->execute();
   
        $result=$statement->fetch();
        return $result;

    }

}



?>