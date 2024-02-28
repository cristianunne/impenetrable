

<link rel="stylesheet" type="text/css" href="../css/login/my-login.css">


<?= $this->element('admin/header')?>


<section class="h-100" style="background-color: #F3F6FF; padding-bottom: 100px;">
    <?= $this->Flash->render() ?>
    <div class="container h-100" style="padding-top: 100px;">

        <div class="row justify-content-md-center h-100">
            <div class="card-wrapper wow zoomIn">
                <div class="box landing-inte-back">
                <?=  $this->Html->image('usuarios.svg', ['alt' => 'Usuarios', 'class' => 'img-fluid img-landing-box wow zoomIn']); ?>

                <div class="card fat">
                    <div class="card-body">
                        <h4 class="card-title">Editar Usuario</h4>
                        <?= $this->Form->create($user, ['class' => 'my-login-validation']) ?>
                            <div class="form-group login-form-gruop">
                                <label for="firstname" class="cols-sm-2 control-label fw-bold">Nombre/s: </label>
                                <?= $this->Form->input ('firstname', ['class' => 'form-control', 'placeholder' => '',
                                    'label' => false, 'required']) ?>
                            </div>

                            <div class="form-group login-form-gruop">
                                <label for="lastname" class="cols-sm-2 control-label fw-bold">Apellido/s: </label>
                                <?= $this->Form->input ('lastname', ['class' => 'form-control', 'placeholder' => '',
                                    'label' => false, 'required']) ?>
                            </div>

                            <div class="form-group login-form-gruop">
                                <label for="email" class="cols-sm-2 control-label fw-bold">Email: </label>
                                <?= $this->Form->text('email', ['class' => 'form-control', 'placeholder' => 'Correo Electrónico', 'required']) ?>
                            </div>

                        <div class="form-group login-form-gruop">
                            <label for="password" class="cols-sm-2 control-label fw-bold">Rol de Usuario: </label>
                            <?= $this->Form->input('role', ['options' => $type_user, 'empty' => '(Elija una opción)', 'type' => 'select',
                                'class' => 'form-control', 'placeholder' => 'Tipo de Usuario', 'label' => false, 'required']) ?>

                        </div>

                            <div class="form-group login-form-gruop">
                                <label for="password" class="cols-sm-2 control-label fw-bold">Activo? </label>
                                <?= $this->Form->input('active', ['options' => [0 => 'No', 1 => 'Si'], 'empty' => '(Elija una opción)',
                                    'class' => 'form-control', 'placeholder' => 'Activo?', 'label' => false, 'required']) ?>

                            </div>


                            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups" style="justify-content: flex-end !important;">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <?= $this->Html->link('Cancelar', ['controller' => 'users', 'action' => 'view'], ['class' => 'btn btn-secondary']) ?>
                                    <?= $this->Form->button('Editar', ['class' => 'btn btn-success',
                                    'id' => 'boton_submit']) ?>
                                    <?= $this->Form->end() ?>
                                </div>
                            </div>
                            <?= $this->Form->end() ?>

                    </div>

                </div>


                <div class="footer">
                    Copyright &copy; 2022 &mdash; Instituto de Investigaciones Geohistóricas (IIGHI)
                </div>
            </div>
        </div>
    </div>
</section>



