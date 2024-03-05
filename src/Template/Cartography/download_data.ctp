
<?= $this->Html->script('datatables.net/js/jquery.dataTables.min.js') ?>
<?= $this->Html->script('datatables.net-bs/js/dataTables.bootstrap.min.js') ?>

<?= $this->element('header')?>



<!--<div class="container-xxl py-5 mb-5">

    <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
        <h2 class="mt-2 text-success">Centro de Descargas</h2>
    </div>

    <div class="container my-5 py-5 px-lg-5">
        <div class="row py-5" style="justify-content: center;">

            <?php echo $this->Html->image('pagina-construccion.jpg', ["alt" => '', 'class' => ['pagina-works']]) ?>

        </div>

    </div>-->



    <div class="container-xxl mb-5">

        <div class="row py-5 landing-inte-back">
            <div class="col-xs-5 col-md-5 col-lg-5 valign-center" style="text-align: center; display:table">
                <h1 class="title-hover wow zoomIn" style="vertical-align: middle; color: #198754; margin-top: 30%;">
                    Centro de Descargas
                </h1>
                <p class="wow zoomIn" style="vertical-align: middle; color: #198754;">
                    En esta sección ponemos a disposición una serie de capas de información geoespacial en formato vectorial para su descarga, refereidas al Proyecto de Investigación.
                </p>

            </div>
            <div class="col-xs-7 col-md-7 col-lg-7 valign-center">
                <?=  $this->Html->image('centro_descargas.svg', ['alt' => 'Centro de Descargas', 'class' => 'img-fluid img-landing-int wow zoomIn']); ?>
            </div>
        </div>

    </div>

<div class="container-xxl mb-5">

        <!--<div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
            <h2 class="mt-2 text-success">Documentación del Proyecto</h2>
        </div>-->

    <div class="container my-5 py-5 px-lg-5">
        <div class="row g-5 py-5 d-flex justify-content-center text-center">

            <div class="col-lg-10 wow fadeInUp">
                <div class="box" style="border-top: unset;">
                    <!-- /.box-header -->
                    <div class="box-body table-responsive-sm ">
                        <table id="example2" class="table table-bordered table-hover dataTable">
                            <thead>
                            <tr>
                                <th scope="col"><?= $this->Paginator->sort('Geometría') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('Nombre de la capa base') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('Descarga') ?></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($downloadData as $download): ?>
                                <tr>
                                    <td><?= h($download->geometria) ?></td>
                                    <td><?= h($download->nombre) ?></td>
                                    <td><?= $this->Html->link('Descargar Shape', $download->descarga,['download'=> $download->descarga, 'class' => 'btn btn-success']); ?></td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>

                    </div>

                </div>

            </div>

        </div>
    </div>
</div>

<script>
    $(function () {
        $('#example2').DataTable({
            'lengthChange': false,
            'language' : {
                'search': "Buscar:",
                'paginate': {
                    'first':      "Primer",
                    'previous':   "Anterior",
                    'next':       "Siguiente",
                    'last':       "Anterior"
                }},
            'autoWidth'   : true
        })
    })
</script>










