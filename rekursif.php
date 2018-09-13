<?php

  $batas
  function rekursif($i = 1){
    global $batas;
    echo "*";
    $i++;
    if($i<=$batas){
      rekursif($i);
    }
    else{
      echo "<br>";
      $batas--;
      if($batas != 0){
        rekursif();
      }
    }
  }
  rekursif();
  echo "<br>";
/*====================================================================================*/

  $batas2 = 1;
  function rekursif2($t = 1){
    global $batas2;
    
    echo "$t";
    $t++;
    
    if($t<=$batas2){
      rekursif2($t);
    }
    else{
      echo "<br>";
      $batas2++;
      if($batas2<=5){
        rekursif2();
      }
    }
  }
  rekursif2();
    
?>
