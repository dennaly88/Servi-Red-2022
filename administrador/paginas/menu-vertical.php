<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<aside class="main-sidebar">
<section class="sidebar">
  <div class="user-panel">
    <div class="pull-left image">    
    <?php echo ' <img src="'.$_SESSION['imagen'].'" class="img-circle" alt="User Image">'  ?>   <a href="#"><i class="fa fa-circle text-success"></i>En linea</a>
    </div>
    <div class="pull-left info">
      <p>
     
      <span class="hidden-xs"><?php echo  "    " . $_SESSION['nombres']; ?><?php echo  "    " . $_SESSION['apellidos']; ?>
       
    </div>
    
  </div>
  <ul class="sidebar-menu">         
     <li class="header">ADMINISTRAR</li> 
                <li class="treeview">
                      <a href="usuario.php">
                        <i class="fa fa-user"></i> <span>USUARIOS</span> 
                      </a>
                        
                         



                          
                  </li>
                <li class="treeview">
                      <a href="#">
                        <i class="fa fa-list-alt"></i>
                        <span>MARCAS</span>
                      </a>
                          <ul class="treeview-menu">
                            <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
                            <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
                            <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
                            <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
                          </ul>
                  </li>
                  <li>
                          <a href="pages/widgets.html">
                            <i class="fa fa-laptop"></i> <span>EQUIPOS</span> 
                          </a>    
                  </li>
                  <li class="treeview">
                        <a href="#">
                          <i class="fa fa-clipboard"></i>
                          <span>MATERIALES</span>
                        
                        </a>
                                <ul class="treeview-menu">
                                  <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
                                  <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
                                  <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
                                </ul>
                  </li>
  </ul>
  <ul class="sidebar-menu">
          <li class="header">REDES</li> 
                <li class="treeview">
                      <a href="#">
                        <i class="fa fa-signal"></i> <span>WIFI</span> 
                      </a>           
                </li>
                <li class="treeview">
                      <a href="#">
                        <i class="fa fa-sitemap"></i>
                        <span>SWITCH</span>
                      </a>
                          <ul class="treeview-menu">
                            <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
                            <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
                            <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
                            <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
                          </ul>
                </li>
          <li>
                  <a href="pages/widgets.html">
                    <i class="fa fa-hdd-o"></i> <span>ROUTER</span> 
                  </a>    
          </li>
  </ul>


  <ul class="sidebar-menu">
          <li class="header">SERVIDORES</li> 
                <li class=" treeview">
                      <a href="#">
                        <i class="fa fa-tasks"></i> <span>SERVIDORES</span> 
                      </a>
                     
                </li>
  </ul>

  <ul class="sidebar-menu">
          <li class="header">INVENTARIO</li> 
                <li class="treeview">
                      <a href="#">
                        <i class="fa fa-bar-chart-o"></i>
                        <span>GRAFICAS</span>
                      </a>
                          <ul class="treeview-menu">
                            <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
                            <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
                            <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
                            <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
                          </ul>
                </li>
          <li>
                  <a href="pages/widgets.html">
                    <i class="fa fa-pencil-square-o"></i> <span>REPORTES</span> 
                  </a>    
          </li>
  </ul>
  <ul class="sidebar-menu">
          <li class="header">OPCIONES</li> 
          <li>
          <a href="../cuerpo/index.php">
                    <i class="fa fa-rotate-left "></i> <span>REGRESAR</span> 
                  </a>             
          </li>
          <li>
          <a href="../login/index.php">
                    <i class="fa fa-power-off"></i> <span>SALIR</span> 
                  </a>        
          </li>
  </ul>
  <br><CENTER><a href="#" class="logo"><b><img src="dist/img/logo.png" alt="logo"></b></a>
 
</section>
</aside>