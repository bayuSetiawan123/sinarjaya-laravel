<!DOCTYPE html>
<html class="light" lang="id">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title>Katalog Material &amp; Bahan Bangunan - Sinar Jaya</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect"/>
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin/>
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap"
        rel="stylesheet"
    />

    <!-- Material Symbols -->
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:FILL,wght@0..1,100..700&display=swap"
        rel="stylesheet"
    />

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>

    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "surface-container-highest": "#e0e3e5",
                        "on-secondary-fixed": "#380d00",
                        "on-primary-fixed": "#011d35",
                        "primary-fixed": "#d1e4ff",
                        "tertiary-container": "#1a283a",
                        "primary-container": "#0f2942",
                        "secondary-container": "#fc6018",
                        "on-error": "#ffffff",
                        "on-primary": "#ffffff",
                        "primary": "#001428",
                        "on-surface-variant": "#43474d",
                        "on-secondary-container": "#531800",
                        "inverse-primary": "#b0c9e8",
                        "secondary-fixed": "#ffdbcf",
                        "on-primary-container": "#7991af",
                        "background": "#f7f9fb",
                        "on-surface": "#191c1e",
                        "on-secondary-fixed-variant": "#802a00",
                        "on-error-container": "#93000a",
                        "on-tertiary": "#ffffff",
                        "tertiary-fixed": "#d5e3fc",
                        "surface-bright": "#f7f9fb",
                        "outline": "#74777e",
                        "surface-container": "#eceef0",
                        "primary-fixed-dim": "#b0c9e8",
                        "on-secondary": "#ffffff",
                        "on-background": "#191c1e",
                        "surface-dim": "#d8dadc",
                        "error": "#ba1a1a",
                        "inverse-surface": "#2d3133",
                        "secondary": "#a83900",
                        "error-container": "#ffdad6",
                        "surface-variant": "#e0e3e5",
                        "tertiary": "#051325",
                        "secondary-fixed-dim": "#ffb59a",
                        "on-primary-fixed-variant": "#314863",
                        "tertiary-fixed-dim": "#b9c7df",
                        "outline-variant": "#c3c6ce",
                        "inverse-on-surface": "#eff1f3",
                        "surface-tint": "#49607c",
                        "surface-container-lowest": "#ffffff",
                        "surface-container-high": "#e6e8ea",
                        "on-tertiary-fixed": "#0d1c2e",
                        "surface": "#f7f9fb",
                        "on-tertiary-fixed-variant": "#3a485b",
                        "surface-container-low": "#f2f4f6"
                    },

                    borderRadius: {
                        DEFAULT: "0.125rem",
                        lg: "0.25rem",
                        xl: "0.5rem",
                        full: "0.75rem"
                    },

                    fontFamily: {
                        "headline-md": ["Plus Jakarta Sans"],
                        "display-lg": ["Plus Jakarta Sans"],
                        "body-md": ["Plus Jakarta Sans"],
                        "headline-lg-mobile": ["Plus Jakarta Sans"],
                        "headline-sm": ["Plus Jakarta Sans"],
                        "label-lg": ["Plus Jakarta Sans"],
                        "label-sm": ["Plus Jakarta Sans"],
                        "display-lg-mobile": ["Plus Jakarta Sans"],
                        "headline-lg": ["Plus Jakarta Sans"],
                        "title-lg": ["Plus Jakarta Sans"],
                        "label-md": ["Plus Jakarta Sans"],
                        "body-lg": ["Plus Jakarta Sans"],
                        "title-md": ["Plus Jakarta Sans"],
                        "body-sm": ["Plus Jakarta Sans"]
                    },

                    fontSize: {
                        "headline-md": ["24px", {
                            lineHeight: "32px",
                            letterSpacing: "-0.01em",
                            fontWeight: "600"
                        }],
                        "display-lg": ["48px", {
                            lineHeight: "56px",
                            letterSpacing: "-0.02em",
                            fontWeight: "800"
                        }],
                        "body-md": ["14px", {
                            lineHeight: "20px",
                            fontWeight: "400"
                        }],
                        "headline-lg-mobile": ["24px", {
                            lineHeight: "32px",
                            letterSpacing: "-0.01em",
                            fontWeight: "700"
                        }],
                        "headline-sm": ["20px", {
                            lineHeight: "28px",
                            fontWeight: "600"
                        }],
                        "label-lg": ["14px", {
                            lineHeight: "20px",
                            letterSpacing: "0.01em",
                            fontWeight: "600"
                        }],
                        "label-sm": ["11px", {
                            lineHeight: "14px",
                            letterSpacing: "0.04em",
                            fontWeight: "700"
                        }],
                        "display-lg-mobile": ["32px", {
                            lineHeight: "40px",
                            letterSpacing: "-0.01em",
                            fontWeight: "800"
                        }],
                        "headline-lg": ["32px", {
                            lineHeight: "40px",
                            letterSpacing: "-0.015em",
                            fontWeight: "700"
                        }],
                        "title-lg": ["18px", {
                            lineHeight: "26px",
                            fontWeight: "600"
                        }],
                        "label-md": ["12px", {
                            lineHeight: "16px",
                            letterSpacing: "0.02em",
                            fontWeight: "600"
                        }],
                        "body-lg": ["16px", {
                            lineHeight: "24px",
                            fontWeight: "400"
                        }],
                        "title-md": ["16px", {
                            lineHeight: "24px",
                            fontWeight: "600"
                        }],
                        "body-sm": ["12px", {
                            lineHeight: "16px",
                            fontWeight: "400"
                        }]
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

        .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .list-mode .product-card {
            display: flex;
            flex-direction: column;
        }

        @media (min-width: 768px) {
            .list-mode .product-card {
                flex-direction: row;
            }

            .list-mode .product-card > div:first-child {
                flex: 1;
            }

            .list-mode .product-card > div:last-child {
                width: 320px;
                flex-shrink: 0;
            }
        }
    </style>
</head>

<body
    class="bg-background text-on-surface font-body-md min-h-screen flex flex-col antialiased selection:bg-secondary-container selection:text-on-secondary"
    id="top"
>

<!-- ========================================================= -->
<!-- TOP NAVIGATION -->
<!-- ========================================================= -->

<header class="bg-surface sticky top-0 z-50 border-b border-outline-variant shadow-sm">

    <div class="max-w-7xl mx-auto px-4 md:px-8 h-20 flex items-center justify-between gap-6">

        <!-- Brand -->
        <a
            class="flex items-center shrink-0 active:scale-95 transition-transform duration-100"
            href="{{ route('home') }}"
        >
            <span class="text-2xl md:text-3xl font-extrabold text-primary tracking-tight">
                Sinar Jaya
            </span>
        </a>

        <!-- Search -->
        <div class="hidden lg:flex flex-1 max-w-lg items-center">

            <div class="relative w-full flex items-center rounded-lg border border-outline-variant bg-surface-container-lowest focus-within:ring-2 focus-within:ring-primary-container focus-within:border-primary-container transition-all">

                <div class="pl-3.5 pr-2 py-2 flex items-center pointer-events-none text-on-surface-variant">
                    <span class="material-symbols-outlined text-[20px]">
                        search
                    </span>
                </div>

                <input
                    class="w-full bg-transparent py-2.5 text-body-md text-on-surface placeholder:text-outline focus:outline-none border-0 focus:ring-0"
                    id="global-search"
                    placeholder="Cari semen, besi beton, pipa, keramik, cat..."
                    type="text"
                />

                <span class="text-xs bg-surface-container px-2 py-1 rounded text-on-surface-variant font-label-sm mr-2 shrink-0 border border-outline-variant">
                    Grosir &amp; Retail
                </span>

            </div>

        </div>

        <!-- Navigation -->
        <nav class="hidden md:flex items-center gap-7">

            <a
                class="text-on-surface-variant font-label-lg text-label-lg pb-1 hover:text-secondary transition-colors duration-150"
                href="{{ route('home') }}"
            >
                Home
            </a>

            <a
                class="text-secondary border-b-2 border-secondary pb-1 font-title-md text-title-md"
                href="{{ route('katalog') }}"
            >
                Katalog
            </a>

            <a
                class="text-on-surface-variant font-label-lg text-label-lg pb-1 hover:text-secondary transition-colors duration-150"
                href="{{ route('home') }}#cara-pesan"
            >
                Cara Pesan
            </a>

            <a
                class="text-on-surface-variant font-label-lg text-label-lg pb-1 hover:text-secondary transition-colors duration-150"
                href="{{ route('home') }}#kontak"
            >
                Kontak
            </a>

        </nav>

        <!-- Actions -->
        <div class="flex items-center gap-3 shrink-0">

            <button
                type="button"
                data-action="sales-whatsapp"
                class="hidden sm:flex items-center gap-1.5 px-3 py-2 text-on-surface-variant hover:text-primary transition-colors font-label-md rounded border border-outline-variant bg-surface-container-lowest active:scale-95"
                title="Hubungi Toko"
            >
                <span class="material-symbols-outlined text-[19px] text-secondary">
                    call
                </span>

                <span class="hidden xl:inline text-label-sm font-label-sm">
                    Kontak Toko
                </span>
            </button>

            <button
                type="button"
                data-action="open-rfq"
                class="relative flex items-center gap-2 px-3.5 py-2.5 rounded-lg bg-surface-container-high hover:bg-surface-variant border border-outline-variant text-on-surface transition-colors active:scale-95"
            >
                <span class="material-symbols-outlined text-[20px]">
                    shopping_cart
                </span>

                <span class="font-label-md text-label-md hidden sm:inline">
                    Keranjang RFQ
                </span>

                <span class="inline-flex items-center justify-center bg-secondary text-on-secondary text-[11px] font-bold h-5 min-w-[20px] px-1 rounded-full">
                    0
                </span>
            </button>

            <a
                class="hidden xl:inline-flex items-center gap-2 bg-secondary hover:bg-secondary-container text-on-secondary font-label-lg text-label-lg px-4 py-2.5 rounded shadow-sm hover:shadow active:scale-95 transition-all"
                href="{{ route('rfq') }}"
            >
                <span class="material-symbols-outlined text-[18px]">
                    request_quote
                </span>

                <span>
                    Minta Penawaran
                </span>
            </a>

        </div>

    </div>
</header>


<!-- ========================================================= -->
<!-- MAIN -->
<!-- ========================================================= -->

<main
    class="flex-1 max-w-7xl w-full mx-auto px-4 md:px-8 py-6"
    id="katalog"
>

    <!-- Breadcrumb -->
    <nav
        aria-label="Breadcrumb"
        class="flex items-center gap-2 text-body-sm font-body-sm text-on-surface-variant mb-4"
    >

        <a
            class="hover:text-secondary transition-colors"
            href="{{ route('home') }}"
        >
            Home
        </a>

        <span class="material-symbols-outlined text-[14px]">
            chevron_right
        </span>

        <a
            class="hover:text-secondary transition-colors"
            href="{{ route('katalog') }}"
        >
            Katalog Material
        </a>

        <span class="material-symbols-outlined text-[14px]">
            chevron_right
        </span>

        <span class="text-on-surface font-semibold">
            Semua Produk
        </span>

    </nav>


    <!-- Header Banner -->
    <div class="relative bg-surface-container-lowest border border-outline-variant rounded-xl p-6 md:p-8 mb-6 shadow-sm overflow-hidden">

        <div class="relative z-10 max-w-3xl">

            <div class="inline-flex items-center gap-2 px-2.5 py-1 rounded bg-surface-container border border-outline-variant text-on-surface font-label-sm text-label-sm mb-3">

                <span class="w-2 h-2 rounded-full bg-emerald-600 animate-pulse"></span>

                <span>
                    Katalog TB Sinar Jaya
                </span>

            </div>

            <h1 class="text-headline-lg font-headline-lg text-primary tracking-tight mb-2">
                Katalog Material &amp; Bahan Bangunan
            </h1>

            <p class="text-body-md font-body-md text-on-surface-variant leading-relaxed">
                Jelajahi berbagai contoh produk material bangunan berdasarkan kategori.
                Pilih produk, masukkan ke RFQ, lalu hubungi toko untuk konfirmasi harga,
                ketersediaan, dan kebutuhan pembelian.
            </p>

            <div class="mt-4 inline-flex items-center gap-2 px-3 py-2 rounded bg-orange-50 border border-orange-200 text-secondary text-xs">
                <span class="material-symbols-outlined text-[18px]">
                    info
                </span>

                <span>
                    Produk, harga, dan stok pada halaman ini masih merupakan data contoh prototype.
                </span>
            </div>

        </div>

        <div class="absolute right-0 top-0 bottom-0 w-1/3 opacity-10 pointer-events-none flex items-center justify-end pr-8">
            <span class="material-symbols-outlined text-[140px] text-primary">
                architecture
            </span>
        </div>

    </div>


    <!-- Utility Bar -->
    <div class="bg-surface-container-lowest border border-outline-variant rounded-lg p-3 md:p-4 mb-6 shadow-sm flex flex-col md:flex-row md:items-center justify-between gap-4">

        <div class="flex flex-wrap items-center gap-2">

            <span class="text-body-sm font-body-sm text-on-surface-variant font-medium pr-2 border-r border-outline-variant hidden sm:inline">
                Menampilkan
                <strong
                    id="visible-count"
                    class="text-on-surface font-semibold"
                >
                    12
                </strong>
                produk
            </span>

            <button
                type="button"
                class="quick-filter px-3 py-1.5 rounded-full text-label-sm font-label-sm bg-primary text-on-primary"
                data-quick-filter="all"
            >
                Semua
            </button>

            <button
                type="button"
                class="quick-filter px-3 py-1.5 rounded-full text-label-sm font-label-sm bg-surface-container hover:bg-surface-container-high text-on-surface border border-outline-variant transition-colors"
                data-quick-filter="ready"
            >
                Ready Stock
            </button>

            <button
                type="button"
                class="quick-filter px-3 py-1.5 rounded-full text-label-sm font-label-sm bg-surface-container hover:bg-surface-container-high text-on-surface border border-outline-variant transition-colors"
                data-quick-filter="truck"
            >
                Bisa Kirim
            </button>

            <button
                type="button"
                class="quick-filter px-3 py-1.5 rounded-full text-label-sm font-label-sm bg-surface-container hover:bg-surface-container-high text-on-surface border border-outline-variant transition-colors"
                data-quick-filter="sni"
            >
                SNI
            </button>

        </div>


        <div class="flex items-center justify-between md:justify-end gap-3 shrink-0">

            <div class="flex items-center gap-2">

                <label
                    class="text-body-sm text-on-surface-variant whitespace-nowrap"
                    for="sort-select"
                >
                    Urutkan:
                </label>

                <select
                    class="bg-surface border border-outline-variant rounded py-1.5 pl-3 pr-8 text-body-sm text-on-surface focus:ring-1 focus:ring-primary focus:border-primary"
                    id="sort-select"
                >
                    <option value="default" selected>
                        Paling Sesuai
                    </option>

                    <option value="low">
                        Harga Terendah
                    </option>

                    <option value="high">
                        Harga Tertinggi
                    </option>

                    <option value="stock">
                        Stok Terbanyak
                    </option>
                </select>

            </div>


            <div class="flex items-center border border-outline-variant rounded overflow-hidden">

                <button
                    type="button"
                    class="p-1.5 bg-primary text-on-primary"
                    id="grid-view-btn"
                    title="Tampilan Grid"
                >
                    <span class="material-symbols-outlined text-[18px]">
                        grid_view
                    </span>
                </button>

                <button
                    type="button"
                    class="p-1.5 bg-surface text-on-surface-variant hover:text-on-surface"
                    id="list-view-btn"
                    title="Tampilan List"
                >
                    <span class="material-symbols-outlined text-[18px]">
                        view_list
                    </span>
                </button>

            </div>

        </div>

    </div>


    <!-- Two Column -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-start">

        <!-- ================================================= -->
        <!-- SIDEBAR FILTER -->
        <!-- ================================================= -->

        <aside class="lg:col-span-3 space-y-5">

            <div class="bg-surface-container-lowest border border-outline-variant rounded-xl p-5 shadow-sm space-y-6">

                <!-- Header -->
                <div class="flex items-center justify-between pb-3 border-b border-outline-variant">

                    <div class="flex items-center gap-2">

                        <span class="material-symbols-outlined text-secondary text-[20px]">
                            tune
                        </span>

                        <h2 class="font-title-lg text-title-lg text-primary font-bold">
                            Filter Katalog
                        </h2>

                    </div>

                    <button
                        type="button"
                        class="text-label-sm text-secondary hover:underline"
                        data-action="reset-all"
                    >
                        Reset
                    </button>

                </div>


                <!-- Search -->
                <div class="space-y-2">

                    <label class="text-label-sm text-on-surface-variant">
                        Pencarian Cepat
                    </label>

                    <div class="relative">

                        <input
                            class="w-full bg-surface border border-outline-variant rounded py-2 pl-8 pr-3 text-body-sm placeholder:text-outline focus:ring-1 focus:ring-primary focus:border-primary text-on-surface"
                            id="filter-search"
                            placeholder="Merk, produk, kategori..."
                            type="text"
                        />

                        <span class="material-symbols-outlined absolute left-2.5 top-2.5 text-[16px] text-outline">
                            search
                        </span>

                    </div>

                </div>


                <!-- Category -->
                <div class="space-y-3">

                    <h3 class="text-label-lg text-primary flex items-center justify-between">
                        <span>Kategori Material</span>

                        <span class="material-symbols-outlined text-[18px] text-outline">
                            expand_less
                        </span>
                    </h3>


                    <div class="space-y-2 pt-1">

                        <label class="flex items-center gap-2.5 cursor-pointer">
                            <input
                                checked
                                class="w-4 h-4 rounded text-primary focus:ring-primary border-outline-variant"
                                data-category-filter="semen"
                                type="checkbox"
                            />
                            <span class="text-body-sm text-on-surface">
                                Semen &amp; Mortar
                            </span>
                        </label>

                        <label class="flex items-center gap-2.5 cursor-pointer">
                            <input
                                checked
                                class="w-4 h-4 rounded text-primary focus:ring-primary border-outline-variant"
                                data-category-filter="besi"
                                type="checkbox"
                            />
                            <span class="text-body-sm text-on-surface">
                                Besi &amp; Baja
                            </span>
                        </label>

                        <label class="flex items-center gap-2.5 cursor-pointer">
                            <input
                                checked
                                class="w-4 h-4 rounded text-primary focus:ring-primary border-outline-variant"
                                data-category-filter="cat"
                                type="checkbox"
                            />
                            <span class="text-body-sm text-on-surface">
                                Cat &amp; Pelapis
                            </span>
                        </label>

                        <label class="flex items-center gap-2.5 cursor-pointer">
                            <input
                                checked
                                class="w-4 h-4 rounded text-primary focus:ring-primary border-outline-variant"
                                data-category-filter="pipa"
                                type="checkbox"
                            />
                            <span class="text-body-sm text-on-surface">
                                Pipa &amp; Sanitari
                            </span>
                        </label>

                        <label class="flex items-center gap-2.5 cursor-pointer">
                            <input
                                checked
                                class="w-4 h-4 rounded text-primary focus:ring-primary border-outline-variant"
                                data-category-filter="keramik"
                                type="checkbox"
                            />
                            <span class="text-body-sm text-on-surface">
                                Keramik &amp; Granit
                            </span>
                        </label>

                    </div>

                </div>


                <!-- Price -->
                <div class="space-y-3 pt-3 border-t border-outline-variant">

                    <h3 class="text-label-lg text-primary flex items-center justify-between">
                        <span>Rentang Harga</span>

                        <span class="material-symbols-outlined text-[18px] text-outline">
                            expand_less
                        </span>
                    </h3>

                    <div class="grid grid-cols-3 gap-1 pt-1">

                        <button
                            type="button"
                            class="py-1 px-1.5 rounded text-[11px] bg-surface-container border border-outline-variant hover:bg-surface-variant"
                            data-price-preset="0-100000"
                        >
                            &lt; 100rb
                        </button>

                        <button
                            type="button"
                            class="py-1 px-1.5 rounded text-[11px] bg-surface-container border border-outline-variant hover:bg-surface-variant"
                            data-price-preset="100000-500000"
                        >
                            100-500rb
                        </button>

                        <button
                            type="button"
                            class="py-1 px-1.5 rounded text-[11px] bg-surface-container border border-outline-variant hover:bg-surface-variant"
                            data-price-preset="500000-999999999"
                        >
                            &gt; 500rb
                        </button>

                    </div>


                    <div class="grid grid-cols-2 gap-2 pt-2">

                        <div>

                            <label class="text-[11px] text-outline">
                                Minimum
                            </label>

                            <input
                                class="w-full bg-surface border border-outline-variant rounded p-1.5 text-body-sm font-medium text-on-surface"
                                id="price-min"
                                type="text"
                                value="Rp 0"
                            />

                        </div>

                        <div>

                            <label class="text-[11px] text-outline">
                                Maksimum
                            </label>

                            <input
                                class="w-full bg-surface border border-outline-variant rounded p-1.5 text-body-sm font-medium text-on-surface"
                                id="price-max"
                                type="text"
                                value="Rp 2.500.000"
                            />

                        </div>

                    </div>

                </div>


                <!-- Service -->
                <div class="space-y-2 pt-3 border-t border-outline-variant">

                    <h3 class="text-label-lg text-primary mb-2">
                        Ketersediaan &amp; Layanan
                    </h3>

                    <label class="flex items-center gap-2.5 cursor-pointer">

                        <input
                            checked
                            class="w-4 h-4 rounded text-primary focus:ring-primary border-outline-variant"
                            data-service-filter="ready"
                            type="checkbox"
                        />

                        <span class="text-body-sm">
                            Ready Stock
                        </span>

                    </label>

                    <label class="flex items-center gap-2.5 cursor-pointer">

                        <input
                            checked
                            class="w-4 h-4 rounded text-primary focus:ring-primary border-outline-variant"
                            data-service-filter="sni"
                            type="checkbox"
                        />

                        <span class="text-body-sm">
                            Label SNI / Standar
                        </span>

                    </label>

                    <label class="flex items-center gap-2.5 cursor-pointer">

                        <input
                            class="w-4 h-4 rounded text-primary focus:ring-primary border-outline-variant"
                            data-service-filter="ppn"
                            type="checkbox"
                        />

                        <span class="text-body-sm">
                            Kebutuhan B2B / PPN
                        </span>

                    </label>

                </div>


                <!-- Buttons -->
                <div class="pt-3 border-t border-outline-variant space-y-2">

                    <button
                        type="button"
                        data-action="apply-filter"
                        class="w-full py-2.5 px-4 bg-primary hover:bg-tertiary text-on-primary rounded transition-colors shadow-sm flex items-center justify-center gap-2"
                    >
                        <span class="material-symbols-outlined text-[18px]">
                            filter_alt
                        </span>

                        <span>
                            Terapkan Filter
                        </span>
                    </button>

                    <button
                        type="button"
                        data-action="reset-filter"
                        class="w-full py-2 px-4 bg-surface hover:bg-surface-container text-on-surface-variant rounded border border-outline-variant transition-colors"
                    >
                        Reset Filter
                    </button>

                </div>

            </div>


            <!-- Service Info -->
            <div class="bg-surface-container-low border border-outline-variant rounded-xl p-4 flex items-start gap-3">

                <span class="material-symbols-outlined text-secondary text-[24px] shrink-0">
                    local_shipping
                </span>

                <div>

                    <h4 class="font-title-md text-primary font-semibold">
                        Informasi Pengiriman
                    </h4>

                    <p class="text-body-sm text-on-surface-variant mt-0.5">
                        Ketersediaan pengiriman dikonfirmasi bersama toko sesuai kebutuhan pesanan.
                    </p>

                </div>

            </div>

        </aside>


        <!-- ================================================= -->
        <!-- PRODUCTS -->
        <!-- ================================================= -->

        <section class="lg:col-span-9 space-y-6">

            <div
                id="product-grid"
                class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-5"
            >

                <!-- ================================================= -->
                <!-- PRODUCT 1 -->
                <!-- ================================================= -->

                <article
                    class="product-card bg-surface-container-lowest border border-outline-variant hover:border-outline rounded-xl p-4 shadow-sm hover:shadow-md transition-all duration-200 flex flex-col justify-between group"
                    data-category="semen"
                    data-name="Semen Tiga Roda 50kg Portland Composite Cement"
                    data-price="68500"
                    data-product-index="1"
                    data-sku="SMN-TR-50"
                    data-stock="500"
                    data-ready="true"
                    data-sni="true"
                    data-truck="true"
                >

                    <div>

                        <div class="flex items-center justify-between mb-3">

                            <span class="px-2 py-0.5 rounded text-[11px] bg-orange-100 text-secondary border border-orange-200 font-bold uppercase tracking-wider">
                                Contoh Produk
                            </span>

                            <span class="text-label-sm text-outline">
                                SKU: SMN-TR-50
                            </span>

                        </div>

                        <div class="relative w-full h-44 rounded-lg bg-surface-container overflow-hidden mb-3.5 flex items-center justify-center border border-outline-variant">

                            <img
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuB6FqOsQ6rB2Xz82YIiDV5cTtR8EmDJDNw04NBOIXYfLQbhiitBEYCGQ4QbIeEDK6pyKb2yIgMEPtCF-H59LCEd5MJz_ZqEYfx6sN0OPv61AVvOFO05GOZGWIVguNqTgAQNycdU920s09W7RAN_GIMK_DbWaqD5b6COZvSNTk8ARfP70pvuaiKhn3h2yFIGYGiC6gzFs716IRMlfP3MGh1tjXEJWWFjQuKx4gv38-XvcxAMkkbSdYij"
                                alt="Contoh gambar semen"
                            />

                            <div class="absolute bottom-2 left-2 px-2 py-0.5 rounded bg-primary/90 text-on-primary text-[10px] font-label-sm flex items-center gap-1">
                                <span class="material-symbols-outlined text-[12px]">
                                    verified
                                </span>
                                SNI / Standar
                            </div>

                        </div>

                        <span class="text-[11px] uppercase tracking-wider text-secondary font-bold">
                            Semen &amp; Mortar
                        </span>

                        <h3 class="font-title-md text-primary font-bold mt-1 line-clamp-2 leading-snug">
                            Semen Tiga Roda 50kg Portland Composite Cement
                        </h3>

                        <div class="mt-2.5 py-1.5 px-2 bg-surface rounded text-body-sm text-on-surface-variant flex items-center justify-between border border-outline-variant">
                            <span>
                                Berat:
                                <strong>50 kg/sak</strong>
                            </span>

                            <span>
                                Tipe:
                                <strong>PCC</strong>
                            </span>
                        </div>

                        <div class="flex items-center gap-1.5 mt-2.5 text-body-sm text-emerald-800 font-medium">
                            <span class="w-2 h-2 rounded-full bg-emerald-600"></span>
                            <span>Ready Stock — contoh</span>
                        </div>

                    </div>

                    <div class="pt-3.5 mt-3.5 border-t border-outline-variant">

                        <div class="flex items-baseline justify-between mb-2.5">

                            <div>
                                <span class="text-[11px] text-outline block">
                                    Harga Contoh:
                                </span>

                                <span class="text-title-lg font-bold text-primary">
                                    Rp 68.500
                                </span>

                                <span class="text-body-sm text-on-surface-variant">
                                    / Sak
                                </span>
                            </div>

                        </div>

                        <div class="grid grid-cols-5 gap-2">

                            <button
                                type="button"
                                class="col-span-4 bg-primary hover:bg-primary-container text-on-primary py-2 px-3 rounded text-label-md flex items-center justify-center gap-1.5"
                                data-action="add-rfq"
                                data-product-index="1"
                            >
                                <span class="material-symbols-outlined text-[18px]">
                                    add_shopping_cart
                                </span>

                                <span>
                                    + Tambah ke RFQ
                                </span>
                            </button>

                            <button
                                type="button"
                                class="col-span-1 border border-outline-variant hover:bg-surface-container text-on-surface py-2 rounded flex items-center justify-center"
                                data-action="detail"
                                data-product-index="1"
                                title="Detail Spesifikasi"
                            >
                                <span class="material-symbols-outlined text-[18px]">
                                    info
                                </span>
                            </button>

                        </div>

                    </div>

                </article>


                <!-- ================================================= -->
                <!-- PRODUCT 2 -->
                <!-- ================================================= -->

                <article
                    class="product-card bg-surface-container-lowest border border-outline-variant hover:border-outline rounded-xl p-4 shadow-sm hover:shadow-md transition-all duration-200 flex flex-col justify-between group"
                    data-category="besi"
                    data-name="Besi Beton Ulir 12mm x 12m SNI Krakatau Steel"
                    data-price="118000"
                    data-product-index="2"
                    data-sku="BSI-UL-12"
                    data-stock="1200"
                    data-ready="true"
                    data-sni="true"
                    data-truck="true"
                >

                    <div>

                        <div class="flex items-center justify-between mb-3">

                            <span class="px-2 py-0.5 rounded text-[11px] bg-blue-100 text-primary border border-blue-200 font-bold uppercase tracking-wider">
                                Contoh Produk
                            </span>

                            <span class="text-label-sm text-outline">
                                SKU: BSI-UL-12
                            </span>

                        </div>

                        <div class="relative w-full h-44 rounded-lg bg-surface-container overflow-hidden mb-3.5 flex items-center justify-center border border-outline-variant">

                            <img
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuBz1FOL6e6TMoTMCKsX1gy5r_amQ7jfaIeOqxeQJ77O_IXqgttqHDhhmes8RhgIx_k95BpdRi5ZdfaSkY9MuNO-FFZi9nIeNAq8GDDFp1z1QjBz72kecuY7gW6yxd4XbT7xVID8nvle-Ekb9wXEJpbz1zGZyhFh-UCtahuPj4I3toLGiaMHKHJaUXUT8i7lYa8vDENxH8o5MTkohpcYWUJQ6Al4KGQTluYy58qnGql6N5_89p1kbv6_"
                                alt="Contoh gambar besi beton"
                            />

                            <div class="absolute bottom-2 left-2 px-2 py-0.5 rounded bg-primary/90 text-on-primary text-[10px] font-label-sm flex items-center gap-1">
                                <span class="material-symbols-outlined text-[12px]">
                                    verified
                                </span>
                                SNI / Standar
                            </div>

                        </div>

                        <span class="text-[11px] uppercase tracking-wider text-secondary font-bold">
                            Besi &amp; Baja
                        </span>

                        <h3 class="font-title-md text-primary font-bold mt-1 line-clamp-2 leading-snug">
                            Besi Beton Ulir 12mm x 12m SNI Krakatau Steel
                        </h3>

                        <div class="mt-2.5 py-1.5 px-2 bg-surface rounded text-body-sm text-on-surface-variant flex items-center justify-between border border-outline-variant">
                            <span>
                                Panjang:
                                <strong>12 Meter</strong>
                            </span>

                            <span>
                                Ukuran:
                                <strong>12mm</strong>
                            </span>
                        </div>

                        <div class="flex items-center gap-1.5 mt-2.5 text-body-sm text-emerald-800 font-medium">
                            <span class="w-2 h-2 rounded-full bg-emerald-600"></span>
                            <span>Ready Stock — contoh</span>
                        </div>

                    </div>

                    <div class="pt-3.5 mt-3.5 border-t border-outline-variant">

                        <div class="mb-2.5">

                            <span class="text-[11px] text-outline block">
                                Harga Contoh:
                            </span>

                            <span class="text-title-lg font-bold text-primary">
                                Rp 118.000
                            </span>

                            <span class="text-body-sm text-on-surface-variant">
                                / Btg
                            </span>

                        </div>

                        <div class="grid grid-cols-5 gap-2">

                            <button
                                type="button"
                                class="col-span-4 bg-primary hover:bg-primary-container text-on-primary py-2 px-3 rounded text-label-md flex items-center justify-center gap-1.5"
                                data-action="add-rfq"
                                data-product-index="2"
                            >
                                <span class="material-symbols-outlined text-[18px]">
                                    add_shopping_cart
                                </span>

                                <span>
                                    + Tambah ke RFQ
                                </span>
                            </button>

                            <button
                                type="button"
                                class="col-span-1 border border-outline-variant hover:bg-surface-container text-on-surface py-2 rounded flex items-center justify-center"
                                data-action="detail"
                                data-product-index="2"
                                title="Detail Spesifikasi"
                            >
                                <span class="material-symbols-outlined text-[18px]">
                                    info
                                </span>
                            </button>

                        </div>

                    </div>

                </article>


                <!-- ================================================= -->
                <!-- PRODUCT 3 -->
                <!-- ================================================= -->

                <article
                    class="product-card bg-surface-container-lowest border border-outline-variant hover:border-outline rounded-xl p-4 shadow-sm hover:shadow-md transition-all duration-200 flex flex-col justify-between group"
                    data-category="cat"
                    data-name="Cat Tembok Dulux Weathershield 20L Brilliant White"
                    data-price="1450000"
                    data-product-index="3"
                    data-sku="CAT-DLX-20L"
                    data-stock="35"
                    data-ready="true"
                    data-sni="false"
                    data-truck="true"
                >

                    <div>

                        <div class="flex items-center justify-between mb-3">

                            <span class="px-2 py-0.5 rounded text-[11px] bg-purple-100 text-purple-900 border border-purple-200 font-bold uppercase tracking-wider">
                                Contoh Produk
                            </span>

                            <span class="text-label-sm text-outline">
                                SKU: CAT-DLX-20L
                            </span>

                        </div>

                        <div class="relative w-full h-44 rounded-lg bg-surface-container overflow-hidden mb-3.5 flex items-center justify-center border border-outline-variant">

                            <img
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuANWN-8EaGxj3n9nAJ2MSZ_mgDOM-XZZ03t9Rm9T16hF61-ARW4GasBnrgxikaUEs75DFDtmqa-1W7-HnVxxt_Fi_v4hx6sz4l3SG2uNF1MIlXgeH12vpA88YeU_xZ6oyJ--0lw1vC9YaxuCNxpLUCqcPrbWFUmqh6AyfPjSd7FmXCb4QTR8F6qhOuLOUbi285tiHHjaGIyqoueMGbPNSUJw2SkM7LihtV4nOp_Cz70tEnr6TRejbG5"
                                alt="Contoh gambar cat"
                            />

                        </div>

                        <span class="text-[11px] uppercase tracking-wider text-secondary font-bold">
                            Cat &amp; Pelapis
                        </span>

                        <h3 class="font-title-md text-primary font-bold mt-1 line-clamp-2 leading-snug">
                            Cat Tembok Dulux Weathershield 20L Brilliant White
                        </h3>

                        <div class="mt-2.5 py-1.5 px-2 bg-surface rounded text-body-sm text-on-surface-variant flex items-center justify-between border border-outline-variant">
                            <span>
                                Isi:
                                <strong>20 Liter</strong>
                            </span>

                            <span>
                                Warna:
                                <strong>White</strong>
                            </span>
                        </div>

                        <div class="flex items-center gap-1.5 mt-2.5 text-body-sm text-emerald-800 font-medium">
                            <span class="w-2 h-2 rounded-full bg-emerald-600"></span>
                            <span>Ready Stock — contoh</span>
                        </div>

                    </div>

                    <div class="pt-3.5 mt-3.5 border-t border-outline-variant">

                        <div class="mb-2.5">

                            <span class="text-[11px] text-outline block">
                                Harga Contoh:
                            </span>

                            <span class="text-title-lg font-bold text-primary">
                                Rp 1.450.000
                            </span>

                            <span class="text-body-sm text-on-surface-variant">
                                / Pail
                            </span>

                        </div>

                        <div class="grid grid-cols-5 gap-2">

                            <button
                                type="button"
                                class="col-span-4 bg-primary hover:bg-primary-container text-on-primary py-2 px-3 rounded text-label-md flex items-center justify-center gap-1.5"
                                data-action="add-rfq"
                                data-product-index="3"
                            >
                                <span class="material-symbols-outlined text-[18px]">
                                    add_shopping_cart
                                </span>

                                <span>
                                    + Tambah ke RFQ
                                </span>
                            </button>

                            <button
                                type="button"
                                class="col-span-1 border border-outline-variant hover:bg-surface-container text-on-surface py-2 rounded flex items-center justify-center"
                                data-action="detail"
                                data-product-index="3"
                                title="Detail Spesifikasi"
                            >
                                <span class="material-symbols-outlined text-[18px]">
                                    info
                                </span>
                            </button>

                        </div>

                    </div>

                </article>


                <!-- ================================================= -->
                <!-- PRODUCT 4 -->
                <!-- ================================================= -->

                <article
                    class="product-card bg-surface-container-lowest border border-outline-variant hover:border-outline rounded-xl p-4 shadow-sm hover:shadow-md transition-all duration-200 flex flex-col justify-between group"
                    data-category="pipa"
                    data-name='Pipa PVC Rucika D 3" Panjang 4 Meter'
                    data-price="88000"
                    data-product-index="4"
                    data-sku="PIP-RCK-D3"
                    data-stock="150"
                    data-ready="true"
                    data-sni="true"
                    data-truck="true"
                >

                    <div>

                        <div class="flex items-center justify-between mb-3">

                            <span class="px-2 py-0.5 rounded text-[11px] bg-cyan-100 text-cyan-900 border border-cyan-200 font-bold uppercase tracking-wider">
                                Contoh Produk
                            </span>

                            <span class="text-label-sm text-outline">
                                SKU: PIP-RCK-D3
                            </span>

                        </div>

                        <div class="relative w-full h-44 rounded-lg bg-surface-container overflow-hidden mb-3.5 flex items-center justify-center border border-outline-variant">

                            <img
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuAfW8jrxnIVYHlz8zH4KhbfpRGl3SMtV3LnrdzMGEMzyD_XyIe4BNggwiYcE-XwBBQdtloWvu0SdkryWZjaOwYrr0vvISGNfUcuTPX-lJcw9Ieu74gqkAAZE629It48BZFV7PrgAilf3kIHACWJ9uRKOZ12jJOPnSqhWgYr8sEXvYcqIQ5xo0ifo5nkjluFsOD0LyzqoMJc52_NPBpbM5ML9loCiTZxirGlfty5Mr56xYYtHPMb6LSf"
                                alt="Contoh gambar pipa PVC"
                            />

                        </div>

                        <span class="text-[11px] uppercase tracking-wider text-secondary font-bold">
                            Pipa &amp; Sanitari
                        </span>

                        <h3 class="font-title-md text-primary font-bold mt-1 line-clamp-2 leading-snug">
                            Pipa PVC Rucika D 3" Panjang 4 Meter
                        </h3>

                        <div class="mt-2.5 py-1.5 px-2 bg-surface rounded text-body-sm text-on-surface-variant flex items-center justify-between border border-outline-variant">
                            <span>
                                Diameter:
                                <strong>3 Inci</strong>
                            </span>

                            <span>
                                Panjang:
                                <strong>4 Meter</strong>
                            </span>
                        </div>

                        <div class="flex items-center gap-1.5 mt-2.5 text-body-sm text-emerald-800 font-medium">
                            <span class="w-2 h-2 rounded-full bg-emerald-600"></span>
                            <span>Ready Stock — contoh</span>
                        </div>

                    </div>

                    <div class="pt-3.5 mt-3.5 border-t border-outline-variant">

                        <div class="mb-2.5">

                            <span class="text-[11px] text-outline block">
                                Harga Contoh:
                            </span>

                            <span class="text-title-lg font-bold text-primary">
                                Rp 88.000
                            </span>

                            <span class="text-body-sm text-on-surface-variant">
                                / Btg
                            </span>

                        </div>

                        <div class="grid grid-cols-5 gap-2">

                            <button
                                type="button"
                                class="col-span-4 bg-primary hover:bg-primary-container text-on-primary py-2 px-3 rounded text-label-md flex items-center justify-center gap-1.5"
                                data-action="add-rfq"
                                data-product-index="4"
                            >
                                <span class="material-symbols-outlined text-[18px]">
                                    add_shopping_cart
                                </span>

                                <span>
                                    + Tambah ke RFQ
                                </span>
                            </button>

                            <button
                                type="button"
                                class="col-span-1 border border-outline-variant hover:bg-surface-container text-on-surface py-2 rounded flex items-center justify-center"
                                data-action="detail"
                                data-product-index="4"
                                title="Detail Spesifikasi"
                            >
                                <span class="material-symbols-outlined text-[18px]">
                                    info
                                </span>
                            </button>

                        </div>

                    </div>

                </article>


                <!-- ================================================= -->
                <!-- PRODUCT 5 -->
                <!-- ================================================= -->

                <article
                    class="product-card bg-surface-container-lowest border border-outline-variant hover:border-outline rounded-xl p-4 shadow-sm hover:shadow-md transition-all duration-200 flex flex-col justify-between group"
                    data-category="keramik"
                    data-name="Granit Tile 60x60 cm Glazed Polished Cream Marble"
                    data-price="185000"
                    data-product-index="5"
                    data-sku="GRN-CRM-60"
                    data-stock="80"
                    data-ready="true"
                    data-sni="true"
                    data-truck="true"
                >

                    <div>

                        <div class="flex items-center justify-between mb-3">

                            <span class="px-2 py-0.5 rounded text-[11px] bg-amber-100 text-amber-900 border border-amber-200 font-bold uppercase tracking-wider">
                                Contoh Produk
                            </span>

                            <span class="text-label-sm text-outline">
                                SKU: GRN-CRM-60
                            </span>

                        </div>

                        <div class="relative w-full h-44 rounded-lg bg-surface-container overflow-hidden mb-3.5 flex items-center justify-center border border-outline-variant">

                            <img
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuAYJMom7X7ZSzKYbg_swLbJ4eVuMWbmLNG_z4W2TH5krXrcOhUMR4_OB-A-LW7dekz2N5YeOZfVfm5PSFb4Esmwtp_eg144CnzpG-iwHnDonNgRJf8GcDgKPyuzrjwLdGPppSxFpnnWzRvyZfJCfR-oGjbIKnEDLBEVjDpKfuHpJOsnASAgOU5GQ-xLmlNtJaklnmyLo5cTbw6P-BIY7npoKCXBMauE9IjS_9crztOjeJAubvl8qD6H"
                                alt="Contoh gambar granit"
                            />

                        </div>

                        <span class="text-[11px] uppercase tracking-wider text-secondary font-bold">
                            Keramik &amp; Granit
                        </span>

                        <h3 class="font-title-md text-primary font-bold mt-1 line-clamp-2 leading-snug">
                            Granit Tile 60x60 cm Glazed Polished Cream Marble
                        </h3>

                        <div class="mt-2.5 py-1.5 px-2 bg-surface rounded text-body-sm text-on-surface-variant flex items-center justify-between border border-outline-variant">
                            <span>
                                Ukuran:
                                <strong>60 x 60</strong>
                            </span>

                            <span>
                                Isi:
                                <strong>4 keping</strong>
                            </span>
                        </div>

                        <div class="flex items-center gap-1.5 mt-2.5 text-body-sm text-emerald-800 font-medium">
                            <span class="w-2 h-2 rounded-full bg-emerald-600"></span>
                            <span>Ready Stock — contoh</span>
                        </div>

                    </div>

                    <div class="pt-3.5 mt-3.5 border-t border-outline-variant">

                        <div class="mb-2.5">

                            <span class="text-[11px] text-outline block">
                                Harga Contoh:
                            </span>

                            <span class="text-title-lg font-bold text-primary">
                                Rp 185.000
                            </span>

                            <span class="text-body-sm text-on-surface-variant">
                                / Dus
                            </span>

                        </div>

                        <div class="grid grid-cols-5 gap-2">

                            <button
                                type="button"
                                class="col-span-4 bg-primary hover:bg-primary-container text-on-primary py-2 px-3 rounded text-label-md flex items-center justify-center gap-1.5"
                                data-action="add-rfq"
                                data-product-index="5"
                            >
                                <span class="material-symbols-outlined text-[18px]">
                                    add_shopping_cart
                                </span>

                                <span>
                                    + Tambah ke RFQ
                                </span>
                            </button>

                            <button
                                type="button"
                                class="col-span-1 border border-outline-variant hover:bg-surface-container text-on-surface py-2 rounded flex items-center justify-center"
                                data-action="detail"
                                data-product-index="5"
                                title="Detail Spesifikasi"
                            >
                                <span class="material-symbols-outlined text-[18px]">
                                    info
                                </span>
                            </button>

                        </div>

                    </div>

                </article>


                <!-- ================================================= -->
                <!-- PRODUCT 6 -->
                <!-- ================================================= -->

                <article
                    class="product-card bg-surface-container-lowest border border-outline-variant hover:border-outline rounded-xl p-4 shadow-sm hover:shadow-md transition-all duration-200 flex flex-col justify-between group"
                    data-category="semen"
                    data-name="Mortar Utama MU-380 Perekat Bata Ringan 40kg"
                    data-price="105000"
                    data-product-index="6"
                    data-sku="MRT-MU-380"
                    data-stock="300"
                    data-ready="true"
                    data-sni="true"
                    data-truck="true"
                >

                    <div>

                        <div class="flex items-center justify-between mb-3">

                            <span class="px-2 py-0.5 rounded text-[11px] bg-emerald-100 text-emerald-900 border border-emerald-200 font-bold uppercase tracking-wider">
                                Contoh Produk
                            </span>

                            <span class="text-label-sm text-outline">
                                SKU: MRT-MU-380
                            </span>

                        </div>

                        <div class="relative w-full h-44 rounded-lg bg-surface-container overflow-hidden mb-3.5 flex items-center justify-center border border-outline-variant">

                            <img
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuAHByBCX89QegXHZ2293563V_jcBCgHsw6HDmwMaB-jGAcmzo5DqRrEGBojSal5fGbFfdel62mv0jV-uxfLPlVG5xpMbxZ7PhPymoz2Qkcua9StfsIGJCQAU1MEBcFOnAVhX79XZb_qkUNx6N_tDHWJOb8dY-isV3UIivQj8QPFHBG9_OL02yoaBVv3lZS38HxsNVj1RMnmC8hA2XOIyVPwm4bFQJ7K8YMylUoKc3DaMSHprzl2QLaa"
                                alt="Contoh gambar mortar"
                            />

                        </div>

                        <span class="text-[11px] uppercase tracking-wider text-secondary font-bold">
                            Semen &amp; Mortar
                        </span>

                        <h3 class="font-title-md text-primary font-bold mt-1 line-clamp-2 leading-snug">
                            Mortar Utama MU-380 Perekat Bata Ringan 40kg
                        </h3>

                        <div class="mt-2.5 py-1.5 px-2 bg-surface rounded text-body-sm text-on-surface-variant flex items-center justify-between border border-outline-variant">
                            <span>
                                Berat:
                                <strong>40 kg</strong>
                            </span>

                            <span>
                                Fungsi:
                                <strong>Perekat</strong>
                            </span>
                        </div>

                        <div class="flex items-center gap-1.5 mt-2.5 text-body-sm text-emerald-800 font-medium">
                            <span class="w-2 h-2 rounded-full bg-emerald-600"></span>
                            <span>Ready Stock — contoh</span>
                        </div>

                    </div>

                    <div class="pt-3.5 mt-3.5 border-t border-outline-variant">

                        <div class="mb-2.5">

                            <span class="text-[11px] text-outline block">
                                Harga Contoh:
                            </span>

                            <span class="text-title-lg font-bold text-primary">
                                Rp 105.000
                            </span>

                            <span class="text-body-sm text-on-surface-variant">
                                / Sak
                            </span>

                        </div>

                        <div class="grid grid-cols-5 gap-2">

                            <button
                                type="button"
                                class="col-span-4 bg-primary hover:bg-primary-container text-on-primary py-2 px-3 rounded text-label-md flex items-center justify-center gap-1.5"
                                data-action="add-rfq"
                                data-product-index="6"
                            >
                                <span class="material-symbols-outlined text-[18px]">
                                    add_shopping_cart
                                </span>

                                <span>
                                    + Tambah ke RFQ
                                </span>
                            </button>

                            <button
                                type="button"
                                class="col-span-1 border border-outline-variant hover:bg-surface-container text-on-surface py-2 rounded flex items-center justify-center"
                                data-action="detail"
                                data-product-index="6"
                                title="Detail Spesifikasi"
                            >
                                <span class="material-symbols-outlined text-[18px]">
                                    info
                                </span>
                            </button>

                        </div>

                    </div>

                </article>


                <!-- ================================================= -->
                <!-- PRODUCT 7 -->
                <!-- ================================================= -->

                <article
                    class="product-card bg-surface-container-lowest border border-outline-variant hover:border-outline rounded-xl p-4 shadow-sm hover:shadow-md transition-all duration-200 flex flex-col justify-between group"
                    data-category="besi"
                    data-name="Baja Ringan Canal C75 Tebal 0.75mm Panjang 6 Meter"
                    data-price="79000"
                    data-product-index="7"
                    data-sku="BJR-C75-75"
                    data-stock="400"
                    data-ready="true"
                    data-sni="true"
                    data-truck="true"
                >

                    <div>

                        <div class="flex items-center justify-between mb-3">

                            <span class="px-2 py-0.5 rounded text-[11px] bg-slate-200 text-slate-800 border border-slate-300 font-bold uppercase tracking-wider">
                                Contoh Produk
                            </span>

                            <span class="text-label-sm text-outline">
                                SKU: BJR-C75-75
                            </span>

                        </div>

                        <div class="relative w-full h-44 rounded-lg bg-surface-container overflow-hidden mb-3.5 flex items-center justify-center border border-outline-variant">

                            <img
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuB16XSVkQ5yF52lerp6wWb9AYkiEV8dZMJb3k6RXf0s1lV4LApcF-PDeh_FzcKYPw2Z8UJ_nxK67KwyQbe3ojoOoCaIpFij8EYkh1BLFQqSjE0j3kWtlR-kn9iAtV9hB5ap81-DvY4zM8W7N-BnZEhUrX-ke39p6cfdouomqW9d73cMAEBq3bgKG4iXXHybqXIAzZgeyoaHiDjFMYJUS-irzI6wW-UGu6QvfLZtHwcsjKb3sc79nwjT"
                                alt="Contoh gambar baja ringan"
                            />

                        </div>

                        <span class="text-[11px] uppercase tracking-wider text-secondary font-bold">
                            Besi &amp; Baja
                        </span>

                        <h3 class="font-title-md text-primary font-bold mt-1 line-clamp-2 leading-snug">
                            Baja Ringan Canal C75 Tebal 0.75mm Panjang 6 Meter
                        </h3>

                        <div class="mt-2.5 py-1.5 px-2 bg-surface rounded text-body-sm text-on-surface-variant flex items-center justify-between border border-outline-variant">
                            <span>
                                Profil:
                                <strong>C75</strong>
                            </span>

                            <span>
                                Panjang:
                                <strong>6 Meter</strong>
                            </span>
                        </div>

                        <div class="flex items-center gap-1.5 mt-2.5 text-body-sm text-emerald-800 font-medium">
                            <span class="w-2 h-2 rounded-full bg-emerald-600"></span>
                            <span>Ready Stock — contoh</span>
                        </div>

                    </div>

                    <div class="pt-3.5 mt-3.5 border-t border-outline-variant">

                        <div class="mb-2.5">

                            <span class="text-[11px] text-outline block">
                                Harga Contoh:
                            </span>

                            <span class="text-title-lg font-bold text-primary">
                                Rp 79.000
                            </span>

                            <span class="text-body-sm text-on-surface-variant">
                                / Btg
                            </span>

                        </div>

                        <div class="grid grid-cols-5 gap-2">

                            <button
                                type="button"
                                class="col-span-4 bg-primary hover:bg-primary-container text-on-primary py-2 px-3 rounded text-label-md flex items-center justify-center gap-1.5"
                                data-action="add-rfq"
                                data-product-index="7"
                            >
                                <span class="material-symbols-outlined text-[18px]">
                                    add_shopping_cart
                                </span>

                                <span>
                                    + Tambah ke RFQ
                                </span>
                            </button>

                            <button
                                type="button"
                                class="col-span-1 border border-outline-variant hover:bg-surface-container text-on-surface py-2 rounded flex items-center justify-center"
                                data-action="detail"
                                data-product-index="7"
                                title="Detail Spesifikasi"
                            >
                                <span class="material-symbols-outlined text-[18px]">
                                    info
                                </span>
                            </button>

                        </div>

                    </div>

                </article>


                <!-- ================================================= -->
                <!-- PRODUCT 8 -->
                <!-- ================================================= -->

                <article
                    class="product-card bg-surface-container-lowest border border-outline-variant hover:border-outline rounded-xl p-4 shadow-sm hover:shadow-md transition-all duration-200 flex flex-col justify-between group"
                    data-category="cat"
                    data-name="Aquaproof Cat Pelapis Anti Bocor 20kg Abu-abu"
                    data-price="1120000"
                    data-product-index="8"
                    data-sku="AQP-GRY-20K"
                    data-stock="24"
                    data-ready="true"
                    data-sni="false"
                    data-truck="true"
                >

                    <div>

                        <div class="flex items-center justify-between mb-3">

                            <span class="px-2 py-0.5 rounded text-[11px] bg-blue-100 text-blue-900 border border-blue-200 font-bold uppercase tracking-wider">
                                Contoh Produk
                            </span>

                            <span class="text-label-sm text-outline">
                                SKU: AQP-GRY-20K
                            </span>

                        </div>

                        <div class="relative w-full h-44 rounded-lg bg-surface-container overflow-hidden mb-3.5 flex items-center justify-center border border-outline-variant">

                            <img
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuBLeKlDUk-nMiDiXn8tw4a6fOabcnv6iHlfL2b6NZhUggBJ9Ei91aLfpRq-_mjDaAyVFWuboY5Tl1NWktDafnCNVZammmC-v4AONL5700j6nxuM1Sh_dmun4yfcD_f6cwvTT7nTDOrNwBaAh5_KojNXKBGhHz3Jc0xiJtiOIvOeChLjn2WWgoSOJ38QQlBthN9WXYP7nH_ryVGzhkOKQd8RyeklZSz61ZjRsA46WAhsj2bo8zxZNEMQ"
                                alt="Contoh gambar waterproofing"
                            />

                        </div>

                        <span class="text-[11px] uppercase tracking-wider text-secondary font-bold">
                            Cat &amp; Pelapis
                        </span>

                        <h3 class="font-title-md text-primary font-bold mt-1 line-clamp-2 leading-snug">
                            Aquaproof Cat Pelapis Anti Bocor 20kg Abu-abu
                        </h3>

                        <div class="mt-2.5 py-1.5 px-2 bg-surface rounded text-body-sm text-on-surface-variant flex items-center justify-between border border-outline-variant">
                            <span>
                                Kapasitas:
                                <strong>20 Kg</strong>
                            </span>

                            <span>
                                Warna:
                                <strong>Abu</strong>
                            </span>
                        </div>

                        <div class="flex items-center gap-1.5 mt-2.5 text-body-sm text-emerald-800 font-medium">
                            <span class="w-2 h-2 rounded-full bg-emerald-600"></span>
                            <span>Ready Stock — contoh</span>
                        </div>

                    </div>

                    <div class="pt-3.5 mt-3.5 border-t border-outline-variant">

                        <div class="mb-2.5">

                            <span class="text-[11px] text-outline block">
                                Harga Contoh:
                            </span>

                            <span class="text-title-lg font-bold text-primary">
                                Rp 1.120.000
                            </span>

                            <span class="text-body-sm text-on-surface-variant">
                                / Pail
                            </span>

                        </div>

                        <div class="grid grid-cols-5 gap-2">

                            <button
                                type="button"
                                class="col-span-4 bg-primary hover:bg-primary-container text-on-primary py-2 px-3 rounded text-label-md flex items-center justify-center gap-1.5"
                                data-action="add-rfq"
                                data-product-index="8"
                            >
                                <span class="material-symbols-outlined text-[18px]">
                                    add_shopping_cart
                                </span>

                                <span>
                                    + Tambah ke RFQ
                                </span>
                            </button>

                            <button
                                type="button"
                                class="col-span-1 border border-outline-variant hover:bg-surface-container text-on-surface py-2 rounded flex items-center justify-center"
                                data-action="detail"
                                data-product-index="8"
                                title="Detail Spesifikasi"
                            >
                                <span class="material-symbols-outlined text-[18px]">
                                    info
                                </span>
                            </button>

                        </div>

                    </div>

                </article>


                <!-- ================================================= -->
                <!-- PRODUCT 9 -->
                <!-- ================================================= -->

                <article
                    class="product-card bg-surface-container-lowest border border-outline-variant hover:border-outline rounded-xl p-4 shadow-sm hover:shadow-md transition-all duration-200 flex flex-col justify-between group"
                    data-category="besi"
                    data-name="Wiremesh M8 Ulir Lembar 2.1m x 5.4m SNI"
                    data-price="545000"
                    data-product-index="9"
                    data-sku="WRM-M8-LMB"
                    data-stock="65"
                    data-ready="true"
                    data-sni="true"
                    data-truck="true"
                >

                    <div>

                        <div class="flex items-center justify-between mb-3">

                            <span class="px-2 py-0.5 rounded text-[11px] bg-zinc-200 text-zinc-900 border border-zinc-300 font-bold uppercase tracking-wider">
                                Contoh Produk
                            </span>

                            <span class="text-label-sm text-outline">
                                SKU: WRM-M8-LMB
                            </span>

                        </div>

                        <div class="relative w-full h-44 rounded-lg bg-surface-container overflow-hidden mb-3.5 flex items-center justify-center border border-outline-variant">

                            <img
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuBHYwQ0zSWCQMl1O3ANwkfd_DvdfOtQ4kPl6kgjYKnEFywj5UILx7AIQ6bvMSiIezdYKZf9I-SdI-BNqRCHC_vj4jyOwSAezvYhU5U4zsU77kXrC7z_5H3oyeeFI6p6NE9AApXM_M5aYBUy2znXi1I_9nt0yaC3sZS4bIZsQk_5P30TeDoDuzkb45QdIfRULN5agY3XlgOy8_GeMtRWgRjyy3a8bsccvmKbbKxyACHe610au0TQvgt8"
                                alt="Contoh gambar wiremesh"
                            />

                        </div>

                        <span class="text-[11px] uppercase tracking-wider text-secondary font-bold">
                            Besi &amp; Pengecoran
                        </span>

                        <h3 class="font-title-md text-primary font-bold mt-1 line-clamp-2 leading-snug">
                            Wiremesh M8 Ulir Lembar 2.1m x 5.4m SNI
                        </h3>

                        <div class="mt-2.5 py-1.5 px-2 bg-surface rounded text-body-sm text-on-surface-variant flex items-center justify-between border border-outline-variant">
                            <span>
                                Dimensi:
                                <strong>2.1 x 5.4m</strong>
                            </span>

                            <span>
                                Spasi:
                                <strong>15x15</strong>
                            </span>
                        </div>

                        <div class="flex items-center gap-1.5 mt-2.5 text-body-sm text-emerald-800 font-medium">
                            <span class="w-2 h-2 rounded-full bg-emerald-600"></span>
                            <span>Ready Stock — contoh</span>
                        </div>

                    </div>

                    <div class="pt-3.5 mt-3.5 border-t border-outline-variant">

                        <div class="mb-2.5">

                            <span class="text-[11px] text-outline block">
                                Harga Contoh:
                            </span>

                            <span class="text-title-lg font-bold text-primary">
                                Rp 545.000
                            </span>

                            <span class="text-body-sm text-on-surface-variant">
                                / Lbr
                            </span>

                        </div>

                        <div class="grid grid-cols-5 gap-2">

                            <button
                                type="button"
                                class="col-span-4 bg-primary hover:bg-primary-container text-on-primary py-2 px-3 rounded text-label-md flex items-center justify-center gap-1.5"
                                data-action="add-rfq"
                                data-product-index="9"
                            >
                                <span class="material-symbols-outlined text-[18px]">
                                    add_shopping_cart
                                </span>

                                <span>
                                    + Tambah ke RFQ
                                </span>
                            </button>

                            <button
                                type="button"
                                class="col-span-1 border border-outline-variant hover:bg-surface-container text-on-surface py-2 rounded flex items-center justify-center"
                                data-action="detail"
                                data-product-index="9"
                                title="Detail Spesifikasi"
                            >
                                <span class="material-symbols-outlined text-[18px]">
                                    info
                                </span>
                            </button>

                        </div>

                    </div>

                </article>


                <!-- ================================================= -->
                <!-- PRODUCT 10 -->
                <!-- ================================================= -->

                <article
                    class="product-card bg-surface-container-lowest border border-outline-variant hover:border-outline rounded-xl p-4 shadow-sm hover:shadow-md transition-all duration-200 flex flex-col justify-between group"
                    data-category="pipa"
                    data-name='Pipa PVC Rucika AW 1/2" Panjang 4 Meter'
                    data-price="32500"
                    data-product-index="10"
                    data-sku="PIP-RCK-AW12"
                    data-stock="400"
                    data-ready="true"
                    data-sni="true"
                    data-truck="true"
                >

                    <div>

                        <div class="flex items-center justify-between mb-3">

                            <span class="px-2 py-0.5 rounded text-[11px] bg-blue-100 text-blue-900 border border-blue-200 font-bold uppercase tracking-wider">
                                Contoh Produk
                            </span>

                            <span class="text-label-sm text-outline">
                                SKU: PIP-RCK-AW12
                            </span>

                        </div>

                        <div class="relative w-full h-44 rounded-lg bg-surface-container overflow-hidden mb-3.5 flex items-center justify-center border border-outline-variant">

                            <img
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuAGCGYkyYElQXnFUhgGMM2qkt2r7iIRp2lt2hzNLXQrqOsICvcVglUNMv1SFEQL_Ki0-gC_aOwktBuz_lGUPMOIwwOtnZX2Qu3vpa7wXJSkBi6OAFQE0aAbXCIDdRW2DfyE2XZtqXCZ-NuR1P68BPyvUjBeFh1A06xVTz7GnIs93yYRzYZdQ8gDlhokvW2CfmNHgZNlzJnWQPSH8n1gnMwWzduijNSsPvWBaZVHYGYke2hX8K3hmBDF"
                                alt="Contoh gambar pipa AW"
                            />

                        </div>

                        <span class="text-[11px] uppercase tracking-wider text-secondary font-bold">
                            Pipa &amp; Sanitari
                        </span>

                        <h3 class="font-title-md text-primary font-bold mt-1 line-clamp-2 leading-snug">
                            Pipa PVC Rucika AW 1/2" Panjang 4 Meter
                        </h3>

                        <div class="mt-2.5 py-1.5 px-2 bg-surface rounded text-body-sm text-on-surface-variant flex items-center justify-between border border-outline-variant">
                            <span>
                                Kelas:
                                <strong>AW</strong>
                            </span>

                            <span>
                                Panjang:
                                <strong>4 Meter</strong>
                            </span>
                        </div>

                        <div class="flex items-center gap-1.5 mt-2.5 text-body-sm text-emerald-800 font-medium">
                            <span class="w-2 h-2 rounded-full bg-emerald-600"></span>
                            <span>Ready Stock — contoh</span>
                        </div>

                    </div>

                    <div class="pt-3.5 mt-3.5 border-t border-outline-variant">

                        <div class="mb-2.5">

                            <span class="text-[11px] text-outline block">
                                Harga Contoh:
                            </span>

                            <span class="text-title-lg font-bold text-primary">
                                Rp 32.500
                            </span>

                            <span class="text-body-sm text-on-surface-variant">
                                / Btg
                            </span>

                        </div>

                        <div class="grid grid-cols-5 gap-2">

                            <button
                                type="button"
                                class="col-span-4 bg-primary hover:bg-primary-container text-on-primary py-2 px-3 rounded text-label-md flex items-center justify-center gap-1.5"
                                data-action="add-rfq"
                                data-product-index="10"
                            >
                                <span class="material-symbols-outlined text-[18px]">
                                    add_shopping_cart
                                </span>

                                <span>
                                    + Tambah ke RFQ
                                </span>
                            </button>

                            <button
                                type="button"
                                class="col-span-1 border border-outline-variant hover:bg-surface-container text-on-surface py-2 rounded flex items-center justify-center"
                                data-action="detail"
                                data-product-index="10"
                                title="Detail Spesifikasi"
                            >
                                <span class="material-symbols-outlined text-[18px]">
                                    info
                                </span>
                            </button>

                        </div>

                    </div>

                </article>


                <!-- ================================================= -->
                <!-- PRODUCT 11 -->
                <!-- ================================================= -->

                <article
                    class="product-card bg-surface-container-lowest border border-outline-variant hover:border-outline rounded-xl p-4 shadow-sm hover:shadow-md transition-all duration-200 flex flex-col justify-between group"
                    data-category="keramik"
                    data-name="Keramik Dinding Kamar Mandi 25x40 cm Glossy White"
                    data-price="72000"
                    data-product-index="11"
                    data-sku="KRM-DND-2540"
                    data-stock="110"
                    data-ready="true"
                    data-sni="true"
                    data-truck="true"
                >

                    <div>

                        <div class="flex items-center justify-between mb-3">

                            <span class="px-2 py-0.5 rounded text-[11px] bg-teal-100 text-teal-900 border border-teal-200 font-bold uppercase tracking-wider">
                                Contoh Produk
                            </span>

                            <span class="text-label-sm text-outline">
                                SKU: KRM-DND-2540
                            </span>

                        </div>

                        <div class="relative w-full h-44 rounded-lg bg-surface-container overflow-hidden mb-3.5 flex items-center justify-center border border-outline-variant">

                            <img
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuBQ3394S4FUkFvS65pg7NMTemOTwet0G02fN4FvpESCcfUvfE0dy6JgT-Hn3jj4c0H_eeSn5Hp89-mOyVXxbHWeZnDEKD5BiUd4HwdRGqtbEV8esCNXPrUHmXKOODtBw0h4DfGeJxE2Lr4dLfieRzLxMSHPv4uBhJlEtbccsNiS_i1Z5_96KLJnjnrABTZtRtPydBeGrw758cRHO_LQn-BoCqMFk1kfe4f58Qp3L1F5RkKS03T65BTo"
                                alt="Contoh gambar keramik"
                            />

                        </div>

                        <span class="text-[11px] uppercase tracking-wider text-secondary font-bold">
                            Keramik
                        </span>

                        <h3 class="font-title-md text-primary font-bold mt-1 line-clamp-2 leading-snug">
                            Keramik Dinding Kamar Mandi 25x40 cm Glossy White
                        </h3>

                        <div class="mt-2.5 py-1.5 px-2 bg-surface rounded text-body-sm text-on-surface-variant flex items-center justify-between border border-outline-variant">
                            <span>
                                Ukuran:
                                <strong>25 x 40</strong>
                            </span>

                            <span>
                                Isi:
                                <strong>10 keping</strong>
                            </span>
                        </div>

                        <div class="flex items-center gap-1.5 mt-2.5 text-body-sm text-emerald-800 font-medium">
                            <span class="w-2 h-2 rounded-full bg-emerald-600"></span>
                            <span>Ready Stock — contoh</span>
                        </div>

                    </div>

                    <div class="pt-3.5 mt-3.5 border-t border-outline-variant">

                        <div class="mb-2.5">

                            <span class="text-[11px] text-outline block">
                                Harga Contoh:
                            </span>

                            <span class="text-title-lg font-bold text-primary">
                                Rp 72.000
                            </span>

                            <span class="text-body-sm text-on-surface-variant">
                                / Dus
                            </span>

                        </div>

                        <div class="grid grid-cols-5 gap-2">

                            <button
                                type="button"
                                class="col-span-4 bg-primary hover:bg-primary-container text-on-primary py-2 px-3 rounded text-label-md flex items-center justify-center gap-1.5"
                                data-action="add-rfq"
                                data-product-index="11"
                            >
                                <span class="material-symbols-outlined text-[18px]">
                                    add_shopping_cart
                                </span>

                                <span>
                                    + Tambah ke RFQ
                                </span>
                            </button>

                            <button
                                type="button"
                                class="col-span-1 border border-outline-variant hover:bg-surface-container text-on-surface py-2 rounded flex items-center justify-center"
                                data-action="detail"
                                data-product-index="11"
                                title="Detail Spesifikasi"
                            >
                                <span class="material-symbols-outlined text-[18px]">
                                    info
                                </span>
                            </button>

                        </div>

                    </div>

                </article>


                <!-- ================================================= -->
                <!-- PRODUCT 12 -->
                <!-- ================================================= -->

                <article
                    class="product-card bg-surface-container-lowest border border-outline-variant hover:border-outline rounded-xl p-4 shadow-sm hover:shadow-md transition-all duration-200 flex flex-col justify-between group"
                    data-category="semen"
                    data-name="Pasir Bangka Super Murni Pick Up Engkel 1 Rit"
                    data-price="850000"
                    data-product-index="12"
                    data-sku="PSR-BNG-1RIT"
                    data-stock="1"
                    data-ready="true"
                    data-sni="false"
                    data-truck="true"
                >

                    <div>

                        <div class="flex items-center justify-between mb-3">

                            <span class="px-2 py-0.5 rounded text-[11px] bg-yellow-100 text-yellow-900 border border-yellow-200 font-bold uppercase tracking-wider">
                                Contoh Produk
                            </span>

                            <span class="text-label-sm text-outline">
                                SKU: PSR-BNG-1RIT
                            </span>

                        </div>

                        <div class="relative w-full h-44 rounded-lg bg-surface-container overflow-hidden mb-3.5 flex items-center justify-center border border-outline-variant">

                            <img
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuCPBWr72Pd0w7s3GvEDqNT3ZwFvaDJVktlQKjEAgHKqCm3rs_zgzTH-0pmsFEbdQxKZBgClIx1ca_0QqMHe6BUNtKfdeOQvCyUEksmEKbZ9pZAvJW2ZEhsKp8Whww6xLf5eZXFBt7THIPXdopzlM4tNPJMpk0Qm-bBVBJW7Noux6xbo4ny8eTJtv4HkBYGkQa3MpRI4A9kQn3ba9guMsAvRY_DN6c4-I95PSCIVRvn4FKbVdZxZyDT"
                                alt="Contoh gambar pasir"
                            />

                        </div>

                        <span class="text-[11px] uppercase tracking-wider text-secondary font-bold">
                            Pasir &amp; Agregat
                        </span>

                        <h3 class="font-title-md text-primary font-bold mt-1 line-clamp-2 leading-snug">
                            Pasir Bangka Super Murni (Pick Up Engkel 1 Rit)
                        </h3>

                        <div class="mt-2.5 py-1.5 px-2 bg-surface rounded text-body-sm text-on-surface-variant flex items-center justify-between border border-outline-variant">
                            <span>
                                Volume:
                                <strong>1 Rit</strong>
                            </span>

                            <span>
                                Armada:
                                <strong>Pick-Up</strong>
                            </span>
                        </div>

                        <div class="flex items-center gap-1.5 mt-2.5 text-body-sm text-emerald-800 font-medium">
                            <span class="w-2 h-2 rounded-full bg-emerald-600"></span>
                            <span>Siap Kirim — contoh</span>
                        </div>

                    </div>

                    <div class="pt-3.5 mt-3.5 border-t border-outline-variant">

                        <div class="mb-2.5">

                            <span class="text-[11px] text-outline block">
                                Harga Contoh:
                            </span>

                            <span class="text-title-lg font-bold text-primary">
                                Rp 850.000
                            </span>

                            <span class="text-body-sm text-on-surface-variant">
                                / Rit
                            </span>

                        </div>

                        <div class="grid grid-cols-5 gap-2">

                            <button
                                type="button"
                                class="col-span-4 bg-primary hover:bg-primary-container text-on-primary py-2 px-3 rounded text-label-md flex items-center justify-center gap-1.5"
                                data-action="add-rfq"
                                data-product-index="12"
                            >
                                <span class="material-symbols-outlined text-[18px]">
                                    add_shopping_cart
                                </span>

                                <span>
                                    + Tambah ke RFQ
                                </span>
                            </button>

                            <button
                                type="button"
                                class="col-span-1 border border-outline-variant hover:bg-surface-container text-on-surface py-2 rounded flex items-center justify-center"
                                data-action="detail"
                                data-product-index="12"
                                title="Detail Spesifikasi"
                            >
                                <span class="material-symbols-outlined text-[18px]">
                                    info
                                </span>
                            </button>

                        </div>

                    </div>

                </article>

            </div>


            <!-- No Result -->
            <div
                id="no-results"
                class="hidden bg-surface-container-lowest border border-outline-variant rounded-xl p-10 text-center"
            >

                <span class="material-symbols-outlined text-5xl text-outline">
                    search_off
                </span>

                <h3 class="text-xl font-bold text-primary mt-3">
                    Produk tidak ditemukan
                </h3>

                <p class="text-sm text-on-surface-variant mt-1">
                    Coba ubah kata pencarian atau filter.
                </p>

            </div>


            <!-- Pagination placeholder -->
            <div class="bg-surface-container-lowest border border-outline-variant rounded-xl p-4 shadow-sm flex flex-col sm:flex-row items-center justify-between gap-4">

                <div class="flex items-center gap-2 text-body-sm text-on-surface-variant">

                    <span>
                        Menampilkan
                    </span>

                    <strong
                        id="pagination-count"
                        class="text-primary"
                    >
                        12
                    </strong>

                    <span>
                        produk
                    </span>

                </div>

                <div>

                    <span class="text-xs text-outline">
                        Semua produk contoh ditampilkan pada halaman ini.
                    </span>

                </div>

            </div>

        </section>

    </div>


    <!-- ========================================================= -->
    <!-- CARA PESAN -->
    <!-- ========================================================= -->

    <section
        class="mt-12 bg-surface-container-lowest border border-outline-variant rounded-xl p-6 md:p-8 shadow-sm"
        id="cara-pesan"
    >

        <span class="text-label-sm text-secondary uppercase tracking-wider">
            Alur Pengadaan
        </span>

        <h2 class="text-headline-lg text-primary mt-1">
            Cara Pesan Material
        </h2>

        <p class="text-body-md text-on-surface-variant mt-2">
            Pilih produk, masukkan ke RFQ, lalu kirim kebutuhan Anda ke toko
            untuk konfirmasi harga dan pengiriman.
        </p>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mt-6">

            <div class="rounded-lg bg-surface-container-low p-4 border border-outline-variant">
                <b class="text-primary">
                    01. Pilih
                </b>

                <p class="text-body-sm text-on-surface-variant mt-1">
                    Pilih produk dari katalog.
                </p>
            </div>

            <div class="rounded-lg bg-surface-container-low p-4 border border-outline-variant">
                <b class="text-primary">
                    02. RFQ
                </b>

                <p class="text-body-sm text-on-surface-variant mt-1">
                    Masukkan kebutuhan ke keranjang RFQ.
                </p>
            </div>

            <div class="rounded-lg bg-surface-container-low p-4 border border-outline-variant">
                <b class="text-primary">
                    03. Konfirmasi
                </b>

                <p class="text-body-sm text-on-surface-variant mt-1">
                    Hubungi toko untuk konfirmasi harga dan ongkir.
                </p>
            </div>

            <div class="rounded-lg bg-surface-container-low p-4 border border-outline-variant">
                <b class="text-primary">
                    04. Proses
                </b>

                <p class="text-body-sm text-on-surface-variant mt-1">
                    Pesanan diproses sesuai hasil konfirmasi.
                </p>
            </div>

        </div>

    </section>


    <!-- ========================================================= -->
    <!-- RFQ CTA -->
    <!-- ========================================================= -->

    <section
        class="mt-6 bg-primary rounded-xl p-8 md:p-10 text-on-primary border border-primary-container shadow-md relative overflow-hidden"
        id="minta-penawaran"
    >

        <div class="absolute -right-12 -bottom-12 w-64 h-64 bg-secondary/10 rounded-full blur-3xl pointer-events-none"></div>

        <div class="relative z-10 grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">

            <div class="lg:col-span-8 space-y-3">

                <div class="inline-flex items-center gap-2 px-3 py-1 rounded bg-tertiary-container border border-tertiary text-secondary-fixed text-label-sm font-semibold">

                    <span class="material-symbols-outlined text-[16px]">
                        corporate_fare
                    </span>

                    <span>
                        RFQ PROYEK
                    </span>

                </div>

                <h2 class="text-headline-lg text-surface-bright tracking-tight">
                    Butuh Material Dalam Jumlah Besar?
                </h2>

                <p class="text-body-lg text-outline-variant max-w-2xl leading-relaxed">
                    Gunakan keranjang RFQ untuk menyusun kebutuhan material
                    sebelum melakukan konfirmasi dengan toko.
                </p>

                <div class="pt-2 flex flex-wrap gap-4 text-body-sm text-surface-container-highest">

                    <div class="flex items-center gap-1.5">

                        <span class="material-symbols-outlined text-secondary text-[18px]">
                            check_circle
                        </span>

                        <span>
                            Pilih Banyak Produk
                        </span>

                    </div>

                    <div class="flex items-center gap-1.5">

                        <span class="material-symbols-outlined text-secondary text-[18px]">
                            check_circle
                        </span>

                        <span>
                            Cek Estimasi
                        </span>

                    </div>

                    <div class="flex items-center gap-1.5">

                        <span class="material-symbols-outlined text-secondary text-[18px]">
                            check_circle
                        </span>

                        <span>
                            Hubungi Toko
                        </span>

                    </div>

                </div>

            </div>


            <div class="lg:col-span-4 flex flex-col gap-3">

                <button
                    type="button"
                    data-action="open-rab"
                    class="w-full inline-flex items-center justify-center gap-2.5 bg-secondary hover:bg-secondary-container text-on-secondary font-label-lg py-3.5 px-6 rounded shadow transition-all"
                >

                    <span class="material-symbols-outlined text-[20px]">
                        upload_file
                    </span>

                    <span>
                        Upload RAB Proyek
                    </span>

                </button>

                <a
                    class="w-full inline-flex items-center justify-center gap-2.5 bg-surface-container-lowest hover:bg-surface-container text-primary font-label-lg py-3 px-6 rounded border border-outline-variant transition-all text-center"
                    href="https://wa.me/628111075525?text=Halo%20TB%20Sinar%20Jaya%2C%20saya%20ingin%20meminta%20informasi%20produk."
                    rel="noopener noreferrer"
                    target="_blank"
                >

                    <span class="material-symbols-outlined text-[20px] text-emerald-600">
                        chat
                    </span>

                    <span>
                        WhatsApp Toko
                    </span>

                </a>

            </div>

        </div>

    </section>


    <!-- ========================================================= -->
    <!-- CONTACT -->
    <!-- ========================================================= -->

    <section
        class="mt-6 bg-surface-container-lowest border border-outline-variant rounded-xl p-6 md:p-8 shadow-sm"
        id="kontak"
    >

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-center">

            <div>

                <span class="text-label-sm text-secondary uppercase tracking-wider">
                    Kontak
                </span>

                <h2 class="text-headline-md text-primary mt-1">
                    Hubungi TB Sinar Jaya
                </h2>

                <p class="text-body-md text-on-surface-variant mt-2">
                    Untuk cek produk, permintaan penawaran, atau kebutuhan proyek,
                    hubungi toko secara langsung.
                </p>

                <div class="mt-4 space-y-3">

                    <div class="flex items-start gap-3">

                        <span class="material-symbols-outlined text-secondary">
                            location_on
                        </span>

                        <p class="text-body-sm text-on-surface-variant">
                            Jl. Jatayu No. 1, Kramat Pela,
                            Kebayoran Baru, Jakarta Selatan
                        </p>

                    </div>

                    <div class="flex items-center gap-3">

                        <span class="material-symbols-outlined text-secondary">
                            call
                        </span>

                        <a
                            href="tel:+628111075525"
                            class="text-body-sm text-on-surface hover:text-secondary transition"
                        >
                            +62 811-1075-525
                        </a>

                    </div>

                </div>

            </div>


            <div class="flex flex-wrap gap-3 md:justify-end">

                <a
                    class="inline-flex items-center gap-2 bg-secondary text-on-secondary px-5 py-3 rounded-lg font-label-lg"
                    href="https://wa.me/628111075525?text=Halo%20TB%20Sinar%20Jaya%2C%20saya%20ingin%20bertanya%20tentang%20produk."
                    rel="noopener noreferrer"
                    target="_blank"
                >

                    <span class="material-symbols-outlined">
                        chat
                    </span>

                    <span>
                        WhatsApp
                    </span>

                </a>

                <a
                    class="inline-flex items-center gap-2 border border-outline-variant px-5 py-3 rounded-lg font-label-lg text-primary"
                    href="tel:+628111075525"
                >

                    <span class="material-symbols-outlined">
                        phone
                    </span>

                    <span>
                        Telepon
                    </span>

                </a>

                <a
                    class="inline-flex items-center gap-2 border border-outline-variant px-5 py-3 rounded-lg font-label-lg text-primary hover:border-secondary transition"
                    href="https://www.google.com/maps/search/?api=1&query=TB+Sinar+Jaya+Jatayu%2C+Jl.+Jatayu+No.+1%2C+Kramat+Pela%2C+Kebayoran+Baru%2C+Jakarta+Selatan"
                    target="_blank"
                    rel="noopener noreferrer"
                >

                    <span class="material-symbols-outlined">
                        location_on
                    </span>

                    <span>
                        Google Maps
                    </span>

                </a>

            </div>

        </div>

    </section>

</main>


<!-- ========================================================= -->
<!-- FOOTER -->
<!-- ========================================================= -->

<footer class="mt-16 w-full bg-primary text-secondary-fixed border-t border-outline-variant">

    <div class="max-w-7xl mx-auto px-4 md:px-8 py-12 md:py-16 grid grid-cols-1 md:grid-cols-4 gap-8">

        <div class="space-y-4">

            <h3 class="text-headline-md font-bold text-surface-bright">
                Sinar Jaya
            </h3>

            <p class="text-body-md text-outline-variant leading-relaxed">
                Website katalog dan permintaan penawaran
                untuk TB Sinar Jaya Jatayu.
            </p>

            <div class="space-y-2 text-body-sm text-outline-variant">

                <div class="flex items-start gap-2">

                    <span class="material-symbols-outlined text-[18px] text-secondary-container shrink-0">
                        location_on
                    </span>

                    <span>
                        Jl. Jatayu No. 1, Kramat Pela,
                        Kebayoran Baru, Jakarta Selatan
                    </span>

                </div>

            </div>

        </div>


        <div class="space-y-3">

            <h4 class="text-title-lg text-surface-bright font-bold">
                Kategori Produk
            </h4>

            <ul class="space-y-2 text-body-md text-outline-variant">

                <li>
                    <a
                        class="hover:text-secondary-fixed-dim transition-colors"
                        href="#katalog"
                    >
                        Semen &amp; Mortar
                    </a>
                </li>

                <li>
                    <a
                        class="hover:text-secondary-fixed-dim transition-colors"
                        href="#katalog"
                    >
                        Besi &amp; Baja
                    </a>
                </li>

                <li>
                    <a
                        class="hover:text-secondary-fixed-dim transition-colors"
                        href="#katalog"
                    >
                        Pipa &amp; Sanitari
                    </a>
                </li>

                <li>
                    <a
                        class="hover:text-secondary-fixed-dim transition-colors"
                        href="#katalog"
                    >
                        Cat &amp; Pelapis
                    </a>
                </li>

                <li>
                    <a
                        class="hover:text-secondary-fixed-dim transition-colors"
                        href="#katalog"
                    >
                        Keramik &amp; Granit
                    </a>
                </li>

            </ul>

        </div>


        <div class="space-y-3">

            <h4 class="text-title-lg text-surface-bright font-bold">
                Layanan
            </h4>

            <ul class="space-y-2 text-body-md text-outline-variant">

                <li>
                    <a
                        class="hover:text-secondary-fixed-dim transition-colors"
                        href="#cara-pesan"
                    >
                        Cara Pesan
                    </a>
                </li>

                <li>
                    <a
                        class="hover:text-secondary-fixed-dim transition-colors"
                        href="#minta-penawaran"
                    >
                        Permintaan RFQ
                    </a>
                </li>

                <li>
                    <a
                        class="hover:text-secondary-fixed-dim transition-colors"
                        href="#kontak"
                    >
                        Kontak Toko
                    </a>
                </li>

            </ul>

        </div>


        <div class="space-y-4">

            <h4 class="text-title-lg text-surface-bright font-bold">
                Kontak Toko
            </h4>

            <p class="text-body-sm text-outline-variant">
                Jl. Jatayu No. 1, Kramat Pela,
                Kebayoran Baru, Jakarta Selatan
            </p>

            <a
                href="tel:+628111075525"
                class="text-surface-bright font-bold hover:text-secondary-fixed transition-colors flex items-center gap-1.5"
            >

                <span class="material-symbols-outlined text-[18px]">
                    phone_in_talk
                </span>

                <span>
                    +62 811-1075-525
                </span>

            </a>

            <a
                href="https://wa.me/628111075525"
                target="_blank"
                rel="noopener noreferrer"
                class="inline-flex items-center gap-2 bg-secondary hover:bg-secondary-container text-white px-4 py-2.5 rounded"
            >

                <span class="material-symbols-outlined">
                    chat
                </span>

                WhatsApp

            </a>

        </div>

    </div>


    <div class="border-t border-tertiary-container py-6 text-center text-label-sm text-outline-variant px-4">

        <div class="max-w-7xl mx-auto flex flex-col sm:flex-row items-center justify-between gap-3">

            <span>
                © {{ date('Y') }} Sinar Jaya. Project website.
            </span>

            <div class="flex gap-4">

                <a
                    class="hover:underline"
                    href="{{ route('home') }}"
                >
                    Beranda
                </a>

                <a
                    class="hover:underline"
                    href="{{ route('rfq') }}"
                >
                    RFQ
                </a>

                <a
                    class="hover:underline"
                    href="#top"
                >
                    Kembali ke atas
                </a>

            </div>

        </div>

    </div>

</footer>


<!-- ========================================================= -->
<!-- POLICY MODAL -->
<!-- ========================================================= -->

<div
    aria-hidden="true"
    class="fixed inset-0 z-[100] hidden items-center justify-center p-4"
    id="policy-modal"
>

    <div
        class="absolute inset-0 bg-primary/60 backdrop-blur-sm"
        data-action="close-policy"
    ></div>

    <div class="relative w-full max-w-2xl bg-surface-container-lowest rounded-xl border border-outline-variant shadow-2xl p-6 md:p-8">

        <button
            type="button"
            aria-label="Tutup"
            class="absolute top-3 right-3 p-2 rounded hover:bg-surface-container"
            data-action="close-policy"
        >
            <span class="material-symbols-outlined">
                close
            </span>
        </button>

        <span class="text-label-sm uppercase tracking-wider text-secondary">
            Informasi
        </span>

        <h2
            class="text-headline-md text-primary mt-1"
            id="policy-title"
        ></h2>

        <div
            class="mt-4 text-body-md text-on-surface-variant space-y-3"
            id="policy-content"
        ></div>

    </div>

</div>


<!-- ========================================================= -->
<!-- RFQ MODAL -->
<!-- ========================================================= -->

<div
    aria-hidden="true"
    class="fixed inset-0 z-[100] hidden"
    id="rfq-modal"
>

    <div
        class="absolute inset-0 bg-primary/60 backdrop-blur-sm"
        data-action="close-rfq"
    ></div>

    <aside class="absolute right-0 top-0 h-full w-full max-w-md bg-surface-container-lowest border-l border-outline-variant shadow-2xl flex flex-col">

        <div class="p-5 border-b border-outline-variant flex items-center justify-between">

            <div>

                <span class="text-label-sm uppercase tracking-wider text-secondary">
                    RFQ
                </span>

                <h2 class="text-headline-md text-primary">
                    Keranjang Permintaan
                </h2>

            </div>

            <button
                type="button"
                aria-label="Tutup"
                class="p-2 rounded hover:bg-surface-container"
                data-action="close-rfq"
            >
                <span class="material-symbols-outlined">
                    close
                </span>
            </button>

        </div>


        <div
            class="flex-1 overflow-y-auto p-5 space-y-3"
            id="rfq-items"
        ></div>


        <div class="p-5 border-t border-outline-variant bg-surface-container-low">

            <div class="flex items-center justify-between text-body-md mb-3">

                <span>
                    Total item
                </span>

                <strong id="rfq-count">
                    0
                </strong>

            </div>

            <div class="flex items-center justify-between text-body-md mb-4">

                <span>
                    Estimasi nilai
                </span>

                <strong
                    class="text-primary"
                    id="rfq-total"
                >
                    Rp 0
                </strong>

            </div>

            <button
                type="button"
                class="w-full bg-secondary hover:bg-secondary-container text-on-secondary py-3 rounded-lg font-label-lg"
                data-action="submit-rfq"
            >
                Kirim RFQ via WhatsApp
            </button>

        </div>

    </aside>

</div>


<!-- ========================================================= -->
<!-- DETAIL MODAL -->
<!-- ========================================================= -->

<div
    aria-hidden="true"
    class="fixed inset-0 z-[100] hidden items-center justify-center p-4"
    id="detail-modal"
>

    <div
        class="absolute inset-0 bg-primary/60 backdrop-blur-sm"
        data-action="close-detail"
    ></div>

    <div class="relative w-full max-w-2xl bg-surface-container-lowest rounded-xl border border-outline-variant shadow-2xl p-6 md:p-8">

        <button
            type="button"
            aria-label="Tutup"
            class="absolute top-3 right-3 p-2 rounded hover:bg-surface-container"
            data-action="close-detail"
        >
            <span class="material-symbols-outlined">
                close
            </span>
        </button>

        <div id="detail-body"></div>

    </div>

</div>


<!-- ========================================================= -->
<!-- RAB MODAL -->
<!-- ========================================================= -->

<div
    aria-hidden="true"
    class="fixed inset-0 z-[100] hidden items-center justify-center p-4"
    id="rab-modal"
>

    <div
        class="absolute inset-0 bg-primary/60 backdrop-blur-sm"
        data-action="close-rab"
    ></div>

    <div class="relative w-full max-w-xl bg-surface-container-lowest rounded-xl border border-outline-variant shadow-2xl p-6 md:p-8">

        <button
            type="button"
            aria-label="Tutup"
            class="absolute top-3 right-3 p-2 rounded hover:bg-surface-container"
            data-action="close-rab"
        >
            <span class="material-symbols-outlined">
                close
            </span>
        </button>

        <span class="text-label-sm uppercase tracking-wider text-secondary">
            B2B / Proyek
        </span>

        <h2 class="text-headline-md text-primary mt-1">
            Upload RAB Proyek
        </h2>

        <p class="text-body-sm text-on-surface-variant mt-2">
            Pilih file RAB untuk diproses bersama permintaan penawaran.
        </p>

        <form
            class="mt-5 space-y-4"
            id="rab-form"
        >

            <input
                accept=".pdf,.xlsx,.xls,.csv,.doc,.docx"
                class="block w-full text-body-sm"
                id="rab-file"
                type="file"
                required
            />

            <input
                class="w-full bg-surface border border-outline-variant rounded-lg px-3 py-2.5 text-body-md"
                id="rab-name"
                placeholder="Nama / Perusahaan"
                required
                type="text"
            />

            <input
                class="w-full bg-surface border border-outline-variant rounded-lg px-3 py-2.5 text-body-md"
                id="rab-wa"
                placeholder="No. WhatsApp"
                required
                type="tel"
            />

            <button
                class="w-full bg-secondary hover:bg-secondary-container text-on-secondary py-3 rounded-lg font-label-lg"
                type="submit"
            >
                Lanjut ke WhatsApp Sales
            </button>

        </form>

    </div>

</div>


<!-- ========================================================= -->
<!-- TOAST -->
<!-- ========================================================= -->

<div
    aria-live="polite"
    class="fixed bottom-5 left-1/2 -translate-x-1/2 z-[120] hidden px-4 py-2.5 rounded-lg bg-primary text-on-primary text-body-sm shadow-xl"
    id="toast"
    role="status"
></div>


<!-- ========================================================= -->
<!-- JAVASCRIPT -->
<!-- ========================================================= -->

<script>
(function () {

    'use strict';

    const WA = '628111075525';
    const STORAGE_KEY = 'sinarJayaRFQ';

    const cards = [
        ...document.querySelectorAll('.product-card')
    ];

    const grid = document.getElementById('product-grid');

    const $ = (selector, root = document) =>
        root.querySelector(selector);

    const $$ = (selector, root = document) =>
        [...root.querySelectorAll(selector)];


    /* =========================================================
       DATA PRODUK
    ========================================================= */

    const data = cards.map(card => ({
        index: Number(card.dataset.productIndex),
        name: card.dataset.name,
        sku: card.dataset.sku,
        price: Number(card.dataset.price || 0),
        category: card.dataset.category,
        stock: Number(card.dataset.stock || 0),
        ready: card.dataset.ready === 'true',
        sni: card.dataset.sni === 'true',
        truck: card.dataset.truck === 'true'
    }));


    /* =========================================================
       RFQ STATE
    ========================================================= */

    let rfq = [];

    try {

        const stored = JSON.parse(
            localStorage.getItem(STORAGE_KEY) || '[]'
        );

        if (Array.isArray(stored)) {
            rfq = stored;
        }

    } catch (error) {

        rfq = [];

    }


    /* =========================================================
       HELPERS
    ========================================================= */

    function money(value) {

        return new Intl.NumberFormat('id-ID').format(
            Math.max(0, Number(value) || 0)
        );

    }


    function escapeHtml(value) {

        return String(value ?? '').replace(
            /[&<>"']/g,
            char => ({
                '&': '&amp;',
                '<': '&lt;',
                '>': '&gt;',
                '"': '&quot;',
                "'": '&#039;'
            })[char]
        );

    }


    function notify(message) {

        const toast = $('#toast');

        if (!toast) {
            return;
        }

        toast.textContent = message;

        toast.classList.remove('hidden');

        clearTimeout(window.__sjToastTimer);

        window.__sjToastTimer = setTimeout(() => {

            toast.classList.add('hidden');

        }, 2200);

    }


    function persistRFQ() {

        try {

            localStorage.setItem(
                STORAGE_KEY,
                JSON.stringify(rfq)
            );

        } catch (error) {

            // Abaikan error localStorage.

        }

    }


    function getProduct(index) {

        return data.find(
            product => product.index === Number(index)
        );

    }


    function getRfqCount() {

        return rfq.reduce(
            (total, item) => total + item.qty,
            0
        );

    }


    function getRfqTotal() {

        return rfq.reduce(
            (total, item) => total + (item.qty * item.price),
            0
        );

    }


    /* =========================================================
       MODAL
    ========================================================= */

    function openModal(id) {

        const modal = document.getElementById(id);

        if (!modal) {
            return;
        }

        modal.classList.remove('hidden');

        if (
            id === 'policy-modal' ||
            id === 'detail-modal' ||
            id === 'rab-modal'
        ) {

            modal.classList.add('flex');

        }

        modal.setAttribute(
            'aria-hidden',
            'false'
        );

        document.body.classList.add(
            'overflow-hidden'
        );

    }


    function closeModal(id) {

        const modal = document.getElementById(id);

        if (!modal) {
            return;
        }

        modal.classList.add('hidden');

        modal.classList.remove('flex');

        modal.setAttribute(
            'aria-hidden',
            'true'
        );

        const anyOpen =
            !$('#policy-modal')?.classList.contains('hidden') ||
            !$('#detail-modal')?.classList.contains('hidden') ||
            !$('#rab-modal')?.classList.contains('hidden') ||
            !$('#rfq-modal')?.classList.contains('hidden');

        if (!anyOpen) {

            document.body.classList.remove(
                'overflow-hidden'
            );

        }

    }


    /* =========================================================
       RFQ
    ========================================================= */

    function addToRFQ(index) {

        const product = getProduct(index);

        if (!product) {
            return;
        }

        const existing = rfq.find(
            item => item.index === product.index
        );

        if (existing) {

            existing.qty += 1;

        } else {

            rfq.push({
                ...product,
                qty: 1
            });

        }

        persistRFQ();

        renderRFQ();

        notify(
            product.name + ' ditambahkan ke RFQ.'
        );

    }


    function changeQty(index, difference) {

        const item = rfq.find(
            entry => entry.index === Number(index)
        );

        if (!item) {
            return;
        }

        item.qty += difference;

        if (item.qty <= 0) {

            rfq = rfq.filter(
                entry => entry.index !== Number(index)
            );

        }

        persistRFQ();

        renderRFQ();

    }


    function removeFromRFQ(index) {

        rfq = rfq.filter(
            item => item.index !== Number(index)
        );

        persistRFQ();

        renderRFQ();

        notify('Produk dihapus dari RFQ.');

    }


    function renderRFQ() {

        const box = $('#rfq-items');

        const count = getRfqCount();

        const total = getRfqTotal();


        const badge = document.querySelector(
            '[data-action="open-rfq"] span.bg-secondary'
        );


        if ($('#rfq-count')) {

            $('#rfq-count').textContent = count;

        }


        if ($('#rfq-total')) {

            $('#rfq-total').textContent =
                'Rp ' + money(total);

        }


        if (badge) {

            badge.textContent = count;

        }


        if (!box) {
            return;
        }


        if (!rfq.length) {

            box.innerHTML = `
                <div class="text-center py-12 text-on-surface-variant">

                    <span class="material-symbols-outlined text-5xl text-outline">
                        shopping_cart
                    </span>

                    <p class="mt-3 font-semibold text-primary">
                        RFQ masih kosong
                    </p>

                    <p class="text-body-sm mt-1">
                        Tambahkan produk dari katalog untuk memulai.
                    </p>

                </div>
            `;

            return;

        }


        box.innerHTML = rfq.map(item => {

            return `
                <div
                    class="border border-outline-variant rounded-lg p-3 bg-surface"
                    data-rfq-index="${item.index}"
                >

                    <div class="flex items-start justify-between gap-3">

                        <div class="min-w-0">

                            <p class="text-label-sm text-secondary uppercase">
                                ${escapeHtml(item.sku)}
                            </p>

                            <h3 class="text-title-md text-primary font-semibold leading-snug mt-1">
                                ${escapeHtml(item.name)}
                            </h3>

                            <p class="text-body-sm text-on-surface-variant mt-1">
                                Rp ${money(item.price)} / unit
                            </p>

                        </div>

                        <button
                            type="button"
                            class="p-1.5 rounded hover:bg-surface-container"
                            data-rfq-remove="${item.index}"
                            title="Hapus"
                        >
                            <span class="material-symbols-outlined text-[18px]">
                                delete
                            </span>
                        </button>

                    </div>


                    <div class="mt-3 flex items-center justify-between">

                        <div class="inline-flex items-center border border-outline-variant rounded-lg overflow-hidden">

                            <button
                                type="button"
                                class="w-9 h-9 hover:bg-surface-container"
                                data-rfq-minus="${item.index}"
                            >
                                −
                            </button>

                            <span class="w-10 text-center font-semibold">
                                ${item.qty}
                            </span>

                            <button
                                type="button"
                                class="w-9 h-9 hover:bg-surface-container"
                                data-rfq-plus="${item.index}"
                            >
                                +
                            </button>

                        </div>


                        <strong class="text-primary">
                            Rp ${money(item.qty * item.price)}
                        </strong>

                    </div>

                </div>
            `;

        }).join('');

    }


    /* =========================================================
       DETAIL PRODUK
    ========================================================= */

    function openProductDetail(index) {

        const product = getProduct(index);

        const card = cards.find(
            item => Number(item.dataset.productIndex) === Number(index)
        );

        if (!product || !card) {
            return;
        }


        const category =
            card.querySelector(
                'span.uppercase'
            )?.textContent.trim() || 'Material';


        const specElement =
            card.querySelector(
                '.mt-2\\.5'
            );


        const specification =
            specElement
                ? specElement.textContent.trim()
                : 'Spesifikasi contoh produk.';


        const stockText =
            card.querySelector(
                '.text-emerald-800'
            )?.textContent.trim()
            || 'Informasi stok contoh';


        $('#detail-body').innerHTML = `

            <span class="text-label-sm uppercase tracking-wider text-secondary">
                ${escapeHtml(category)}
            </span>

            <h2 class="text-headline-md text-primary mt-1 pr-8">
                ${escapeHtml(product.name)}
            </h2>

            <p class="text-body-sm text-outline mt-1">
                SKU: ${escapeHtml(product.sku)}
            </p>


            <div class="grid sm:grid-cols-2 gap-3 mt-5">

                <div class="rounded-lg bg-surface-container-low p-4 border border-outline-variant">

                    <span class="text-label-sm text-outline">
                        Spesifikasi
                    </span>

                    <p class="text-body-md text-primary font-semibold mt-1">
                        ${escapeHtml(specification)}
                    </p>

                </div>


                <div class="rounded-lg bg-surface-container-low p-4 border border-outline-variant">

                    <span class="text-label-sm text-outline">
                        Ketersediaan
                    </span>

                    <p class="text-body-md text-primary font-semibold mt-1">
                        ${escapeHtml(stockText)}
                    </p>

                </div>

            </div>


            <div class="mt-4 rounded-lg bg-primary p-4 text-on-primary flex items-end justify-between gap-4">

                <div>

                    <span class="text-label-sm text-outline-variant">
                        Harga contoh
                    </span>

                    <div class="text-headline-sm font-bold mt-1">
                        Rp ${money(product.price)}
                    </div>

                </div>


                <button
                    type="button"
                    class="bg-secondary text-on-secondary px-4 py-2.5 rounded-lg font-label-lg"
                    data-detail-add="${product.index}"
                >
                    Tambah ke RFQ
                </button>

            </div>

        `;


        openModal('detail-modal');

    }


    /* =========================================================
       FILTER
    ========================================================= */

    let activeQuickFilter = 'all';


    function applyFilters(showNotification = false) {

        const query =
            ($('#filter-search')?.value || '')
                .trim()
                .toLowerCase();


        const min =
            Number(
                String(
                    $('#price-min')?.value || '0'
                ).replace(/\D/g, '')
            ) || 0;


        const max =
            Number(
                String(
                    $('#price-max')?.value || '999999999'
                ).replace(/\D/g, '')
            ) || 999999999;


        const selectedCategories =
            $$(
                'input[data-category-filter]:checked'
            ).map(
                input => input.dataset.categoryFilter
            );


        const readyChecked =
            $('input[data-service-filter="ready"]')
                ?.checked ?? false;


        const sniChecked =
            $('input[data-service-filter="sni"]')
                ?.checked ?? false;


        const ppnChecked =
            $('input[data-service-filter="ppn"]')
                ?.checked ?? false;


        let visibleCount = 0;


        cards.forEach(card => {

            const product = getProduct(
                card.dataset.productIndex
            );

            if (!product) {
                return;
            }


            const categoryOk =
                selectedCategories.length === 0 ||
                selectedCategories.includes(
                    product.category
                );


            const queryOk =
                !query ||
                `${product.name} ${product.sku} ${product.category}`
                    .toLowerCase()
                    .includes(query);


            const priceOk =
                product.price >= min &&
                product.price <= max;


            const readyOk =
                !readyChecked ||
                product.ready;


            const sniOk =
                !sniChecked ||
                product.sni;


            /*
             * PPN adalah kebutuhan tingkat transaksi/B2B,
             * bukan atribut stok per produk.
             * Untuk prototype, checkbox ini tidak menyaring produk.
             */
            const ppnOk =
                !ppnChecked ||
                true;


            const quickOk =
                activeQuickFilter === 'all'
                    ? true
                    : activeQuickFilter === 'ready'
                        ? product.ready
                        : activeQuickFilter === 'truck'
                            ? product.truck
                            : activeQuickFilter === 'sni'
                                ? product.sni
                                : true;


            const show =
                categoryOk &&
                queryOk &&
                priceOk &&
                readyOk &&
                sniOk &&
                ppnOk &&
                quickOk;


            card.style.display =
                show ? '' : 'none';


            if (show) {
                visibleCount++;
            }

        });


        if ($('#visible-count')) {

            $('#visible-count').textContent =
                visibleCount;

        }


        if ($('#pagination-count')) {

            $('#pagination-count').textContent =
                visibleCount;

        }


        $('#no-results')
            ?.classList.toggle(
                'hidden',
                visibleCount !== 0
            );


        if (showNotification) {

            notify(
                visibleCount +
                ' produk sesuai filter.'
            );

        }

    }


    function resetFilters() {

        if ($('#filter-search')) {
            $('#filter-search').value = '';
        }


        if ($('#global-search')) {
            $('#global-search').value = '';
        }


        if ($('#price-min')) {
            $('#price-min').value = 'Rp 0';
        }


        if ($('#price-max')) {
            $('#price-max').value = 'Rp 2.500.000';
        }


        $$('input[data-category-filter]')
            .forEach(
                checkbox => checkbox.checked = true
            );


        $$('input[data-service-filter]')
            .forEach(
                checkbox => {
                    checkbox.checked =
                        checkbox.dataset.serviceFilter !== 'ppn';
                }
            );


        activeQuickFilter = 'all';


        updateQuickFilterButtons();


        applyFilters();


        notify('Filter direset.');

    }


    function updateQuickFilterButtons() {

        $$('.quick-filter').forEach(button => {

            const active =
                button.dataset.quickFilter ===
                activeQuickFilter;


            if (active) {

                button.classList.remove(
                    'bg-surface-container',
                    'text-on-surface'
                );

                button.classList.add(
                    'bg-primary',
                    'text-on-primary'
                );

            } else {

                button.classList.remove(
                    'bg-primary',
                    'text-on-primary'
                );

                button.classList.add(
                    'bg-surface-container',
                    'text-on-surface'
                );

            }

        });

    }


    function applyQuickFilter(type) {

        activeQuickFilter = type;

        updateQuickFilterButtons();

        applyFilters(true);

    }


    /* =========================================================
       SORTING
    ========================================================= */

    $('#sort-select')
        ?.addEventListener(
            'change',
            event => {

                const value =
                    event.target.value;


                const sorted =
                    [...cards].sort(
                        (a, b) => {

                            const productA =
                                getProduct(
                                    a.dataset.productIndex
                                );

                            const productB =
                                getProduct(
                                    b.dataset.productIndex
                                );


                            if (!productA || !productB) {
                                return 0;
                            }


                            if (value === 'low') {

                                return productA.price -
                                    productB.price;

                            }


                            if (value === 'high') {

                                return productB.price -
                                    productA.price;

                            }


                            if (value === 'stock') {

                                return productB.stock -
                                    productA.stock;

                            }


                            return (
                                productA.index -
                                productB.index
                            );

                        }
                    );


                sorted.forEach(card => {

                    grid.appendChild(card);

                });


                applyFilters();

            }
        );


    /* =========================================================
       GRID / LIST
    ========================================================= */

    $('#grid-view-btn')
        ?.addEventListener(
            'click',
            function () {

                grid.classList.remove(
                    'list-mode',
                    'flex',
                    'flex-col'
                );


                grid.classList.add(
                    'grid'
                );


                this.classList.add(
                    'bg-primary',
                    'text-on-primary'
                );


                $('#list-view-btn')
                    ?.classList.remove(
                        'bg-primary',
                        'text-on-primary'
                    );

            }
        );


    $('#list-view-btn')
        ?.addEventListener(
            'click',
            function () {

                grid.classList.remove(
                    'grid'
                );


                grid.classList.add(
                    'list-mode',
                    'flex',
                    'flex-col'
                );


                this.classList.add(
                    'bg-primary',
                    'text-on-primary'
                );


                $('#grid-view-btn')
                    ?.classList.remove(
                        'bg-primary',
                        'text-on-primary'
                    );

            }
        );


    /* =========================================================
       GLOBAL SEARCH
    ========================================================= */

    $('#global-search')
        ?.addEventListener(
            'input',
            event => {

                if ($('#filter-search')) {

                    $('#filter-search').value =
                        event.target.value;

                }

                applyFilters();

            }
        );


    $('#filter-search')
        ?.addEventListener(
            'input',
            event => {

                if ($('#global-search')) {

                    $('#global-search').value =
                        event.target.value;

                }

                applyFilters();

            }
        );


    /* =========================================================
       PRICE
    ========================================================= */

    $('#price-min')
        ?.addEventListener(
            'change',
            () => applyFilters()
        );


    $('#price-max')
        ?.addEventListener(
            'change',
            () => applyFilters()
        );


    $$('[data-price-preset]')
        .forEach(button => {

            button.addEventListener(
                'click',
                () => {

                    const [
                        min,
                        max
                    ] =
                        button.dataset.pricePreset
                            .split('-')
                            .map(Number);


                    $('#price-min').value =
                        'Rp ' + money(min);


                    $('#price-max').value =
                        max >= 999999999
                            ? 'Rp 2.500.000'
                            : 'Rp ' + money(max);


                    applyFilters(true);

                }
            );

        });


    /* =========================================================
       CATEGORY / SERVICE
    ========================================================= */

    $$(
        'input[data-category-filter], input[data-service-filter]'
    )
    .forEach(input => {

        input.addEventListener(
            'change',
            () => applyFilters()
        );

    });


    /* =========================================================
       QUICK FILTER
    ========================================================= */

    $$('[data-quick-filter]')
        .forEach(button => {

            button.addEventListener(
                'click',
                () => {

                    applyQuickFilter(
                        button.dataset.quickFilter
                    );

                }
            );

        });


    /* =========================================================
       CLICK HANDLERS
    ========================================================= */

    document.addEventListener(
        'click',
        event => {

            const addButton =
                event.target.closest(
                    '[data-action="add-rfq"]'
                );


            if (addButton) {

                addToRFQ(
                    addButton.dataset.productIndex
                );

                return;

            }


            const detailButton =
                event.target.closest(
                    '[data-action="detail"]'
                );


            if (detailButton) {

                openProductDetail(
                    detailButton.dataset.productIndex
                );

                return;

            }


            const detailAddButton =
                event.target.closest(
                    '[data-detail-add]'
                );


            if (detailAddButton) {

                addToRFQ(
                    detailAddButton.dataset.detailAdd
                );

                closeModal(
                    'detail-modal'
                );

                return;

            }


            const plus =
                event.target.closest(
                    '[data-rfq-plus]'
                );


            if (plus) {

                changeQty(
                    plus.dataset.rfqPlus,
                    1
                );

                return;

            }


            const minus =
                event.target.closest(
                    '[data-rfq-minus]'
                );


            if (minus) {

                changeQty(
                    minus.dataset.rfqMinus,
                    -1
                );

                return;

            }


            const remove =
                event.target.closest(
                    '[data-rfq-remove]'
                );


            if (remove) {

                removeFromRFQ(
                    remove.dataset.rfqRemove
                );

                return;

            }


            const actionElement =
                event.target.closest(
                    '[data-action]'
                );


            if (!actionElement) {
                return;
            }


            const action =
                actionElement.dataset.action;


            if (action === 'open-rfq') {

                renderRFQ();

                openModal(
                    'rfq-modal'
                );

                return;

            }


            if (action === 'sales-whatsapp') {

                const message =
                    'Halo TB Sinar Jaya, saya ingin konsultasi kebutuhan material.';

                window.open(
                    'https://wa.me/' +
                    WA +
                    '?text=' +
                    encodeURIComponent(message),
                    '_blank',
                    'noopener,noreferrer'
                );

                return;

            }


            if (
                action === 'close-rfq' ||
                action === 'close-detail' ||
                action === 'close-rab' ||
                action === 'close-policy'
            ) {

                closeModal(
                    action.replace('close-', '') + '-modal'
                );

                return;

            }


            if (action === 'submit-rfq') {

                submitRFQ();

                return;

            }


            if (action === 'open-rab') {

                event.preventDefault();

                openModal(
                    'rab-modal'
                );

                return;

            }


            if (action === 'apply-filter') {

                applyFilters(true);

                return;

            }


            if (
                action === 'reset-all' ||
                action === 'reset-filter'
            ) {

                resetFilters();

            }

        }
    );


    /* =========================================================
       RFQ SUBMIT
    ========================================================= */

    function submitRFQ() {

        if (!rfq.length) {

            notify(
                'Tambahkan minimal satu produk ke RFQ.'
            );

            return;

        }


        const lines =
            rfq.map(
                item =>
                    `- ${item.name} (${item.sku}) x${item.qty} = Rp ${money(item.qty * item.price)}`
            ).join('\n');


        const total =
            getRfqTotal();


        const message =
`Halo TB Sinar Jaya,

Saya ingin meminta informasi/penawaran untuk:

${lines}

Estimasi nilai dari prototype: Rp ${money(total)}

Mohon konfirmasi harga, ketersediaan, dan biaya pengiriman.`;


        window.open(
            'https://wa.me/' +
            WA +
            '?text=' +
            encodeURIComponent(message),
            '_blank',
            'noopener,noreferrer'
        );

    }


    /* =========================================================
       RAB
    ========================================================= */

    $('#rab-form')
        ?.addEventListener(
            'submit',
            event => {

                event.preventDefault();


                const file =
                    $('#rab-file')?.files?.[0];


                const name =
                    $('#rab-name')?.value.trim();


                const phone =
                    $('#rab-wa')?.value.trim();


                if (!file || !name || !phone) {

                    notify(
                        'Lengkapi nama, WhatsApp, dan file RAB.'
                    );

                    return;

                }


                if (
                    !/\.(pdf|xlsx?|csv|docx?)$/i
                        .test(file.name)
                ) {

                    notify(
                        'Format file RAB tidak didukung.'
                    );

                    return;

                }


                if (
                    file.size >
                    10 * 1024 * 1024
                ) {

                    notify(
                        'Ukuran file maksimal 10 MB.'
                    );

                    return;

                }


                const message =
`Halo TB Sinar Jaya,

Saya ${name}.
Saya memiliki RAB proyek: ${file.name}.

Nomor WhatsApp:
${phone}

Mohon info cara pengiriman file dan penawaran proyek.`;


                window.open(
                    'https://wa.me/' +
                    WA +
                    '?text=' +
                    encodeURIComponent(message),
                    '_blank',
                    'noopener,noreferrer'
                );


                closeModal(
                    'rab-modal'
                );

                notify(
                    'WhatsApp dibuka. Silakan lampirkan file RAB di chat.'
                );

            }
        );


    /* =========================================================
       ESCAPE KEY
    ========================================================= */

    document.addEventListener(
        'keydown',
        event => {

            if (
                (event.ctrlKey || event.metaKey) &&
                event.key.toLowerCase() === 'k'
            ) {

                event.preventDefault();

                $('#global-search')?.focus();

                return;

            }


            if (event.key === 'Escape') {

                [
                    'rfq-modal',
                    'detail-modal',
                    'rab-modal',
                    'policy-modal'
                ]
                .forEach(
                    id => closeModal(id)
                );

            }

        }
    );


    /* =========================================================
       INITIAL STATE
    ========================================================= */

    activeQuickFilter = 'all';

    updateQuickFilterButtons();

    renderRFQ();

    applyFilters();

})();
</script>

</body>
</html>