<!DOCTYPE html>
<html class="scroll-smooth" lang="id">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title>TB Sinar Jaya Jatayu - Toko Bahan Bangunan Kebayoran Baru</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400;1,600&display=swap"
        rel="stylesheet"
    />

    <!-- Material Symbols -->
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:FILL,wght@0..1,100..700&display=swap"
        rel="stylesheet"
    />

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>

    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "surface-variant": "#e0e3e5",
                        "inverse-primary": "#b0c9e8",
                        "tertiary": "#051325",
                        "surface-dim": "#d8dadc",
                        "on-background": "#191c1e",
                        "on-primary-fixed": "#011d35",
                        "surface-bright": "#f7f9fb",
                        "on-tertiary": "#ffffff",
                        "on-primary": "#ffffff",
                        "secondary-container": "#fc6018",
                        "on-secondary-fixed-variant": "#802a00",
                        "surface-container-lowest": "#ffffff",
                        "error-container": "#ffdad6",
                        "primary-container": "#0f2942",
                        "surface": "#f7f9fb",
                        "primary": "#001428",
                        "error": "#ba1a1a",
                        "surface-container-high": "#e6e8ea",
                        "on-secondary": "#ffffff",
                        "inverse-on-surface": "#eff1f3",
                        "outline-variant": "#c3c6ce",
                        "on-surface": "#191c1e",
                        "surface-container": "#eceef0",
                        "secondary": "#a83900",
                        "on-surface-variant": "#43474d",
                        "on-error-container": "#93000a"
                    },

                    borderRadius: {
                        DEFAULT: "0.125rem",
                        lg: "0.25rem",
                        xl: "0.5rem",
                        full: "0.75rem"
                    },

                    fontFamily: {
                        "sans-jakarta": ["Plus Jakarta Sans", "sans-serif"]
                    },

                    fontSize: {
                        "body-sm": ["12px", { lineHeight: "16px" }],
                        "body-md": ["14px", { lineHeight: "20px" }],
                        "body-lg": ["16px", { lineHeight: "24px" }],
                        "label-sm": ["11px", { lineHeight: "14px", letterSpacing: "0.04em" }],
                        "label-md": ["12px", { lineHeight: "16px", letterSpacing: "0.02em" }],
                        "label-lg": ["14px", { lineHeight: "20px" }],
                        "title-md": ["16px", { lineHeight: "24px" }],
                        "title-lg": ["18px", { lineHeight: "26px" }],
                        "headline-sm": ["20px", { lineHeight: "28px" }],
                        "headline-md": ["24px", { lineHeight: "32px" }],
                        "headline-lg": ["32px", { lineHeight: "40px" }],
                        "display-lg": ["48px", { lineHeight: "56px" }]
                    }
                }
            }
        };
    </script>

    <style>
        .material-symbols-outlined {
            font-family: 'Material Symbols Outlined';
            font-weight: normal;
            font-style: normal;
            font-size: 20px;
            line-height: 1;
            letter-spacing: normal;
            text-transform: none;
            display: inline-block;
            white-space: nowrap;
            word-wrap: normal;
            direction: ltr;
            -webkit-font-feature-settings: 'liga';
            -webkit-font-smoothing: antialiased;
        }
    </style>
</head>

<body class="bg-[#f7f9fb] text-[#191c1e] antialiased font-sans-jakarta">

<!-- ========================================================= -->
<!-- NAVBAR -->
<!-- ========================================================= -->

