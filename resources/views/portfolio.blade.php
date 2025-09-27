@extends('layouts.app')

@section('title', 'Portfolio - Iqmal Nuriadi | Systems Analyst & QA Specialist')

@section('content')
<!-- Hero Section -->
<section id="home" class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h1 class="display-4 fw-bold mb-4">Halo, Saya <span style="color: #e74c3c;">Iqmal Nuriadi</span></h1>
                <p class="lead mb-4"> Seorang lulusan baru program studi Sistem Informasi yang memiliki minat yang kuat dalam analisis dan pengujian untuk meningkatkan
efisiensi proses bisnis dan teknis.</p>
                <div class="d-flex gap-3">
                    <a href="/proyek" class="btn btn-primary btn-lg rounded-pill">Lihat Proyek</a>
                    <a href="#contact" class="btn btn-outline-light btn-lg rounded-pill">Hubungi Saya</a>
                </div>
            </div>
            <div class="col-lg-6 text-center">
                <div class="bg-white rounded-circle d-inline-flex align-items-center justify-content-center overflow-hidden" style="width: 300px; height: 300px;">
                    <img src="{{ asset('storage/iqmal.jpg') }}" alt="Foto Iqmal Nuriadi" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="section-padding bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2 class="h1 fw-bold mb-4">Tentang Saya</h2>
                <p class="mb-4">Mahasiswa tingkat akhir Sistem Informasi di Universitas Telkom dengan minat mendalam pada analisis dan testing untuk meningkatkan efisiensi proses bisnis dan teknis. Memiliki pengalaman praktis sebagai Quality Assurance Specialist di PT. Surya Madistrindo.</p>
                <p class="mb-4">Saya memiliki pemahaman konseptual yang kuat tentang manual testing di berbagai bahasa pemrograman seperti PHP dan Flutter, serta berpengalaman dalam merancang Test Case Procedures (TCPs) dan berkolaborasi dengan tim development.</p>
                <div class="row">
                    <div class="col-6">
                        <h5><strong>3.58/4.00</strong></h5>
                        <p>IPK Universitas</p>
                    </div>
                    <div class="col-6">
                        <h5><strong>6 Bulan</strong></h5>
                        <p>Pengalaman QA</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="bg-white p-4 rounded-3 shadow">
                    <h4 class="mb-3">Informasi Personal</h4>
                    <ul class="list-unstyled">
                        <li class="mb-2"><strong>Nama:</strong> Iqmal Nuriadi</li>
                        <li class="mb-2"><strong>Email:</strong> inuriadi73@gmail.com</li>
                        <li class="mb-2"><strong>Telepon:</strong> 081224249920</li>
                        <li class="mb-2"><strong>Lokasi:</strong> Bandung, Jawa Barat</li>
                        <li class="mb-2"><strong>LinkedIn:</strong> <a href="https://www.linkedin.com/in/iqmal-nuriadi-007156197/" target="_blank" class="text-decoration-none">LinkedIn Profile</a></li>
                        <li class="mb-2"><strong>Status:</strong> Mencari Peluang Karir</li>
                    </ul>
                    <a href="{{ route('download.cv') }}" class="btn btn-primary">Download CV</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Experience Section -->
<section id="experience" class="section-padding">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="h1 fw-bold">Pengalaman Kerja</h2>
            <p class="lead">Pengalaman profesional dalam bidang Quality Assurance</p>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="bg-light p-4 rounded-3 mb-4">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <div>
                            <h4 class="fw-bold text-primary">Quality Assurance Specialist</h4>
                            <h5 class="fw-bold mb-1">PT. Surya Madistrindo</h5>
                            <p class="text-muted">Jakarta Pusat, Jakarta</p>
                        </div>
                        <span class="badge bg-primary">Jun 2024 - Dec 2024</span>
                    </div>
                    <ul class="mb-0">
                        <li>Melakukan manual software testing pada platform web dan mobile untuk mengidentifikasi masalah fungsional, inkonsistensi UI/UX, dan bug sistem</li>
                        <li>Merancang dan memelihara Test Case Procedures (TCPs) berdasarkan Functional Design Document (FDD) dan Business Requirement Documents (BRDs)</li>
                        <li>Berkolaborasi dengan Developer dan System Analyst menggunakan project management tools untuk melaporkan dan menyelesaikan masalah</li>
                        <li>Berkontribusi dalam pembuatan design system untuk aplikasi internal, meningkatkan konsistensi UI dan reusabilitas komponen</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Skills Section -->
