<?php

function blowfish_encrypt($data, $key) {
 $cipher = "bf-cbc";
 $ivlen = openssl_cipher_iv_length($cipher);
 $iv = openssl_random_pseudo_bytes($ivlen);
 $encrypted = openssl_encrypt($data, $cipher, $key, OPENSSL_RAW_DATA, $iv);
 return base64_encode($iv . $encrypted);
}

function blowfish_decrypt($encrypted, $key) {
 $cipher = "bf-cbc";
 $encrypted = base64_decode($encrypted);
 $ivlen = openssl_cipher_iv_length($cipher);
 $iv = substr($encrypted, 0, $ivlen);
 $encrypted = substr($encrypted, $ivlen);
 return openssl_decrypt($encrypted, $cipher, $key, OPENSSL_RAW_DATA, $iv);
}

?>