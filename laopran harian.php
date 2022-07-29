<?php

function combotgl($awal, $akhir, $var, $terpilih){

  echo "<select name=$var>";

  for ($i=$awal; $i<=$akhir; $i++){

    $lebar=strlen($i);

    switch($lebar){
        case 1:
      {
        $g="0".$i;
        break;    
      }
      case 2:
      {
        $g=$i;
        break;    
      }     

    } 

    if ($i==$terpilih)
      echo "<option value=$g selected>$g</option>";
    else
      echo "<option value=$g>$g</option>";
  }
  echo "</select> ";
}

function combobln($awal, $akhir, $var, $terpilih){
  echo "<select name=$var>";
  for ($hari=$awal; $hari<=$akhir; $hari++){
    $lebar=strlen($hari);
    switch($lebar){
      case 1:
      {
        $b="0".$hari;
        break;    
      }
      case 2:
      {
        $b=$hari;
        break;    
      }     
    } 
      if ($hari==$terpilih)
         echo "<option value=$b selected>$b</option>";
      else
        echo "<option value=$b>$b</option>";
  }
  echo "</select> ";
}

function combothn($awal, $akhir, $var, $terpilih){
  echo "<select name=$var>";
  for ($i=$awal; $i<=$akhir; $i++){
    if ($i==$terpilih)
      echo "<option value=$i selected>$i</option>";
    else
      echo "<option value=$i>$i</option>";
  }
  echo "</select> ";
}
function combonamabln($awal, $akhir, $var, $terpilih){
  $nama_hari=array(1=> "Senin", "Selasa", "Rabu", "Kamis", "Jumat",
                      "Sabtu", "Minggu");
  echo "<select name=$var>";
  for ($hari=$awal; $hari<=$akhir; $hari++){
      if ($hari==$terpilih)
         echo "<option value=$hari selected>$nama_hari[$hari]</option>";
      else
        echo "<option value=$hari>$nama_hari[$hari]</option>";
  }
  echo "</select> ";
}

?>