<section id="skills" class="section-padding bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="h1 fw-bold">Keahlian Saya</h2>
            <p class="lead">Teknologi dan tools yang saya kuasai</p>
        </div>
        <div class="row mb-5">
            <div class="col-lg-6">
                <h4 class="fw-bold mb-3">Hard Skills</h4>
                <div class="row">
                    <div class="col-6 mb-3">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-code text-primary me-2"></i>
                            <span>PHP</span>
                        </div>
                    </div>
                    <div class="col-6 mb-3">
                        <div class="d-flex align-items-center">
                            <i class="fab fa-python text-primary me-2"></i>
                            <span>Python</span>
                        </div>
                    </div>
                    <div class="col-6 mb-3">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-database text-primary me-2"></i>
                            <span>SQL</span>
                        </div>
                    </div>
                    <div class="col-6 mb-3">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-brain text-primary me-2"></i>
                            <span>Machine Learning</span>
                        </div>
                    </div>
                    <div class="col-6 mb-3">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-sitemap text-primary me-2"></i>
                            <span>UML</span>
                        </div>
                    </div>
                    <div class="col-6 mb-3">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-tasks text-primary me-2"></i>
                            <span>Jira</span>
                        </div>
                    </div>
                    <div class="col-6 mb-3">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-bug text-primary me-2"></i>
                            <span>Software Testing</span>
                        </div>
                    </div>
                    <div class="col-6 mb-3">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-paint-brush text-primary me-2"></i>
                            <span>UI/UX Design</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h4 class="fw-bold mb-3">Soft Skills</h4>
                <div class="d-flex flex-wrap gap-2">
                    <span class="tech-badge">Persistent</span>
                    <span class="tech-badge">Curious</span>
                    <span class="tech-badge">Communicative</span>
                    <span class="tech-badge">Team Player</span>
                    <span class="tech-badge">Problem Solving</span>
                    <span class="tech-badge">Analytical Thinking</span>
                    <span class="tech-badge">Attention to Detail</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Certifications Section -->
<section id="certifications" class="section-padding">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="h1 fw-bold">Sertifikasi & Pencapaian</h2>
            <p class="lead">Sertifikasi profesional dan pencapaian akademik</p>
        </div>
        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-shield-alt fa-2x text-primary me-3"></i>
                            <div>
                                <h5 class="card-title fw-bold mb-0">Fortinet Certified Fundamentals in Cybersecurity</h5>
                                <small class="text-muted">2024</small>
                            </div>
                        </div>
                        <p class="card-text">Pengetahuan dasar cybersecurity termasuk network security, threat landscape, secure access, dan konfigurasi firewall.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-chart-line fa-2x text-primary me-3"></i>
                            <div>
                                <h5 class="card-title fw-bold mb-0">Certified System Analyst</h5>
                                <small class="text-muted">2024</small>
                            </div>
                        </div>
                        <p class="card-text">Konsep analisis sistem menggunakan UML dan analisis proses bisnis, termasuk pembuatan use case diagrams dan activity diagrams.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Publications Section -->
<section id="publications" class="section-padding bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="h1 fw-bold">Publikasi Penelitian</h2>
            <p class="lead">Kontribusi dalam penelitian dan publikasi ilmiah</p>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-start">
                            <i class="fas fa-file-alt fa-3x text-primary me-4 mt-1"></i>
                            <div>
                                <h4 class="fw-bold mb-2">Health Risk Detection and Early Screening of Maternal Health in Pregnant Women Using a Stacking Machine Learning Models</h4>
                                <p class="text-muted mb-2">Nuriadi, I., et al. (2025)</p>
                                <p class="mb-3">Penelitian ini mengusulkan metode stacking ensemble machine learning untuk mendeteksi risiko kesehatan ibu dan melakukan skrining dini selama kehamilan. Model berhasil diintegrasikan ke dalam aplikasi kesehatan mobile untuk meningkatkan perawatan preventif dan mendukung intervensi dini.</p>
                                <div class="d-flex flex-wrap gap-2">
                                    <span class="tech-badge">Machine Learning</span>
                                    <span class="tech-badge">Healthcare</span>
                                    <span class="tech-badge">Mobile Application</span>
                                    <span class="tech-badge">Stacking Ensemble</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Education Section -->
