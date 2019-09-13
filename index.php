<html> 
<head>
  <link rel="stylesheet" href="main.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="calculator.js"></script>
</head>
<body>
 <table id='mytable'> 
 <?php
include_once 'calculator.class.php';
include 'config.php';
include 'table.php';

  $numbers = array ();//declaring an array that will be two-dimensional

  //filling the matrics with numbers from 1 to 10 in fist row and first column
  //other positions will be blank 
     for($k=0; $k<11; $k++) {
       for($l=0; $l<11; $l++) {
        if($k==0 && $l==0) 
                             $numbers[$k][$l] = ' ';
        else if($k==0 && $l>0) 
                              $numbers[$k][$l] = $l;
        else if($k>0 && $l==0) 
                              $numbers[$k][$l] = $k;
        else $numbers[$k][$l] = ' ';
     }
    }

  //filling the table with members of $numbers array
  //in every cell there is html onclick event that will call javascript function
  for($i=0; $i<11; $i++) {
    echo '<tr>';
      for($j=0; $j<11; $j++) {
              echo '<td onclick=js_calculate();>'; 
              echo $numbers[$i][$j]; 
              echo '</td>';
          }
      echo '</tr>';
  }
  
  //data recieved with ajax POST method
  //we store in variables $factor1 and $factor2
  //and we pass them to calculate($factor1,$factor2) function 
  //that will create Calculator object
  //and insert row in mysql database table
  $factor1 = isset($_POST["factor1"]) ? $_POST["factor1"] : 1; 
  $factor2 = isset($_POST["factor2"]) ? $_POST["factor2"] : 1;
  
  //if(isset($_POST["factor1"]) && isset($_POST["factor2"])) {
  calculate($factor1,$factor2);
  function calculate($fac1,$fac2) {
       
      $object = new Calculator($fac1,$fac2);
      $object->{'insert_data'}();
}
//}
?>
</table>
</body>
</html>

 
