<?= $this->element('admin/header')?>


<section class="h-100" style="background-color: #F3F6FF; padding-bottom: 100px;">

    <?= $this->Flash->render() ?>

    <div class="row padding-10 py-5">
        <?= $this->Form->create($novedades) ?>
            <div class="col-lg-5 center-div">
                <div class="box landing-inte-back">
                <?=  $this->Html->image('productos.svg', ['alt' => 'Productos', 'class' => 'img-fluid img-landing-box wow zoomIn']); ?>
                    <div class="box-header">
                        <h5 class="box-title" style="color: rgb(0 38 6 / 96.3%);">Editar Artesano, Producto y Servicio</h5>
                    </div>

                    <div class="box-body">

                        <div class="form-group login-form-gruop">
                            <label for="nombre" class="cols-sm-2 control-label fw-bold">Nombre: </label>
                            <?= $this->Form->input('nombre', ['class' => 'form-control', 'label' => false, 'required']) ?>
                        </div>
                        <div class="form-group login-form-gruop">
                            <label for="producto" class="cols-sm-2 control-label fw-bold">Producto: </label>
                            <?= $this->Form->input('producto', ['class' => 'form-control', 'label' => false, 'required']) ?>
                        </div>
                        <div class="form-group login-form-gruop">
                            <label for="direccion" class="cols-sm-2 control-label fw-bold">Dirección: </label>
                            <?= $this->Form->input('direccion', ['class' => 'form-control', 'label' => false, ]) ?>
                        </div>
                        <div class="form-group login-form-gruop">
                            <label for="telefono" class="cols-sm-2 control-label fw-bold">Teléfono: </label>
                            <?= $this->Form->input('telefono', ['class' => 'form-control','label' => false, ]) ?>
                        </div>
                        <div class="form-group login-form-gruop">
                            <label for="email" class="cols-sm-2 control-label fw-bold">Email: </label>
                            <?= $this->Form->input('email', ['class' => 'form-control', 'label' => false, ]) ?>
                        </div>
                        <div class="form-group login-form-gruop">
                            <label for="instagram" class="cols-sm-2 control-label fw-bold">Instagram: </label>
                            <?= $this->Form->input('instagram', ['class' => 'form-control', 'label' => false, ]) ?>
                        </div>
                        <div class="form-group login-form-gruop">
                            <label for="facebook" class="cols-sm-2 control-label fw-bold">Facebook: </label>
                            <?= $this->Form->input('facebook', ['class' => 'form-control', 'label' => false, ]) ?>
                        </div>
                        <div class="form-group login-form-gruop">
                            <label for="web" class="cols-sm-2 control-label fw-bold">Sitio web: </label>
                            <?= $this->Form->input('web', ['class' => 'form-control', 'label' => false, ]) ?>
                        </div>
                        <div class="form-group login-form-gruop">
                            <label for="title" class="cols-sm-2 control-label fw-bold">Seleccione una imágen: </label>
                            <?= $this->Form->input('foto_dir', ['class' => 'form-control', 'label' => false ]) ?>
                            <div class="my-4 text-center">
                            <?= $this->Html->image($novedades->foto_dir, ['heigth' => '90', 'width' => '90']) ?>
                            </div>
                        </div>

                        <div class="form-group login-form-gruop">
                        <label for="title" class="cols-sm-2 control-label fw-bold">Seleccione una imagen: </label>
                        <?= $this->Form->control('foto_dir', ['type' => 'file', 'class' => '', 'label' => false,
                            'data-btnClass'=> 'btn-success', 'id' => 'btn_file']) ?>
                    </div>


                        <div class="form-group login-form-gruop">
                        <label for="localidad" class="cols-sm-2 control-label fw-bold">Localidad: </label>
                        <?= $this->Form->input('localidad', ['class' => 'form-control', 'label' => false, 'required']) ?>
                        </div>
                        <!--<div class="form-group login-form-gruop">
                        <?= $this->Form->control('localidad', ['options' => $localidades_number,
                            'empty' => '(Elija una opción)', 'type' => 'select', 'id' => 'name_localidad',
                            'class' => 'form-control', 'placeholder' => 'Id Localidad', 'onchange' => 'getPOI(this)',
                            'label' => 'ID Localidad:', 'required']) ?>
                        </div>
                        <br>-->
                        <div class="form-group login-form-gruop">
                            <label for="color" class="cols-sm-2 control-label fw-bold">Color: </label>
                            <div class="row">
                                <div class="col-6">
                                    <?= $this->Form->input('color', ['id' => 'color', 'class' => 'form-control', 'label' => false, ]) ?>
                                </div>
                                <div class="col-6">
                                    <div id="colorpicker"></div>
                                </div>
                            </div>
                        </div>

                        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups" style="justify-content: flex-end !important;">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <?=  $this->Html->link('Cancelar', ['controller' => 'Novedades', 'action' => 'view', '?' => ['Categoria' => 'Novedades', 'Context' => 'Admin']],
                                ['class' => 'btn btn-secondary float-right', 'escape' => false]); ?>
                            <?= $this->Form->button('Editar', ['class' => 'btn btn-large btn-success float-right',
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
