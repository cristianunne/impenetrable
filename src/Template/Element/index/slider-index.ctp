<!-- Testimonial Start -->
<div class="container-xxl slider-home wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-1 px-lg-5">
        <div class="pt-4 px-5 col-lg-6 text-center text-lg-start slider-intro div-opacity-70">
            <h1 class="text-white mb-4 animated zoomIn font-impenetrable">
                <span style="border-bottom: 3px solid #FF4141; line-height: 48px;">EL IMPENETRABLE:</span>
                <span class="fs-5">UN ITINERARIO CULTURAL EN TORNO AL AMBIENTE, LOS GRUPOS HUMANOS Y SU CULTURA LOCAL</span>
            </h1>
            <!--<div class="ps-3">
                <p class="text-white pb-3 animated zoomIn" style="text-align: justify;">Proyecto de Investigación financiado por la Agencia Nacional de Promoción de la
                    Investigación, el Desarrollo Tecnológico y la Innovación. (PICT0: UNNE-2019-00028).</p>
            </div>-->

        </div>
        <section class="testimonials">
                  <div id="customers-testimonials" class="owl-carousel">
                    

                    <?php foreach ($slider_home as $sld): ?>
                    <div class="item">
                      
                      <div class="shadow-effect">
                        <!--<img class="pull-right" src="https://radiustheme.com/demo/html/redchili/redchili/img/slider/slide1-1.jpg" alt="">-->
                        <?= $this->Html->image(h($sld->photo), ['pathPrefix' => '/img/slider/']); ?>
                        <div class="slider-caption">
                            <div class="top-caption"><?= h($sld->titulo) ?> - <?= h($sld->descripcion) ?></div>
                        </div>
                      </div>
                    </div>
                    <?php endforeach; ?>
                  </div>
            </section>
        <div class="pt-4 px-5 text-center text-lg-start div-opacity-70 slider-intro-2 ">
            <h1 class="text-white mb-4 animated zoomIn font-impenetrable">
                <span style="border-bottom: 3px solid #FF4141; line-height: 48px;">EL IMPENETRABLE:</span>
                <span class="fs-5">UN ITINERARIO CULTURAL EN TORNO AL AMBIENTE, LOS GRUPOS HUMANOS Y SU CULTURA LOCAL</span>
            </h1>
            <div class="ps-3">
                <p class="text-white pb-3 animated zoomIn" style="text-align: justify;">Proyecto de Investigación financiado por la Agencia Nacional de Promoción de la
                    Investigación, el Desarrollo Tecnológico y la Innovación. (PICT0: UNNE-2019-00028).</p>
            </div>

        </div>
    </div>
</div>
