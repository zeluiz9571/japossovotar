<!--Início HTML-->
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Já posso votar?</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
<!------------------------------------------------------------------------------------------------------->
    <!--Início do Campo para preencher com a idade-->
    <form method="post">
        <label for="idade">Informe sua idade</label>
        <br><!--Pula Linha-->
        <input type="number" name="idade">
        <input type="submit"><!--Botão para enviar a informação-->
    </form>
    <!-- Fim do Campo para preencher com a idade-->
<!-------------------------------------------------------------------------------------------------------->
    <!--Início do PHP-->
    <?php
    /* Como no Início está sem variável ocorrerá um erro, coloque uma idade e voltará ao normal */
        $idade = $_POST["idade"]; //Faz referência à "<form method='post'>" da linha 13//
        if ($idade < 16 && $idade > 0) {
        echo "Não pode votar!";
        } else if ($idade >= 16 && $idade <= 18) {
        echo "O voto é facultativo.";
        } else if ($idade >= 19 && $idade <= 65) {
        echo "O voto é obrigatório!";
        } else if ($idade >= 66) {
        echo "O voto é facultativo.";
        } else {
        echo "Coloque uma idade válida!";
        }
    ?>
    <!--Fim do PHP-->
<!------------------------------------------------------------------------------------------------------->
</body>
</html>
<!--Fim do HTML-->