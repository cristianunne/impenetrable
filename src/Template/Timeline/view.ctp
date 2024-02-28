
<?= $this->Html->css('timeline.css') ?>
<?= $this->Html->script('timeline.js') ?>



<?= $this->element('header')?>


<section class="h-100" style="background-color: #ffffff; padding-bottom: 100px;">

    <div class="container-xxl mb-5">

        <div class="row py-5 landing-inte-back">
            <div class="col-xs-5 col-md-5 col-lg-5 valign-center" style="text-align: center; display:table">
                <h1 class="title-hover wow zoomIn" style="vertical-align: middle; color: #198754; margin-top: 30%;">
                    Línea Histórica de Avance del Proyecto
                </h1>

                <p class="wow zoomIn" style="vertical-align: middle; color: #198754;">
                    Te contamos todos los sucesos relacionados al Proyecto de Investigación.
                </p>

            </div>
            <div class="col-xs-7 col-md-7 col-lg-7 valign-center">
                <?=  $this->Html->image('linea-de-tiempo.svg', ['alt' => 'Línea de tiempo', 'class' => 'img-fluid img-landing-int wow zoomIn']); ?>
            </div>
        </div>

    </div>

    <!--<div class="container-xxl py-5 mb-5">

        <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
            <h2 class="mt-2 text-success ">Línea Histórica de Avance del Proyecto de Investigación</h2>
        </div>
    </div>-->



<section class="timeline">
  <ol>
    <?php $i = 0;?>
        <?php foreach ($timeline as $time): ?>
            <?php if($i == 0): ?>

    <li>
      <div>
        <a type="button" class="tp" data-toggle="tooltip" data-placement="bottom" title="<?= h($time->description) ?>">
        <time><?= h($time->fecha->format('d-M-Y')) ?></time> <hr><span class="title"><?= h($time->title) ?></span>
      </a>
      </div>
    </li>

  <?php endif; ?>
    <?php endforeach; ?>
  </ol>

  <div class="arrows">
    <button class="arrow arrow__prev disabled" disabled>
      <img src="../webroot/img/arrow_prev.svg" alt="prev timeline arrow">
    </button>
    <button class="arrow arrow__next">
      <img src="../webroot/img/arrow_next.svg" alt="next timeline arrow">
    </button>
  </div>
</section>

</section>
