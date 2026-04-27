<div class="mg-section-title">
    <i class="bi bi-fire"></i> Produk Terpopuler
</div>
<div class="mg-list-card">
    <div class="mg-list-head"><i class="bi bi-star-fill me-2" style="color:var(--accent);"></i>Top Produk</div>
    @foreach($trending as $p)
    <div class="mg-list-row">
        <div class="d-flex align-items-center gap-3">
            <div class="mg-list-icon" style="background: {{ $p['gradient'] }};">{{ $p['icon'] }}</div>
            <div>
                <div class="mg-list-name">{{ $p['name'] }}</div>
                <div class="mg-list-sub">{{ $p['item'] }}</div>
            </div>
        </div>
        <div class="d-flex align-items-center gap-2">
            <span class="mg-badge badge-{{ $p['category'] }}">{{ $p['cat_label'] }}</span>
            <span style="font-size:0.78rem; color:var(--accent); font-weight:600;">{{ $p['price_min'] }}+</span>
        </div>
    </div>
    @endforeach
</div>
