<a class="logo hidden-xs" data-toggle="push-menu" role="button">
    <span class="logo-mini"><i class="fa fa-bars"></i></span>
    <span class="logo-lg"><b>Request</b>IT</span>
</a>
<nav class="navbar navbar-static-top">
    <a class="sidebar-toggle visible-xs" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
    </a>
    <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
            <li class="dropdown user user-menu">
                <a class="dropdown-toggle" data-toggle="dropdown">
                    <img src="{{ $loggedUser->avatar }}" class="user-image">
                    <span class="hidden-xs">{{ $loggedUser->name }}</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="user-header">
                        <img src="{{ $loggedUser->avatar }}" class="img-circle">

                        <p>{{ $loggedUser->name }}
                            <small> {{ $loggedUser->position }}</small>
                        </p>
                    </li>
                    <li class="user-body">
                        <p>Username: {{ $loggedUser->username }}</p>
                        <p>Email: {{ $loggedUser->email }}</p>
                        <p>Team: {{ $loggedUser->team }} </p>
                    </li>
                    <li class="user-footer">
                        <div class="pull-right">
                            <a href="{{ route('logout') }}" class="btn btn-default btn-flat">Sign out</a>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>