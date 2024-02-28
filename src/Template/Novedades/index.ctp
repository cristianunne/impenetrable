



<?= $this->element('header')?>



    <div class="container-xxl mb-5">

        <div class="row py-5 landing-inte-back">
            <div class="col-xs-5 col-md-5 col-lg-5 valign-center" style="text-align: center; display:table">
                <h1 class="wow zoomIn" style="vertical-align: middle; color: #198754; margin-top: 30%;">
                    Artesanos, Productos y Servicios
                </h1>

                <p class="wow zoomIn" style="vertical-align: middle; color: #198754;">
                   En esta sección te ofrecemos el contaco con los artesanos, sus producciones y servicios por localidades.
                </p>

            </div>
            <div class="col-xs-7 col-md-7 col-lg-7 valign-center">
                <?=  $this->Html->image('artesano.svg', ['alt' => 'Artesano', 'class' => 'img-fluid img-landing-int wow zoomIn']); ?>
            </div>
        </div>

    </div>


<div class="container-xxl py-5 mb-5">

    <!-- Inicio Localidad -->
    <?php $i = 0;?>
        <?php foreach ($artesanos as $artesano): ?>
            <?php if($i == 0 && $artesano->localidad == 'Miraflores'): ?>
        <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
            <h2 class="mt-2 text-success">Miraflores</h2>
        </div>

        <div class="container my-5 pb-5 px-lg-5">
            <div class="row g-5 pb-5 d-flex justify-content-center text-center">
                <?php $i = 0;?>
                    <?php foreach ($artesanos as $artesano): ?>
                    <?php if($i == 0 && $artesano->localidad == 'Miraflores'): ?>
            <!-- Inicio Tarjeta -->
                <div class="col-xs-12 col-md-3 valign-center col-left mg-card">
                    <div class="card card-shadow wow zoomIn">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img class="foto img-thumbnail img-circle"
                                         src="<?= h($artesano->foto_dir) ?>"
                                         alt="<?= h($artesano->nombre) ?>" style="height: 165px;">
                                <div class="mt-3">
                                    <div class="mt-3">
                                    <h4 style="color: var(--primary)"><?= h($artesano->nombre) ?></h4>
                                    <div class="text-start" style="background-color: #<?= h($artesano->color) ?>; color: white; padding: 0px 15px 0px 15px; border-radius: 15px;">
                                        <hr>
                                            <p class="font-size-sm"><i class="fas fa-tag"></i> <?= h($artesano->producto) ?></p>
                                        <hr>
                                    </div>
                                    <?php if(is_null($artesano->direccion)): ?>
                                        <p class="hidden text-muted font-size-sm"></p>
                                    <?php else: ?>
                                        <p class="text-muted font-size-sm"><i class="fas fa-map-marker-alt"></i> <?= h($artesano->direccion) ?></p>
                                    <?php endif; ?>
                                    <?php if(is_null($artesano->telefono)): ?>
                                        <p class="hidden text-muted font-size-sm"></p>
                                    <?php else: ?>
                                        <p class="text-muted font-size-sm"><i class="fas fa-phone-alt"></i> <?= h($artesano->telefono) ?></p>
                                        <?php endif; ?>
                                    <?php if(is_null($artesano->email)): ?>
                                        <p class="hidden text-muted font-size-sm"></p>
                                    <?php else: ?>
                                        <p><a class="text-muted font-size-sm" href="mailto:<?= h($artesano->email) ?>"><i class="fas fa-envelope"></i> <?= h($artesano->email) ?></a></p>
                                    <?php endif; ?>
                                    <a href="<?= h($artesano->instagram) ?>" target="_blank" class="btn btn-instagram <?= empty($artesano->instagram) ? 'disabled' : ''; ?>"><i class="fab fa-instagram"></i></a>
                                    <a href="<?= h($artesano->facebook) ?>" target="_blank" class="btn btn-facebook <?= empty($artesano->facebook) ? 'disabled' : ''; ?>"><i class="fab fa-facebook"></i></a>
                                    <a href="<?= h($artesano->web) ?>" target="_blank" class="btn btn-primary btn-linkedin <?= empty($artesano->web) ? 'disabled' : ''; ?>"><i class="fas fa-globe"></i></a>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- Fin Tarjeta -->
            <?php endif; ?>
        <?php endforeach; ?>
        </div>
    </div>
    <?php else : ?>
        <div class="position-relative text-center wow fadeInUp" data-wow-delay="0.1s">
        </div>
    <?php endif; ?>
