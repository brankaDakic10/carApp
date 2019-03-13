<?php

require_once '../config/db.php';


class DAO{


  private $db;

  private $GETALLPRODUCERS="SELECT * FROM proizvodjaci ORDER BY imeproizvodjaca ASC";
  private $GETALLCATEGORIES="SELECT * FROM kategorije";
  private $INSERTVEHICLE="INSERT INTO vozila(imeproizvodjaca,model,godiste,kubikaza,cena,kategorija) VALUES (?,?,?,?,?,?)";
  private $INSERTDRIVER="INSERT INTO vozaci(imevozaca,prezimevozaca,godiste) VALUES (?,?,?)";


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
        $statement->bindValue(1,$producerName);
        $statement->bindValue(2,$model);
        $statement->bindValue(3,$yearOfProduce);
        $statement->bindValue(4,$enginePower);
        $statement->bindValue(5,$price);
        $statement->bindValue(6,$category);
        $statement->execute();
        // save data in database
    }
  
    public function insertDriver($firstName,$lastName,$yearOfBirth)
    {
        $statement = $this->db->prepare($this->INSERTDRIVER);
        $statement->bindValue(1,$firstName);
        $statement->bindValue(2,$lastName);
        $statement->bindValue(3,$yearOfBirth);
        $statement->execute();

    }
}



?>