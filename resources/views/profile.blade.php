@extends('layouts.app')
@section('title', 'Profil Admin')

@section('content')
<div class="mg-container mg-page-wrap">
    <div class="row g-4">
        <div class="col-lg-4">
            <div class="mg-profile-card fade-up">
                <div class="mg-profile-banner"></div>
                <div class="mg-profile-body">

                    <div class="mg-avatar-wrap" style="margin-top:-28px; margin-bottom:0.75rem;">
                        <div class="mg-avatar pulse-glow"
                             style="position:relative; z-index:1; border-radius:50%;">
                            🐕
                        </div>
                    </div>

                    <div class="mg-profile-name">{{ $profile['username'] }}</div>
                    <div class="mg-profile-role"><i class="bi bi-shield-fill-check"></i>{{ $profile['role'] }}</div>

                    <div class="mg-info-grid mt-3">
                        <div class="mg-info-item">
                            <div class="mg-info-key">Email</div>
                            <div class="mg-info-val" style="font-size:0.78rem;">{{ $profile['email'] }}</div>
                        </div>
                        <div class="mg-info-item">
                            <div class="mg-info-key">Bergabung</div>
                            <div class="mg-info-val">{{ $profile['bergabung'] }}</div>
                        </div>
                        <div class="mg-info-item">
                            <div class="mg-info-key">Login Terakhir</div>
                            <div class="mg-info-val">{{ $profile['last_login'] }}</div>
                        </div>
                        <div class="mg-info-item">
                            <div class="mg-info-key">Produk Dikelola</div>
                            <div class="mg-info-val" style="color:var(--accent);">{{ $profile['total_kelola'] }}</div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-lg-8">
            <div class="mg-section-title fade-up"><i class="bi bi-pie-chart"></i> Distribusi Produk per Kategori</div>
            <div class="mg-list-card mb-4 fade-up d1">
                <div style="padding:1.1rem 1.25rem;">
                    @foreach($kategori_stats as $ks)
                    <div class="mg-bar-item">
                        <div class="mg-bar-label">
                            <span style="font-size:0.82rem; color:var(--text);">{{$ks['label']}}</span>
                            <span style="font-size:0.78rem; color:var(--muted);">
                                {{$ks['jumlah']}} produk ({{$ks['persen']}}%)
                            </span>
                        </div>
                        <div class="mg-bar-track">
                            <div class="mg-bar-fill" style="width:{{$ks['persen']}}%; background:{{$ks['warna']}};"></div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="mg-section-title fade-up d2"><i class="bi bi-clock-history"></i> Riwayat Aktivitas</div>
            <div class="mg-list-card fade-up d2 mb-4">
                <div class="mg-list-head">Log Aktivitas Admin</div>
                @foreach($aktivitas as $a)
                <div class="mg-activity-item">
                    <span class="mg-activity-icon">{{ $a['ikon'] }}</span>
                    <div style="flex:1;">
                        <div class="mg-activity-text">{{ $a['aksi'] }}</div>
                        <div class="mg-activity-time">{{ $a['waktu'] }}</div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="mg-section-title fade-up d3"><i class="bi bi-collection"></i> Semua Produk yang Dikelola</div>
            <div class="mg-list-card fade-up d3">
                <div class="mg-list-head">{{ count($products) }} Produk Terdaftar</div>
                @foreach($products as $p)
                <div class="mg-list-row">
                    <div class="d-flex align-items-center gap-3" style="flex:1; min-width:0;">
                        <div class="mg-list-icon" style="background:{{ $p['gradient'] }};">{{ $p['icon'] }}</div>
                        <div>
                            <div class="mg-list-name">{{ $p['name'] }}</div>
                            <div class="mg-list-sub">{{ $p['item'] }}</div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-2 flex-shrink-0">
                        <span class="mg-badge badge-{{ $p['category'] }}">{{ $p['cat_label'] }}</span>
                        <span style="font-size:0.78rem; color:var(--accent); font-weight:600; min-width:60px; text-align:right;">
                            {{ $p['price_min'] }}+
                        </span>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection