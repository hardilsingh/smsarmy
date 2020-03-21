<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <a href="/home" class="d-block">Messaging Service</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="/home" class="nav-link">
                        <i class="fas fa-tachometer-alt nav-icon"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('user.index')}}" class="nav-link">
                        <i class="fas fa-user nav-icon"></i>
                        <span>Users</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('contact.index')}}" class="nav-link">
                        <i class="fas fa-user nav-icon"></i>
                        <span>Contacts</span>
                    </a>
                </li>




                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fas fa-search nav-icon"></i>
                        <p>
                            Send SMS
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right"></span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/sms?type=show" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Previous SMS</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/sms?type=all" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="/sms?type=group" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Group SMS</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="/sms?type=contacts" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Selected Contacts</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item">
                    <a href="{{route('group.index')}}" class="nav-link">
                        <i class="fas fa-users-cog nav-icon"></i>
                        <span>Groups</span>
                    </a>
                </li>










            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>