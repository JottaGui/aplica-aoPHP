<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>


<body>
    <div class="container-fluid " id="centro">
<form action="recebe.php" method="post">
        <div class="container-fluid" id="cadastro">
        <h1 class="container-fluid" id="vendas">Ola Sr Jurandir!!!</h1>
        <div class="form-label mb-3">
            <label for="floatingPassword">Quanto o senhor vendeu?</label>
            <input type="number" name="vl" class="form-control" id="floatingPassword" >
            <label for="floatingPassword ">Quantos dias voce trabalhadou?</label>
            <input type="number" name="dias"class="form-control " id="floatingPassword" >
            <label for="floatingPassword ">Quantos dias ficou em casa?</label>
            <input type="number" name="ndias"class="form-control mb-3" id="floatingPassword" >
            <input class="btn btn-primary mb-3" type="submit" value="enviar">
            <input class="btn btn-primary mb-3  " type="reset" value="limpar">
        
        
    </form>
</div>    
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>