
<?= $this->Html->css('jquery-filestyle.css') ?>
<?= $this->element('admin/header')?>


<section class="h-100" style="background-color: #F3F6FF; padding-bottom: 100px;">

    <?= $this->Flash->render() ?>

    <div class="row padding-10 py-5">
        <?= $this->Form->create($subtipo, ['enctype' => 'multipart/form-data']) ?>
        <div class="col-lg-7 center-div">
            <div class="box">
                <div class="box-header">
                    <h5 class="box-title" style="color: rgb(0 38 6 / 96.3%);">Detalles del Subtipo</h5>
                </div>

                <div class="box-body">

                    <div class="form-group login-form-gruop">
                        <label for="title" class="cols-sm-2 control-label fw-bold">Nombre: </label>
                        <?= $this->Form->input('name', ['class' => 'form-control',
                            'placeholder' => '', 'label' => false, 'required']) ?>
                    </div>
                    <br>

                    <label for="title" class="cols-sm-2 control-label fw-bold">Seleccione una imágen: </label>
                    <div class="">
                        <input type="file" name="file" class="jfilestyle" data-inputSize="403px !important" accept="image/*">
                    </div>

                    </br>
                    <div class="form-group m-0">
                        <?= $this->Form->button('Guardar', ['class' => 'btn btn-large btn-success float-right',
                            'id' => 'boton_submit']) ?>
                    </div>
                    </br>



                </div>
            </div>

            <?= $this->Form->end() ?>
        </div>


</section>

<?= $this->Html->script('validations.js') ?>
<?= $this->Html->script('jquery-filestyle.js') ?>
