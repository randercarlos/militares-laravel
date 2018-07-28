<nav class="navbar navbar-default" style="background-color: #8a1818; font-size: large; ">
    <div class="container-fluid">
        <div class="container">
            <div class="navbar navbar-inverse" style="background-color: #8a1818; border-color: #8a1818;">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" 
                            data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="navbar-header hide">
                <a class="navbar-brand branco" href="" navbar-brand style="color: #fff;">
                    <i class="fa fa-home" style="color: #fff;"></i> HOME
                </a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav" id="menu-top">
                    <li class="dropdown">
                        <a href="{{ route('militares.index') }}" class="dropdown-toggle text-uppercase" 
                            data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" 
                            style="color: #fff; font-size: 0.8em;">
                            <i class="fa fa-car"></i> Militares
                        </a>
                    </li>
                </ul>
                <form class="navbar-form navbar-left hide" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" 
                            aria-expanded="false" style="color: #fff; font-size: 0.8em;">
                            <i class="fa fa-puzzle-piece"></i> Sessão
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a id="menu-logoff" href="" target="_blank">
                                    <i class="fa fa-sitemap"></i> Visitar o Site
                                </a>
                            </li>
                            <li>
                                <a id="menu-logoff" href="">
                                    <i class="fa fa-power-off"></i> Sair
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </div><!-- /.container-fluid -->
</nav>