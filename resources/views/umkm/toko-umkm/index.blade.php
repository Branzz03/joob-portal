<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko UMKM - Jelajahi Produk Lokal Unggulan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        body {
            background-color: #ffffff;
            font-family: 'Segoe UI', sans-serif;
        }
        .navbar-custom {
            background-color: #263341;
            padding: 0.75rem 1.5rem;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .navbar-custom .navbar-brand {
            font-weight: 900;
            letter-spacing: 1px;
            font-size: 1.5rem;
        }
        .navbar-custom .nav-link {
            color: rgba(255, 255, 255, 0.75);
            font-weight: 500;
            transition: color 0.3s;
        }
        .navbar-custom .nav-link:hover,
        .navbar-custom .nav-link.active {
            color: #ffffff;
        }
        .btn-outline-light {
            border-color: rgba(255, 255, 255, 0.5);
            color: rgba(255, 255, 255, 0.75);
        }
        .btn-outline-light:hover {
            background-color: rgba(255, 255, 255, 0.1);
            border-color: #ffffff;
            color: #ffffff;
        }
        .btn-custom-primary {
            background-color: #f97316;
            border-color: #f97316;
            color: white;
            font-weight: bold;
        }
        .btn-custom-primary:hover {
            background-color: #fb923c;
            border-color: #fb923c;
        }
        .hero-section {
            background: linear-gradient(rgba(38, 51, 65, 0.8), rgba(38, 51, 65, 0.8)), url('https://placehold.co/1920x600/333333/FFFFFF?text=Produk+Lokal+Semarang') no-repeat center center;
            background-size: cover;
            color: white;
            padding: 6rem 0;
            text-align: center;
        }
        .search-bar {
            max-width: 600px;
            margin: 2rem auto 0 auto;
        }
        .section-title {
            font-weight: 700;
            margin-bottom: 2.5rem;
            text-align: center;
        }
        .category-card {
            background: #f8f9fa;
            border: 1px solid #e9ecef;
            border-radius: 0.75rem;
            padding: 2rem;
            text-align: center;
            transition: all 0.3s ease;
        }
        .category-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.08);
            border-color: #f97316;
        }
        .category-card .icon {
            font-size: 3rem;
            color: #f97316;
            margin-bottom: 1rem;
        }
        .product-card {
            border: 1px solid #e9ecef;
            border-radius: 0.75rem;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            height: 100%; /* Membuat kartu sama tinggi */
        }
        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
        }
        .product-card .card-img-top {
            height: 220px;
            object-fit: cover;
        }
        .product-card .card-body {
            padding: 1.25rem;
            display: flex;
            flex-direction: column;
        }
        .product-card .shop-info {
            display: flex;
            align-items: center;
            margin-bottom: 0.75rem;
        }
        .product-card .shop-info img {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            margin-right: 0.5rem;
        }
        .product-card .shop-info .shop-name {
            font-size: 0.875rem;
            color: #6c757d;
        }
        .product-card .card-title {
            font-weight: 600;
            margin-bottom: 0.5rem;
            flex-grow: 1; /* Mendorong harga ke bawah */
        }
        .product-card .card-price {
            font-size: 1.2rem;
            font-weight: 700;
            color: #f97316;
        }
        .footer {
            background-color: #263341;
            color: white;
            padding: 3rem 0;
        }
        .footer a {
            color: rgba(255, 255, 255, 0.75);
            text-decoration: none;
            transition: color 0.3s;
        }
        .footer a:hover {
            color: white;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-custom navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">MESSARI</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('berita.index') }}">Berita Terkini</a></li>
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{ route('toko-umkm.index') }}">Toko Umkm</a></li>
                </ul>
                <div class="d-flex">
                    <a href="{{ route('login') }}" class="btn btn-outline-light me-2">MASUK</a>
                    <a href="{{ route('perusahaan') }}" class="btn btn-custom-primary">Untuk Perusahaan</a>
                </div>
            </div>
        </div>
    </nav>

    <section class="hero-section">
        <div class="container">
            <h1 class="display-3 fw-bold">Temukan Produk Lokal Semarang</h1>
            <p class="lead">Dukung pertumbuhan UMKM dengan membeli produk-produk berkualitas langsung dari pengrajinnya.</p>
            <div class="search-bar">
                <div class="input-group">
                    <input type="text" class="form-control form-control-lg" placeholder="Cari produk atau nama toko...">
                    <button class="btn btn-custom-primary px-4" type="button"><i class="bi bi-search"></i></button>
                </div>
            </div>
        </div>
    </section>

    <main class="container py-5">
        <section class="mb-5 py-5">
            <h2 class="section-title">Jelajahi Berdasarkan Skala Usaha</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="category-card">
                        <div class="icon"><i class="bi bi-shop-window"></i></div>
                        <h4 class="h5 fw-bold">Usaha Mikro</h4>
                        <p class="text-muted small">Warung, pedagang kaki lima, dan usaha rumahan dengan omzet hingga Rp 300 juta/tahun.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="category-card">
                        <div class="icon"><i class="bi bi-building"></i></div>
                        <h4 class="h5 fw-bold">Usaha Kecil</h4>
                        <p class="text-muted small">Toko, konveksi, dan bengkel dengan omzet hingga Rp 2.5 miliar/tahun.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="category-card">
                        <div class="icon"><i class="bi bi-globe2"></i></div>
                        <h4 class="h5 fw-bold">Usaha Menengah</h4>
                        <p class="text-muted small">Pabrik kecil dan produsen ekspor dengan omzet hingga Rp 50 miliar/tahun.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="mb-5">
            <h2 class="section-title">Filter Berdasarkan Lokasi</h2>
            <div class="card shadow-sm">
                <div class="card-body p-4">
                    <div class="row g-3 align-items-end">
                        <div class="col-md-4">
                            <label for="filterKota" class="form-label fw-bold">Kota/Kabupaten</label>
                            <select id="filterKota" class="form-select form-select-lg">
                                <option value="">Pilih Kota/Kabupaten</option>
                                <option value="Kota Semarang" selected>Kota Semarang</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="filterKecamatan" class="form-label fw-bold">Kecamatan</label>
                            <select id="filterKecamatan" class="form-select form-select-lg" disabled>
                                <option value="">Pilih Kecamatan</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="filterKelurahan" class="form-label fw-bold">Kelurahan</label>
                            <select id="filterKelurahan" class="form-select form-select-lg" disabled>
                                <option value="">Pilih Kelurahan</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                           <div class="d-grid gap-2">
                               <button id="btnApplyFilter" class="btn btn-custom-primary btn-lg">Terapkan</button>
                               <button id="btnResetFilter" class="btn btn-outline-secondary">Reset</button>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-5">
            <h2 class="section-title">Produk Unggulan</h2>
            <div id="product-list-container" class="row g-4">
                </div>
            <div id="no-products-message" class="alert alert-warning text-center mt-4 d-none">
                Tidak ada produk yang ditemukan untuk filter ini.
            </div>
            <nav aria-label="Page navigation" class="mt-5">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>
        </section>
    </main>

    <footer class="footer mt-auto">
        <div class="container text-center">
            <p class="mb-1">&copy; 2025 Messari. All Rights Reserved.</p>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Privasi</a></li>
                <li class="list-inline-item"><a href="#">Syarat & Ketentuan</a></li>
                <li class="list-inline-item"><a href="#">Hubungi Kami</a></li>
            </ul>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            
            // ==========================================================
            // DATABASE MINI (SIMULASI)
            // ==========================================================
            const allProducts = [
                { id: 1, name: 'Lumpia Original Semarang', price: 15000, shopName: 'Lumpia Mataram', image: 'https://placehold.co/600x400/f97316/FFFFFF?text=Lumpia', shopLogo: 'https://placehold.co/60/f97316/ffffff?text=L', location: { kecamatan: 'Semarang Tengah', kelurahan: 'Miroto' } },
                { id: 2, name: 'Wingko Babat Kering', price: 25000, shopName: 'Wingko Juwana', image: 'https://placehold.co/600x400/10B981/FFFFFF?text=Wingko', shopLogo: 'https://placehold.co/60/10B981/ffffff?text=W', location: { kecamatan: 'Semarang Utara', kelurahan: 'Tanjungmas' } },
                { id: 3, name: 'Kopi Robusta Gunung Kelir', price: 55000, shopName: 'Kopi Lokal Jaya', image: 'https://placehold.co/600x400/4a5568/FFFFFF?text=Kopi', shopLogo: 'https://placehold.co/60/4a5568/ffffff?text=K', location: { kecamatan: 'Gunungpati', kelurahan: 'Gunungpati' } },
                { id: 4, name: 'Kemeja Batik Tulis Motif Asem', price: 350000, shopName: 'Batik Semarangan', image: 'https://placehold.co/600x400/3b82f6/FFFFFF?text=Batik+Pria', shopLogo: 'https://placehold.co/60/3b82f6/ffffff?text=B', location: { kecamatan: 'Semarang Tengah', kelurahan: 'Kauman' } },
                { id: 5, name: 'Bandeng Presto Vacuum', price: 75000, shopName: 'Bandeng Juwana', image: 'https://placehold.co/600x400/ca8a04/FFFFFF?text=Bandeng', shopLogo: 'https://placehold.co/60/ca8a04/ffffff?text=B', location: { kecamatan: 'Semarang Barat', kelurahan: 'Krobokan' } },
                { id: 6, name: 'Tas Kulit Asli Wanita', price: 550000, shopName: 'Galeri Kulit', image: 'https://placehold.co/600x400/7c3aed/FFFFFF?text=Tas+Kulit', shopLogo: 'https://placehold.co/60/7c3aed/ffffff?text=G', location: { kecamatan: 'Candisari', kelurahan: 'Jatingaleh' } },
                { id: 7, name: 'Roti Ganjel Rel Khas Semarang', price: 20000, shopName: 'Roti Klasik', image: 'https://placehold.co/600x400/be123c/FFFFFF?text=Roti', shopLogo: 'https://placehold.co/60/be123c/ffffff?text=R', location: { kecamatan: 'Semarang Timur', kelurahan: 'Rejosari' } },
                { id: 8, name: 'Blouse Batik Cap Abstrak', price: 220000, shopName: 'Batik Semarangan', image: 'https://placehold.co/600x400/3b82f6/FFFFFF?text=Batik+Wanita', shopLogo: 'https://placehold.co/60/3b82f6/ffffff?text=B', location: { kecamatan: 'Semarang Tengah', kelurahan: 'Kauman' } },
                { id: 9, name: 'Moaci Gemini Kentangan', price: 30000, shopName: 'Moaci Gemini', image: 'https://placehold.co/600x400/22c55e/FFFFFF?text=Moaci', shopLogo: 'https://placehold.co/60/22c55e/ffffff?text=M', location: { kecamatan: 'Gajahmungkur', kelurahan: 'Sampangan' } },
                { id: 10, name: 'Sewa Apartemen Studio Tembalang', price: 2500000, shopName: 'Sewa Properti Tembalang', image: 'https://placehold.co/600x400/0ea5e9/FFFFFF?text=Apartemen', shopLogo: 'https://placehold.co/60/0ea5e9/ffffff?text=S', location: { kecamatan: 'Tembalang', kelurahan: 'Bulusan' } },
                { id: 11, name: 'Bibit Durian Montong Unggul', price: 150000, shopName: 'Kebun Bibit Gunungpati', image: 'https://placehold.co/600x400/4a5568/FFFFFF?text=Bibit+Durian', shopLogo: 'https://placehold.co/60/4a5568/ffffff?text=K', location: { kecamatan: 'Gunungpati', kelurahan: 'Sadeng' } },
                { id: 12, name: 'Jasa Cuci Mobil Profesional', price: 50000, shopName: 'Ngaliyan Car Wash', image: 'https://placehold.co/600x400/64748b/FFFFFF?text=Cuci+Mobil', shopLogo: 'https://placehold.co/60/64748b/ffffff?text=N', location: { kecamatan: 'Ngaliyan', kelurahan: 'Bringin' } },
            ];

            // ==========================================================
            // DATA LOKASI UNTUK FILTER DROPDOWN
            // ==========================================================
            const dataSemarang = {
                "Kota Semarang": {
                    "Banyumanik": ["Banyumanik", "Gedawang", "Jabungan", "Ngesrep", "Padangsari", "Pedalangan", "Pudakpayung", "Srondol Kulon", "Srondol Wetan", "Sumurboto", "Tinjomoyo"],
                    "Candisari": ["Candi", "Jatingaleh", "Jomblang", "Kaliwiru", "Karanganyar Gunung", "Tegalsari", "Wonotingal"],
                    "Gajahmungkur": ["Bendan Duwur", "Bendan Ngisor", "Bendungan", "Gajahmungkur", "Karangrejo", "Lempongsari", "Petompon", "Sampangan"],
                    "Gayamsari": ["Gayamsari", "Kaligawe", "Pandean Lamper", "Sambirejo", "Sawahbesar", "Siwalan", "Tambakrejo"],
                    "Genuk": ["Bangetayu Kulon", "Bangetayu Wetan", "Banjardowo", "Gebangsari", "Genuksari", "Karangroto", "Kudu", "Muktiharjo Lor", "Penggaron Lor", "Sembungharjo", "Terboyo Kulon", "Terboyo Wetan"],
                    "Gunungpati": ["Cepoko", "Gunungpati", "Jatirejo", "Kalisegoro", "Kandri", "Mangunsari", "Ngijo", "Nongkosawit", "Pakintelan", "Patemon", "Plalangan", "Pongangan", "Sadeng", "Sekaran", "Sukorejo", "Sumurejo"],
                    "Mijen": ["Bubakan", "Cangkiran", "Jatibarang", "Jatisari", "Karangmalang", "Kedungpane", "Mijen", "Ngadirgo", "Nongkosawit", "Pesantren", "Polaman", "Purwosari", "Tambangan", "Wonolopo", "Wonosari"],
                    "Ngaliyan": ["Bambankerep", "Bringin", "Gondoriyo", "Kalipancur", "Ngaliyan", "Podorejo", "Purwoyoso", "Tambakaji", "Wonosari"],
                    "Pedurungan": ["Gemah", "Kalicari", "Muktiharjo Kidul", "Palebon", "Pedurungan Kidul", "Pedurungan Lor", "Pedurungan Tengah", "Penggaron Kidul", "Plamongan Sari", "Tlogosari Kulon", "Tlogosari Wetan", "Tlogomulyo"],
                    "Semarang Barat": ["Bojongsalaman", "Bongsari", "Cabean", "Gisikdrono", "Kalibanteng Kidul", "Kalibanteng Kulon", "Karangayu", "Kembangarum", "Krapyak", "Krobokan", "Manyaran", "Ngemplak Simongan", "Salamanmloyo", "Tambakharjo", "Tawangmas", "Tawangsari"],
                    "Semarang Selatan": ["Barusari", "Bulustalan", "Lamper Kidul", "Lamper Lor", "Lamper Tengah", "Mugassari", "Peterongan", "Pleburan", "Randusari", "Wonodri"],
                    "Semarang Tengah": ["Bangunharjo", "Brumbungan", "Gabahan", "Jagalan", "Karangkidul", "Kauman", "Kembangsari", "Kranggan", "Miroto", "Pekunden", "Pendrikan Kidul", "Pendrikan Lor", "Purwodinatan", "Sekayu"],
                    "Semarang Timur": ["Bugangan", "Karangtempel", "Karangturi", "Kebonagung", "Kemijen", "Mlatibaru", "Mlatiharjo", "Rejomulyo", "Rejosari", "Sarirejo", "Sawahbesar"],
                    "Semarang Utara": ["Bandarharjo", "Bulu Lor", "Dadapsari", "Kuningan", "Panggung Kidul", "Panggung Lor", "Plombokan", "Purwosari", "Tanjungmas"],
                    "Tembalang": ["Bulusan", "Jangli", "Kedungmundu", "Kramas", "Mangunharjo", "Meteseh", "Pedalangan", "Rowosari", "Sambiroto", "Sendangguwo", "Sendangmulyo", "Tembalang"],
                    "Tugu": ["Jerakah", "Karanganyar", "Mangkang Kulon", "Mangkang Wetan", "Randu Garut", "Tugurejo"]
                }
            };
            
            // ==========================================================
            // SELEKSI ELEMEN DOM
            // ==========================================================
            const kotaSelect = document.getElementById('filterKota');
            const kecamatanSelect = document.getElementById('filterKecamatan');
            const kelurahanSelect = document.getElementById('filterKelurahan');
            const applyButton = document.getElementById('btnApplyFilter');
            const resetButton = document.getElementById('btnResetFilter');
            const productContainer = document.getElementById('product-list-container');
            const noProductsMessage = document.getElementById('no-products-message');

            // ==========================================================
            // FUNGSI-FUNGSI UTAMA
            // ==========================================================

            /**
             * Fungsi untuk menampilkan produk di halaman.
             * @param {Array} products - Array berisi objek produk yang akan ditampilkan.
             */
            function renderProducts(products) {
                productContainer.innerHTML = ''; // Kosongkan kontainer produk
                if (products.length === 0) {
                    noProductsMessage.classList.remove('d-none'); // Tampilkan pesan "tidak ada produk"
                } else {
                    noProductsMessage.classList.add('d-none'); // Sembunyikan pesan
                    products.forEach(product => {
                        const productHTML = `
                            <div class="col-md-4 col-lg-3">
                                <div class="card product-card">
                                    <img src="${product.image}" class="card-img-top" alt="${product.name}">
                                    <div class="card-body">
                                        <div class="shop-info">
                                            <img src="${product.shopLogo}" alt="Logo Toko">
                                            <span class="shop-name">${product.shopName}</span>
                                        </div>
                                        <h5 class="card-title">${product.name}</h5>
                                        <p class="card-price">Rp ${product.price.toLocaleString('id-ID')}</p>
                                    </div>
                                </div>
                            </div>
                        `;
                        productContainer.innerHTML += productHTML;
                    });
                }
            }

            function populateKecamatan() {
                const selectedKota = kotaSelect.value;
                kecamatanSelect.innerHTML = '<option value="">Semua Kecamatan</option>'; // Reset
                kelurahanSelect.innerHTML = '<option value="">Semua Kelurahan</option>'; // Reset
                kelurahanSelect.disabled = true;

                if (selectedKota && dataSemarang[selectedKota]) {
                    const kecamatanList = Object.keys(dataSemarang[selectedKota]);
                    kecamatanList.sort().forEach(kecamatan => {
                        const option = document.createElement('option');
                        option.value = kecamatan;
                        option.textContent = kecamatan;
                        kecamatanSelect.appendChild(option);
                    });
                    kecamatanSelect.disabled = false;
                } else {
                    kecamatanSelect.disabled = true;
                }
            }

            function populateKelurahan() {
                const selectedKota = kotaSelect.value;
                const selectedKecamatan = kecamatanSelect.value;
                kelurahanSelect.innerHTML = '<option value="">Semua Kelurahan</option>'; // Reset

                if (selectedKecamatan && dataSemarang[selectedKota] && dataSemarang[selectedKota][selectedKecamatan]) {
                    const kelurahanList = dataSemarang[selectedKota][selectedKecamatan];
                    kelurahanList.sort().forEach(kelurahan => {
                        const option = document.createElement('option');
                        option.value = kelurahan;
                        option.textContent = kelurahan;
                        kelurahanSelect.appendChild(option);
                    });
                    kelurahanSelect.disabled = false;
                } else {
                    kelurahanSelect.disabled = true;
                }
            }
            
            // ==========================================================
            // EVENT LISTENERS (LOGIKA FILTER)
            // ==========================================================
            
            kotaSelect.addEventListener('change', populateKecamatan);
            kecamatanSelect.addEventListener('change', populateKelurahan);
            
            applyButton.addEventListener('click', function() {
                const kecamatan = kecamatanSelect.value;
                const kelurahan = kelurahanSelect.value;

                let filteredProducts = allProducts.filter(product => {
                    const matchKecamatan = !kecamatan || product.location.kecamatan === kecamatan;
                    const matchKelurahan = !kelurahan || product.location.kelurahan === kelurahan;
                    return matchKecamatan && matchKelurahan;
                });
                
                renderProducts(filteredProducts);
            });

            resetButton.addEventListener('click', function() {
                kotaSelect.value = "Kota Semarang";
                populateKecamatan(); // Ini akan mereset kecamatan & kelurahan ke pilihan default
                renderProducts(allProducts); // Tampilkan kembali semua produk
            });

            // ==========================================================
            // INISIALISASI HALAMAN
            // ==========================================================
            if (kotaSelect.value) {
                populateKecamatan();
            }
            renderProducts(allProducts); // Tampilkan semua produk saat halaman pertama kali dimuat
        });
    </script>
</body>
</html>