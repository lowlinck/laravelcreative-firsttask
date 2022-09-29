<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{route('main.index')}}" class="brand-link">
        <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">LowLinck</span>
    </a>
    <div class="sidebar">
        <ul class=" pt-3 nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="{{route('main.index')}}" class="nav-link">
                    <i class="fa-solid fa-house-user"></i>
                    <p>Главная</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.fertilizers.index')}}" class="nav-link">
                    <i class="fa-solid fa-filter"></i>
                    <p>Удобрения</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.cultures.index')}}" class="nav-link">
                    <i class="fa-solid fa-seedling"></i>
                    <p>Группы растений</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.clients.index')}}" class="nav-link">
                    <i class="fa-solid fa-users "></i>
                    <p>Клиенты</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.user.index')}}" class="nav-link">
                    <i class="fa-solid fa-users "></i>
                    <p>Пользователи</p>
                </a>
            </li>
        </ul>
    </div>
</aside>
