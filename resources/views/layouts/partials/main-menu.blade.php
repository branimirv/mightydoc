
<nav class="navbar navbar-default">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand naslov" href="/">Mighty Doc</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Symptoms <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('symptom.index') }}">List Symptoms</a></li>
                        <li><a href="{{ route('symptom.create') }}">New Symptom</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Diseases <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('disease.index') }}">List Diseases</a></li>
                        <li><a href="{{ route('disease.create') }}">New Disease</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Disease Groups<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('diseaseGroup.index') }}">List Disease Groups</a></li>
                        <li><a href="{{ route('diseaseGroup.create') }}">New Disease Group</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Body Areas <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('bodyArea.index') }}">List Body Areas</a></li>
                        <li><a href="{{ route('bodyArea.create') }}">New Body Area</a></li>
                    </ul>
                </li>

            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/logout">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
