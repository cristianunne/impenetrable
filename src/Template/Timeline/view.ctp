
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
                <?=  $this->Html->image('timeline_2.svg', ['alt' => 'CakePHP', 'class' => 'img-fluid img-landing-int wow zoomIn']); ?>
            </div>
        </div>

    </div>

    <div class="container-xxl py-5 mb-5">

        <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
            <h2 class="mt-2 text-success ">Línea Histórica de Avance del Proyecto de Investigación</h2>
        </div>
    </div>


<section class="cd-horizontal-timeline">
    <div class="timeline">
        <div class="events-wrapper">
            <div class="events">
                <ol>
                    <?php $i = 0;?>
                    <?php foreach ($timeline as $time): ?>
                    <?php if($i == 0): ?>
                        <li><a href="#0" data-date="<?= h($time->fecha->format('d/m/Y')) ?>" class="selected"><?= h($time->fecha->format('m-Y')) ?></a></li>
                            <?php $i = 1;?>
                    <?php else: ?>
                            <li><a href="#0" data-date="<?= h($time->fecha->format('d/m/Y')) ?>"><?= h($time->fecha->format('m-Y')) ?></a></li>
                        <?php endif; ?>
                    <?php endforeach; ?>

                </ol>

                <span class="filling-line" aria-hidden="true"></span>
            </div> <!-- .events -->
        </div> <!-- .events-wrapper -->

        <ul class="cd-timeline-navigation">
            <li><a href="#0" class="prev inactive"><i class='fa fa-chevron-right'></i></a></li>
            <li><a href="#0" class="next"><i class='fa fa-chevron-right'></i></a></li>
        </ul> <!-- .cd-timeline-navigation -->
    </div> <!-- .timeline -->

    <div class="events-content">
        <ol>
            <?php $i = 0;?>
            <?php foreach ($timeline as $time): ?>

                <?php if($i == 0): ?>
                <li class="selected" data-date="<?= h($time->fecha->format('d/m/Y')) ?>">
                    <h2> <?= h($time->title) ?></h2>
                    <em><?= h($time->fecha->format('d-m-Y')) ?></em>
                    <p>
                        <?= h($time->description) ?>
                    </p>
                </li>
                    <?php $i = 1;?>
            <?php else: ?>
                    <li data-date="<?= h($time->fecha->format('d/m/Y')) ?>">
                        <h2> <?= h($time->title) ?></h2>
                        <em><?= h($time->fecha->format('d-m-Y')) ?></em>
                        <p>
                            <?= h($time->description) ?>
                        </p>
                    </li>

            <?php endif; ?>
            <br>
            <?php endforeach; ?>

        </ol>
    </div> <!-- .events-content -->
</section>


</section>
