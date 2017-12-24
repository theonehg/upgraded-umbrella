<section class="sidebar">
    <ul class="sidebar-menu" data-widget="tree">
        <li>
            <a class="bg-red" href="{{ route('create') }}">
                <i class="fa fa-pencil-square-o"></i>
                <span>Create Request</span>
            </a>
        </li>
        <li>
            <a href="{{ route('dashboard') }}">
                <i class="fa fa-dashboard"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="treeview">
            <a>
                <i class="fa fa-user"></i>
                <span>My Request</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li>
                    <a href="{{ route('list', ['createdBy' => $loggedUser->id]) }}">
                        <i class="fa fa-archive"></i>
                        <span>All</span>
                        <span class="pull-right-container">
                            <small class="label pull-right bg-green">new</small>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('list', ['createdBy' => $loggedUser->id, 'read' => false]) }}">
                        <i class="fa fa-bell-o"></i>
                        <span>New</span>
                        <span class="pull-right-container">
                            <small class="label pull-right bg-green">new</small>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('list', ['createdBy' => $loggedUser->id, 'status' => 'inProgress']) }}">
                        <i class="fa fa-cogs"></i>
                        <span>In Progress</span>
                        <span class="pull-right-container">
                            <small class="label pull-right bg-green">new</small>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('list', ['createdBy' => $loggedUser->id, 'status' => 'resolved']) }}">
                        <i class="fa fa-check-square-o"></i>
                        <span>Resolved</span>
                        <span class="pull-right-container">
                            <small class="label pull-right bg-green">new</small>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('list', ['createdBy' => $loggedUser->id, 'outdated' => true]) }}">
                        <i class="fa fa-calendar-times-o"></i>
                        <span>Outdated</span>
                        <span class="pull-right-container">
                            <small class="label pull-right bg-green">new</small>
                        </span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="treeview">
            <a>
                <i class="fa fa-exchange"></i>
                <span>Related Request</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li>
                    <a href="{{ route('list', ['relatedTo' => $loggedUser->id]) }}">
                        <i class="fa fa-archive"></i>
                        <span>All</span>
                        <span class="pull-right-container">
                            <small class="label pull-right bg-green">new</small>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('list', ['relatedTo' => $loggedUser->id, 'read' => false]) }}">
                        <i class="fa fa-bell-o"></i>
                        <span>New</span>
                        <span class="pull-right-container">
                            <small class="label pull-right bg-green">new</small>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('list', ['relatedTo' => $loggedUser->id, 'status' => 'inProgress']) }}">
                        <i class="fa fa-cogs"></i>
                        <span>In Progress</span>
                        <span class="pull-right-container">
                            <small class="label pull-right bg-green">new</small>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('list', ['relatedTo' => $loggedUser->id, 'status' => 'resolved']) }}">
                        <i class="fa fa-check-square-o"></i>
                        <span>Resolved</span>
                        <span class="pull-right-container">
                            <small class="label pull-right bg-green">new</small>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('list', ['relatedTo' => $loggedUser->id, 'outdated' => true]) }}">
                        <i class="fa fa-calendar-times-o"></i>
                        <span>Outdated</span>
                        <span class="pull-right-container">
                            <small class="label pull-right bg-green">new</small>
                        </span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-tag"></i>
                <span>Assigned Request</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li>
                    <a href="{{ route('list', ['assignedTo' => $loggedUser->id]) }}">
                        <i class="fa fa-archive"></i>
                        <span>All</span>
                        <span class="pull-right-container">
                            <small class="label pull-right bg-green">new</small>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('list', ['assignedTo' => $loggedUser->id, 'read' => false]) }}">
                        <i class="fa fa-bell-o"></i>
                        <span>New</span>
                        <span class="pull-right-container">
                            <small class="label pull-right bg-green">new</small>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('list', ['assignedTo' => $loggedUser->id, 'status' => 'inProgress']) }}">
                        <i class="fa fa-cogs"></i>
                        <span>In Progress</span>
                        <span class="pull-right-container">
                            <small class="label pull-right bg-green">new</small>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('list', ['assignedTo' => $loggedUser->id, 'status' => 'resolved']) }}">
                        <i class="fa fa-check-square-o"></i>
                        <span>Resolved</span>
                        <span class="pull-right-container">
                            <small class="label pull-right bg-green">new</small>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('list', ['assignedTo' => $loggedUser->id, 'outdated' => true]) }}">
                        <i class="fa fa-calendar-times-o"></i>
                        <span>Outdated</span>
                        <span class="pull-right-container">
                            <small class="label pull-right bg-green">new</small>
                        </span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-users"></i>
                <span>Team Request</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li>
                    <a href="{{ route('list', ['team' => $loggedUser->team_id]) }}">
                        <i class="fa fa-archive"></i>
                        <span>All</span>
                        <span class="pull-right-container">
                            <small class="label pull-right bg-green">new</small>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('list', ['team' => $loggedUser->team_id, 'read' => false]) }}">
                        <i class="fa fa-bell-o"></i>
                        <span>New</span>
                        <span class="pull-right-container">
                            <small class="label pull-right bg-green">new</small>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('list', ['team' => $loggedUser->team_id, 'status' => 'inProgress']) }}">
                        <i class="fa fa-cogs"></i>
                        <span>In Progress</span>
                        <span class="pull-right-container">
                            <small class="label pull-right bg-green">new</small>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('list', ['team' => $loggedUser->team_id, 'status' => 'resolved']) }}">
                        <i class="fa fa-check-square-o"></i>
                        <span>Resolved</span>
                        <span class="pull-right-container">
                            <small class="label pull-right bg-green">new</small>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('list', ['team' => $loggedUser->team_id, 'outdated' => true]) }}">
                        <i class="fa fa-calendar-times-o"></i>
                        <span>Outdated</span>
                        <span class="pull-right-container">
                            <small class="label pull-right bg-green">new</small>
                        </span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#">
                <i class="fa  fa-building"></i>
                <span>Group Request</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li>
                    <a href="{{ route('list') }}">
                        <i class="fa fa-archive"></i>
                        <span>All</span>
                        <span class="pull-right-container">
                            <small class="label pull-right bg-green">new</small>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('list', ['read' => false]) }}">
                        <i class="fa fa-bell-o"></i>
                        <span>New</span>
                        <span class="pull-right-container">
                            <small class="label pull-right bg-green">new</small>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('list', ['status' => 'inProgress']) }}">
                        <i class="fa fa-cogs"></i>
                        <span>In Progress</span>
                        <span class="pull-right-container">
                            <small class="label pull-right bg-green">new</small>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('list', ['status' => 'resolved']) }}">
                        <i class="fa fa-check-square-o"></i>
                        <span>Resolved</span>
                        <span class="pull-right-container">
                            <small class="label pull-right bg-green">new</small>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('list', ['outdated' => true]) }}">
                        <i class="fa fa-calendar-times-o"></i>
                        <span>Outdated</span>
                        <span class="pull-right-container">
                            <small class="label pull-right bg-green">new</small>
                        </span>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</section>
