<?php include 'includes/header.php'; ?>

<?php 
require_once 'validations/validaSesiones.php';
if (!sesionActiva()) {
    header("Location: index.php");
    exit();
 }
?>
<main>
    <div class="contenedor-main-flex">
        <?php include 'includes/Left.php'; ?>
        <div class="contenedor-flex">
            <!-- CONTENEDOR -->

            <div class="contenedor-crea-diario">
                <h2>CREA TU DIARIO</h2>
                <p>Crea tu diario contando de que se van a tratar tus historias o aventuras y las locuras que hacen tus
                    Sims.. :D</p>
                <?php include 'controllers/creaDiarioControlador.php';?>
                <!-- agrega formulario diario -->
                <form class="formulario-crea-diario" action=" " enctype="multipart/form-data" method="POST">
                    <!-- agrega formulario entrada -->
                    <h2>CREA TU PRIMERA ENTRADA</h2>
                    <input type="text" id="tituloE" name="tituloE" placeholder="Titulo de entrada" required>
                    <textarea id="contenidoE" name="contenidoE" rows="5" cols="40"
                        placeholder="escribe detalles de tu entrada"></textarea>
                    <div class="imagenYboton">
                        <div class="contenedor-imagen">
                            <input type="file" name="imagenE">
                        </div>
                        <div class="subYcheck">
                            <input title="Quieres que tu diario sea publico?" type="checkbox" id="check-diario"
                                name="checkD" checked>
                            <input type="submit" id="boton-crea-diario" value="Crear Diario" name="botonCrearDiario">
                        </div>
                    </div>
                    <div id="mensajeErrorCreaDiario" class="mensaje-error" value="" style="display: none;"></div>
                </form>
                <!-- end formulario entrada-->
                <?php echo $mensaje; ?>

            </div>
            <!-- <input type="file" name="imagen" > -->
            <!-- END CONTENEDOR -->
        </div>
    </div>
</main>

<?php include 'includes/footer.php'; ?>