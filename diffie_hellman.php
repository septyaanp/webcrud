<?php

function diffie_hellman($p, $g, $a, $b) {
 $A = pow($g, $a) % $p;
 $B = pow($g, $b) % $p;

 $kunci_A = pow($B, $a) % $p;
 $kunci_B = pow($A, $b) % $p;

 return array($kunci_A, $kunci_B);
}

?>
