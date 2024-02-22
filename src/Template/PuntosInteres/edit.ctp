<?= $this->Html->css('jquery-filestyle.css') ?>
<?= $this->element('admin/header')?>


<section class="h-100" style="background-color: #F3F6FF; padding-bottom: 100px;">

    <?= $this->Flash->render() ?>

    <div class="row padding-10 py-5">
        <?= $this->Form->create($puntosIntere, ['enctype' => 'multipart/form-data']) ?>
        <div class="col-lg-7 center-div">
            <div class="box">
                <div class="box-header">
                    <h5 class="box-title" style="color: rgb(0 38 6 / 96.3%);">Detalles del Punto de Interes</h5>
                </div>

                <div class="box-body">

                    <div class="form-group login-form-gruop">
                        <label for="title" class="cols-sm-2 control-label fw-bold">Nombre: </label>
                        <?= $this->Form->input('name', ['class' => 'form-control',
                            'placeholder' => '', 'label' => false, 'required']) ?>
                    </div>
                    <br>

                    <div class="form-group login-form-gruop">
                        <?= $this->Form->control('name_localidad', ['options' => $localidades,
                            'empty' => '(Elija una opción)', 'type' => 'select',
                            'class' => 'form-control', 'placeholder' => 'Localidad',
                            'label' => 'Localidad:', 'required']) ?>
                    </div>
                    <br>

                    <div class="form-group login-form-gruop">
                        <?= $this->Form->control('categorias_idcategorias', ['options' => $categorias,
                            'empty' => '(Elija una opción)', 'type' => 'select',
                            'class' => 'form-control', 'placeholder' => 'Categoria',
                            'label' => 'Categoria:', 'required']) ?>
                    </div>
                    <br>

                    <div class="form-group login-form-gruop">
                        <?= $this->Form->control('tipo_idtipo', ['options' => $tipo,
                            'empty' => '(Elija una opción)', 'type' => 'select',
                            'class' => 'form-control', 'placeholder' => 'Tipo',
                            'label' => 'Tipo:', 'required']) ?>
                    </div>
                    <br>
                    <div class="form-group login-form-gruop">
                        <?= $this->Form->control('subtipo_idsubtipo', ['options' => $subtipo,
                            'empty' => '(Elija una opción)', 'type' => 'select',
                            'class' => 'form-control', 'placeholder' => 'Subtipo',
                            'label' => 'Subtipo:', 'required']) ?>
                    </div>
                    <br>


                    <div class="form-group login-form-gruop">
                        <label for="description" class="cols-sm-2 control-label fw-bold">Resumen: </label>
                        <?= $this->Form->textarea('resumen', ['rows' => '10', 'cols' => '5', 'maxlength' => '500' , 'class' => 'form-control',
                            'placeholder' => '', 'required']) ?>
                    </div>
                    <br>


                    <div class="form-group login-form-gruop">
                        <label for="description" class="cols-sm-2 control-label fw-bold">Descripción: </label>
                        <?= $this->Form->textarea('description', ['rows' => '10', 'cols' => '5', 'class' => 'form-control',
                            'placeholder' => '']) ?>
                    </div>
                    <br>

                    <div class="form-group login-form-gruop">
                        <?= $this->Form->control('localidad', ['options' => $localidades_number,
                            'empty' => '(Elija una opción)', 'type' => 'select',
                            'class' => 'form-control', 'placeholder' => 'Id Localidad',
                            'label' => 'ID Localidad:', 'required']) ?>
                    </div>
                    <br>
                    <div class="form-group login-form-gruop">
                        <?= $this->Form->control('id_punto', ['options' => $array_POI_filter,
                            'empty' => '(Elija una opción)', 'type' => 'select', 'id' => 'poi_select',
                            'class' => 'form-control',
                            'label' => 'Punto de Interes:', 'required']) ?>
                    </div>

                    <br>

                    <label for="title" class="cols-sm-2 control-label fw-bold">Seleccione una imágen: </label>
                    <div class="">

                        <input type="file" name="file" class="jfilestyle" data-inputSize="403px !important" accept="image/png, image/gif, image/jpeg, image/jpg">
                    </div>

                    <div class="form-group m-0">
                        <?= $this->Form->button('Guardar', ['class' => 'btn btn-large btn-success float-right',
                            'id' => 'boton_submit']) ?>
                    </div>
                    </br>


                    </br>
                </div>
            </div>

            <?= $this->Form->end() ?>
        </div>


</section>

<?= $this->Html->script('validations.js') ?>
<?= $this->Html->script('jquery-filestyle.js') ?>
