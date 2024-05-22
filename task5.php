<?php
//Q1
$sum = 0;
for($number=1 ; $number<=30 ; $number++) {
   $sum +=$number;
  }
//echo  $sum;
//echo "<br>";
//Q2

function Area ($x , $y){
    $result=$x*$y ;
    echo $result ;
}
$x=20;
$y=30;

//Area ($x , $y);
?>

<!DOCTYPE html>
<head>
    <body>
        <h1>The result of sum numbers form 0 to 30 is : 
            <?php
            echo  $sum;
            echo "<br>";
                        ?>
             </h1>
             <h2>The area of the rectangular is :
             <?php
             Area ($x , $y);
             ?>
              </h2>
    </body>

</head>
</html>