<?= $this->Html->script('datatables.net/js/jquery.dataTables.min.js') ?>
<?= $this->Html->script('datatables.net-bs/js/dataTables.bootstrap.min.js') ?>


<?= $this->element('admin/header')?>

<section class="h-100" style="background-color: #F3F6FF; padding-bottom: 100px;">

    <?= $this->Flash->render() ?>

    <div class="row padding-10 py-5">
        <div class="col-lg-12">
            <div class="box landing-inte-back">
                <?=  $this->Html->image('productos.svg', ['alt' => 'Productos', 'class' => 'img-fluid img-landing-box wow zoomIn']); ?>
            </div>
                <div class="box-header">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="box-title" style="color: rgb(0 38 6 / 96.3%);">Artesanos/Productos/Servicios registrados</h3>
                        </div>
                        <div class="col-sm-6">
                            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups" style="justify-content: flex-end !important;">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                <?= $this->Html->link('<i class="fa fa-plus"></i> Nuevo', ['action' => 'add','?' =>
                                ['Accion' => 'Agregar Artesano', 'Categoria' => 'Novedades']],
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
                            <th scope="col"><?= $this->Paginator->sort('Producto') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('Dirección') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('Teléfono') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('Email') ?></th>
                            <!--<th scope="col"><?= $this->Paginator->sort('Instagram') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('Facebook') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('Sitio web') ?></th>-->
                            <th scope="col"><?= $this->Paginator->sort('Imagen') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('Localidad') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('color') ?></th>
                            <th scope="col" class="actions"><?= __('Acciones') ?></th>

                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($artesanos as $artesano): ?>
                            <tr>
                                <td><?= $this->Number->format($artesano->idnovedades) ?></td>
                                <td><?= h($artesano->nombre) ?></td>
                                <td><?= h($artesano->producto) ?></td>
                                <td><?= h($artesano->direccion) ?></td>
                                <td><?= h($artesano->telefono) ?></td>
                                <td><?= h($artesano->email) ?></td>
                                <!--<td><?= h($artesano->instagram) ?></td>
                                <td><?= h($artesano->facebook) ?></td>
                                <td><?= h($artesano->web) ?></td>-->
                                <td><?= $this->Html->image(h($artesano->foto_dir), ['heigth' => '40', 'width' => '40']) ?></td>
                                <td><?= h($artesano->localidad) ?></td>
                                <td><?= h($artesano->color) ?></td>
                                <td class="actions">
                                    <div class="col-sm-12" style="margin-bottom: 5px;">
                                        <?= $this->Html->link(__('Editar'), ['action' => 'edit','?' =>
                                            ['Accion' => 'Editar', 'Categoria' => 'Novedades', 'Context' => 'Admin', 'id' => $artesano->idnovedades]],
                                            ['class' => 'btn btn-small btn-warning']) ?>
                                    </div>
                                    <div class="col-sm-12">
                                        <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $artesano->idnovedades],
                                            ['confirm' => __('Eliminar el registro: {0}?', $artesano->idnovedades),
                                                'class' => 'btn btn-small btn-danger']) ?>
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
