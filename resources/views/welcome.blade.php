<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta
            name="description"
            content="Portfolio Silva Oktaria Putri, lulusan Teknik Informatika ITERA dengan fokus web development, UI/UX, dashboard monitoring, IoT, data visualization, database, dokumentasi, administrasi, dan project support."
        >

        <title>Silva Oktaria Putri | Portfolio</title>

        @fonts
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/devicon@2.17.0/devicon.min.css">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="portfolio-page">
        @php
            $profileImage = asset('documents/silva-oktaria-putri-photo.jpeg');
            $aboutImage = asset('documents/silva-oktaria-putri-about.jpeg');
            $cvUrl = asset('documents/silva-oktaria-putri-cv-2026.pdf');

            $navItems = [
                ['label' => 'Home', 'href' => '#home'],
                ['label' => 'About', 'href' => '#tentang'],
                ['label' => 'Showcase', 'href' => '#proyek'],
                ['label' => 'Contact', 'href' => '#kontak'],
            ];

            $heroBadges = ['Web Developer', 'UI/UX', 'Dashboard Builder', 'Data Visualization'];

            $stats = [
                ['value' => '3,32/4,00', 'label' => 'IPK'],
                ['value' => '2026', 'label' => 'Lulus'],
                ['value' => '5.000+', 'label' => 'Dokumen dikelola'],
            ];

            $aboutInfo = [
                ['label' => 'Lokasi', 'value' => 'Bandar Lampung, Indonesia', 'icon' => 'LO'],
                ['label' => 'E-mail', 'value' => 'Silvaptr9@gmail.com', 'icon' => 'EM'],
                ['label' => 'Fokus', 'value' => 'Web, UI/UX, dashboard, data', 'icon' => 'FO'],
                ['label' => 'Status', 'value' => 'Terbuka untuk peluang kerja', 'icon' => 'ST'],
            ];

            $strengths = [
                ['title' => 'Dashboard monitoring terstruktur', 'body' => 'Membangun dashboard, early warning threshold, visualisasi data, dan alur pemantauan yang mudah digunakan.', 'icon' => '01'],
                ['title' => 'Analisis kebutuhan pengguna', 'body' => 'Terbiasa menerjemahkan kebutuhan pengguna menjadi UI/UX, fitur, basis data, dan dokumentasi sistem.', 'icon' => '02'],
                ['title' => 'Administrasi dan koordinasi', 'body' => 'Mengelola ribuan dokumen organisasi serta mengoordinasikan administrasi lintas departemen dan divisi.', 'icon' => '03'],
                ['title' => 'UI/UX yang mudah digunakan', 'body' => 'Menyusun tampilan, alur interaksi, dan penyajian informasi agar aplikasi terasa jelas untuk pengguna.', 'icon' => '04'],
            ];

            $projects = [
                [
                    'type' => 'Pengembangan Web',
                    'year' => '2025 - 2026',
                    'title' => 'Dashboard Monitoring Kondisi Mesin Decanter',
                    'role' => 'Web Developer',
                    'body' => 'Dashboard monitoring berbasis web dengan peringatan dini berbasis threshold untuk membantu pengguna memantau kondisi mesin secara terstruktur.',
                    'tags' => ['Dashboard', 'Threshold', 'UI/UX', 'MySQL'],
                    'preview' => 'monitor',
                    'image' => asset('documents/premain-dashboard-screenshot.jpeg'),
                ],
                [
                    'type' => 'IoT',
                    'year' => '2025',
                    'title' => 'Sistem Monitoring IoT Operasional',
                    'role' => 'IoT Developer Intern',
                    'body' => 'Integrasi sensor dengan aplikasi berbasis web agar hasil pembacaan data operasional dapat tampil melalui dashboard.',
                    'tags' => ['IoT', 'Sensor', 'Web App', 'Dashboard'],
                    'preview' => 'iot',
                    'image' => asset('documents/iot-monitoring-device.jpeg'),
                ],
                [
                    'type' => 'Web App & Monitoring',
                    'year' => '2025',
                    'title' => 'Sistem Kualitas Udara',
                    'role' => 'Frontend & UI/UX Developer',
                    'body' => 'Aplikasi web untuk memantau kualitas udara dan cuaca dengan tampilan ringkas, navigasi sederhana, serta ringkasan prediksi yang mudah dibaca.',
                    'tags' => ['Air Quality', 'Weather', 'React Vite', 'UI/UX'],
                    'preview' => 'iot',
                    'image' => asset('documents/skywise-air-quality-dashboard-clean.jpeg'),
                ],
                [
                    'type' => 'Factory Dashboard',
                    'year' => '2025',
                    'title' => 'Sentralisasi Dashboard Factory',
                    'role' => 'Web Developer',
                    'body' => 'Dashboard terpusat untuk kebutuhan factory di PT Great Giant Pineapple, dirancang agar data operasional lebih mudah diakses, dipantau, dan dikelola oleh pengguna.',
                    'tags' => ['Dashboard', 'Factory', 'Data', 'GGP'],
                    'preview' => 'monitor',
                    'image' => asset('documents/ggf-factory-dashboard-login.png'),
                ],
                [
                    'type' => 'Game Development',
                    'year' => '2025',
                    'title' => 'Starborne Strife',
                    'role' => 'Game Developer',
                    'body' => 'Project pembuatan game bertema luar angkasa dengan fokus pada alur permainan, visual interface, dan pengalaman bermain yang interaktif.',
                    'tags' => ['Game', 'UI/UX', 'Gameplay', 'Interactive'],
                    'preview' => 'game',
                ],
                [
                    'type' => 'UI/UX Design',
                    'year' => '2025',
                    'title' => 'Iklimify',
                    'role' => 'UI/UX Designer',
                    'body' => 'Desain antarmuka mobile app bertema kepedulian iklim dengan onboarding yang sederhana, visual edukatif, dan ajakan aksi yang jelas untuk pengguna.',
                    'tags' => ['UI/UX', 'Mobile App', 'Figma', 'Climate'],
                    'preview' => 'portfolio',
                    'image' => asset('documents/iklimify-uiux-onboarding.png'),
                    'imageMode' => 'app-preview',
                ],
                [
                    'type' => 'UI/UX Design',
                    'year' => '2025',
                    'title' => 'Medicare',
                    'role' => 'UI/UX Designer',
                    'body' => 'Desain antarmuka aplikasi kesehatan untuk onboarding, pemilihan layanan medis, pencarian dokter, dan appointment dengan alur yang sederhana serta ramah pengguna.',
                    'tags' => ['UI/UX', 'Mobile App', 'Healthcare', 'Figma'],
                    'preview' => 'portfolio',
                    'imageMode' => 'app-preview-healthcare',
                ],
            ];

            $certificates = [
                [
                    'title' => 'Sertifikat PPLK',
                    'issuer' => 'Institut Teknologi Sumatera',
                    'year' => '2026',
                    'body' => 'Sertifikat kegiatan PPLK sebagai pendukung pengalaman organisasi, adaptasi lingkungan kampus, dan keterlibatan kegiatan kemahasiswaan.',
                    'accent' => 'PL',
                    'url' => asset('documents/sertifikat-pplk-silva-oktaria-putri.pdf'),
                    'previewImage' => asset('documents/certificate-previews/sertifikat-pplk-silva-oktaria-putri.png'),
                ],
                [
                    'title' => 'Staff Kaderisasi',
                    'issuer' => 'HMIF ITERA',
                    'year' => '2023',
                    'body' => 'Sertifikat pengalaman organisasi sebagai staff kaderisasi dengan fokus dukungan kegiatan, koordinasi, dan pelaksanaan program mahasiswa.',
                    'accent' => 'KD',
                    'url' => asset('documents/sertifikat-staff-kaderisasi-silva-oktaria-putri.pdf'),
                    'previewImage' => asset('documents/certificate-previews/sertifikat-staff-kaderisasi-silva-oktaria-putri.png'),
                ],
                [
                    'title' => 'Pembicara Materi SIDANG',
                    'issuer' => 'HMIF ITERA',
                    'year' => '2025',
                    'body' => 'Sertifikat sebagai pembicara materi SIDANG pada kegiatan Himpunan Mahasiswa Informatika ITERA.',
                    'accent' => 'SD',
                    'url' => asset('documents/sertifikat-pembicara-sidang-silva-oktaria-putri.pdf'),
                    'previewImage' => asset('documents/certificate-previews/sertifikat-pembicara-sidang-silva-oktaria-putri.png'),
                ],
                [
                    'title' => 'Mahasiswa Termuda ke-3 Fakultas Teknologi Industri',
                    'issuer' => 'Yudisium FTI ITERA',
                    'year' => '2026',
                    'body' => 'Pencapaian sebagai mahasiswa termuda ke-3 dari sekitar 400 peserta pada Yudisium Fakultas Teknologi Industri ITERA.',
                    'accent' => 'TR',
                    'url' => asset('documents/sertifikat-mahasiswa-termuda-silva-oktaria-putri.pdf'),
                    'previewImage' => asset('documents/certificate-previews/sertifikat-mahasiswa-termuda-silva-oktaria-putri.png'),
                ],
                [
                    'title' => 'Asisten Praktikum Komputer dan Pengembangan Perangkat Lunak',
                    'issuer' => 'Institut Teknologi Sumatera',
                    'year' => '2024',
                    'body' => 'Sertifikat pengalaman sebagai asisten praktikum dalam mendampingi pembelajaran, evaluasi tugas, dan koordinasi kegiatan praktikum.',
                    'accent' => 'AP',
                    'url' => asset('documents/sertifikat-asisten-praktikum-silva-oktaria-putri.pdf'),
                    'previewImage' => asset('documents/certificate-previews/sertifikat-asisten-praktikum-silva-oktaria-putri.png'),
                ],
                [
                    'title' => 'Data Analysis',
                    'issuer' => 'MySkill',
                    'year' => '2026',
                    'body' => 'Sertifikat pembelajaran data analysis sebagai pendukung kemampuan membaca, mengolah, dan menyajikan informasi berbasis data.',
                    'accent' => 'DA',
                    'url' => asset('documents/sertifikat-data-analysis-silva-oktaria-putri.pdf'),
                    'previewImage' => asset('documents/certificate-previews/sertifikat-data-analysis-silva-oktaria-putri.png'),
                ],
                [
                    'title' => 'Basic Formula Excel',
                    'issuer' => 'MySkill',
                    'year' => '2026',
                    'body' => 'Sertifikat dasar penggunaan formula Microsoft Excel untuk pengolahan data, rekapitulasi, dan kebutuhan administrasi.',
                    'accent' => 'XL',
                    'url' => asset('documents/sertifikat-basic-formula-excel-silva-oktaria-putri.pdf'),
                    'previewImage' => asset('documents/certificate-previews/sertifikat-basic-formula-excel-silva-oktaria-putri.png'),
                ],
            ];

            $techStack = [
                ['name' => 'HTML', 'category' => 'Frontend', 'iconClass' => 'devicon-html5-plain colored'],
                ['name' => 'CSS', 'category' => 'Frontend', 'iconClass' => 'devicon-css3-plain colored'],
                ['name' => 'JavaScript', 'category' => 'Frontend', 'iconClass' => 'devicon-javascript-plain colored'],
                ['name' => 'PHP', 'category' => 'Backend', 'iconClass' => 'devicon-php-plain colored'],
                ['name' => 'Laravel', 'category' => 'Framework', 'iconClass' => 'devicon-laravel-original colored'],
                ['name' => 'Python', 'category' => 'Programming', 'iconClass' => 'devicon-python-plain colored'],
                ['name' => 'MySQL', 'category' => 'Database', 'iconClass' => 'devicon-mysql-original colored'],
                ['name' => 'Figma', 'category' => 'UI/UX', 'iconClass' => 'devicon-figma-plain colored'],
                ['name' => 'Git', 'category' => 'Tools', 'iconClass' => 'devicon-git-plain colored'],
                ['name' => 'VS Code', 'category' => 'Tools', 'iconClass' => 'devicon-vscode-plain colored'],
                ['name' => 'Looker Studio', 'category' => 'Data Visualization', 'logoText' => 'L', 'tone' => 'looker'],
                ['name' => 'Microsoft Excel', 'category' => 'Data', 'logoText' => 'X', 'tone' => 'excel'],
                ['name' => 'Power Apps', 'category' => 'Low-code', 'logoText' => 'P', 'tone' => 'power'],
                ['name' => 'SharePoint', 'category' => 'Collaboration', 'logoText' => 'S', 'tone' => 'sharepoint'],
            ];

            $experiences = [
                [
                    'period' => 'Oktober 2025 - Februari 2026',
                    'title' => 'Web Developer',
                    'company' => 'PT Great Giant Pineapple',
                    'body' => 'Mengembangkan dashboard monitoring kondisi mesin decanter berbasis web, menerapkan early warning threshold, melakukan analisis kebutuhan, perancangan UI/UX, pengelolaan basis data, visualisasi data, pengujian, penyempurnaan, dan dokumentasi sistem.',
                ],
                [
                    'period' => 'Juni 2025 - Juli 2025',
                    'title' => 'IoT Developer Intern',
                    'company' => 'PT Great Giant Pineapple',
                    'body' => 'Mengembangkan sistem monitoring berbasis IoT, mengintegrasikan sensor dengan aplikasi web, menyajikan data sensor dalam dashboard, serta melakukan pengujian dan dokumentasi bersama tim Digital Innovation.',
                ],
                [
                    'period' => 'Agustus 2023 - Mei 2024',
                    'title' => 'Asisten Praktikum Komputer dan Pengembangan Perangkat Lunak',
                    'company' => 'Institut Teknologi Sumatera',
                    'body' => 'Mendampingi praktikum, menjelaskan materi, membantu mahasiswa menyelesaikan kendala pemrograman, mengevaluasi tugas, dan berkoordinasi dengan dosen serta tim asisten agar kegiatan berjalan sesuai jadwal.',
                ],
            ];

            $organizations = [
                [
                    'period' => 'Maret 2025 - Mei 2026',
                    'title' => 'Sekretaris Umum',
                    'company' => 'Himpunan Mahasiswa Informatika ITERA',
                    'body' => 'Mengelola arsip, notulen, surat, dan koordinasi administrasi lintas departemen selama satu periode kepengurusan.',
                    'metric' => '5.000+ dokumen dikelola',
                    'skills' => ['Documentation', 'Coordination', 'Data Management'],
                ],
                [
                    'period' => 'Agustus 2023 - Desember 2023',
                    'title' => 'Staff Kaderisasi',
                    'company' => 'Himpunan Mahasiswa Informatika ITERA',
                    'body' => 'Mendukung perencanaan kegiatan, pembagian tugas, workshop, jadwal, dan koordinasi pelaksanaan program kaderisasi.',
                    'metric' => '200+ peserta kegiatan',
                    'skills' => ['Teamwork', 'Event Support', 'Communication'],
                ],
                [
                    'period' => 'November 2024',
                    'title' => 'Sekretaris Umum Informatics Goes to TPB',
                    'company' => 'Himpunan Mahasiswa Informatika ITERA',
                    'body' => 'Menangani administrasi kegiatan pengenalan program studi, termasuk surat, dokumen, notulen, rekap informasi, dan laporan.',
                    'metric' => '260+ mahasiswa baru',
                    'skills' => ['Report Writing', 'Administration', 'Planning'],
                ],
            ];
        @endphp

        <a class="skip-link" href="#konten">Lewati ke konten utama</a>
        <div class="scroll-progress" data-scroll-progress aria-hidden="true"></div>

        <aside class="quick-rail" aria-label="Akses cepat">
            <div class="rail-signal" title="Portfolio Silva">
                <span aria-hidden="true"></span>
            </div>
            <a href="https://github.com/Silvok" target="_blank" rel="noopener" aria-label="GitHub" title="GitHub">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5a14 14 0 0 0-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.4 5.4 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.4.5-.7 1.05-.85 1.65-.18.6-.23 1.23-.15 1.85v4"></path>
                    <path d="M9 18c-4.5 2-5-2-7-2"></path>
                </svg>
            </a>
            <a href="mailto:Silvaptr9@gmail.com" aria-label="Kirim email" title="Email">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                    <path d="m22 7-8.99 5.73a2 2 0 0 1-2.02 0L2 7"></path>
                    <rect x="2" y="4" width="20" height="16" rx="2"></rect>
                </svg>
            </a>
            <a href="#proyek" aria-label="Lihat proyek" title="Project">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                    <path d="m18 16 4-4-4-4"></path>
                    <path d="m6 8-4 4 4 4"></path>
                    <path d="m14.5 4-5 16"></path>
                </svg>
            </a>
        </aside>

        <header class="site-header" data-site-header>
            <a class="brand" href="#home" aria-label="Kembali ke beranda Silva Oktaria Putri">
                <span class="brand-mark" aria-hidden="true">&gt;_</span>
                <span class="brand-text">Silva<span>Portfolio</span></span>
            </a>

            <button class="menu-toggle" type="button" data-menu-toggle aria-expanded="false" aria-controls="site-nav">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span class="sr-only">Buka navigasi</span>
            </button>

            <nav class="site-nav" id="site-nav" data-site-nav aria-label="Navigasi utama">
                @foreach ($navItems as $item)
                    <a href="{{ $item['href'] }}" class="{{ $loop->first ? 'is-active' : '' }}" data-nav-link>{{ $item['label'] }}</a>
                @endforeach
            </nav>

            <div class="header-actions" aria-label="Aksi cepat">
                <a class="hire-button" href="#kontak">
                    <span aria-hidden="true">&#9889;</span>
                    Hire Me
                </a>
            </div>
        </header>

        <main id="konten">
            <section class="hero section-observe" id="home">
                <div class="hero-copy">
                    <p class="eyebrow"><span aria-hidden="true"></span> Available for Hire</p>
                    <h1>Hi, I'm <span>Silva Oktaria Putri</span></h1>
                    <p class="hero-role">Web Developer & UI/UX enthusiast yang fokus membangun dashboard, tampilan web, dan alur data yang rapi, mudah dipahami, dan nyaman digunakan.</p>

                    <div class="hero-badges" aria-label="Fokus utama">
                        @foreach ($heroBadges as $badge)
                            <span>{{ $badge }}</span>
                        @endforeach
                    </div>

                    <div class="hero-actions" aria-label="Aksi utama">
                        <a class="button button-primary" href="#proyek">View Work <span aria-hidden="true">-&gt;</span></a>
                        <a class="button button-secondary" href="{{ $cvUrl }}" target="_blank" rel="noopener">
                            <svg viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M12 3v12"></path>
                                <path d="m7 10 5 5 5-5"></path>
                                <path d="M5 21h14"></path>
                            </svg>
                            Download CV
                        </a>
                    </div>

                    <div class="social-links" aria-label="Kontak cepat">
                        <a href="mailto:Silvaptr9@gmail.com" aria-label="Kirim email">EM</a>
                        <a href="tel:+6287825729377" aria-label="Telepon">TL</a>
                        <a href="#kontak" aria-label="Lihat kontak">CT</a>
                    </div>

                    <div class="hero-terminal" aria-label="Ringkasan status portfolio">
                        <div class="terminal-top">
                            <span></span>
                            <span></span>
                            <span></span>
                            <strong>silva.profile</strong>
                        </div>
                        <p><span>&gt;</span> available_for_work: true</p>
                        <p><span>&gt;</span> focus: web, uiux, dashboard, data</p>
                    </div>

                </div>

                <div class="hero-visual" aria-label="Foto dan ringkasan profil Silva Oktaria Putri">
                    <div class="portrait-card">
                        <img src="{{ $profileImage }}" alt="Foto Silva Oktaria Putri" class="portrait-photo">
                    </div>

                    <div class="role-float role-float-top">
                        <span aria-hidden="true">WD</span>
                        <strong>Web Developer</strong>
                    </div>
                    <div class="role-float role-float-middle">
                        <span aria-hidden="true">IT</span>
                        <strong>IoT Developer</strong>
                    </div>
                    <div class="role-float role-float-bottom">
                        <span aria-hidden="true">UX</span>
                        <strong>UI/UX</strong>
                    </div>
                </div>
            </section>

            <section class="about-section section-observe" id="tentang">
                <div class="section-inner about-grid">
                    <div class="about-content">
                        <h2>Transforming ideas into <span>digital reality</span></h2>
                        <p class="section-copy">Saya Web Developer dan UI/UX enthusiast lulusan Teknik Informatika ITERA yang fokus membangun tampilan web, dashboard monitoring, dan pengalaman digital yang jelas untuk pengguna.</p>
                        <p class="section-copy">Saya terbiasa menerjemahkan kebutuhan pengguna menjadi alur aplikasi, visual dashboard, pengelolaan data, dokumentasi sistem, dan solusi web yang rapi serta nyaman digunakan.</p>
                        <p class="section-copy">Pengalaman saya juga mencakup sistem monitoring IoT, visualisasi data, administrasi organisasi, dan koordinasi proyek sehingga saya bisa menjembatani kebutuhan teknis dengan kebutuhan pengguna.</p>

                        <div class="about-feature-list" aria-label="Fokus desain dan pengembangan">
                            <span>Responsive Design</span>
                            <span>Modern UI/UX</span>
                            <span>Dashboard</span>
                        </div>
                    </div>

                    <div class="about-orbit" aria-label="Ringkasan profil Silva Oktaria Putri">
                        <div class="about-media">
                            <img src="{{ $aboutImage }}" alt="Potret Silva Oktaria Putri">
                        </div>

                        <article class="orbit-stat orbit-stat-top">
                            <span aria-hidden="true">◎</span>
                            <div>
                                <strong>2026</strong>
                                <p>GRADUATE</p>
                            </div>
                        </article>

                        <article class="orbit-stat orbit-stat-right">
                            <span aria-hidden="true">&lt;/&gt;</span>
                            <div>
                                <strong>6+</strong>
                                <p>PROJECT AREAS</p>
                            </div>
                        </article>

                        <article class="orbit-stat orbit-stat-bottom">
                            <span aria-hidden="true">◇</span>
                            <div>
                                <strong>5K+</strong>
                                <p>DOCS MANAGED</p>
                            </div>
                        </article>
                    </div>
                </div>
            </section>

            <section class="projects-section showcase-section section-observe" id="proyek">
                <div class="section-inner showcase-heading">
                    <h2>Portfolio <span>Showcase</span></h2>
                    <p>Discover my journey through projects, certifications, and technical expertise.</p>
                </div>

                <div class="section-inner showcase-tabs" role="tablist" aria-label="Portfolio showcase">
                    <button class="showcase-tab is-active" type="button" role="tab" id="showcase-tab-projects" aria-selected="true" aria-controls="showcase-panel-projects" data-showcase-tab="projects">
                        <span aria-hidden="true">[]</span>
                        Projects
                    </button>
                    <button class="showcase-tab" type="button" role="tab" id="showcase-tab-certificates" aria-selected="false" aria-controls="showcase-panel-certificates" data-showcase-tab="certificates">
                        <span aria-hidden="true">ID</span>
                        Certificates
                    </button>
                    <button class="showcase-tab" type="button" role="tab" id="showcase-tab-stack" aria-selected="false" aria-controls="showcase-panel-stack" data-showcase-tab="stack">
                        <span aria-hidden="true">&lt;&gt;</span>
                        Tech Stack
                    </button>
                </div>

                <div class="section-inner showcase-panels">
                    <div class="showcase-panel is-active" role="tabpanel" id="showcase-panel-projects" aria-labelledby="showcase-tab-projects" data-showcase-panel="projects">
                        <div class="showcase-project-grid">
                            @foreach ($projects as $project)
                                <article class="showcase-project-card">
                                    <div class="showcase-project-preview showcase-project-preview-{{ $project['preview'] }} {{ isset($project['image']) || in_array(($project['imageMode'] ?? ''), ['app-preview', 'app-preview-healthcare'], true) ? 'has-image' : '' }} {{ ($project['imageMode'] ?? '') === 'contain' ? 'is-contain' : '' }} {{ in_array(($project['imageMode'] ?? ''), ['app-preview', 'app-preview-healthcare'], true) ? 'is-app-preview' : '' }} {{ ($project['imageMode'] ?? '') === 'app-preview-healthcare' ? 'is-app-preview-healthcare' : '' }}">
                                        @if (($project['imageMode'] ?? '') === 'app-preview' && isset($project['image']))
                                                <div class="app-preview-frame" aria-hidden="true">
                                                    <div class="app-preview-copy">
                                                        <span>App Store Preview</span>
                                                        <strong>{{ $project['title'] }}</strong>
                                                        <p>Mobile UI/UX concept</p>
                                                    </div>
                                                    <div class="app-phone app-phone-left">
                                                        <img src="{{ $project['image'] }}" alt="">
                                                    </div>
                                                    <div class="app-phone app-phone-main">
                                                        <img src="{{ $project['image'] }}" alt="">
                                                    </div>
                                                    <div class="app-phone app-phone-right">
                                                        <img src="{{ $project['image'] }}" alt="">
                                                    </div>
                                                </div>
                                                <span class="sr-only">Preview {{ $project['title'] }}</span>
                                        @elseif (($project['imageMode'] ?? '') === 'app-preview-healthcare')
                                            <div class="app-preview-frame app-preview-frame-healthcare" aria-hidden="true">
                                                <div class="app-preview-copy">
                                                    <span>App Store Preview</span>
                                                    <strong>Medicare</strong>
                                                    <p>Healthcare mobile app</p>
                                                </div>
                                                <div class="app-phone healthcare-phone healthcare-phone-intro">
                                                    <div class="health-screen health-screen-intro">
                                                        <span class="health-status">9:45 AM</span>
                                                        <div class="medicare-brand">
                                                            <span></span>
                                                            <strong>MEDICARE</strong>
                                                        </div>
                                                        <div class="doctor-scene">
                                                            <span class="doctor-shape"></span>
                                                            <span class="patient-shape"></span>
                                                            <span class="pulse-line"></span>
                                                        </div>
                                                        <strong class="health-caption">KESEHATANMU PRIORITAS KAMI</strong>
                                                    </div>
                                                </div>
                                                <div class="app-phone healthcare-phone healthcare-phone-home">
                                                    <div class="health-screen">
                                                        <div class="health-topbar">
                                                            <span class="health-menu"></span>
                                                            <strong>Halo,Nazwa</strong>
                                                            <span class="health-avatar"></span>
                                                        </div>
                                                        <p class="health-question">How are you feeling today ?</p>
                                                        <div class="mood-row">
                                                            <span></span>
                                                            <span></span>
                                                            <span></span>
                                                            <span></span>
                                                        </div>
                                                        <div class="specialty-grid">
                                                            <span>Cardiology</span>
                                                            <span>Dermatology</span>
                                                            <span>General</span>
                                                            <span>Gynecology</span>
                                                            <span>Odontology</span>
                                                            <span>Oncology</span>
                                                        </div>
                                                        <div class="health-nav"></div>
                                                    </div>
                                                </div>
                                                <div class="app-phone healthcare-phone healthcare-phone-list">
                                                    <div class="health-screen">
                                                        <div class="health-topbar">
                                                            <span class="health-back"></span>
                                                            <strong>Halo,Nazwa</strong>
                                                            <span class="health-avatar"></span>
                                                        </div>
                                                        <div class="doctor-search">Search</div>
                                                        <div class="doctor-cards">
                                                            <span></span>
                                                            <span></span>
                                                            <span></span>
                                                            <span></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <span class="sr-only">Preview {{ $project['title'] }}</span>
                                        @elseif (isset($project['image']))
                                            @if (($project['imageMode'] ?? '') === 'contain')
                                                <img class="showcase-preview-backdrop" src="{{ $project['image'] }}" alt="">
                                                <img class="showcase-preview-image" src="{{ $project['image'] }}" alt="Preview {{ $project['title'] }}">
                                            @else
                                                <img class="showcase-preview-image" src="{{ $project['image'] }}" alt="Preview {{ $project['title'] }}">
                                            @endif
                                        @else
                                            <div class="preview-window" aria-hidden="true">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                            </div>
                                        @endif
                                        <strong aria-hidden="true">PROJECT</strong>
                                    </div>

                                    <div class="showcase-card-body">
                                        <div class="showcase-card-meta">
                                            <span>{{ $project['type'] }}</span>
                                            <strong>{{ $project['year'] }}</strong>
                                        </div>
                                        <h3>{{ $project['title'] }}</h3>
                                        <p class="project-role">{{ $project['role'] }}</p>
                                        <p>{{ $project['body'] }}</p>
                                        <div class="tag-list" aria-label="Teknologi dan kategori">
                                            @foreach ($project['tags'] as $tag)
                                                <span>{{ $tag }}</span>
                                            @endforeach
                                        </div>
                                    </div>
                                </article>
                            @endforeach
                        </div>
                    </div>

                    <div class="showcase-panel" role="tabpanel" id="showcase-panel-certificates" aria-labelledby="showcase-tab-certificates" data-showcase-panel="certificates" hidden>
                        <div class="showcase-cert-grid">
                            @foreach ($certificates as $certificate)
                                <article class="showcase-cert-card">
                                    <div class="certificate-preview {{ isset($certificate['previewImage']) ? 'has-certificate-image' : '' }}" aria-hidden="true">
                                        @isset($certificate['previewImage'])
                                            <img class="certificate-preview-image" src="{{ $certificate['previewImage'] }}" alt="">
                                        @else
                                            <span class="certificate-seal">{{ $certificate['accent'] }}</span>
                                            <p>Certificate of Accomplishment</p>
                                            <strong>{{ $certificate['title'] }}</strong>
                                            <span>{{ $certificate['issuer'] }}</span>
                                        @endisset
                                    </div>

                                    <div class="showcase-card-body">
                                        <h3>{{ $certificate['title'] }}</h3>
                                        <p class="certificate-issuer">{{ $certificate['issuer'] }}</p>
                                        <p>{{ $certificate['body'] }}</p>
                                        <div class="certificate-footer">
                                            <span>Issued: {{ $certificate['year'] }}</span>
                                            <a href="{{ $certificate['url'] ?? $cvUrl }}" target="_blank" rel="noreferrer">Download PDF</a>
                                        </div>
                                    </div>
                                </article>
                            @endforeach
                        </div>
                    </div>

                    <div class="showcase-panel" role="tabpanel" id="showcase-panel-stack" aria-labelledby="showcase-tab-stack" data-showcase-panel="stack" hidden>
                        <div class="tech-stack-grid">
                            @foreach ($techStack as $tech)
                                <article class="tech-card">
                                    <span class="tech-logo tech-logo-{{ $tech['tone'] ?? 'devicon' }}" aria-hidden="true">
                                        @isset($tech['iconClass'])
                                            <i class="{{ $tech['iconClass'] }}"></i>
                                        @else
                                            <strong>{{ $tech['logoText'] }}</strong>
                                        @endisset
                                    </span>
                                    <h3>{{ $tech['name'] }}</h3>
                                    <p>{{ $tech['category'] }}</p>
                                </article>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>

            <section class="experience-section section-observe" id="pengalaman">
                <div class="section-inner experience-layout">
                    <div class="experience-intro">
                        <p class="section-kicker">Pengalaman Kerja</p>
                        <h2>Pengalaman profesional pada web development, IoT, dan pendampingan praktikum perangkat lunak.</h2>
                        <p class="section-copy">Peran-peran ini membentuk cara kerja saya: memahami kebutuhan pengguna, merancang tampilan, membangun solusi web, menyusun dokumentasi, dan menjaga pekerjaan tetap berjalan sesuai kebutuhan tim.</p>
                    </div>

                    <div class="timeline">
                        @foreach ($experiences as $index => $experience)
                            <article class="timeline-card">
                                <span class="timeline-number">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>
                                <div>
                                    <div class="timeline-head">
                                        <h3>{{ $experience['title'] }}</h3>
                                        <span>{{ $experience['period'] }}</span>
                                    </div>
                                    <p class="timeline-company">{{ $experience['company'] }}</p>
                                    <p>{{ $experience['body'] }}</p>
                                </div>
                            </article>
                        @endforeach
                    </div>
                </div>
            </section>

            <section class="leadership-section section-observe" id="organisasi">
                <div class="section-inner leadership-shell">
                    <div class="leadership-intro">
                        <p class="section-kicker">Leadership & Organization</p>
                        <h2>Pengalaman organisasi yang memperkuat cara kerja saya di tim.</h2>
                        <p class="section-copy">Untuk fresh graduate, pengalaman organisasi tetap penting sebagai bukti tanggung jawab, komunikasi, dokumentasi, dan koordinasi kerja nyata.</p>
                    </div>

                    <div class="leadership-grid">
                        @foreach ($organizations as $index => $organization)
                            <article class="leadership-card">
                                <div class="leadership-card-top">
                                    <span>{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>
                                    <strong>{{ $organization['period'] }}</strong>
                                </div>
                                <h3>{{ $organization['title'] }}</h3>
                                <p class="timeline-company">{{ $organization['company'] }}</p>
                                <p>{{ $organization['body'] }}</p>
                                <div class="leadership-metric">{{ $organization['metric'] }}</div>
                                <div class="tag-list" aria-label="Keterampilan organisasi">
                                    @foreach ($organization['skills'] as $skill)
                                        <span>{{ $skill }}</span>
                                    @endforeach
                                </div>
                            </article>
                        @endforeach
                    </div>
                </div>
            </section>

            <section class="contact-section section-observe" id="kontak">
                <div class="section-inner contact-grid">
                    <div>
                        <p class="section-kicker">Kontak</p>
                        <h2>Mari bicara tentang peluang kerja, proyek, atau kebutuhan tim.</h2>
                        <p class="section-copy">Saya terbuka untuk posisi yang berhubungan dengan web development, UI/UX, dashboard, data management, administrasi, dokumentasi sistem, dan project support.</p>
                    </div>

                    <div class="contact-card">
                        <a href="mailto:Silvaptr9@gmail.com">
                            <span>E-mail</span>
                            <strong>Silvaptr9@gmail.com</strong>
                        </a>
                        <a href="tel:+6287825729377">
                            <span>Telepon</span>
                            <strong>+62 878-2572-9377</strong>
                        </a>
                        <div>
                            <span>Lokasi</span>
                            <strong>Bandar Lampung, Lampung</strong>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer class="site-footer">
            <div class="section-inner footer-grid">
                <div class="footer-brand">
                    <span class="brand-mark" aria-hidden="true">S</span>
                    <div>
                        <strong>Silva Oktaria Putri</strong>
                        <p>Web development, UI/UX, dashboard, data visualization, dan dokumentasi kerja yang rapi.</p>
                    </div>
                </div>

                <div class="footer-links">
                    <p>Quick Links</p>
                    <div>
                        @foreach ($navItems as $item)
                            <a href="{{ $item['href'] }}">{{ $item['label'] }}</a>
                        @endforeach
                    </div>
                </div>

                <div class="footer-cta">
                    <h2>Mari kita bekerja sama.</h2>
                    <a class="button button-primary" href="mailto:Silvaptr9@gmail.com">Kirim pesan</a>
                </div>

                <div class="footer-contact">
                    <p>Kontak</p>
                    <a href="mailto:Silvaptr9@gmail.com">Silvaptr9@gmail.com</a>
                    <span>Bandar Lampung, Indonesia</span>
                </div>
            </div>

            <div class="section-inner footer-bottom">
                <p>&copy; {{ date('Y') }} Silva Oktaria Putri. All rights reserved.</p>
                <a href="{{ $cvUrl }}" target="_blank" rel="noopener">Lihat CV</a>
            </div>
        </footer>
    </body>
</html>
