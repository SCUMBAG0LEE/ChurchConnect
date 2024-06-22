<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">
                    <span>Main Menu</span>
                </li>
                <li class="{{set_active(['setting/page'])}}">
                    <a href="{{ route('setting/page') }}">
                        <i class="fas fa-cog"></i> 
                        <span>Settings</span>
                    </a>
                </li>
                <li class="submenu {{set_active(['home','teacher/dashboard','member/dashboard'])}}">
                    <a>
                        <i class="fas fa-tachometer-alt"></i>
                        <span> Dashboard</span> 
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="{{ route('home') }}" class="{{set_active(['home'])}}">Admin Dashboard</a></li>
                    </ul>
                </li>
                @if (Session::get('role_name') === 'Admin' || Session::get('role_name') === 'Super Admin')
                <li class="submenu {{set_active(['list/users'])}} {{ (request()->is('view/user/edit/*')) ? 'active' : '' }}">
                    <a href="#">
                        <i class="fas fa-shield-alt"></i>
                        <span>User Management</span> 
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="{{ route('list/users') }}" class="{{set_active(['list/users'])}} {{ (request()->is('view/user/edit/*')) ? 'active' : '' }}">List Users</a></li>
                    </ul>
                </li>
                @endif

                <li class="submenu {{set_active(['member/list','member/grid','member/add/page'])}} {{ (request()->is('member/edit/*')) ? 'active' : '' }} {{ (request()->is('member/profile/*')) ? 'active' : '' }}">
                    <a href="#"><i class="fas fa-graduation-cap"></i>
                        <span> Members</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="{{ route('member/list') }}"  class="{{set_active(['member/list','member/grid'])}}">Member List</a></li>
                        <li><a href="{{ route('member/add/page') }}" class="{{set_active(['member/add/page'])}}">Member Add</a></li>
                        <li><a class="{{ (request()->is('member/edit/*')) ? 'active' : '' }}">Member Edit</a></li>
                        <li><a href=""  class="{{ (request()->is('member/profile/*')) ? 'active' : '' }}">Member View</a></li>
                    </ul>
                </li>


                
                <li class="submenu {{set_active(['branch/add/page','branch/edit/page'])}} {{ request()->is('branch/edit/*') ? 'active' : '' }}">
                    <a href="#"><i class="fas fa-building"></i>
                        <span> Branches</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="{{ route('branch/list/page') }}" class="{{set_active(['branch/list/page'])}} {{ request()->is('branch/edit/*') ? 'active' : '' }}">Branch List</a></li>
                        <li><a href="{{ route('branch/add/page') }}" class="{{set_active(['branch/add/page'])}}">Branch Add</a></li>
                        <li><a>Branch Edit</a></li>
                    </ul>
                </li>


                <li class="submenu {{set_active(['invoice/list/page','invoice/paid/page',
                    'invoice/overdue/page','invoice/draft/page','invoice/recurring/page',
                    'invoice/cancelled/page','invoice/grid/page','invoice/add/page',
                    'invoice/view/page','invoice/settings/page',
                    'invoice/settings/tax/page','invoice/settings/bank/page'])}}" {{ request()->is('invoice/edit/*') ? 'active' : '' }}>
                    <a href="#"><i class="fas fa-clipboard"></i>
                        <span> Invoices</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a class="{{set_active(['invoice/list/page','invoice/paid/page','invoice/overdue/page','invoice/draft/page','invoice/recurring/page','invoice/cancelled/page'])}}" href="{{ route('invoice/list/page') }}">Invoices List</a></li>
                        <li><a class="{{set_active(['invoice/grid/page'])}}" href="{{ route('invoice/grid/page') }}">Invoices Grid</a></li>
                        <li><a class="{{set_active(['invoice/add/page'])}}" href="{{ route('invoice/add/page') }}">Add Invoices</a></li>
                        <li><a class="{{ request()->is('invoice/edit/*') ? 'active' : '' }}" href="">Edit Invoices</a></li>
                        <li> <a class="{{ request()->is('invoice/view/*') ? 'active' : '' }}" href="">Invoices Details</a></li>
                        <li><a class="{{set_active(['invoice/settings/page','invoice/settings/tax/page','invoice/settings/bank/page'])}}" href="{{ route('invoice/settings/page') }}">Invoices Settings</a></li>
                    </ul>
                </li>

                <li class="menu-title">
                    <span>Management</span>
                </li>

                <li>
                    <a href="event.html"><i class="fas fa-calendar-day"></i> <span>Events</span></a>
                </li>
                <li>
                    <a href="library.html"><i class="fas fa-book"></i> <span>Library</span></a>
                </li>
            </ul>
        </div>
    </div>
</div>