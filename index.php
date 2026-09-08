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

    <?php include("cabecalho/header.php"); ?>

    <?php include("menu/menu.php"); ?>

    <div id="principal">

        <div id="conteudo">

            <?php include("artigos/artigos.php"); ?>

            <div class="artigos">

                <?php include("artigos/programacao.php"); ?>

                <?php include("artigos/webdesign.php"); ?>

            </div>

        </div>


        <div id="lateral">

            <?php include("lateral/pesquisa.php"); ?>

            <?php include("lateral/maisLidos.php"); ?>

            <?php include("lateral/imagens.php"); ?>

        </div>

    </div>

    <?php include("rodape/footer.php"); ?>

</div>

    <?php //Sandro, aqui era pra incluirmos o site da vall
    //  mas ele simplesmente sumiu tudo. O merge não teve
    // erros mas simplesmente não conseguimos juntar as duas paginas. 
    // As duas partes estao aqui copiadas e no github da val ta publica a parte dela. 
    // obrigado e desculpa a demora. ?>

</body>
</html>