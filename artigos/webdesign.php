<?php

$artigos = [
    "Introdução ao HTML",
    "Como utilizar CSS",
    "Criando layouts",
    "Flexbox e Grid"
];

?>

<div class="artigo">

    <h2 class="titulo">
        WEBDESIGN
    </h2>

    <h3>
        Artigo em destaque
    </h3>

    <p>
        Nesta seção você encontrará conteúdos relacionados
        à criação e desenvolvimento de páginas para internet.
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