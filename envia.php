<?php 

include("config.php");

 $nome = $_POST['nome'];
 $idade = $_POST['idade'];
 $email = $_POST['email'];
 
$sql = "INSERT INTO novos(nome, idade, email) VALUES ('$nome', '$idade', '$email')";

 if(mysqli_query($conexao, $sql))
 {
    echo "dados adicionados";

 }
 else
 {
    echo "falha ao adicionar dados";
 }
?>
