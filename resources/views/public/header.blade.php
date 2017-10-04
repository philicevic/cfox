<header class="header">
    <div class="container">
        <div class="navbar navbar-default" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a href="index.html" class="navbar-brand">ATLAS <br> <span class="slogo">CREATIVE <span></a>
                </div><!-- end navbar-header -->
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-left">
                    <li class="active"><a data-scroll href="#home" class="int-collapse-menu">Home</a></li>
                    <li><a data-scroll href="#features" class="int-collapse-menu">What is cfox?</a></li>
                    <li><a data-scroll href="#about" class="int-collapse-menu">About</a></li>
                    <li><a data-scroll href="#pricing" class="int-collapse-menu">Pricing</a></li>
                    <li><a href="{{ url('/updates') }}">Updates</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        @if (Route::has('login'))
                            @auth
                                <li><a href="{{ url('/home') }}" class="int-collapse-menu">Home</a>
                            @else
                                <li><a href="{{ route('login') }}" class="int-collapse-menu">Login</a></li>
                                <li><a href="{{ route('register') }}" class="int-collapse-menu">Register</a></li>
                            @endauth
                        @endif
                    </ul>
                </div><!--/.nav-collapse -->
            </div><!--/.container-fluid -->
        </div>
    </div><!-- end container -->
</header>
