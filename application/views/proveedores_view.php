<?php $this->load->view('header_view'); ?>
Proveedores en BeReseller.com
<hr />
<a href="<?php base_url();?>proveedores/nuevo/">Agregar nuevo proveedor</a>
<ul>
<?php foreach($proveedores as $proveedor):?>
	<li><?php echo $proveedor['nombre'];?> <a href="<?php base_url();?>proveedores/editar/<?php echo $proveedor['id'];?>">Editar</a> <a href="<?php base_url();?>proveedores/eliminar/<?php echo $proveedor['id'];?>">Eliminar</a></li>
<?php endforeach;?>
</ul>

<?php $this->load->view('footer_view'); ?>