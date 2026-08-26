<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Portal de Tecnologia</title>

    <style>
        body {
            font-family: Arial;
            background-color: #eee;
            margin: 0;
        }

        #site {
            width: 1000px;
            margin: auto;
            background-color: white;
        }

        #principal {
            display: flex;
            gap: 20px;
            padding: 20px;
        }

        #conteudo {
            width: 650px;
        }

        #lateral {
            width: 300px;
        }

        .titulo {
            background-color: #222;
            color: white;
            padding: 10px;
        }

        .caixa {
            background-color: #777;
            padding: 15px;
            margin-bottom: 20px;
        }

        .artigos {
            display: flex;
            gap: 20px;
        }

        .artigo {
            width: 50%;
            background-color: #777;
            padding: 10px;
        }
    </style>

</head>

<body>

<div id="site">

    <?php include("cabecalho/cabecalho.php"); ?>

    <?php include("menu/menu.php"); ?>

    <div id="principal">

        <div id="conteudo">

            <?php include("artigos/destaques.php"); ?>

            <div class="artigos">

                <?php include("artigos/programacao.php"); ?>

                <?php include("artigos/webdesign.php"); ?>

            </div>

        </div>


        <div id="lateral">

            <?php include("lateral/pesquisa.php"); ?>

            <?php include("lateral/mais_lidos.php"); ?>

            <?php include("lateral/imagens.php"); ?>

        </div>

    </div>

    <?php include("rodape/rodape.php"); ?>

</div>

</body>
</html>