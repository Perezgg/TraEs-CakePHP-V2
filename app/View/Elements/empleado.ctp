<div class="col-md-6">
	<div class="unit">
       <div class="col-md-4 col-sm-6 col-xs-12 thumbnail text-center">
            <?php echo $this->Html->image('../files/empleado/foto/' . $empleado['Empleado']['foto_dir'] . '/' . 'thumb_' .$empleado['Empleado']['foto'], array('class' => 'img-responsive img-rounded img-thumbnail')); ?>
       </div>
       <span class="name"><span class="glyphicon glyphicon-user"></span> <?php echo $empleado['Empleado']['apellidos'].' '.$empleado['Empleado']['nombres']; ?></span><br/>
       <span class="text"><span class="glyphicon glyphicon-earphone"></span> <?php echo $empleado['Empleado']['telefono_nro']; ?></span><br/>
       <span class="text"><span class="glyphicon glyphicon-envelope"></span> <?php echo $this->Html->link($empleado['Empleado']['email'],'mailto:'.$empleado['Empleado']['email']); ?></span><br/>
       <span class="text"><span class="glyphicon glyphicon-map-marker"></span> <?php echo $empleado['Empleado']['ciudad']; ?><br/>
       <hr />
       <div class="text-right"> 
           <span class="link"><?php echo $this->Html->link('<i class="glyphicon glyphicon-edit"></i>', array('controller' => 'empleados', 'action' => 'edit', $empleado['Empleado']['id']), array('class' => 'btn btn-warning', 'escape' => false)); ?></span>
           <span class="link"><?php echo $this->Html->link('<i class="glyphicon glyphicon-eye-open"></i>', array('controller' => 'empleados', 'action' => 'view', $empleado['Empleado']['id']), array('class' => 'btn btn-success', 'escape' => false)); ?></span>
           <span class="link"><?php echo $this->Html->link('<i class="glyphicon glyphicon-trash"></i>', array('controller' => 'empleados', 'action' => 'delete', $empleado['Empleado']['id']), array('class' => 'btn btn-danger', 'escape' => false)); ?></span>
	   </div>
	</div>
</div>