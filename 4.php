<?php

function fibo($kolom, $baris) {
	$a = 0;
	for ($i=0; $i<$baris; $i++) {
	    for ($x=0; $x<$kolom; $x++) {
	         if ($a==0){
	             echo "$a, ";
	             $b = $a;
	             $a++;
	         }else if ($b==0){
	             echo "$a, ";
	             $c = $a + $b;
	             $b = $a;
	             $a = $c;
	         }else {
	             echo "$a, ";
	             $c = $a + $b;
	             $b = $a;
	             $a = $c;
	         }
	    }
	    echo "\n";
	}
}

fibo(4,3);
