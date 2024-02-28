

<?= $this->element('admin/header')?>



    <div class="container-xxl mb-5">

        <div class="row py-5 landing-inte-back">
            <div class="col-xs-5 col-md-5 col-lg-5 valign-center" style="text-align: center; display:table">
                <h1 class="wow zoomIn" style="vertical-align: middle; color: #198754; margin-top: 30%;">
                    Panel de Administración
                </h1>

                <p class="wow zoomIn" style="vertical-align: middle; color: #198754;">
                  Sección de administración del Sitio
                </p>

            </div>
            <div class="col-xs-7 col-md-7 col-lg-7 valign-center">
                <?=  $this->Html->image('administracion.svg', ['alt' => 'Administración', 'class' => 'img-fluid img-landing-int wow zoomIn']); ?>
            </div>
        </div>

        <div class="container">
            <div class="row justify-content-center">
              <div class="col-sm-3 m-4">
                <div class="tile purple">
                  <h3 class="title">Usuarios</h3>
                  <ul>
                    <li><?=  $this->Html->link(
                            'Lista de Usuarios',
                            ['controller' => 'Users', 'action' => 'view', '?' => ['Categoria' => 'Usuarios', 'Context' => 'Admin']],
                            ['class' => 'link']
                        );
                        ?></li>
                    <li><?=  $this->Html->link(
                            'Nuevo Usuario',
                            ['controller' => 'Users', 'action' => 'register', '?' => ['Categoria' => 'Usuarios', 'Context' => 'Admin']],
                            ['class' => 'link']
                        ); ?></li>
                </ul>
                </div>
              </div>
              <div class="col-sm-3 m-4">
                <div class="tile red">
                  <h3 class="title">Imágenes de Slider</h3>
                  <ul>
                    <li><?=  $this->Html->link(
                            'Lista de Slider Home',
                            ['controller' => 'Configuraciones', 'action' => 'viewImageSlider', '?' => ['Categoria' => 'Configuraciones', 'Context' => 'Admin']],
                            ['class' => 'link']);
                        ?></li>
                    <li><?=  $this->Html->link(
                            'Nuevo Slider Home',
                            ['controller' => 'Configuraciones', 'action' => 'addImageSlider', '?' => ['Categoria' => 'Configuraciones', 'Context' => 'Admin']],
                            ['class' => 'link']);
                        ?></li>
                </ul>
                </div>
              </div>
              <div class="col-sm-3 m-4">
                <div class="tile orange">
                  <h3 class="title">Línea Histórica</h3>
                  <ul>
                    <li><?=  $this->Html->link(
                            'Lista de eventos',
                            ['controller' => 'Timeline', 'action' => 'index', '?' => ['Categoria' => 'Timeline', 'Context' => 'Admin']],
                            ['class' => 'link']);
                        ?></li>
                    <li><?=  $this->Html->link(
                            'Nuevo evento',
                            ['controller' => 'Timeline', 'action' => 'add', '?' => ['Categoria' => 'Timeline', 'Context' => 'Admin']],
                            ['class' => 'link']);
                        ?></li>
                </ul>
                </div>
              </div>
            </div>
            <div class="row  justify-content-center">
              <div class="col-sm-3 m-4">
                <div class="tile green">
                  <h3 class="title">Artesanos, Productos y Servicios</h3>
                  <ul>
                    <li><?=  $this->Html->link(
                            'Lista de Artesanos',
                            ['controller' => 'Novedades', 'action' => 'view', '?' => ['Categoria' => 'Novedades', 'Context' => 'Admin']],
                            ['class' => 'link']);
                        ?></li>
                    <li><?=  $this->Html->link(
                            'Nuevo Artesano',
                            ['controller' => 'Novedades', 'action' => 'add', '?' => ['Categoria' => 'Novedades', 'Context' => 'Admin']],
                            ['class' => 'link']);
                        ?></li>
                </ul>
                </div>
              </div>
              <div class="col-sm-3 m-4">
                <div class="tile blue">
                  <h3 class="title">Documentación</h3>
                  <ul>
                    <li><?=  $this->Html->link(
                            'Lista de Archivos',
                            ['controller' => 'Documentacion', 'action' => 'view', '?' => ['Categoria' => 'Documentacion', 'Context' => 'Admin']],
                            ['class' => 'link']);
                        ?></li>
                    <li><?=  $this->Html->link(
                            'Nuevo Archivo',
                            ['controller' => 'Documentacion', 'action' => 'add', '?' => ['Categoria' => 'Documentacion', 'Context' => 'Admin']],
                            ['class' => 'link']);
                        ?></li>
                </ul>
                </div>
              </div>
              <div class="col-sm-3 m-4">
                <div class="tile green">
                  <h3 class="title">Mapa Interactivo</h3>
                  <ul>
                    <li><?=  $this->Html->link(
                            'Lista de Localidades',
                            ['controller' => 'Localidades', 'action' => 'index', '?' => ['Categoria' => 'Mapainteractive', 'Context' => 'Admin']],
                            ['class' => 'link']
                        ); ?></li>
                    <li><?=  $this->Html->link(
                            'Nuevo Localidad',
                            ['controller' => 'Localidades', 'action' => 'add', '?' => ['Categoria' => 'Mapainteractive', 'Context' => 'Admin']],
                            ['class' => 'link']
                        ); ?></li>
                    <li><?=  $this->Html->link(
                            'Lista de Puntos de Interés',
                            ['controller' => 'PuntosInteres', 'action' => 'index', '?' => ['Categoria' => 'Mapainteractive', 'Context' => 'Admin']],
                            ['class' => 'link']
                        ); ?></li>
                    <li><?=  $this->Html->link(
                            'Nuevo Punto de Interés',
                            ['controller' => 'PuntosInteres', 'action' => 'add', '?' => ['Categoria' => 'Mapainteractive', 'Context' => 'Admin']],
                            ['class' => 'link']
                        ); ?></li>
                    <li><?=  $this->Html->link(
                            'Lista de Categorías',
                            ['controller' => 'Categorias', 'action' => 'index', '?' => ['Categoria' => 'Mapainteractive', 'Context' => 'Admin']],
                            ['class' => 'link']
                        ); ?></li>
                    <li><?=  $this->Html->link(
                            'Nueva Categoría',
                            ['controller' => 'Categorias', 'action' => 'add', '?' => ['Categoria' => 'Mapainteractive', 'Context' => 'Admin']],
                            ['class' => 'link']
                        ); ?></li>
                    <li><?=  $this->Html->link(
                            'Lista de Tipos',
                            ['controller' => 'Tipo', 'action' => 'index', '?' => ['Categoria' => 'Mapainteractive', 'Context' => 'Admin']],
                            ['class' => 'link']
                        ); ?></li>
                    <li><?=  $this->Html->link(
                            'Nuevo Tipo',
                            ['controller' => 'Tipo', 'action' => 'add', '?' => ['Categoria' => 'Mapainteractive', 'Context' => 'Admin']],
                            ['class' => 'link']
                        ); ?></li>
                    <li><?=  $this->Html->link(
                            'Lista de Subtipos',
                            ['controller' => 'Subtipo', 'action' => 'index', '?' => ['Categoria' => 'Mapainteractive', 'Context' => 'Admin']],
                            ['class' => 'link']
                        ); ?></li>
                    <li><?=  $this->Html->link(
                            'Nuevo Subtipo',
                            ['controller' => 'Subtipo', 'action' => 'add', '?' => ['Categoria' => 'Mapainteractive', 'Context' => 'Admin']],
                            ['class' => 'link']
                        ); ?></li>
                </ul>
                </div>
              </div>
            </div>
        </div>

    </div>

