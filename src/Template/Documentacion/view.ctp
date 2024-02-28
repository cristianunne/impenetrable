
<?= $this->Html->script('datatables.net/js/jquery.dataTables.min.js') ?>
<?= $this->Html->script('datatables.net-bs/js/dataTables.bootstrap.min.js') ?>

<?= $this->element('admin/header')?>


<section class="h-100" style="background-color: #F3F6FF; padding-bottom: 100px;">

    <?= $this->Flash->render() ?>

    <div class="row padding-10 py-5">
        <div class="col-lg-12">
            <div class="box landing-inte-back">
                <?=  $this->Html->image('documentos.svg', ['alt' => 'Documentos', 'class' => 'img-fluid img-landing-box wow zoomIn']); ?>
            </div>
                <div class="box-header">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="box-title" style="color: rgb(0 38 6 / 96.3%);">Documentos</h3>
                        </div>
                        <div class="col-sm-6">
                            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups" style="justify-content: flex-end !important;">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                <?= $this->Html->link('<i class="fa fa-plus"></i> Nuevo', ['action' => 'add','?' =>
                                ['Accion' => 'Editar Documentacion', 'Categoria' => 'Documentacion']],
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
                            <th scope="col"><?= $this->Paginator->sort('Fecha') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('Título') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('Descripción') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('Archivo') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('Tamaño (MB)') ?></th>
                            <th scope="col" class="actions"><?= __('Acciones') ?></th>

                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($documentacion as $doc): ?>
                            <tr>
                                <td><?= $this->Number->format($doc->iddocumentacion) ?></td>
                                <td><?= h($doc->fecha->format('d-m-Y')) ?></td>
                                <td><?= h($doc->title) ?></td>
                                <td><?= h($doc->description) ?></td>

                                <?php if($doc->format == 'application/pdf'): ?>

                                    <td><?= $this->Html->image('pdf.png', ['pathPrefix' => '/img/icons/', 'class' => 'img',
                                            'style' => ['width: 30px; height: 30px'], 'url' => [
                                                'controller' => 'Documentacion',
                                                'action' => 'fileDownload',
                                                $doc->iddocumentacion
                                            ]]); ?></td>

                                <?php elseif($doc->format == 'application/vnd.openxmlformats-officedocument.wordprocessingml.document' ||
                                            $doc->format == 'application/msword'): ?>

                                    <td><?= $this->Html->image('word.png', ['pathPrefix' => '/img/icons/', 'class' => 'img',
                                            'style' => ['width: 30px; height: 30px'], 'url' => [
                                                'controller' => 'Documentacion',
                                                'action' => 'fileDownload',
                                                $doc->iddocumentacion
                                            ]]); ?></td>

                                <?php else : ?>
                                    <td><?= $this->Html->image('archivos.png', ['pathPrefix' => '/img/icons/', 'class' => 'img',
                                            'style' => ['width: 30px; height: 30px'], 'url' => [
                                                'controller' => 'Documentacion',
                                                'action' => 'fileDownload',
                                                $doc->iddocumentacion
                                            ]]); ?></td>
                                <?php endif; ?>



                                <td><?= $this->Number->format($doc->size / 1024)?></td>


                                <td class="actions">
                                    <div class="col-sm-12" style="margin-bottom: 5px;">
                                        <?= $this->Html->link(__('Editar'), ['action' => 'edit','?' =>
                                            ['Categoria' => 'Documentacion', 'Context' => 'Admin', 'id' => $doc->iddocumentacion]],
                                            ['class' => 'btn btn-block btn-sm btn-warning']) ?>
                                    </div>
                                    <div class="col-sm-12" style="margin-bottom: 5px;">
                                        <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $doc->iddocumentacion],
                                            ['confirm' => __('Eliminar el registro: {0}?', $doc->iddocumentacion),
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










