<!-- Navbar & Hero Start -->


<header class="main-header">
    <nav class="navbar navbar-expand-lg navbar-light navbar-impenetrable px-4 px-lg-5 py-3 py-lg-0 nav-backgorund">

            <!-- <h1 class="m-0"><i class="fa fa-tree me-2"></i><span class="fs-5">EL IMPENETRABLE</span></h1>-->
           
<?=  
$this->Html->link(
    $this->Html->image('logo-impenetrable-blanco.png',array('id' => 'logo')),
    array(
        'controller' => 'admin', 
        'action' => 'index',
    ), array('class' => 'navbar-brand p-0', 'escape' => false)
);
                        ?>


        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0 nav-items">

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" id="li_Timeline">Usuarios</a>
                    <div class="dropdown-menu m-0">
                        <?=  $this->Html->link(
                            'Lista de Usuarios',
                            ['controller' => 'Users', 'action' => 'view', '?' => ['Categoria' => 'Usuarios', 'Context' => 'Admin']],
                            ['class' => 'dropdown-item']
                        );
                        ?>

                        <?=  $this->Html->link(
                            'Nuevo Usuario',
                            ['controller' => 'Users', 'action' => 'register', '?' => ['Categoria' => 'Usuarios', 'Context' => 'Admin']],
                            ['class' => 'dropdown-item']
                        ); ?>

                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" id="li_Configuraciones">Imágenes de Slider</a>
                    <div class="dropdown-menu m-0">
                        <?=  $this->Html->link(
                            'Lista de Slider Home',
                            ['controller' => 'Configuraciones', 'action' => 'viewImageSlider', '?' => ['Categoria' => 'Configuraciones', 'Context' => 'Admin']],
                            ['class' => 'dropdown-item']);
                        ?>
                        <?=  $this->Html->link(
                            'Nuevo Slider Home',
                            ['controller' => 'Configuraciones', 'action' => 'addImageSlider', '?' => ['Categoria' => 'Configuraciones', 'Context' => 'Admin']],
                            ['class' => 'dropdown-item']);
                        ?>

                    </div>
                </div>

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" id="li_Timeline">Línea Histórica</a>
                    <div class="dropdown-menu m-0">
                        <?=  $this->Html->link(
                            'Lista de eventos',
                            ['controller' => 'Timeline', 'action' => 'index', '?' => ['Categoria' => 'Timeline', 'Context' => 'Admin']],
                            ['class' => 'dropdown-item']
                        ); ?>

                        <?=  $this->Html->link(
                            'Nuevo evento',
                            ['controller' => 'Timeline', 'action' => 'add', '?' => ['Categoria' => 'Timeline', 'Context' => 'Admin']],
                            ['class' => 'dropdown-item']
                        ); ?>

                    </div>
                </div>

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" id="li_Timeline">Artesanos, Productos y Servicios</a>
                    <div class="dropdown-menu m-0">
                        <?=  $this->Html->link(
                            'Lista de Artesanos',
                            ['controller' => 'Novedades', 'action' => 'view', '?' => ['Categoria' => 'Novedades', 'Context' => 'Admin']],
                            ['class' => 'dropdown-item']
                        ); ?>

                        <?=  $this->Html->link(
                            'Nuevo Artesano',
                            ['controller' => 'Novedades', 'action' => 'add', '?' => ['Categoria' => 'Novedades', 'Context' => 'Admin']],
                            ['class' => 'dropdown-item']
                        ); ?>

                    </div>
                </div>

                
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" id="li_admin_Documentacion">Documentación</a>
                    <div class="dropdown-menu m-0">
                        <?=  $this->Html->link(
                            'Lista de Archivos',
                            ['controller' => 'Documentacion', 'action' => 'view', '?' => ['Categoria' => 'Documentacion', 'Context' => 'Admin']],
                            ['class' => 'dropdown-item']
                        ); ?>

                        <?=  $this->Html->link(
                            'Nuevo Archivo',
                            ['controller' => 'Documentacion', 'action' => 'add', '?' => ['Categoria' => 'Documentacion', 'Context' => 'Admin']],
                            ['class' => 'dropdown-item']
                        ); ?>

                    </div>
                </div>

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" id="li_admin_Mapainteractive">Mapa Interactivo</a>
                    <div class="dropdown-menu m-0">
                        <?=  $this->Html->link(
                            'Lista de Localidades',
                            ['controller' => 'Localidades', 'action' => 'index', '?' => ['Categoria' => 'Mapainteractive', 'Context' => 'Admin']],
                            ['class' => 'dropdown-item']
                        ); ?>
                        <?=  $this->Html->link(
                            'Nuevo Localidad',
                            ['controller' => 'Localidades', 'action' => 'add', '?' => ['Categoria' => 'Mapainteractive', 'Context' => 'Admin']],
                            ['class' => 'dropdown-item']
                        ); ?>

                        <?=  $this->Html->link(
                            'Lista de Puntos de Interés',
                            ['controller' => 'PuntosInteres', 'action' => 'index', '?' => ['Categoria' => 'Mapainteractive', 'Context' => 'Admin']],
                            ['class' => 'dropdown-item']
                        ); ?>
                        <?=  $this->Html->link(
                            'Nuevo Punto de Interés',
                            ['controller' => 'PuntosInteres', 'action' => 'add', '?' => ['Categoria' => 'Mapainteractive', 'Context' => 'Admin']],
                            ['class' => 'dropdown-item']
                        ); ?>

                        <?=  $this->Html->link(
                            'Lista de Categorías',
                            ['controller' => 'Categorias', 'action' => 'index', '?' => ['Categoria' => 'Mapainteractive', 'Context' => 'Admin']],
                            ['class' => 'dropdown-item']
                        ); ?>
                        <?=  $this->Html->link(
                            'Nueva Categoría',
                            ['controller' => 'Categorias', 'action' => 'add', '?' => ['Categoria' => 'Mapainteractive', 'Context' => 'Admin']],
                            ['class' => 'dropdown-item']
                        ); ?>

                        <?=  $this->Html->link(
                            'Lista de Tipos',
                            ['controller' => 'Tipo', 'action' => 'index', '?' => ['Categoria' => 'Mapainteractive', 'Context' => 'Admin']],
                            ['class' => 'dropdown-item']
                        ); ?>
                        <?=  $this->Html->link(
                            'Nuevo Tipo',
                            ['controller' => 'Tipo', 'action' => 'add', '?' => ['Categoria' => 'Mapainteractive', 'Context' => 'Admin']],
                            ['class' => 'dropdown-item']
                        ); ?>

                        <?=  $this->Html->link(
                            'Lista de Subtipos',
                            ['controller' => 'Subtipo', 'action' => 'index', '?' => ['Categoria' => 'Mapainteractive', 'Context' => 'Admin']],
                            ['class' => 'dropdown-item']
                        ); ?>
                        <?=  $this->Html->link(
                            'Nuevo Subtipo',
                            ['controller' => 'Subtipo', 'action' => 'add', '?' => ['Categoria' => 'Mapainteractive', 'Context' => 'Admin']],
                            ['class' => 'dropdown-item']
                        ); ?>

                    </div>
                </div>

                <?=  $this->Html->link(
                    '<i class="fa fa-sign-out"></i> Salir',
                    ['controller' => 'Users', 'action' => 'logout', 'Context' => 'Admin'],
                    ['escape' => false, 'class' => 'nav-item nav-link']
                ); ?>
                <!--<a href="contact.html" class="nav-item nav-link">Contacto</a>-->
            </div>
        </div>
    </nav>
</header>

<!-- Navbar & Hero End -->
