<?php $this->load->view('header_view'); ?>
<!--   LOGIN -->
<?php echo form_open('login/autenticar'); ?>
<table>
    <tr><td><?php echo form_label('E-mail', 'email'); ?></td>
        <td>

            <span><?php echo form_input(array('placeholder' => 'Email', 'tabindex' => '0', 'name' => 'email'), set_value('email')); ?></span>

            <span><?php echo form_error('email'); ?></span>

        </td></tr>
    <tr>
        <td><?php echo form_label('Contrase&ntilde;a', 'password'); ?></td>
        <td align="left"><?php echo form_password(array('placeholder' => 'Contrase&ntilde;a', 'tabindex' => '0', 'name' => 'password')); ?><?php echo form_error('password'); ?></td>
    </tr>
    <td></td>
    <td align="left">				
        <?php echo form_submit('submit', 'Ingresar'); ?>			
    </td></tr>
<tr><td align="left" colspan="2">				
        <a href="#">Olvidaste tu contrase&ntilde;a?</a>		
    </td></tr>
</table>

<?php echo form_close(); ?>

<?php $this->load->view('footer_view'); ?>