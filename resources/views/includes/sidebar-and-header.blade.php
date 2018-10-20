<!-- aside -->
<aside class="aside">
    <div class="aside-content">
        <div class="logo">
            <img src="/img/dashboard-logo.png" alt="CRM" class="img-responsive">
        </div>

        <nav class="aside-menu">
            <ul>
                <li>
                    <a href="/dashboard.html"><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</a>
                </li>

                <li>
                    <a href="#" class="toggle-menu">
                        <i class="fa fa-users" aria-hidden="true"></i>
                        <span>Customers</span>
                        <div class="icon"><i class="fa fa-arrow-left" aria-hidden="true"></i></div>
                    </a>
                    <ul class="nested-menu">
                        <li>
                            <a href="#">All</a>
                        </li>
                        <li>
                            <a href="#">Create</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="#" class="toggle-menu">
                        <i class="fa fa-tasks" aria-hidden="true"></i>
                        <span>My bookings</span>
                        <div class="icon"><i class="fa fa-arrow-left" aria-hidden="true"></i></div>
                    </a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="#" class="toggle-menu">
                        <i class="fa fa-file-text-o" aria-hidden="true"></i>
                        <span>Report</span>
                        <div class="icon"><i class="fa fa-arrow-left" aria-hidden="true"></i></div>
                    </a>
                    <ul class="nested-menu">
                        <li>
                            <a href="#">Project Report</a>
                        </li>
                        <li>
                            <a href="#">Client Report</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>
<!-- /aside -->
<!-- header -->
<header class="header">
    <div class="header-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-2">
                    <div class="bt-menu-trigger">
                        <span></span>
                    </div>
                </div>
                <div class="col-xs-10">
                    <ul class="settings">
                        <li class="dropdown">
                            <a data-toggle="dropdown">
                                <i class="fa fa-cog" aria-hidden="true"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#"><i class="fa fa-wifi" aria-hidden="true"></i>Wi-fi</a></li>
                                <li><a href="#"><i class="fa fa-area-chart" aria-hidden="true"></i>Settings</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a data-toggle="dropdown">
                                <img src="/img/avatar.png" alt="avatar" class="img-circle">
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#"><i class="fa fa-user-o" aria-hidden="true"></i>User Profile</a></li>
                                <li><a href="#"><i class="fa fa-inbox" aria-hidden="true"></i>Inbox</a></li>
                                <li><a href="#" onclick="$('#logout-form').submit();"><i class="fa fa-sign-out" aria-hidden="true"></i> Sign Out</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form id="logout-form" method="post" action="{{route('logout')}}">
                        {{ csrf_field() }}
                    </form>
                </div>
            </div>
        </div>
    </div>

</header>
<!-- /header -->