<header class="bg-white sticky top-0 z-50 border-b border-[#c3c6ce] shadow-sm">
    <div class="max-w-7xl mx-auto px-4 md:px-8 h-20 flex items-center justify-between gap-6">

        <!-- Brand + Search -->
        <div class="flex items-center gap-6 flex-1 max-w-2xl">

            <a href="{{ route('home') }}" class="flex items-center shrink-0 group">
                <span class="text-2xl md:text-3xl font-extrabold text-[#001428] tracking-tight">
                    Sinar Jaya
                </span>
            </a>

            <div class="relative w-full hidden sm:block">
                <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-[#74777e]">
                    <span class="material-symbols-outlined">search</span>
                </div>

                <input
                    id="productSearch"
                    type="search"
                    autocomplete="off"
                    aria-label="Cari produk"
                    placeholder="Cari semen, besi beton, cat dinding, pipa..."
                    class="w-full pl-10 pr-4 py-2 bg-white border border-[#c3c6ce] rounded text-sm text-[#191c1e] placeholder:text-[#74777e] focus:outline-none focus:ring-2 focus:ring-[#0f2942] focus:border-[#0f2942]"
                />

                <div class="absolute inset-y-0 right-0 pr-2 flex items-center">
                    <span class="px-1.5 py-0.5 text-[11px] bg-[#eceef0] border border-[#c3c6ce] rounded text-[#43474d]">
                        Ctrl K
                    </span>
                </div>
            </div>
        </div>

        <!-- Navigation -->
        <nav class="hidden lg:flex items-center gap-7">
            <a href="{{ route('home') }}"
               class="text-[#a83900] border-b-2 border-[#a83900] pb-1 font-semibold">
                Home
            </a>

            <a href="{{ route('katalog') }}"
               class="text-[#43474d] hover:text-[#a83900] transition-colors pb-1">
                Katalog
            </a>

            <a href="#cara-pesan"
               class="text-[#43474d] hover:text-[#a83900] transition-colors pb-1">
                Cara Pesan
            </a>

            <a href="#kontak"
               class="text-[#43474d] hover:text-[#a83900] transition-colors pb-1">
                Kontak
            </a>
        </nav>

        <!-- Actions -->
        <div class="flex items-center gap-3 shrink-0">

            <a
                href="tel:+628111075525"
                class="hidden xl:flex items-center gap-2 px-3 py-1.5 rounded bg-[#f2f4f6] border border-[#c3c6ce] text-[#191c1e] hover:border-[#a83900] hover:text-[#a83900] transition"
            >
                <span class="material-symbols-outlined text-[#a83900]">call</span>

                <div class="leading-tight text-left">
                    <p class="text-[11px] text-[#74777e]">Kontak Toko</p>
                    <p class="text-xs font-semibold">0811-1075-525</p>
                </div>
            </a>

            <button
                type="button"
                onclick="toggleRfqDrawer()"
                class="relative flex items-center gap-2 px-4 py-2.5 rounded bg-[#a83900] text-white font-semibold hover:bg-[#fc6018] transition"
            >
                <span class="material-symbols-outlined">shopping_cart</span>
                <span class="hidden sm:inline">Keranjang RFQ</span>

                <span
                    id="cartBadge"
                    class="inline-flex items-center justify-center w-5 h-5 text-[11px] font-bold bg-white text-[#a83900] rounded-full"
                >
                    0
                </span>
            </button>
        </div>
    </div>
</header>


<!-- ========================================================= -->
<!-- HERO -->
<!-- ========================================================= -->

<section id="home" class="relative bg-[#001428] overflow-hidden text-white">

    <div class="absolute inset-0 z-0">
        <div
            class="w-full h-full bg-cover bg-center"
            style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCH1LncYwTD4Z9TgiSK9Wis6FhdFNABTf3GOFjjWUDD-ranfG_LHgzRhzaGSZ8T-oCQUYINkVG03Jgl634pvGpaG2Wpt-JmpCBGoiBr3fjZzg5jJAhBYwv-w2kBt9j4HGhybjEbxOYeG3rVj7dyIwKtMCIqbqMflNsW4PujFdLa_QYT985yCrBTqaBVVxOn5rA-tRK51fb72ujRLbnoTfQGArfX2Dz8RF8MqDKh3n3DOPTylVxB12WY')"
        ></div>

        <div class="absolute inset-0 bg-gradient-to-r from-[#001428] via-[#001428]/95 to-[#0f2942]/85"></div>

        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_top_right,_var(--tw-gradient-stops))] from-[#a83900]/20 via-transparent to-transparent"></div>
    </div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 md:px-8 py-16 md:py-24 lg:py-28">

        <div class="max-w-3xl">

            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded bg-white/10 backdrop-blur-sm border border-white/20 text-white mb-6">
                <span class="material-symbols-outlined text-[#ffb59a]">location_on</span>

                <span class="text-xs md:text-sm tracking-wide">
                    Toko bahan bangunan di Kramat Pela, Kebayoran Baru, Jakarta Selatan
                </span>
            </div>

            <h1 class="text-3xl md:text-5xl font-extrabold leading-tight tracking-tight mb-6">
                Pusat Material &amp; Bahan Bangunan
                untuk Kebutuhan Proyek dan Renovasi
            </h1>

            <p class="text-base md:text-lg text-white/85 leading-relaxed mb-8 max-w-2xl">
                Temukan berbagai kebutuhan material bangunan melalui katalog kami.
                Pilih produk, masukkan ke RFQ, lalu hubungi toko untuk konfirmasi harga,
                ketersediaan, dan kebutuhan pembelian.
            </p>

            <div class="flex flex-wrap items-center gap-4 mb-12">

                <a
                    href="{{ route('katalog') }}"
                    class="inline-flex items-center gap-2 px-6 py-3.5 rounded bg-[#a83900] hover:bg-[#fc6018] text-white font-semibold shadow-md transition"
                >
                    <span>Lihat Katalog</span>
                    <span class="material-symbols-outlined">arrow_forward</span>
                </a>

                <a
                    href="tel:+628111075525"
                    class="inline-flex items-center gap-2.5 px-6 py-3.5 rounded bg-white text-[#001428] font-semibold hover:bg-[#f7f9fb] transition border border-white"
                >
                    <span class="material-symbols-outlined text-[#a83900]">call</span>
                    <span>Hubungi Toko</span>
                </a>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 gap-4 pt-8 border-t border-white/15">

                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded bg-[#0f2942] border border-white/10 flex items-center justify-center">
                        <span class="material-symbols-outlined text-[#ffb59a]">inventory_2</span>
                    </div>

                    <div>
                        <p class="font-bold text-white">Katalog Material</p>
                        <p class="text-xs text-white/60">Data contoh / demo</p>
                    </div>
                </div>

                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded bg-[#0f2942] border border-white/10 flex items-center justify-center">
                        <span class="material-symbols-outlined text-[#ffb59a]">description</span>
                    </div>

                    <div>
                        <p class="font-bold text-white">RFQ</p>
                        <p class="text-xs text-white/60">Permintaan penawaran</p>
                    </div>
                </div>

                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded bg-[#0f2942] border border-white/10 flex items-center justify-center">
                        <span class="material-symbols-outlined text-[#ffb59a]">call</span>
                    </div>

                    <div>
                        <p class="font-bold text-white">Kontak Toko</p>
                        <p class="text-xs text-white/60">0811-1075-525</p>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>


<!-- ========================================================= -->
<!-- VALUE PROPOSITION -->
<!-- ========================================================= -->

<section class="py-14 bg-[#f2f4f6] border-b border-[#c3c6ce]">
    <div class="max-w-7xl mx-auto px-4 md:px-8">

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

            <div class="bg-white p-6 rounded border border-[#c3c6ce] shadow-sm">
                <div class="w-12 h-12 rounded bg-[#eceef0] text-[#a83900] flex items-center justify-center mb-4">
                    <span class="material-symbols-outlined text-2xl">inventory_2</span>
                </div>

                <h3 class="text-base font-bold mb-2">
                    Katalog Material
                </h3>

                <p class="text-sm text-[#43474d] leading-relaxed">
                    Produk dikelompokkan berdasarkan kategori agar lebih mudah dicari.
                </p>
            </div>

            <div class="bg-white p-6 rounded border border-[#c3c6ce] shadow-sm">
                <div class="w-12 h-12 rounded bg-[#eceef0] text-[#a83900] flex items-center justify-center mb-4">
                    <span class="material-symbols-outlined text-2xl">filter_alt</span>
                </div>

                <h3 class="text-base font-bold mb-2">
                    Pencarian Cepat
                </h3>

                <p class="text-sm text-[#43474d] leading-relaxed">
                    Cari produk berdasarkan nama atau kategori langsung dari halaman.
                </p>
            </div>

            <div class="bg-white p-6 rounded border border-[#c3c6ce] shadow-sm">
                <div class="w-12 h-12 rounded bg-[#eceef0] text-[#a83900] flex items-center justify-center mb-4">
                    <span class="material-symbols-outlined text-2xl">description</span>
                </div>

                <h3 class="text-base font-bold mb-2">
                    Permintaan RFQ
                </h3>

                <p class="text-sm text-[#43474d] leading-relaxed">
                    Produk dapat dimasukkan ke keranjang RFQ sebelum dikonfirmasi ke toko.
                </p>
            </div>

            <div class="bg-white p-6 rounded border border-[#c3c6ce] shadow-sm">
                <div class="w-12 h-12 rounded bg-[#eceef0] text-[#a83900] flex items-center justify-center mb-4">
                    <span class="material-symbols-outlined text-2xl">call</span>
                </div>

                <h3 class="text-base font-bold mb-2">
                    Kontak Toko
                </h3>

                <p class="text-sm text-[#43474d] leading-relaxed">
                    Hubungi toko melalui nomor kontak yang tercantum pada halaman.
                </p>
            </div>

        </div>
    </div>
</section>


<!-- ========================================================= -->
<!-- CATEGORY -->
<!-- ========================================================= -->

<section id="katalog" class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 md:px-8">

        <div class="flex flex-col md:flex-row md:items-end justify-between mb-10 gap-4">

            <div>
                <span class="text-xs text-[#a83900] uppercase tracking-wider block mb-1 font-bold">
                    Kategori Material
                </span>

                <h2 class="text-2xl md:text-3xl font-bold text-[#001428]">
                    Kategori Material Bangunan
                </h2>

                <p class="text-sm text-[#43474d] mt-2">
                    Pilih kategori untuk melihat kebutuhan material yang tersedia.
                </p>
            </div>

            <a
                href="{{ route('katalog') }}"
                class="inline-flex items-center gap-1.5 text-sm font-semibold text-[#a83900] hover:text-[#fc6018]"
            >
                <span>Lihat Katalog Lengkap</span>
                <span class="material-symbols-outlined">arrow_forward</span>
            </a>

        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-4">

            <button type="button" onclick="filterByCategory('Semen & Pasir')" class="text-left bg-[#f7f9fb] border border-[#c3c6ce] rounded p-5 hover:border-[#74777e] hover:shadow-md transition">
                <div class="w-12 h-12 rounded bg-white text-[#0f2942] flex items-center justify-center mb-4">
                    <span class="material-symbols-outlined text-2xl">layers</span>
                </div>

                <h3 class="font-bold mb-2">Semen &amp; Pasir</h3>

                <p class="text-xs text-[#43474d]">
                    Semen, mortar, pasir dan material sejenis.
                </p>

                <div class="mt-6 pt-3 border-t border-[#eceef0] text-xs text-[#74777e] flex justify-between">
                    <span>Material</span>
                    <span class="material-symbols-outlined text-base">chevron_right</span>
                </div>
            </button>

            <button type="button" onclick="filterByCategory('Besi & Baja')" class="text-left bg-[#f7f9fb] border border-[#c3c6ce] rounded p-5 hover:border-[#74777e] hover:shadow-md transition">
                <div class="w-12 h-12 rounded bg-white text-[#0f2942] flex items-center justify-center mb-4">
                    <span class="material-symbols-outlined text-2xl">view_column</span>
                </div>

                <h3 class="font-bold mb-2">Besi &amp; Baja</h3>

                <p class="text-xs text-[#43474d]">
                    Besi beton, baja ringan dan kebutuhan struktur.
                </p>

                <div class="mt-6 pt-3 border-t border-[#eceef0] text-xs text-[#74777e] flex justify-between">
                    <span>Material</span>
                    <span class="material-symbols-outlined text-base">chevron_right</span>
                </div>
            </button>

            <button type="button" onclick="filterByCategory('Cat & Pelapis')" class="text-left bg-[#f7f9fb] border border-[#c3c6ce] rounded p-5 hover:border-[#74777e] hover:shadow-md transition">
                <div class="w-12 h-12 rounded bg-white text-[#0f2942] flex items-center justify-center mb-4">
                    <span class="material-symbols-outlined text-2xl">format_paint</span>
                </div>

                <h3 class="font-bold mb-2">Cat &amp; Pelapis</h3>

                <p class="text-xs text-[#43474d]">
                    Cat dinding, pelapis dan kebutuhan finishing.
                </p>

                <div class="mt-6 pt-3 border-t border-[#eceef0] text-xs text-[#74777e] flex justify-between">
                    <span>Material</span>
                    <span class="material-symbols-outlined text-base">chevron_right</span>
                </div>
            </button>

            <button type="button" onclick="filterByCategory('Pipa & Sanitari')" class="text-left bg-[#f7f9fb] border border-[#c3c6ce] rounded p-5 hover:border-[#74777e] hover:shadow-md transition">
                <div class="w-12 h-12 rounded bg-white text-[#0f2942] flex items-center justify-center mb-4">
                    <span class="material-symbols-outlined text-2xl">plumbing</span>
                </div>

                <h3 class="font-bold mb-2">Pipa &amp; Sanitari</h3>

                <p class="text-xs text-[#43474d]">
                    Pipa, fitting dan perlengkapan sanitari.
                </p>

                <div class="mt-6 pt-3 border-t border-[#eceef0] text-xs text-[#74777e] flex justify-between">
                    <span>Material</span>
                    <span class="material-symbols-outlined text-base">chevron_right</span>
                </div>
            </button>

            <button type="button" onclick="filterByCategory('Keramik & Granit')" class="text-left bg-[#f7f9fb] border border-[#c3c6ce] rounded p-5 hover:border-[#74777e] hover:shadow-md transition">
                <div class="w-12 h-12 rounded bg-white text-[#0f2942] flex items-center justify-center mb-4">
                    <span class="material-symbols-outlined text-2xl">grid_view</span>
                </div>

                <h3 class="font-bold mb-2">Keramik &amp; Granit</h3>

                <p class="text-xs text-[#43474d]">
                    Keramik, granit dan material finishing lantai.
                </p>

                <div class="mt-6 pt-3 border-t border-[#eceef0] text-xs text-[#74777e] flex justify-between">
                    <span>Material</span>
                    <span class="material-symbols-outlined text-base">chevron_right</span>
                </div>
            </button>

        </div>
    </div>
</section>


<!-- ========================================================= -->
<!-- PRODUCT SECTION -->
<!-- ========================================================= -->

<section class="py-16 bg-[#f2f4f6] border-y border-[#c3c6ce]" id="produk">
    <div class="max-w-7xl mx-auto px-4 md:px-8">

        <div class="flex flex-col md:flex-row md:items-center justify-between gap-6 mb-8">

            <div>
                <span class="text-xs text-[#a83900] uppercase tracking-wider block mb-1 font-bold">
                    Katalog Pilihan
                </span>

                <h2 class="text-2xl md:text-3xl font-bold text-[#001428]">
                    Produk Contoh
                </h2>

                <p class="text-sm text-[#43474d] mt-2">
                    Harga dan data pada bagian ini masih berupa data contoh tampilan.
                </p>
            </div>

            <div
                class="flex flex-wrap items-center gap-1.5 p-1 bg-[#eceef0] rounded border border-[#c3c6ce]"
                id="categoryFilters"
            >
                <button
                    type="button"
                    onclick="filterByCategory('Semua')"
                    data-filter="Semua"
                    class="filter-btn px-3.5 py-1.5 rounded bg-[#0f2942] text-white font-bold text-sm"
                >
                    Semua
                </button>

                <button
                    type="button"
                    onclick="filterByCategory('Semen & Pasir')"
                    data-filter="Semen & Pasir"
                    class="filter-btn px-3.5 py-1.5 rounded text-[#43474d] text-sm hover:bg-white"
                >
                    Semen
                </button>

                <button
                    type="button"
                    onclick="filterByCategory('Besi & Baja')"
                    data-filter="Besi & Baja"
                    class="filter-btn px-3.5 py-1.5 rounded text-[#43474d] text-sm hover:bg-white"
                >
                    Besi
                </button>

                <button
                    type="button"
                    onclick="filterByCategory('Cat & Pelapis')"
                    data-filter="Cat & Pelapis"
                    class="filter-btn px-3.5 py-1.5 rounded text-[#43474d] text-sm hover:bg-white"
                >
                    Cat
                </button>

                <button
                    type="button"
                    onclick="filterByCategory('Pipa & Sanitari')"
                    data-filter="Pipa & Sanitari"
                    class="filter-btn px-3.5 py-1.5 rounded text-[#43474d] text-sm hover:bg-white"
                >
                    Pipa
                </button>
            </div>

        </div>


        <div id="productGrid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

            <!-- Product 1 -->
            <article
                class="product-card bg-white border border-[#c3c6ce] rounded flex flex-col justify-between hover:shadow-lg transition"
                data-category="Semen & Pasir"
                data-name="Semen Tiga Roda 50kg Portland Composite Cement"
                data-price="68500"
                data-unit="sak"
            >
                <div class="p-4">

                    <div class="flex items-center justify-between mb-3">
                        <span class="px-2 py-0.5 rounded text-[11px] font-bold bg-[#f0fdf4] text-[#15803d] border border-[#bbf7d0]">
                            Contoh
                        </span>

                        <span class="text-[11px] text-[#74777e]">
                            SMN-TR-50
                        </span>
                    </div>

                    <div class="h-44 w-full bg-[#f2f4f6] rounded flex items-center justify-center p-3 relative overflow-hidden mb-4">
                        <img
                            class="h-full w-auto object-contain mix-blend-multiply"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuB6FqOsQ6rB2Xz82YIiDV5cTtR8EmDJDNw04NBOIXYfLQbhiitBEYCGQ4QbIeEDK6pyKb2yIgMEPtCF-H59LCEd5MJz_ZqEYfx6sN0OPv61AVvOFO05GOZGWIVguNqTgAQNycdU920s09W7RAN_GIMK_DbWaqD5b6COZvSNTk8ARfP70pvuaiKhn3h2yFIGYGiC6gzFs716IRMlfP3MGh1tjXEJWWFjQuKx4gv38-XvcxAMkkbSdYij"
                            alt="Contoh gambar semen"
                        />
                    </div>

                    <p class="text-xs text-[#a83900] font-semibold mb-1">
                        Semen &amp; Pasir
                    </p>

                    <h3 class="text-base font-bold leading-snug mb-3">
                        Semen Tiga Roda 50kg Portland Composite Cement
                    </h3>

                    <div class="pt-3 border-t border-[#eceef0]">
                        <p class="text-xs text-[#74777e]">
                            Harga contoh
                        </p>

                        <div class="flex items-baseline gap-2">
                            <span class="text-xl font-bold text-[#001428]">
                                Rp 68.500
                            </span>

                            <span class="text-xs text-[#43474d]">
                                / sak
                            </span>
                        </div>
                    </div>
                </div>

                <div class="p-4 bg-[#f7f9fb] border-t border-[#c3c6ce]">
                    <button
                        type="button"
                        class="add-rfq-btn w-full inline-flex items-center justify-center gap-2 py-2.5 px-3 rounded bg-[#a83900] hover:bg-[#fc6018] text-white font-semibold transition"
                    >
                        <span class="material-symbols-outlined text-lg">add_shopping_cart</span>
                        <span>+ Tambah ke RFQ</span>
                    </button>
                </div>
            </article>


            <!-- Product 2 -->
            <article
                class="product-card bg-white border border-[#c3c6ce] rounded flex flex-col justify-between hover:shadow-lg transition"
                data-category="Besi & Baja"
                data-name="Besi Beton Ulir 12mm x 12m SNI"
                data-price="118000"
                data-unit="batang"
            >
                <div class="p-4">

                    <div class="flex items-center justify-between mb-3">
                        <span class="px-2 py-0.5 rounded text-[11px] font-bold bg-[#eef5ff] text-[#0f2942] border border-[#b0c9e8]">
                            Contoh
                        </span>

                        <span class="text-[11px] text-[#74777e]">
                            BSI-UL-12
                        </span>
                    </div>

                    <div class="h-44 w-full bg-[#f2f4f6] rounded flex items-center justify-center p-3 relative overflow-hidden mb-4">
                        <img
                            class="h-full w-auto object-contain mix-blend-multiply"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBQk_lOp9r7KurDi00b783TgCCMGvMUynd4aBpYHuNoQM5h_P9JcaT1t_qdkM-saR2R0AU3szFa4Qt7JW2q3V-05Z_TU-1Jdlz5v35jIwwMQC7kWBN-bA46C6h7ujEFS2HkY9FLkW8RjgXhxOgfz9smat1A_yKmPN_9efmQPGRY_GE1K4qq5fW756nlZXnmmXGBWSvLskCtk1P4qYUmAOOG9SSIbaWhdWe13yytm0UINEI6AZzUIBgK"
                            alt="Contoh gambar besi beton"
                        />
                    </div>

                    <p class="text-xs text-[#a83900] font-semibold mb-1">
                        Besi &amp; Baja
                    </p>

                    <h3 class="text-base font-bold leading-snug mb-3">
                        Besi Beton Ulir 12mm x 12m SNI
                    </h3>

                    <div class="pt-3 border-t border-[#eceef0]">
                        <p class="text-xs text-[#74777e]">
                            Harga contoh
                        </p>

                        <div class="flex items-baseline gap-2">
                            <span class="text-xl font-bold text-[#001428]">
                                Rp 118.000
                            </span>

                            <span class="text-xs text-[#43474d]">
                                / batang
                            </span>
                        </div>
                    </div>
                </div>

                <div class="p-4 bg-[#f7f9fb] border-t border-[#c3c6ce]">
                    <button
                        type="button"
                        class="add-rfq-btn w-full inline-flex items-center justify-center gap-2 py-2.5 px-3 rounded bg-[#a83900] hover:bg-[#fc6018] text-white font-semibold transition"
                    >
                        <span class="material-symbols-outlined text-lg">add_shopping_cart</span>
                        <span>+ Tambah ke RFQ</span>
                    </button>
                </div>
            </article>


            <!-- Product 3 -->
            <article
                class="product-card bg-white border border-[#c3c6ce] rounded flex flex-col justify-between hover:shadow-lg transition"
                data-category="Cat & Pelapis"
                data-name="Cat Tembok Dulux Weathershield 20L"
                data-price="1450000"
                data-unit="pail"
            >
                <div class="p-4">

                    <div class="flex items-center justify-between mb-3">
                        <span class="px-2 py-0.5 rounded text-[11px] font-bold bg-[#f0fdf4] text-[#15803d] border border-[#bbf7d0]">
                            Contoh
                        </span>

                        <span class="text-[11px] text-[#74777e]">
                            DLX-WS-20L
                        </span>
                    </div>

                    <div class="h-44 w-full bg-[#f2f4f6] rounded flex items-center justify-center p-3 relative overflow-hidden mb-4">
                        <img
                            class="h-full w-auto object-contain mix-blend-multiply"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuA-vkxyqYhpihV-bN4wiUBZnjabj0RMdXRKX9e8zHjZ-jaqHM88DeTRmd6N1hbcaa5VTXVhOKfHT4Ui6GhVrg_crhFRpktfu4R7BBvAMscfZ2gOup38QoXpsrjHSYwE3cXLpVFJ1GjJ0h1iC57MPIb3K8WzQ8B4GLHzEgqOVj0axat9NxZNdMBmna086PfFmAG1czgO4DBmfKuiz-ZOViukGEbaU62ouqDDiqbhOLz1K3FdAm3x-QM5"
                            alt="Contoh gambar cat"
                        />
                    </div>

                    <p class="text-xs text-[#a83900] font-semibold mb-1">
                        Cat &amp; Pelapis
                    </p>

                    <h3 class="text-base font-bold leading-snug mb-3">
                        Cat Tembok Dulux Weathershield 20L
                    </h3>

                    <div class="pt-3 border-t border-[#eceef0]">
                        <p class="text-xs text-[#74777e]">
                            Harga contoh
                        </p>

                        <div class="flex items-baseline gap-2">
                            <span class="text-xl font-bold text-[#001428]">
                                Rp 1.450.000
                            </span>

                            <span class="text-xs text-[#43474d]">
                                / pail
                            </span>
                        </div>
                    </div>
                </div>

                <div class="p-4 bg-[#f7f9fb] border-t border-[#c3c6ce]">
                    <button
                        type="button"
                        class="add-rfq-btn w-full inline-flex items-center justify-center gap-2 py-2.5 px-3 rounded bg-[#a83900] hover:bg-[#fc6018] text-white font-semibold transition"
                    >
                        <span class="material-symbols-outlined text-lg">add_shopping_cart</span>
                        <span>+ Tambah ke RFQ</span>
                    </button>
                </div>
            </article>


            <!-- Product 4 -->
            <article
                class="product-card bg-white border border-[#c3c6ce] rounded flex flex-col justify-between hover:shadow-lg transition"
                data-category="Pipa & Sanitari"
                data-name="Pipa PVC Rucika D 3 Inch 4 Meter"
                data-price="88000"
                data-unit="batang"
            >
                <div class="p-4">

                    <div class="flex items-center justify-between mb-3">
                        <span class="px-2 py-0.5 rounded text-[11px] font-bold bg-[#eef5ff] text-[#0f2942] border border-[#b0c9e8]">
                            Contoh
                        </span>

                        <span class="text-[11px] text-[#74777e]">
                            PIP-RC-D3
                        </span>
                    </div>

                    <div class="h-44 w-full bg-[#f2f4f6] rounded flex items-center justify-center p-3 relative overflow-hidden mb-4">
                        <img
                            class="h-full w-auto object-contain mix-blend-multiply"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuA6gIw7w-nPlx49NAqIFM7Mqhr0h4jrD8bWAV4ZBevx9BwR_48YLCSHeq0kpAaGrIuvWfe42nklfUQ5bVRE1oHkS778Sa9JYg3sHzLN4R0a6L5Ol-pwxQl4H4r5kEagyfNjhkeUCK3mtmePmmpFf9t7H4vRS8hwHS_QIDQnHJp7Av09jwcDoaAmfqJ27nv57hRrhOOppRRKEFoy_ZfQJCgG_Q_y3E9IUrTALljA02hlp9a240r5GjLz"
                            alt="Contoh gambar pipa PVC"
                        />
                    </div>

                    <p class="text-xs text-[#a83900] font-semibold mb-1">
                        Pipa &amp; Sanitari
                    </p>

                    <h3 class="text-base font-bold leading-snug mb-3">
                        Pipa PVC Rucika D 3" Panjang 4 Meter
                    </h3>

                    <div class="pt-3 border-t border-[#eceef0]">
                        <p class="text-xs text-[#74777e]">
                            Harga contoh
                        </p>

                        <div class="flex items-baseline gap-2">
                            <span class="text-xl font-bold text-[#001428]">
                                Rp 88.000
                            </span>

                            <span class="text-xs text-[#43474d]">
                                / batang
                            </span>
                        </div>
                    </div>
                </div>

                <div class="p-4 bg-[#f7f9fb] border-t border-[#c3c6ce]">
                    <button
                        type="button"
                        class="add-rfq-btn w-full inline-flex items-center justify-center gap-2 py-2.5 px-3 rounded bg-[#a83900] hover:bg-[#fc6018] text-white font-semibold transition"
                    >
                        <span class="material-symbols-outlined text-lg">add_shopping_cart</span>
                        <span>+ Tambah ke RFQ</span>
                    </button>
                </div>
            </article>


            <!-- Product 5 -->
            <article
                class="product-card bg-white border border-[#c3c6ce] rounded flex flex-col justify-between hover:shadow-lg transition"
                data-category="Besi & Baja"
                data-name="Baja Ringan Canal C75 Tebal 0.75mm"
                data-price="79000"
                data-unit="batang"
            >
                <div class="p-4">

                    <div class="flex items-center justify-between mb-3">
                        <span class="px-2 py-0.5 rounded text-[11px] font-bold bg-[#f0fdf4] text-[#15803d] border border-[#bbf7d0]">
                            Contoh
                        </span>

                        <span class="text-[11px] text-[#74777e]">
                            BJR-C75-75
                        </span>
                    </div>

                    <div class="h-44 w-full bg-[#f2f4f6] rounded flex items-center justify-center p-3 relative overflow-hidden mb-4">
                        <img
                            class="h-full w-auto object-contain mix-blend-multiply"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuB16XSVkQ5yF52lerp6wWb9AYkiEV8dZMJb3k6RXf0s1lV4LApcF-PDeh_FzcKYPw2Z8UJ_nxK67KwyQbe3ojoOoCaIpFij8EYkh1BLFQqSjE0j3kWtlR-kn9iAtV9hB5ap81-DvY4zM8W7N-BnZEhUrX-ke39p6cfdouomqW9d73cMAEBq3bgKG4iXXHybqXIAzZgeyoaHiDjFMYJUS-irzI6wW-UGu6QvfLZtHwcsjKb3sc79nwjT"
                            alt="Contoh gambar baja ringan"
                        />
                    </div>

                    <p class="text-xs text-[#a83900] font-semibold mb-1">
                        Besi &amp; Baja
                    </p>

                    <h3 class="text-base font-bold leading-snug mb-3">
                        Baja Ringan Canal C75 Tebal 0.75mm
                    </h3>

                    <div class="pt-3 border-t border-[#eceef0]">
                        <p class="text-xs text-[#74777e]">
                            Harga contoh
                        </p>

                        <div class="flex items-baseline gap-2">
                            <span class="text-xl font-bold text-[#001428]">
                                Rp 79.000
                            </span>

                            <span class="text-xs text-[#43474d]">
                                / batang
                            </span>
                        </div>
                    </div>
                </div>

                <div class="p-4 bg-[#f7f9fb] border-t border-[#c3c6ce]">
                    <button
                        type="button"
                        class="add-rfq-btn w-full inline-flex items-center justify-center gap-2 py-2.5 px-3 rounded bg-[#a83900] hover:bg-[#fc6018] text-white font-semibold transition"
                    >
                        <span class="material-symbols-outlined text-lg">add_shopping_cart</span>
                        <span>+ Tambah ke RFQ</span>
                    </button>
                </div>
            </article>


            <!-- Product 6 -->
            <article
                class="product-card bg-white border border-[#c3c6ce] rounded flex flex-col justify-between hover:shadow-lg transition"
                data-category="Semen & Pasir"
                data-name="Mortar Utama MU-380 40kg"
                data-price="105000"
                data-unit="sak"
            >
                <div class="p-4">

                    <div class="flex items-center justify-between mb-3">
                        <span class="px-2 py-0.5 rounded text-[11px] font-bold bg-[#f0fdf4] text-[#15803d] border border-[#bbf7d0]">
                            Contoh
                        </span>

                        <span class="text-[11px] text-[#74777e]">
                            MRT-MU-380
                        </span>
                    </div>

                    <div class="h-44 w-full bg-[#f2f4f6] rounded flex items-center justify-center p-3 relative overflow-hidden mb-4">
                        <img
                            class="h-full w-auto object-contain mix-blend-multiply"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuA_5h_aSPg13RX6Tq8djSKwe1P7NYNw_B8LchmocEjbRPGxD3LAS21BUBYVHmGVwNZDvFlFA47GCSLbIz-cynVoUw2QpOyqI9-itnYkh5pgOFeqUs5u5-mW6zvJ_jRCz8I9F0Qz-oWK-sOHo0NM-udjLZABgZpKfA8t57Blwa13_-Olamqup5LAkOa7HKoG2iYTPRDy_G76UzaCpl56M6Rm_uQC6EK8yOMNWp_n3-X1BrPG-rI2uQ"
                            alt="Contoh gambar mortar"
                        />
                    </div>

                    <p class="text-xs text-[#a83900] font-semibold mb-1">
                        Semen &amp; Pasir
                    </p>

                    <h3 class="text-base font-bold leading-snug mb-3">
                        Mortar Utama MU-380 Perekat Bata Ringan 40kg
                    </h3>

                    <div class="pt-3 border-t border-[#eceef0]">
                        <p class="text-xs text-[#74777e]">
                            Harga contoh
                        </p>

                        <div class="flex items-baseline gap-2">
                            <span class="text-xl font-bold text-[#001428]">
                                Rp 105.000
                            </span>

                            <span class="text-xs text-[#43474d]">
                                / sak
                            </span>
                        </div>
                    </div>
                </div>

                <div class="p-4 bg-[#f7f9fb] border-t border-[#c3c6ce]">
                    <button
                        type="button"
                        class="add-rfq-btn w-full inline-flex items-center justify-center gap-2 py-2.5 px-3 rounded bg-[#a83900] hover:bg-[#fc6018] text-white font-semibold transition"
                    >
                        <span class="material-symbols-outlined text-lg">add_shopping_cart</span>
                        <span>+ Tambah ke RFQ</span>
                    </button>
                </div>
            </article>

        </div>

        <!-- RFQ CTA -->
        <div class="mt-12 bg-[#0f2942] rounded border border-[#c3c6ce] p-6 md:p-8 text-white flex flex-col lg:flex-row items-center justify-between gap-6">

            <div class="max-w-2xl">

                <div class="inline-flex items-center gap-2 px-2.5 py-1 rounded bg-white/10 text-[#ffb59a] text-xs font-bold mb-3">
                    <span class="material-symbols-outlined text-sm">description</span>
                    <span>Permintaan Penawaran</span>
                </div>

                <h3 class="text-xl md:text-2xl font-bold mb-2">
                    Punya daftar kebutuhan material?
                </h3>

                <p class="text-sm text-white/80 leading-relaxed">
                    Masukkan produk ke RFQ, lalu hubungi toko untuk melakukan konfirmasi
                    kebutuhan dan penawaran.
                </p>

            </div>

            <div class="flex flex-wrap items-center gap-3 shrink-0">

                <button
                    type="button"
                    onclick="toggleRfqDrawer()"
                    class="inline-flex items-center gap-2 px-6 py-3.5 rounded bg-[#a83900] hover:bg-[#fc6018] text-white font-semibold transition"
                >
                    <span class="material-symbols-outlined">description</span>
                    <span>Buka Keranjang RFQ</span>
                </button>

                <a
                    href="tel:+628111075525"
                    class="inline-flex items-center gap-2 px-5 py-3.5 rounded bg-white text-[#001428] font-semibold border border-white hover:bg-[#f7f9fb] transition"
                >
                    <span class="material-symbols-outlined text-[#a83900]">call</span>
                    <span>Hubungi Toko</span>
                </a>

            </div>
        </div>

    </div>
</section>


<!-- ========================================================= -->
<!-- CARA PESAN -->
<!-- ========================================================= -->

<section id="cara-pesan" class="py-16 bg-white">

    <div class="max-w-7xl mx-auto px-4 md:px-8">

        <div class="text-center max-w-2xl mx-auto mb-12">

            <span class="text-xs text-[#a83900] uppercase tracking-wider block mb-1 font-bold">
                Alur Pemesanan
            </span>

            <h2 class="text-2xl md:text-3xl font-bold text-[#001428]">
                Cara Menggunakan Website
            </h2>

            <p class="text-sm text-[#43474d] mt-2">
                Alur sederhana untuk memilih produk dan mengirim permintaan penawaran.
            </p>

        </div>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">

            <div class="p-6 rounded bg-[#f7f9fb] border border-[#c3c6ce]">
                <span class="text-2xl font-extrabold text-[#c3c6ce] block mb-3">
                    01
                </span>

                <h3 class="font-bold mb-2">
                    Cari Produk
                </h3>

                <p class="text-sm text-[#43474d]">
                    Gunakan pencarian atau kategori untuk menemukan material.
                </p>
            </div>

            <div class="p-6 rounded bg-[#f7f9fb] border border-[#c3c6ce]">
                <span class="text-2xl font-extrabold text-[#c3c6ce] block mb-3">
                    02
                </span>

                <h3 class="font-bold mb-2">
                    Tambahkan ke RFQ
                </h3>

                <p class="text-sm text-[#43474d]">
                    Tentukan produk yang ingin dimintakan penawaran.
                </p>
            </div>

            <div class="p-6 rounded bg-[#f7f9fb] border border-[#c3c6ce]">
                <span class="text-2xl font-extrabold text-[#c3c6ce] block mb-3">
                    03
                </span>

                <h3 class="font-bold mb-2">
                    Periksa Permintaan
                </h3>

                <p class="text-sm text-[#43474d]">
                    Periksa isi keranjang RFQ dan jumlah masing-masing produk.
                </p>
            </div>

            <div class="p-6 rounded bg-[#f7f9fb] border border-[#c3c6ce]">
                <span class="text-2xl font-extrabold text-[#c3c6ce] block mb-3">
                    04
                </span>

                <h3 class="font-bold mb-2">
                    Hubungi Toko
                </h3>

                <p class="text-sm text-[#43474d]">
                    Gunakan kontak toko untuk konfirmasi penawaran dan ketersediaan.
                </p>
            </div>

        </div>

    </div>
</section>


<!-- ========================================================= -->
<!-- CONTACT -->
<!-- ========================================================= -->

<section id="kontak" class="py-16 bg-[#f2f4f6] border-t border-[#c3c6ce]">

    <div class="max-w-7xl mx-auto px-4 md:px-8">

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">

            <div class="lg:col-span-6 space-y-6">

                <div>

                    <span class="text-xs text-[#a83900] uppercase tracking-wider block mb-1 font-bold">
                        Informasi Toko
                    </span>

                    <h2 class="text-2xl md:text-3xl font-bold text-[#001428]">
                        TB Sinar Jaya Jatayu
                    </h2>

                    <p class="text-sm text-[#43474d] mt-2">
                        Informasi alamat, jam buka, dan kontak toko yang digunakan pada project ini.
                    </p>

                </div>


                <!-- Address -->
                <div class="flex items-start gap-3.5 p-4 rounded bg-white border border-[#c3c6ce]">

                    <span class="material-symbols-outlined text-[#a83900] text-xl mt-0.5">
                        store
                    </span>

                    <div>
                        <p class="font-bold">
                            Alamat Toko
                        </p>

                        <p class="text-sm text-[#43474d] mt-1">
                            Jl. Jatayu No. 1, RT.1/RW.10,
                            Kramat Pela, Kec. Kebayoran Baru,
                            Kota Jakarta Selatan,
                            DKI Jakarta 12130
                        </p>
                    </div>

                </div>


                <!-- Opening Hours -->
                <div class="flex items-start gap-3.5 p-4 rounded bg-white border border-[#c3c6ce]">

                    <span class="material-symbols-outlined text-[#a83900] text-xl mt-0.5">
                        schedule
                    </span>

                    <div>

                        <p class="font-bold">
                            Jam Operasional
                        </p>

                        <p class="text-sm text-[#43474d] mt-1">
                            Senin - Sabtu: 07.00 - 17.00<br/>
                            Minggu: 07.00 - 14.00
                        </p>

                    </div>

                </div>


                <!-- Phone -->
                <div class="flex items-start gap-3.5 p-4 rounded bg-white border border-[#c3c6ce]">

                    <span class="material-symbols-outlined text-[#a83900] text-xl mt-0.5">
                        call
                    </span>

                    <div>

                        <p class="font-bold">
                            Kontak Toko
                        </p>

                        <p class="text-sm text-[#43474d] mt-1">
                            +62 811-1075-525
                        </p>

                    </div>

                </div>


                <div class="flex flex-wrap items-center gap-3 pt-2">

                    <a
                        href="https://www.google.com/maps/search/?api=1&query=TB+Sinar+Jaya+Jatayu%2C+Jl.+Jatayu+No.+1%2C+Kramat+Pela%2C+Kebayoran+Baru%2C+Jakarta+Selatan"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="inline-flex items-center gap-2 px-5 py-3 rounded bg-[#0f2942] text-white font-semibold hover:bg-[#001428] transition"
                    >
                        <span class="material-symbols-outlined">
                            directions
                        </span>

                        <span>
                            Buka Google Maps
                        </span>
                    </a>


                    <a
                        href="tel:+628111075525"
                        class="inline-flex items-center gap-2 px-5 py-3 rounded bg-white border border-[#c3c6ce] text-[#001428] font-semibold hover:border-[#a83900] transition"
                    >
                        <span class="material-symbols-outlined text-[#a83900]">
                            call
                        </span>

                        <span>
                            Telepon
                        </span>
                    </a>

                </div>

            </div>


            <!-- Map Preview -->
            <div class="lg:col-span-6 bg-white border border-[#c3c6ce] rounded p-3 shadow-md overflow-hidden">

                <div class="relative w-full h-80 rounded overflow-hidden bg-[#eceef0]">

                    <iframe
                        src="https://www.google.com/maps?q=Jl.%20Jatayu%20No.%201%2C%20Kramat%20Pela%2C%20Kebayoran%20Baru%2C%20Jakarta%20Selatan&output=embed"
                        class="w-full h-full border-0"
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                        title="Lokasi TB Sinar Jaya Jatayu"
                    ></iframe>

                </div>

            </div>

        </div>

    </div>
</section>


<!-- ========================================================= -->
<!-- FOOTER -->
<!-- ========================================================= -->

<footer class="bg-[#001428] text-white border-t border-[#c3c6ce]">

    <div class="max-w-7xl mx-auto px-4 md:px-8 py-12 md:py-16 grid grid-cols-1 md:grid-cols-4 gap-8">

        <div class="space-y-4">

            <a href="{{ route('home') }}" class="inline-block">
                <span class="text-2xl font-extrabold text-white tracking-tight">
                    Sinar Jaya
                </span>
            </a>

            <p class="text-sm text-white/65 leading-relaxed">
                Website katalog dan permintaan penawaran untuk TB Sinar Jaya Jatayu.
            </p>

        </div>


        <div>

            <h4 class="text-lg font-bold text-white mb-4">
                Menu
            </h4>

            <ul class="space-y-2.5 text-sm text-white/65">

                <li>
                    <a href="{{ route('home') }}" class="hover:text-white transition">
                        Home
                    </a>
                </li>

                <li>
                    <a href="{{ route('katalog') }}" class="hover:text-white transition">
                        Katalog
                    </a>
                </li>

                <li>
                    <a href="#cara-pesan" class="hover:text-white transition">
                        Cara Pesan
                    </a>
                </li>

                <li>
                    <a href="#kontak" class="hover:text-white transition">
                        Kontak
                    </a>
                </li>

            </ul>

        </div>


        <div>

            <h4 class="text-lg font-bold text-white mb-4">
                Kontak
            </h4>

            <div class="space-y-3 text-sm text-white/65">

                <p>
                    Jl. Jatayu No. 1,
                    Kramat Pela,
                    Kebayoran Baru,
                    Jakarta Selatan
                </p>

                <p>
                    <a
                        href="tel:+628111075525"
                        class="hover:text-white transition"
                    >
                        +62 811-1075-525
                    </a>
                </p>

            </div>

        </div>


        <div>

            <h4 class="text-lg font-bold text-white mb-4">
                Permintaan
            </h4>

            <p class="text-sm text-white/65 leading-relaxed mb-4">
                Gunakan RFQ untuk memilih beberapa produk sekaligus sebelum menghubungi toko.
            </p>

            <button
                type="button"
                onclick="toggleRfqDrawer()"
                class="inline-flex items-center gap-2 px-4 py-2.5 rounded bg-[#a83900] hover:bg-[#fc6018] text-white font-semibold transition"
            >
                <span class="material-symbols-outlined">
                    description
                </span>

                Buka RFQ
            </button>

        </div>

    </div>


    <div class="border-t border-white/10 py-6">

        <div class="max-w-7xl mx-auto px-4 md:px-8 flex flex-col md:flex-row items-center justify-between gap-4 text-xs text-white/50">

            <p>
                © {{ date('Y') }} Sinar Jaya. Project website.
            </p>

            <div class="flex items-center gap-5">

                <a href="#home" class="hover:text-white transition">
                    Kembali ke atas
                </a>

                <a href="{{ route('katalog') }}" class="hover:text-white transition">
                    Katalog
                </a>

            </div>

        </div>

    </div>

</footer>


<!-- ========================================================= -->
<!-- RFQ DRAWER -->
<!-- ========================================================= -->

<div
    id="rfqDrawerBackdrop"
    class="fixed inset-0 bg-[#001428]/60 backdrop-blur-sm z-50 opacity-0 pointer-events-none transition-opacity duration-300"
    onclick="toggleRfqDrawer()"
></div>


<aside
    id="rfqDrawer"
    class="fixed top-0 right-0 h-full w-full max-w-md bg-white z-50 shadow-2xl border-l border-[#c3c6ce] transform translate-x-full transition-transform duration-300 flex flex-col"
    aria-hidden="true"
>

    <div class="p-5 border-b border-[#c3c6ce] flex items-center justify-between bg-[#f2f4f6]">

        <div class="flex items-center gap-2.5">

            <span class="material-symbols-outlined text-[#a83900]">
                shopping_cart
            </span>

            <h3 id="rfqHeader" class="text-lg font-bold text-[#001428]">
                Keranjang RFQ (0 Item)
            </h3>

        </div>

        <button
            type="button"
            onclick="toggleRfqDrawer()"
            class="p-1.5 rounded hover:bg-[#eceef0] text-[#43474d]"
            title="Tutup"
        >
            <span class="material-symbols-outlined">
                close
            </span>
        </button>

    </div>


    <div id="rfqList" class="p-5 overflow-y-auto flex-1">

        <div class="py-12 text-center">

            <span class="material-symbols-outlined text-4xl text-[#74777e]">
                shopping_cart
            </span>

            <p class="mt-3 text-base font-bold text-[#001428]">
                RFQ masih kosong
            </p>

            <p class="text-sm text-[#43474d] mt-1">
                Tambahkan produk dari katalog.
            </p>

        </div>

    </div>


    <div class="p-5 border-t border-[#c3c6ce] bg-[#f2f4f6] space-y-3">

        <div class="flex items-baseline justify-between">

            <span class="font-semibold text-[#191c1e]">
                Estimasi Subtotal
            </span>

            <span id="rfqSubtotal" class="text-xl font-bold text-[#001428]">
                Rp 0
            </span>

        </div>

        <p class="text-xs text-[#74777e]">
            Harga pada halaman ini masih berupa data contoh dan harus dikonfirmasi ke toko.
        </p>

        <div class="space-y-2">

            <button
                type="button"
                onclick="submitRfqToPhone()"
                class="w-full inline-flex items-center justify-center gap-2 py-3 px-4 rounded bg-[#a83900] hover:bg-[#fc6018] text-white font-semibold transition"
            >
                <span class="material-symbols-outlined">
                    call
                </span>

                Hubungi Toko
            </button>

            <button
                type="button"
                onclick="toggleRfqDrawer()"
                class="w-full py-2.5 px-4 rounded bg-white border border-[#c3c6ce] text-[#191c1e] hover:bg-[#f7f9fb] font-semibold transition"
            >
                Lanjut Pilih Produk
            </button>

        </div>

    </div>

</aside>


<!-- ========================================================= -->
<!-- TOAST -->
<!-- ========================================================= -->

<div
    id="toast"
    class="fixed bottom-5 left-1/2 -translate-x-1/2 z-[70] hidden max-w-[calc(100vw-2rem)] px-4 py-3 rounded bg-[#001428] text-white text-sm shadow-xl"
></div>


<!-- ========================================================= -->
<!-- JAVASCRIPT -->
<!-- ========================================================= -->

<script>
(() => {

    const STORE_PHONE = '628111075525';

    const drawer = document.getElementById('rfqDrawer');
    const backdrop = document.getElementById('rfqDrawerBackdrop');
    const rfqList = document.getElementById('rfqList');
    const rfqHeader = document.getElementById('rfqHeader');
    const rfqSubtotal = document.getElementById('rfqSubtotal');
    const cartBadge = document.getElementById('cartBadge');
    const searchInput = document.getElementById('productSearch');
    const toast = document.getElementById('toast');

    let rfqState = [];
    let activeCategory = 'Semua';


    function formatRupiah(value) {
        return new Intl.NumberFormat('id-ID', {
            style: 'currency',
            currency: 'IDR',
            maximumFractionDigits: 0
        }).format(value);
    }


    function showToast(message) {
        toast.textContent = message;
        toast.classList.remove('hidden');

        clearTimeout(window.__toastTimer);

        window.__toastTimer = setTimeout(() => {
            toast.classList.add('hidden');
        }, 2200);
    }


    function getTotalItems() {
        return rfqState.reduce((sum, item) => sum + item.qty, 0);
    }


    function getSubtotal() {
        return rfqState.reduce(
            (sum, item) => sum + (item.qty * item.price),
            0
        );
    }


    function toggleRfqDrawer() {

        const isClosed = drawer.classList.contains('translate-x-full');

        if (isClosed) {

            drawer.classList.remove('translate-x-full');

            backdrop.classList.remove(
                'opacity-0',
                'pointer-events-none'
            );

            backdrop.classList.add('opacity-100');

            drawer.setAttribute('aria-hidden', 'false');

            document.body.classList.add('overflow-hidden');

        } else {

            drawer.classList.add('translate-x-full');

            backdrop.classList.add(
                'opacity-0',
                'pointer-events-none'
            );

            backdrop.classList.remove('opacity-100');

            drawer.setAttribute('aria-hidden', 'true');

            document.body.classList.remove('overflow-hidden');
        }
    }


    window.toggleRfqDrawer = toggleRfqDrawer;


    function renderRfq() {

        const totalItems = getTotalItems();
        const subtotal = getSubtotal();

        rfqHeader.textContent =
            `Keranjang RFQ (${totalItems} Item)`;

        cartBadge.textContent = totalItems;

        rfqSubtotal.textContent = formatRupiah(subtotal);


        if (!rfqState.length) {

            rfqList.innerHTML = `
                <div class="py-12 text-center">
                    <span class="material-symbols-outlined text-4xl text-[#74777e]">
                        shopping_cart
                    </span>

                    <p class="mt-3 text-base font-bold text-[#001428]">
                        RFQ masih kosong
                    </p>

                    <p class="text-sm text-[#43474d] mt-1">
                        Tambahkan produk dari katalog.
                    </p>
                </div>
            `;

            return;
        }


        rfqList.innerHTML = rfqState.map((item, index) => {

            const total = item.qty * item.price;

            return `
                <div
                    class="p-4 rounded border border-[#c3c6ce] bg-[#f7f9fb] mb-4"
                    data-index="${index}"
                >

                    <div class="flex items-start justify-between gap-3">

                        <div>
                            <p class="text-xs font-bold text-[#a83900]">
                                ${escapeHtml(item.category)}
                            </p>

                            <h4 class="text-sm font-bold text-[#001428] mt-1">
                                ${escapeHtml(item.name)}
                            </h4>
                        </div>

                        <button
                            type="button"
                            data-action="remove"
                            class="text-[#74777e] hover:text-[#ba1a1a]"
                            title="Hapus"
                        >
                            <span class="material-symbols-outlined text-lg">
                                delete
                            </span>
                        </button>

                    </div>


                    <div class="flex items-center justify-between mt-4 pt-3 border-t border-[#c3c6ce]">

                        <div class="flex items-center border border-[#c3c6ce] rounded bg-white">

                            <button
                                type="button"
                                data-action="decrease"
                                class="px-3 py-1 hover:bg-[#eceef0]"
                            >
                                -
                            </button>

                            <span class="px-3 py-1 font-bold">
                                ${item.qty}
                            </span>

                            <button
                                type="button"
                                data-action="increase"
                                class="px-3 py-1 hover:bg-[#eceef0]"
                            >
                                +
                            </button>

                        </div>

                        <div class="text-right">

                            <p class="text-xs text-[#74777e]">
                                ${item.unit}
                            </p>

                            <p class="text-base font-bold text-[#001428]">
                                ${formatRupiah(total)}
                            </p>

                        </div>

                    </div>

                </div>
            `;

        }).join('');
    }


    function escapeHtml(value) {

        return String(value).replace(/[&<>"']/g, char => ({
            '&': '&amp;',
            '<': '&lt;',
            '>': '&gt;',
            '"': '&quot;',
            "'": '&#039;'
        })[char]);

    }


    function addToRfq(product) {

        const existing = rfqState.find(
            item => item.name.toLowerCase() === product.name.toLowerCase()
        );


        if (existing) {

            existing.qty += 1;

        } else {

            rfqState.push({
                ...product,
                qty: 1
            });

        }


        renderRfq();

        showToast(`${product.name} ditambahkan ke RFQ.`);
    }


    function getProductData(card) {

        return {
            name: card.dataset.name || 'Produk',
            category: card.dataset.category || 'Material',
            price: Number(card.dataset.price || 0),
            unit: card.dataset.unit || 'unit'
        };
    }


    document.querySelectorAll('.add-rfq-btn').forEach(button => {

        button.addEventListener('click', () => {

            const card = button.closest('.product-card');

            if (!card) return;

            const product = getProductData(card);

            addToRfq(product);

            if (drawer.classList.contains('translate-x-full')) {
                toggleRfqDrawer();
            }

        });

    });


    function applyProductFilter() {

        const query =
            (searchInput?.value || '')
                .trim()
                .toLowerCase();


        document.querySelectorAll('.product-card').forEach(card => {

            const category = card.dataset.category || '';
            const name = card.dataset.name || '';

            const matchesCategory =
                activeCategory === 'Semua' ||
                category === activeCategory;

            const searchableText =
                `${name} ${category}`.toLowerCase();

            const matchesSearch =
                searchableText.includes(query);

            card.style.display =
                matchesCategory && matchesSearch
                    ? ''
                    : 'none';
        });


        document.querySelectorAll('.filter-btn').forEach(button => {

            const current =
                button.dataset.filter === activeCategory;

            button.classList.toggle(
                'bg-[#0f2942]',
                current
            );

            button.classList.toggle(
                'text-white',
                current
            );

            button.classList.toggle(
                'font-bold',
                current
            );

            button.classList.toggle(
                'text-[#43474d]',
                !current
            );
        });

    }


    function filterByCategory(category) {

        activeCategory = category;

        applyProductFilter();

        document
            .getElementById('produk')
            ?.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
    }


    window.filterByCategory = filterByCategory;


    searchInput?.addEventListener(
        'input',
        applyProductFilter
    );


    rfqList.addEventListener('click', event => {

        const button =
            event.target.closest('button[data-action]');

        if (!button) return;


        const card =
            button.closest('[data-index]');

        if (!card) return;


        const index =
            Number(card.dataset.index);

        const action =
            button.dataset.action;


        if (!rfqState[index]) return;


        if (action === 'remove') {

            rfqState.splice(index, 1);

        } else if (action === 'increase') {

            rfqState[index].qty += 1;

        } else if (action === 'decrease') {

            if (rfqState[index].qty > 1) {
                rfqState[index].qty -= 1;
            }

        }


        renderRfq();

    });


    function submitRfqToPhone() {

        if (!rfqState.length) {

            showToast('RFQ masih kosong.');

            return;
        }


        const items =
            rfqState.map(item =>
                `- ${item.name} (${item.qty} ${item.unit})`
            ).join('\n');


        const subtotal =
            formatRupiah(getSubtotal());


        const message =
`Halo TB Sinar Jaya,

Saya ingin menanyakan penawaran untuk:

${items}

Estimasi subtotal dari website: ${subtotal}

Mohon konfirmasi harga dan ketersediaannya.`;


        window.open(
            `https://wa.me/${STORE_PHONE}?text=${encodeURIComponent(message)}`,
            '_blank',
            'noopener,noreferrer'
        );
    }


    window.submitRfqToPhone = submitRfqToPhone;


    document.addEventListener('keydown', event => {

        if (event.key === 'Escape') {

            if (!drawer.classList.contains('translate-x-full')) {
                toggleRfqDrawer();
            }

        }


        if (
            (event.ctrlKey || event.metaKey) &&
            event.key.toLowerCase() === 'k'
        ) {

            event.preventDefault();

            searchInput?.focus();

        }

    });


    renderRfq();
    applyProductFilter();

})();
</script>

</body>
</html>