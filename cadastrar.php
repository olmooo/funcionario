<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $CPF = $_POST['CPF'];
    $senha = $_POST['senha'];

    include "conexao.php";

    $sql = "SELECT * FROM funcionarios 
            WHERE CPF = '$CPF'
            AND senha = '$senha'";

    $resultado = mysqli_query($con, $sql);

    if (mysqli_num_rows($resultado) > 0) {
        echo "Liberado!";
        header ('location: inicio.html');

    } else {
        echo "Usuário ou senha inválida!";
        echo "<a href='index.html'>Voltar</a>";
    }
}