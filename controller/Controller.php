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
        

    }
    //function  end

}





?>