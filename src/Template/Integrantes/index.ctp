



<?= $this->element('header')?>



    <div class="container-xxl mb-5">

        <div class="row py-5 landing-inte-back">
            <div class="col-xs-5 col-md-5 col-lg-5 valign-center" style="text-align: center; display:table">
                <h1 class="wow zoomIn" style="vertical-align: middle; color: #198754; margin-top: 30%;">
                    ¿Quiénes Somos?
                </h1>

                <p class="wow zoomIn p-4" style="vertical-align: middle; color: #198754;">
                   Somos un grupo de investigación constituidos por miembros que realizan sus actividades en el CONICET, en la Universidad Nacional del Nordeste, en la Universidad Nacional de Buenos Aires y el Instituto de Educación Superior "René Favaloro".
                </p>

            </div>
            <div class="col-xs-7 col-md-7 col-lg-7 valign-center">
                <?=  $this->Html->image('equipo.svg', ['alt' => 'Integrantes', 'class' => 'img-fluid img-landing-int wow zoomIn']); ?>
            </div>
        </div>

    </div>

    <div class="container-xxl py-5 mb-5">

        <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
            <h2 class="mt-2 text-success">Integrantes</h2>
        </div>

    <div class="container my-5 py-5 px-lg-5">
        <div class="row g-5 py-5 d-flex justify-content-center text-center">

            <div class="col-xs-12 col-md-3 valign-center col-left mg-card">
                <div class="card card-shadow wow zoomIn">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                                <img class="foto img-thumbnail img-circle"
                                     src="webroot/img/integrantes/salinas.jpg"
                                     alt="Salinas, María Laura" style="height: 165px;">
                            <div class="mt-3">
                                <h4 style="color: var(--primary)">Salinas, María Laura</h4>
                                <p class="text-secondary mb-1">Investigadora Responsable</p>
                                <p class="text-muted font-size-sm">Investigadora Principal - CONICET</p>
                                <p><?= $this->Html->link('marlausali@gmail.com', 'mailto:marlausali@gmail.com',['class' => 'text-success font-size-sm', 'escape' => false, 'target' => '_blank']) ?></p>
                                <a href="https://www.conicet.gov.ar/new_scp/detalle.php?id=31376&datos_academicos=yes&keywords=iighi" target="_blank"
                                   class="btn btn-primary btn-conicet"><i class="fa"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-md-3 valign-center col-left mg-card">
                <div class="card card-shadow wow zoomIn">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                                <img class="foto img-thumbnail img-circle"
                                     src="webroot/img/integrantes/medina.jpg"
                                     alt="Medina, Mónica Marisel" style="height: 165px;">
                            <div class="mt-3">
                                <h4 style="color: var(--primary)">Medina, Mónica Marisel</h4>
                                <p class="text-secondary mb-1">Investigadora Responsable</p>
                                <p class="text-muted font-size-sm">Investigadora Asistente - CONICET</p>
                                <p><?= $this->Html->link('mariselmedina@gmail.com', 'mailto:mariselmedina@gmail.com',['class' => 'text-success font-size-sm', 'escape' => false, 'target' => '_blank']) ?></p>
                                <a href="https://www.conicet.gov.ar/new_scp/detalle.php?id=36297&datos_academicos=yes&keywords=iighi" target="_blank"
                                   class="btn btn-primary btn-conicet"><i class="fa"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-md-3 valign-center col-left mg-card">
                <div class="card card-shadow wow zoomIn">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                                <img class="foto img-thumbnail img-circle"
                                     src="webroot/img/integrantes/valenzuela.jpg"
                                     alt="Valenzuela, Fatima Victoria" style="height: 165px;">
                            <div class="mt-3">
                                <h4 style="color: var(--primary)">Valenzuela, Fátima Victoria</h4>
                                <p class="text-secondary mb-1">Investigadora Responsable</p>
                                <p class="text-muted font-size-sm">Investigadora Asistente - CONICET</p>
                                <p><?= $this->Html->link('fatima_val@live.com.ar', 'mailto:fatima_val@live.com.ar',['class' => 'text-success font-size-sm', 'escape' => false, 'target' => '_blank']) ?></p>
                                <a href="https://www.conicet.gov.ar/new_scp/detalle.php?id=44403&datos_academicos=yes&keywords=iighi" target="_blank"
                                   class="btn btn-primary btn-conicet"><i class="fa"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-md-3 valign-center col-left mg-card">
                <div class="card card-shadow wow zoomIn">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img class="foto img-thumbnail img-circle"
                                 src="webroot/img/integrantes/da_silva.jpg"
                                 alt="Da Silva, Cristian" style="height: 165px;">
                            <div class="mt-3">
                                <h4 style="color: var(--primary)">Da Silva, Cristian Javier</h4>
                                <p class="text-secondary mb-1">Investigador/Técnico Colaborador</p>
                                <p class="text-muted font-size-sm">Investigador Asistente - CONICET</p>
                                <p><?= $this->Html->link('cristian297@hotmail.com', 'mailto:cristian297@hotmail.com',['class' => 'text-success font-size-sm', 'escape' => false, 'target' => '_blank']) ?></p>
                                <a href="https://www.conicet.gov.ar/new_scp/detalle.php?keywords=&id=43252&datos_academicos=yes" target="_blank"
                                   class="btn btn-primary btn-conicet"><i class="fa"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-md-3 valign-center col-left mg-card">
                <div class="card card-shadow wow zoomIn">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img class="foto img-thumbnail img-circle"
                                 src="webroot/img/integrantes/toullieux.jpg"
                                 alt="Toullieux, Cristian" style="height: 165px;">
                            <div class="mt-3">
                                <h4 style="color: var(--primary)">Toullieux, Cristian Roberto</h4>
                                <p class="text-secondary mb-1">Técnico Colaborador</p>
                                <p class="text-muted font-size-sm">Personal de Apoyo a la Investigación (CPA) - CONICET</p>
                                <p class="text-success font-size-sm"></p>
                                <p><?= $this->Html->link('cuatroymedio4@hotmail.com', 'mailto:cuatroymedio4@hotmail.com',['class' => 'text-success font-size-sm', 'escape' => false, 'target' => '_blank']) ?></p>
                                <a href="https://www.conicet.gov.ar/new_scp/detalle.php?id=41313&datos_academicos=yes&keywords=iighi" target="_blank"
                                   class="btn btn-primary btn-conicet"><i class="fa"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-xs-12 col-md-3 valign-center col-left mg-card">
                <div class="card card-shadow wow zoomIn">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                                <img class="foto img-thumbnail img-circle"
                                     src="webroot/img/integrantes/fantin.jpg"
                                     alt="Fantin, Maria Alejandra" style="height: 165px;">
                            <div class="mt-3">
                                <h4 style="color: var(--primary)">Fantín, María Alejandra</h4>
                                <p class="text-secondary mb-1">Investigadora Responsable</p>
                                <p class="text-muted font-size-sm">Investigadora Independiente - CONICET</p>
                                <p><?= $this->Html->link('mafantin@gmail.com', 'mailto:mafantin@gmail.com',['class' => 'text-success font-size-sm', 'escape' => false, 'target' => '_blank']) ?></p>
                                <a href="https://www.conicet.gov.ar/new_scp/detalle.php?id=20226&datos_academicos=yes&keywords=iighi" target="_blank"
                                   class="btn btn-primary btn-conicet"><i class="fa"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-md-3 valign-center col-left mg-card">
                <div class="card card-shadow wow zoomIn">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                                <img class="foto img-thumbnail img-circle"
                                     src="webroot/img/integrantes/mari.jpg"
                                     alt="Mari, Oscar" style="height: 165px;">
                            <div class="mt-3">
                                <h4 style="color: var(--primary)">Mari, Oscar</h4>
                                <p class="text-secondary mb-1">Investigador Responsable</p>
                                <p class="text-muted font-size-sm">Investigador Independiente - CONICET</p>
                                <p class="text-success font-size-sm"></p>
                                <p><?= $this->Html->link('oscar.mari@yahoo.com.ar', 'mailto:oscar.mari@yahoo.com.ar',['class' => 'text-success font-size-sm', 'escape' => false, 'target' => '_blank']) ?></p>
                                <a href="https://www.conicet.gov.ar/new_scp/detalle.php?id=22136&datos_academicos=yes&keywords=iighi" target="_blank"
                                   class="btn btn-primary btn-conicet"><i class="fa"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-md-3 valign-center col-left mg-card">
                <div class="card card-shadow wow zoomIn">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                                <img class="foto img-thumbnail img-circle"
                                     src="webroot/img/integrantes/schaller.jpg"
                                     alt="Schaller, Enrique" style="height: 165px;">
                            <div class="mt-3">
                                <h4 style="color: var(--primary)">Schaller, Enrique César</h4>
                                <p class="text-secondary mb-1">Investigador Responsable</p>
                                <p class="text-muted font-size-sm">Investigador Adjunto - CONICET</p>
                                <p><?= $this->Html->link('schaller53@gmail.com', 'mailto:schaller53@gmail.com',['class' => 'text-success font-size-sm', 'escape' => false, 'target' => '_blank']) ?></p>
                                <a href="https://www.conicet.gov.ar/new_scp/detalle.php?id=22700&datos_academicos=yes&keywords=iighi" target="_blank"
                                   class="btn btn-primary btn-conicet"><i class="fa"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xs-12 col-md-3 valign-center col-left mg-card">
                <div class="card card-shadow wow zoomIn">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                                <img class="foto img-thumbnail img-circle"
                                     src="webroot/img/integrantes/bertoncello.jpg"
                                     alt="Bertoncello, Rodolfo Valentín" style="height: 165px;">
                            <div class="mt-3">
                                <h4 style="color: var(--primary)">Bertoncello, Rodolfo Valentín</h4>
                                <p class="text-secondary mb-1">Investigador Responsable</p>
                                <p class="text-muted font-size-sm">Investigador Independiente - CONICET</p>
                                <div class="btn btn-conicet disabled"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-md-3 valign-center col-left mg-card">
                <div class="card card-shadow wow zoomIn">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                                <img class="foto img-thumbnail img-circle"
                                     src="webroot/img/integrantes/casanias.jpg"
                                     alt="Casañas Rígoli, Roy Arturo" style="height: 165px;">
                            <div class="mt-3">
                                <h4 style="color: var(--primary)">Casañas Rígoli, Roy Arturo</h4>
                                <p class="text-secondary mb-1">Investigador Colaborador</p>
                                <p class="text-muted font-size-sm">Becario Doctoral - CONICET-APNAC</p>
                                <p class="text-success font-size-sm"></p>
                                <p><?= $this->Html->link('royarturo@gmail.com', 'mailto:royarturo@gmail.com',['class' => 'text-success font-size-sm', 'escape' => false, 'target' => '_blank']) ?></p>
                                <a href="https://www.conicet.gov.ar/new_scp/detalle.php?id=65825&datos_academicos=yes&keywords=iighi" target="_blank"
                                   class="btn btn-primary btn-conicet"><i class="fa"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-md-3 valign-center col-left mg-card">
                <div class="card card-shadow wow zoomIn">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                                <img class="foto img-thumbnail img-circle"
                                     src="webroot/img/integrantes/blancos.jpg"
                                     alt="Blancos, Milagros Belén" style="height: 165px;">
                            <div class="mt-3">
                                <h4 style="color: var(--primary)">Blancos, Milagros Belén</h4>
                                <p class="text-secondary mb-1">Investigadora Colaboradora</p>
                                <p class="text-muted font-size-sm">Becaria Doctoral - CONICET</p>
                                <p class="text-success font-size-sm"></p>
                                <p><?= $this->Html->link('bmilagrosbelen@gmail.com', 'mailto:bmilagrosbelen@gmail.com',['class' => 'text-success font-size-sm', 'escape' => false, 'target' => '_blank']) ?></p>
                                <a href="https://www.conicet.gov.ar/new_scp/detalle.php?id=61084&datos_academicos=yes&keywords=iighi" target="_blank"
                                   class="btn btn-primary btn-conicet"><i class="fa"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            

            

            <div class="col-xs-12 col-md-3 valign-center col-left mg-card">
                <div class="card card-shadow wow zoomIn">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img class="foto img-thumbnail img-circle"
                                 src="webroot/img/integrantes/cayre.jpg"
                                 alt="Valenzuela, Fatima Victoria" style="height: 165px;">
                            <div class="mt-3">
                                <h4 style="color: var(--primary)">Cayré Baito, Lorena</h4>
                                <p class="text-secondary mb-1">Investigadora Colaboradora</p>
                                <p class="text-muted font-size-sm">Investigadora UNNE</p>
                                <p><?= $this->Html->link('lcayrebaito@yahoo.com.ar', 'mailto:lcayrebaito@yahoo.com.ar',['class' => 'text-success font-size-sm', 'escape' => false, 'target' => '_blank']) ?></p>
                                <a href="https://www.unne.edu.ar/" class="btn btn-primary btn-unne" target="_blank"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xs-12 col-md-3 valign-center col-left mg-card">
                <div class="card card-shadow wow zoomIn">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img class="foto img-thumbnail img-circle"
                                 src="webroot/img/integrantes/guarino.jpeg"
                                 alt="Guarino, graciela" style="height: 165px; width: 165px;">
                            <div class="mt-3">
                                <h4 style="color: var(--primary)">Guarino, Graciela</h4>
                                <p class="text-secondary mb-1">Investigadora Colaboradora</p>
                                <p class="text-muted font-size-sm">Investigadora UNNE</p>
                                <a href="https://www.unne.edu.ar/" class="btn btn-primary btn-unne" target="_blank"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xs-12 col-md-3 valign-center col-left mg-card">
                <div class="card card-shadow wow zoomIn">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img class="foto img-thumbnail img-circle"
                                 src="webroot/img/integrantes/f-echarri.jpg"
                                 alt="Echarri, Fabio" style="height: 165px;">
                            <div class="mt-3">
                                <h4 style="color: var(--primary)">Echarri, Fabio</h4>
                                <p class="text-secondary mb-1">Investigador Colaborador</p>
                                <p class="text-muted font-size-sm">Investigador UNNE</p>
                                <a href="https://www.unne.edu.ar/" class="btn btn-primary btn-unne" target="_blank"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-md-3 valign-center col-left mg-card">
                <div class="card card-shadow wow zoomIn">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img class="foto img-thumbnail img-circle"
                                 src="webroot/img/integrantes/davidoff.jpg"
                                 alt="Davidoff, Eve" style="height: 165px;">
                            <div class="mt-3">
                                <h4 style="color: var(--primary)">Davidoff, Eve</h4>
                                <p class="text-secondary mb-1">Investigadora Colaboradora</p>
                                <p class="text-muted font-size-sm">Investigadora UNNE</p>
                                <p class="text-success font-size-sm"></p>
                                <a href="https://www.unne.edu.ar/" class="btn btn-primary btn-unne" target="_blank"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-md-3 valign-center col-left mg-card">
                <div class="card card-shadow wow zoomIn">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img class="foto img-thumbnail img-circle"
                                 src="webroot/img/integrantes/barrios.jpg"
                                 alt="Barrios, Paola" style="height: 165px;">
                            <div class="mt-3">
                                <h4 style="color: var(--primary)">Barrios, Paola</h4>
                                <p class="text-secondary mb-1">Investigadora Colaboradora</p>
                                <p class="text-muted font-size-sm">Investigadora UNNE</p>
                                <a href="https://www.unne.edu.ar/" class="btn btn-primary btn-unne" target="_blank"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-xs-12 col-md-3 valign-center col-left mg-card">
                <div class="card card-shadow wow zoomIn">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img class="foto img-thumbnail img-circle"
                                 src="webroot/img/integrantes/pozzaglio.jpg"
                                 alt="Pozzaglio, Fernando" style="height: 165px;">
                            <div class="mt-3">
                                <h4 style="color: var(--primary)">Pozzaglio, Fernando Ariel</h4>
                                <p class="text-secondary mb-1">Investigador/Técnico Colaborador</p>
                                <p class="text-muted font-size-sm">Personal de Apoyo a la Investigación (CPA) - CONICET</p>
                                <p><?= $this->Html->link('fearpozzaglio@yahoo.com.ar', 'mailto:fearpozzaglio@yahoo.com.ar',['class' => 'text-success font-size-sm', 'escape' => false, 'target' => '_blank']) ?></p>
                                <a href="https://www.conicet.gov.ar/new_scp/detalle.php?id=29959&datos_academicos=yes&keywords=iighi" target="_blank"
                                   class="btn btn-primary btn-conicet"><i class="fa"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xs-12 col-md-3 valign-center col-left mg-card">
                <div class="card card-shadow wow zoomIn">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img class="foto img-thumbnail img-circle"
                                 src="webroot/img/integrantes/ramirez.jpg"
                                 alt="Rubén Ramírez" style="height: 165px;">
                            <div class="mt-3">
                                <h4 style="color: var(--primary)">Rubén Ramírez</h4>
                                <p class="text-secondary mb-1">Investigador Colaborador</p>
                                <p class="text-muted font-size-sm">Rector del Instituto de Educación Superior "René Favaloro"</p>
                                <a href="https://inscastelli-cha.infd.edu.ar/sitio/" class="btn btn-primary btn-favaloro" target="_blank"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-md-3 valign-center col-left mg-card">
                <div class="card card-shadow wow zoomIn">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img class="foto img-thumbnail img-circle"
                                 src="webroot/img/integrantes/u_mujer.jpg"
                                 alt="Guadalupe López" style="height: 165px;">
                            <div class="mt-3">
                                <h4 style="color: var(--primary)">Guadalupe López</h4>
                                <p class="text-secondary mb-1">Investigadora Colaboradora</p>
                                <p class="text-muted font-size-sm">Instituto de Educación Superior "René Favaloro"</p>
                                <a href="https://inscastelli-cha.infd.edu.ar/sitio/" class="btn btn-primary btn-favaloro" target="_blank"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-md-3 valign-center col-left mg-card">
                <div class="card card-shadow wow zoomIn">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img class="foto img-thumbnail img-circle"
                                 src="webroot/img/integrantes/u_hombre.jpg"
                                 alt="Daniel Liberatti" style="height: 165px;">
                            <div class="mt-3">
                                <h4 style="color: var(--primary)">Daniel Liberatti</h4>
                                <p class="text-secondary mb-1">Investigador Colaborador</p>
                                <p class="text-muted font-size-sm">Pasante del Instituto de Investigaciones Geohistóricas (IIGHI)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>









