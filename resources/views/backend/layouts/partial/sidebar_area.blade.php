<div class="sidebar-menu">
    <div class="sidebar-header">
        <div class="logo">
            <a href="{{ route('admin.index') }}"><img src="{{ asset('admin-assets/images/icon/logo1.png')}}">
        </div>
    </div>
    <div class="main-menu">
        <div class="menu-inner">
            <nav>
                <ul class="metismenu" id="menu">
                    <li class="{{ Route::is('admin.index') ?'active' : '' }}">
                        <a href="javascript:void(0)" aria-expanded="true"><i
                                class="ti-dashboard"></i><span>dashboard</span></a>
                        <ul class="collapse">

                            <li class="active"><a href="{{ route('admin.index') }}">dashboard</a></>
                        </ul>
                    </li>
                    <li
                        class="{{ Route::is('admin.users.index') ? 'active' : '' }} | {{ Route::is('admin.users.create') ?'active' : '' }}">
                        <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-users "></i><span>User
                                Management</span></a>
                        <ul class="collapse">
                            <li><a href="{{ route('admin.users.index') }}">User List</a></li>
                            <li><a href="{{ route('admin.users.create') }}">New User</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i
                                class="ti-pie-chart"></i><span>Product</span></a>
                        <ul class="collapse">
                            <li><a href="barchart.html">Product List</a></li>
                            <li><a href="linechart.html">Add Product</a></li>
                        </ul>
                    </li>

                </ul>
            </nav>
        </div>
    </div>