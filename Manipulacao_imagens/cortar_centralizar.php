<?php
$arquivo = 'cancum.jpeg';
$largura = 500;
$altura = 250;
list($larguraOriginal, $alturaOriginal) = getimagesize($arquivo);

$tamanhoOriginal = $larguraOriginal / $alturaOriginal;
$tamanhoIdeal = $largura / $altura;

$finalLargura = 0;
$finalAltura = 0;
$finalx = 0;
$finaly = 0;

if ($tamanhoIdeal > $tamanhoOriginal) { //imagem original é menor
    $finalLargura = $altura * $tamanhoOriginal;
    $finalAltura = $altura;
} else {
    $finalAltura = $largura / $tamanhoOriginal;
    $finalLargura = $largura;
}
//echo $finalLargura .'-'.$finalAltura;
if($finalLargura < $largura){
    $finalLargura = $largura;
    $finalAltura = $largura / $tamanhoIdeal;

    $finaly = -(($finalAltura - $altura) / 2);

} else {
    $finalAltura = $altura;
    $finalLargura = $altura * $tamanhoIdeal;

    $finalx = -(($finalLargura - $largura) / 2);

}
$imagem = imagecreatetruecolor($largura, $altura);
$originalImg = imagecreatefromjpeg($arquivo);
imagecopyresampled(
    $imagem,
    $originalImg,
    $finalx, $finaly, 0, 0,
    $finalLargura,
    $finalAltura,
    $larguraOriginal,
    $alturaOriginal
);
//header('Content-Type: image/jpeg');
//imagejpeg($imagem, null, 100);
imagejpeg($imagem, 'praia.jpeg', 100);
