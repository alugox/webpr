<?php
    require_once "../etc/func.php";
    //include '../etc/modals.php';   

    function referir1(){
    echo "Refiere o Invita a otra persona, para que pertenezca a nuestro grupo de participantes de <b><i>Mystery Shoppers</i></b>:";
    echo "<br><form class='form-header' role='form' method='POST' id='ms_referir'>
         <div class='form-group'>
            <label for='cantidad_e'>Ingresaré... </label>

            <div class='btn-group'>
                <button type='button' class='btn-primary'>1  <span class='glyphicon glyphicon-envelope'></span></button>
                <button type='button' class='btn btn-default'>2 <span class='glyphicon glyphicon-envelope'></span></button>
                <button type='button' class='btn btn-default'>3 <span class='glyphicon glyphicon-envelope'></span></button>
                <button type='button' class='btn btn-default'>4 <span class='glyphicon glyphicon-envelope'></span></button>
                <button type='button' class='btn btn-default'>5 <span class='glyphicon glyphicon-envelope'></span></button>
                <button type='button' class='btn btn-default'>6 <span class='glyphicon glyphicon-envelope'></span></button>
                <button type='button' class='btn btn-default'>7 <span class='glyphicon glyphicon-envelope'></span></button>
                <button type='button' class='btn btn-default'>8 <span class='glyphicon glyphicon-envelope'></span></button>
            </div>
        </div>   
 

        <div class='form-group'>
            <label for='emails'>Ingrese aquí el (o los) correo eléctronicos:<br></label>
            <input class='form-control input-lg' name='emails' id='emails' type='text' placeholder='Correo eléctronico ' required>
        </div>
        <br><div class='form-group'>
        <button type='submit' class='btn btn-primary' id='referir' name='referir'>Enviar Invitaciones</button>
        </div>
        </form>";
    
}


/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
referir1();
?>

