<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <!-- CHANGE THIS TITLE TAG -->
        <title>BeReseller.com - Todos las herramientas para los revendedores</title>
        <!-- media-queries.js -->
        <!--[if lt IE 9]>
                <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
        <![endif]-->
        <!-- html5.js -->
        <!--[if lt IE 9]>
                <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link href="http://127.0.0.1/font/stylesheet.css" rel="stylesheet" type="text/css" />	
        <link href="http://127.0.0.1/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="http://127.0.0.1/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />
        <link href="http://127.0.0.1/css/styles.css" rel="stylesheet" type="text/css" />
        <link href="http://127.0.0.1/css/media-queries.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="<? echo base_url();?>fancybox/jquery.fancybox-1.3.4.css" media="screen" />

        <meta name="viewport" content="width=device-width" />

        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

        <link href='http://fonts.googleapis.com/css?family=Exo:400,800' rel='stylesheet' type='text/css'>

    </head>

    <body data-spy="scroll">

        <!-- TOP MENU NAVIGATION -->
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">

                    <a class="brand pull-left" href="#">BeReseller.com</a>

                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar">1</span>
                        <span class="icon-bar">2</span>
                        <span class="icon-bar">3</span>
                    </a>

                    <div class="nav-collapse collapse">
                        <ul id="nav-list" class="nav pull-right">
                            <li><a href="#home">Inicio</a></li>
                            <li><a href="#about">Sobre Nosotros</a></li>
                            <li><a href="#updates">Soluciones</a></li>
                            <li><a href="#screenshots">Screenshots</a></li>
                            <li><a href="#contact">Contacto</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>

        <!-- MAIN CONTENT -->
        <div class="container content container-fluid" id="home">            
            
            
<!--   LOGIN -->
<form action="http://127.0.0.1/index.php/login/autenticar" method="post" accept-charset="utf-8">

<table>
    <tr><td><label for="email">E-mail</label></td>
        <td>

            <span><input type="text" name="email" value="" placeholder="Email" tabindex="0"  /></span>

            <span></span>

        </td></tr>
    <tr>
        <td><label for="password">Contrase&ntilde;a</label></td>
        <td align="left"><input type="password" name="password" value="" placeholder="Contrase&ntilde;a" tabindex="0"  /></td>
    </tr>
    <td></td>
    <td align="left">				
        <input type="submit" name="submit" value="Ingresar"  />			
    </td></tr>
<tr><td align="left" colspan="2">				
        <a href="#">Olvidaste tu contrase&ntilde;a?</a>		
    </td></tr>
</table>
</form>


 <!-- FOOTER -->
        </div>
       
        <div class="footer container container-fluid">

            <!-- COPYRIGHT - EDIT HOWEVER YOU WANT! -->
            <div id="copyright">
                Copyright &copy; 2012 BeReseller, Inc.<br>
            </div>

            <div id="credits">BeReseller.com
            </div>

        </div>

        <script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/bootstrap-collapse.js"></script>
        <script src="js/bootstrap-scrollspy.js"></script>
        <script src="fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
        <script src="fancybox/jquery.fancybox-1.3.4.pack.js"></script>
        <script src="js/init.js"></script>

    </body>
</html>
