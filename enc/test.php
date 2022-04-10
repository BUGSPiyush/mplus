<?php
$str="Programming with Vishal";

$key="vishal";
$chiper="AES-128-CTR";
$ivLen=openssl_cipher_iv_length($chiper);
$iv=openssl_random_pseudo_bytes(16);
$options=0;

echo openssl_encrypt($str,$chiper,$key,$options,$iv);
?>