<?php endforeach; ?>

    <!-- Inicio Localidad -->
    <?php $i = 0;?>
        <?php foreach ($artesanos as $artesano): ?>
            <?php if($i == 0 && $artesano->localidad == 'Misión Nueva Pompeya'): ?>
        <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
            <h2 class="mt-2 text-success">Misión Nueva Pompeya</h2>
        </div>

        <div class="container my-5 pb-5 px-lg-5">
            <div class="row g-5 pb-5 d-flex justify-content-center text-center">
                <?php $i = 0;?>
                    <?php foreach ($artesanos as $artesano): ?>
                    <?php if($i == 0 && $artesano->localidad == 'Misión Nueva Pompeya'): ?>
            <!-- Inicio Tarjeta -->
                <div class="col-xs-12 col-md-3 valign-center col-left mg-card">
                    <div class="card card-shadow wow zoomIn">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img class="foto img-thumbnail img-circle"
                                         src="<?= h($artesano->foto_dir) ?>"
                                         alt="<?= h($artesano->nombre) ?>" style="height: 165px;">
                                <div class="mt-3">
                                    <h4 style="color: var(--primary)"><?= h($artesano->nombre) ?></h4>
                                    <div class="text-start" style="background-color: #<?= h($artesano->color) ?>; color: white; padding: 0px 15px 0px 15px; border-radius: 15px;">
                                        <hr>
                                            <p class="font-size-sm"><i class="fas fa-tag"></i> <?= h($artesano->producto) ?></p>
                                        <hr>
                                    </div>
                                    <?php if(is_null($artesano->direccion)): ?>
                                        <p class="hidden text-muted font-size-sm"></p>
                                    <?php else: ?>
                                        <p class="text-muted font-size-sm"><i class="fas fa-map-marker-alt"></i> <?= h($artesano->direccion) ?></p>
                                    <?php endif; ?>
                                    <?php if(is_null($artesano->telefono)): ?>
                                        <p class="hidden text-muted font-size-sm"></p>
                                    <?php else: ?>
                                        <p class="text-muted font-size-sm"><i class="fas fa-phone-alt"></i> <?= h($artesano->telefono) ?></p>
                                        <?php endif; ?>
                                    <?php if(is_null($artesano->email)): ?>
                                        <p class="hidden text-muted font-size-sm"></p>
                                    <?php else: ?>
                                        <p><a class="text-muted font-size-sm" href="mailto:<?= h($artesano->email) ?>"><i class="fas fa-envelope"></i> <?= h($artesano->email) ?></a></p>
                                    <?php endif; ?>
                                    <a href="<?= h($artesano->instagram) ?>" target="_blank" class="btn btn-instagram <?= empty($artesano->instagram) ? 'disabled' : ''; ?>"><i class="fab fa-instagram"></i></a>
                                    <a href="<?= h($artesano->facebook) ?>" target="_blank" class="btn btn-facebook <?= empty($artesano->facebook) ? 'disabled' : ''; ?>"><i class="fab fa-facebook"></i></a>
                                    <a href="<?= h($artesano->web) ?>" target="_blank" class="btn btn-primary btn-linkedin <?= empty($artesano->web) ? 'disabled' : ''; ?>"><i class="fas fa-globe"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- Fin Tarjeta -->
            <?php endif; ?>
        <?php endforeach; ?>
        </div>
    </div>
    <?php else : ?>
        <div class="position-relative text-center wow fadeInUp" data-wow-delay="0.1s">
        </div>
    <?php endif; ?>
