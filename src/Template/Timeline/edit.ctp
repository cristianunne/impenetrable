<?= $this->element('admin/header')?>


<section class="h-100" style="background-color: #F3F6FF; padding-bottom: 100px;">

    <?= $this->Flash->render() ?>

    <div class="row padding-10 py-5">
        <?= $this->Form->create($timeline) ?>
            <div class="col-lg-5 center-div">
                <div class="box landing-inte-back">
                <?=  $this->Html->image('eventos.svg', ['alt' => 'Eventos', 'class' => 'img-fluid img-landing-box wow zoomIn']); ?>
                    <div class="box-header">
                        <h5 class="box-title" style="color: rgb(0 38 6 / 96.3%);">Editar evento</h5>
                    </div>

                    <div class="box-body">

                        <div class="form-group login-form-gruop">
                            <label for="title" class="cols-sm-2 control-label fw-bold">Título: </label>
                            <?= $this->Form->input('title', ['class' => 'form-control',
                                'placeholder' => '', 'label' => false, 'required']) ?>
                        </div>
                        <br>

                        <div class="form-group login-form-gruop date-div">
                            <label for="fecha" class="cols-sm-2 control-label fw-bold">Fecha del evento: </label>
                            <?= $this->Form->date('fecha', ['class' => 'form-control',
                                'placeholder' => '', 'label' => false, 'required']) ?>
                        </div>
                        <br>
                        <div class="form-group login-form-gruop">
                            <label for="description" class="cols-sm-2 control-label fw-bold">Descripción: </label>
                            <?= $this->Form->textarea('description', ['rows' => '10', 'class' => 'form-control',
                                'placeholder' => '', 'required', 'id' => 'textarea']) ?>
                        </div>
                        </br>

                        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups" style="justify-content: flex-end !important;">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <?= $this->Html->link('Cancelar', ['controller' => 'Timeline', 'action' => 'index', 'Categoria' => 'Timeline', 'Context' => 'Admin'],
                                    ['class' => 'btn btn-secondary float-right', 'escape' => false]) ?>
                                <?= $this->Form->button('Editar', ['class' => 'btn btn-large btn-success float-right',
                                'id' => 'boton_submit']) ?>
                            </div>
                        </div>


                    </br>
                </div>
            </div>

        <?= $this->Form->end() ?>
    </div>


</section>

<?= $this->Html->script('validations.js') ?>
