<?php

include 'config.php';
include 'table.php';

//php class with atrributes that are factors in multiplication operation
class Calculator {
    private $factor1;
    private $factor2;
   
    public function __construct($a,$b)
    {
     $this->factor1=$a;
     $this->factor2=$b;
     
    }

    public function getFactorOne() {
        return $this->factor1;
    }

    public function getFactorTwo() {
        return $this->factor2;
    }

    public function multiply() {
        return $this->factor1 * $this->factor2;
    }

    //inserting information about multiplication operation
    public function insert_data() {
        $con=new mysqli("localhost","root","","Database1");

            $fac1 = $this->getFactorOne();
            $fac2 = $this->getFactorTwo();
            $operation = "*";  
            $result = $fac1 * $fac2; 
            $sql = "INSERT  INTO Table1 (`factor1`,`factor2`,`operation`,`result`)
                    VALUES ($fac1,$fac2,'$operation','$result')"; 


                   

if ($con->query($sql) === TRUE) {
    //echo "New record created successfully";
} else {
    //echo "Error: " . $sql . "<br>" . $con->error;
}        

        $con->close();
    }
    
}

?>