<?php endforeach; ?>

    <!-- Inicio Localidad -->
    <?php $i = 0;?>
        <?php foreach ($artesanos as $artesano): ?>
            <?php if($i == 0 && $artesano->localidad == 'Comandancia Frias'): ?>
        <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
            <h2 class="mt-2 text-success">Comandancia Frias</h2>
        </div>
        <div class="container my-5 pb-5 px-lg-5">
        <div class="row g-5 pb-5 d-flex justify-content-center text-center">
            <?php $i = 0;?>
                <?php foreach ($artesanos as $artesano): ?>
                <?php if($i == 0 && $artesano->localidad == 'Comandancia Frias'): ?>
        <!-- Inicio Tarjeta -->
            <div class="col-xs-12 col-md-3 valign-center col-left mg-card">
                <div class="card card-shadow wow zoomIn">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img class="foto img-thumbnail img-circle"
                                     src="<?= h($artesano->foto_dir) ?>"
                                     alt="<?= h($artesano->nombre) ?>" style="height: 165px;">
                            <div class="mt-3">
                                <h4 style="color: var(--primary)"><?= h($artesano->nombre) ?></h4>
                                <div class="text-start" style="background-color: #<?= h($artesano->color) ?>; color: white; padding: 0px 15px 0px 15px; border-radius: 15px;">
                                    <hr>
                                        <p class="font-size-sm"><i class="fas fa-tag"></i> <?= h($artesano->producto) ?></p>
                                    <hr>
                                </div>
                                <?php if(is_null($artesano->direccion)): ?>
                                    <p class="hidden text-muted font-size-sm"></p>
                                <?php else: ?>
                                    <p class="text-muted font-size-sm"><i class="fas fa-map-marker-alt"></i> <?= h($artesano->direccion) ?></p>
                                <?php endif; ?>
                                <?php if(is_null($artesano->telefono)): ?>
                                    <p class="hidden text-muted font-size-sm"></p>
                                <?php else: ?>
                                    <p class="text-muted font-size-sm"><i class="fas fa-phone-alt"></i> <?= h($artesano->telefono) ?></p>
                                    <?php endif; ?>
                                <?php if(is_null($artesano->email)): ?>
                                    <p class="hidden text-muted font-size-sm"></p>
                                <?php else: ?>
                                    <p><a class="text-muted font-size-sm" href="mailto:<?= h($artesano->email) ?>"><i class="fas fa-envelope"></i> <?= h($artesano->email) ?></a></p>
                                <?php endif; ?>
                                <a href="<?= h($artesano->instagram) ?>" target="_blank" class="btn btn-instagram <?= empty($artesano->instagram) ? 'disabled' : ''; ?>"><i class="fab fa-instagram"></i></a>
                                <a href="<?= h($artesano->facebook) ?>" target="_blank" class="btn btn-facebook <?= empty($artesano->facebook) ? 'disabled' : ''; ?>"><i class="fab fa-facebook"></i></a>
                                <a href="<?= h($artesano->web) ?>" target="_blank" class="btn btn-primary btn-linkedin <?= empty($artesano->web) ? 'disabled' : ''; ?>"><i class="fas fa-globe"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- Fin Tarjeta -->
            <?php endif; ?>
        <?php endforeach; ?>
        </div>
    </div>
    <?php else : ?>
        <div class="position-relative text-center wow fadeInUp" data-wow-delay="0.1s">
        </div>
    <?php endif; ?>
