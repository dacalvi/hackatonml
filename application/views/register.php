<?php $this->load->view('header_view'); ?>
	<div id="page" class="container">
		<div id="three-column">
            <div id="det_titulo">
            	<h1>Registrate</h1>
            </div>
			<?php //echo validation_errors();?>
			<div style="clear:both; font-size:14px;">Completa tus datos perosnales para el registro de usuarios y podrás iniciar tus ventas.</div>
			<div id="text_us">
				<?php echo form_open('register/registerAction'); ?>
					<table width="500px">
					
					
					<tr>
						<td width="164"><?php echo form_label('Nombre:', 'nombre');?></td>
						<td width="324">
							<div style="float:left;"><?php echo form_input('nombre', set_value('nombre'));?></div>
							<div id="error"><?php echo form_error('nombre'); ?>*</div>	
						</td>
					</tr>
					
					<tr>
						<td width="164"><?php echo form_label('Apellido:', 'apellido');?></td>
						<td width="324">
							<div style="float:left;"><?php echo form_input('apellido', set_value('apellido'));?></div>
							<div id="error"><?php echo form_error('apellido'); ?>*</div>	
						</td>
					</tr>
					
					<tr>
						<td width="164"><?php echo form_label('E-mail:', 'email');?></td>
						<td width="324">
							<div style="float:left;"><?php echo form_input('email', set_value('email'));?></div>
							<div id="error"><?php echo form_error('email'); ?>*</div>	
						</td>
					</tr>
					<tr>
						<td width="164"><?php echo form_label('Contraseña:', 'password');?></td>
						<td width="324">
							<div style="float:left;"><?php echo form_password('password', set_value('password'));?></div>
							<div id="error"><?php echo form_error('password'); ?>*</div>	
						</td>
					</tr>
					
					<tr>
						<td width="164"><?php echo form_label('Repetir contraseña:', 'repassword');?></td>
						<td width="324">
							<div style="float:left;"><?php echo form_password('repassword', set_value('repassword'));?></div>
							<div id="error"><?php echo form_error('repassword'); ?>*</div>	
						</td>
					</tr>

					<tr>
						<td width="164"><?php echo form_label('Fecha de nacimiento:', 'fecha_nacimiento');?></td>
						<td width="324">
							<div style="float:left;">
							
							<?php echo form_input(
							array(
							'id'=>'fecha_nacimiento',
							'name'=>'fecha_nacimiento',
							'value' => set_value('fecha_nacimiento')
							)
							);?>
							</div>
							<div id="error"><?php echo form_error('fecha_nacimiento'); ?>*</div>	
						</td>
					</tr>
					
					<tr>
						<td width="164"><?php echo form_label('Teléfono celular:', 'movil');?></td>
						<td width="324">
							<div style="float:left;"><?php echo form_input('movil', set_value('movil'));?></div>
							<div id="error"><?php echo form_error('movil'); ?>*</div>	
						</td>
					</tr>

					<tr>
						<td width="164"><?php echo form_label('Ciudad:', 'ciuadd');?></td>
						<td width="324">
							<div style="float:left;"><?php echo form_input('ciudad', set_value('ciudad'));?></div>
							<div id="error"><?php echo form_error('ciudad'); ?>*</div>	
						</td>
					</tr>

					<tr>
						<td width="164"><?php echo form_label('Sexo:', 'sexo');?></td>
						<td width="324">
							<div style="float:left;"><?php echo form_dropdown('sexo', array('h'=>'Hombre', 'm'=>'Mujer'))?></div>
							<div id="error"><?php echo form_error('sexo'); ?>*</div>	
						</td>
					</tr>

					<tr>
						<td width="164"><?php echo form_label('Cedula/ID numero:', 'dni');?></td>
						<td width="324">
							<div style="float:left;"><?php echo form_input('dni', set_value('dni'));?></div>
							<div id="error"><?php echo form_error('dni'); ?>*</div>	
						</td>
					</tr>
					
					<tr>
						<td width="164"><?php echo form_label('Deseo recibir el newsletter de Compra de Todo:', 'newsletter');?></td>
						<td width="324">
							<div style="float:left;">
							
								 <input type="checkbox" name="newsletter" value="si" checked="true" />  
							
								
							</div>
							<div id="error"><?php //echo form_error('newsletter'); ?></div>	
						</td>
					</tr> 
					
					<tr><td colspan=" 2"><?php echo form_submit('Registrarme', 'Registrarme');?></td></tr>
					</table>
				<?php echo form_close();?>
            </div>
            <div id="lateral"></div>     
        </div>
	</div>
	<div style="clear:both"></div>
	<script>
	$(document).ready(function(){
		$("#fecha_nacimiento").datepicker();
	});
	</script>
<?php $this->load->view('footer_view'); ?>