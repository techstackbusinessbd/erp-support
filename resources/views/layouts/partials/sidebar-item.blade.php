@php
    $hasRole = !isset($item['role']) || auth()->user()->hasRole($item['role']);
@endphp

@if($hasRole)
    @if(isset($item['header']))
        <li class="nav-header">{{ $item['header'] }}</li>
    @else
        @php
            $hasSubmenu = isset($item['submenu']) && is_array($item['submenu']);
            $isActive = false;
            
            // Check if current route matches active pattern or if any child is active
            if (isset($item['active']) && request()->is($item['active'])) {
                $isActive = true;
            } elseif ($hasSubmenu) {
                // simple check to see if we are in a submenu route (could be expanded)
                // AdminLTE opens treeview if nav-item has menu-open class
            }
        @endphp

        <li class="nav-item {{ $hasSubmenu ? 'has-treeview' : '' }}">
            <a href="{{ $item['url'] ?? '#' }}" class="nav-link {{ $isActive ? 'active' : '' }}">
                <i class="nav-icon {{ $item['icon'] ?? 'bi bi-circle' }}"></i>
                <p>
                    {{ $item['title'] }}
                    @if($hasSubmenu)
                        <i class="nav-arrow bi bi-chevron-right"></i>
                    @endif
                </p>
            </a>
            @if($hasSubmenu)
                <ul class="nav nav-treeview">
                    @foreach($item['submenu'] as $subItem)
                        @include('layouts.partials.sidebar-item', ['item' => $subItem])
                    @endforeach
                </ul>
            @endif
        </li>
    @endif
@endif
