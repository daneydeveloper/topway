<div class="navbar navbar-custom sticky" role="navigation" id="sticky-nav">
    <div class="container">
        <!-- Navbar-header -->
        <div class="navbar-header">
            <!-- Responsive menu button -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <!-- LOGO -->
            <a class="logo" href="index.html">
            <img src="assets/img/logo.png" alt="TopWay Logo" class="navbar-brand img-responsive">
            </a>
        </div>
        <!-- end navbar-header -->
        <div id="displaywpp">
            <button type="button" class="btn btn-signup btn-white-bordered" ng-click="openForm('form', null, true)" ><i class="fa fa-whatsapp" style="color: #2DB843;"></i> Fale Agora
            </button>
        </div>
        <!-- menu -->
        <div class="navbar-collapse collapse" id="navbar-menu">
            <!-- Navbar left -->
            <ul class="nav navbar-nav nav-custom-left">
                <li>
                    <a href="#home" class="nav-link">Home</a>
                </li>
                <li>
                    <a href="#sobre" class="nav-link">Sobre</a>
                </li>
                <li>
                    <a href="#features" class="nav-link">Vantagens</a>
                </li>
            </ul>
            <!-- Navbar right -->
            <ul class="nav navbar-nav navbar-right" id="hiddenwpp">
                <li>
                    <button type="button" class="btn btn-signup btn-white-bordered" ng-click="openForm('form', null)" ><i class="fa fa-whatsapp" style="color: #2DB843;"></i> Fale Agora</button>
                </li>
            </ul>
        </div>
        <!-- <div>
            <button type="button" class="btn btn-signup btn-white-bordered" ng-click="openForm('form', null)" ><i class="fa fa-whatsapp" style="color: #2DB843;"></i> Fale Agora</button>
        </div> -->
        <!--/Menu -->
    </div>
    <!-- end container -->
</div>