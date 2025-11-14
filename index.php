<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <?php
        require_once 'conexao.php';

        if ($_SERVER["request_method"] === "POST") {
            $email = $_POST["e-mail"];
            $password = $_POST[""];
            try {
                //Prepara a cnsulta usando instrução preparada
                $inserir = $conexao->prepare("INSERT INTO formaulario(email)
                VALUES ('$nome', '$origem', '$diferenca')");

                //Executar a consulta
                if ($inserir->execute()) {
                    echo "E-mail cadastrado com sucesso!<br>";                    
                } else {
                    echo "Erro ao cadastrar e-mail: " .$inserir->errorInfo()[2];
                }

                //Fechar a instrução preparada
                $inserir = null;
            } catch (PDOException $e) {
                echo "Essp ap cadastrar e-mail: ". $e->getMessage();
            }
        }
        $conexao = null;
        ?>
</body>
</html>