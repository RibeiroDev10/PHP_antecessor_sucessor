<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>Resultado Final</h1>
        <p>
            <?php
                $numero = $_GET['num'] ?? 0;
                $antecessor = $numero - 1;
                $sucessor = $numero + 1;

                echo "O numéro escolhido foi <strong>$numero</strong>.";
                echo "<br> O seu <strong><em>antecessor</em></strong> é $antecessor.";
                echo "<br> O seu <strong><em>sucessor</em></strong> é $sucessor.";
            ?>
        </p>

        <button onclick="javascript:history.go(-1)">&#x2b05; Voltar</button>
    </main>
</body>

</html>