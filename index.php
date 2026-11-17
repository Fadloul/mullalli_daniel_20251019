<?php

$vendite = [
    ["categoria" => "Elettronica", "prodotto" => "TV 4K", "importo" => 750],
    ["categoria" => "Libri", "prodotto" => "PHP Avanzato", "importo" => 30],
    ["categoria" => "Elettronica", "prodotto" => "Smartphone", "importo" => 500],
    ["categoria" => "Casa", "prodotto" => "Set di pentole", "importo" => 120],
    ["categoria" => "Libri", "prodotto" => "Guida a SQL", "importo" => 25]
];

$report = [];

foreach ($vendite as $vendita) {

    $categoria = $vendita["categoria"];
    $importo = $vendita["importo"];

    if (!isset($report[$categoria])) {
        $report[$categoria] = [
            "totale_vendite" => 0,
            "numero_transazioni" => 0
        ];
    }

    $report[$categoria]["totale_vendite"] += $importo;
    $report[$categoria]["numero_transazioni"]++; 
}

?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>  
    
</head>
<body> 
     
</body>
</html>          