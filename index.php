<?php include 'includes/header.php'; ?>

<!-- Hero Section -->
<section class="hero-section position-relative">
    <img src="assets/img/logo-institusi.png" alt="Logo Institusi" class="hero-logo rounded-pill shadow-sm">
    <div class="container">
        <div class="d-flex flex-column align-items-center justify-content-center text-center">
            <h1><i class="bi bi-book-half"></i> <span data-i18n="hero_title">Pegangan Digital Perpustakaan Museum
                    Brawijaya</span></h1>
            <p class="lead mb-0" data-i18n="hero_subtitle">Perpustakaan Militer Khusus untuk Pendidikan dan Penelitian
            </p>
            <button class="btn btn-hero-flipbook shadow-lg" data-bs-toggle="modal" data-bs-target="#flipbookModal">
                <i class="bi bi-book-fill"></i> <span data-i18n="hero_btn_flipbook">Buka Buku Digital</span>
            </button>
        </div>
    </div>
</section>

<!-- Mobile Sticky Navbar -->
<nav class="rounded rounded-2 navbar navbar-expand-md navbar-light bg-white sticky-top d-md-none shadow-sm">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold text-primary" href="#"><i class="bi bi-book-half"></i> <span
                data-i18n="nav_brand">Pustaka Brawijaya</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileSidebar"
            aria-controls="mobileSidebar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="lang-switch-pill ms-2 d-md-none">
            <span data-lang="id" class="active">ID</span>
            <span data-lang="en">EN</span>
        </div>
    </div>
</nav>

