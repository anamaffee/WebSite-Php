<?php

$artigos = [
    "Introdução ao PHP",
    "Variáveis em PHP",
    "Estruturas condicionais",
    "Laços de repetição"
];

?>

<div class="artigo">

    <h2 class="titulo">
        PROGRAMAÇÃO
    </h2>

    <h3>
        Artigo em destaque
    </h3>

    <p>
        Nesta seção você encontrará conteúdos relacionados
        à programação e desenvolvimento de sistemas.
    </p>

    <button>
        Leia mais
    </button>

    <h3 class="titulo">
        MAIS ARTIGOS
    </h3>

    <ul>

        <?php

        foreach ($artigos as $artigo) {

            echo "<li>$artigo</li>";

        }

        ?>

    </ul>

</div>