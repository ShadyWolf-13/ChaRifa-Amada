<?php

$numsorteios= $_POST['num_sorteios'];
$numini= $_POST['num1'];
$numend= $_POST['num2'];

if ($numsorteios<=0 || $numini<0){
    echo "Não se pode calcular ".$numsorteios." número de sorteios!";
    exit();
}elseif($numini>0){
    // Definindo o número de participantes
    $numParticipantes = (($numend+1)-$numini);
    // Informações adicionais
    $chances = round((1 / $numParticipantes) * 100);
}
?>
<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <title>Resultado Sorteio</title>
    <link rel="stylesheet" href="../CSS/estilo.css">
</head>
<body>
    <div id="Sorteio">
        <h1>    Sorteio Executado!!!    </h1>
        <img src="../imagens/logo.png">
        <h1>Temos no total <?php echo $numParticipantes; ?> participantes.
        Cada participante teve <?php echo $chances; ?>% de chance de ganhar.</h1>
        <?php if ($numsorteios>0){ ?>
            <?php if ($numsorteios==1){ ?> <p><h1>O número <?php $sorteado = rand($numini, $numend); ?> 
                <?php  echo $sorteado; ?> foi sorteado!</h1></p>
                <button id="Sair" type="button" onclick="window.location.href='../index.php'">Voltar</button> 
            <?php }elseif ($numsorteios>=2){ ?> <h1>Os números 
                <?php for ($i = 0; $i<=($numsorteios-1); $i++) { ?> 
                <?php $sorteado = rand($numini, $numend);?> 
                <?php echo "$sorteado,"; ?> 
                <?php } ?> foram sorteados nesta ordem!</h1>
                <button id="Sair" type="button" onclick="window.location.href='../index.php'">Voltar</button>
            <?php } ?>
        <?php }elseif ($numsorteios<=0 || $numini<0){ ?>
            <h1>Não se pode calcular este número de sorteios!</h1>
            <button id="Sair2" type="button" onclick="window.location.href='../index.php'">Voltar</button>
        <?php } ?>
    </div>
</body>
</html>