<div class="pt-3 container mb-5">
    <div class="row">
        <!-- Sidebar Navigation (Desktop) -->
        <div class="col-md-3 d-none d-md-block">
            <nav id="handbook-nav" class="sidebar">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="lang-switch-pill">
                        <span data-lang="id" class="active">ID</span>
                        <span data-lang="en">EN</span>
                    </div>
                </div>
                <div class="mb-3">
                    <input type="text" id="sidebarSearch" class="form-control" placeholder="Cari topik..."
                        data-i18n="sidebar_search_placeholder">
                </div>
                <h5 class="mb-3 pb-2 border-bottom" data-i18n="sidebar_toc">Daftar Isi</h5>
                <ul class="nav flex-column" id="navLinks">
                    <li class="nav-item"><a class="nav-link" href="#general-info"><i class="bi bi-info-circle me-2"></i>
                            <span data-i18n="nav_general">Informasi Umum</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="#history"><i class="bi bi-hourglass-split me-2"></i>
                            <span data-i18n="nav_history">Sejarah</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="#location"><i class="bi bi-map me-2"></i> <span
                                data-i18n="nav_location">Lokasi & Denah</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="#virtual-tour"><i class="bi bi-eyeglasses me-2"></i>
                            <span data-i18n="nav_virtual">Orientasi Virtual</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="#vision-mission"><i class="bi bi-bullseye me-2"></i>
                            <span data-i18n="nav_vision">Visi & Misi</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="#organization"><i class="bi bi-diagram-3 me-2"></i>
                            <span data-i18n="nav_org">Organisasi</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="#hours"><i class="bi bi-clock me-2"></i> <span
                                data-i18n="nav_hours">Jam Layanan</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="#rules"><i class="bi bi-clipboard-check me-2"></i>
                            <span data-i18n="nav_rules">Tata Tertib</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="#collections"><i class="bi bi-collection me-2"></i>
                            <span data-i18n="nav_collections">Koleksi</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="#facilities"><i class="bi bi-building me-2"></i>
                            <span data-i18n="nav_facilities">Fasilitas</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="#gallery-carousel"><i class="bi bi-camera me-2"></i>
                            <span data-i18n="nav_gallery">Galeri Foto</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="#services"><i class="bi bi-hdd-network me-2"></i>
                            <span data-i18n="nav_services">Layanan</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact"><i class="bi bi-telephone me-2"></i> <span
                                data-i18n="nav_contact">Kontak</span></a></li>
                    <!-- <li class="nav-item"><a class="nav-link" href="#emergency"><i
                                class="bi bi-exclamation-triangle me-2"></i> <span
                                data-i18n="nav_emergency">Darurat</span></a></li> -->
                </ul>
            </nav>
        </div>

        <!-- Mobile Sidebar (Offcanvas) -->
        <div class="offcanvas offcanvas-start" tabindex="-1" id="mobileSidebar" aria-labelledby="mobileSidebarLabel">
            <div class="offcanvas-header bg-primary text-white">
                <h5 class="offcanvas-title" id="mobileSidebarLabel" data-i18n="mobile_menu_title">Menu Panduan</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <!-- Same content as sidebar, copied via JS or just duplicated for simplicity in PHP -->
                <ul class="nav flex-column" id="mobileNavLinks">
                    <li class="nav-item"><a class="nav-link" href="#general-info" data-i18n="nav_general">Informasi
                            Umum</a></li>
                    <li class="nav-item"><a class="nav-link" href="#history" data-i18n="nav_history">Sejarah</a></li>
                    <li class="nav-item"><a class="nav-link" href="#location" data-i18n="nav_location">Lokasi &
                            Denah</a></li>
                    <li class="nav-item"><a class="nav-link" href="#virtual-tour" data-i18n="nav_virtual">Orientasi
                            Virtual</a></li>
                    <li class="nav-item"><a class="nav-link" href="#vision-mission" data-i18n="nav_vision">Visi &
                            Misi</a></li>
                    <li class="nav-item"><a class="nav-link" href="#organization" data-i18n="nav_org">Organisasi</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#hours" data-i18n="nav_hours">Jam Layanan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#rules" data-i18n="nav_rules">Tata Tertib</a></li>
                    <li class="nav-item"><a class="nav-link" href="#collections" data-i18n="nav_collections">Koleksi</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#facilities" data-i18n="nav_facilities">Fasilitas</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#gallery-carousel" data-i18n="nav_gallery">Galeri
                            Foto</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services" data-i18n="nav_services">Layanan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact" data-i18n="nav_contact">Kontak</a></li>
                    <li class="nav-item"><a class="nav-link" href="#emergency" data-i18n="nav_emergency">Darurat</a>
                    </li>
                </ul>
                <div class="mt-3">
                    <small class="text-muted" data-i18n="mobile_menu_hint">Gunakan menu desktop untuk daftar isi
                        lengkap.</small>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="col-md-9">

            <!-- General Information -->
            <section id="general-info" class="content-section pt-0">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2 class="mb-0"><i class="bi bi-info-circle-fill text-primary"></i> <span
                            data-i18n="section_general">Informasi Umum</span></h2>
                    <button class="btn-read-aloud btn btn-sm btn-outline-primary rounded-circle shadow-sm"
                        data-target="#general-info-content" aria-label="Baca Teks">
                        <i class="bi bi-volume-up-fill"></i>
                    </button>
                </div>
                <div id="general-info-content">
                    <p data-i18n="gen_desc">Perpustakaan Museum Brawijaya adalah tempat yang menyimpan koleksi buku dan
                        dokumen sejarah perjuangan TNI dan karya umum lainnya, serta referensi terkait pengabdian
                        terhadap negara. Perpustakaan ini dapat diakses oleh pengunjung yang ingin menambah pengetahuan
                        tentang sejarah militer Indonesia, dan sering digunakan sebagai sarana penelitian ilmiah serta
                        edukasi.</p>
                    <div class="alert alert-info shadow-sm">
                        <i class="bi bi-shield-lock-fill me-2"></i> <strong data-i18n="gen_note_label">Catatan:</strong>
                        <span data-i18n="gen_note_text">Dapat diakses oleh pengunjung yang tertarik untuk menambah
                            pengetahuan tentang sejarah militer Indonesia.</span>
                    </div>
                </div>
            </section>

            <!-- History Section -->
            <section id="history" class="content-section">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2 class="mb-0"><i class="bi bi-hourglass-split text-primary"></i> <span
                            data-i18n="section_history">Sejarah Perpustakaan</span></h2>
                    <button class="btn-read-aloud btn btn-sm btn-outline-primary rounded-circle shadow-sm"
                        data-target="#history-content" aria-label="Baca Teks">
                        <i class="bi bi-volume-up-fill"></i>
                    </button>
                </div>
                <div class="row align-items-center" id="history-content">
                    <div class="col-md-4 mb-3">
                        <img src="assets/img/foto-sejarah.jpg" alt="Foto Penyarahan Koleksi Pustaka"
                            class="img-fluid rounded shadow-sm">
                        <p class="fst-italic text-center" data-i18n="hist_img_caption">Foto Penyerahan Koleksi Pustaka
                        </p>
                    </div>
                    <div class="col-md-8">
                        <p data-i18n="hist_p1">Perpustakaan Museum Brawijaya didirikan seiring dengan peresmian Museum
                            Brawijaya pada tanggal 4 Mei 1968 oleh Kolonel Pur. Dr. Soewondo. Perpustakaan ini mempunyai
                            koleksi asli dari penyerahan peninggalan era kolonial Belanda pada tahun 1950. Awalnya,
                            perpustakaan ini berfungsi sebagai tempat penyimpanan arsip-arsip penting pada umumnya
                            terkait dengan perjuangan TNI AD dan Khususnya Kodam V Brawijaya.</p>
                        <p data-i18n="hist_p2">Seiring berjalannya waktu, perpustakaan ini berkembang menjadi pusat
                            referensi sejarah militer yang melayani tidak hanya anggota TNI, tetapi juga akademisi dan
                            peneliti yang ingin mendalami sejarah perjuangan kemerdekaan Indonesia, khususnya di Jawa
                            Timur.</p>
                    </div>
                </div>
            </section>

            <!-- Location & Floor Plan -->
            <section id="location" class="content-section">
                <h2 class="mb-4"><i class="bi bi-map-fill text-primary"></i> <span data-i18n="section_location">Lokasi &
                        Denah</span></h2>
                <div class="row align-items-center">
                    <div class="col-lg-7 mb-3">
                        <div class="p-2 border rounded bg-white shadow-sm">
                            <img src="assets/img/denah-perpus-brawijaya.png" alt="Denah Lantai"
                                class="img-fluid rounded">
                            <p class="text-center text-muted small mt-2 fst-italic" data-i18n="loc_img_caption">Denah
                                Lantai Perpustakaan</p>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="card h-100 border-0 shadow-sm bg-light">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h5 class="card-title text-primary mb-0" data-i18n="loc_zone_title">Panduan Zona
                                    </h5>
                                    <button
                                        class="btn-read-aloud btn btn-sm btn-outline-primary rounded-circle shadow-sm"
                                        data-target="#location-zones" aria-label="Baca Teks">
                                        <i class="bi bi-volume-up-fill"></i>
                                    </button>
                                </div>
                                <ul class="list-group list-group-flush bg-transparent" id="location-zones">
                                    <li class="list-group-item bg-transparent"><span
                                            class="badge bg-primary me-2">A</span> <strong data-i18n="loc_zone_a">Pintu
                                            Masuk:</strong> <span data-i18n="loc_zone_a_desc">Pintu kamu memasuki
                                            ruangan perpustakaan</span></li>
                                    <li class="list-group-item bg-transparent"><span
                                            class="badge bg-success me-2">B</span> <strong
                                            data-i18n="loc_zone_b">Presensi Pengunjung</strong> <span
                                            data-i18n="loc_zone_b_desc">Pengunjung yang datang akan disambut dan dibantu
                                            untuk diarahkan</span></li>
                                    <li class="list-group-item bg-transparent"><span
                                            class="badge bg-info text-dark me-2">C</span> <strong
                                            data-i18n="loc_zone_c">Ruang Baca:</strong> <span
                                            data-i18n="loc_zone_c_desc">Area tenang untuk studi.</span></li>
                                    <li class="list-group-item bg-transparent"><span
                                            class="badge bg-warning text-dark me-2">D</span> <strong
                                            data-i18n="loc_zone_d">Koleksi Referensi:</strong> <span
                                            data-i18n="loc_zone_d_desc">Buku langka dan kamus.</span></li>
                                    <li class="list-group-item bg-transparent"><span
                                            class="badge bg-danger me-2">E</span> <strong data-i18n="loc_zone_e">Pintu
                                            Darurat:</strong> <span data-i18n="loc_zone_e_desc">Jalur evakuasi.</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Virtual Orientation (360 Tour) -->
            <section id="virtual-tour" class="content-section">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2 class="mb-0"><i class="bi bi-eyeglasses text-primary"></i> <span
                            data-i18n="section_virtual">Orientasi Ruangan Virtual</span></h2>
                    <button class="btn-read-aloud btn btn-sm btn-outline-primary rounded-circle shadow-sm"
                        data-target="#virtual-desc" aria-label="Baca Teks">
                        <i class="bi bi-volume-up-fill"></i>
                    </button>
                </div>
                <p id="virtual-desc" data-i18n="virt_desc">Perpustakaan ini menyediakan berbagai fasilitas untuk
                    mendukung kenyamanan dan kebutuhan pemustaka. Fasilitas tersebut meliputi layanan presensi
                    pengunjung yang digunakan sebagai sarana pencatatan kehadiran sebelum pemustaka memulai kunjungan.
                    Selain itu, tersedia area rak koleksi yang memuat beragam jenis bahan pustaka, yaitu koleksi buku
                    bacaan umum sebanyak 4.457 eksemplar, koleksi referensi sebanyak 680 eksemplar, koleksi
                    dokumentasi dan arsip sebanyak 1.975 eksemplar, buletin dan majalah sebanyak 3.102 eksemplar,
                    kliping sebanyak 11 berkas, serta surat kabar sebanyak 4.166 eksemplar. Perpustakaan ini juga
                    dilengkapi dengan meja baca dan ruang diskusi yang dapat dimanfaatkan oleh pemustaka untuk membaca,
                    belajar, dan berdiskusi secara nyaman. Selain layanan koleksi tercetak, perpustakaan menyediakan
                    layanan koleksi digital, yaitu koleksi yang telah dialihmediakan ke dalam bentuk digital guna
                    memudahkan akses informasi bagi pemustaka.
                </p>

                <div id="panorama"></div>
                <div class="text-center mt-2 small text-muted">
                    <i class="bi bi-mouse"></i> <span data-i18n="virt_hint">Klik dan geser untuk melihat
                        sekeliling.</span>
                </div>
            </section>

            <!-- Vision, Mission & Objectives -->
            <section id="vision-mission" class="content-section">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2 class="mb-0"><i class="bi bi-bullseye text-primary"></i> <span data-i18n="section_vision">Visi,
                            Misi & Tujuan</span></h2>
                    <button class="btn-read-aloud btn btn-sm btn-outline-primary rounded-circle shadow-sm"
                        data-target="#vis-mis-content" aria-label="Baca Teks">
                        <i class="bi bi-volume-up-fill"></i>
                    </button>
                </div>
                <div id="vis-mis-content">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card mb-3 h-100">
                                <div class="card-body">
                                    <h4 class="card-title"><i class="bi bi-eye me-2"></i> <span
                                            data-i18n="vis_title">Visi</span></h4>
                                    <p class="card-text" data-i18n="vis_text">"Meningkatkan Keimanan dan ketagwaan
                                        kepada Tuhan Yang
                                        Maha Esa serta fungsi kesejarahan dengan menjunjung tinggi falsafah Ideologi
                                        Pancasila yang dapat menumbuhkan jiwa juang serta cinta
                                        tanah air."</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mb-3 h-100">
                                <div class="card-body">
                                    <h4 class="card-title"><i class="bi bi-list-check me-2"></i> <span
                                            data-i18n="mis_title">Misi</span></h4>
                                    <p class="card-text" data-i18n="mis_text">"Agar pelaksanaan fungsi dan tugas
                                        kegiatan pembinaan mental rohani, mental ideologi dan mental kejuangan serta
                                        fungsi sejarah dapat terlaksana dengan baik dan maksimal."</p>
                                    <!-- <ul class="list-unstyled">
                                        <li><i class="bi bi-check2 text-success me-2"></i> <span
                                                data-i18n="mis_1">Mengumpulkan dokumen sejarah militer.</span></li>
                                        <li><i class="bi bi-check2 text-success me-2"></i> <span
                                                data-i18n="mis_2">Memfasilitasi penelitian akademik.</span></li>
                                        <li><i class="bi bi-check2 text-success me-2"></i> <span
                                                data-i18n="mis_3">Mengedukasi masyarakat tentang sejarah militer.</span>
                                        </li>
                                    </ul> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-3">
                        <div class="card-body">
                            <h4 class="card-title"><i class="bi bi-flag me-2"></i> <span data-i18n="obj_title">Tujuan
                                    Perpustakaan</span></h4>
                            <p class="card-text" data-i18n="obj_text">Mendukung kebutuhan pendidikan dan penelitian
                                komunitas militer dan akademik dengan menyediakan sumber daya sejarah berkualitas
                                tinggi.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Organization -->
            <section id="organization" class="content-section">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2 class="mb-0"><i class="bi bi-diagram-3-fill text-primary"></i> <span
                            data-i18n="section_org">Organisasi & Manajemen</span></h2>
                    <button class="btn-read-aloud btn btn-sm btn-outline-primary rounded-circle shadow-sm"
                        data-target="#org-content" aria-label="Baca Teks">
                        <i class="bi bi-volume-up-fill"></i>
                    </button>
                </div>

                <div id="org-content">
                    <h4 class="mb-3" data-i18n="org_struct_title">Struktur Organisasi</h4>
                    <p data-i18n="org_struct_desc">Struktur organisasi Perpustakaan Museum Brawijaya dirancang untuk
                        memastikan pengelolaan koleksi dan pelayanan pengguna berjalan efektif. Di bawah naungan
                        Kabintaljarahdam V/Brawijaya, perpustakaan dipimpin oleh seorang Kepala Perpustakaan yang
                        membawahi bagian layanan teknis dan layanan pemustaka.</p>

                    <div class="p-4 bg-light text-center border rounded mb-4 shadow-sm">
                        <img src="assets/img/struktur-organisasi.jpeg" alt="Struktur Organisasi"
                            class="img-fluid rounded">
                        <p class="text-muted mt-2 small"><em data-i18n="org_chart_caption">Bagan Struktur Organisasi
                                Perpustakaan Museum Brawijaya</em></p>
                    </div>


            </section>

            <!-- Hours -->
            <section id="hours" class="content-section">
                <h2 class="mb-4"><i class="bi bi-clock-fill text-primary"></i> <span data-i18n="section_hours">Jam
                        Operasional</span></h2>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card h-100">
                            <div class="card-header bg-secondary text-white"><i class="bi bi-door-open me-2"></i> <span
                                    data-i18n="hours_open_title">Jam Buka Perpustakaan</span></div>
                            <div class="card-body">
                                <ul class="list-unstyled">
                                    <li class="d-flex justify-content-between border-bottom py-2">
                                        <span><i class="bi bi-calendar-check me-2"></i><strong
                                                data-i18n="hours_mon_thu">Senin - Kamis</strong></span>
                                        <span class="badge bg-success">08:00 - 15:00 WIB</span>
                                    </li>
                                    <li class="d-flex justify-content-between border-bottom py-2">
                                        <span><i class="bi bi-calendar-check me-2"></i><strong
                                                data-i18n="hours_fri">Jumat</strong></span>
                                        <span class="badge bg-success">08:00 - 11:00 WIB</span>
                                    </li>
                                    <li class="d-flex justify-content-between border-bottom py-2">
                                        <span><i class="bi bi-calendar-x me-2"></i><strong
                                                data-i18n="hours_sat_sun">Sabtu - Minggu</strong></span>
                                        <span class="badge bg-danger" data-i18n="hours_libur">Libur</span>
                                    </li>
                                    <li class="d-flex justify-content-between py-2">
                                        <span><i class="bi bi-calendar-event me-2"></i><strong
                                                data-i18n="hours_holiday">Hari Libur Nasional</strong></span>
                                        <span class="badge bg-danger" data-i18n="hours_closed">Tutup</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card h-100">
                            <div class="card-header bg-secondary text-white"><i class="bi bi-headset me-2"></i> <span
                                    data-i18n="hours_service_title">Jam Layanan</span></div>
                            <div class="card-body">
                                <p class="card-text" data-i18n="hours_service_text">Layanan administrasi dan referensi
                                    tersedia selama jam buka perpustakaan.</p>
                                <div class="alert alert-warning mb-0 small">
                                    <i class="bi bi-exclamation-circle me-1"></i> <span data-i18n="hours_note">Jam dapat
                                        berubah sewaktu-waktu selama latihan militer.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Rules & Regulations (Accordion) -->
            <section id="rules" class="content-section">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2 class="mb-0"><i class="bi bi-clipboard-check-fill text-primary"></i> <span
                            data-i18n="section_rules">Tata Tertib & Peraturan</span></h2>
                    <button class="btn-read-aloud btn btn-sm btn-outline-primary rounded-circle shadow-sm"
                        data-target="#rules-content" aria-label="Baca Teks">
                        <i class="bi bi-volume-up-fill"></i>
                    </button>
                </div>

                <div id="rules-content">
                    <div class="card border-0 shadow-sm bg-light">
                        <div class="card-body">
                            <p data-i18n="rules_intro">Tata tertib perpustakaan merupakan susunan peraturan tertulis
                                yang harus ditaati dan dipatuhi oleh pemustaka perpustakaan.</p>
                            <p class="mb-3" data-i18n="rules_sub_intro">Adapun Tata Tertib Perpustakaan Museum Brawijaya
                                Malang yang harus ditaati dan dipatuhi oleh pemustaka yaitu:</p>

                            <ol type="a" class="ps-3 mb-0">
                                <li class="mb-2" data-i18n="rules_a">Pemustaka harus mengisi daftar hadir terlebih
                                    dahulu.</li>
                                <li class="mb-2" data-i18n="rules_b">Setiap pengunjung wajib menjaga ketenangan,
                                    keamanan dan ketertiban.</li>
                                <li class="mb-2" data-i18n="rules_c">Dilarang makan dan minum di perpustakaan.</li>
                                <li class="mb-2" data-i18n="rules_d">Pemustaka dilarang mencoret-coret buku atau gambar
                                    milik perpustakaan.</li>
                                <li class="mb-2" data-i18n="rules_e">Dilarang membawa buku keluar dari perpustakaan
                                    tanpa izin.</li>
                                <li class="mb-2" data-i18n="rules_f">Pemustaka harus menjaga kebersihan buku dan ruang
                                    perpustakaan.</li>
                                <li class="mb-2" data-i18n="rules_g">Setelah selesai membaca, kembalikan buku pada meja
                                    yang telah disediakan.</li>
                                <li class="mb-0" data-i18n="rules_h">Sebelum meninggalkan perpustakaan, cek barang
                                    bawaan. Jangan sampai ada yang tertinggal di perpustakaan.</li>
                            </ol>
                        </div>
                    </div>

            </section>

            <!-- Permission Letter Generator -->
            <!-- <section id="permission-generator" class="content-section">
                <h2 class="mb-4"><i class="bi bi-envelope-paper-fill text-primary"></i> Generator Surat Izin</h2>
                <p>Gunakan alat ini untuk membuat draf surat permohonan izin kunjungan penelitian. Isi formulir di bawah ini dan salin hasilnya.</p>
                
                <div class="row">
                    <div class="col-md-5 mb-4">
                        <div class="card shadow-sm">
                            <div class="card-header bg-primary text-white">Formulir Data Diri</div>
                            <div class="card-body">
                                <form id="letterForm">
                                    <div class="mb-3">
                                        <label class="form-label">Nama Lengkap</label>
                                        <input type="text" class="form-control" id="inputName" placeholder="Contoh: Budi Santoso">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Institusi / Universitas</label>
                                        <input type="text" class="form-control" id="inputInst" placeholder="Contoh: Universitas Brawijaya">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Tujuan Penelitian</label>
                                        <input type="text" class="form-control" id="inputPurpose" placeholder="Contoh: Skripsi Sejarah Militer">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Tanggal Kunjungan</label>
                                        <input type="date" class="form-control" id="inputDate">
                                    </div>
                                    <button type="button" class="btn btn-success w-100" onclick="generateLetter()">Buat Surat</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="card shadow-sm h-100">
                            <div class="card-header bg-secondary text-white d-flex justify-content-between align-items-center">
                                <span>Pratinjau Surat</span>
                                <button class="btn btn-sm btn-light" onclick="copyLetter()"><i class="bi bi-clipboard"></i> Salin Teks</button>
                            </div>
                            <div class="card-body bg-light">
                                <div id="letterPreview" class="letter-preview">
                                    <p>Yth. Kepala Museum Brawijaya,<br>
                                    Di Tempat</p>
                                    
                                    <p>Dengan hormat,</p>
                                    
                                    <p>Saya yang bertanda tangan di bawah ini:</p>
                                    <p>Nama: <strong>[Nama]</strong><br>
                                    Institusi: <strong>[Institusi]</strong></p>
                                    
                                    <p>Bermaksud mengajukan permohonan izin untuk mengunjungi Perpustakaan Museum Brawijaya pada tanggal <strong>[Tanggal]</strong> guna keperluan <strong>[Tujuan]</strong>.</p>
                                    
                                    <p>Demikian permohonan ini saya sampaikan. Atas perhatian dan izin yang diberikan, saya ucapkan terima kasih.</p>
                                    
                                    <p>Hormat saya,<br>
                                    [Nama]</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section> -->

            <!-- Collections -->


            <!-- Collections (Expanded) -->
            <section id="collections" class="content-section">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2 class="mb-0"><i class="bi bi-collection-fill text-primary"></i> <span
                            data-i18n="section_collections">Koleksi & Klasifikasi</span></h2>
                    <button class="btn-read-aloud btn btn-sm btn-outline-primary rounded-circle shadow-sm"
                        data-target="#collections-content" aria-label="Baca Teks">
                        <i class="bi bi-volume-up-fill"></i>
                    </button>
                </div>

                <div id="collections-content">
                    <div class="alert alert-info mb-4">
                        <i class="bi bi-info-circle-fill me-2"></i> <span data-i18n="coll_alert">Perpustakaan
                            menggunakan sistem <strong>Dewey Decimal Classification (DDC)</strong> untuk
                            pengorganisasian koleksi.</span>
                    </div>

                    <h4 class="mb-3" data-i18n="coll_ddc_title">Klasifikasi DDC (Dewey Decimal Classification)</h4>
                    <p data-i18n="coll_ddc_intro">Perpustakaan Museum Brawijaya menggunakan sistem Dewey Decimal
                        Classification (DDC) untuk mengorganisir koleksi. Sistem ini membagi ilmu pengetahuan menjadi 10
                        kelas utama (000-999), memudahkan perpustakaan dalam menyusun buku di rak dan memudahkan
                        pemustaka dalam menemukan kembali informasi yang dibutuhkan.</p>

                    <div class="row g-3 mb-4">
                        <div class="col-md-6">
                            <ul class="list-group shadow-sm">
                                <li class="list-group-item">
                                    <span class="badge bg-primary me-2">000</span> <span
                                        data-i18n="coll_000_title">Karya Umum</span>
                                </li>
                                <li class="list-group-item">
                                    <span class="badge bg-primary me-2">100</span> <span
                                        data-i18n="coll_100_title">Filsafat & Psikologi</span>
                                </li>
                                <li class="list-group-item">
                                    <span class="badge bg-primary me-2">200</span> <span
                                        data-i18n="coll_200_title">Agama</span>
                                </li>
                                <li class="list-group-item">
                                    <span class="badge bg-primary me-2">300</span> <span data-i18n="coll_300_title">Ilmu
                                        Sosial</span>
                                </li>
                                <li class="list-group-item">
                                    <span class="badge bg-primary me-2">400</span> <span
                                        data-i18n="coll_400_title">Bahasa</span>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-group shadow-sm">
                                <li class="list-group-item">
                                    <span class="badge bg-primary me-2">500</span> <span
                                        data-i18n="coll_500_title">Sains</span>
                                </li>
                                <li class="list-group-item">
                                    <span class="badge bg-primary me-2">600</span> <span
                                        data-i18n="coll_600_title">Teknologi</span>
                                </li>
                                <li class="list-group-item">
                                    <span class="badge bg-primary me-2">700</span> <span
                                        data-i18n="coll_700_title">Kesenian & Rekreasi</span>
                                </li>
                                <li class="list-group-item">
                                    <span class="badge bg-primary me-2">800</span> <span
                                        data-i18n="coll_800_title">Kesusastraan</span>
                                </li>
                                <li class="list-group-item">
                                    <span class="badge bg-primary me-2">900</span> <span
                                        data-i18n="coll_900_title">Sejarah & Geografi</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <h4 class="mb-3" data-i18n="coll_types_title">Jenis Koleksi & Ketersediaan</h4>
                    <div class="table-responsive mb-4">
                        <table class="table table-bordered table-hover">
                            <thead class="table-primary">
                                <tr>
                                    <th data-i18n="coll_th_type">Jenis Koleksi</th>
                                    <th data-i18n="coll_th_desc">Deskripsi</th>
                                    <th data-i18n="coll_th_code">Kode</th>
                                    <th data-i18n="coll_th_status">Status Pinjam</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td data-i18n="coll_type_text">Buku Teks</td>
                                    <td data-i18n="coll_desc_text">Buku materi umum dan militer</td>
                                    <td>-</td>
                                    <td><span class="badge bg-danger" data-i18n="coll_status_text_1">Baca di
                                            Tempat</span><span class="badge bg-success"
                                            data-i18n="coll_status_text_2">Boleh Dipinjam (sertai Identitas Diri)</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td data-i18n="coll_type_ref">Referensi</td>
                                    <td data-i18n="coll_desc_ref">Kamus, Ensiklopedia, Peta</td>
                                    <td><strong>R</strong></td>
                                    <td><span class="badge bg-danger" data-i18n="coll_status_ref">Baca di Tempat</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td data-i18n="coll_type_per">Terbitan Berkala</td>
                                    <td data-i18n="coll_desc_per">Majalah, Koran, Jurnal</td>
                                    <td><strong>T</strong></td>
                                    <td><span class="badge bg-danger" data-i18n="coll_status_per">Baca di Tempat</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td data-i18n="coll_type_spec">Koleksi Khusus</td>
                                    <td data-i18n="coll_desc_spec">Dokumen Sejarah, Naskah Kuno</td>
                                    <td><strong>-</strong></td>
                                    <td><span class="badge bg-danger" data-i18n="coll_status_spec">Izin Khusus</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <h4 class="mb-3" data-i18n="coll_label_title">Petunjuk Penggunaan Label Buku</h4>
                    <div class="row align-items-center">
                        <div class="col-md-4 mb-3">
                            <div class="card border-primary">
                                <div class="card-body text-center">
                                    <h6 class="text-muted mb-2" data-i18n="coll_label_example">Contoh Label Punggung
                                    </h6>
                                    <div class="d-inline-block border border-dark p-2 bg-white fw-bold fs-5">
                                        959.8<br>
                                        NAS<br>
                                        s<br>
                                        c.1
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><span class="badge bg-primary me-2">959.8</span> <strong
                                        data-i18n="coll_label_class">Nomor Klasifikasi:</strong> <span
                                        data-i18n="coll_label_class_desc">Menunjukkan subjek buku (Sejarah
                                        Indonesia).</span></li>
                                <li class="list-group-item"><span class="badge bg-secondary me-2">NAS</span> <strong
                                        data-i18n="coll_label_author">Tiga Huruf Pengarang:</strong> <span
                                        data-i18n="coll_label_author_desc">Tiga huruf pertama nama pengarang (A.H.
                                        Nasution).</span></li>
                                <li class="list-group-item"><span class="badge bg-info text-dark me-2">s</span> <strong
                                        data-i18n="coll_label_title_l">Huruf Judul:</strong> <span
                                        data-i18n="coll_label_title_desc">Huruf pertama judul buku (Sekitar Perang
                                        Kemerdekaan).</span></li>
                                <li class="list-group-item"><span class="badge bg-dark me-2">c.1</span> <strong
                                        data-i18n="coll_label_copy">Nomor Eksemplar:</strong> <span
                                        data-i18n="coll_label_copy_desc">Menunjukkan nomor kopi buku tersebut.</span>
                                </li>
                            </ul>
                        </div>
                    </div>
            </section>

            <!-- Facilities -->
            <section id="facilities" class="content-section">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2 class="mb-0"><i class="bi bi-building-fill text-primary"></i> <span
                            data-i18n="section_facilities">Fasilitas Perpustakaan</span></h2>
                    <button class="btn-read-aloud btn btn-sm btn-outline-primary rounded-circle shadow-sm"
                        data-target="#facilities-content" aria-label="Baca Teks">
                        <i class="bi bi-volume-up-fill"></i>
                    </button>
                </div>
                <div class="row g-4" id="facilities-content">

                    <div class="col-md-6">
                        <div class="d-flex align-items-start">
                            <div class="flex-shrink-0">
                                <div class="p-3 bg-primary text-white rounded-circle">
                                    <i class="bi bi-book-half fs-4"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 data-i18n="fac_read_title">Ruang Baca</h5>
                                <p data-i18n="fac_read_desc">Ruang baca perpustakaan museum brawijaya berada di tiga
                                    lokasi, yaitu depan pintu masuk, sebelah kanan pintu masuk dan sebelah kiri
                                    layanan sirkulasi.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-start">
                            <div class="flex-shrink-0">
                                <div class="p-3 bg-success text-white rounded-circle">
                                    <i class="bi bi-people-fill fs-4"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 data-i18n="fac_disc_title">Ruang Diskusi</h5>
                                <p data-i18n="fac_disc_desc">Ruang diskusi Perpustakaan Museum Brawijaya berada di
                                    sebelah kanan pintu masuk, ruang diskusi ini digunakan untuk pemakai dan staf
                                    perpustakan, ruang ini digunakan juga ketika ada kegiatan rapat dari satuan
                                    tersebut.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-start">
                            <div class="flex-shrink-0">
                                <div class="p-3 bg-info text-white rounded-circle">
                                    <i class="bi bi-wifi fs-4"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 data-i18n="fac_wifi_title">Free Wi-Fi</h5>
                                <p data-i18n="fac_wifi_desc">Layanan internet di perpustakaan museum brawijaya
                                    disediakan kepada staf perpustakaan dan pemakai untuk mengakses internet secara
                                    gratis di dalam perpustakaan.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-start">
                            <div class="flex-shrink-0">
                                <div class="p-3 bg-secondary text-white rounded-circle">
                                    <i class="bi bi-badge-wc fs-4"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 data-i18n="fac_wc_title">Toilet</h5>
                                <p data-i18n="fac_wc_desc">Toilet Perpustakaan Museum Brawijaya terletak pada bagian
                                    luar gedung perpustakaan di sebelah gedung aula.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Gallery Carousel -->
            <section id="gallery-carousel" class="content-section">
                <h2 class="mb-4"><i class="bi bi-camera-fill text-primary"></i> <span data-i18n="section_gallery">Galeri
                        Foto</span></h2>
                <div id="carouselExampleCaptions" class="carousel slide shadow rounded overflow-hidden"
                    data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="assets/img/rak-koleksi.jpeg" class="d-block w-100" alt="Rak Koleksi">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 data-i18n="gal_1_title">Rak Koleksi</h5>
                                <p data-i18n="gal_1_desc">Rak koleksi yang teratur dan mudah diakses.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/meja-baca.jpeg" class="d-block w-100" alt="Meja Baca dan Diskusi">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 data-i18n="gal_2_title">Meja Baca dan Diskusi</h5>
                                <p data-i18n="gal_2_desc">Meja baca dan diskusi yang nyaman dan kondusif.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/koleksi-digital.jpeg" class="d-block w-100"
                                alt="Layanan Koleksi Digital">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 data-i18n="gal_3_title">Layanan Koleksi Digital</h5>
                                <p data-i18n="gal_3_desc">Layanan koleksi digital yang dapat diakses di perpustakaan.
                                </p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </section>

            <!-- Services (Detailed) -->
            <section id="services" class="content-section">
                <h2 class="mb-4"><i class="bi bi-hdd-network-fill text-primary"></i> <span
                        data-i18n="section_services">Layanan Perpustakaan</span></h2>

                <!-- Tabs for Services -->
                <ul class="nav nav-tabs mb-4" id="serviceTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="sirkulasi-tab" data-bs-toggle="tab"
                            data-bs-target="#sirkulasi" type="button" role="tab"><i
                                class="bi bi-arrow-left-right me-2"></i><span data-i18n="serv_tab_circ">Layanan
                                Sirkulasi</span></button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="referensi-tab" data-bs-toggle="tab" data-bs-target="#referensi"
                            type="button" role="tab"><i class="bi bi-search me-2"></i><span
                                data-i18n="serv_tab_ref">Layanan Referensi</span></button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="edukasi-tab" data-bs-toggle="tab" data-bs-target="#edukasi"
                            type="button" role="tab"><i class="bi bi-mortarboard me-2"></i><span
                                data-i18n="serv_tab_edu">Pendidikan Pemakai</span></button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="baca-tab" data-bs-toggle="tab" data-bs-target="#baca" type="button"
                            role="tab"><i class="bi bi-book-half me-2"></i><span data-i18n="serv_tab_read">Baca di
                                Tempat</span></button>
                    </li>
                </ul>

                <div class="tab-content" id="serviceTabsContent">

                    <!-- Sirkulasi -->

                    <div class="tab-pane fade show active" id="sirkulasi" role="tabpanel">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h5 class="text-primary mb-0" data-i18n="serv_circ_title">Layanan Sirkulasi</h5>
                            <button class="btn-read-aloud btn btn-sm btn-outline-primary rounded-circle shadow-sm"
                                data-target="#sirkulasi" aria-label="Baca Teks">
                                <i class="bi bi-volume-up-fill"></i>
                            </button>
                        </div>
                        <p data-i18n="serv_circ_process" class="mb-4">Pada layanan sirkulasi, terdapat proses untuk
                            pencarian koleksi, peminjaman, dan pengembalian. Pemustaka melakukan absensi terlebih
                            dahulu, kemudian mencari koleksi di rak. Koleksi dapat dibaca di tempat atau dipinjam
                            (khusus koleksi umum/referensi) melalui meja sirkulasi.</p>

                        <div class="row g-4">
                            <!-- Peminjaman -->
                            <div class="col-md-6">
                                <div class="card h-100 border-0 shadow-sm bg-light">
                                    <div class="card-body">
                                        <h6 class="card-title text-success mb-3"><i
                                                class="bi bi-journal-plus me-2"></i><span
                                                data-i18n="serv_circ_borrow_title">1. Peminjaman</span></h6>

                                        <small class="fw-bold d-block mb-1 text-uppercase"
                                            data-i18n="serv_cond_label">Syarat:</small>
                                        <ul class="small mb-3 ps-3">
                                            <li data-i18n="serv_borrow_cond_a">Koleksi umum & referensi (Sejarah kuno
                                                hanya baca di tempat).</li>
                                            <li data-i18n="serv_borrow_cond_b">Jaminan: KTP atau KTM.</li>
                                            <li data-i18n="serv_borrow_cond_c">Gratis biaya peminjaman.</li>
                                            <li data-i18n="serv_borrow_cond_d">Durasi: 14 hari + perpanjangan 7 hari.
                                            </li>
                                            <li data-i18n="serv_borrow_cond_e">Maksimal 2 buku.</li>
                                        </ul>

                                        <small class="fw-bold d-block mb-1 text-uppercase"
                                            data-i18n="serv_proc_label">Prosedur:</small>
                                        <ul class="small mb-0 ps-3">
                                            <li data-i18n="serv_borrow_proc_a">Isi buku presensi.</li>
                                            <li data-i18n="serv_borrow_proc_b">Pilih koleksi yg bisa dipinjam.</li>
                                            <li data-i18n="serv_borrow_proc_e">Kembalikan pinjaman sebelumnya jika ada.
                                            </li>
                                            <li data-i18n="serv_borrow_proc_f">Serahkan buku & jaminan (KTP/KTM).</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Pengembalian -->
                            <div class="col-md-6">
                                <div class="card h-100 border-0 shadow-sm bg-light">
                                    <div class="card-body">
                                        <h6 class="card-title text-danger mb-3"><i
                                                class="bi bi-journal-minus me-2"></i><span
                                                data-i18n="serv_circ_return_title">2. Pengembalian</span></h6>

                                        <small class="fw-bold d-block mb-1 text-uppercase"
                                            data-i18n="serv_cond_label">Syarat:</small>
                                        <ul class="small mb-3 ps-3">
                                            <li data-i18n="serv_return_cond_a">Harus dikembalikan sendiri (tidak
                                                diwakilkan).</li>
                                            <li data-i18n="serv_return_cond_b">Tepat waktu (maksimal 14 hari).</li>
                                            <li data-i18n="serv_return_cond_d">Keterlambatan tidak dikenakan denda.</li>
                                        </ul>

                                        <small class="fw-bold d-block mb-1 text-uppercase"
                                            data-i18n="serv_proc_label">Prosedur:</small>
                                        <ul class="small mb-0 ps-3">
                                            <li data-i18n="serv_return_proc_a">Serahkan buku ke pustakawan.</li>
                                            <li data-i18n="serv_return_proc_b">Konfirmasi data diri & ambil jaminan.
                                            </li>
                                            <li data-i18n="serv_return_proc_d">Konfirmasi perpanjangan jika perlu.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Referensi -->
                    <div class="tab-pane fade" id="referensi" role="tabpanel">
                        <div class="row align-items-center">
                            <div class="">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <h5 class="text-primary mb-0" data-i18n="serv_ref_title">Layanan Referensi</h5>
                                    <button
                                        class="btn-read-aloud btn btn-sm btn-outline-primary rounded-circle shadow-sm"
                                        data-target="#referensi" aria-label="Baca Teks">
                                        <i class="bi bi-volume-up-fill"></i>
                                    </button>
                                </div>
                                <p data-i18n="serv_ref_desc">Layanan referensi merupakan layanan khusus yang melayani
                                    atau menyajikan koleksi referensi kepada pemakai. Koleksi layanan referensi di
                                    Perpustakaan Museum Brawijaya berupa skripsi dari berbagai universitas yang membahas
                                    tentang sejarah perjuangan di Indonesia, kamus militer, ensiklopedia militer,
                                    almanak, direktori, peta dan buku tahunan militer. Kegiatan pada layanan referensi
                                    yang diberikan kepada pemustaka berupa pendampingan untuk kepentingan studi dan
                                    riset. Staf perpustakaan memberikan arahan kepada siswa, mahasiswa, dosen, dan
                                    personil satuan yang akan melakukan penelitian, untuk memberikan sumber-sumber
                                    referensi yang sesuai topik yang telah dipilih.</p>
                                <h6 data-i18n="serv_ref_proc">Proses Layanan Referensi</h6>
                                <p data-i18n="serv_ref_process_desc">Pada layanan referensi, terdapat proses untuk
                                    mendapatkan pendampingan studi dan riset. Pemustaka melakukan absensi terlebih
                                    dahulu, kemudian mengonfirmasi kepada staf perpustakaan untuk diberikan pendampingan
                                    pencarian koleksi dan pendampingan berupa sumber-sumber informasi non koleksi.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Pendidikan Pemakai -->
                    <div class="tab-pane fade" id="edukasi" role="tabpanel">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h5 class="text-primary mb-0" data-i18n="serv_edu_title">Layanan Pendidikan Pemakai</h5>
                            <button class="btn-read-aloud btn btn-sm btn-outline-primary rounded-circle shadow-sm"
                                data-target="#edukasi" aria-label="Baca Teks">
                                <i class="bi bi-volume-up-fill"></i>
                            </button>
                        </div>
                        <p data-i18n="serv_edu_desc">Layanan pendidikan pemakai merupakan layanan yang diberikan oleh
                            perpustakaan kepada pemustaka dalam memanfaatkan perpustakaan. Kegiatan pendidikan pemakai
                            dalam Perpustakaan Museum Brawijaya Malang melayani pemustaka mengenahi informasi
                            perpustakaan secara keseluruhan. Layanan pendidikan pemakai di Perpustakaan Museum Brawijaya
                            Malang menggunakan metode ceramah dengan rata-rata waktu 15 menit.</p>

                        <h6 data-i18n="serv_edu_proc">Proses Layanan Pendidikan Pemakai</h6>
                        <p data-i18n="serv_edu_process_desc">Pada layanan pendidikan pemakai, terdapat proses untuk
                            mendapatkan informasi tentang perpustakaan melalui bimbingan yang dilakukan oleh staf
                            perpustakaan. Pemustaka melakukan absensi terlebih dahulu, kemudian pemustaka menuju tempat
                            yang sudah disediakan untuk diberikan bimbingan oleh staf perpustakaan mengenahi informasi
                            perpustakaan, adapun materi yang disampaikan oleh staf perpustakaan dalam pendidikan pemakai
                            yaitu: sejarah perpustakaan, koleksi, layanan, fasilitas, dan informasi lainya.</p>
                    </div>

                    <!-- Baca di Tempat -->
                    <div class="tab-pane fade" id="baca" role="tabpanel">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h5 class="text-primary mb-0" data-i18n="serv_read_title">Layanan Baca di Tempat</h5>
                            <button class="btn-read-aloud btn btn-sm btn-outline-primary rounded-circle shadow-sm"
                                data-target="#baca" aria-label="Baca Teks">
                                <i class="bi bi-volume-up-fill"></i>
                            </button>
                        </div>
                        <p data-i18n="serv_read_desc">Layanan baca ditempat merupakan layanan yang diberikan untuk
                            pemustaka agar dapat memanfaatkan koleksi yang ada untuk dibaca di area perpustakaan.
                            Perpustakaan menjamin kenyamanan pemustaka dengan menyediakan area baca, meja dan kursi
                            baca. Layanan baca di tempat yang disediakan kepada pemustaka untuk melakukan kegiatan
                            membaca di perpustakaan guna mengantisipasi pemustaka yang tidak ingin meminjam untuk dibawa
                            pulang. Perpustakaan Museum Brawijaya Malang menyediakan layanan baca ditempat menyesuaikan
                            jam buka layanan Perpustakaan. Layanan baca ditempat terletak sebelah kiri dan kanan pintu
                            masuk.</p>

                        <h6 data-i18n="serv_read_proc">Proses Layanan Baca ditempat</h6>
                        <p data-i18n="serv_read_process_desc">Pada layanan baca ditempat, terdapat proses memanfaatkan
                            koleksi untuk dibaca di area perpustakaan. Pemustaka melakukan absensi terlebih dahulu,
                            kemudian menuju rak koleksi yang sudah dikelompokkan sesuai dengan jenis koleksi, setelah
                            mendapatkan koleksi, pemustaka menuju tempat yang sudah disediakan yaitu berada disebelah
                            kiri layanan sirkulasi dan sebelah kanan ruang diskusi.</p>
                    </div>
                </div>
            </section>

            <!-- Contact -->
            <section id="contact" class="content-section">
                <h2 class="mb-4"><i class="bi bi-telephone-fill text-primary"></i> <span
                        data-i18n="section_contact">Kontak Kami</span></h2>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div class="p-4 border rounded bg-white shadow-sm h-100 text-center">
                            <i class="bi bi-geo-alt fs-1 text-primary mb-3"></i>
                            <h5 data-i18n="cont_addr_title">Alamat</h5>
                            <p data-i18n="cont_addr_text">Jl. Ijen No. 25A, Gading Kasri, Kec. Klojen<br>Kota Malang,
                                Jawa Timur 65115</p>
                            <a href="https://maps.app.goo.gl/wxA36AAe2AV71apx9" target="_blank"
                                class="btn btn-outline-primary btn-sm" data-i18n="cont_map_btn">Lihat di Google Maps</a>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="p-4 border rounded bg-white shadow-sm h-100 text-center">
                            <i class="bi bi-telephone fs-1 text-primary mb-3"></i>
                            <h5 data-i18n="cont_hub_title">Hubungi Kami</h5>
                            <p>Nomor +6285100100513</p>
                            <!-- <p>Email: perpustakaan@museumbrawijaya.mil.id<br>Telepon: (0341) 562xxx</p> -->
                            <div class="d-flex gap-2 justify-content-center">
                                <!-- <a href="mailto:perpustakaan@museumbrawijaya.mil.id" class="btn btn-primary btn-sm"><i
                                        class="bi bi-envelope-fill"></i> <span data-i18n="cont_email_btn">Kirim
                                        Email</span></a> -->
                                <a href="tel:+6285100100513" class="btn btn-outline-primary btn-sm"><i
                                        class="bi bi-telephone-fill"></i> <span
                                        data-i18n="cont_call_btn">Telepon</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Emergency -->


        </div>
    </div>
