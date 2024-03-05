
<?= $this->Html->script('datatables.net/js/jquery.dataTables.min.js') ?>
<?= $this->Html->script('datatables.net-bs/js/dataTables.bootstrap.min.js') ?>

<?= $this->element('admin/header')?>


<section class="h-100" style="background-color: #F3F6FF; padding-bottom: 100px;">

    <?= $this->Flash->render() ?>

    <div class="row padding-10 py-5">
        <div class="col-lg-12">
            <div class="box landing-inte-back">
                <?=  $this->Html->image('centro_descargas.svg', ['alt' => 'Centro de Descargas', 'class' => 'img-fluid img-landing-box wow zoomIn']); ?>
            </div>
                <div class="box-header">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="box-title" style="color: rgb(0 38 6 / 96.3%);">Centro de Descargas</h3>
                        </div>
                        <div class="col-sm-6">
                            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups" style="justify-content: flex-end !important;">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                <?= $this->Html->link('<i class="fa fa-plus"></i> Nuevo', ['action' => 'downloadDataAdd','?' =>
                                ['Accion' => 'Editar Descarga', 'Categoria' => 'Cartography']],
                                ['class' => 'btn btn-success float-right', 'escape' => false]) ?>
                                <?= $this->Html->link('Cancelar <i class="fa fa-times"></i>', ['controller' => 'admin', 'action' => 'index'],
                                    ['class' => 'btn btn-secondary float-right', 'escape' => false]) ?>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

<div class="container-xxl mb-5">

        <!--<div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
            <h2 class="mt-2 text-success">Documentación del Proyecto</h2>
        </div>-->

    <div class="container my-5 px-lg-5">
        <div class="row g-5 py-5 d-flex justify-content-center text-center">

            <div class="col-lg-10 wow fadeInUp">
                <div class="box" style="border-top: unset;">
                    <!-- /.box-header -->
                    <div class="box-body table-responsive-sm ">
                        <table id="example2" class="table table-bordered table-hover dataTable">
                            <thead>
                            <tr>
                                <th scope="col"><?= $this->Paginator->sort('ID') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('Geometría') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('Nombre de la capa base') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('Ruta') ?></th>
                                <th scope="col" class="actions"><?= __('Acciones') ?></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($downloadData as $download): ?>
                                <tr>
                                    <td><?= h($download->idcartography) ?></td>
                                    <td><?= h($download->geometria) ?></td>
                                    <td><?= h($download->nombre) ?></td>
                                    <td><?= h($download->descarga) ?></td>
                                    <td class="actions">
                                        <div class="col-sm-12" style="margin-bottom: 5px;">
                                            <?= $this->Html->link(__('Editar'), ['action' => 'downloadDataEdit','?' =>
                                                ['Categoria' => 'Cartography', 'Context' => 'Admin', 'id' => $download->idcartography]],
                                                ['class' => 'btn btn-block btn-sm btn-warning']) ?>
                                        </div>
                                        <div class="col-sm-12" style="margin-bottom: 5px;">
                                            <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $download->idcartography],
                                                ['confirm' => __('Eliminar el registro: {0}?', $download->idcartography),
                                                    'class' => 'btn btn-block btn-sm  btn-danger']) ?>
                                        </div>
                                    </td>
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
</div></div></section>

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