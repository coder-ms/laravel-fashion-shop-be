<nav id="sidebarMenu" class="bg-dark navbar-dark">
    <h2 class="p-2"> Fashion Shop</h2>
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link text-white {{ Route::currentRouteName() == 'admin.dashboard' ? 'bg-secondary' : '' }}" href="{{route('admin.dashboard')}}">
                <i class="fa-solid fa-tachometer-alt fa-lg fa-fw"></i> Dashboard
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white {{ Route::currentRouteName() == 'admin.products.index' ? 'bg-secondary' : '' }}" href="{{route('admin.products.index')}}">
                <i class="fa-solid fa-folder-open fa-lg fa-fw"></i>  Products
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white {{ Route::currentRouteName() == 'admin.brands.index' ? 'bg-secondary' : '' }}" href="{{route('admin.brands.index')}}">
                <i class="fa-solid fa-bookmark fa-lg fa-fw"></i> Brands
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white {{ Route::currentRouteName() == 'admin.categories.index' ? 'bg-secondary' : '' }}" href="{{route('admin.categories.index')}}">
                <i class="fa-solid fa-bookmark fa-lg fa-fw"></i> Categories
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white {{ Route::currentRouteName() == 'admin.textures.index' ? 'bg-secondary' : '' }}" href="{{route('admin.textures.index')}}">
                <i class="fa-solid fa-bookmark fa-lg fa-fw"></i> Texture
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white {{ Route::currentRouteName() == 'admin.tags.index' ? 'bg-secondary' : '' }}" href="{{route('admin.tags.index')}}">
                <i class="fa-solid fa-bookmark fa-lg fa-fw"></i> Tags
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white {{ Route::currentRouteName() == 'admin.colors.index' ? 'bg-secondary' : '' }}" href="{{route('admin.colors.index')}}">
                <i class="fa-solid fa-bookmark fa-lg fa-fw"></i> Colors
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white {{ Route::currentRouteName() == 'admin.shippings.index' ? 'bg-secondary' : '' }}" href="{{route('admin.shippings.index')}}">
                <i class="fa-solid fa-bookmark fa-lg fa-fw"></i> Shippings
            </a>
        </li>
    </ul>
</nav>
