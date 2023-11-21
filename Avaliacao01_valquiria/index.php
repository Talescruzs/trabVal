<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->


<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <style>
            #a {
                background: gray;
            }
            body{
                color:black;
            }
            p{
                color:black;
            }
        
            input, select, textarea {
                border-radius: 5px;
            }
        </style>
        <style>
            body {
                background-image: url('img/livro.jpg'); /* Substitua 'caminho/para/sua/imagem.jpg' pelo caminho real da sua imagem */
                background-size: cover; /* Isso faz com que a imagem cubra todo o fundo */
                background-repeat: no-repeat; /* Evita que a imagem seja repetida */
                background-attachment: fixed; /* Fixa a imagem de fundo para que ela não role com a página */
            }

        </style>
          
        <link href ="Avaliacao01_valquiria/css/bootstrap.min.css " rel="stylesheet" type="text/css"/> 
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <link href="css/styles.css" rel="stylesheet" type="text/css"/>
    </head>
    
    <body class="container" id="a" *style="background-image: url('img/e6e48ff71c621a0b61e39025ecdd3912-gpLarge.jpg'); background-repeat: no-repeat; background-size: cover;">
    <body class="container" id="a" >
        
    <div class="container-fluid"><br>
    </div>
         <div>
            <p align ="center">
            <b><h3></h3></b>
        </div>
        <form method="post" action="index.php">
        <br> 
        </br> 
        <fieldset>
            <label>E-mail ou nome de usuario</label> 
            <input type="float" name="name" class="form-control" id="name" plaaceholder="digite o número da sua matrícula" >
            <br> 
            <label>Senha</label>
            <input type="text" name="senha" class="form-control" id="senha" placeholder="digite sua senha">
            <br>
            <td> 
                <input type="submit" value ="logar" class="bnt btn-success">
            </td>
        </fieldset>
        
        <?php
            include('teste.php');
            $login = new Login();
            
            if($_POST){
                session_start();

                @$name = $_POST['name'];
                @$senha = $_POST['senha'];
                
                if(empty($name)||empty($senha)){
                    echo ('<div class = " alert alert-danger" role="alert"> Todos os campos são obrigatórios');
                } else{
                    if ($login->loginBanco($name, $senha)) {
                        // $user->createUser($login->matriculaPassou, $login->senhaPassou, $login->emailPassou);
                        $_SESSION['matricula'] = $login->getUser()->matricula;
                        $_SESSION['email'] = $login->getUser()->email;
                        $_SESSION['senha'] = $login->getUser()->senha;
                        $_SESSION['nome'] = $login->getUser()->nome;
                        header("Location: pagina2.php");
                        exit();
                    } 
                    else {
                        // Usuário ou senha incorretos, exiba uma mensagem de erro
                        echo "Usuário ou senha incorretos. Tente novamente.";
                    }
                
                }

                
            }
        ?>
        <?php
            include 'header.php';
        ?>
        
    </body>
</html>
