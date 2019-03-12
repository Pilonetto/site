<body>

    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <img src="<?php echo base_url(); ?>img/spira.png" width="200" height="200" alt="">
                
            </div>

            <ul class="list-unstyled components">
                <p>Empresa Demonstração</p>
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Seus Serviços</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Análise dados</a>
                        <ul class="collapse list-unstyled" id="pageSubmenu">
                            <li>
                                <a href="#">Página 1</a>
                            </li>
                            <li>
                                <a href="#">Página 2</a>
                            </li>
                            <li>
                                <a href="#">Página 3</a>
                            </li>
                        </ul>
                    </ul>
                </li>
                    
                
                <li>
                    <a href="<?= site_url('home/do_logout'); ?> ">Logout</a>
                    
                </li>    
                    

            </ul>

            <ul class="list-unstyled CTAs">
                <li>
                    <a href="http://192.168.1.92:5001/site" class="article">Voltar ao site</a>
                </li>
            </ul>
        </nav>

        <!-- Page Content Holder -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light color-pb">
                <div class="container-fluid">
                    
                    <button type="button" id="sidebarCollapse" class="navbar-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <h3 class="text-center demo-empresa"> Empresa Demonstração</h3>
<!--
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                        </ul>
                    </div>
-->
                </div>
            </nav>
            
			 <div style="position:relative;padding-top:56.25%;">
			  <iframe src="https://app.powerbi.com/view?r=eyJrIjoiZTVlMWU0M2QtMThlMC00Mjg1LWEzNDgtMTYzYTdhNmE0ZjYxIiwidCI6IjZjOGJlMGRmLTE2OWMtNGVmNy04YjI4LTdlOTkxYWQ5ZTg2MSJ9" frameborder="0" allowfullscreen
				style="position:absolute;top:5px;left:0;width:100%;height:100%;"></iframe>
			</div>            
            
		</div>
    </div>