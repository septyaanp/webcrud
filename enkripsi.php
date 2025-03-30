<?php
require_once 'diffie_hellman.php';
require_once 'blowfish.php';

function enkripsi($data) {
 $p = 23; // bilangan prima
 $g = 5; // bilangan generator
 $a = 6; // bilangan rahasia Alice
 $b = 15; // bilangan rahasia Bob

 list($kunci_A, $kunci_B) = diffie_hellman($p, $g, $a, $b);

 $key = $kunci_A; // menggunakan kunci yang dihasilkan oleh Diffie-Hellman
 $encrypted = blowfish_encrypt($data, $key);

 return $encrypted;
}

function dekripsi($encrypted) {
 $p = 23; // bilangan prima
 $g = 5; // bilangan generator
 $a = 6; // bilangan rahasia Alice
 $b = 15; // bilangan rahasia Bob

 list($kunci_A, $kunci_B) = diffie_hellman($p, $g, $a, $b);

 $key = $kunci_A; // menggunakan kunci yang dihasilkan oleh Diffie-Hellman
 $decrypted = blowfish_decrypt($encrypted, $key);

 return $decrypted;
}
?>
