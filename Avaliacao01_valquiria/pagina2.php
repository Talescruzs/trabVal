<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro da Biblioteca</title>
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

        <link href ="css/bootstrap.min.css " rel="stylesheet" type="text/css"/> 
        <!-- <body class="container" id="a" style="background-image: url('img/e6e48ff71c621a0b61e39025ecdd3912-gpLarge.jpg'); background-repeat: no-repeat; background-size: cover;"> -->
        <body class="container" id="a">
        <link href="css/styles.css" rel="stylesheet" type="text/css"/>

        <script>
            function mostraModal(){
                document.getElementById('exampleModal').style.display = 'block';
            }
            function fechaModal(){
                document.getElementById('exampleModal').style.display = 'none';
            }
        </script>

    </head>

    <body class="container" id="a">


</div>
        <form method="post" action="pagina2.php">
        <br> 
            <?php
                session_start();
                
                if (!isset($_SESSION['matricula'])) {
                    header("Location: index.php");
                    exit();
                }
                require_once './teste.php';
                echo "</br>";
                echo "<h1>Olá, ".$_SESSION['nome']."</h1>";
                echo "</br>";
                echo "<h2>Sua senha é ".$_SESSION['senha']."</h2>";
                echo "</br>";
                echo "<h2>Seu email é ".$_SESSION['email']."</h2>";
                echo "</br>";
                echo "<h2>Sua matricula é ".$_SESSION['matricula']."</h2>";
                include 'header.php';
            ?>
            </br> 
            <fieldset>
                <br>
                <label> Nome</label> 
                <input type= "text" name="nome" class="form-control" id="nome" placeholder="digite seu nome completo" >

                <br>
                <label>Matrícula</label> 
                <input type="float" name="matricula" class="form-control" id="matricula" placeholder="digite o número da sua matrícula" >
                <br>
                <td>Bibliotecas</td>
                <select id="bibliotecas" name="bibliotecas">
                    <option>BC</option>
                    <option>BSCAL</option>
                    <option>BSCCNE</option>
                    <option>BSCCSH</option>
                    <option>BSCE</option>
                    <option>BSCEFD</option>
                    <option>BSCT</option>
                    <option>BSCTISM</option>
                    <option>BSCP</option>
                    <option>BSCS</option>
                    </select>
                    <br>
                    <br>
                    <label for="data">Selecione uma data:</label>
                    <input type="date" id="data" name="data">
                      <br>
                      
                
               
                <label>Título da obra</label>
                <input type="text" name="titulo" class="form-control" id="titulo" placeholder="digite o título da obra">
                <label>Autor</label> 
                <input type="text" name="autor" class="form-control" id="autor" placeholder="digite o nome do autor">
                <br>
                <input type="submit" class="btn btn-success" value="Salvar">
    
                
        
