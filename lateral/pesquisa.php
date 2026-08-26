<form method="GET">

    <input
        type="text"
        name="pesquisa"
        placeholder="Digite o texto e pressione enter"
        style="
            width:100%;
            padding:10px;
            box-sizing:border-box;
        "
    >

</form>

<?php

if (isset($_GET["pesquisa"]) && $_GET["pesquisa"] != "") {

    $pesquisa = htmlspecialchars($_GET["pesquisa"]);

    echo "<p>Você pesquisou por: <strong>$pesquisa</strong></p>";

}

?>