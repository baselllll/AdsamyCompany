<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_pic">
                <img src="{{ url('adminpanel/') }}/build/images/img.jpg" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{ auth()->guard('admin')->user()->name }}</h2>
            </div>
        </div>
        <!-- /menu profile quick info -->

        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                    
                    <li><a><i class="fa fa-user-secret"></i> Admins <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ route('admins.index') }}">Admins Table</a></li>
                            <li><a href="{{ route('admins.create') }}">Create New Admin</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-user-secret"></i> Blogs <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ route('blog.index') }}">Blogs Table</a></li>
                            <li><a href="{{ route('blog.create') }}">Create New Blogs</a></li>
                        </ul>
                    </li>
                   
                    <li><a><i class="fa fa-user-secret"></i> ceo speech <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ route('ceospecahs.index') }}">ceo speech Table</a></li>
                            <li><a href="{{ route('ceospecahs.create') }}">Create New ceo speech</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-user-secret"></i> services <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ route('services.index') }}">services Table</a></li>
                            <li><a href="{{ route('services.create') }}">Create New services </a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-user-secret"></i> works <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ route('works.index') }}">works Table</a></li>
                            <li><a href="{{ route('works.create') }}">Create New works </a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-user-secret"></i> gallery <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ route('gallery.index') }}">gallery Table</a></li>
                            <li><a href="{{ route('gallery.create') }}">Create New gallery </a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-user-secret"></i> our clients <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ route('clients.index') }}"> our clients Table</a></li>
                            <li><a href="{{ route('clients.create') }}">Create New  our clients </a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-user-secret"></i> Sliders <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ route('sliders.index') }}"> our Sliders Table</a></li>
                            <li><a href="{{ route('sliders.create') }}">Create New  our Sliders </a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-user-secret"></i> Teams <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ route('teams.index') }}"> our Teams Table</a></li>
                            <li><a href="{{ route('teams.create') }}">Create New  our Teams </a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-user-secret"></i> Subscribe <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ route('subscribes.index') }}"> our Subscribe Table</a></li>
                            <li><a href="{{ route('subscribes.create') }}">Create New  our Subscribe </a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-user-secret"></i> Contacts <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ route('contacts.index') }}"> our Contacts Table</a></li>
                        </ul>
                    </li>
                    
                </ul>
            </div>

        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings" href="{{ url('admin-panel/settings') }}">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{ route('admin_logout') }}">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>