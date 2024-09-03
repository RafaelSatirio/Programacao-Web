<?php

$intervalo_recarregamento = 1;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>
    <meta http-equiv="refresh" content="<?php echo $intervalo_recarregamento; ?>">
</head>
<body>
    <h1>Exemplo de PHP no HTML</h1>
    <?php
        date_default_timezone_set("America/Sao_Paulo");
        $data_hoje = date ("d/m/y h:i:s", time()); 
    ?>
    <p align="center"> Agora em São Paulo: <?php echo $data_hoje; ?> </p>
</body>
</html>