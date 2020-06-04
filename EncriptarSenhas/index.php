<?php
$senha = '123';
$hash = password_hash($senha, PASSWORD_DEFAULT);
//echo $hash;
$hash = '$2y$10$VOr98PAfNVhcKGSZUqj3Oej6neuKEjCFwP9AVvfaB5s.uBb8FqfBm';

if(password_verify($senha, $hash)) {
    echo "senha correta!";
} else {
    echo "Senha incorreta!";
}



