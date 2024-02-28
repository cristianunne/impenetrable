
<?= $this->Html->css('jquery-filestyle.css') ?>




<?= $this->element('admin/header')?>


<section class="h-100" style="background-color: #F3F6FF; padding-bottom: 100px;">

    <?= $this->Flash->render() ?>

    <div class="row padding-10 py-5">
        <?= $this->Form->create($slider_home, ['enctype' => 'multipart/form-data']) ?>
        <div class="col-lg-5 center-div">
            <div class="box landing-inte-back">
                <?=  $this->Html->image('sliders.svg', ['alt' => 'Sliders', 'class' => 'img-fluid img-landing-box wow zoomIn']); ?>

                <div class="box-header">
                    <h5 class="box-title" style="color: rgb(0 38 6 / 96.3%);">Agregar nueva imagen al Slider</h5>
                </div>

                <div class="box-body">

                    <div class="form-group login-form-gruop">
                        <label for="title" class="cols-sm-2 control-label fw-bold">Título: </label>
                        <?= $this->Form->input('titulo', ['value' => '', 'class' => 'form-control',
                            'placeholder' => '', 'label' => false, 'required']) ?>
                    </div>
                    <br>
                    <div class="form-group login-form-gruop">
                        <label for="description" class="cols-sm-2 control-label fw-bold">Descripción: </label>
                        <?= $this->Form->textarea('descripcion', ['rows' => '10', 'class' => 'form-control',
                            'placeholder' => '', 'required', 'id' => 'textarea_add_image']) ?>
                    </div>
                    </br>

                    <div class="form-group login-form-gruop">
                        <label for="title" class="cols-sm-2 control-label fw-bold">Seleccione una imagen: </label>
                        <?= $this->Form->control('file', ['type' => 'file', 'class' => 'jfilestyle', 'label' => false, 'required',
                            'data-btnClass'=> 'btn-success', 'id' => 'btn_file']) ?>
                    </div>
                    <br>


                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups" style="justify-content: flex-end !important;">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <?= $this->Html->link('Cancelar', ['controller' => 'admin', 'action' => 'index'], ['class' => 'btn btn-secondary']) ?>
                            <?= $this->Form->button('Guardar', ['class' => 'btn btn-success', 'id' => 'boton_submit']) ?>
                        </div>
                    </div>
                </div>
            </div>
        <?= $this->Form->end() ?>
    </div>
</section>
<?= $this->Html->script('jquery-filestyle.js') ?>
<?= $this->Html->script('validations.js') ?>
