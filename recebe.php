<?php
// $nome = $_POST['nm'];
 $valortotal = $_POST['vl'];
 $diasdetrabalho = $_POST['dias'];
 $diasquentrabalhou = $_POST['ndias'];
 $valortotal = (float)$valortotal; 
 $diasdetrabalho = (int)$diasdetrabalho; 
 $diasquentrabalhou = (int)$diasquentrabalhou;
 $comissaocru = 0.012 * $valortotal;
 $comissao =  ($comissaocru / $diasdetrabalho) * $diasquentrabalhou + $comissaocru;
$comissao = (int)$comissao;

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body id="body2">
    
<section  class="container-fluid mt-5" id="quadro">
    <div class="container">
    <h1>Seu salario é:</h1>
    <h4><?PHP echo ($comissao);?></h4>
    </div>
</section>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>