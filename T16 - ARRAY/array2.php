<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
</head>
<body>

    <form method="POST">
        <label>Nome:</label><br>
        <input type="text" name="nome" required><br><br>

        <label>Idade:</label><br>
        <input type="number" name="idade" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Telefone:</label><br>
        <input type="text" name="telefone" required><br><br>

        <label>Endereço:</label><br>
        <input type="text" name="endereco" required><br><br>

        <input type="submit" value="Enviar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $cliente = [
            "nome"     => $_POST['nome'],
            "idade"    => $_POST['idade'],
            "email"    => $_POST['email'],
            "telefone" => $_POST['telefone'],
            "endereco" => $_POST['endereco']
        ];

        echo "<h3>Dados Cadastrados:</h3>";
        echo "Nome: " . $cliente['nome'] . "<br>";
        echo "Idade: " . $cliente['idade'] . "<br>";
        echo "Email: " . $cliente['email'] . "<br>";
        echo "Telefone: " . $cliente['telefone'] . "<br>";
        echo "Endereço: " . $cliente['endereco'];
    }
    ?>

</body>
</html>