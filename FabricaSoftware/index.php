<?php include '../bases/header.php' ?> <!--Llamo el archivo donde se encuentra la estructura que quiero heredear-->

<?php startblock('links-styles') ?>
    <!-- ESTILOS CSS -->
    <link rel="stylesheet" type="text/css" href="fabrica.css"> <!-- Estilos de la fabrica -->
    <title>Fabrica De Software</title> 
<?php endblock() ?>

<?php startblock('contenido') ?>
    <div class="sennova">
        <section>
            <h1 class="titulo">Fabrica Software</h1>
            <article>
                <img src="" alt="logo">
            </article>
            <h3 class="subtitulos">Subtitulo</h3>
            <p>
                parrafo
            </p>
            
        </section>
    </div>
<?php endblock() ?>

<?php startblock("script")?>
    <script src="fabrica.js"></script>
<?php endblock() ?>

