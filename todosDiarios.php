<?php include_once 'includes/header.php'; ?>
<?php 
/* if (!sesionActiva()) {
    header("Location: index.php");
    exit();
 } */
?>

<?php include_once 'controllers/todosDiariosControlador.php';?>

<!-- PORCION LEFT -->
<div class="contenedor-cosas">
    <div class="contenedor-cosas-abajo">
        <form class="formulario-filtra" action=" " method="POST">
            <div class="contenedor-categoria">
                <h4>ELIJE LOS GENEROS DEL DIARIO QUE BUSCAS</h4>
                <!-- agrega selector desde el controlador -->
                <?php echo $vistaCategoria?>
            </div>
            <label for="OrdenarF">Ordenar una por:</label>
            <select name="OrdenarF" id="Ordenar">
                <option value="1">Fecha Actualización</option>
                <option value="2">Fecha Creación </option>
                <option value="3">Puntos</option>
            </select>
            <label for="DireccionF">Direccion de orden:</label>
            <select name="DireccionF" id="Direccion">
                <option value="1">Descendente </option>
                <option value="2">Ascendente </option>
            </select>
            <input type="text" id="tituloF" name="tituloF" placeholder="Titulo Diario">
            <div class="subYcheck">
                <input type="submit" id="boton-filtra" value="Filtra Diario" name="botonFiltra">
            </div>
        </form>
    </div>
</div>
</div>

<!-- FINAL DE LA PORCION LEFT -->
<div class="contenedor-flex">
    <!-- CONTENEDOR -->
    <div class="diario">
        <h4>DIARIOS:</h4>
        <div class="elemento-diario">

            <p>Aquí encontraras los diarios que otras personas publicaron para que puedas ver las historias de los demás
                n-n.
                <br>
                Esta es la lista de todos los diarios disponibles del momento.<br>
                No seas tímido y pon el tuyo!.
            </p>

        </div>
        <h4>TODOS LOS DIARIOS:</h4>
        <div class="elemento-diario">
            <!-- cada diario  -->
            <?php  if (is_array($todosDiarios)) {
                        foreach ($todosDiarios as $diario) {
                            echo $diario;
                          }
                    } ?>

            <?php 
           /*  $diariosPorPagina = 2;
            $numTotalDiarios = count($todosDiarios);
            $numTotalPaginas = ceil($numTotalDiarios / $diariosPorPagina);
            $paginaActual = isset($_GET['pagina']) ? intval($_GET['pagina']) : 1;
            $restoDeDiarios = $todosDiarios;
            for ($i = 0; $i < $numTotalPaginas; $i++) { 
                $restos = [];
                $paginas;
                $objPagina = [];
                $contador = 1;               
                foreach ($restoDeDiarios as $diario) {   
                    if ($contador <= $diariosPorPagina) {
                        $objPagina[]= $diario;  
                    }else{
                        $restos[]= $diario;
                    } 
                    $contador++; 
                }              
                $restoDeDiarios =  $restos;               
                $paginas[] =  $objPagina;
            }

            echo " <div class='pagina'>";
                echo " <h3>Página número: ".$paginaActual."</h3>";
                var_dump($paginas);
             
                    foreach ($paginas as $key) {
                        foreach ($key as $value => $diario) {
                            echo $diario;  
                        }
                        
                    }
                    for ($i = 0; $i < $numTotalPaginas; $i++) { 
                        echo "<a class='listaPagina' href='?pagina=".($i+1)."'>" .($i+1)."</a>";
                    }
         
            echo "</div>"; */
                ?>
            <!-- cada diario end  -->
        </div>
        <!-- separador -->

        <!-- END CONTENEDOR -->

        <?php include_once 'includes/footer.php'; ?>