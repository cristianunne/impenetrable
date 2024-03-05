<!-- main-footer -->
<footer class="main-footer">
    <div id="container_footer" class="container-xxl py-5 padding-5">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="logo-widget footer-widget">
                        
                        <figure class="footer-logo text-center"><a href="https://iighi.conicet.gov.ar" target="_blank">
                                <?php echo $this->Html->image('footer-logo.png', ["alt" => 'IIGHI logo']) ?></a></figure>
                        <div class="text">Instituto de Investigaciones Geohistóricas (IIGHI)<br><small>Consejo Nacional de Investigaciones Científicas y Técnicas- Universidad Nacional del Nordeste</small></div>
                        <ul id="icons-media" class="footer-social clearfix">
                            <li><a href="https://www.facebook.com/IIGHIChaco/" target="_blank"><i class="fa-brands fa-facebook"></i></a></li>
                            <li><a href="https://twitter.com/iighichaco?lang=es" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href="https://www.instagram.com/iighiconicet/" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="https://www.youtube.com/channel/UC0vPIQkJWfDRDOxCefvfL7A/featured?disable_polymer=1" target="_blank">
                                    <i class="fa-brands fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="link-widget footer-widget">
                        <div class="footer-title">Accesos rápidos</div>
                        <ul class="link-list">

                            <li><?= $this->Html->link(__('Inicio'), ['controller' => 'index', 'action' => 'index']) ?></li>
                            <li><?=  $this->Html->link(__('Línea Histórica'), ['controller' => 'Timeline', 'action' => 'view', '?' => ['Categoria' => 'Timeline']],); ?></li>
                            <li><?=  $this->Html->link(__('Integrantes'), ['controller' => 'Integrantes', 'action' => 'index', '?' => ['Categoria' => 'Integrantes']],); ?></li>
                            <li><?=  $this->Html->link(__('Artesanos, Productos y Servicios'), ['controller' => 'Novedades', 'action' => 'index', '?' => ['Categoria' => 'Integrantes']],); ?></li>
                            <li><?=  $this->Html->link(__('Documentación'), ['controller' => 'Documentacion', 'action' => 'index', '?' => ['Categoria' => 'Documentacion']],); ?></li>
                            <li><?=  $this->Html->link(__('Cartografía'), ['controller' => 'Cartography', 'action' => 'index', '?' => ['Categoria' => 'Cartography']],); ?></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="event-widget footer-widget">
                        <div class="footer-title">Trabajos de Campo</div>
                        <div class="single-event">
                            <div class="link">1er Viaje de Campaña: <em>Juan José Castelli</em></div>
                            <div class="text"><i class="fa fa-calendar"></i>30-31 de marzo 2022</div>
                        </div>
                        <div class="single-event">
                            <div class="link">2do Viaje de Campaña: <em>Miraflores</em></div>
                            <div class="text"><i class="fa fa-calendar"></i>1-3 de junio de 2022</div>
                        </div>
                        <div class="single-event">
                            <div class="link">3er Viaje de Campaña: <em>El Sauzalito</em></div>
                            <div class="text"><i class="fa fa-calendar"></i>10-11 de Agosto de 2022</div>
                        </div>
                        <div class="single-event">
                            <div class="link">4to Viaje de Campaña: <em>Miraflores y parajes aledaños</em></div>
                            <div class="text"><i class="fa fa-calendar"></i>11 de Junio de 2023</div>
                        </div>
                        <div class="single-event">
                            <div class="link">5to Viaje de Campaña: <em>Villa Río Bermejito, Fortín Lavalle y El Sauzalito</em></div>
                            <div class="text"><i class="fa fa-calendar"></i>6 de Julio de 2023</div>
                        </div>
                        <div class="single-event">
                            <div class="link">6to Viaje de Campaña: <em>Nueva Pompeya y parajes</em></div>
                            <div class="text"><i class="fa fa-calendar"></i>3 de Agosto de 2023</div>
                        </div>
                        <div class="single-event">
                            <div class="link">7mo Viaje de Campaña: <em>7mo Viaje de Campaña: Miraflores</em></div>
                            <div class="text"><i class="fa fa-calendar"></i>20 de Febrero de 2024</div>
                        </div>
                        <div class="single-event">
                            <div class="link">8vo Viaje de Campaña: <em>Juan José Castelli y alrededores</em></div>
                            <div class="text"><i class="fa fa-calendar"></i>26 de Febrero de 2024</div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="logo-widget footer-widget">
                        <figure class="footer-logo-2"><a href="https://www.argentina.gob.ar/ciencia/agencia" target="_blank">
                                <?php echo $this->Html->image('agencia_01-0anegativo_0.png', ["alt" => 'agencia', "height" => '60']) ?></a></figure>
                        <div class="text">Proyecto de Investigación financiado por la Agencia Nacional de Promoción de la Investigación, el Desarrollo Tecnológico y la Innovación<br><small>(PICT0: UNNE-2019-00028)</small></div>
                        <figure class="footer-logo-2"><a href="https://www.argentina.gob.ar/ciencia/cofecyt" target="_blank">
                                <?php echo $this->Html->image('iso-cofecyt.png', ["alt" => 'cofecyt', "height" => '60']) ?></a></figure>
                        <div class="text">Proyecto de Investigación financiado poe el Consejo Federal de Ciencia, Tecnología e Innovación<br><small>(CH-10- PFI-2022)</small></div>
                    </div>
                </div>
            </div>
    </div>
</footer>
<!-- main-footer end -->

<!-- footer-bottom -->
<div class="footer-bottom">
    <div class="container">
        <div class="copyright"><?= $this->Html->link('El Impenetrable: un itinerario cultural en torno al ambiente, los grupos humanos y su cultura local', ['controller' => 'Index', 'action' => 'index']); ?><br><a href="https://iighi.conicet.gov.ar/" target="_blank">IIGHI, CONICET- UNNE</a><br>
            &copy; 2024 Todos los derechos reservados
    </div>
    </div>
</div>
<!-- footer-bottom end -->

