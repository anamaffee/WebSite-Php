<?php

$titulo = "Meu artigo legal em CSS";

$texto = "Este é o artigo principal do nosso site. 
Aqui ficará uma pequena descrição sobre o conteúdo 
publicado e outros assuntos relacionados à tecnologia.";

?>

<div class="caixa">

    <h2 class="titulo">
        DESTAQUES
    </h2>

    <div style="display:flex; gap:15px;">

        <div style="
            width:200px;
            height:170px;
            background:white;
        ">
        </div>

        <div>

            <h2>
                <?php echo $titulo; ?>
            </h2>

            <p>
                <?php echo $texto; ?>
            </p>

            <button>
                Leia mais
            </button>

        </div>

    </div>

</div>