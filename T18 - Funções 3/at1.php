<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Validador de Cadastro</title>
</head>
<body>
    <h2>Verificação de Cadastro</h2>

    <form method="post">
        <label>Nome:</label>
        <input type="text" name="nome" required><br><br>

        <label>Sexo:</label>
        <select name="sexo" required>
            <option value="F">Feminino</option>
            <option value="M">Masculino</option>
        </select><br><br>

        <label>Idade:</label>
        <input type="number" name="idade" min="0" required><br><br>

        <button type="submit">Verificar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = htmlspecialchars($_POST["nome"]);
        $sexo = $_POST["sexo"];
        $idade = (int) $_POST["idade"];

        if ($sexo == "F" && $idade < 25) {
            echo "<h3>" . $nome . " - ACEITA</h3>";
        } else {
            echo "<h3>" . $nome . " - NÃO ACEITA</h3>";
        }
    }
    ?>
</body>
</html>