<?php endforeach; ?>
        

    <!-- Inicio Localidad -->
    <?php $i = 0;?>
        <?php foreach ($artesanos as $artesano): ?>
            <?php if($i == 0 && $artesano->localidad == 'El Sauzalito'): ?>
        <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
            <h2 class="mt-2 text-success">El Sauzalito</h2>
        </div>

        <div class="container my-5 pb-5 px-lg-5">
            <div class="row g-5 pb-5 d-flex justify-content-center text-center">
                <?php $i = 0;?>
                    <?php foreach ($artesanos as $artesano): ?>
                    <?php if($i == 0 && $artesano->localidad == 'El Sauzalito'): ?>
            <!-- Inicio Tarjeta -->
                <div class="col-xs-12 col-md-3 valign-center col-left mg-card">
                    <div class="card card-shadow wow zoomIn">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img class="foto img-thumbnail img-circle"
                                         src="<?= h($artesano->foto_dir) ?>"
                                         alt="<?= h($artesano->nombre) ?>" style="height: 165px;">
                                <div class="mt-3">
                                    <h4 style="color: var(--primary)"><?= h($artesano->nombre) ?></h4>
                                    <div class="text-start" style="background-color: #<?= h($artesano->color) ?>; color: white; padding: 0px 15px 0px 15px; border-radius: 15px;">
                                        <hr>
                                            <p class="font-size-sm"><i class="fas fa-tag"></i> <?= h($artesano->producto) ?></p>
                                        <hr>
                                    </div>
                                    <?php if(is_null($artesano->direccion)): ?>
                                        <p class="hidden text-muted font-size-sm"></p>
                                    <?php else: ?>
                                        <p class="text-muted font-size-sm"><i class="fas fa-map-marker-alt"></i> <?= h($artesano->direccion) ?></p>
                                    <?php endif; ?>
                                    <?php if(is_null($artesano->telefono)): ?>
                                        <p class="hidden text-muted font-size-sm"></p>
                                    <?php else: ?>
                                        <p class="text-muted font-size-sm"><i class="fas fa-phone-alt"></i> <?= h($artesano->telefono) ?></p>
                                        <?php endif; ?>
                                    <?php if(is_null($artesano->email)): ?>
                                        <p class="hidden text-muted font-size-sm"></p>
                                    <?php else: ?>
                                        <p><a class="text-muted font-size-sm" href="mailto:<?= h($artesano->email) ?>"><i class="fas fa-envelope"></i> <?= h($artesano->email) ?></a></p>
                                    <?php endif; ?>
                                    <a href="<?= h($artesano->instagram) ?>" target="_blank" class="btn btn-instagram <?= empty($artesano->instagram) ? 'disabled' : ''; ?>"><i class="fab fa-instagram"></i></a>
                                    <a href="<?= h($artesano->facebook) ?>" target="_blank" class="btn btn-facebook <?= empty($artesano->facebook) ? 'disabled' : ''; ?>"><i class="fab fa-facebook"></i></a>
                                    <a href="<?= h($artesano->web) ?>" target="_blank" class="btn btn-primary btn-linkedin <?= empty($artesano->web) ? 'disabled' : ''; ?>"><i class="fas fa-globe"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- Fin Tarjeta -->
            <?php endif; ?>
        <?php endforeach; ?>
        </div>
    </div>
    <?php else : ?>
        <div class="position-relative text-center wow fadeInUp" data-wow-delay="0.1s">
        </div>
    <?php endif; ?>
<?php endforeach; ?>

    <!-- Inicio Localidad -->
    <?php $i = 0;?>
        <?php foreach ($artesanos as $artesano): ?>
            <?php if($i == 0 && $artesano->localidad == 'Villa Rio Bermejito'): ?>
        <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
            <h2 class="mt-2 text-success">Villa Rio Bermejito</h2>
        </div>

        <div class="container my-5 pb-5 px-lg-5">
            <div class="row g-5 pb-5 d-flex justify-content-center text-center">
                <?php $i = 0;?>
                    <?php foreach ($artesanos as $artesano): ?>
                    <?php if($i == 0 && $artesano->localidad == 'Villa Rio Bermejito'): ?>
            <!-- Inicio Tarjeta -->
                <div class="col-xs-12 col-md-3 valign-center col-left mg-card">
                    <div class="card card-shadow wow zoomIn">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img class="foto img-thumbnail img-circle"
                                         src="<?= h($artesano->foto_dir) ?>"
                                         alt="<?= h($artesano->nombre) ?>" style="height: 165px;">
                                <div class="mt-3">
                                    <h4 style="color: var(--primary)"><?= h($artesano->nombre) ?></h4>
                                    <div class="text-start" style="background-color: #<?= h($artesano->color) ?>; color: white; padding: 0px 15px 0px 15px; border-radius: 15px;">
                                        <hr>
                                            <p class="font-size-sm"><i class="fas fa-tag"></i> <?= h($artesano->producto) ?></p>
                                        <hr>
                                    </div>
                                    <?php if(is_null($artesano->direccion)): ?>
                                        <p class="hidden text-muted font-size-sm"></p>
                                    <?php else: ?>
                                        <p class="text-muted font-size-sm"><i class="fas fa-map-marker-alt"></i> <?= h($artesano->direccion) ?></p>
                                    <?php endif; ?>
                                    <?php if(is_null($artesano->telefono)): ?>
                                        <p class="hidden text-muted font-size-sm"></p>
                                    <?php else: ?>
                                        <p class="text-muted font-size-sm"><i class="fas fa-phone-alt"></i> <?= h($artesano->telefono) ?></p>
                                        <?php endif; ?>
                                    <?php if(is_null($artesano->email)): ?>
                                        <p class="hidden text-muted font-size-sm"></p>
                                    <?php else: ?>
                                        <p><a class="text-muted font-size-sm" href="mailto:<?= h($artesano->email) ?>"><i class="fas fa-envelope"></i> <?= h($artesano->email) ?></a></p>
                                    <?php endif; ?>
                                    <a href="<?= h($artesano->instagram) ?>" target="_blank" class="btn btn-instagram <?= empty($artesano->instagram) ? 'disabled' : ''; ?>"><i class="fab fa-instagram"></i></a>
                                    <a href="<?= h($artesano->facebook) ?>" target="_blank" class="btn btn-facebook <?= empty($artesano->facebook) ? 'disabled' : ''; ?>"><i class="fab fa-facebook"></i></a>
                                    <a href="<?= h($artesano->web) ?>" target="_blank" class="btn btn-primary btn-linkedin <?= empty($artesano->web) ? 'disabled' : ''; ?>"><i class="fas fa-globe"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- Fin Tarjeta -->
            <?php endif; ?>
        <?php endforeach; ?>
        </div>
    </div>
    <?php else : ?>
        <div class="position-relative text-center wow fadeInUp" data-wow-delay="0.1s">
        </div>
    <?php endif; ?>
