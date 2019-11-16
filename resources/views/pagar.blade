<?php
include 'global/config.php';
include 'global/conexion.php';
include 'includes/carrito.php';
include 'templetes/cabecera.php';
?>
<?php
if ($_POST){
    $total=0;
    $SID=session_id();
    $Correo=$_POST['email'];
    foreach($_SESSION['CARRITO'] as $indice=>$producto){
    $total=$total+($producto['PRECIO']*$producto['CANTIDAD']);

    }
    $sentencia=$pdo->prepare("INSERT INTO `tbl_Ventas` (`ID`, `ClaveTransaccion`, `PaypalDatos`, `Fecha`, `Correo`, `Total`, `status`) 
    VALUES (NULL, :ClaveTransaccion, '', NOW(), :Correo, :Total, 'pendiente');");
    $sentencia->bindParam(":ClaveTransaccion",$SID);
    $sentencia->bindParam(":Correo",$Correo);
    $sentencia->bindParam(":Total",$total);
    $sentencia->execute();
    // este método sirve para obtener el último id insertado en la base de datos
    $idVenta=$pdo->lastInsertId();
    foreach($_SESSION['CARRITO'] as $indice=>$producto){
        $sentencia=$pdo->prepare("INSERT INTO 
        `tbl:detalleventa` (`ID`, `IDVENTA`, `IDPRODUCTO`, `PRECIOU`, `CANTIDAD`, `DESCARGADO`) 
        VALUES (NULL, :IDVENTA, :IDPRODUCTO, :PRECIOU , :CANTIDAD, '0')");
        $sentencia->bindParam(":IDVENTA",$idVenta);
        $sentencia->bindParam(":IDPRODUCTO",$producto['ID']);
        $sentencia->bindParam(":PRECIOU",$producto['PRECIO']);
        $sentencia->bindParam(":CANTIDAD",$producto['CANTIDAD']);
        $sentencia->execute();
        unset($_SESSION['CARRITO']);
    }
    
    //echo "<h3>".$total."</h3>";
}
?>
 <script src="https://www.paypal.com/sdk/js?client-id=sb&currency=MXN"></script>
 <style>
        /* Media query for mobile viewport */
        @media screen and (max-width: 400px) {
            #paypal-button-container {
                width: 100%;
            }
        }
        
        /* Media query for desktop viewport */
        @media screen and (min-width: 400px) {
            #paypal-button-container {
                width: 250px;
            }
        }
    </style>
<?php
if(empty($_SESSION['user'])){
header("Location: iniciarSesion.php");
}else{
    unset($_SESSION['CARRITO']);
?>
 <div class="jumbotron text-center">
    <h1 class="display-4">¡PasoFinal!</h1>
    <hr class="my-4">
    <p class="lead">Estas apunto de pagar con PayPal de: 
        <h4>$<?php echo number_format( $total ,2); ?></h4>
        <div class="btn btn-center" id="paypal-button-container" ></div>
    </p>
    <p>Los productos podran ser recogidos una vez que se procese el pago <br/>
        <strong>
            (Para aclaraciones: DouxCakessacv@gmail.com)
        </strong>
    </p>
</div>
   <?php
    }    
   ?> 


<script>
    
        // Render the PayPal button into #paypal-button-container
        paypal.Buttons({
            env: 'sandbox',// sandbox | production 
            style: {
                label:  'checkout',//
                layout: 'horizontal',
                size: 'responsive', // small | medium | large | responsive
                shape:  'pill',//pill | rect
                color:  'gold'// gold | blue | silver | black
            },

            client: {
                sandbox: 'AbNx79DMhgSUEVn5T3pHjSYnAsnRTSVJFuBC39_gwNFAjG9uT_2FyoFScoohWPjiPEpFk5FGhmRQv1-U',
                production: 'AWujBfcmSJplooMcA6IIxlqz9vSDUpU5S-IN-lTBd3MHOVkxLftPL7nTo6ECguYA4cs4QoEj3yDFiTTg'
            },
             // Set up the transaction
             createOrder: function(data, actions) {
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: '<?php echo $total?>' , currency: 'MXN'
                        },
                        description: "Compra de CupCakes en DouxCake: $<?php echo number_format($total,2);?>",
                        custom: "<?php echo $SID;?>#<?php openssl_encrypt($idVenta,COD,KEY)?>"
                    }]
                });
            },
            
            // Finalize the transaction
            onApprove: function(data, actions) {
                return actions.order.capture().then(function(pdata) {
                    // Show a success message to the buyer
                    //alert('Transaction completed by ' + details.payer.name.given_name + '!');
                    console.dir(pdata);
                    var tran=true;
                    //console.log(data);
                    window.location="respuestaPedido.php";
                    
                });
            }


        }).render('#paypal-button-container');
    </script>
    

<?php
include 'templetes/pie.php';
?>