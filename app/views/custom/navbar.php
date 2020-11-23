<header>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light text-white">


            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?php echo URL_PROJECT ?>/home"><span class="big"><i class="fas fa-home mr-1"></i></span>Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?php echo URL_PROJECT ?>/home/usuarios"><span class="big"><i class="fas fa-home mr-1"></i></span>Usuarios</a>
                    </li>
                    <li class="nav-item">
                        <form action="<?php echo URL_PROJECT ?>/home/buscar" method="POST" class="tipe-form form-inline my-2 my-lg-0">
                            <input type="text" name="buscar" class="form-style" placeholder="Buscar" />
                            <button class="btn-form" type="submit">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
  <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
</svg>
                            </button>
                        </form>
                    </li>
                </ul>

                <div class="links">
                    <div class="notificacion-container">
                        <a href="<?php echo URL_PROJECT ?>/mensajes" class="notificacion-container"><span class="big"><i class="far fa-envelope"></i></span></a>
                        <?php if ($datos['misMensajes'] > 0) : ?>
                            <div class="bg-notification"><?php echo $datos['misMensajes'] ?></div>
                        <?php endif ?>
                        </a>
                    </div>

                </div>

                <div class="links">
                    <div class="notificacion-container">
                        <a href="<?php echo URL_PROJECT ?>/notificaciones" class="notificacion-container"><span class="big"><i class="fas fa-bell"></i></span>
                            <?php if ($datos['misNoticaciones'] > 0) : ?>
                                <div class="bg-notification"><?php echo $datos['misNoticaciones'] ?></div>
                            <?php endif ?>
                        </a>
                    </div>
                </div>

                <div class="dropdown">
                    <span class="btn-radio dropdown-toggle" id="actionPerfil" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="<?php echo URL_PROJECT . '/' . $datos['perfil']->fotoPerfil ?>" alt="perfil" class="img-perfil" />
                        <?php echo ucwords($_SESSION['usuario']); ?>
                    </span>
                    <div class="dropdown-menu" aria-labelledby="actionPerfil">
                        <a class="dropdown-item text-dark" href="<?php echo URL_PROJECT ?>/home/logout">Salir</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>