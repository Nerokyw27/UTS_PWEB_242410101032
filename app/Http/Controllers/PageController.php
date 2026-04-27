<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Data produk
    private function getProducts(): array
    {
        return [
            [
                'id'          => 1,
                'name'        => 'Ragnarok Origin Classic',
                'category'    => 'all',
                'cat_label'   => 'New Release',
                'item'        => 'Zeny / Item',
                'price_min'   => 'Rp 5.000',
                'price_max'   => 'Rp 500.000',
                'icon'        => '🌸',
                'gradient'    => 'linear-gradient(135deg,#ff6699,#cc0066,#990033)',
                'status'      => 'Aktif',
                'popular'     => true,
            ],
            [
                'id'          => 2,
                'name'        => 'The Seven Deadly Sins',
                'category'    => 'login',
                'cat_label'   => 'Via Login',
                'item'        => 'Diamond / Gems',
                'price_min'   => 'Rp 3.000',
                'price_max'   => 'Rp 300.000',
                'icon'        => '⚔️',
                'gradient'    => 'linear-gradient(135deg,#2a1a00,#886600,#ccaa00)',
                'status'      => 'Aktif',
                'popular'     => false,
            ],
            [
                'id'          => 3,
                'name'        => 'Ragnarok Endless Trails',
                'category'    => 'login',
                'cat_label'   => 'Via Login',
                'item'        => 'Droplink GOC',
                'price_min'   => 'Rp 5.000',
                'price_max'   => 'Rp 250.000',
                'icon'        => '🍃',
                'gradient'    => 'linear-gradient(135deg,#006633,#00aa55,#00ff88)',
                'status'      => 'Aktif',
                'popular'     => false,
            ],
            [
                'id'          => 4,
                'name'        => 'Banishers: Faiths Entwined',
                'category'    => 'login',
                'cat_label'   => 'Via Login',
                'item'        => 'Game Key',
                'price_min'   => 'Rp 120.000',
                'price_max'   => 'Rp 350.000',
                'icon'        => '🌑',
                'gradient'    => 'linear-gradient(135deg,#0a0a1a,#1a1a3a,#2a2a5a)',
                'status'      => 'Aktif',
                'popular'     => false,
            ],
            [
                'id'          => 5,
                'name'        => 'Mobile Legends',
                'category'    => 'direct',
                'cat_label'   => 'Direct Topup',
                'item'        => 'Diamonds',
                'price_min'   => 'Rp 1.500',
                'price_max'   => 'Rp 500.000',
                'icon'        => '⚔️',
                'gradient'    => 'linear-gradient(135deg,#001a4a,#0033aa,#0066ff)',
                'status'      => 'Aktif',
                'popular'     => true,
            ],
            [
                'id'          => 6,
                'name'        => 'Genshin Impact',
                'category'    => 'direct',
                'cat_label'   => 'Direct Topup',
                'item'        => 'Genesis Crystals',
                'price_min'   => 'Rp 15.000',
                'price_max'   => 'Rp 1.500.000',
                'icon'        => '🌌',
                'gradient'    => 'linear-gradient(135deg,#1a0a3a,#4400aa,#6600ff)',
                'status'      => 'Aktif',
                'popular'     => true,
            ],
            [
                'id'          => 7,
                'name'        => 'Roblox',
                'category'    => 'voucher',
                'cat_label'   => 'Voucher',
                'item'        => 'Robux',
                'price_min'   => 'Rp 10.000',
                'price_max'   => 'Rp 800.000',
                'icon'        => '🧱',
                'gradient'    => 'linear-gradient(135deg,#cc3300,#ff5500,#ff8800)',
                'status'      => 'Aktif',
                'popular'     => true,
            ],
            [
                'id'          => 8,
                'name'        => 'Free Fire',
                'category'    => 'login',
                'cat_label'   => 'Via Login',
                'item'        => 'Diamonds',
                'price_min'   => 'Rp 2.000',
                'price_max'   => 'Rp 400.000',
                'icon'        => '🔫',
                'gradient'    => 'linear-gradient(135deg,#3a1a00,#884400,#cc6600)',
                'status'      => 'Aktif',
                'popular'     => true,
            ],
            [
                'id'          => 9,
                'name'        => 'PUBG Mobile',
                'category'    => 'direct',
                'cat_label'   => 'Direct Topup',
                'item'        => 'UC (Unknown Cash)',
                'price_min'   => 'Rp 3.000',
                'price_max'   => 'Rp 800.000',
                'icon'        => '🎯',
                'gradient'    => 'linear-gradient(135deg,#1a2a1a,#2a4a2a,#4a7a4a)',
                'status'      => 'Aktif',
                'popular'     => true,
            ],
            [
                'id'          => 10,
                'name'        => 'Steam Wallet Code',
                'category'    => 'voucher',
                'cat_label'   => 'Voucher',
                'item'        => 'Steam Credits',
                'price_min'   => 'Rp 15.000',
                'price_max'   => 'Rp 1.000.000',
                'icon'        => '🖥️',
                'gradient'    => 'linear-gradient(135deg,#0a1a2a,#102a4a,#1a3a6a)',
                'status'      => 'Aktif',
                'popular'     => false,
            ],
            [
                'id'          => 11,
                'name'        => 'Valorant',
                'category'    => 'login',
                'cat_label'   => 'Via Login',
                'item'        => 'VP (Valorant Points)',
                'price_min'   => 'Rp 10.000',
                'price_max'   => 'Rp 1.000.000',
                'icon'        => '🗡️',
                'gradient'    => 'linear-gradient(135deg,#2a0000,#660000,#aa0000)',
                'status'      => 'Aktif',
                'popular'     => true,
            ],
            [
                'id'          => 12,
                'name'        => 'Netflix Premium',
                'category'    => 'entertainment',
                'cat_label'   => 'Entertainment',
                'item'        => 'Akun / Voucher',
                'price_min'   => 'Rp 45.000',
                'price_max'   => 'Rp 65.000',
                'icon'        => '🎬',
                'gradient'    => 'linear-gradient(135deg,#1a0000,#550000,#cc0000)',
                'status'      => 'Aktif',
                'popular'     => false,
            ],
            [
                'id'          => 13,
                'name'        => 'Spotify Premium',
                'category'    => 'entertainment',
                'cat_label'   => 'Entertainment',
                'item'        => 'Akun / Kode',
                'price_min'   => 'Rp 18.000',
                'price_max'   => 'Rp 65.000',
                'icon'        => '🎵',
                'gradient'    => 'linear-gradient(135deg,#001a00,#005500,#00aa00)',
                'status'      => 'Aktif',
                'popular'     => false,
            ],
            [
                'id'          => 14,
                'name'        => 'Telkomsel Pulsa',
                'category'    => 'pulsa',
                'cat_label'   => 'Pulsa',
                'item'        => 'Pulsa / Paket Data',
                'price_min'   => 'Rp 5.500',
                'price_max'   => 'Rp 102.000',
                'icon'        => '📱',
                'gradient'    => 'linear-gradient(135deg,#cc0000,#ff3300,#ff6600)',
                'status'      => 'Aktif',
                'popular'     => false,
            ],
        ];
    }

    // Halaman Login
    public function showLogin()
    {
        return view('login');
    }

    // Proses form login — teruskan username via query parameter
    public function authenticate(Request $request)
    {
        $username = trim($request->input('username', ''));

        if (empty($username)) {
            return redirect()->back()
                ->withErrors(['username' => 'Username tidak boleh kosong!'])
                ->withInput();
        }

        return redirect()->route('dashboard', ['username' => $username]);
    }

    // Dashboard
    public function dashboard(Request $request)
    {
        $username = $request->input('username', 'Admin');
        $products = $this->getProducts();

        $stats = [
            'total_produk'     => count($products),
            'total_kategori'   => 6,
            'produk_populer'   => count(array_filter($products, fn($p) => $p['popular'])),
            'total_transaksi'  => '1.248',
        ];

        $trending = array_filter($products, fn($p) => $p['popular']);
        $trending = array_slice(array_values($trending), 0, 5);

        $recent = array_slice($products, 0, 4);

        return view('dashboard', compact('username', 'stats', 'trending', 'recent'));
    }

    // Pengelolaan Produk
    public function pengelolaan(Request $request)
    {
        $username = $request->input('username', 'Admin');
        $products = $this->getProducts();

        $categories = [
            'all'           => 'New Release',
            'direct'        => 'Direct Topup',
            'login'         => 'Via Login',
            'entertainment' => 'Entertainment',
            'voucher'       => 'Voucher',
            'pulsa'         => 'Pulsa',
        ];

        return view('pengelolaan', compact('username', 'products', 'categories'));
    }

    // Profile Admin
    public function profile(Request $request)
    {
        $username = $request->input('username', 'Admin');
        $products = $this->getProducts();

        $profile = [
            'username'     => $username,
            'role'         => 'Super Admin',
            'email'        => strtolower($username) . '@admin.com',
            'bergabung'    => 'Maret 2023',
            'last_login'   => 'Baru saja',
            'total_kelola' => count($products),
        ];

        $aktivitas = [
            ['waktu' => '2 menit lalu',   'aksi' => 'Login ke panel admin',            'ikon' => '🔑'],
            ['waktu' => '1 jam lalu',     'aksi' => 'Update status produk Valorant',   'ikon' => '✏️'],
            ['waktu' => '3 jam lalu',     'aksi' => 'Menambah produk Roblox Gift Card','ikon' => '➕'],
            ['waktu' => '1 hari lalu',    'aksi' => 'Export laporan bulanan',          'ikon' => '📄'],
            ['waktu' => '2 hari lalu',    'aksi' => 'Perbarui harga Mobile Legends',   'ikon' => '💰'],
        ];

        $kategori_stats = [
            ['label' => 'Direct Topup',  'jumlah' => 3, 'persen' => 21, 'warna' => '#0066ff'],
            ['label' => 'Via Login',     'jumlah' => 5, 'persen' => 36, 'warna' => '#00aa55'],
            ['label' => 'Voucher',       'jumlah' => 3, 'persen' => 21, 'warna' => '#ff6600'],
            ['label' => 'Entertainment', 'jumlah' => 2, 'persen' => 14, 'warna' => '#cc0000'],
            ['label' => 'Pulsa',         'jumlah' => 1, 'persen' => 7,  'warna' => '#aa00aa'],
        ];

        return view('profile', compact('username', 'profile', 'aktivitas', 'kategori_stats', 'products'));
    }

    // Logout
    public function logout()
    {
        return redirect()->route('login');
    }
}
