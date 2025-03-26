<!DOCTYPE html>
<?php
include 'Exercicio1.php';
?>
<html lang="pt-br">
    

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio PHP</title>
</head>

<body> 
    <form method="POST" action="Exercicio1.php">
        <p>RA :</p>
            <input type="text" name="raInput">
            <p>Nome : </p>
            <input type="text" name="nomeInput">
            <p>Endereço:</p>
            <input type="text" name="enderecoInput">
            <p>Curso: </p>
            <input type="text" name="cursoInput">
            <input type="submit" value="enviar">        

    </form>
</body>



</html>