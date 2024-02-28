<?= $this->element('admin/header')?>


<section class="h-100" style="background-color: #F3F6FF; padding-bottom: 100px;">

    <?= $this->Flash->render() ?>

    <div class="row padding-10 py-5">
        <?= $this->Form->create($localidad) ?>
        <div class="col-lg-5 center-div">
            <div class="box landing-inte-back">
                <?=  $this->Html->image('localidad.svg', ['alt' => 'Localidad', 'class' => 'img-fluid img-landing-box wow zoomIn']); ?>
                <div class="box-header">
                    <h5 class="box-title" style="color: rgb(0 38 6 / 96.3%);">Editar de la Localidad</h5>
                </div>

                <div class="box-body">

                    <div class="form-group login-form-gruop">
                        <label for="title" class="cols-sm-2 control-label fw-bold">Nombre: </label>
                        <?= $this->Form->input('nombre', ['class' => 'form-control',
                            'placeholder' => '', 'label' => false, 'required']) ?>
                    </div>
                    <br>

                    <div class="form-group login-form-gruop">
                        <label for="description" class="cols-sm-2 control-label fw-bold">Descripción: </label>
                        <?= $this->Form->textarea('descripcion', ['rows' => '10', 'cols' => '5', 'maxlength' => '100000' , 'class' => 'form-control',
                            'placeholder' => '', 'required']) ?>
                    </div>
                    <br>

                    <div class="form-group login-form-gruop">
                        <label for="title" class="cols-sm-2 control-label fw-bold">Id Localidad Icon: </label>
                        <?= $this->Form->input('id_loc_icon', ['type' => 'number', 'class' => 'form-control',
                            'placeholder' => '', 'label' => false, 'required']) ?>
                    </div>

                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups" style="justify-content: flex-end !important;">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <?=  $this->Html->link('Cancelar', ['controller' => 'Localidades', 'action' => 'index', '?' => ['Categoria' => 'Mapainteractive', 'Context' => 'Admin']],
                                ['class' => 'btn btn-secondary float-right', 'escape' => false]); ?>
                        <?= $this->Form->button('Guardar', ['class' => 'btn btn-large btn-success float-right',
                            'id' => 'boton_submit']) ?>
                        </div>
                    </div>
                    </br>

                    </br>
                </div>
            </div>

            <?= $this->Form->end() ?>
        </div>


</section>

<?= $this->Html->script('validations.js') ?>
