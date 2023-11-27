<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Teste de Conexão PHP com PostgreSQL</title>
</head>
<body>
    <h1>Teste de Conexão PHP com PostgreSQL</h1>
    <?php
    // Substitua os dados de conexão com os fornecidos no seu ambiente
    $host = 'db'; // nome do serviço do PostgreSQL no Docker Compose
    $dbname = 'db_test';
    $user = 'postgres';
    $password = 'postgres';

    // Conexão com o PostgreSQL
    $conn = pg_connect("host=$host dbname=$dbname user=$user password=$password");

    // Verificação da conexão
    if (!$conn) {
        echo "Erro ao conectar ao PostgreSQL.";
    } else {
        echo "Conexão com PostgreSQL bem-sucedida!";
        pg_close($conn);
    }
    ?>
</body>
</html>
