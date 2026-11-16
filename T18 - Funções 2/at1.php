<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Calculadora em PHP</title>
</head>
<body>
    <h2>Calculadora</h2>

    <form method="post">
        <label>Número 1:</label>
        <input type="number" step="any" name="num1" required><br><br>

        <label>Número 2:</label>
        <input type="number" step="any" name="num2" required><br><br>

        <label>Operação:</label>
        <select name="operacao" required>
            <option value="adicao">Adição (+)</option>
            <option value="subtracao">Subtração (-)</option>
            <option value="multiplicacao">Multiplicação (*)</option>
            <option value="divisao">Divisão (/)</option>
        </select><br><br>

        <button type="submit">Calcular</button>
    </form>

    <?php
    // Funções para cada operação matemática
    function adicionar($a, $b) {
        return $a + $b;
    }

    function subtrair($a, $b) {
        return $a - $b;
    }

    function multiplicar($a, $b) {
        return $a * $b;
    }

    function dividir($a, $b) {
        if ($b == 0) {
            return "Erro: Não é possível dividir por zero.";
        }
        return $a / $b;
    }

    // Processamento do formulário
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = (float) $_POST["num1"];
        $num2 = (float) $_POST["num2"];
        $operacao = $_POST["operacao"];
        $resultado = "";

        switch ($operacao) {
            case "adicao":
                $resultado = adicionar($num1, $num2);
                break;
            case "subtracao":
                $resultado = subtrair($num1, $num2);
                break;
            case "multiplicacao":
                $resultado = multiplicar($num1, $num2);
                break;
            case "divisao":
                $resultado = dividir($num1, $num2);
                break;
        }

        echo "<h3>Resultado: " . $resultado . "</h3>";
    }
    ?>
</body>
</html>