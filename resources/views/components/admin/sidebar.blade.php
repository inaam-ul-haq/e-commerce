<li class="list-group-item {{ request()->route()->getName() == 'categories.index'? 'active': '' }}">
        <a class="nav-link" href="{{ route('categories.index') }}">
            <i class="fas fa-fw fa-file-alt"></i>
            <span>Category</span></a>
    </li>