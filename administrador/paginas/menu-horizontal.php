
      <header class="main-header">
        <a href="#" class="logo"><b><img src="dist/img/logo-VTV.png" alt="logo"></b></a>
        <nav class="navbar navbar-static-top" role="navigation">
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only"></span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">


             

              



                 
           



              <li class="dropdown messages-menu">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      <i class="fa fa-calendar-o"></i>
                        <span class="label label-success">4</span>
                      </a>
                      <ul class="dropdown-menu">
                        <li class="header">Calendario</li>
                        <li>
                          <ul class="menu">
                          
                          
                          
                            
                            
                          </ul>
                        </li>
                        <li class="footer"><a href="#">Servi-Red</a></li>
                      </ul>
              </li>



























             
 
              <li class="dropdown notifications-menu">
                      <a href="https://vtvcorreo.vtv.gob.ve" target="_blank"><i class="fa fa-envelope-o ">
                      </i>  <span class="label label-primary">8</span></a>
              </li>


              <li class="dropdown notifications-menu">
                      <a href="https://vtvtransfer.ddns.net/index.php/login" target="_blank"><i class="fa fa-cloud "></i></a>
              </li>

              
              
               
              
                <li class="dropdown user user-menu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                          
                                          <?php echo ' <img src="'.$_SESSION['imagen'].'" class="user-image" alt="User Image">'  ?>

                                          <span class="hidden-xs"><?php echo  "    " . $_SESSION['perfil']; ?>
                                    </a>
                                  <ul class="dropdown-menu">
                                          <li class="user-header">
                                              <?php echo ' <img src="'.$_SESSION['imagen'].'" class="img-circle" alt="User Image">'  ?> 
                                                <p>
                                                  
                                                <?php echo  "    " . $_SESSION['usuario']; ?><br><?php echo  "    " . $_SESSION['perfil']; ?>
                                                <small><?php date_default_timezone_set("America/Caracas");$hora = date('h:i a',time() - 3600*date('I'));print "&nbsp;$hora&nbsp;"; ?>
                                                        <?php echo  date("d-m-Y");?>
                                                  </small>
                                                </p>
                                          </li>
                                  
                                          <li class="user-footer">
                                                <div class="pull-left">
                                                  <a href="../login/index.php" class="btn btn-danger btn-flat">Salir</a>
                                                </div>
                                                <div class="pull-right">
                                                  <a href="../cuerpo/index.php" class="btn btn-primary btn-flat">Regresar</a>
                                                </div>
                                          </li>
                                    </ul>
                    </li>



            </ul>
          </div>
        </nav>
      </header>
