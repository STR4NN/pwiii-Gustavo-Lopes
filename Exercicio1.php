<?php
   $RA = $_POST["raInput"];
   $nomeALuno = $_POST["nomeInput"];
   $Endereco = $_POST["enderecoInput"];
   $Curso = $_POST["cursoInput"];
 ;
 
   $db_host = 'localhost'; // Host do DATABASE
   $db_nome = 'teste'; // Nome criado do seu DATABASE
   $db_user = 'root'; 
   $db_senha = '';
   
      // Estabelece a conexão com o banco de dados usando PDO
      $conexao = new PDO("mysql:host=$db_host;dbname=$db_nome;charset=utf8", $db_user, $db_senha);
      // Configura o PDO para lançar exceções em caso de erro
      $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      // Verifique se a conexão foi bem-sucedida
      if (!$conexao) {
          die("Falha na conexão com o banco de dados!");
      }

      // Verificar se o RA já existe na tabela
      $verificaRA = $conexao->prepare('SELECT COUNT(*) FROM tabela_teste WHERE RA = :RA');
      $verificaRA->bindParam(':RA', $RA, PDO::PARAM_INT);
      $verificaRA->execute();
      $resultado = $verificaRA->fetchColumn();

      if ($resultado > 0) {
          // Se RA existe, atualizar os dados
          $query = $conexao->prepare('
              UPDATE tabela_teste 
              SET nome = :nome, endereco = :endereco, curso = :curso 
              WHERE RA = :RA
          ');

          // Faz o binding dos parâmetros com as variáveis
          $query->bindParam(':nome', $nomeALuno, PDO::PARAM_STR);
          $query->bindParam(':endereco', $Endereco, PDO::PARAM_STR);
          $query->bindParam(':curso', $Curso, PDO::PARAM_STR);
          $query->bindParam(':RA', $RA, PDO::PARAM_INT);
          
          // Executa a query para atualizar
          $query->execute();
          
          echo "Dados atualizados com sucesso!";
      } else {
          // Se RA não existe, inserir como novo registro
          $query = $conexao->prepare('
              INSERT INTO tabela_teste (nome, RA, endereco, curso) 
              VALUES (:nome, :RA, :endereco, :curso)
          ');

          // Basicamente faz o mapeamento das variaveis do codigo com os atributos do BD
          $query->bindParam(':nome', $nomeALuno, PDO::PARAM_STR);
          $query->bindParam(':RA', $RA, PDO::PARAM_INT);
          $query->bindParam(':endereco', $Endereco, PDO::PARAM_STR);
          $query->bindParam(':curso', $Curso, PDO::PARAM_STR);
          
          // Execução dos comandos SQL
          $query->execute();
          
          echo "Dados inseridos com sucesso!";
      }
?>