

<link rel="stylesheet" type="text/css" href="../css/login/my-login.css">
<?= $this->element('header')?>

<section class="h-100" style="background-color: #F3F6FF; padding-bottom: 100px;">
    <?= $this->Flash->render() ?>
    <div class="container h-100" style="padding-top: 100px;">

        <div class="row justify-content-md-center h-100">
            <div class="card-wrapper wow zoomIn">
            <?= $this->Html->image('logo-impenetrable.png',array('alt' => 'logo', 'class' => 'w-100 p-3')); ?>

                <div class="card fat">
                    <div class="card-body">
                        <h4 class="card-title">Iniciar Sesión</h4>
                        <?= $this->Form->create(null, ['class' => 'my-login-validation']) ?>
                            <div class="form-group login-form-gruop">
                                <?= $this->Form->text('email', ['class' => 'form-control', 'placeholder' => 'Correo Electrónico', 'required']) ?>

                            </div>

                        <div class="form-group login-form-gruop" >
                            <?= $this->Form->password('password', ['class' => 'form-control',
                                'placeholder' => 'Contraseña', 'required', 'type' => 'password']) ?>
                        </div>

                        <div class="form-group m-0">
                            <?= $this->Form->button('Acceder', ['class' => 'btn btn-large btn-success btn-block']) ?>
                        </div>
                        <?= $this->Form->end() ?>

                        <div class="mt-4 text-center">
                            No tienes una cuenta?
                            <?= $this->Html->link('Crear una',
                                ['controller' => 'Users', 'action' => 'register', '?' =>
                                    ['Accion' => 'Editar Museos', 'Categoria' => 'Museos', 'Tabla_name' => 'Museos']]) ?>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </div>
</section>

