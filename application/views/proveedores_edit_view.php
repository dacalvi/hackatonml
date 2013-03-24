<?php $this->load->view('header_view'); ?>
<?php echo form_open('proveedores/editarSave/'.$this->uri->segment(3)); ?>
	<table width="500px">
	
	
	<tr>
		<td width="164"><?php echo form_label('Nombre:', 'nombre');?></td>
		<td width="324">
			<div style="float:left;"><?php echo form_input('nombre', $nombre);?></div>
			<div id="error"><?php echo form_error('nombre'); ?>*</div>	
		</td>
	</tr>
	
	<tr>
		<td width="164"><?php echo form_label('Direccion:', 'direccion');?></td>
		<td width="324">
			<div style="float:left;"><?php echo form_input('direccion', $direccion);?></div>
			<div id="error"><?php echo form_error('direccion'); ?>*</div>	
		</td>
	</tr>
	
	<tr><td colspan=" 2"><?php echo form_submit('Guardar Proveedor', 'Guardar');?></td></tr>
	</table>
<?php echo form_close();?>
<?php $this->load->view('footer_view'); ?>