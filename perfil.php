<?php include_once 'includes/header.php'; ?>

<?php 
/* if (!sesionActiva()) {
    header("Location: index.php");
    exit();
 }
 */
?>

<!-- PORCION LEFT -->

</div>
<?php include_once 'controllers/perfilControlador.php';?>
<!-- FINAL DE LA PORCION LEFT -->
<div class="contenedor-flex">

    <!-- CONTENEDOR -->
    <div class="diario">
        <!-- perfil -->
        <?php echo$perfil;?>
        <!-- perfil end -->

        <div class="elemento-diario">
            <!-- cada diario  -->
            <?php if (is_array($misDiarios)) {
                        foreach ($misDiarios as $diario) {
                            echo $diario;
                          }
                    }?>
            <!-- cada diario end  -->
        </div>

        <h4>DIARIOS FAVORITOS:</h4>
        <div class="elemento-diario">
            <!-- cada diario  -->
            <?php if (is_array($diariosFavoritos)) {
                        foreach ($diariosFavoritos as $diario) {
                            echo $diario;
                          }
                    }?>
            <!-- cada diario end  -->
        </div>
    </div>

    <!-- END CONTENEDOR -->

    <?php include_once 'includes/footer.php'; ?>