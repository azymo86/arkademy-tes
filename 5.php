<?php

function buyNoodle ($tgl, $uang) {
  $harga    = 2500;
  $modulus  = $uang%$harga;
  $dibeli   = ($uang-$modulus)/$harga;
  echo "tanggal: ", $tgl,"\n";
  echo "uang: ", $uang,"\n";

  function BonusA($par) {
    $cek = $par%3;
    $hasil = ($par-$cek)/3;
    return $hasil;
  }

  function BonusB($par) {
    $cek = $par%4;
    $hasil = ($par-$cek)/4;
    return $hasil;
  }

  function Extra_A($par) {
    $hasil = $par*5;
    return $hasil;
  }

  function Extra_B($par) {
    $hasil = $par*10;
    return $hasil;
  }

  if ($tgl%2 == 0) {
    $bonus = BonusB($dibeli);

    if ($tgl%5 == 0) {
      If ($bonus%2 != 0) {
        echo "total mie: ", Extra_A($bonus) + $dibeli;
      }else {
        echo "total mie: ", Extra_B($bonus) + $dibeli;
      }
    }else {
      echo "total mie: ", $bonus + $dibeli;
    }
  }else {
    $bonus = BonusA($dibeli);
    if ($tgl%5 == 0) {
      if ($bonus%2!= 0) {
        echo "total mie: ", Extra_A($bonus) +$dibeli;
      }else {
        echo "total mie: ", Extra_B($bonus) +$dibeli;
      }
    }else {
      echo "total mie: ", $bonus +$dibeli;
    }
  }

}


// input di sini
buyNoodle(25,50000);
