<?= $this->element('header')?>

<section class="h-100" style="background-color: #ffffff; padding-bottom: 100px;">

    <div class="container-xxl mb-5">

        <div class="row py-5 landing-inte-back">
            <div class="col-xs-5 col-md-5 col-lg-5 valign-center" style="text-align: center; display:table">
                <h1 class="title-hover wow zoomIn" style="vertical-align: middle; color: #198754; margin-top: 30%;">
                    Metodología
                </h1>

                <p class="wow zoomIn" style="vertical-align: middle; color: #198754;">
                    Te contamos todo lo que hicimos.
                </p>

            </div>
            <div class="col-xs-7 col-md-7 col-lg-7 valign-center">
                <?=  $this->Html->image('metodologia.svg', ['alt' => 'Metodología', 'class' => 'img-fluid img-landing-int wow zoomIn']); ?>
            </div>
        </div>

    </div>

<div class="container-xxl container-background-lightgray padding-15 py-5">

        <div class="row g-4 bs-white font-size-18 padding-20">
            <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                <!--<div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                    <h2 class="mt-2 text-success">Metodología</h2>
                </div>-->

                <h5 class="mb-3 text-title">¿Cómo se hizo?</h5>

                <p class="text-gray" style="text-align: justify;">A través de una <strong>metodología participativa</strong> y <strong>colaborativa</strong>, es decir, pretendemos que el conocimiento y la transmisión del mismo sea  producto de una co-construcción:</p>

                <ul class="text-gray fa-ul">
                    <li class="margin-bottom" style="text-align: justify;"><i class="fa fa-check"></i> Propiciamos la participación activa de los actores locales que residen y conforman el paisaje cultural del Impenetrable (comunidades indígenas, criollos y descendientes de inmigrantes europeos), así como también de entidades gubernamentales –municipios, Instituto de Cultura y Turismo de la provincia- y entidades no gubernamentales como por ejemplo, fundaciones, asociación de artesanas, etc.</li>
                    <li class="margin-bottom" style="text-align: justify;"><i class="fa fa-check"></i> Discutimos y problematizamos con los actores: <em>¿Qué mostrar en el mapa? ¿Qué relevar, registrar y compartir con los otros en el itinerario cultural del Impenetrable?</em> Estas decisiones son tomadas por los actores partícipes del proyecto. </li>
                    <li class="margin-bottom" style="text-align: justify;"><i class="fa fa-check"></i> En cada reunión de trabajo se empezó con un examen del territorio de las diferentes localidades: Juan José Castelli, Miraflores, Misión Nueva Pompeya, Villa Río Bermejito, El Sauzalito, entre otros municipios.</li>
                </ul>

                <br>
                <h5 class="mb-3 text-title">¿Qué se registró?</h5>
                <p class="text-gray" style="text-align: justify;">Se procedió al desarrollo de la geolocalización y relevamiento de material visual de cada sitio. En algunos casos, se procedió a la elaboración de entrevistas para relevar las historias locales del sitio; de esa forma, en los parajes se realizaron entrevistas a los caciques, referentes comunitarios o integrantes de las comunidades.</p>

                <p class="text-gray" style="text-align: justify;">Los sitios registrados se clasificaron e identificaron visualmente en estas seis categorías:</p>


                <ul class="text-gray fa-ul">
                 <div class="row g-4">
                    <div class="col-lg-4 col-md-6 col-xs-12 wow zoomIn" data-wow-delay="0.1s">
                        <li class="margin-bottom" style="text-align: justify;"><?=  $this->Html->image('icons/SN.png', ['alt' => 'Sitios Naturales', 'style' => 'max-width:40px']); ?> Sitios Naturales
                            <ul class="text-gray fa-ul">
                                <li class="margin-bottom" style="text-align: justify;"><?=  $this->Html->image('icons/SN_AP_Parques_Nacionales.png', ['alt' => 'Ícono', 'style' => 'max-width:30px']); ?> Parques Nacionales</li>
                                <li class="margin-bottom" style="text-align: justify;"><?=  $this->Html->image('icons/SN_AP_Parques_Provinciales.png', ['alt' => 'Ícono', 'style' => 'max-width:30px']); ?> Parques Provinciales</li>
                                <li class="margin-bottom" style="text-align: justify;"><?=  $this->Html->image('icons/SN_LP_Flora.png', ['alt' => 'Ícono', 'style' => 'max-width:30px']); ?> Lugar pintoresco de flora</li>
                                <li class="margin-bottom" style="text-align: justify;"><?=  $this->Html->image('icons/SN_C_Playas.png', ['alt' => 'Ícono', 'style' => 'max-width:30px']); ?> Playas</li>
                                <li class="margin-bottom" style="text-align: justify;"><?=  $this->Html->image('icons/SN_CA_Lagunas.png', ['alt' => 'Ícono', 'style' => 'max-width:30px']); ?> Lagunas</li>
                            </ul>
                        </li>
                    </div>
                    <div class="col-lg-4 col-md-6 col-xs-12 wow zoomIn" data-wow-delay="0.1s">
                        <li class="margin-bottom" style="text-align: justify;"><?=  $this->Html->image('icons/SC.png', ['alt' => 'Sitios_Culturales', 'style' => 'max-width:40px']); ?> Sitios Culturales
                            <ul class="text-gray fa-ul">
                                <li class="margin-bottom" style="text-align: justify;"><?=  $this->Html->image('icons/SC_ARQ_Escuelas.png', ['alt' => 'Ícono', 'style' => 'max-width:30px']); ?> Escuelas</li>
                                <li class="margin-bottom" style="text-align: justify;"><?=  $this->Html->image('icons/SC_ARQ_Iglesias.png', ['alt' => 'Ícono', 'style' => 'max-width:30px']); ?> Iglesias</li>
                                <li class="margin-bottom" style="text-align: justify;"><?=  $this->Html->image('icons/SC_Parajes.png', ['alt' => 'Ícono', 'style' => 'max-width:30px']); ?> Parajes</li>
                                <li class="margin-bottom" style="text-align: justify;"><?=  $this->Html->image('icons/SC_ARQ_Monumentos.png', ['alt' => 'Ícono', 'style' => 'max-width:30px']); ?> Monumentos</li>
                                <li class="margin-bottom" style="text-align: justify;"><?=  $this->Html->image('icons/SC_ARQ_Miradores.png', ['alt' => 'Ícono', 'style' => 'max-width:30px']); ?> Miradores</li>
                                <li class="margin-bottom" style="text-align: justify;"><?=  $this->Html->image('icons/SC_ARQ_Paseos.png', ['alt' => 'Ícono', 'style' => 'max-width:30px']); ?> Paseos</li>
                                <li class="margin-bottom" style="text-align: justify;"><?=  $this->Html->image('icons/SC_ARQ_Adminitracion.png', ['alt' => 'Ícono', 'style' => 'max-width:30px']); ?> Adminitracion</li>
                                <li class="margin-bottom" style="text-align: justify;"><?=  $this->Html->image('icons/SC_ARQ_Campings.png', ['alt' => 'Ícono', 'style' => 'max-width:30px']); ?> Campings</li>
                                <li class="margin-bottom" style="text-align: justify;"><?=  $this->Html->image('icons/SC_LH_Complejo_Historico.png', ['alt' => 'Ícono', 'style' => 'max-width:30px']); ?> Lugares Históricos</li>
                                <li class="margin-bottom" style="text-align: justify;"><?=  $this->Html->image('icons/SC_Museos.png', ['alt' => 'Ícono', 'style' => 'max-width:30px']); ?> Museos</li>
                                <li class="margin-bottom" style="text-align: justify;"><?=  $this->Html->image('icons/SC_ARQ_Plazas.png', ['alt' => 'Ícono', 'style' => 'max-width:30px']); ?> Plaza</li>
                            </ul>
                        </li>
                    </div>
                    <div class="col-lg-4 col-md-6 col-xs-12 wow zoomIn" data-wow-delay="0.1s">
                        <li class="margin-bottom" style="text-align: justify;"><?=  $this->Html->image('icons/MC.png', ['alt' => 'Manifestaciones Culturales', 'style' => 'max-width:45px']); ?> Manifestaciones Culturales
                            <ul class="text-gray fa-ul">
                                <li class="margin-bottom" style="text-align: justify;"><?=  $this->Html->image('icons/MC_AyA_Alfareria.png', ['alt' => 'Ícono', 'style' => 'max-width:35px']); ?> Alfarería</li>
                                <li class="margin-bottom" style="text-align: justify;"><?=  $this->Html->image('icons/MC_AyA_Cesteria.png', ['alt' => 'Ícono', 'style' => 'max-width:35px']); ?> Cestería</li>
                                <li class="margin-bottom" style="text-align: justify;"><?=  $this->Html->image('icons/MC_AyA_Escultura_Carpinteria.png', ['alt' => 'Ícono', 'style' => 'max-width:35px']); ?> Escultura</li>
                                <li class="margin-bottom" style="text-align: justify;"><?=  $this->Html->image('icons/MC_G_Dulces_Tipicos.png', ['alt' => 'Ícono', 'style' => 'max-width:35px']); ?> Dulces Típicos</li>
                            </ul>
                        </li>
                    </div>
                    <div class="col-lg-4 col-md-6 col-xs-12 wow zoomIn" data-wow-delay="0.1s">
                        <li class="margin-bottom" style="text-align: justify;"><?=  $this->Html->image('icons/RTC.png', ['alt' => 'Realizaciones Técnicas, Científicas o Artísticas', 'style' => 'max-width:40px']); ?> Realizaciones Técnicas, Científicas o Artísticas
                            <ul class="text-gray fa-ul">
                                <li class="margin-bottom" style="text-align: justify;"><?=  $this->Html->image('icons/RTC_CCT_Centros_Deportivos.png', ['alt' => 'Ícono', 'style' => 'max-width:30px']); ?> Centros Deportivos</li>
                                <li class="margin-bottom" style="text-align: justify;"><?=  $this->Html->image('icons/RTC_EA_Agricultura.png', ['alt' => 'Ícono', 'style' => 'max-width:30px']); ?> Agricultura</li>
                                <li class="margin-bottom" style="text-align: justify;"><?=  $this->Html->image('icons/RTC_EA_Ganaderia.png', ['alt' => 'Ícono', 'style' => 'max-width:30px']); ?> Ganaderia</li>
                                <li class="margin-bottom" style="text-align: justify;"><?=  $this->Html->image('icons/RTC_EI_Fabricas.png', ['alt' => 'Ícono', 'style' => 'max-width:30px']); ?> Fábricas</li>
                            </ul>
                        </li>
                    </div>
                    <div class="col-lg-4 col-md-6 col-xs-12 wow zoomIn" data-wow-delay="0.1s">
                        <li class="margin-bottom" style="text-align: justify;"><?=  $this->Html->image('icons/AP.png', ['alt' => 'Acontecimientos Programados', 'style' => 'max-width:40px']); ?> Acontecimientos Programados
                            <ul class="text-gray fa-ul">
                                <li class="margin-bottom" style="text-align: justify;"><?=  $this->Html->image('icons/AP_Eventos.png', ['alt' => 'Ícono', 'style' => 'max-width:30px']); ?> Eventos</li>
                                <li class="margin-bottom" style="text-align: justify;"><?=  $this->Html->image('icons/AP_Fiestas.png', ['alt' => 'Ícono', 'style' => 'max-width:30px']); ?> Fiestas</li>
                            </ul>
                        </li>
                    </div>
                    <div class="col-lg-4 col-md-6 col-xs-12 wow zoomIn" data-wow-delay="0.1s">
                        <li class="margin-bottom" style="text-align: justify;"><?=  $this->Html->image('icons/S.png', ['alt' => 'Servicios', 'style' => 'max-width:40px']); ?> Servicios
                            <ul class="text-gray fa-ul">
                                <li class="margin-bottom" style="text-align: justify;"><?=  $this->Html->image('icons/S_Alojamientos.png', ['alt' => 'Ícono', 'style' => 'max-width:30px']); ?> Alojamientos</li>
                                <li class="margin-bottom" style="text-align: justify;"><?=  $this->Html->image('icons/S_Centros_Salud.png', ['alt' => 'Ícono', 'style' => 'max-width:30px']); ?> Centros de Salud</li>
                                <li class="margin-bottom" style="text-align: justify;"><?=  $this->Html->image('icons/S_Gasolineras.png', ['alt' => 'Ícono', 'style' => 'max-width:30px']); ?> Estaciones de Servicio</li>
                                <li class="margin-bottom" style="text-align: justify;"><?=  $this->Html->image('icons/S_Restaurantes.png', ['alt' => 'Ícono', 'style' => 'max-width:30px']); ?> Restaurantes / Comedores / Rotiserías</li>
                            </ul>
                        </li>
                    </div>
                </div>
                </ul>

                <!--<ul class="text-gray fa-ul">
                    <li class="margin-bottom" style="text-align: justify;"><i class="fa fa-check"></i> Sitios históricos</li>
                    <li class="margin-bottom" style="text-align: justify;"><i class="fa fa-check"></i> Espacios naturales (espejos de agua o antiguos recorridos del río Bermejo)</li>
                    <li class="margin-bottom" style="text-align: justify;"><i class="fa fa-check"></i> Parajes</li>
                    <li class="margin-bottom" style="text-align: justify;"><i class="fa fa-check"></i> Lugares de comercios destinados a la venta de comidas</li>
                    <li class="margin-bottom" style="text-align: justify;"><i class="fa fa-check"></i> Tierras comunales de comunidades indígenas</li>
                    <li class="margin-bottom" style="text-align: justify;"><i class="fa fa-check"></i> Asociaciones indígenas que venden artesanías</li>
                    <li class="margin-bottom" style="text-align: justify;"><i class="fa fa-check"></i> Campos o casas de campo (puntos para alojarse urbanos)</li>
                    <li class="margin-bottom" style="text-align: justify;"><i class="fa fa-check"></i> Monumentos</li>
                    <li class="margin-bottom" style="text-align: justify;"><i class="fa fa-check"></i> Fiestas o manifestaciones culturales</li>
                </ul>-->

            </div>


        </div>



</div>
</section>