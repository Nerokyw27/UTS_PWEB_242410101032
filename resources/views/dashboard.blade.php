@extends('layouts.app')
@section('title', 'Dashboard')

@section('content')
<div class="mg-container mg-page-wrap">
    <div class="mg-welcome fade-up mb-4">
        <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
            <div>
                <div class="mg-welcome-title">Selamat Datang, <span>{{ $username }}</span>! 🎮</div>
                <p class="mg-welcome-sub">Panel admin Nero Gaming Shop — kelola semua produk top up dari sini.</p>
                <div class="d-flex gap-2 mt-3 flex-wrap">
                    <a href="{{ route('pengelolaan', ['username' => $username]) }}" class="mg-btn-sm primary">
                        <i class="bi bi-grid-3x3-gap"></i> Kelola Produk
                    </a>
                    <a href="{{ route('profile', ['username' => $username]) }}" class="mg-btn-sm ghost">
                        <i class="bi bi-person-badge"></i> Profil Admin
                    </a>
                </div>
            </div>
            <div style="background:rgba(255,77,0,0.08); border:1px solid rgba(255,77,0,0.25); border-radius:10px; padding:0.9rem 1.5rem; text-align:center;">
                <div style="font-size:1.5rem; font-weight:900; color:var(--accent);">24 JAM</div>
                <div style="font-size:0.72rem; color:var(--muted); text-transform:uppercase; letter-spacing:0.06em;">Layanan Aktif</div>
            </div>
        </div>
    </div>

    <div class="mg-section-title fade-up d1"><i class="bi bi-bar-chart"></i> Ringkasan</div>
    <div class="mg-stat-grid">
        <div class="mg-stat-card fade-up d1"><span class="mg-stat-icon">🎮</span><div class="mg-stat-val">{{ $stats['total_produk'] }}</div><div class="mg-stat-lbl">Total Produk</div></div>
        <div class="mg-stat-card fade-up d2"><span class="mg-stat-icon">📂</span><div class="mg-stat-val">{{ $stats['total_kategori'] }}</div><div class="mg-stat-lbl">Kategori</div></div>
        <div class="mg-stat-card fade-up d3"><span class="mg-stat-icon">🔥</span><div class="mg-stat-val">{{ $stats['produk_populer'] }}</div><div class="mg-stat-lbl">Produk Populer</div></div>
        <div class="mg-stat-card fade-up d4"><span class="mg-stat-icon">💳</span><div class="mg-stat-val">{{ $stats['total_transaksi'] }}</div><div class="mg-stat-lbl">Total Transaksi</div></div>
    </div>

    @include('partials.trending', ['trending' => $trending, 'username' => $username])

    <div class="mg-section-title mt-4 fade-up"><i class="bi bi-clock-history"></i> Produk Terbaru Ditambahkan</div>
    <div class="row g-3">
        @foreach($recent as $p)
        <div class="col-sm-6 col-lg-3">
            <div class="mg-product-card fade-up">
                <div class="mg-product-thumb" style="background: {{ $p['gradient'] }};">
                    {{ $p['icon'] }}
                    @if($p['popular']) <span class="badge-popular">HOT</span> @endif
                </div>
                <div class="mg-product-body">
                    <div class="mg-product-name">{{ $p['name'] }}</div>
                    <div class="mg-product-item">{{ $p['item'] }}</div>
                    <div class="mg-product-meta">
                        <div>
                            <div class="mg-price">{{ $p['price_min'] }}+</div>
                            <div class="mg-price-lbl">Mulai dari</div>
                        </div>
                        <span class="mg-badge badge-{{ $p['category'] }}">{{ $p['cat_label'] }}</span>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
