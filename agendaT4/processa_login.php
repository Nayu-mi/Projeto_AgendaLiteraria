<?php
//inclui arquivo de conexão php
include_once "conexao.php";

//início de sessão
session_start();

try{
    //recebe dados do login
    $nomeuser = $_POST['usuario'];
    $senha = $_POST['senha'];

    //prepara a consulta SQL para buscar o usuário
    $sql = $conn->prepare("SELECT * FROM usuarios WHERE nomeuser = ?");
    $sql->bind_param("s", $nomeuser);
    $sql->execute();
    $result = $sql->get_result();

    if($result->num_rows > 0){
        //obtém os dados do usuário
        $user = $result->fetch_assoc();

        //verficca se a senha esta correta
        if(password_verify($senha, $user['senha'])){
            //sucesso no login
            $_SESSION['usuario'] = $user['nomeuser'];
            header("Location: mainpage.php");
            exit;
        } else{
            //senha incorreta
            echo "<script>
                    alert('Senha incorreta. Tente novamente. ');
                    window.location.href = 'login.html';
                    </script>";
        }
    } else {
        //usuário não encontrado
        echo "<script>
                alert('Usuário não encontrado. Tente novamente.');
                window.location.href = 'login.html';
                    </script>";
    }
} catch (Exception $e){
    echo "Erro: " . $e->getMessage();
}
?>