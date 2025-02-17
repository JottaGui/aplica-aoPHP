<?php
 $nome = $_POST['nm'];
 $valor = $_POST['vl'];
 $quantidade = $_POST['qt'];
 $valor = (float)$valor; 
 $quantidade = (int)$quantidade;   
 $valortotal = $valor * $quantidade;
 $comissao = 0.03 * $valortotal;

if($valortotal> 500){ $comissao = 0.10 * $valortotal;

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<section >
    <div class="container-fluid mt-auto" id="quadro">
    <h1>resultado valores</h1>
    <h4><?PHP echo ("nome: ".$nome);?></h4>
    <h4><?PHP echo ("valor: ".$valor);?></h4>
    <h4><?PHP echo ("quantidade: ".$quantidade);?></h4>
    <h4><?PHP echo ("valor total: ".$valortotal);?></h4>
    <h4><?PHP echo ("comissao: ".$comissao);?></h4>
    </div>
</section>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>