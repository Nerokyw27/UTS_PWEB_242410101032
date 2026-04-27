@props(['username' => 'Admin'])

<nav class="mg-navbar">
    <div class="mg-container">
        <div class="d-flex align-items-center justify-content-between gap-3 flex-wrap">

            <a href="{{ route('dashboard', ['username' => $username]) }}" class="mg-logo">
                NERO ADMINPAGE
            </a>

            {{-- Nav Links --}}
            <div class="d-flex align-items-center gap-1 flex-wrap">
                <a href="{{ route('dashboard',   ['username' => $username]) }}"
                   class="mg-nav-link {{ request()->routeIs('dashboard')   ? 'active' : '' }}">
                    <i class="bi bi-speedometer2"></i> Dashboard
                </a>
                <a href="{{ route('pengelolaan', ['username' => $username]) }}"
                   class="mg-nav-link {{ request()->routeIs('pengelolaan') ? 'active' : '' }}">
                    <i class="bi bi-grid-3x3-gap"></i> Produk
                </a>
                <a href="{{ route('profile',     ['username' => $username]) }}"
                   class="mg-nav-link {{ request()->routeIs('profile')     ? 'active' : '' }}">
                    <i class="bi bi-person-circle"></i> Profil
                </a>
            </div>

            {{-- User & Logout --}}
            <div class="d-flex align-items-center gap-2">
                <div class="mg-user-chip">
                    <i class="bi bi-shield-fill-check" style="color:var(--accent);"></i>
                    {{ $username }}
                </div>
                <a href="{{ route('logout') }}" class="mg-btn-logout">
                    <i class="bi bi-box-arrow-right"></i> Keluar
                </a>
            </div>

        </div>
    </div>
</nav>
