<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados Clístenes</title>
</head>
<body>

<?php
    $nome = "clístenes";
    $idade = "62";
    $endereco = "Rua das Veia, 325-Centro";
    $cidade = "Cidade das Veia";
    $cep = "87.894-000";
    $ps = "8";
    $ss = "10";
    $ts = "9";
    $media = ($ps+$ss+$ts)/3;

    echo "O seu nome é:" . $nome;
    echo ("</br>");
    echo "A sua idade é:" . $idade;
    echo ("</br>");
    echo "O seu endereço é:" . $endereco;
    echo ("</br>");
    echo "A sua cidade é:" . $cidade;
    echo ("</br>");
    echo "Primeiro Semestre:" . $ps;
    echo ("</br>");
    echo "Segundo Semestre:" . $ss;
    echo ("</br>");
    echo "Terceiro Semestre:" . $ts;
    echo ("</br>");
    echo "Sua média é:" . $media;
?>
    
</body>
</html>