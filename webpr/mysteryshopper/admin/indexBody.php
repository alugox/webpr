<script>
                function myAjax() {
                  $.ajax({
                       method : "POST",
                       url: '../etc/modals.php',
                       data:{action:'call_this', cantidad: ''},
                       success:function(html) {
                       
                        document.getElementById('textoVacio').innerHTML = html;
                       }

                  });
             }
</script>
<?php include '../etc/modals.php';?>    
    <!-- COMIENZO DE MODAL: PARTICIPANTES PENDIENTES  -->
    <div id="partPendientes" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">PARTICIPANTES PENDIENTES</h4>
                </div>
                <div class="modal-body">
                   <?php partPend(); ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>

        </div>
    </div>
    
    <!-- COMIENZO DE MODAL: PARTICIPANTES ACTIVOS  -->
    <div id="partActivos" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">PARTICIPANTES ACTIVOS</h4>
                </div>
                <div class="modal-body">
                   <?php partAct(1, ""); ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>

        </div>
    </div>
    
        <!-- COMIENZO DE MODAL: PARTICIPANTES ACTIVOS PARTE2  -->
    <div id="partActivos2" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    
                    <h4 class="modal-title"><button class="btn" onClick='showLoad(bookId.value)'>Ver Resumen</button></h4>
                </div>
                <div class="modal-body">
                    <div class="modal-body2">
                   <?php 
                        echo "<input type='hidden' name='bookId' id='bookId' value=''/>";
                         echo "<div id='txtHint' class='txt'></div>";?>
                </div></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>

        </div>
    </div>
    
    <!-- COMIENZO DE MODAL: PROGRAMAR VISITA  -->
    <div id="progVisita" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">PROGRAMAR VISITA</h4>
                </div>
                <div class="modal-body">
                   <?php progUno(); ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>

        </div>
    </div>

    <!-- COMIENZO DE MODAL: REPORTES DE VISITAS  -->
    <div id="repVisita" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">REPORTES DE VISITAS</h4>
                </div>
                <div class="modal-body">
                   <?php //partAct(3, ""); ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>

        </div>
    </div>
    
    <!-- COMIENZO DE MODAL: HISTORICO DE VISITAS  -->
    <div id="invitarP" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">INVITAR A UN PARTICIPANTE</h4>
                </div>
                <div class="modal-body">
                   <?php referir1(); ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>

        </div>
    </div>    
    
    
            <script src="/mysteryshopper/js/funciones.js"></script>