<section id="education" class="section-padding">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="h1 fw-bold">Pendidikan</h2>
            <p class="lead">Riwayat pendidikan formal</p>
        </div>
        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div>
                                <h5 class="card-title fw-bold">Sarjana Sistem Informasi</h5>
                                <h6 class="text-primary">Universitas Telkom</h6>
                                <p class="text-muted mb-0">Bandung, Jawa Barat</p>
                            </div>
                            <div class="text-end">
                                <span class="badge bg-primary">IPK: 3.58/4.00</span>
                                <br>
                                <small class="text-muted">Aug 2021 - Aug 2025</small>
                            </div>
                        </div>
                        <p class="card-text">Fokus pada Programming (Python, Java, PHP, Flutter), AI & Machine Learning, SDLC, UI/UX Design, Business Process & ERP, dan Software Testing.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div>
                                <h5 class="card-title fw-bold">SMA IPA</h5>
                                <h6 class="text-primary">SMA Negeri 3 Samarinda</h6>
                                <p class="text-muted mb-0">Samarinda, Kalimantan Timur</p>
                            </div>
                            <div class="text-end">
                                <small class="text-muted">Apr 2018 - Jun 2021</small>
                            </div>
                        </div>
                        <p class="card-text">Anggota OSIS bidang dokumentasi dan publikasi, aktif dalam program ekstrakurikuler sains, dengan fokus pada matematika dan fisika.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Organization Section -->
<section id="organization" class="section-padding">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="h1 fw-bold">Pengalaman Organisasi</h2>
            <p class="lead">Keterlibatan dalam organisasi dan kegiatan kemahasiswaan</p>
        </div>
        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Expert Staff Bureau of Community Dedication</h5>
                        <h6 class="text-primary mb-2">Himpunan Mahasiswa Sistem Informasi Telkom University</h6>
                        <span class="badge bg-secondary mb-3">Aug 2023 - Jan 2025</span>
                        <ul class="mb-0">
                            <li>Mengorganisir inisiatif sosial seperti donor darah dan donasi panti asuhan</li>
                            <li>Berkolaborasi dalam koordinasi logistik, budgeting, dan komunikasi eksternal</li>
                            <li>Memfasilitasi workshop kreatif untuk anak jalanan</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Publication and Documentation</h5>
                        <h6 class="text-primary mb-2">CYVERO</h6>
                        <span class="badge bg-secondary mb-3">Jun 2023 - Dec 2023</span>
                        <ul class="mb-0">
                            <li>Dokumentasi event melalui fotografi dan videografi</li>
                            <li>Editing after-movie untuk meningkatkan visibilitas event</li>
                            <li>Mendesain dan mengelola konten Instagram</li>
                            <li>Kolaborasi dengan tim kreatif untuk visual storytelling</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="section-padding" style="background: var(--primary-color); color: white;">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="h1 fw-bold">Hubungi Saya</h2>
            <p class="lead">Mari diskusikan peluang kolaborasi untuk proyek systems analyst atau quality assurance</p>
        </div>
        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="d-flex align-items-center mb-4">
                    <i class="fas fa-envelope fa-2x me-3"></i>
                    <div>
                        <h5>Email</h5>
                        <p class="mb-0">inuriadi73@gmail.com</p>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-4">
                    <i class="fas fa-phone fa-2x me-3"></i>
                    <div>
                        <h5>Telepon</h5>
                        <p class="mb-0">081224249920</p>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-4">
                    <i class="fas fa-map-marker-alt fa-2x me-3"></i>
                    <div>
                        <h5>Lokasi</h5>
                        <p class="mb-0">Bandung, Jawa Barat, Indonesia</p>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-4">
                    <i class="fab fa-linkedin fa-2x me-3"></i>
                    <div>
                        <h5>LinkedIn</h5>
                        <p class="mb-0"><a href="https://www.linkedin.com/in/iqmal-nuriadi-007156197/" target="_blank" class="text-white text-decoration-none">LinkedIn Profile</a></p>
                    </div>
                </div>
            </div>
           <div class="col-lg-6">
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                
                <form action="{{ route('contact.send') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <input type="text" name="nama" class="form-control form-control-lg" placeholder="Nama Anda" required>
                    </div>
                    <div class="mb-3">
                        <input type="email" name="email" class="form-control form-control-lg" placeholder="Email Anda" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="subjek" class="form-control form-control-lg" placeholder="Subjek" required>
                    </div>
                    <div class="mb-3">
                        <textarea name="pesan" class="form-control" rows="5" placeholder="Pesan Anda" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg w-100">Kirim Pesan</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection