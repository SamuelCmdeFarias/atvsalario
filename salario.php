<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
    <title>Calculadora de Salário para Vendedores</title>
</head>
<body>
    <div class="container">
        <h2>Sistema de calculo de Salário</h2>
        <h6><em>Para vendedores</em></h6>
        <form action="" method="post">
            <label for="nome">Nome:</label><br>
            <input type="text" id="nome" name="nome" required><br>
            <label for="meta_semanal">Meta de Venda Semanal:</label><br>
            <input type="text" id="meta_semanal" name="meta_semanal" value="R$" required><br>
            <label for="meta_mensal">Meta de Venda Mensal:</label><br>
            <input type="text" id="meta_mensal" name="meta_mensal" value="R$" required><br><br>
            <input type="submit" value="Calcular Salário">
        </form>
   
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nome = $_POST["nome"];
            $meta_semanal = floatval(str_replace('R$', '', $_POST["meta_semanal"]));
            $meta_mensal = floatval(str_replace('R$', '', $_POST["meta_mensal"]));
            $salario_minimo = 1412; 
           
            if ($meta_semanal >= 20000) {

                $bonus_semanal = $meta_semanal * 0.01;
               

                $excedente_semanal = ($meta_semanal - 20000) * 0.05;
            } else {
                $bonus_semanal = 0;
                $excedente_semanal = 0;
            }
           

            if ($meta_mensal >= 80000 && $bonus_semanal > 0) {

                $excedente_mensal = ($meta_mensal - 80000) * 0.10;
            } else {
                $excedente_mensal = 0;
            }
           
            $salario_final = $salario_minimo + $bonus_semanal + $excedente_semanal + $excedente_mensal;
   
            echo "<div class='resultado'>";
            echo "<h3>Resultado</h3>";
            echo "<p>Nome do Vendedor: $nome</p>";
            echo "<p>Salário Final: R$ " . number_format($salario_final, 2, ",", ".");
            echo "</p></div>";
        }
        ?>
    </div>
</body>
</html>
