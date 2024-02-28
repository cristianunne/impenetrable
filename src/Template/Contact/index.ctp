<?= $this->element('header')?>

<div class="container-xxl mb-5">

        <div class="row py-5 landing-inte-back">
            <div class="col-xs-5 col-md-5 col-lg-5 valign-center" style="text-align: center; display:table">
                <h1 class="title-hover wow zoomIn" style="vertical-align: middle; color: #198754; margin-top: 30%;">
                    Contacto
                </h1>

                <p class="wow zoomIn" style="vertical-align: middle; color: #198754;">
                    Desde aquí podrás comunicarte con nosotros.
                </p>

            </div>
            <div class="col-xs-7 col-md-7 col-lg-7 valign-center">
                <?=  $this->Html->image('contacto.svg', ['alt' => 'Contacto', 'class' => 'img-fluid img-landing-int wow zoomIn']); ?>
            </div>
        </div>

    </div>
<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container px-lg-5">
		 <div class="row justify-content-center">
		    <div class="col-lg-4 col-md-6 col-xs-12">
		    	<?= $this->Flash->render() ?>
		        <?= $this->Form->create($contact) ?>
		        <div class="form-group">
		            <?= $this->Form->label('name', __("Nombre {0}", '<span class="text-danger">*</span>'), ['data-toggle' => 'tooltip', 'title' => __('Campo requerido.'), 'escape' => false]) ?>
		            <?= $this->Form->input('name', ['class' => 'form-control', 'placeholder' => __("Nombre"), 'label' => false]) ?>
		        </div>
		        <div class="form-group">
		            <?= $this->Form->label('email', __("Email {0}", '<span class="text-danger">*</span>'), ['data-toggle' => 'tooltip', 'title' => __('Campo requerido.'), 'escape' => false]) ?>
		            <?= $this->Form->input('email', ['class' => 'form-control', 'placeholder' => __("Email"), 'label' => false]) ?>
		        </div>
		        <div class="form-group">
		        	<?= $this->Form->label('subject', __("Asunto {0}", '<span class="text-danger">*</span>'), ['data-toggle' => 'tooltip', 'title' => __('Campo requerido.'), 'escape' => false]) ?>
		            <?= $this->Form->input('subject', ['class' => 'form-control', 'placeholder' => __("Asunto"), 'label' => false]) ?>
		        </div>
		        <div class="form-group">
		            <?= $this->Form->label('body', __("Mensaje {0}", '<span class="text-danger">*</span>'), ['data-toggle' => 'tooltip', 'title' => __('Campo requerido.'), 'escape' => false]) ?>
		            <?= $this->Form->input('body', ['type' => 'textarea', 'class' => 'form-control', 'placeholder' => __("Escribe el mensaje..."), 'label' => false]) ?>
		        </div>
		        <?= $this->Form->button(__('{0}  Enviar', '<i class="fa fa-envelope"></i>'), ['class' => 'btn btn-block', 'style' => 'background-color: #198754; color:#ffffff;', 'escape' => false]) ?>
		        <?= $this->Form->end() ?>
		    </div>
		</div>
	</div>
</div>