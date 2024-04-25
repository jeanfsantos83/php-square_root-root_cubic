<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-AU-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio 008</title>
</head>
<body>
    <?php 
        // Área de declarações
        $numero = $_GET['num'] ?? 0;
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="num">Número</label>
            <input type="number" name="num" id="num" value="<?=$numero?>">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>
    <section>
        <?php 
            $rq = sqrt($numero);
            // $rq = $num ** (1/2);
            // $rc = $numero ** (1/3);
            $rc = pow($numero, 1/3);
            echo "<p>Analisando o número <strong>$numero</strong>, temos:";
            echo "<ul><li>A sua raiz quadrada é <strong>". number_format($rq, 2, ",", ".") ."</strong></li>";
            echo "<li>A sua raiz cúbica é <strong>". number_format($rc, 2, ",", ".") ."<strong></li></ul></p>";
        ?>
    </section>
</body>
</html>