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
                    <img src="{{ $user->avatar }}" class="user-image">
                    <span class="hidden-xs">{{ $user->fullname }}</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="user-header">
                        <img src="{{ $user->avatar }}" class="img-circle">

                        <p>{{ $user->fullname }}
                            <small> {{ $user->position_id }}</small>
                        </p>
                    </li>
                    <li class="user-body">
                        <p>Username: {{ $user->username }}</p>
                        <p>Email: {{ $user->email }}</p>
                        <p>Team: {{ $user->team_id }} </p>
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