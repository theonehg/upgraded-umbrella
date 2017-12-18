<section class="sidebar">
    <ul class="sidebar-menu" data-widget="tree">
        <li>
            <a class="bg-red" href="{{ route('request_create') }}">
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
                    <a href="{{ route('request_list', ['createdBy' => $user->id]) }}">
                        <i class="fa fa-archive"></i>
                        <span>All</span>
                        <span class="pull-right-container">
                            <small class="label pull-right bg-green">new</small>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('request_list', ['createdBy' => $user->id, 'read' => false]) }}">
                        <i class="fa fa-bell-o"></i>
                        <span>New</span>
                        <span class="pull-right-container">
                            <small class="label pull-right bg-green">new</small>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('request_list', ['createdBy' => $user->id, 'status' => 'inProgress']) }}">
                        <i class="fa fa-cogs"></i>
                        <span>In Progress</span>
                        <span class="pull-right-container">
                            <small class="label pull-right bg-green">new</small>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('request_list', ['createdBy' => $user->id, 'status' => 'resolved']) }}">
                        <i class="fa fa-check-square-o"></i>
                        <span>Resolved</span>
                        <span class="pull-right-container">
                            <small class="label pull-right bg-green">new</small>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('request_list', ['createdBy' => $user->id, 'outdated' => true]) }}">
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
                    <a href="{{ route('request_list', ['relatedTo' => $user->id]) }}">
                        <i class="fa fa-archive"></i>
                        <span>All</span>
                        <span class="pull-right-container">
                            <small class="label pull-right bg-green">new</small>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('request_list', ['relatedTo' => $user->id, 'read' => false]) }}">
                        <i class="fa fa-bell-o"></i>
                        <span>New</span>
                        <span class="pull-right-container">
                            <small class="label pull-right bg-green">new</small>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('request_list', ['relatedTo' => $user->id, 'status' => 'inProgress']) }}">
                        <i class="fa fa-cogs"></i>
                        <span>In Progress</span>
                        <span class="pull-right-container">
                            <small class="label pull-right bg-green">new</small>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('request_list', ['relatedTo' => $user->id, 'status' => 'resolved']) }}">
                        <i class="fa fa-check-square-o"></i>
                        <span>Resolved</span>
                        <span class="pull-right-container">
                            <small class="label pull-right bg-green">new</small>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('request_list', ['relatedTo' => $user->id, 'outdated' => true]) }}">
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
                    <a href="{{ route('request_list', ['assignedTo' => $user->id]) }}">
                        <i class="fa fa-archive"></i>
                        <span>All</span>
                        <span class="pull-right-container">
                            <small class="label pull-right bg-green">new</small>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('request_list', ['assignedTo' => $user->id, 'read' => false]) }}">
                        <i class="fa fa-bell-o"></i>
                        <span>New</span>
                        <span class="pull-right-container">
                            <small class="label pull-right bg-green">new</small>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('request_list', ['assignedTo' => $user->id, 'status' => 'inProgress']) }}">
                        <i class="fa fa-cogs"></i>
                        <span>In Progress</span>
                        <span class="pull-right-container">
                            <small class="label pull-right bg-green">new</small>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('request_list', ['assignedTo' => $user->id, 'status' => 'resolved']) }}">
                        <i class="fa fa-check-square-o"></i>
                        <span>Resolved</span>
                        <span class="pull-right-container">
                            <small class="label pull-right bg-green">new</small>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('request_list', ['assignedTo' => $user->id, 'outdated' => true]) }}">
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
                    <a href="{{ route('request_list', ['team' => $user->team_id]) }}">
                        <i class="fa fa-archive"></i>
                        <span>All</span>
                        <span class="pull-right-container">
                            <small class="label pull-right bg-green">new</small>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('request_list', ['team' => $user->team_id, 'read' => false]) }}">
                        <i class="fa fa-bell-o"></i>
                        <span>New</span>
                        <span class="pull-right-container">
                            <small class="label pull-right bg-green">new</small>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('request_list', ['team' => $user->team_id, 'status' => 'inProgress']) }}">
                        <i class="fa fa-cogs"></i>
                        <span>In Progress</span>
                        <span class="pull-right-container">
                            <small class="label pull-right bg-green">new</small>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('request_list', ['team' => $user->team_id, 'status' => 'resolved']) }}">
                        <i class="fa fa-check-square-o"></i>
                        <span>Resolved</span>
                        <span class="pull-right-container">
                            <small class="label pull-right bg-green">new</small>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('request_list', ['team' => $user->team_id, 'outdated' => true]) }}">
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
                    <a href="{{ route('request_list') }}">
                        <i class="fa fa-archive"></i>
                        <span>All</span>
                        <span class="pull-right-container">
                            <small class="label pull-right bg-green">new</small>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('request_list', ['read' => false]) }}">
                        <i class="fa fa-bell-o"></i>
                        <span>New</span>
                        <span class="pull-right-container">
                            <small class="label pull-right bg-green">new</small>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('request_list', ['status' => 'inProgress']) }}">
                        <i class="fa fa-cogs"></i>
                        <span>In Progress</span>
                        <span class="pull-right-container">
                            <small class="label pull-right bg-green">new</small>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('request_list', ['status' => 'resolved']) }}">
                        <i class="fa fa-check-square-o"></i>
                        <span>Resolved</span>
                        <span class="pull-right-container">
                            <small class="label pull-right bg-green">new</small>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('request_list', ['outdated' => true]) }}">
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
