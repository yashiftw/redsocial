<?php

include_once URL_APP . '/views/custom/header.php';

include_once URL_APP . '/views/custom/navbar.php';

?>

<div class="container mt-3">
    <div class="container-notificaciones-usuario">
        <h6>Mensajeria privada</h6>
        <hr>
        <div class="row">
            <div class="col-md-6">
                <p>Enviar nuevo mensaje</p>
                <form action="<?php echo URL_PROJECT ?>/mensajes" method="POST">
                    <input type="hidden" name="idusermando" value="<?php echo $_SESSION['logueado'] ?>">
                    <div class="form-group">
                        <label for="enviar">Para:</label>
                        <select name="enviar" id="enviar" class="form-control" required>
                            <option value="">Seleccionar un destinatario</option>
                            <?php foreach ($datos['usuarios'] as $allUsuarios) : ?>
                                <option value="<?php echo $allUsuarios->idusuario ?>"><?php echo $allUsuarios->usuario ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="mensaje">Mensaje:</label>
                        <textarea name="mensaje" id="mensaje" cols="30" rows="5" class="form-control" required></textarea>
                    </div>
                    <button class="btn-purple btn-block">Enviar mensaje</button>
                </form>
            </div>
            <div class="col-md-6">
                <p>Mensajes recibidos</p>
                <hr>
                <?php foreach ($datos['ownMensajes'] as $datosMensajes) : ?>
                    <div class="container-contenido-comentarios">
                        <img src="<?php echo URL_PROJECT . '/' . $datosMensajes->fotoPerfil ?>" alt="" class="image-border mr-2">
                        <div class="contenido-comentario-usuario">

                            <a href="<?php echo URL_PROJECT ?>/mensajes/eliminarMensaje/<?php echo $datosMensajes->idmensaje ?>" class="float-right"><i class="far fa-trash-alt"></i></a>

                            <a href="<?php echo URL_PROJECT ?>/perfil/<?php echo $datosMensajes->usuario ?>" class="big mr-2"><?php echo $datosMensajes->usuario ?></a>

                            <p><?php echo $datosMensajes->contenido ?></p>

                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</div>

<?php

include_once URL_APP . '/views/custom/footer.php';

?>