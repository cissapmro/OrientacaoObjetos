<?php
$arquivo = 'Paisagem.jpg';
$larguraMaxima = 500;
$alturaMaxima = 250;
list($larguraOriginal, $alturaOriginal) = getimagesize($arquivo);

$tamanhoOriginal = $larguraOriginal / $alturaOriginal;
$tamanhoIdeal = $larguraMaxima / $alturaMaxima;

$finalLargura = 0;
$finalAltura = 0;

if($tamanhoIdeal > $tamanhoOriginal) { //imagem original é menor
    $finalLargura = $alturaMaxima * $tamanhoOriginal;
    $finalAltura = $alturaMaxima;
} else {
    $finalAltura = $larguraMaxima / $tamanhoOriginal;
    $finalLargura = $larguraMaxima;
}
//echo $finalLargura .'-'.$finalAltura;
$imagem = imagecreatetruecolor($finalLargura, $finalAltura);
$originalImg = imagecreatefromjpeg($arquivo);
imagecopyresampled(
    $imagem,
    $originalImg,
    0, 0, 0 ,0,
    $finalLargura,
    $finalAltura,
    $larguraOriginal,
    $alturaOriginal
);
//header('Content-Type: image/jpeg');
//imagejpeg($image, null, 100);
imagejpeg($imagem, 'Paisagem_testando.jpg', 100);

//$cor = imagecolorallocate($imagem, 255, 0, 0); //cor
//imagefill($imagem, 0, 0, $cor); //posição
//header("Content-Type: image/jpeg"); //mostrar na tela
//imagejpeg($imagem, 'praia.jpeg', 100); //qualidade
//PNG
//header("Content-Type: image/png"); //mostrar na tela
//imagepng($imagem, null); //null - não grava


