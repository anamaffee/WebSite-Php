<?php

$maisLidos = [
    "Fazer site em PHP",
    "Como aprender HTML",
    "Banco de dados MySQL",
    "Introdução ao CSS",
    "Lógica de programação"
];

?>

<div style="background:white; margin-top:15px;">

    <h2 class="titulo">
        MAIS LIDOS
    </h2>

    <ol>

        <?php

        foreach ($maisLidos as $noticia) {

            echo "<li>$noticia</li>";

        }

        ?>

    </ol>

</div>