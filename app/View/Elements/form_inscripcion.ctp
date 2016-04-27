<?php echo $this->Html->script(array('tooltip', 'datepicker', 'moment', 'bootstrap-datetimepicker')); ?>
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<div class="row">
	<div class="col-xs-6 col-sm-3">
	    <?php echo $this->Form->input('created', array('label' => 'Creado*', 'id' => 'datetimepicker1', 'type' => 'text', 'class' => 'input-group date', 'class' => 'form-control', 'span class' => 'fa fa-calendar')); ?>
    </div>
    <div class="col-xs-6 col-sm-3">
    	<?php echo $this->Form->input('empleado_id', array('label'=>'Agente*', 'empty' => 'Ingrese un empleado...', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción')); ?>
    </div>
</div><hr />
<div class="row">
	<div class="col-md-4 col-sm-6 col-xs-12">
		 <div class="unit"><strong><h3>Datos Generales</h3></strong><hr />
			  <?php 
                  echo $this->Form->input('ciclo_id', array('label' => 'Ciclo*', 'empty' => 'Ingrese un ciclo...', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción'));
                  echo $this->Form->input('centro_id', array('label'=>'Centro*', 'default' => 'CPLA', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción'));
                  echo $this->Form->input('Curso', array('label'=>'Curso*', 'empty' => 'Ingrese un curso...', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción'));
                  echo $this->Form->input('Materia', array('label'=>'Materia*', 'empty' => 'Ingrese una materia...', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción'));
                  echo $this->Form->input('alumno_id', array('label'=>'Alumno*', 'empty' => 'Ingrese un alumno...', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción'));
                  echo $this->Form->input('legajo_nro', array('label'=>'Legajo N°*', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Ingrese un nº de legajo', 'Placeholder' => 'Ingrese un nº de legajo...'));
              ?>
         </div>
    <?php echo '</div><div class="col-md-4 col-sm-6 col-xs-12">'; ?>
         <div class="unit"><strong><h3>Datos del Alta</h3></strong><hr />      
			 <?php
                  $tipos_alta = array('Regular' => 'Regular', 'Equivalencia'=>'Equivalencia');
                  echo $this->Form->input('tipo_alta', array('label' => 'Alta tipo*', 'empty' => 'Ingrese un vinculo...', 'options' => $tipos_alta, 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción'));
                  echo $this->Form->input('fecha_alta', array('label' => 'Fecha de Alta*', 'type' => 'text', 'between' => '<br>', 'class' => 'datepicker form-control', 'Placeholder' => 'Ingrese una fecha...'));
                  $condiciones_aprobacion = array('Promocion directa' => 'Promocion directa', 'Examen regular' => 'Examen regular', 'Examen libre' => 'Examen libre', 'Examen de reválida' => 'Examen de reválida', 'Equivalencia' => 'Equivalencia', 'Saberes adquiridos' => 'Saberes adquiridos');
                  echo $this->Form->input('condicion_aprobacion', array('label' => 'Condición de aprobación', 'options' => $condiciones_aprobacion, 'empty' => 'Ingrese una opción...', 'between' => '<br>', 'class' => 'form-control'));
                  $tipos_recursante = array('Si' => 'Si', 'No' => 'No');
                  echo $this->Form->input('recursante', array('options' => $tipos_recursante, 'empty' => '', 'between' => '<br>', 'class' => 'form-control'));	
                  $tipos_cursa = array('Cursa algun espacio curricular.' => 'Cursa algun espacio curricular.', 'Sólo se inscribe a rendir final.' => 'Sólo se inscribe a rendir final.');
                  echo $this->Form->input('cursa', array('label' => 'Cursa*', 'empty' => 'Ingrese una opción...', 'options' => $tipos_cursa, 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción'));
                  $tipos_fines = array('No' => 'No', 'Sí línea deudores de materias.' => 'Sí línea deudores de materias.', 'Sí línea trayectos educativos.' => 'Sí línea   trayectos educativos.');
                  echo $this->Form->input('fines', array('label' => 'Fines*', 'empty' => 'Ingrese una opción...', 'options' => $tipos_fines, 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción')); ?>
          </div>        
    <?php echo '</div><div class="col-md-4 col-sm-6 col-xs-12">'; ?>
          <div class="unit"><strong><h3>Datos de la Baja/Egreso</h3></strong><hr />   
			  <?php
                  echo $this->Form->input('fecha_baja', array('label' => 'Fecha de Baja', 'type' => 'text', 'between' => '<br>', 'empty' => ' ','class' => 'datepicker form-control', 'Placeholder' => 'Ingrese una fecha...'));
                  $tipos_baja = array('Salido con pase' => 'Salido con pase', 'Salido sin pase' => 'Salido sin pase', 'Pérdida de regularidad' => 'Pérdida de regularidad',       'Fallecimiento' => 'Fallecimiento');
                  echo $this->Form->input('tipo_baja', array('label' => 'Baja tipo', 'empty' => 'Ingrese una opción...', 'options' => $tipos_baja, 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción'));
                  $motivos_baja = array('Mudanza de la familia' => 'Mudanza de la familia', 'Pasó a educación de jóvenes y adultos' => 'Pasó a educación de jóvenes y adultos', 'Pasó a educación especial' => 'Pasó a educación especial', 'No le gustaba la escuela' => 'No le gustaba la escuela', 'Tenía muchas materias previas' => 'Tenía muchas materias previas', 'Problemas disciplinarios' => 'Problemas disciplinarios',  'Decisión de la escuela' => 'Decisión de la escuela', 'Problemas de salud' =>  'Problemas de salud', 'Cambio en la situación económica' => 'Cambio en la situación económica', 'Comenzó a trabajar' => 'Comenzó a trabajar', 'Quedó embarazada' => 'Quedó embarazada', 'Debe colaborar en la casa' => 'Debe colaborar en la casa');
                  echo $this->Form->input('motivo_baja', array('label' => 'Motivo de baja', 'empty' => 'Ingrese una opción...', 'options' => $motivos_baja, 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción'));
                  echo $this->Form->input('fecha_egreso', array('label' => 'Fecha de egreso', 'type' => 'text', 'between' => '<br>', 'empty' => ' ','class' => 'datepicker form-control', 'Placeholder' => 'Ingrese una fecha...'));
                  echo $this->Form->input('fecha_emision_titulo', array('label' => 'Fecha de emisión del título', 'type' => 'text', 'between' => '<br>', 'empty' => ' ','class' => 'datepicker form-control', 'Placeholder' => 'Ingrese una fecha...'));
                  echo $this->Form->input('nota', array('label' => 'Nota Final', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Ingrese la nota final', 'Placeholder' => 'Ingrese una nota...'));
                  echo $this->Form->input('acta_nro', array('label' => 'Acta Nº', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Ingrese un nº de acta', 'Placeholder' => 'Ingrese un nº de acta...'));
                  echo $this->Form->input('libro_nro', array('label' => 'Libro Nº', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Ingrese un nº de libro', 'Placeholder' => 'Ingrese un nº de libro...'));
                  echo $this->Form->input('folio_nro', array('label' => 'Folio Nº', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Ingrese un nº de folio', 'Placeholder' => 'Ingrese un nº de folio...'));
               ?>
          </div> 
     </div>
     <div class="col-md-12 col-sm-6 col-xs-12">
         <?php echo $this->Form->input('observaciones', array('label'=>'Observaciones', 'type' => 'textarea', 'between' => '<br>', 'class' => 'form-control')); ?>
     </div>
     <script type="text/javascript">
            $('#datetimepicker1').datetimepicker({ 
			useCurrent: true, //this is important as the functions sets the default date value to the current value
			format: 'YYYY-MM-DD hh:mm',
			}).on('dp.change', function (e) {
                  var specifiedDate = new Date(e.date);
				  if (specifiedDate.getMinutes() == 0)
				  {
					  specifiedDate.setMinutes(1);
					  $(this).data('DateTimePicker').date(specifiedDate);
				  }
               });
     </script>
     <script>tinymce.init({ selector:'textarea' });</script>
</div>
