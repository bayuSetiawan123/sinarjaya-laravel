<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Checkout &amp; Permintaan Penawaran (RFQ) - Sinar Jaya</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin href="https://fonts.gstatic.com" rel="preconnect" />
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap"
        rel="stylesheet"
    />

    <!-- Material Symbols -->
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
        rel="stylesheet"
    />

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>

    <script>
        tailwind.config = {
            darkMode: "class",

            theme: {
                extend: {
                    colors: {
                        "on-tertiary-fixed-variant": "#3a485b",
                        "on-background": "#191c1e",
                        "on-tertiary": "#ffffff",
                        "tertiary": "#051325",
                        "on-primary": "#ffffff",
                        "error-container": "#ffdad6",
                        "on-secondary-fixed": "#380d00",
                        "on-primary-container": "#7991af",
                        "inverse-on-surface": "#eff1f3",
                        "secondary-fixed": "#ffdbcf",
                        "primary-container": "#0f2942",
                        "surface-container-lowest": "#ffffff",
                        "primary-fixed-dim": "#b0c9e8",
                        "on-secondary": "#ffffff",
                        "secondary-fixed-dim": "#ffb59a",
                        "surface-dim": "#d8dadc",
                        "on-tertiary-fixed": "#0d1c2e",
                        "on-surface": "#191c1e",
                        "outline-variant": "#c3c6ce",
                        "tertiary-container": "#1a283a",
                        "primary-fixed": "#d1e4ff",
                        "secondary": "#a83900",
                        "background": "#f7f9fb",
                        "on-surface-variant": "#43474d",
                        "on-primary-fixed": "#011d35",
                        "tertiary-fixed": "#d5e3fc",
                        "on-secondary-fixed-variant": "#802a00",
                        "error": "#ba1a1a",
                        "on-error": "#ffffff",
                        "on-tertiary-container": "#818fa5",
                        "inverse-primary": "#b0c9e8",
                        "on-secondary-container": "#531800",
                        "tertiary-fixed-dim": "#b9c7df",
                        "inverse-surface": "#2d3133",
                        "surface-container-high": "#e6e8ea",
                        "on-error-container": "#93000a",
                        "on-primary-fixed-variant": "#314863",
                        "surface-variant": "#e0e3e5",
                        "surface-container": "#eceef0",
                        "primary": "#001428",
                        "secondary-container": "#fc6018",
                        "surface-bright": "#f7f9fb",
                        "surface-container-low": "#f2f4f6",
                        "surface-container-highest": "#e0e3e5",
                        "outline": "#74777e",
                        "surface": "#f7f9fb",
                        "surface-tint": "#49607c"
                    },

                    borderRadius: {
                        DEFAULT: "0.125rem",
                        lg: "0.25rem",
                        xl: "0.5rem",
                        full: "0.75rem"
                    },

                    spacing: {
                        "space-md": "1rem",
                        "space-xl": "2.5rem",
                        "margin": "2rem",
                        "margin-sm": "1rem",
                        "space-sm": "0.5rem",
                        "space-lg": "1.5rem",
                        "gutter-sm": "1rem",
                        "gutter": "1.5rem",
                        "space-xs": "0.25rem"
                    },

                    fontFamily: {
                        "label-lg": ["Plus Jakarta Sans"],
                        "body-sm": ["Plus Jakarta Sans"],
                        "headline-sm": ["Plus Jakarta Sans"],
                        "title-lg": ["Plus Jakarta Sans"],
                        "body-lg": ["Plus Jakarta Sans"],
                        "headline-lg-mobile": ["Plus Jakarta Sans"],
                        "headline-lg": ["Plus Jakarta Sans"],
                        "body-md": ["Plus Jakarta Sans"],
                        "label-sm": ["Plus Jakarta Sans"],
                        "display-lg": ["Plus Jakarta Sans"],
                        "display-lg-mobile": ["Plus Jakarta Sans"],
                        "title-md": ["Plus Jakarta Sans"],
                        "headline-md": ["Plus Jakarta Sans"],
                        "label-md": ["Plus Jakarta Sans"]
                    },

                    fontSize: {
                        "label-lg": ["14px", {
                            lineHeight: "20px",
                            letterSpacing: "0.01em",
                            fontWeight: "600"
                        }],

                        "body-sm": ["12px", {
                            lineHeight: "16px",
                            fontWeight: "400"
                        }],

                        "headline-sm": ["20px", {
                            lineHeight: "28px",
                            fontWeight: "600"
                        }],

                        "title-lg": ["18px", {
                            lineHeight: "26px",
                            fontWeight: "600"
                        }],

                        "body-lg": ["16px", {
                            lineHeight: "24px",
                            fontWeight: "400"
                        }],

                        "headline-lg-mobile": ["24px", {
                            lineHeight: "32px",
                            letterSpacing: "-0.01em",
                            fontWeight: "700"
                        }],

                        "headline-lg": ["32px", {
                            lineHeight: "40px",
                            letterSpacing: "-0.015em",
                            fontWeight: "700"
                        }],

                        "body-md": ["14px", {
                            lineHeight: "20px",
                            fontWeight: "400"
                        }],

                        "label-sm": ["11px", {
                            lineHeight: "14px",
                            letterSpacing: "0.04em",
                            fontWeight: "700"
                        }],

                        "display-lg": ["48px", {
                            lineHeight: "56px",
                            letterSpacing: "-0.02em",
                            fontWeight: "800"
                        }],

                        "display-lg-mobile": ["32px", {
                            lineHeight: "40px",
                            letterSpacing: "-0.01em",
                            fontWeight: "800"
                        }],

                        "title-md": ["16px", {
                            lineHeight: "24px",
                            fontWeight: "600"
                        }],

                        "headline-md": ["24px", {
                            lineHeight: "32px",
                            letterSpacing: "-0.01em",
                            fontWeight: "600"
                        }],

                        "label-md": ["12px", {
                            lineHeight: "16px",
                            letterSpacing: "0.02em",
                            fontWeight: "600"
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

        input:focus,
        textarea:focus,
        select:focus {
            outline: none;
        }
    </style>
</head>


<body
    class="bg-background text-on-surface antialiased selection:bg-secondary-fixed selection:text-on-secondary-fixed min-h-screen flex flex-col font-body-md text-body-md"
    id="top"
>


    <!-- ====================================================== -->
    <!-- HEADER -->
    <!-- ====================================================== -->

    <header class="bg-surface sticky top-0 z-50 border-b border-outline-variant shadow-sm">

        <div class="max-w-7xl mx-auto px-4 md:px-8 h-20 flex items-center justify-between gap-6">

            <!-- Brand -->
            <div class="flex items-center gap-6">

                <a
                    class="flex items-center gap-3 group focus:outline-none"
                    href="{{ route('home') }}"
                >
                    <span class="text-2xl md:text-3xl font-extrabold text-primary tracking-tight">
                        Sinar Jaya
                    </span>
                </a>

                <!-- Search -->
                <div class="hidden lg:flex items-center relative w-72">

                    <span class="material-symbols-outlined absolute left-3 text-outline text-[20px] pointer-events-none">
                        search
                    </span>

                    <input
                        aria-label="Cari material"
                        class="w-full pl-10 pr-3 py-2 bg-surface-container-lowest border border-outline-variant rounded-lg text-body-sm text-on-surface placeholder:text-outline focus:ring-2 focus:ring-primary-container transition"
                        id="checkout-search"
                        placeholder="Cari material..."
                        type="text"
                    />

                </div>

            </div>


            <!-- Navigation -->
            <nav class="hidden md:flex items-center gap-8">

                <a
                    class="text-on-surface-variant font-label-lg text-label-lg pb-1 hover:text-secondary transition-colors duration-150"
                    href="{{ route('home') }}"
                >
                    Home
                </a>

                <a
                    class="text-on-surface-variant font-label-lg text-label-lg pb-1 hover:text-secondary transition-colors duration-150"
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
            <div class="flex items-center gap-3 md:gap-4">

                <a
                    class="p-2 text-on-surface-variant hover:text-secondary transition-colors duration-150 relative rounded-lg hover:bg-surface-container"
                    href="https://wa.me/628111075525?text=Halo%20Sinar%20Jaya%2C%20saya%20ingin%20konsultasi%20kebutuhan%20material."
                    rel="noopener noreferrer"
                    target="_blank"
                    title="WhatsApp Toko"
                >
                    <span class="material-symbols-outlined text-[24px]">
                        support_agent
                    </span>
                </a>


                <div
                    class="p-2 text-on-surface-variant hover:text-secondary transition-colors duration-150 relative rounded-lg hover:bg-surface-container cursor-pointer"
                    data-action="focus-cart"
                    title="Lihat Keranjang RFQ"
                >

                    <span class="material-symbols-outlined text-[24px]">
                        shopping_cart
                    </span>

                    <span
                        class="absolute top-1 right-1 w-5 h-5 bg-secondary-container text-white text-[10px] font-bold rounded-full flex items-center justify-center"
                        data-cart-badge="true"
                    >
                        0
                    </span>

                </div>


                <button
                    class="hidden sm:inline-flex items-center gap-2 bg-secondary-container hover:bg-secondary text-white font-label-lg text-label-lg px-4 py-2.5 rounded-lg shadow-sm transition duration-150 active:scale-95"
                    data-action="scroll-form"
                    type="button"
                >

                    <span class="material-symbols-outlined text-[18px]">
                        receipt_long
                    </span>

                    <span>
                        Minta Penawaran (RFQ)
                    </span>

                </button>

            </div>

        </div>

    </header>


    <!-- ====================================================== -->
    <!-- BREADCRUMB -->
    <!-- ====================================================== -->

    <div class="bg-surface-container-low border-b border-outline-variant">

        <div class="max-w-6xl mx-auto px-4 md:px-8 py-3">

            <nav class="flex items-center gap-2 text-body-sm text-outline">

                <a
                    class="hover:text-primary transition-colors flex items-center gap-1"
                    href="{{ route('home') }}"
                >
                    <span class="material-symbols-outlined text-[16px]">
                        home
                    </span>

                    <span>
                        Home
                    </span>
                </a>

                <span class="material-symbols-outlined text-[14px]">
                    chevron_right
                </span>

                <a
                    class="hover:text-primary transition-colors"
                    href="{{ route('rfq') }}"
                >
                    Keranjang RFQ
                </a>

                <span class="material-symbols-outlined text-[14px]">
                    chevron_right
                </span>

                <span class="text-on-surface font-semibold">
                    Checkout &amp; Permintaan Penawaran
                </span>

            </nav>

        </div>

    </div>


    <!-- ====================================================== -->
    <!-- MAIN -->
    <!-- ====================================================== -->

    <main class="flex-grow max-w-6xl w-full mx-auto py-10 px-4 md:px-8 space-y-8">


        <!-- ================================================== -->
        <!-- PAGE HEADER -->
        <!-- ================================================== -->

        <div class="space-y-4">

            <div class="flex flex-col md:flex-row md:items-end justify-between gap-4">

                <div>

                    <div class="inline-flex items-center gap-2 bg-surface-container-high px-3 py-1 rounded-full text-on-surface-variant text-label-sm uppercase tracking-wider mb-2">

                        <span class="w-2 h-2 rounded-full bg-secondary-container"></span>

                        Area Toko:
                        Kramat Pela, Kebayoran Baru

                    </div>


                    <h1 class="text-headline-lg text-primary tracking-tight">
                        Formulir Permintaan Penawaran Harga (RFQ)
                    </h1>


                    <p class="text-body-md text-on-surface-variant max-w-3xl mt-1">

                        Tinjau material yang dipilih dan lengkapi data pemesan serta
                        lokasi pengiriman. Detail kebutuhan kemudian dapat dikirim
                        ke WhatsApp toko untuk dikonfirmasi.

                    </p>

                </div>

            </div>


            <!-- Stepper -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-3 bg-surface-container-lowest p-3 rounded-lg border border-outline-variant">

                <!-- Step 1 -->
                <div class="flex items-center gap-3 px-3 py-2 text-on-surface-variant">

                    <div class="w-8 h-8 rounded-full bg-surface-container-high text-primary flex items-center justify-center font-bold text-label-md">

                        <span class="material-symbols-outlined text-[18px]">
                            check
                        </span>

                    </div>

                    <div class="flex flex-col">

                        <span class="text-label-sm text-outline">
                            Langkah 1
                        </span>

                        <span class="text-title-md font-semibold text-on-surface">
                            Pilih Material
                        </span>

                    </div>

                </div>


                <!-- Step 2 -->
                <div class="flex items-center gap-3 px-3 py-2 bg-surface-container-low rounded-lg border border-secondary/30">

                    <div class="w-8 h-8 rounded-full bg-primary-container text-white flex items-center justify-center font-bold text-label-md">
                        2
                    </div>

                    <div class="flex flex-col">

                        <span class="text-label-sm text-secondary font-bold">
                            Sedang Berlangsung
                        </span>

                        <span class="text-title-md font-bold text-primary">
                            Tinjau &amp; Lengkapi Data
                        </span>

                    </div>

                </div>


                <!-- Step 3 -->
                <div class="flex items-center gap-3 px-3 py-2 text-outline">

                    <div class="w-8 h-8 rounded-full bg-surface-container text-outline flex items-center justify-center font-bold text-label-md">
                        3
                    </div>

                    <div class="flex flex-col">

                        <span class="text-label-sm text-outline">
                            Langkah Terakhir
                        </span>

                        <span class="text-title-md font-semibold text-outline">
                            Kirim Permintaan
                        </span>

                    </div>

                </div>

            </div>

        </div>


        <!-- ================================================== -->
        <!-- SECTION 1: RFQ TABLE -->
        <!-- ================================================== -->

        <div class="bg-surface-container-lowest border border-outline-variant rounded-lg shadow-sm overflow-hidden">

            <!-- Card Header -->
            <div class="px-6 py-4 border-b border-outline-variant flex flex-wrap items-center justify-between gap-4 bg-surface-bright">

                <div class="flex items-center gap-3">

                    <span class="material-symbols-outlined text-primary-container">
                        inventory_2
                    </span>

                    <h2
                        class="text-title-lg text-primary"
                        data-rfq-heading="true"
                    >
                        Daftar Material Proyek Terpilih
                    </h2>

                </div>


                <button
                    class="inline-flex items-center gap-1.5 text-label-lg text-primary-container hover:text-secondary transition-colors duration-150"
                    data-action="back-catalog"
                    type="button"
                >

                    <span class="material-symbols-outlined text-[18px]">
                        add_circle
                    </span>

                    <span>
                        Kembali Belanja Material
                    </span>

                </button>

            </div>


            <!-- Search inside RFQ -->
            <div class="px-6 py-4 border-b border-outline-variant bg-surface-container-low">

                <div class="relative max-w-md">

                    <span class="material-symbols-outlined absolute left-3 top-2.5 text-[18px] text-outline pointer-events-none">
                        search
                    </span>

                    <input
                        class="w-full pl-9 pr-3 py-2.5 bg-surface-container-lowest border border-outline-variant rounded-lg text-body-md"
                        id="rfq-search"
                        placeholder="Cari material dalam RFQ..."
                        type="text"
                    />

                </div>

            </div>


            <!-- Table -->
            <div class="overflow-x-auto">

                <table
                    class="w-full text-left border-collapse"
                    data-rfq-table="true"
                    id="rfq-table"
                >

                    <thead>

                        <tr class="bg-surface-container-low text-on-surface-variant text-label-sm uppercase tracking-wider border-b border-outline-variant">

                            <th class="py-3 px-6" scope="col">
                                Nama Produk / Spesifikasi
                            </th>

                            <th class="py-3 px-4" scope="col">
                                Estimasi Harga
                            </th>

                            <th class="py-3 px-4 text-center" scope="col">
                                Jumlah
                            </th>

                            <th class="py-3 px-4" scope="col">
                                Satuan
                            </th>

                            <th class="py-3 px-6 text-right" scope="col">
                                Estimasi Subtotal
                            </th>

                            <th class="py-3 px-4 text-center" scope="col">
                                Aksi
                            </th>

                        </tr>

                    </thead>


                    <tbody class="divide-y divide-outline-variant">

                        <!-- Default Product 1 -->
                        <tr
                            class="hover:bg-surface-container-low/50 transition-colors"
                            data-default-index="1"
                            data-name="Semen Tiga Roda 50kg Portland Composite Cement"
                            data-price="68500"
                            data-sku="SMN-TR-50"
                            data-unit="Sak"
                        >

                            <td class="py-4 px-6">

                                <div class="font-title-md text-primary font-bold">
                                    Semen Tiga Roda 50kg Portland Composite Cement
                                </div>

                                <div class="text-body-sm text-on-surface-variant mt-0.5">

                                    <span class="bg-surface-container px-1.5 py-0.5 rounded text-[11px] font-mono text-outline">
                                        SKU: SMN-TR-50
                                    </span>

                                </div>

                            </td>


                            <td class="py-4 px-4 font-mono font-medium text-on-surface">
                                Rp 68.500
                            </td>


                            <td class="py-4 px-4">

                                <div class="flex items-center justify-center border border-outline-variant rounded bg-white w-28 mx-auto">

                                    <button
                                        class="w-8 h-8 flex items-center justify-center text-outline hover:text-primary hover:bg-surface-container-high transition"
                                        data-default-minus
                                        type="button"
                                    >
                                        -
                                    </button>

                                    <input
                                        aria-label="Jumlah"
                                        class="w-12 text-center border-none p-0 text-body-md font-semibold text-primary focus:ring-0"
                                        data-qty-input="true"
                                        inputmode="numeric"
                                        min="1"
                                        pattern="[0-9]*"
                                        type="text"
                                        value="50"
                                    />

                                    <button
                                        class="w-8 h-8 flex items-center justify-center text-outline hover:text-primary hover:bg-surface-container-high transition"
                                        data-default-plus
                                        type="button"
                                    >
                                        +
                                    </button>

                                </div>

                            </td>


                            <td class="py-4 px-4">

                                <span class="inline-block px-2.5 py-1 bg-surface-container text-on-surface rounded border border-outline-variant/60">
                                    Sak
                                </span>

                            </td>


                            <td class="py-4 px-6 text-right font-mono font-bold text-primary">
                                Rp 3.425.000
                            </td>


                            <td class="py-4 px-4 text-center">

                                <button
                                    aria-label="Hapus barang"
                                    class="p-1.5 text-outline hover:text-error hover:bg-error-container/40 rounded transition"
                                    data-rfq-action="remove"
                                    title="Hapus Barang"
                                    type="button"
                                >

                                    <span class="material-symbols-outlined text-[20px]">
                                        delete
                                    </span>

                                </button>

                            </td>

                        </tr>


                        <!-- Default Product 2 -->
                        <tr
                            class="hover:bg-surface-container-low/50 transition-colors"
                            data-default-index="2"
                            data-name="Besi Beton Ulir 12mm x 12m SNI Krakatau Steel"
                            data-price="118000"
                            data-sku="BSI-UL-12"
                            data-unit="Batang"
                        >

                            <td class="py-4 px-6">

                                <div class="font-title-md text-primary font-bold">
                                    Besi Beton Ulir 12mm x 12m SNI Krakatau Steel
                                </div>

                                <div class="text-body-sm text-on-surface-variant mt-0.5">

                                    <span class="bg-surface-container px-1.5 py-0.5 rounded text-[11px] font-mono text-outline">
                                        SKU: BSI-UL-12
                                    </span>

                                </div>

                            </td>


                            <td class="py-4 px-4 font-mono font-medium text-on-surface">
                                Rp 118.000
                            </td>


                            <td class="py-4 px-4">

                                <div class="flex items-center justify-center border border-outline-variant rounded bg-white w-28 mx-auto">

                                    <button
                                        class="w-8 h-8 flex items-center justify-center text-outline hover:text-primary hover:bg-surface-container-high transition"
                                        data-default-minus
                                        type="button"
                                    >
                                        -
                                    </button>

                                    <input
                                        aria-label="Jumlah"
                                        class="w-12 text-center border-none p-0 text-body-md font-semibold text-primary focus:ring-0"
                                        data-qty-input="true"
                                        inputmode="numeric"
                                        min="1"
                                        pattern="[0-9]*"
                                        type="text"
                                        value="30"
                                    />

                                    <button
                                        class="w-8 h-8 flex items-center justify-center text-outline hover:text-primary hover:bg-surface-container-high transition"
                                        data-default-plus
                                        type="button"
                                    >
                                        +
                                    </button>

                                </div>

                            </td>


                            <td class="py-4 px-4">

                                <span class="inline-block px-2.5 py-1 bg-surface-container text-on-surface rounded border border-outline-variant/60">
                                    Batang
                                </span>

                            </td>


                            <td class="py-4 px-6 text-right font-mono font-bold text-primary">
                                Rp 3.540.000
                            </td>


                            <td class="py-4 px-4 text-center">

                                <button
                                    aria-label="Hapus barang"
                                    class="p-1.5 text-outline hover:text-error hover:bg-error-container/40 rounded transition"
                                    data-rfq-action="remove"
                                    title="Hapus Barang"
                                    type="button"
                                >

                                    <span class="material-symbols-outlined text-[20px]">
                                        delete
                                    </span>

                                </button>

                            </td>

                        </tr>


                        <!-- Default Product 3 -->
                        <tr
                            class="hover:bg-surface-container-low/50 transition-colors"
                            data-default-index="3"
                            data-name='Pipa PVC Rucika D 3" Panjang 4 Meter SNI JIS'
                            data-price="88000"
                            data-sku="PIP-RCK-D3"
                            data-unit="Batang"
                        >

                            <td class="py-4 px-6">

                                <div class="font-title-md text-primary font-bold">
                                    Pipa PVC Rucika D 3" Panjang 4 Meter SNI JIS
                                </div>

                                <div class="text-body-sm text-on-surface-variant mt-0.5">

                                    <span class="bg-surface-container px-1.5 py-0.5 rounded text-[11px] font-mono text-outline">
                                        SKU: PIP-RCK-D3
                                    </span>

                                </div>

                            </td>


                            <td class="py-4 px-4 font-mono font-medium text-on-surface">
                                Rp 88.000
                            </td>


                            <td class="py-4 px-4">

                                <div class="flex items-center justify-center border border-outline-variant rounded bg-white w-28 mx-auto">

                                    <button
                                        class="w-8 h-8 flex items-center justify-center text-outline hover:text-primary hover:bg-surface-container-high transition"
                                        data-default-minus
                                        type="button"
                                    >
                                        -
                                    </button>

                                    <input
                                        aria-label="Jumlah"
                                        class="w-12 text-center border-none p-0 text-body-md font-semibold text-primary focus:ring-0"
                                        data-qty-input="true"
                                        inputmode="numeric"
                                        min="1"
                                        pattern="[0-9]*"
                                        type="text"
                                        value="15"
                                    />

                                    <button
                                        class="w-8 h-8 flex items-center justify-center text-outline hover:text-primary hover:bg-surface-container-high transition"
                                        data-default-plus
                                        type="button"
                                    >
                                        +
                                    </button>

                                </div>

                            </td>


                            <td class="py-4 px-4">

                                <span class="inline-block px-2.5 py-1 bg-surface-container text-on-surface rounded border border-outline-variant/60">
                                    Batang
                                </span>

                            </td>


                            <td class="py-4 px-6 text-right font-mono font-bold text-primary">
                                Rp 1.320.000
                            </td>


                            <td class="py-4 px-4 text-center">

                                <button
                                    aria-label="Hapus barang"
                                    class="p-1.5 text-outline hover:text-error hover:bg-error-container/40 rounded transition"
                                    data-rfq-action="remove"
                                    title="Hapus Barang"
                                    type="button"
                                >

                                    <span class="material-symbols-outlined text-[20px]">
                                        delete
                                    </span>

                                </button>

                            </td>

                        </tr>


                        <!-- Default Product 4 -->
                        <tr
                            class="hover:bg-surface-container-low/50 transition-colors"
                            data-default-index="4"
                            data-name="Mortar Utama MU-380 Perekat Bata Ringan 40kg"
                            data-price="105000"
                            data-sku="MRT-MU-380"
                            data-unit="Sak"
                        >

                            <td class="py-4 px-6">

                                <div class="font-title-md text-primary font-bold">
                                    Mortar Utama MU-380 Perekat Bata Ringan 40kg
                                </div>

                                <div class="text-body-sm text-on-surface-variant mt-0.5">

                                    <span class="bg-surface-container px-1.5 py-0.5 rounded text-[11px] font-mono text-outline">
                                        SKU: MRT-MU-380
                                    </span>

                                </div>

                            </td>


                            <td class="py-4 px-4 font-mono font-medium text-on-surface">
                                Rp 105.000
                            </td>


                            <td class="py-4 px-4">

                                <div class="flex items-center justify-center border border-outline-variant rounded bg-white w-28 mx-auto">

                                    <button
                                        class="w-8 h-8 flex items-center justify-center text-outline hover:text-primary hover:bg-surface-container-high transition"
                                        data-default-minus
                                        type="button"
                                    >
                                        -
                                    </button>

                                    <input
                                        aria-label="Jumlah"
                                        class="w-12 text-center border-none p-0 text-body-md font-semibold text-primary focus:ring-0"
                                        data-qty-input="true"
                                        inputmode="numeric"
                                        min="1"
                                        pattern="[0-9]*"
                                        type="text"
                                        value="20"
                                    />

                                    <button
                                        class="w-8 h-8 flex items-center justify-center text-outline hover:text-primary hover:bg-surface-container-high transition"
                                        data-default-plus
                                        type="button"
                                    >
                                        +
                                    </button>

                                </div>

                            </td>


                            <td class="py-4 px-4">

                                <span class="inline-block px-2.5 py-1 bg-surface-container text-on-surface rounded border border-outline-variant/60">
                                    Sak
                                </span>

                            </td>


                            <td class="py-4 px-6 text-right font-mono font-bold text-primary">
                                Rp 2.100.000
                            </td>


                            <td class="py-4 px-4 text-center">

                                <button
                                    aria-label="Hapus barang"
                                    class="p-1.5 text-outline hover:text-error hover:bg-error-container/40 rounded transition"
                                    data-rfq-action="remove"
                                    title="Hapus Barang"
                                    type="button"
                                >

                                    <span class="material-symbols-outlined text-[20px]">
                                        delete
                                    </span>

                                </button>

                            </td>

                        </tr>

                    </tbody>

                </table>

            </div>


            <!-- Table Footer -->
            <div class="p-6 bg-surface-container-low border-t border-outline-variant flex flex-col md:flex-row items-start md:items-center justify-between gap-4">

                <div class="flex items-center gap-3">

                    <div class="w-10 h-10 rounded bg-primary text-white flex items-center justify-center">

                        <span class="material-symbols-outlined">
                            local_shipping
                        </span>

                    </div>

                    <div>

                        <div class="text-label-sm text-outline font-bold">
                            ESTIMASI MUATAN
                        </div>

                        <div
                            class="text-title-md font-bold text-primary"
                            id="load-estimate"
                        >
                            Menghitung...
                        </div>

                    </div>

                </div>


                <div class="text-left md:text-right">

                    <div class="text-label-sm text-outline font-bold">
                        SUBTOTAL ESTIMASI
                    </div>

                    <div
                        class="text-headline-sm font-extrabold text-primary font-mono"
                        id="rfq-subtotal"
                    >
                        Rp 0
                    </div>

                    <div class="text-body-sm text-on-surface-variant">
                        Harga final dikonfirmasi oleh toko.
                    </div>

                </div>

            </div>


            <!-- Notice -->
            <div class="px-6 py-3 bg-secondary-fixed/30 border-t border-secondary-fixed-dim/40 flex items-center gap-2 text-on-secondary-fixed text-body-sm">

                <span class="material-symbols-outlined text-[18px] text-secondary">
                    info
                </span>

                <span>
                    Harga pada halaman ini merupakan estimasi prototype.
                    Harga final, ketersediaan, pengiriman, dan ketentuan transaksi
                    dikonfirmasi oleh toko.
                </span>

            </div>

        </div>


        <!-- ================================================== -->
        <!-- SECTION 2: CUSTOMER FORM -->
        <!-- ================================================== -->

        <div class="bg-surface-container-lowest border border-outline-variant rounded-lg p-6 md:p-8 shadow-sm">

            <div class="border-b border-outline-variant pb-4 mb-6">

                <h2 class="text-title-lg text-primary flex items-center gap-2">

                    <span class="material-symbols-outlined text-secondary">
                        assignment_ind
                    </span>

                    Data Pemesan &amp; Lokasi Proyek

                </h2>

                <p class="text-body-sm text-on-surface-variant mt-1">
                    Lengkapi informasi untuk membantu toko memahami kebutuhan
                    material dan lokasi pengiriman.
                </p>

            </div>


            <form
                class="grid grid-cols-1 md:grid-cols-2 gap-8"
                id="checkout-form"
            >

                <!-- LEFT -->
                <div class="space-y-5">

                    <div class="flex items-center gap-2 text-primary font-bold text-title-md">

                        <span class="w-6 h-6 rounded-full bg-primary-fixed flex items-center justify-center text-primary text-label-sm">
                            1
                        </span>

                        Data Identitas Pemesan

                    </div>


                    <!-- Nama -->
                    <div>

                        <label class="block text-label-lg text-on-surface mb-1">
                            Nama Lengkap Pemesan / PIC Proyek
                            <span class="text-error">*</span>
                        </label>

                        <input
                            class="w-full px-3.5 py-2.5 border border-outline-variant rounded-lg text-body-md text-on-surface focus:ring-2 focus:ring-primary-container transition"
                            name="customer_name"
                            placeholder="Contoh: Bayu Setiawan"
                            required
                            type="text"
                        />

                    </div>


                    <!-- Company -->
                    <div>

                        <label class="block text-label-lg text-on-surface mb-1">
                            Nama Perusahaan / Kontraktor / Toko
                            <span class="text-outline text-sm">
                                (Opsional)
                            </span>
                        </label>

                        <input
                            class="w-full px-3.5 py-2.5 border border-outline-variant rounded-lg text-body-md text-on-surface focus:ring-2 focus:ring-primary-container transition"
                            name="company"
                            placeholder="Nama perusahaan / usaha"
                            type="text"
                        />

                    </div>


                    <!-- WhatsApp -->
                    <div>

                        <label class="block text-label-lg text-on-surface mb-1">
                            Nomor WhatsApp Aktif
                            <span class="text-error">*</span>
                        </label>

                        <div class="flex">

                            <span class="inline-flex items-center px-3 rounded-l-lg border border-r-0 border-outline-variant bg-surface-container text-on-surface-variant font-medium text-body-md">
                                +62
                            </span>

                            <input
                                class="w-full px-3.5 py-2.5 border border-outline-variant rounded-r-lg text-body-md text-on-surface focus:ring-2 focus:ring-primary-container transition"
                                name="customer_phone"
                                placeholder="811-xxxx-xxxx"
                                required
                                type="tel"
                            />

                        </div>

                        <p class="text-body-sm text-outline mt-1.5 flex items-center gap-1">

                            <span class="material-symbols-outlined text-[14px]">
                                lock
                            </span>

                            Digunakan untuk mengirim detail permintaan melalui WhatsApp.

                        </p>

                    </div>


                    <!-- Transaction -->
                    <div>

                        <label class="block text-label-lg text-on-surface mb-2">
                            Tipe Transaksi
                        </label>

                        <div class="space-y-2">

                            <label class="flex items-center gap-3 p-3 border border-outline-variant rounded-lg cursor-pointer hover:bg-surface-container-low transition">

                                <input
                                    checked
                                    class="w-4 h-4 text-primary focus:ring-primary-container"
                                    name="transaction_type"
                                    type="radio"
                                    value="B2B / Kontraktor Proyek"
                                />

                                <div>

                                    <span class="text-label-lg text-primary block">
                                        B2B / Kontraktor Proyek
                                    </span>

                                    <span class="text-body-sm text-outline">
                                        Untuk kebutuhan proyek atau pembelian rutin.
                                    </span>

                                </div>

                            </label>


                            <label class="flex items-center gap-3 p-3 border border-outline-variant rounded-lg cursor-pointer hover:bg-surface-container-low transition">

                                <input
                                    class="w-4 h-4 text-primary focus:ring-primary-container"
                                    name="transaction_type"
                                    type="radio"
                                    value="Renovasi Pribadi / Non-PPN"
                                />

                                <div>

                                    <span class="text-label-lg text-primary block">
                                        Renovasi Pribadi / Non-PPN
                                    </span>

                                    <span class="text-body-sm text-outline">
                                        Untuk pembangunan atau renovasi pribadi.
                                    </span>

                                </div>

                            </label>


                            <label class="flex items-center gap-3 p-3 border border-outline-variant rounded-lg cursor-pointer hover:bg-surface-container-low transition">

                                <input
                                    class="w-4 h-4 text-primary focus:ring-primary-container"
                                    name="transaction_type"
                                    type="radio"
                                    value="Toko Pengecer / Reseller"
                                />

                                <div>

                                    <span class="text-label-lg text-primary block">
                                        Toko Pengecer / Reseller
                                    </span>

                                    <span class="text-body-sm text-outline">
                                        Untuk kebutuhan jual kembali atau pembelian rutin.
                                    </span>

                                </div>

                            </label>

                        </div>

                    </div>

                </div>


                <!-- RIGHT -->
                <div class="space-y-5">

                    <div class="flex items-center gap-2 text-primary font-bold text-title-md">

                        <span class="w-6 h-6 rounded-full bg-primary-fixed flex items-center justify-center text-primary text-label-sm">
                            2
                        </span>

                        Detail Lokasi &amp; Logistik

                    </div>


                    <!-- Area -->
                    <div>

                        <label class="block text-label-lg text-on-surface mb-1">

                            Area / Kecamatan
                            <span class="text-error">*</span>

                        </label>

                        <div class="relative">

                            <select
                                class="w-full px-3.5 py-2.5 border border-outline-variant rounded-lg text-body-md text-on-surface focus:ring-2 focus:ring-primary-container transition appearance-none bg-white"
                                name="area"
                                required
                            >

                                <option selected value="kramat-pela">
                                    Kramat Pela / Kebayoran Baru
                                </option>

                                <option value="gandaria">
                                    Gandaria / Kebayoran Lama
                                </option>

                                <option value="cipete">
                                    Cipete
                                </option>

                                <option value="blom-m">
                                    Blok M / Melawai
                                </option>

                                <option value="senopati">
                                    Senopati / Gunawarman
                                </option>

                                <option value="jakarta-selatan">
                                    Area Jakarta Selatan Lainnya
                                </option>

                                <option value="jabodetabek">
                                    Luar Jakarta Selatan / Jabodetabek
                                </option>

                            </select>

                            <span class="material-symbols-outlined absolute right-3 top-3 text-outline pointer-events-none text-[20px]">
                                expand_more
                            </span>

                        </div>

                    </div>


                    <!-- Address -->
                    <div>

                        <label class="block text-label-lg text-on-surface mb-1">

                            Alamat Lengkap Pengiriman / Proyek
                            <span class="text-error">*</span>

                        </label>

                        <textarea
                            class="w-full px-3.5 py-2.5 border border-outline-variant rounded-lg text-body-md text-on-surface focus:ring-2 focus:ring-primary-container transition"
                            name="address"
                            placeholder="Contoh: Jl. ..., Kramat Pela, Kebayoran Baru, Jakarta Selatan"
                            required
                            rows="3"
                        ></textarea>

                    </div>


                    <!-- Road Access -->
                    <div>

                        <label class="block text-label-lg text-on-surface mb-2">

                            Akses Jalan Masuk Proyek
                            <span class="text-error">*</span>

                        </label>

                        <div class="grid grid-cols-1 gap-2">

                            <label class="flex items-center gap-2.5 p-2.5 border border-outline-variant rounded-lg cursor-pointer hover:bg-surface-container-low transition">

                                <input
                                    checked
                                    class="w-4 h-4 text-primary focus:ring-primary-container"
                                    name="road_access"
                                    type="radio"
                                    value="Bisa Masuk Truk Engkel"
                                />

                                <span class="text-body-md text-on-surface">
                                    Bisa Masuk Truk Engkel
                                </span>

                            </label>


                            <label class="flex items-center gap-2.5 p-2.5 border border-outline-variant rounded-lg cursor-pointer hover:bg-surface-container-low transition">

                                <input
                                    class="w-4 h-4 text-primary focus:ring-primary-container"
                                    name="road_access"
                                    type="radio"
                                    value="Hanya Pick-up / Kendaraan Kecil"
                                />

                                <span class="text-body-md text-on-surface">
                                    Hanya Pick-up / Kendaraan Kecil
                                </span>

                            </label>


                            <label class="flex items-center gap-2.5 p-2.5 border border-outline-variant rounded-lg cursor-pointer hover:bg-surface-container-low transition">

                                <input
                                    class="w-4 h-4 text-primary focus:ring-primary-container"
                                    name="road_access"
                                    type="radio"
                                    value="Jalan Gang / Bongkar Depan"
                                />

                                <span class="text-body-md text-on-surface">
                                    Jalan Gang / Bongkar Depan
                                </span>

                            </label>

                        </div>

                    </div>


                    <!-- Notes -->
                    <div>

                        <label class="block text-label-lg text-on-surface mb-1">
                            Catatan Tambahan
                        </label>

                        <textarea
                            class="w-full px-3.5 py-2.5 border border-outline-variant rounded-lg text-body-md text-on-surface focus:ring-2 focus:ring-primary-container transition"
                            name="notes"
                            placeholder="Contoh: pengiriman bertahap, kebutuhan bongkar, atau catatan lainnya."
                            rows="3"
                        ></textarea>

                    </div>

                </div>

            </form>

        </div>


        <!-- ================================================== -->
        <!-- SECTION 3: WHATSAPP CTA -->
        <!-- ================================================== -->

        <div class="bg-gradient-to-r from-primary-container to-primary rounded-xl p-6 md:p-8 text-white shadow-lg space-y-6">

            <div class="max-w-3xl">

                <div class="inline-flex items-center gap-2 bg-white/10 px-3 py-1 rounded-full text-[12px] font-semibold text-secondary-fixed tracking-wide uppercase mb-3">

                    <span class="material-symbols-outlined text-[16px] text-secondary-fixed">
                        bolt
                    </span>

                    Permintaan Penawaran

                </div>


                <h3 class="text-headline-md tracking-tight">
                    Kirimkan Permintaan Penawaran
                </h3>


                <p class="text-body-md text-primary-fixed mt-1">

                    Setelah data pemesan dan material dilengkapi,
                    sistem akan menyusun ringkasan RFQ untuk dikirim
                    melalui WhatsApp ke toko.

                </p>

            </div>


            <!-- Actions -->
            <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-4 pt-2">

                <button
                    class="inline-flex items-center justify-center gap-3 bg-[#25D366] hover:bg-[#1EBE5D] text-white px-8 py-4 rounded-lg font-bold text-title-lg shadow-md hover:shadow-lg transition-all duration-150 active:scale-95 text-center"
                    data-action="send-rfq"
                    type="button"
                >

                    <svg
                        class="w-6 h-6 fill-current"
                        viewbox="0 0 24 24"
                    >
                        <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766 0-3.18-2.587-5.771-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.007c.106.005.249-.04.39.299.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.86.173.086.275.073.376-.044.101-.116.433-.506.549-.68.116-.173.231-.144.39-.086s1.011.477 1.184.564.289.13.332.202c.045.072.045.419-.099.824zm-3.423-14.416c-6.627 0-12 5.373-12 12 0 2.112.553 4.095 1.518 5.82l-1.611 5.889 6.04-1.585c1.667.909 3.57 1.431 5.602 1.431 6.627 0 12-5.373 12-12s-5.373-12-12-12zm0 21.6c-1.896 0-3.666-.549-5.163-1.498l-.37-.234-3.585.94.957-3.493-.254-.404c-1.054-1.674-1.617-3.616-1.617-5.636 0-5.844 4.756-10.6 10.6-10.6 5.844 0 10.6 4.756 10.6 10.6 0 5.844-4.756 10.6-10.6 10.6z"></path>
                    </svg>

                    <span>
                        Kirim Permintaan via WhatsApp
                    </span>

                </button>


                <button
                    class="inline-flex items-center justify-center gap-2 bg-transparent hover:bg-white/10 text-white border border-outline-variant px-5 py-4 rounded-lg font-semibold text-body-md transition duration-150"
                    data-action="print-draft"
                    type="button"
                >

                    <span class="material-symbols-outlined text-[20px]">
                        picture_as_pdf
                    </span>

                    <span>
                        Cetak / Simpan Draft
                    </span>

                </button>

            </div>


            <p class="text-body-sm text-outline-variant">

                Detail RFQ akan terangkum otomatis dalam pesan WhatsApp
                ke nomor toko
                <strong class="text-white">
                    +62 811-1075-525
                </strong>.

            </p>


            <!-- Trust -->
            <div class="pt-4 border-t border-white/10 grid grid-cols-2 md:grid-cols-4 gap-3 text-label-sm">

                <div class="flex items-center gap-2 text-surface-bright">

                    <span class="material-symbols-outlined text-emerald-400 text-[18px]">
                        verified
                    </span>

                    <span>
                        Detail RFQ Tersusun
                    </span>

                </div>


                <div class="flex items-center gap-2 text-surface-bright">

                    <span class="material-symbols-outlined text-emerald-400 text-[18px]">
                        verified
                    </span>

                    <span>
                        Bisa Konsultasi
                    </span>

                </div>


                <div class="flex items-center gap-2 text-surface-bright">

                    <span class="material-symbols-outlined text-emerald-400 text-[18px]">
                        verified
                    </span>

                    <span>
                        Konfirmasi Pengiriman
                    </span>

                </div>


                <div class="flex items-center gap-2 text-surface-bright">

                    <span class="material-symbols-outlined text-emerald-400 text-[18px]">
                        verified
                    </span>

                    <span>
                        Penawaran Sesuai Kebutuhan
                    </span>

                </div>

            </div>

        </div>

    </main>


    <!-- ====================================================== -->
    <!-- FOOTER -->
    <!-- ====================================================== -->

    <footer class="bg-primary w-full border-t border-outline-variant text-white mt-16">

        <div class="max-w-7xl mx-auto px-4 md:px-8 py-12 md:py-16 grid grid-cols-1 md:grid-cols-4 gap-8">


            <!-- Store -->
            <div class="space-y-4 md:col-span-1">

                <span class="text-headline-md font-bold text-surface-bright block">
                    Sinar Jaya
                </span>


                <p class="text-body-md text-outline-variant">

                    Website katalog dan permintaan penawaran
                    untuk kebutuhan material bangunan.

                </p>


                <div class="text-body-sm text-outline-variant space-y-2">

                    <div class="flex items-start gap-2">

                        <span class="material-symbols-outlined text-[18px] text-secondary-fixed">
                            pin_drop
                        </span>

                        <span>
                            Jl. Jatayu No. 1, Kramat Pela,
                            Kebayoran Baru, Jakarta Selatan
                        </span>

                    </div>


                    <div class="flex items-center gap-2">

                        <span class="material-symbols-outlined text-[18px] text-secondary-fixed">
                            schedule
                        </span>

                        <span>
                            Senin - Sabtu: 07.00 - 17.00 WIB
                        </span>

                    </div>


                    <div class="flex items-center gap-2">

                        <span class="material-symbols-outlined text-[18px] text-secondary-fixed">
                            schedule
                        </span>

                        <span>
                            Minggu: 07.00 - 14.00 WIB
                        </span>

                    </div>

                </div>

            </div>


            <!-- Categories -->
            <div class="space-y-3">

                <h4 class="text-title-lg text-secondary-fixed">
                    Kategori Produk
                </h4>

                <ul class="space-y-2 text-body-md">

                    <li>
                        <a
                            class="text-outline-variant hover:text-secondary-fixed transition-colors"
                            href="{{ route('katalog') }}"
                        >
                            Semen &amp; Mortar
                        </a>
                    </li>

                    <li>
                        <a
                            class="text-outline-variant hover:text-secondary-fixed transition-colors"
                            href="{{ route('katalog') }}"
                        >
                            Besi &amp; Baja
                        </a>
                    </li>

                    <li>
                        <a
                            class="text-outline-variant hover:text-secondary-fixed transition-colors"
                            href="{{ route('katalog') }}"
                        >
                            Pipa &amp; Plumbing
                        </a>
                    </li>

                    <li>
                        <a
                            class="text-outline-variant hover:text-secondary-fixed transition-colors"
                            href="{{ route('katalog') }}"
                        >
                            Cat &amp; Waterproofing
                        </a>
                    </li>

                    <li>
                        <a
                            class="text-outline-variant hover:text-secondary-fixed transition-colors"
                            href="{{ route('katalog') }}"
                        >
                            Keramik &amp; Granit
                        </a>
                    </li>

                </ul>

            </div>


            <!-- Services -->
            <div class="space-y-3">

                <h4 class="text-title-lg text-secondary-fixed">
                    Layanan
                </h4>

                <ul class="space-y-2 text-body-md">

                    <li>
                        <a
                            class="text-outline-variant hover:text-secondary-fixed transition-colors"
                            href="{{ route('home') }}#cara-pesan"
                        >
                            Cara Pesan
                        </a>
                    </li>

                    <li>
                        <a
                            class="text-outline-variant hover:text-secondary-fixed transition-colors"
                            href="{{ route('rfq') }}"
                        >
                            Permintaan RFQ
                        </a>
                    </li>

                    <li>
                        <a
                            class="text-outline-variant hover:text-secondary-fixed transition-colors"
                            href="{{ route('home') }}#kontak"
                        >
                            Kontak Toko
                        </a>
                    </li>

                </ul>

            </div>


            <!-- Contact -->
            <div class="space-y-3">

                <h4 class="text-title-lg text-secondary-fixed">
                    Hubungi Toko
                </h4>


                <p class="text-body-sm text-outline-variant">

                    Punya daftar kebutuhan material?
                    Susun RFQ lalu kirimkan melalui WhatsApp.

                </p>


                <div class="pt-1">

                    <a
                        class="inline-flex items-center gap-2 bg-[#25D366] text-white px-4 py-2 rounded text-label-md font-bold hover:bg-[#1EBE5D] transition"
                        href="https://wa.me/628111075525"
                        target="_blank"
                        rel="noopener noreferrer"
                    >

                        <span class="material-symbols-outlined text-[18px]">
                            chat
                        </span>

                        <span>
                            +62 811-1075-525
                        </span>

                    </a>

                </div>

            </div>

        </div>


        <!-- Bottom -->
        <div class="border-t border-outline-variant/20 py-6">

            <div class="max-w-7xl mx-auto px-4 md:px-8 text-center text-label-sm text-outline-variant">

                © {{ date('Y') }} Sinar Jaya. Project Website.

            </div>

        </div>

    </footer>


    <!-- ====================================================== -->
    <!-- TOAST -->
    <!-- ====================================================== -->

    <div
        class="fixed bottom-5 left-1/2 -translate-x-1/2 z-[200] hidden px-4 py-2.5 rounded-lg bg-primary text-on-primary text-body-sm shadow-xl"
        id="sj-toast"
        role="status"
        aria-live="polite"
    ></div>


    <!-- ====================================================== -->
    <!-- JAVASCRIPT -->
    <!-- ====================================================== -->

    <script>
        (function () {

            'use strict';


            /* ==================================================
               CONFIG
            ================================================== */

            const WA_NUMBER = '628111075525';

            const STORAGE_KEY = 'sinarJayaRFQ';


            const UNIT_BY_SKU = {
                'SMN-TR-50': 'Sak',
                'BSI-UL-12': 'Batang',
                'CAT-DLX-20L': 'Pail',
                'PIP-RCK-D3': 'Batang',
                'GRN-CRM-60': 'Dus',
                'MRT-MU-380': 'Sak',
                'BJR-C75-75': 'Batang',
                'AQP-GRY-20K': 'Pail',
                'WRM-M8-LMB': 'Lembar',
                'PIP-RCK-AW12': 'Batang',
                'KRM-DND-2540': 'Dus',
                'PSR-BNG-1RIT': 'Rit'
            };


            const WEIGHT_KG_BY_SKU = {
                'SMN-TR-50': 50,
                'BSI-UL-12': 10.66,
                'CAT-DLX-20L': 20,
                'PIP-RCK-D3': 6,
                'GRN-CRM-60': 23,
                'MRT-MU-380': 40,
                'BJR-C75-75': 5.5,
                'AQP-GRY-20K': 20,
                'WRM-M8-LMB': 40,
                'PIP-RCK-AW12': 2,
                'KRM-DND-2540': 18,
                'PSR-BNG-1RIT': 1800
            };


            const $ = (selector, root = document) =>
                root.querySelector(selector);


            const $$ = (selector, root = document) =>
                [...root.querySelectorAll(selector)];


            const money = (number) =>
                new Intl.NumberFormat('id-ID').format(
                    Math.max(0, Number(number) || 0)
                );


            const esc = (value) =>
                String(value ?? '').replace(
                    /[&<>"']/g,
                    character => ({
                        '&': '&amp;',
                        '<': '&lt;',
                        '>': '&gt;',
                        '"': '&quot;',
                        "'": '&#039;'
                    })[character]
                );


            /* ==================================================
               DEFAULT RFQ
            ================================================== */

            const defaults = [
                ...$$('#rfq-table tbody tr[data-default-index]')
            ].map(row => ({

                index: Number(
                    row.dataset.defaultIndex
                ),

                name: row.dataset.name,

                sku: row.dataset.sku,

                price: Number(
                    row.dataset.price || 0
                ),

                qty: Math.max(
                    1,
                    Number(
                        row.querySelector('[data-qty-input]')?.value || 1
                    )
                ),

                unit: row.dataset.unit || 'Unit'

            }));


            /* ==================================================
               LOAD STORAGE
            ================================================== */

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


            if (!rfq.length) {

                rfq = defaults;

                persist();

            }


            function persist() {

                try {

                    localStorage.setItem(
                        STORAGE_KEY,
                        JSON.stringify(rfq)
                    );

                } catch (error) {
                    // localStorage tidak tersedia.
                }

            }


            function unitFor(item) {

                return (
                    item.unit ||
                    UNIT_BY_SKU[item.sku] ||
                    'Unit'
                );

            }


            /* ==================================================
               TOAST
            ================================================== */

            function toast(message) {

                const element = $('#sj-toast');

                if (!element) {
                    return;
                }

                element.textContent = message;

                element.classList.remove('hidden');

                clearTimeout(
                    window.__sjToastTimer
                );

                window.__sjToastTimer = setTimeout(
                    () => {
                        element.classList.add('hidden');
                    },
                    2200
                );

            }


            /* ==================================================
               SUMMARY
            ================================================== */

            function updateSummary() {

                const count =
                    rfq.reduce(
                        (sum, item) =>
                            sum +
                            (Number(item.qty) || 0),
                        0
                    );


                const total =
                    rfq.reduce(
                        (sum, item) =>
                            sum +
                            (
                                (Number(item.qty) || 0) *
                                (Number(item.price) || 0)
                            ),
                        0
                    );


                $('#rfq-subtotal')?.replaceChildren(
                    document.createTextNode(
                        'Rp ' + money(total)
                    )
                );


                const badge =
                    $('header [data-cart-badge]');


                if (badge) {
                    badge.textContent = String(count);
                }


                const heading =
                    $('h2[data-rfq-heading]');


                if (heading) {

                    heading.textContent =
                        `Daftar Material Proyek Terpilih (${rfq.length} Jenis Barang)`;

                }


                const load =
                    $('#load-estimate');


                if (!load) {
                    return;
                }


                const kg =
                    rfq.reduce(
                        (sum, item) => {

                            const weight =
                                WEIGHT_KG_BY_SKU[item.sku] || 0;

                            return (
                                sum +
                                (
                                    (Number(item.qty) || 0) *
                                    weight
                                )
                            );

                        },
                        0
                    );


                if (!kg) {

                    load.innerHTML = `
                        Menyesuaikan
                        <span class="font-normal text-on-surface-variant text-body-sm">
                            (estimasi berat belum tersedia)
                        </span>
                    `;

                    return;

                }


                const ton =
                    kg / 1000;


                let recommendation =
                    'Pick-up';


                if (ton >= 3) {

                    recommendation =
                        'Truk Engkel / Colt Diesel';

                } else if (ton >= 1) {

                    recommendation =
                        'Pick-up / Engkel';

                }


                load.innerHTML = `
                    ${ton.toFixed(1)} Ton

                    <span class="font-normal text-on-surface-variant text-body-sm">
                        (Rekomendasi Armada: ${recommendation})
                    </span>
                `;

            }


            /* ==================================================
               RENDER
            ================================================== */

            function render() {

                const tbody =
                    $('#rfq-table tbody');


                if (!tbody) {
                    return;
                }


                tbody.innerHTML = '';


                if (!rfq.length) {

                    tbody.innerHTML = `
                        <tr>
                            <td
                                colspan="6"
                                class="py-14 px-6 text-center text-on-surface-variant"
                            >

                                <span class="material-symbols-outlined text-5xl text-outline">
                                    shopping_cart
                                </span>

                                <p class="mt-3 font-semibold text-primary">
                                    RFQ masih kosong
                                </p>

                                <p class="text-body-sm mt-1">
                                    Kembali ke katalog untuk menambahkan material.
                                </p>

                            </td>
                        </tr>
                    `;

                } else {

                    rfq.forEach((item, index) => {

                        const row =
                            document.createElement('tr');


                        row.className =
                            'hover:bg-surface-container-low/50 transition-colors';


                        row.innerHTML = `

                            <td class="py-4 px-6">

                                <div class="font-title-md text-primary font-bold">
                                    ${esc(item.name)}
                                </div>

                                <div class="text-body-sm text-on-surface-variant mt-0.5">

                                    <span class="bg-surface-container px-1.5 py-0.5 rounded text-[11px] font-mono text-outline">
                                        SKU: ${esc(item.sku)}
                                    </span>

                                </div>

                            </td>


                            <td class="py-4 px-4 font-mono font-medium text-on-surface">

                                Rp ${money(item.price)}

                            </td>


                            <td class="py-4 px-4">

                                <div class="flex items-center justify-center border border-outline-variant rounded bg-white w-28 mx-auto">

                                    <button
                                        class="w-8 h-8 flex items-center justify-center text-outline hover:text-primary hover:bg-surface-container-high transition"
                                        type="button"
                                        data-rfq-action="decrease"
                                        data-index="${index}"
                                        aria-label="Kurangi jumlah"
                                    >
                                        −
                                    </button>


                                    <input
                                        class="w-12 text-center border-none p-0 text-body-md font-semibold text-primary focus:ring-0"
                                        type="text"
                                        value="${Math.max(1, Number(item.qty) || 1)}"
                                        data-rfq-input="${index}"
                                        inputmode="numeric"
                                        pattern="[0-9]*"
                                        min="1"
                                        aria-label="Jumlah ${esc(item.name)}"
                                    />


                                    <button
                                        class="w-8 h-8 flex items-center justify-center text-outline hover:text-primary hover:bg-surface-container-high transition"
                                        type="button"
                                        data-rfq-action="increase"
                                        data-index="${index}"
                                        aria-label="Tambah jumlah"
                                    >
                                        +
                                    </button>

                                </div>

                            </td>


                            <td class="py-4 px-4">

                                <span class="inline-block px-2.5 py-1 bg-surface-container text-on-surface rounded border border-outline-variant/60">

                                    ${esc(unitFor(item))}

                                </span>

                            </td>


                            <td class="py-4 px-6 text-right font-mono font-bold text-primary">

                                Rp ${money(
                                    (Number(item.qty) || 0) *
                                    (Number(item.price) || 0)
                                )}

                            </td>


                            <td class="py-4 px-4 text-center">

                                <button
                                    class="p-1.5 text-outline hover:text-error hover:bg-error-container/40 rounded transition"
                                    type="button"
                                    data-rfq-action="remove"
                                    data-index="${index}"
                                    title="Hapus Barang"
                                    aria-label="Hapus Barang"
                                >

                                    <span class="material-symbols-outlined text-[20px]">
                                        delete
                                    </span>

                                </button>

                            </td>

                        `;


                        tbody.appendChild(row);

                    });

                }


                updateSummary();

            }


            /* ==================================================
               CHANGE QUANTITY
            ================================================== */

            function changeQuantity(index, difference) {

                if (!rfq[index]) {
                    return;
                }


                rfq[index].qty =
                    Math.max(
                        0,
                        (
                            Number(rfq[index].qty) || 0
                        ) + difference
                    );


                if (rfq[index].qty === 0) {

                    rfq.splice(index, 1);

                }


                persist();

                render();

                toast(
                    'Jumlah RFQ diperbarui.'
                );

            }


            /* ==================================================
               REMOVE
            ================================================== */

            function removeItem(index) {

                if (!rfq[index]) {
                    return;
                }


                const name =
                    rfq[index].name;


                rfq.splice(
                    index,
                    1
                );


                persist();

                render();

                toast(
                    name +
                    ' dihapus dari RFQ.'
                );

            }


            /* ==================================================
               SET QTY
            ================================================== */

            function setQuantity(index, value) {

                if (!rfq[index]) {
                    return;
                }


                const numeric =
                    parseInt(
                        String(value).replace(/\D/g, ''),
                        10
                    );


                rfq[index].qty =
                    Math.max(
                        1,
                        numeric || 1
                    );


                persist();

                render();

            }


            /* ==================================================
               BUILD WHATSAPP MESSAGE
            ================================================== */

            function buildMessage() {

                const form =
                    $('#checkout-form');


                const formData =
                    new FormData(form);


                const customer =
                    (
                        formData.get(
                            'customer_name'
                        ) || ''
                    ).toString().trim();


                const company =
                    (
                        formData.get(
                            'company'
                        ) || ''
                    ).toString().trim();


                const phone =
                    (
                        formData.get(
                            'customer_phone'
                        ) || ''
                    ).toString().trim();


                const area =
                    (
                        formData.get(
                            'area'
                        ) || ''
                    ).toString().trim();


                const address =
                    (
                        formData.get(
                            'address'
                        ) || ''
                    ).toString().trim();


                const road =
                    (
                        formData.get(
                            'road_access'
                        ) || ''
                    ).toString().trim();


                const transaction =
                    (
                        formData.get(
                            'transaction_type'
                        ) || ''
                    ).toString().trim();


                const notes =
                    (
                        formData.get(
                            'notes'
                        ) || ''
                    ).toString().trim();


                const lines =
                    rfq
                        .map(
                            item =>
                                `- ${item.name} | ${item.sku} | ${item.qty} ${unitFor(item)} | Rp ${money(item.qty * item.price)}`
                        )
                        .join('\n');


                const total =
                    rfq.reduce(
                        (sum, item) =>
                            sum +
                            (
                                (Number(item.qty) || 0) *
                                (Number(item.price) || 0)
                            ),
                        0
                    );


                return `Halo Sinar Jaya,

Saya ingin mengajukan permintaan penawaran (RFQ).

DATA PEMESAN
Nama: ${customer}
Perusahaan: ${company || '-'}
WhatsApp: +62 ${phone}
Tipe Transaksi: ${transaction}

LOKASI PENGIRIMAN
Area: ${area}
Alamat: ${address}
Akses Jalan: ${road}

MATERIAL
${lines || '-'}

Subtotal estimasi: Rp ${money(total)}

CATATAN
${notes || '-'}

Mohon konfirmasi harga final, ketersediaan material, dan estimasi biaya pengiriman.

Terima kasih.`;

            }


            /* ==================================================
               VALIDATION
            ================================================== */

            function validateForm() {

                if (!rfq.length) {

                    toast(
                        'RFQ masih kosong. Kembali ke katalog untuk memilih material.'
                    );

                    return false;

                }


                const form =
                    $('#checkout-form');


                if (!form.reportValidity()) {

                    return false;

                }


                const phone =
                    $(
                        '[name="customer_phone"]'
                    )?.value.replace(
                        /\D/g,
                        ''
                    ) || '';


                if (
                    phone.length < 9 ||
                    phone.length > 13
                ) {

                    toast(
                        'Nomor WhatsApp tidak valid.'
                    );

                    return false;

                }


                return true;

            }


            /* ==================================================
               SEND RFQ
            ================================================== */

            function sendRFQ() {

                if (!validateForm()) {
                    return;
                }


                const message =
                    buildMessage();


                const url =
                    'https://wa.me/' +
                    WA_NUMBER +
                    '?text=' +
                    encodeURIComponent(
                        message
                    );


                window.open(
                    url,
                    '_blank',
                    'noopener,noreferrer'
                );


                toast(
                    'Permintaan RFQ disiapkan di WhatsApp.'
                );

            }


            /* ==================================================
               PRINT DRAFT
            ================================================== */

            function printDraft() {

                if (!rfq.length) {

                    toast(
                        'RFQ masih kosong.'
                    );

                    return;

                }


                const formData =
                    new FormData(
                        $('#checkout-form')
                    );


                const customer =
                    (
                        formData.get(
                            'customer_name'
                        ) || '-'
                    ).toString();


                const company =
                    (
                        formData.get(
                            'company'
                        ) || '-'
                    ).toString();


                const area =
                    (
                        formData.get(
                            'area'
                        ) || '-'
                    ).toString();


                const address =
                    (
                        formData.get(
                            'address'
                        ) || '-'
                    ).toString();


                const rows =
                    rfq
                        .map(
                            item => `
                                <tr>
                                    <td>${esc(item.name)}</td>
                                    <td>${esc(item.sku)}</td>
                                    <td>${item.qty}</td>
                                    <td>${esc(unitFor(item))}</td>
                                    <td>Rp ${money(item.qty * item.price)}</td>
                                </tr>
                            `
                        )
                        .join('');


                const total =
                    rfq.reduce(
                        (sum, item) =>
                            sum +
                            (
                                (Number(item.qty) || 0) *
                                (Number(item.price) || 0)
                            ),
                        0
                    );


                const popup =
                    window.open(
                        '',
                        '_blank'
                    );


                if (!popup) {

                    toast(
                        'Popup diblokir browser. Izinkan popup untuk mencetak.'
                    );

                    return;

                }


                popup.document.write(`
                    <!doctype html>

                    <html>

                    <head>

                        <meta charset="utf-8">

                        <title>
                            Draft RFQ - Sinar Jaya
                        </title>

                        <style>

                            body {
                                font-family: Arial, sans-serif;
                                padding: 32px;
                                color: #111;
                            }

                            h1 {
                                margin: 0 0 4px;
                            }

                            .meta {
                                margin: 18px 0;
                                padding: 14px;
                                border: 1px solid #ddd;
                            }

                            .meta p {
                                margin: 5px 0;
                            }

                            .meta strong {
                                display: inline-block;
                                width: 130px;
                            }

                            table {
                                width: 100%;
                                border-collapse: collapse;
                                margin-top: 20px;
                            }

                            th,
                            td {
                                border: 1px solid #ddd;
                                padding: 9px;
                                text-align: left;
                                font-size: 13px;
                            }

                            th {
                                background: #f4f4f4;
                            }

                            .total {
                                text-align: right;
                                font-size: 18px;
                                font-weight: 700;
                                margin-top: 16px;
                            }

                            .note {
                                margin-top: 24px;
                                font-size: 12px;
                                color: #666;
                            }

                        </style>

                    </head>


                    <body>

                        <h1>
                            Sinar Jaya
                        </h1>

                        <p>
                            Draft Permintaan Penawaran Harga (RFQ)
                        </p>


                        <div class="meta">

                            <p>
                                <strong>Nama</strong>
                                ${esc(customer)}
                            </p>

                            <p>
                                <strong>Perusahaan</strong>
                                ${esc(company)}
                            </p>

                            <p>
                                <strong>Area</strong>
                                ${esc(area)}
                            </p>

                            <p>
                                <strong>Alamat</strong>
                                ${esc(address)}
                            </p>

                            <p>
                                <strong>Tanggal</strong>
                                ${new Date().toLocaleDateString('id-ID')}
                            </p>

                        </div>


                        <table>

                            <thead>

                                <tr>

                                    <th>
                                        Produk
                                    </th>

                                    <th>
                                        SKU
                                    </th>

                                    <th>
                                        Qty
                                    </th>

                                    <th>
                                        Satuan
                                    </th>

                                    <th>
                                        Subtotal
                                    </th>

                                </tr>

                            </thead>


                            <tbody>

                                ${rows}

                            </tbody>

                        </table>


                        <div class="total">
                            Subtotal Estimasi:
                            Rp ${money(total)}
                        </div>


                        <p class="note">

                            Draft ini merupakan estimasi prototype.
                            Harga final, stok, pengiriman, dan ketentuan transaksi
                            perlu dikonfirmasi oleh toko.

                        </p>


                        <script>

                            window.onload = function () {
                                window.print();
                            };

                        <\/script>

                    </body>

                    </html>
                `);


                popup.document.close();

            }


            /* ==================================================
               RFQ SEARCH
            ================================================== */

            function searchRFQ(query) {

                const tbody =
                    $('#rfq-table tbody');


                if (!tbody) {
                    return;
                }


                const keyword =
                    query
                        .trim()
                        .toLowerCase();


                if (!keyword) {

                    render();

                    return;

                }


                const matches =
                    rfq.filter(
                        item =>
                            (
                                item.name +
                                ' ' +
                                item.sku
                            )
                            .toLowerCase()
                            .includes(keyword)
                    );


                if (!matches.length) {

                    tbody.innerHTML = `

                        <tr>

                            <td
                                colspan="6"
                                class="py-10 text-center text-on-surface-variant"
                            >

                                <span class="material-symbols-outlined text-4xl text-outline">
                                    search_off
                                </span>

                                <p class="mt-2">
                                    Material RFQ tidak ditemukan.
                                </p>

                            </td>

                        </tr>

                    `;

                    return;

                }


                tbody.innerHTML =
                    matches.map(item => {

                        const index =
                            rfq.indexOf(item);


                        return `

                            <tr
                                class="hover:bg-surface-container-low/50 transition-colors"
                            >

                                <td class="py-4 px-6">

                                    <div class="font-title-md text-primary font-bold">
                                        ${esc(item.name)}
                                    </div>

                                    <div class="text-body-sm text-outline">
                                        SKU: ${esc(item.sku)}
                                    </div>

                                </td>


                                <td class="py-4 px-4">
                                    Rp ${money(item.price)}
                                </td>


                                <td class="py-4 px-4 text-center">

                                    ${item.qty}

                                </td>


                                <td class="py-4 px-4">

                                    ${esc(unitFor(item))}

                                </td>


                                <td class="py-4 px-6 text-right font-bold">

                                    Rp ${money(item.qty * item.price)}

                                </td>


                                <td class="py-4 px-4 text-center">

                                    <button
                                        data-rfq-action="remove"
                                        data-index="${index}"
                                        class="p-1.5 text-outline hover:text-error"
                                        title="Hapus"
                                    >

                                        <span class="material-symbols-outlined">
                                            delete
                                        </span>

                                    </button>

                                </td>

                            </tr>

                        `;

                    }).join('');

            }


            /* ==================================================
               DEFAULT BUTTONS
               Only relevant before dynamic render.
            ================================================== */

            $$('#rfq-table [data-default-minus]')
                .forEach((button, rowIndex) => {

                    button.addEventListener(
                        'click',
                        () => {

                            if (rfq[rowIndex]) {

                                changeQuantity(
                                    rowIndex,
                                    -1
                                );

                            }

                        }
                    );

                });


            $$('#rfq-table [data-default-plus]')
                .forEach((button, rowIndex) => {

                    button.addEventListener(
                        'click',
                        () => {

                            if (rfq[rowIndex]) {

                                changeQuantity(
                                    rowIndex,
                                    1
                                );

                            }

                        }
                    );

                });


            /* ==================================================
               CLICK EVENTS
            ================================================== */

            document.addEventListener(
                'click',
                event => {

                    const rfqAction =
                        event.target.closest(
                            '[data-rfq-action]'
                        );


                    if (rfqAction) {

                        const index =
                            Number(
                                rfqAction.dataset.index
                            );


                        const action =
                            rfqAction.dataset.rfqAction;


                        if (action === 'increase') {

                            changeQuantity(
                                index,
                                1
                            );

                        } else if (action === 'decrease') {

                            changeQuantity(
                                index,
                                -1
                            );

                        } else if (action === 'remove') {

                            removeItem(
                                index
                            );

                        }


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


                    if (action === 'back-catalog') {

                        window.location.href =
                            "{{ route('katalog') }}";

                        return;

                    }


                    if (action === 'send-rfq') {

                        sendRFQ();

                        return;

                    }


                    if (action === 'print-draft') {

                        printDraft();

                        return;

                    }


                    if (action === 'scroll-form') {

                        $('#checkout-form')
                            ?.scrollIntoView({
                                behavior: 'smooth',
                                block: 'start'
                            });

                        return;

                    }


                    if (action === 'focus-cart') {

                        $('#rfq-table')
                            ?.scrollIntoView({
                                behavior: 'smooth',
                                block: 'start'
                            });

                        return;

                    }

                }
            );


            /* ==================================================
               QTY INPUT
            ================================================== */

            document.addEventListener(
                'change',
                event => {

                    const target =
                        event.target.closest(
                            '[data-rfq-input]'
                        );


                    if (!target) {
                        return;
                    }


                    setQuantity(
                        Number(
                            target.dataset.rfqInput
                        ),
                        target.value
                    );

                }
            );


            /* ==================================================
               SEARCH
            ================================================== */

            $('#rfq-search')
                ?.addEventListener(
                    'input',
                    event => {

                        searchRFQ(
                            event.target.value
                        );

                    }
                );


            $('#checkout-search')
                ?.addEventListener(
                    'input',
                    event => {

                        searchRFQ(
                            event.target.value
                        );

                    }
                );


            /* ==================================================
               FORM SUBMIT
            ================================================== */

            $('#checkout-form')
                ?.addEventListener(
                    'submit',
                    event => {

                        event.preventDefault();

                        sendRFQ();

                    }
                );


            /* ==================================================
               KEYBOARD
            ================================================== */

            document.addEventListener(
                'keydown',
                event => {

                    if (
                        event.ctrlKey ||
                        event.metaKey
                    ) {

                        if (
                            event.key.toLowerCase() === 'k'
                        ) {

                            event.preventDefault();

                            $('#rfq-search')
                                ?.focus();

                        }

                    }

                }
            );


            /* ==================================================
               INITIAL RENDER
            ================================================== */

            render();

        })();
    </script>

</body>

</html>