<?php $this->load->view('header_view'); ?>

            <!-- HOME -->
            <div class="row-fluid">

                <!-- PHONES IMAGE FOR DESKTOP MEDIA QUERY -->
                <div class="span5 visible-desktop">
                    <img src="img/demo.png">
<?php echo form_open('login/autenticar'); ?>
<table>
    <tr>
        <td><?php echo form_label('E-mail', 'email'); ?></td>
        <td>
            <span><?php echo form_input(array('placeholder' => 'Email', 'tabindex' => '0', 'name' => 'email'), set_value('email')); ?></span>

            <span><?php echo form_error('email'); ?></span>

        </td>
    </tr>
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
                </div>

                <!-- APP DETAILS -->
                <div class="span7">

                    <!-- ICON -->
                    <div class="visible-desktop" id="icon">
                        <img src="img/app_icon.png" />
                    </div>

                    <!-- APP NAME -->
                    <div id="app-name">
                        <h1>BeReseller<span>.com</span></h1>
                    </div>

                    <!-- VERSION -->
                    <div id="version">
                        <span class="version-top label label-inverse">Version 1.0</span>
                    </div>

                    <!-- TAGLINE -->
                    <div id="tagline">El sitio para los vendedores profesionales y los no tanto</div>

                    <!-- PHONES IMAGE FOR TABLET MEDIA QUERY -->
                    <div class="hidden-desktop" id="phones">
                        <img src="img/phones.png">
                    </div>

                    <!-- DESCRIPTION -->
                    <div id="description">
                        Crear y reclutar vendedores para las Esta es la mejor aplicación para ayudar a los vendededores a vender productos por Web.
                        Fomentamos al trabajador independiente y el trabajo desde casa.
                    </div>

                    <!-- FEATURES -->
                    <ul id="features">
                        <li>Enorme simplicidad</li>
                        <li>Ayuda integral</li>
                        <li>Administración de comisiones</li>
                        <li>Simplificación de pagos y cuentas</li>
                        <li>Venderas tus servicios de gestión de productos</li>
                        <li>Integración con otros sistemas</li>
                        <!-- <li>MultiSitio</li> Era mentira solo ML-->
                        <li>Administración de productos en Mercado Libre</li>
                        <li>Manejo de Fuerza de ventas</li>
                    </ul>

                    <!-- DOWNLOAD & REQUIREMENT BOX -->
                    <div class="download-box">
                        <a href="#"><img src="img/logo_vendedores.png"></a>
                    </div>
                    <div class="download-box">
                        <a href="#"><img src="img/logo_dis.png"></a>
                    </div>
                    <div class="download-box">
                        <strong>Beneficios:</strong><br>
                        Podrán agregar valor a su servicio utilizando nuestros servicios de templates, personalizando.
                    </div>
                    <div class="download-box">
                        <strong>Beneficios:</strong><br>
                        Podrán utilizar su experiencia para traer importadores, fabricas, artesanos y hacerlos sus clientes. <br>
                        Existe una gran oportunidad para traer a LOs proveedores que hoy no estan en la web.
                    </div>

                </div>
            </div>



            <!-- ABOUT & UPDATES -->
            <div class="row-fluid" id="about">

                <div class="span6">
                    <h2 class="page-title" id="scroll_up">Nosotros<a href="#home" class="arrow-top"><img src="img/arrow-top.png"></a>
                    </h2>
                    <p>Te ofrecemos un conjunto de herramientas con el objetivo de crear trabajadores profesionales en Internet.
                    </p>
                    <p>Nuestras soluciones incluyen los pagos, la administración de los usuarios, y de los revendedores.
                    </p> 
                </div>

                <div class="span6 updates" id="updates">
                    <h2 class="page-title" id="scroll_up">
                        Soluciones 
                        <a href="#home" class="arrow-top">
                            <img src="img/arrow-top.png">
                        </a>
                    </h2>

                    <!-- UPDATES & RELEASE NOTES -->
                    <h3 class="version">Diseñadores y Programadores</h3>
                    <ul>
                        <li><span class="label new">Nuevo</span>Challenge a Friend</li>
                        <li><span class="label new">Nuevo</span>Facebook & Twitter Integracion</li>
                        <li><span class="label fix">>></span>Templates Personalizados</li>
                        <li><span class="label fix">>></span>Sitio con dominio Propio</li>
                    </ul>
                    <hr>

                    <h3 class="version">Vendedores tradicionales</h3>
                    <ul>
                        <li><span class="label fix">>></span>Soluciones muy simples para vender en pocos minutos</li>
                        <li><span class="label fix">>></span>Soporte integral</li>
                        <li><span class="label fix">>></span>Personalización de acuerdo al cliente</li>
                        <li><span class="label fix">>></span>Staff técnico para ayuda</li>
                    </ul>
                    <hr>
                </div>

            </div>



            <!-- SCREENSHOTS -->
            <div class="row-fluid" id="screenshots">

                <h2 class="page-title" id="scroll_up">
                    Screenshots
                    <a href="#home" class="arrow-top">
                        <img src="img/arrow-top.png">
                    </a>
                </h2>

                <!-- SCREENSHOT IMAGES ROW 1-->
                <ul class="thumbnails">
                    <li class="span3">
                        <a href="img/screenshot.jpg" rel="gallery" class="thumbnail">
                            <img src="img/screenshot.jpg" alt="">
                        </a>
                    </li>

                    <li class="span3">
                        <a href="img/screenshot.jpg" rel="gallery" class="thumbnail">
                            <img src="img/screenshot.jpg" alt="">
                        </a>
                    </li>

                    <li class="span3">
                        <a href="img/screenshot.jpg" rel="gallery" class="thumbnail">
                            <img src="img/screenshot.jpg" alt="">
                        </a>
                    </li>

                    <li class="span3">
                        <a href="img/screenshot.jpg" rel="gallery" class="thumbnail">
                            <img src="img/screenshot.jpg" alt="">
                        </a>
                    </li>
                </ul>	

            </div>



            <!-- CONTACT -->
            <div class="row-fluid" id="contact">

                <h2 class="page-title" id="scroll_up">
                    Contactenos
                    <a href="#home" class="arrow-top">
                        <img src="img/arrow-top.png">
                    </a>
                </h2>

                <!-- CONTACT INFO -->
                <div class="span4" id="contact-info">
                    <h3>Contact Us</h3>
                    <p>BeReseller se comunicara con usteded a la brevedad
                    </p>
                    <p><a href="mailto:contacto@bereseller.com">contacto@bereseller.com</a></p>
                </div>

                <!-- CONTACT FORM -->
                <div class="span7" id="contact-form">
                    <form class="form-horizontal">
                        <fieldset>
                            <div class="control-group">
                                <label class="control-label" for="name">Nombre</label>
                                <div class="controls">
                                    <input class="input-xlarge" type="text" id="name" placeholder="John Doe">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="email">Email</label>
                                <div class="controls">
                                    <input class="input-xlarge" type="text" id="email" placeholder="john@gmail.com">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="subject">Asunto</label>
                                <div class="controls">
                                    <input class="input-xlarge" type="text" id="subject" placeholder="General Inquiry">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="message">Mensaje</label>
                                <div class="controls">
                                    <textarea class="input-xlarge" rows="3" id="message" placeholder="Your message..."></textarea>
                                </div>
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </div>
                        </fieldset>
                    </form>
                </div>

            </div>

<?php $this->load->view('footer_view'); ?>