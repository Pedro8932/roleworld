<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Deletar Cliente</title>
</head>

<body>
    <?php 
        include_once "cliente.php";

         $resultado = cliente::deletarCliente("josefino@hotmail.com");

        if($resultado) {
            echo "<p>Cliente deletado com sucesso!</p>";
        } else {
            echo "<p>O email não foi encontrado</p>";
        }

       /*
        if(isset($_GET["email"]) && !empty($_GET["email"])) {
            $email = $_GET["email"];

            $resultado = cliente::deletarCliente($email);

            if($resultado) {
                echo "<p>Cliente deletado com sucesso!</p>";
            } else {
                echo "<p>O email não foi encontrado</p>";
            }

        } else {
            echo "<p>email inválido</p>";
        }
        */
    ?>
</body>

</html>