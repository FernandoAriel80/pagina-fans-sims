<?php include 'includes/header.php'; ?>

<?php 
require_once 'validations/validaSesiones.php';
if (!sesionActiva()) {
    header("Location: index.php");
    exit();
 }
?>
<?php include 'controllers/creaCapituloControlador.php';?>
<main>
    <div class="contenedor-main-flex">
        <?php include 'includes/Left.php'; ?>
        <div class="contenedor-flex">
            <!-- CONTENEDOR -->

            <div class="contenedor-crea-capitulo">
                <h2>CREA ENTRADA</h2>
                <p>Crea otra entrada para tu diario: <?php echo $diarioActual; ?></p>   
                <!-- agrega formulario diario -->
                <form class="formulario-crea-capitulo" action=" " enctype="multipart/form-data" method="POST">
                    <!-- agrega formulario entrada -->
                    <input type="text" id="tituloE" name="tituloE" placeholder="Titulo de entrada" required>
                    <textarea id="contenidoE" name="contenidoE" rows="5" cols="40"
                        placeholder="escribe detalles de tu entrada"></textarea>
                    <div class="imagenYboton">
                        <div class="contenedor-imagen">
                            <input type="file" name="imagenE">
                        </div>
                        <div class="subYcheck">
                            <input type="submit" id="boton-crea-capitulo" value="Crear" name="botonCrearCapitulo">
                        </div>
                    </div>
                    <div id="mensajeErrorCreaDiario" class="mensaje-error" value="" style="display: none;"></div>
                </form>
                <!-- end formulario entrada-->
                <?php echo $mensaje; ?>

            </div>

            <!-- END CONTENEDOR -->
        </div>
    </div>
</main>

<?php include 'includes/footer.php'; ?>