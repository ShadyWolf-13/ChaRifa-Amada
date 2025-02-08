<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <title>Chá rifa Amanda</title>
    <link rel="stylesheet" href="CSS/estilo.css">
</head>
<body>
    <div id="Init">
    <img src="imagens/logo.png">
    <h1>Escolha o intervalo de sorteio:</h1>
    <form method="POST" action="service/sorteio.php">
        <h1>sortear <input type="number" name="num_sorteios"> número(s), de 
        <input type="number" name="num1"> a <input type="number" name="num2"> </h1>
        <button id="btn-sortear" type="submit" value='Sortear'>Sortear</button>
    </form>
    </div>