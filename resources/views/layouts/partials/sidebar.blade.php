<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
    <!-- Sidebar Brand -->
    <div class="sidebar-brand">
        <a href="/" class="brand-link">
            <span class="brand-text fw-light">ERP Support</span>
        </a>
    </div>
    
    <!-- Sidebar Wrapper -->
    <div class="sidebar-wrapper">
        <nav class="mt-2">
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                @foreach(config('sidebar') as $item)
                    @include('layouts.partials.sidebar-item', ['item' => $item])
                @endforeach
            </ul>
        </nav>
    </div>
</aside>