<?php endforeach; ?>


<!-- Inicio Localidad -->
    <?php $i = 0;?>
        <?php foreach ($artesanos as $artesano): ?>
            <?php if($i == 0 && $artesano->localidad == 'Fortín Lavalle'): ?>
        <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
            <h2 class="mt-2 text-success">Fortín Lavalle</h2>
        </div>

        <div class="container my-5 pb-5 px-lg-5">
            <div class="row g-5 pb-5 d-flex justify-content-center text-center">
                <?php $i = 0;?>
                    <?php foreach ($artesanos as $artesano): ?>
                    <?php if($i == 0 && $artesano->localidad == 'Fortín Lavalle'): ?>
            <!-- Inicio Tarjeta -->
                <div class="col-xs-12 col-md-3 valign-center col-left mg-card">
                    <div class="card card-shadow wow zoomIn">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img class="foto img-thumbnail img-circle"
                                         src="<?= h($artesano->foto_dir) ?>"
                                         alt="<?= h($artesano->nombre) ?>" style="height: 165px;">
                                <div class="mt-3">
                                    <div class="mt-3">
                                    <h4 style="color: var(--primary)"><?= h($artesano->nombre) ?></h4>
                                    <div class="text-start" style="background-color: #<?= h($artesano->color) ?>; color: white; padding: 0px 15px 0px 15px; border-radius: 15px;">
                                        <hr>
                                            <p class="font-size-sm"><i class="fas fa-tag"></i> <?= h($artesano->producto) ?></p>
                                        <hr>
                                    </div>
                                    <?php if(is_null($artesano->direccion)): ?>
                                        <p class="hidden text-muted font-size-sm"></p>
                                    <?php else: ?>
                                        <p class="text-muted font-size-sm"><i class="fas fa-map-marker-alt"></i> <?= h($artesano->direccion) ?></p>
                                    <?php endif; ?>
                                    <?php if(is_null($artesano->telefono)): ?>
                                        <p class="hidden text-muted font-size-sm"></p>
                                    <?php else: ?>
                                        <p class="text-muted font-size-sm"><i class="fas fa-phone-alt"></i> <?= h($artesano->telefono) ?></p>
                                        <?php endif; ?>
                                    <?php if(is_null($artesano->email)): ?>
                                        <p class="hidden text-muted font-size-sm"></p>
                                    <?php else: ?>
                                        <p><a class="text-muted font-size-sm" href="mailto:<?= h($artesano->email) ?>"><i class="fas fa-envelope"></i> <?= h($artesano->email) ?></a></p>
                                    <?php endif; ?>
                                    <a href="<?= h($artesano->instagram) ?>" target="_blank" class="btn btn-instagram <?= empty($artesano->instagram) ? 'disabled' : ''; ?>"><i class="fab fa-instagram"></i></a>
                                    <a href="<?= h($artesano->facebook) ?>" target="_blank" class="btn btn-facebook <?= empty($artesano->facebook) ? 'disabled' : ''; ?>"><i class="fab fa-facebook"></i></a>
                                    <a href="<?= h($artesano->web) ?>" target="_blank" class="btn btn-primary btn-linkedin <?= empty($artesano->web) ? 'disabled' : ''; ?>"><i class="fas fa-globe"></i></a>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- Fin Tarjeta -->
            <?php endif; ?>
        <?php endforeach; ?>
        </div>
    </div>
    <?php else : ?>
        <div class="position-relative text-center wow fadeInUp" data-wow-delay="0.1s">
        </div>
    <?php endif; ?>
