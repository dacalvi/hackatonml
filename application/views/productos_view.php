<?php $this->load->view('header_view'); ?>
Productos en Bereseller
<hr />
<ul>
<?php foreach($productos as $producto):?>
	<li><?php echo $producto['title'];?> <a href="<?php base_url();?>productos/editar/<?php echo $producto['id'];?>">Editar</a> <a href="<?php base_url();?>productos/eliminar/<?php echo $producto['id'];?>">Eliminar</a></li>
<?php endforeach;?>
</ul>
<br/>
Productos en MercadoLibre
<hr />
<ul>
<?php foreach($itemsMeli as $itemMeli):?>
	<li>
	<?php foreach($itemMeli['pictures'] as $pic):?>
		<img width="150" height="150" src="<?php echo $pic->url; ?>" />
	<?php endforeach;?>
	<?php echo $itemMeli['title'];?> <a href="<?php base_url();?>productos/editar/<?php echo $producto['id'];?>">Editar</a> <a href="<?php base_url();?>productos/eliminar/<?php echo $producto['id'];?>">Eliminar</a></li>
<?php endforeach;?>
</ul>
<?php $this->load->view('footer_view'); ?>