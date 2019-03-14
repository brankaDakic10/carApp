<?php
require_once "../model/DAO.php";

class Controller{

public function showInsertVehicle(){
     //include new view page
     include "insertVehicle.php";
}


public function insertVehicle(){
        $producerName= isset($_GET["imeproizvodjaca"])?$_GET["imeproizvodjaca"]:"";
        $model= isset($_GET["model"])?$_GET["model"]:"";
        $yearOfProduce= isset($_GET["godiste"])?$_GET["godiste"]:"";
        $enginePower= isset($_GET["kubikaza"])?$_GET["kubikaza"]:"";
        $price= isset($_GET["cena"])?$_GET["cena"]:"";
        $category= isset($_GET["kategorija"])?$_GET["kategorija"]:"";
        
        $errors=[];

        if(empty($producerName)){
        $errors["imeproizvodjaca"]="Please choose producer";
        }

        if(empty($model)){
            $errors["model"]="Please enter model";
        }

        if(empty($yearOfProduce)){
            $errors["godiste"]="Please enter year od produce";
        }else{
          //if I have year value check if it is numeric 
              if(is_numeric($yearOfProduce)){
          //   entered  year value must be between 1980 i 2019
                    if($yearOfProduce < 1980 || $yearOfProduce > 2019){
                        $errors["godiste"]="Please enter year between 1980 and 2019";
                    }

              }else{

                $errors["godiste"]="Please enter numeric value"; 
              
            }

        }
        if(empty($enginePower)){
            $errors["kubikaza"]="Please enter engine power";
        }else{
           
            if(is_numeric($enginePower)){

                if($enginePower < 40 || $enginePower > 6000){
                    $errors["kubikaza"]="Please enter engine power between 40 and 6000 ";
                }

            }else{
                    $errors["kubikaza"]="Please enter numeric value";

            }
        }

        if(empty($price)){
            $errors["cena"]="Please enter price";
        }else{
           
            if(is_numeric($price)){
                
                if( $price <= 0 ){
                    $errors["cena"]="The price must be higher then 0";
                }

            }else{

                $errors["cena"]="Please enter numeric value";

            }
        }

        if(empty($category)){
            $errors["kategorija"]="Please choose category";
        }


        if(count($errors) == 0){
            //if no errors in form
            //call function from DAO class
            $dao=new DAO();
            $dao->insertVehicle($producerName,$model,$yearOfProduce,$enginePower,$price,$category);
            // check 
             //var_dump("Saved data from the form");
            $msg="Successful data entry";
            // send on the same page
            include 'insertVehicle.php';
        }else{
            // check 
           // var_dump('Form is not OK');
            $msg="Please fill in all fields in the form";
            // go on the same page
            include 'insertVehicle.php';
        }
        

    }  //  end function
    

    public function showInsertDriver(){
         include "insertDriver.php";
   }
    

   public function insertDriver(){
    $firstName= isset($_GET["imevozaca"])?$_GET["imevozaca"]:"";
    $lastName= isset($_GET["prezimevozaca"])?$_GET["prezimevozaca"]:"";
    $yearOfBirth= isset($_GET["godiste"])?$_GET["godiste"]:"";

   $errors = [];

   if(empty($firstName)){
       $errors["imevozaca"]="Please enter first name";
    }else{
        if (!preg_match("/^[A-Z][a-zA-Z -]+$/", $firstName)) {
       $errors["imevozaca"] = "First name must start with upper case letter.Only letters and white space allowed."; 
          }
        
    }
    
  
    if(empty($lastName)){
        $errors["prezimevozaca"]="Please enter last name";
    }else{
        if (!preg_match("/^[A-Z][a-zA-Z -]+$/", $lastName)) {
            $errors["imevozaca"] = "Last name must start with upper case letter.Only letters,dashes and white space allowed,"; 
               }
    
    }


   if(empty($yearOfBirth)){
       $errors["godiste"]="Please enter year od birth";
    }else{
     
      if(is_numeric($yearOfBirth)){
         //   entered  year value must be between 1980 i 2019
            if($yearOfBirth < 1960 || $yearOfBirth> 1999){
                $errors["godiste"]="Please enter year between 1960 and 2000";
            }

      }else{

        $errors["godiste"]="Please enter numeric value"; 
      
    }

}


if(count($errors) == 0){
    //if no errors in form
    //call function from DAO class
    $dao=new DAO();
    $dao->insertDriver($firstName,$lastName,$yearOfBirth);
    // check 
     //var_dump("Saved data from the form");
    $msg="Successful data entry";
    // send on the same page
    include 'insertDriver.php';
}else{
    // check 
   // var_dump('Form is not OK');
    $msg="Please fill in all fields in the form";
    // go on the same page
    include 'insertDriver.php';
   }
}

 public function showDriverVehicle(){
    include "driverVehicle.php";
  }


  public function assignVehicle(){

    $idvzl= isset($_GET["idvzl"])?$_GET["idvzl"]:"";
    $idvoz= isset($_GET["idvoz"])?$_GET["idvoz"]:"";

   if(!empty($idvzl) && !empty($idvoz) ){
      $dao=new DAO();
              ///assign
      $dao->insertDriverVehicle($idvzl,$idvoz);
      $msg="You have successfully assigned the vehicle to the driver";
      // send on the same page
      include 'driverVehicle.php';
   }else{
    $msg="Please choose a vehicle and a driver";
    include 'driverVehicle.php';
   }     
  
  }
}

?>