<?php endforeach; ?>

    <!-- Inicio Localidad -->
    <?php $i = 0;?>
        <?php foreach ($artesanos as $artesano): ?>
            <?php if($i == 0 && $artesano->localidad == 'Juan José Castelli'): ?>
        <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
            <h2 class="mt-2 text-success">Juan José Castelli</h2>
        </div>

        <div class="container my-5 pb-5 px-lg-5">
            <div class="row g-5 pb-5 d-flex justify-content-center text-center">
                <?php $i = 0;?>
                    <?php foreach ($artesanos as $artesano): ?>
                    <?php if($i == 0 && $artesano->localidad == 'Juan José Castelli'): ?>
            <!-- Inicio Tarjeta -->
                <div class="col-xs-12 col-md-3 valign-center col-left mg-card">
                    <div class="card card-shadow wow zoomIn">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img class="foto img-thumbnail img-circle"
                                         src="<?= h($artesano->foto_dir) ?>"
                                         alt="<?= h($artesano->nombre) ?>" style="height: 165px;">
                                <div class="mt-3">
                                    <div class="mt-3">
                                    <h4 style="color: var(--primary)"><?= h($artesano->nombre) ?></h4>
                                    <div class="text-start" style="background-color: #<?= h($artesano->color) ?>; color: white; padding: 0px 15px 0px 15px; border-radius: 15px;">
                                        <hr>
                                            <p class="font-size-sm"><i class="fas fa-tag"></i> <?= h($artesano->producto) ?></p>
                                        <hr>
                                    </div>
                                    <?php if(is_null($artesano->direccion)): ?>
                                        <p class="hidden text-muted font-size-sm"></p>
                                    <?php else: ?>
                                        <p class="text-muted font-size-sm"><i class="fas fa-map-marker-alt"></i> <?= h($artesano->direccion) ?></p>
                                    <?php endif; ?>
                                    <?php if(is_null($artesano->telefono)): ?>
                                        <p class="hidden text-muted font-size-sm"></p>
                                    <?php else: ?>
                                        <p class="text-muted font-size-sm"><i class="fas fa-phone-alt"></i> <?= h($artesano->telefono) ?></p>
                                        <?php endif; ?>
                                    <?php if(is_null($artesano->email)): ?>
                                        <p class="hidden text-muted font-size-sm"></p>
                                    <?php else: ?>
                                        <p><a class="text-muted font-size-sm" href="mailto:<?= h($artesano->email) ?>"><i class="fas fa-envelope"></i> <?= h($artesano->email) ?></a></p>
                                    <?php endif; ?>
                                    <a href="<?= h($artesano->instagram) ?>" target="_blank" class="btn btn-instagram <?= empty($artesano->instagram) ? 'disabled' : ''; ?>"><i class="fab fa-instagram"></i></a>
                                    <a href="<?= h($artesano->facebook) ?>" target="_blank" class="btn btn-facebook <?= empty($artesano->facebook) ? 'disabled' : ''; ?>"><i class="fab fa-facebook"></i></a>
                                    <a href="<?= h($artesano->web) ?>" target="_blank" class="btn btn-primary btn-linkedin <?= empty($artesano->web) ? 'disabled' : ''; ?>"><i class="fas fa-globe"></i></a>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- Fin Tarjeta -->
            <?php endif; ?>
        <?php endforeach; ?>
        </div>
    </div>
    <?php else : ?>
        <div class="position-relative text-center wow fadeInUp" data-wow-delay="0.1s">
        </div>
    <?php endif; ?>
<?php endforeach; ?>

</div>