</div>

</div>

<!-- Gallery Modal -->
<div class="modal fade" id="galleryModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="galleryModalTitle">Judul Fasilitas</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img src="" id="galleryModalImg" class="img-fluid rounded mb-3 w-100" alt="Fasilitas">
                <div class="alert alert-light border-start border-4 border-primary bg-light">
                    <h6 class="alert-heading"><i class="bi bi-info-circle-fill text-primary"></i> <span
                            data-i18n="modal_guide_title">Panduan Penggunaan:</span></h6>
                    <p class="mb-0" id="galleryModalDesc">Deskripsi penggunaan fasilitas.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Simple Search Filter for Sidebar
    document.getElementById('sidebarSearch').addEventListener('keyup', function () {
        let filter = this.value.toLowerCase();
        let navLinks = document.getElementById('navLinks').getElementsByTagName('li');

        for (let i = 0; i < navLinks.length; i++) {
            let a = navLinks[i].getElementsByTagName('a')[0];
            let txtValue = a.textContent || a.innerText;
            if (txtValue.toLowerCase().indexOf(filter) > -1) {
                navLinks[i].style.display = "";
            } else {
                navLinks[i].style.display = "none";
            }
        }
    });

    // Mobile Menu Handling
    document.addEventListener('DOMContentLoaded', function () {
        // Select all links in the mobile menu
        const mobileLinks = document.querySelectorAll('#mobileNavLinks .nav-link');
        const mobileSidebar = document.getElementById('mobileSidebar');
        const bsOffcanvas = new bootstrap.Offcanvas(mobileSidebar);

        mobileLinks.forEach(link => {
            link.addEventListener('click', function (e) {
                // Allow default behavior (navigation) to happen
                // But manually close the offcanvas

                // Check if the offcanvas is currently shown before trying to hide it
                if (mobileSidebar.classList.contains('show')) {
                    // We use the static method or the instance we created. 
                    // To be safe with Bootstrap 5, getting the instance associated with the element is best.
                    const offcanvasInstance = bootstrap.Offcanvas.getInstance(mobileSidebar);
                    if (offcanvasInstance) {
                        offcanvasInstance.hide();
                    }
                }
            });
        });
    });

    // Initialize Pannellum 360 Viewer
    pannellum.viewer('panorama', {
        "type": "equirectangular",
        "panorama": "/assets/img/360-dalam.jpeg", /* Using Pannellum's demo image as a high-quality placeholder */
        "autoLoad": true,
        "hotSpots": [
            {
                "pitch": 1,
                "yaw": -50,
                "type": "info",
                "text": "Pintu Masuk",
            },
            {
                "pitch": -9,
                "yaw": 1,
                "type": "info",
                "text": "Presensi Pengunjung",
                "URL": "#services"
            },
            {
                "pitch": -9.4,
                "yaw": 200,
                "type": "info",
                "text": "Meja Baca dan Diskusi"
            },
            {
                "pitch": -6,
                "yaw": 220,
                "type": "info",
                "text": "Layanan Koleksi Digital"
            },
            {
                "pitch": -0.9,
                "yaw": 100,
                "type": "info",
                "text": "Area Rak Koleksi Pustaka"
            }
        ]
    });

    // Gallery Modal Script
    var galleryModal = document.getElementById('galleryModal');
    galleryModal.addEventListener('show.bs.modal', function (event) {
        var button = event.relatedTarget;
        var title = button.getAttribute('data-title');
        var desc = button.getAttribute('data-desc');
        var img = button.getAttribute('data-img');

        var modalTitle = galleryModal.querySelector('.modal-title');
        var modalDesc = galleryModal.querySelector('#galleryModalDesc');
        var modalImg = galleryModal.querySelector('#galleryModalImg');

        modalTitle.textContent = title;
        modalDesc.textContent = desc;
        modalImg.src = img;
    });


</script>




<!-- Flipbook Modal -->
<div class="modal fade" id="flipbookModal" tabindex="-1" aria-labelledby="flipbookModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" style="max-width: 95vw; height: 90vh;">
        <div class="modal-content h-100 border-0 shadow-lg" style="background-color: #2b3d2b;">
            <div class="modal-header border-bottom border-secondary text-white" style="background-color: #3a4b3a;">
                <h5 class="modal-title text-white" id="flipbookModalLabel"><i class="bi bi-book-half me-2"></i> Buku
                    Digital</h5>
                <div class="d-flex align-items-center">
                    <a href="flipbook.php" target="_blank" class="btn btn-sm btn-outline-warning me-3"
                        data-bs-toggle="tooltip" title="Buka di Tab Baru untuk Tampilan Penuh">
                        <i class="bi bi-box-arrow-up-right me-1"></i> Maximize
                    </a>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
            </div>
            <div class="modal-body p-0 overflow-hidden">
                <iframe src="flipbook.php" style="width: 100%; height: 100%; border: none;" title="Flipbook Viewer"
                    allow="fullscreen"></iframe>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>