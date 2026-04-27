@extends('layouts.app')
@section('title', 'Pengelolaan Produk')

@section('content')
<div class="mg-container mg-page-wrap">

    {{-- Header --}}
    <div class="d-flex align-items-start justify-content-between flex-wrap gap-3 mb-4 fade-up">
        <div>
            <div class="mg-page-title"><i class="bi bi-grid-3x3-gap-fill"></i> Pengelolaan Produk</div>
            <p class="mg-page-sub">Admin: <strong style="color:var(--accent);">{{ $username }}</strong> — {{ count($products) }} produk terdaftar</p>
        </div>
        <div class="d-flex flex-wrap gap-2">
            <button class="mg-btn-sm primary">
                <i class="bi bi-plus-circle"></i> Tambah Produk
            </button>
            <div class="mg-view-toggle">
                <button class="mg-view-btn active" id="btn-card" onclick="setView('card')">Kartu</button>
                <button class="mg-view-btn" id="btn-table" onclick="setView('table')">Tabel</button>
            </div>
        </div>
    </div>

    {{-- Filter kategori --}}
    <div class="mg-filter-tabs fade-up d1">
        <button class="mg-filter-btn active" data-cat="all" onclick="setFilter(this, 'all')">Semua</button>
        @foreach($categories as $key => $label)
            <button class="mg-filter-btn" data-cat="{{ $key }}" onclick="setFilter(this, '{{ $key }}')">{{ $label }}</button>
        @endforeach
    </div>

    {{-- Kartu produk --}}
    <div id="view-card">
        <div class="mg-product-grid" style="display:grid; grid-template-columns:repeat(auto-fit, minmax(260px,1fr)); gap:1rem;">
            @foreach($products as $index => $p)
            <div class="mg-product-card fade-up" style="animation-delay: {{ $index * 0.05 }}s;"
                 data-cat="{{ $p['category'] }}">
                <div class="mg-product-thumb" style="background:{{ $p['gradient'] }};">
                    {{ $p['icon'] }}
                    @if($p['popular']) <span class="badge-popular">HOT</span> @endif
                </div>
                <div class="mg-product-body">
                    <div class="mg-product-name">{{ $p['name'] }}</div>
                    <div class="mg-product-item"><i class="bi bi-tag me-1"></i>{{ $p['item'] }}</div>
                    <div class="mg-product-meta">
                        <div>
                            <div class="mg-price">{{ $p['price_min'] }} – {{ $p['price_max'] }}</div>
                            <div class="mg-price-lbl">Rentang Harga</div>
                        </div>
                        <span class="mg-badge badge-{{ $p['category'] }}">{{ $p['cat_label'] }}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    {{-- Tabel --}}
    <div id="view-table" style="display:none;">
        <div class="mg-table-wrap">
            <table class="mg-table">
                <thead>
                    <tr>
                        <th>#</th><th>Produk</th><th>Kategori</th><th>Item</th><th>Harga Mulai</th><th>Harga Maks</th><th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $p)
                    <tr data-cat="{{ $p['category'] }}">
                        <td style="color:var(--muted);">{{ $p['id'] }}</td>
                        <td>
                            <div style="display:flex; align-items:center; gap:0.6rem;">
                                <div style="width:32px;height:32px;border-radius:7px;background:{{ $p['gradient'] }};display:flex;align-items:center;justify-content:center;font-size:1rem;flex-shrink:0;">{{ $p['icon'] }}</div>
                                <div>
                                    <div style="font-weight:600;">{{ $p['name'] }}</div>
                                    @if($p['popular'])<span style="font-size:0.65rem;color:var(--accent);font-weight:700;">HOT</span>@endif
                                </div>
                            </div>
                        </td>
                        <td><span class="mg-badge badge-{{ $p['category'] }}">{{ $p['cat_label'] }}</span></td>
                        <td style="color:var(--muted); font-size:0.82rem;">{{ $p['item'] }}</td>
                        <td style="color:var(--accent); font-weight:600;">{{ $p['price_min'] }}</td>
                        <td style="font-size:0.82rem;">{{ $p['price_max'] }}</td>
                        <td><span style="color:#55dd88; font-size:0.78rem; font-weight:600;">● {{ $p['status'] }}</span></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
let currentView = 'card';
let currentFilter = 'all';

function setView(view) {
    if (view === currentView) return;
    document.getElementById('view-card').style.display  = view === 'card'  ? '' : 'none';
    document.getElementById('view-table').style.display = view === 'table' ? '' : 'none';
    document.getElementById('btn-card').classList.toggle('active',  view === 'card');
    document.getElementById('btn-table').classList.toggle('active', view === 'table');
    currentView = view;
    setFilter(null, currentFilter);
}

function setFilter(btn, cat) {
    document.querySelectorAll('.mg-filter-btn').forEach(b => b.classList.remove('active'));
    if (btn) btn.classList.add('active');
    currentFilter = cat;

    document.querySelectorAll('.mg-product-card[data-cat]').forEach(card => {
        card.style.display = (cat === 'all' || card.dataset.cat === cat) ? '' : 'none';
    });

    document.querySelectorAll('tbody tr[data-cat]').forEach(row => {
        row.style.display = (cat === 'all' || row.dataset.cat === cat) ? '' : 'none';
    });
}

document.addEventListener('DOMContentLoaded', function() {
    setFilter(document.querySelector('.mg-filter-btn[data-cat="all"]'), 'all');
});
</script>
@endsection