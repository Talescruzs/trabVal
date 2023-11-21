
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela de Livros</title>
    <!-- Inclua os estilos do Bootstrap -->
    <link href="css/styletabela1" rel="stylesheet" type="text/css"/>
</head>
<body>
    <div class="container">
        <h1>Tabela de livros</h1>
        <?php
        // Array associativo com informações sobre pessoas
        $tabelaLivros = array(
            array("nome" => "As flores do mal", "autor" =>"Charles Baudelaire", "imagem" => "img/livro_1.jpg"),
            array("nome" => "Eu robô", "autor" =>"Isaac Asimov","imagem" => "img/livro_2.jpg"),
            array("nome" => "Laranja Mecânica", "autor" =>"Anthony Burgess","imagem" => "img/livro_3.jpg"),
            array("nome" => "Você fica tão sozinho às vezes que até faz sentido","autor" =>"Charles Bukowski", "imagem" => "img/livro_4.jpg"),
            array("nome" => "neuromancer","autor" =>"William Gibson", "imagem"=>"img/livro_5.jpg"),
        );

        // Função para ordenar o array pelo nome
        function cmp($a, $b) {
            return strcmp($a["nome"], $b["nome"]);
        }

        usort($tabelaLivros, "cmp");

        // Iniciar a tabela HTML com classes do Bootstrap
        echo '<table class="table table-bordered">';
        echo '<thead><tr><th>Nome</th><th>Imagem</th></tr></thead>';
        echo '<tbody>';

        // Iterar sobre os dados e gerar as linhas da tabela
        foreach ($tabelaLivros as $tabelaLivros) {
            echo ('<tr>');
            echo ('<td>');
            echo ($tabelaLivros['nome']);
            echo ('</td>');
            echo ('<td>');
            echo ($tabelaLivros['autor']);
            echo ('</td>');
            echo ('<td>');
            echo ('<img src="' . $tabelaLivros['imagem'] . '"alt="img" style="height: 240px; width: 160px;">');
            echo ('</td>');
            echo ('</tr>');
        }

        // Fechar a tabela HTML
        echo '</tbody></table>';
        ?>
    </div>
    
    <!-- Inclua os scripts do Bootstrap (jQuery e Popper.js) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>



 