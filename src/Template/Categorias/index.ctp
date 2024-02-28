<?= $this->Html->script('datatables.net/js/jquery.dataTables.min.js') ?>
<?= $this->Html->script('datatables.net-bs/js/dataTables.bootstrap.min.js') ?>


<?= $this->element('admin/header')?>

<section class="h-100" style="background-color: #F3F6FF; padding-bottom: 100px;">

    <?= $this->Flash->render() ?>

    <div class="row padding-10 py-5">
        <div class="col-lg-6 mx-auto">
            <div class="box landing-inte-back">
                <?=  $this->Html->image('categoria.svg', ['alt' => 'Categoría', 'class' => 'img-fluid img-landing-box wow zoomIn']); ?>
            </div>
                <div class="box-header">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="box-title" style="color: rgb(0 38 6 / 96.3%);">Categorias registradas</h3>
                        </div>
                        <div class="col-sm-6">
                            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups" style="justify-content: flex-end !important;">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                <?= $this->Html->link('<i class="fa fa-plus"></i> Nuevo', ['action' => 'add','?' =>
                                ['Accion' => 'Agregar Tipo', 'Categoria' => 'Mapainteractive']],
                                ['class' => 'btn btn-success float-right', 'escape' => false]) ?>
                                <?= $this->Html->link('Cancelar <i class="fa fa-times"></i>', ['controller' => 'admin', 'action' => 'index'],
                                    ['class' => 'btn btn-secondary float-right', 'escape' => false]) ?>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive-sm">
                    <table id="example2" class="table table-bordered table-hover dataTable">
                        <thead>
                        <tr>
                            <th scope="col"><?= $this->Paginator->sort('ID') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('Nombre') ?></th>
                            <th scope="col" class="actions"><?= __('Acciones') ?></th>

                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($categorias as $loc): ?>
                            <tr>
                                <td><?= $this->Number->format($loc->idcategorias) ?></td>
                                <td><?= h($loc->name) ?></td>
                                <td class="actions">
                                        <?= $this->Html->link(__('Editar'), ['action' => 'edit','?' =>
                                            ['Accion' => 'Editar', 'Categoria' => 'Mapainteractive', 'Context' => 'Admin', 'id' => $loc->idcategorias]],
                                            ['class' => 'btn btn-small btn-warning']) ?>
                                        <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $loc->idcategorias],
                                            ['confirm' => __('Eliminar el registro: {0}?', $loc->idcategorias),
                                                'class' => 'btn btn-small btn-danger']) ?>

                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>

                </div>

            </div>


        </div>
    </div>

</section>

<script>
    $(function () {
        $('#example2').DataTable({
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
