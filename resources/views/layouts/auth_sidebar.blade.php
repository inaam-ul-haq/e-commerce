<!-- Sidebar -->
<ul class="list-group">
    <li class="list-group-item {{ request()->route()->getName() == 'auth'? 'active': '' }}">
        <a class="nav-link" href="{{ route('auth') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    
    @hasrole('admin')
        <x-admin.sidebar />
    @endhasrole

    @hasrole('user')
        <x-user.sidebar />
    @endhasrole

    <li class="list-group-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Orders</span></a>
    </li>
</ul>
