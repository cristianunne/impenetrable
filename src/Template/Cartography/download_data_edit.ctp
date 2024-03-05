<?= $this->Html->css('jquery-filestyle.css') ?>




<?= $this->element('admin/header')?>


    <section class="h-100" style="background-color: #F3F6FF; padding-bottom: 100px;">

        <?= $this->Flash->render() ?>

        <div class="row padding-10 py-5">
            <?= $this->Form->create($downloadData, ['Type' => 'file']) ?>
            <div class="col-lg-5 center-div">
                <div class="box landing-inte-back">
                <?=  $this->Html->image('centro_descargas.svg', ['alt' => 'Centro de Descarga', 'class' => 'img-fluid img-landing-box wow zoomIn']); ?>
                    <div class="box-header">
                        <h5 class="box-title" style="color: rgb(0 38 6 / 96.3%);">Editar Descarga</h5>
                    </div>

                    <div class="box-body">

                        <div class="form-group login-form-gruop">
                            <label for="geometria" class="cols-sm-2 control-label fw-bold">Geometría: </label>
                            <?= $this->Form->input('geometria', ['type' => 'select', 'multiple' => false, 'options' => ['Punto','Línea','Polígono'], 'empty' => true, 'class' => 'form-control form-select', 'label' => false]) ?>
                        </div>
                        <div class="form-group login-form-gruop">
                            <label for="nombre" class="cols-sm-2 control-label fw-bold">Nombre: </label>
                            <?= $this->Form->input('nombre', ['type' => 'text', 'class' => 'form-control', 'label' => false]) ?>
                        </div>

                        <div class="form-group login-form-gruop">
                            <label for="title" class="cols-sm-2 control-label fw-bold">Seleccione un archivo: </label>
                            <?= $this->Form->control('file', ['type' => 'file', 'class' => 'jfilestyle', 'label' => false,
                                'data-btnClass'=> 'btn-success', 'id' => 'btn_file']) ?>
                        </div>

                        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups" style="justify-content: flex-end !important;">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <?= $this->Html->link('Cancelar', ['controller' => 'Cartography', 'action' => 'downloadDataIndex', '?' => ['Categoria' => 'Cartography', 'Context' => 'Admin']],
                                    ['class' => 'btn btn-secondary float-right', 'escape' => false]) ?>
                                <?= $this->Form->button('Editar', ['class' => 'btn btn-large btn-success float-right',
                                'id' => 'boton_submit']) ?>
                            </div>
                        </div>
                    </div>
                </div>

                <?= $this->Form->end() ?>
            </div>
        </div>

    </section>
<?= $this->Html->script('jquery-filestyle.js') ?>
<?= $this->Html->script('validations.js') ?>
