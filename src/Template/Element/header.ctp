<!-- Navbar & Hero Start -->


<header class="main-header">
    <nav class="navbar navbar-expand-lg navbar-light navbar-impenetrable px-4 px-lg-5 py-3 py-lg-0 nav-backgorund">

            <!-- <h1 class="m-0"><i class="fa fa-tree me-2"></i><span class="fs-5">EL IMPENETRABLE</span></h1>-->
           
<?=  
$this->Html->link(
    $this->Html->image('logo-impenetrable-blanco.png',array('id' => 'logo')),
    array(
        'controller' => 'Index', 
        'action' => 'index'
    ), array('class' => 'navbar-brand p-0', 'escape' => false)
);
                        ?>


        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0 nav-items">

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" id="li_Proyecto">El Proyecto</a>
                    <div class="dropdown-menu m-0">
                        <?=  $this->Html->link(
                            'Objetivos',
                            ['controller' => 'Proyecto', 'action' => 'Objetivos', '?' => ['Categoria' => 'Proyecto']],
                            ['class' => 'dropdown-item']);
                        ?>

                        <?=  $this->Html->link(
                            'Metodología',
                            ['controller' => 'Proyecto', 'action' => 'metodologia', '?' => ['Categoria' => 'Proyecto']],
                            ['class' => 'dropdown-item']);
                        ?>

                        <!--<a href="testimonial.html" class="dropdown-item">Fundamentación</a>
                        <a href="team.html" class="dropdown-item">Lineas de Investigación</a>
                        <a href="testimonial.html" class="dropdown-item">Fuentes</a>-->
                        <!--<?=  $this->Html->link(
                            'Fuentes',
                            ['controller' => 'Fuentes', 'action' => 'index', '?' => ['Categoria' => 'Fuentes']],
                            ['class' => 'dropdown-item']
                             );
                        ?>-->

                        <?=  $this->Html->link(
                            'Integrantes',
                            ['controller' => 'Integrantes', 'action' => 'index', '?' => ['Categoria' => 'Integrantes']],
                            ['class' => 'dropdown-item']
                             );
                        ?>

                    </div>
                </div>

                <?=  $this->Html->link(
                    'Línea Histórica',
                    ['controller' => 'Timeline', 'action' => 'view', '?' => ['Categoria' => 'Timeline']],
                    ['class' => 'dnav-item nav-link', 'id' => "li_Timeline"]
                );
                ?>

                <?=  $this->Html->link(
                    'Artesanos, Productos y Servicios',
                    ['controller' => 'Novedades', 'action' => 'index', '?' => ['Categoria' => 'Integrantes']],
                    ['class' => 'dnav-item nav-link', 'id' => "li_Novedades"]
                );
                ?>

                <?=  $this->Html->link(
                    'Documentación',
                    ['controller' => 'Documentacion', 'action' => 'index', '?' => ['Categoria' => 'Documentacion']],
                    ['class' => 'dnav-item nav-link', 'id' => "li_Documentacion"]
                );
                ?>

                <?=  $this->Html->link(
                    'Cartografía',
                    ['controller' => 'Cartography', 'action' => 'index', '?' => ['Categoria' => 'Cartography']],
                    ['class' => 'dnav-item nav-link', 'id' => "li_Cartography"]
                );
                ?>
                <!--<a href="contact.html" class="nav-item nav-link">Contacto</a>-->
                <?=  $this->Html->link(
                    'Contacto',
                    ['controller' => 'Contact', 'action' => 'index', '?' => ['Categoria' => 'Contact']],
                    ['class' => 'dnav-item nav-link', 'id' => 'li_Contact']
                );
                ?>
            </div>
        </div>
    </nav>
    <script>
        $(function(){
        $(document).scroll(function(){
            if($(this).scrollTop() > 1) {
                $('#logo').attr('src', '<?= $this->Url->image('logo-impenetrable.png'); ?>' );
            }
            if($(this).scrollTop() < 1) {
             $('#logo').attr('src','<?= $this->Url->image('logo-impenetrable-blanco.png'); ?>' );
            }
        });
    });
    $(function(){
    $(window).on("resize", function(){
          if($(window).width() < 992){
              $('#logo').attr("src",'<?= $this->Url->image('logo-impenetrable.png'); ?>' );
          }
          else{
              $('#logo').attr("src",'<?= $this->Url->image('logo-impenetrable-blanco.png'); ?>' );
          }
        })
    });
    </script>
</header>

<!-- Navbar & Hero End -->
