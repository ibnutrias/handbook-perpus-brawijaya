<?php include 'includes/header.php'; ?>

<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <h1><i class="bi bi-book-half"></i> Buku Panduan Perpustakaan Museum Brawijaya</h1>
        <p class="lead">Perpustakaan Militer Khusus untuk Pendidikan dan Penelitian</p>
        <div class="d-flex gap-2 justify-content-center flex-wrap">
            <button onclick="window.print()" class="btn btn-outline-light btn-lg mt-3 btn-print">
                <i class="bi bi-printer"></i> Cetak Panduan
            </button>
            <button class="btn btn-warning btn-lg mt-3 d-md-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileSidebar" aria-controls="mobileSidebar">
                <i class="bi bi-list"></i> Menu
            </button>
        </div>
    </div>
</section>

<div class="container mb-5">
    <div class="row">
        <!-- Sidebar Navigation (Desktop) -->
        <div class="col-md-3 d-none d-md-block">
            <nav id="handbook-nav" class="sidebar">
                <div class="mb-3">
                    <input type="text" id="sidebarSearch" class="form-control" placeholder="Cari topik...">
                </div>
                <h5 class="mb-3 pb-2 border-bottom">Daftar Isi</h5>
                <ul class="nav flex-column" id="navLinks">
                    <li class="nav-item"><a class="nav-link" href="#general-info"><i class="bi bi-info-circle me-2"></i> Informasi Umum</a></li>
                    <li class="nav-item"><a class="nav-link" href="#location"><i class="bi bi-map me-2"></i> Lokasi & Denah</a></li>
                    <li class="nav-item"><a class="nav-link" href="#virtual-tour"><i class="bi bi-eyeglasses me-2"></i> Orientasi Virtual</a></li>
                    <li class="nav-item"><a class="nav-link" href="#vision-mission"><i class="bi bi-bullseye me-2"></i> Visi & Misi</a></li>
                    <li class="nav-item"><a class="nav-link" href="#organization"><i class="bi bi-diagram-3 me-2"></i> Organisasi</a></li>
                    <li class="nav-item"><a class="nav-link" href="#hours"><i class="bi bi-clock me-2"></i> Jam Layanan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#rules"><i class="bi bi-clipboard-check me-2"></i> Tata Tertib</a></li>
                    <!-- <li class="nav-item"><a class="nav-link" href="#permission-generator"><i class="bi bi-envelope-paper me-2"></i> Surat Izin</a></li> -->
                    <li class="nav-item"><a class="nav-link" href="#collections"><i class="bi bi-collection me-2"></i> Koleksi</a></li>
                    <li class="nav-item"><a class="nav-link" href="#facilities-guide"><i class="bi bi-images me-2"></i> Panduan Fasilitas</a></li>
                    <li class="nav-item"><a class="nav-link" href="#gallery-carousel"><i class="bi bi-camera me-2"></i> Galeri Foto</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services"><i class="bi bi-hdd-network me-2"></i> Layanan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact"><i class="bi bi-telephone me-2"></i> Kontak</a></li>
                    <li class="nav-item"><a class="nav-link" href="#emergency"><i class="bi bi-exclamation-triangle me-2"></i> Darurat</a></li>
                </ul>
            </nav>
        </div>

        <!-- Mobile Sidebar (Offcanvas) -->
        <div class="offcanvas offcanvas-start" tabindex="-1" id="mobileSidebar" aria-labelledby="mobileSidebarLabel">
            <div class="offcanvas-header bg-primary text-white">
                <h5 class="offcanvas-title" id="mobileSidebarLabel">Menu Panduan</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <!-- Same content as sidebar, copied via JS or just duplicated for simplicity in PHP -->
                <ul class="nav flex-column">
                     <li class="nav-item"><a class="nav-link" href="#general-info" data-bs-dismiss="offcanvas">Informasi Umum</a></li>
                     <li class="nav-item"><a class="nav-link" href="#location" data-bs-dismiss="offcanvas">Lokasi & Denah</a></li>
                     <li class="nav-item"><a class="nav-link" href="#virtual-tour" data-bs-dismiss="offcanvas">Orientasi Virtual</a></li>
                     <!-- <li class="nav-item"><a class="nav-link" href="#permission-generator" data-bs-dismiss="offcanvas">Generator Surat Izin</a></li> -->
                     <li class="nav-item"><a class="nav-link" href="#contact" data-bs-dismiss="offcanvas">Kontak</a></li>
                     <!-- Add other links as needed for mobile quick access -->
                </ul>
                <div class="mt-3">
                    <small class="text-muted">Gunakan menu desktop untuk daftar isi lengkap.</small>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="col-md-9">
            
            <!-- General Information -->
            <section id="general-info" class="content-section pt-0">
                <h2 class="mb-4"><i class="bi bi-info-circle-fill text-primary"></i> Informasi Umum</h2>
                <p>Perpustakaan Museum Brawijaya adalah perpustakaan militer khusus yang didedikasikan untuk melestarikan sejarah dan warisan militer Indonesia. Perpustakaan ini berfungsi sebagai sumber daya vital bagi peneliti, sejarawan, dan personel militer.</p>
                <div class="alert alert-info shadow-sm">
                    <i class="bi bi-shield-lock-fill me-2"></i> <strong>Catatan:</strong> Akses ke perpustakaan ini terbatas untuk tujuan tertentu seperti penelitian akademik, pendidikan militer, dan kepentingan resmi lainnya.
                </div>
            </section>

            <!-- Location & Floor Plan -->
            <section id="location" class="content-section">
                <h2 class="mb-4"><i class="bi bi-map-fill text-primary"></i> Lokasi & Denah</h2>
                <div class="row align-items-center">
                    <div class="col-lg-7 mb-3">
                        <div class="p-2 border rounded bg-white shadow-sm">
                            <img src="https://placehold.co/800x500/f8f9fa/333?text=Denah+Lantai+Perpustakaan" alt="Denah Lantai" class="img-fluid rounded">
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="card h-100 border-0 shadow-sm bg-light">
                            <div class="card-body">
                                <h5 class="card-title text-primary">Panduan Zona</h5>
                                <ul class="list-group list-group-flush bg-transparent">
                                    <li class="list-group-item bg-transparent"><span class="badge bg-primary me-2">A</span> <strong>Pintu Masuk:</strong> Lapor diri dan penitipan barang.</li>
                                    <li class="list-group-item bg-transparent"><span class="badge bg-success me-2">B</span> <strong>Area Sirkulasi:</strong> Peminjaman dan pengembalian.</li>
                                    <li class="list-group-item bg-transparent"><span class="badge bg-info text-dark me-2">C</span> <strong>Ruang Baca:</strong> Area tenang untuk studi.</li>
                                    <li class="list-group-item bg-transparent"><span class="badge bg-warning text-dark me-2">D</span> <strong>Koleksi Referensi:</strong> Buku langka dan kamus.</li>
                                    <li class="list-group-item bg-transparent"><span class="badge bg-danger me-2">E</span> <strong>Pintu Darurat:</strong> Jalur evakuasi.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Virtual Orientation (360 Tour) -->
            <section id="virtual-tour" class="content-section">
                <h2 class="mb-4"><i class="bi bi-eyeglasses text-primary"></i> Orientasi Ruangan Virtual</h2>
                <p>Gunakan tur virtual ini untuk memahami tata letak perpustakaan sebelum kunjungan Anda. Temukan lokasi <strong>Meja Layanan</strong>, <strong>Area Loker</strong>, dan <strong>Ruang Baca</strong>.</p>
                
                <div id="panorama"></div>
                <div class="text-center mt-2 small text-muted">
                    <i class="bi bi-mouse"></i> Klik dan geser untuk melihat sekeliling.
                </div>
            </section>

            <!-- Vision, Mission & Objectives -->
            <section id="vision-mission" class="content-section">
                <h2 class="mb-4"><i class="bi bi-bullseye text-primary"></i> Visi, Misi & Tujuan</h2>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card mb-3 h-100">
                            <div class="card-body">
                                <h4 class="card-title"><i class="bi bi-eye me-2"></i> Visi</h4>
                                <p class="card-text">Menjadi pusat unggulan untuk sejarah dan pendidikan militer, serta melestarikan nilai-nilai perjuangan 1945.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card mb-3 h-100">
                            <div class="card-body">
                                <h4 class="card-title"><i class="bi bi-list-check me-2"></i> Misi</h4>
                                <ul class="list-unstyled">
                                    <li><i class="bi bi-check2 text-success me-2"></i> Mengumpulkan dokumen sejarah militer.</li>
                                    <li><i class="bi bi-check2 text-success me-2"></i> Memfasilitasi penelitian akademik.</li>
                                    <li><i class="bi bi-check2 text-success me-2"></i> Mengedukasi masyarakat tentang sejarah.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="card mt-3">
                    <div class="card-body">
                        <h4 class="card-title"><i class="bi bi-flag me-2"></i> Tujuan Perpustakaan</h4>
                        <p class="card-text">Mendukung kebutuhan pendidikan dan penelitian komunitas militer dan akademik dengan menyediakan sumber daya sejarah berkualitas tinggi.</p>
                    </div>
                </div>
            </section>

            <!-- Organization -->
            <section id="organization" class="content-section">
                <h2 class="mb-4"><i class="bi bi-diagram-3-fill text-primary"></i> Organisasi & Manajemen</h2>
                
                <h4 class="mb-3">Struktur Organisasi</h4>
                <div class="p-4 bg-light text-center border rounded mb-4 shadow-sm">
                    <p class="text-muted">[Placeholder Bagan Struktur Organisasi]</p>
                    <img src="https://placehold.co/600x300/e0e0e0/333?text=Struktur+Organisasi" alt="Struktur Organisasi" class="img-fluid rounded">
                </div>

                <h4 class="mb-3">Direktori Manajemen</h4>
                <div class="table-responsive shadow-sm rounded">
                    <table class="table table-striped table-hover mb-0">
                        <thead class="table-dark">
                            <tr>
                                <th>Jabatan</th>
                                <th>Nama</th>
                                <th>Kontak</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><i class="bi bi-person-badge me-2"></i> Kepala Perpustakaan</td>
                                <td>Mayor [Nama]</td>
                                <td>kepala.lib@brawijaya-museum.mil.id</td>
                            </tr>
                            <tr>
                                <td><i class="bi bi-archive me-2"></i> Arsiparis Senior</td>
                                <td>[Nama]</td>
                                <td>arsip@brawijaya-museum.mil.id</td>
                            </tr>
                            <tr>
                                <td><i class="bi bi-person-workspace me-2"></i> Administrasi</td>
                                <td>[Nama]</td>
                                <td>admin@brawijaya-museum.mil.id</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>

            <!-- Hours -->
            <section id="hours" class="content-section">
                <h2 class="mb-4"><i class="bi bi-clock-fill text-primary"></i> Jam Operasional</h2>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card h-100">
                            <div class="card-header bg-secondary text-white"><i class="bi bi-door-open me-2"></i> Jam Buka Perpustakaan</div>
                            <div class="card-body">
                                <ul class="list-unstyled">
                                    <li class="d-flex justify-content-between border-bottom py-2"><strong>Senin - Kamis:</strong> <span>08:00 - 15:00</span></li>
                                    <li class="d-flex justify-content-between border-bottom py-2"><strong>Jumat:</strong> <span>08:00 - 11:00</span></li>
                                    <li class="d-flex justify-content-between border-bottom py-2"><strong>Sabtu - Minggu:</strong> <span class="text-danger">Tutup</span></li>
                                    <li class="d-flex justify-content-between py-2"><strong>Hari Libur:</strong> <span class="text-danger">Tutup</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card h-100">
                            <div class="card-header bg-secondary text-white"><i class="bi bi-headset me-2"></i> Jam Layanan</div>
                            <div class="card-body">
                                <p class="card-text">Layanan administrasi dan referensi tersedia selama jam buka perpustakaan.</p>
                                <div class="alert alert-warning mb-0 small">
                                    <i class="bi bi-exclamation-circle me-1"></i> Jam dapat berubah sewaktu-waktu selama latihan militer.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Rules & Regulations (Accordion) -->
            <section id="rules" class="content-section">
                <h2 class="mb-4"><i class="bi bi-clipboard-check-fill text-primary"></i> Tata Tertib & Peraturan</h2>
                
                <div class="alert alert-warning border-start border-warning border-4 shadow-sm">
                    <h5 class="alert-heading"><i class="bi bi-shield-lock-fill"></i> Akses Terbatas</h5>
                    <p class="mb-0">Perpustakaan ini TIDAK terbuka untuk umum. Pengunjung harus memiliki tujuan khusus.</p>
                </div>

                <div class="accordion shadow-sm" id="rulesAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <i class="bi bi-person-vcard me-2"></i> 1. Persyaratan Masuk
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#rulesAccordion">
                            <div class="accordion-body">
                                Pengunjung wajib menunjukkan kartu identitas yang sah (KTP/KTA) dan surat pengantar dari institusi (untuk peneliti/mahasiswa). Lapor diri di pos penjagaan museum sebelum menuju perpustakaan.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <i class="bi bi-bag me-2"></i> 2. Barang Bawaan
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#rulesAccordion">
                            <div class="accordion-body">
                                Tas, jaket, dan barang pribadi lainnya wajib disimpan di area loker yang telah disediakan. Hanya alat tulis dan laptop yang diperbolehkan dibawa masuk ke ruang baca.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <i class="bi bi-cup-hot me-2"></i> 3. Makanan & Minuman
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#rulesAccordion">
                            <div class="accordion-body">
                                Dilarang keras membawa makanan dan minuman ke dalam area ruang baca untuk menjaga kebersihan dan keamanan koleksi.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <i class="bi bi-book me-2"></i> 4. Penanganan Koleksi
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#rulesAccordion">
                            <div class="accordion-body">
                                Penanganan naskah kuno atau dokumen rapuh memerlukan penggunaan sarung tangan katun dan harus di bawah pengawasan staf perpustakaan.
                            </div>
                        </div>
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
            <section id="collections" class="content-section">
                <h2 class="mb-4"><i class="bi bi-collection-fill text-primary"></i> Koleksi & Klasifikasi</h2>
                
                <div class="row g-3 mb-4">
                    <div class="col-md-4">
                        <div class="p-4 border rounded text-center bg-light h-100 shadow-sm transition-hover">
                            <i class="bi bi-shield-shaded fs-1 text-primary mb-2"></i>
                            <h3 class="text-primary">355</h3>
                            <p class="mb-0 fw-bold">Ilmu Militer</p>
                            <small class="text-muted">Strategi, Taktik, Sejarah Perang</small>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-4 border rounded text-center bg-light h-100 shadow-sm transition-hover">
                            <i class="bi bi-geo-alt fs-1 text-primary mb-2"></i>
                            <h3 class="text-primary">959.8</h3>
                            <p class="mb-0 fw-bold">Sejarah Indonesia</p>
                            <small class="text-muted">Perjuangan Kemerdekaan, Revolusi</small>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-4 border rounded text-center bg-light h-100 shadow-sm transition-hover">
                            <i class="bi bi-person-lines-fill fs-1 text-primary mb-2"></i>
                            <h3 class="text-primary">920</h3>
                            <p class="mb-0 fw-bold">Biografi</p>
                            <small class="text-muted">Tokoh Pahlawan, Jenderal</small>
                        </div>
                    </div>
                </div>

                <h4 class="mb-3">Simbol Koleksi</h4>
                <table class="table table-sm table-bordered">
                    <thead class="bg-light">
                        <tr>
                            <th style="width: 100px;">Simbol</th>
                            <th>Deskripsi</th>
                            <th>Lokasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center fw-bold bg-primary text-white">R</td>
                            <td>Referensi (Tidak dipinjamkan)</td>
                            <td>Aula Utama, Rak A</td>
                        </tr>
                        <tr>
                            <td class="text-center fw-bold bg-secondary text-white">T</td>
                            <td>Tesis / Disertasi</td>
                            <td>Ruang Arsip</td>
                        </tr>
                        <tr>
                            <td class="text-center fw-bold bg-dark text-white">M</td>
                            <td>Manual Militer</td>
                            <td>Bagian Keamanan</td>
                        </tr>
                    </tbody>
                </table>
            </section>

            <!-- Facilities Guide (Gallery) -->
            <section id="facilities-guide" class="content-section">
                <h2 class="mb-4"><i class="bi bi-images text-primary"></i> Panduan Fasilitas Visual</h2>
                <p>Klik pada gambar untuk melihat instruksi penggunaan fasilitas.</p>
                
                <div class="row g-3">
                    <!-- Gallery Item 1 -->
                    <div class="col-md-4 col-6">
                        <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#galleryModal" data-title="Area Loker" data-desc="Gunakan koin Rp500 untuk mengunci loker. Kunci harap dibawa dan jangan ditinggalkan." data-img="https://placehold.co/600x400/e0e0e0/333?text=Area+Loker">
                            <img src="https://placehold.co/600x400/e0e0e0/333?text=Area+Loker" alt="Loker">
                            <div class="gallery-caption">
                                <h6 class="mb-0">Area Loker</h6>
                                <small>Klik untuk instruksi</small>
                            </div>
                        </div>
                    </div>
                    <!-- Gallery Item 2 -->
                    <div class="col-md-4 col-6">
                        <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#galleryModal" data-title="Ruang Baca Utama" data-desc="Harap menjaga ketenangan. Stopkontak tersedia di setiap meja untuk penggunaan laptop." data-img="https://placehold.co/600x400/e0e0e0/333?text=Ruang+Baca">
                            <img src="https://placehold.co/600x400/e0e0e0/333?text=Ruang+Baca" alt="Ruang Baca">
                            <div class="gallery-caption">
                                <h6 class="mb-0">Ruang Baca</h6>
                                <small>Klik untuk instruksi</small>
                            </div>
                        </div>
                    </div>
                    <!-- Gallery Item 3 -->
                    <div class="col-md-4 col-6">
                        <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#galleryModal" data-title="Layanan Sirkulasi" data-desc="Tunjukkan kartu anggota untuk peminjaman. Buku referensi (kode R) hanya baca di tempat." data-img="https://placehold.co/600x400/e0e0e0/333?text=Meja+Layanan">
                            <img src="https://placehold.co/600x400/e0e0e0/333?text=Meja+Layanan" alt="Meja Layanan">
                            <div class="gallery-caption">
                                <h6 class="mb-0">Meja Layanan</h6>
                                <small>Klik untuk instruksi</small>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Gallery Carousel -->
            <section id="gallery-carousel" class="content-section">
                <h2 class="mb-4"><i class="bi bi-camera-fill text-primary"></i> Galeri Foto</h2>
                <div id="carouselExampleCaptions" class="carousel slide shadow rounded overflow-hidden" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://placehold.co/1200x500/4b5320/fff?text=Tampak+Depan+Perpustakaan" class="d-block w-100" alt="Tampak Depan">
                            <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded">
                                <h5>Gedung Bersejarah</h5>
                                <p>Arsitektur kolonial yang tetap terjaga keasliannya.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="https://placehold.co/1200x500/8B8000/fff?text=Ruang+Koleksi+Langka" class="d-block w-100" alt="Koleksi Langka">
                            <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded">
                                <h5>Koleksi Langka</h5>
                                <p>Menyimpan naskah asli dari masa perjuangan kemerdekaan.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="https://placehold.co/1200x500/2F4F4F/fff?text=Suasana+Ruang+Baca" class="d-block w-100" alt="Ruang Baca">
                            <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded">
                                <h5>Suasana Kondusif</h5>
                                <p>Ruang baca yang tenang dan nyaman untuk peneliti.</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </section>

            <!-- Services -->
            <section id="services" class="content-section">
                <h2 class="mb-4"><i class="bi bi-hdd-network-fill text-primary"></i> Layanan & Fasilitas</h2>
                
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <h4 class="card-title"><i class="bi bi-people-fill me-2"></i> Layanan Eksternal</h4>
                                <p>Peneliti eksternal dapat mengakses perpustakaan dengan persetujuan.</p>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><i class="bi bi-check-circle-fill text-success me-2"></i> Akses baca di tempat</li>
                                    <li class="list-group-item"><i class="bi bi-check-circle-fill text-success me-2"></i> Fotokopi (terbatas)</li>
                                    <li class="list-group-item"><i class="bi bi-check-circle-fill text-success me-2"></i> Konsultasi penelitian</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <h4 class="card-title"><i class="bi bi-laptop me-2"></i> Fasilitas Elektronik</h4>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><i class="bi bi-search me-2"></i> Katalog Digital (OPAC)</li>
                                    <li class="list-group-item"><i class="bi bi-wifi me-2"></i> Akses Wi-Fi (Terdaftar)</li>
                                    <li class="list-group-item"><i class="bi bi-journal-text me-2"></i> Akses E-Jurnal</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <h4 class="mt-3">Fasilitas Area</h4>
                <div class="row text-center">
                    <div class="col-6 col-md-3 mb-3">
                        <div class="p-3 border rounded h-100 bg-white shadow-sm transition-hover">
                            <i class="bi bi-book fs-1 text-primary"></i>
                            <p class="mt-2 mb-0 fw-bold">Ruang Baca</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 mb-3">
                        <div class="p-3 border rounded h-100 bg-white shadow-sm transition-hover">
                            <i class="bi bi-box-seam fs-1 text-primary"></i>
                            <p class="mt-2 mb-0 fw-bold">Loker</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 mb-3">
                        <div class="p-3 border rounded h-100 bg-white shadow-sm transition-hover">
                            <i class="bi bi-display fs-1 text-primary"></i>
                            <p class="mt-2 mb-0 fw-bold">Multimedia</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 mb-3">
                        <div class="p-3 border rounded h-100 bg-white shadow-sm transition-hover">
                            <i class="bi bi-people fs-1 text-primary"></i>
                            <p class="mt-2 mb-0 fw-bold">Diskusi</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Contact -->
            <section id="contact" class="content-section">
                <h2 class="mb-4"><i class="bi bi-telephone-fill text-primary"></i> Kontak Kami</h2>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div class="p-4 border rounded bg-white shadow-sm h-100 text-center">
                            <i class="bi bi-geo-alt fs-1 text-primary mb-3"></i>
                            <h5>Alamat</h5>
                            <p>Jl. Ijen No. 25A, Gading Kasri, Kec. Klojen<br>Kota Malang, Jawa Timur 65115</p>
                            <a href="https://maps.google.com" target="_blank" class="btn btn-outline-primary btn-sm">Lihat di Google Maps</a>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="p-4 border rounded bg-white shadow-sm h-100 text-center">
                            <i class="bi bi-envelope fs-1 text-primary mb-3"></i>
                            <h5>Hubungi Kami</h5>
                            <p>Email: perpustakaan@museumbrawijaya.mil.id<br>Telepon: (0341) 562xxx</p>
                            <div class="d-flex gap-2 justify-content-center">
                                <a href="mailto:perpustakaan@museumbrawijaya.mil.id" class="btn btn-primary btn-sm"><i class="bi bi-envelope-fill"></i> Kirim Email</a>
                                <a href="tel:+62341562000" class="btn btn-outline-primary btn-sm"><i class="bi bi-telephone-fill"></i> Telepon</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Emergency -->
            <section id="emergency" class="content-section border-bottom-0">
                <h2 class="mb-4 text-danger"><i class="bi bi-exclamation-triangle-fill"></i> Prosedur Darurat</h2>
                <div class="row">
                    <div class="col-md-4 text-center mb-3">
                        <div class="p-3 border border-danger rounded bg-light h-100">
                            <i class="bi bi-fire fs-1 text-danger mb-2"></i>
                            <h5 class="text-danger">Kebakaran</h5>
                            <p class="small mb-0">Ikuti tanda keluar hijau menuju titik kumpul terdekat di halaman museum.</p>
                        </div>
                    </div>
                    <div class="col-md-4 text-center mb-3">
                        <div class="p-3 border border-danger rounded bg-light h-100">
                            <i class="bi bi-activity fs-1 text-danger mb-2"></i>
                            <h5 class="text-danger">Gempa Bumi</h5>
                            <p class="small mb-0">Jatuhkan diri, Lindungi, dan Pegangan. Jangan berlari keluar sampai guncangan berhenti.</p>
                        </div>
                    </div>
                    <div class="col-md-4 text-center mb-3">
                        <div class="p-3 border border-danger rounded bg-light h-100">
                            <i class="bi bi-hospital fs-1 text-danger mb-2"></i>
                            <h5 class="text-danger">Darurat Medis</h5>
                            <p class="small mb-0">Segera hubungi staf terdekat. Kotak P3K tersedia di meja depan.</p>
                        </div>
                    </div>
                </div>
            </section>

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
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img src="" id="galleryModalImg" class="img-fluid rounded mb-3 w-100" alt="Fasilitas">
                <div class="alert alert-light border-start border-4 border-primary bg-light">
                    <h6 class="alert-heading"><i class="bi bi-info-circle-fill text-primary"></i> Panduan Penggunaan:</h6>
                    <p class="mb-0" id="galleryModalDesc">Deskripsi penggunaan fasilitas.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Simple Search Filter for Sidebar
    document.getElementById('sidebarSearch').addEventListener('keyup', function() {
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

    // Initialize Pannellum 360 Viewer
    pannellum.viewer('panorama', {
        "type": "equirectangular",
        "panorama": "/test.jpeg", /* Using Pannellum's demo image as a high-quality placeholder */
        "autoLoad": true,
        "compass": true,
        "hotSpots": [
            {
                "pitch": 14.1,
                "yaw": 1.5,
                "type": "info",
                "text": "Meja Layanan & Sirkulasi",
                "URL": "#services"
            },
            {
                "pitch": -9.4,
                "yaw": 222.6,
                "type": "info",
                "text": "Area Loker Pengunjung"
            },
            {
                "pitch": -0.9,
                "yaw": 144.4,
                "type": "info",
                "text": "Ruang Baca Utama"
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

    // Permission Letter Generator Script
    function generateLetter() {
        const name = document.getElementById('inputName').value || '[Nama]';
        const inst = document.getElementById('inputInst').value || '[Institusi]';
        const purpose = document.getElementById('inputPurpose').value || '[Tujuan]';
        const date = document.getElementById('inputDate').value || '[Tanggal]';
        
        const letterHTML = `
            <p>Yth. Kepala Museum Brawijaya,<br>
            Di Tempat</p>
            
            <p>Dengan hormat,</p>
            
            <p>Saya yang bertanda tangan di bawah ini:</p>
            <p>Nama: <strong>${name}</strong><br>
            Institusi: <strong>${inst}</strong></p>
            
            <p>Bermaksud mengajukan permohonan izin untuk mengunjungi Perpustakaan Museum Brawijaya pada tanggal <strong>${date}</strong> guna keperluan <strong>${purpose}</strong>.</p>
            
            <p>Demikian permohonan ini saya sampaikan. Atas perhatian dan izin yang diberikan, saya ucapkan terima kasih.</p>
            
            <p>Hormat saya,<br>
            ${name}</p>
        `;
        
        document.getElementById('letterPreview').innerHTML = letterHTML;
    }

    function copyLetter() {
        const letterText = document.getElementById('letterPreview').innerText;
        navigator.clipboard.writeText(letterText).then(() => {
            alert('Teks surat berhasil disalin!');
        });
    }
</script>

<?php include 'includes/footer.php'; ?>
