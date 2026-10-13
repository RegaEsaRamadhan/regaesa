<?php
// Ganti nomor di bawah dengan nomor WhatsApp Workshop Kreafis Furniture.
// Gunakan format internasional tanpa tanda +, spasi, atau angka 0 di depan.
// Contoh format: 6281234567890
$whatsappNumber = '088212468934';

function whatsappLink(string $number, string $message): string {
    return 'https://wa.me/' . $number . '?text=' . rawurlencode($message);
}

$generalMessage = 'Halo Workshop Kreafis Furniture, saya ingin konsultasi mengenai jasa furniture custom.';
$services = [
    [
        'name' => 'Kitchen Set',
        'description' => 'Dapur lebih rapi dengan kitchen set yang disesuaikan dengan ukuran ruangan.',
        'image' => 'foto/kitchen1.png',
        'message' => 'Halo Workshop Kreafis Furniture, saya tertarik dengan jasa pembuatan kitchen set. Saya ingin konsultasi desain dan harga.'
    ],
    [
        'name' => 'Lemari Custom',
        'description' => 'Penyimpanan yang fungsional dengan desain dan ukuran sesuai kebutuhan.',
        'image' => 'foto/lemari.png',
        'message' => 'Halo Workshop Kreafis Furniture, saya tertarik membuat lemari custom. Saya ingin konsultasi ukuran dan harga.'
    ],
    [
        'name' => 'Meja & Rak',
        'description' => 'Meja kerja, meja TV, rak, dan furniture lain untuk melengkapi ruangan.',
        'image' => 'foto/rak.png',
        'message' => 'Halo Workshop Kreafis Furniture, saya tertarik membuat meja atau rak custom. Bisa konsultasi desain dan harga?'
    ],
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Workshop Kreafis Furniture melayani pembuatan furniture custom untuk rumah dan ruang usaha. Konsultasikan kebutuhan furniture Anda melalui WhatsApp.">
    <title>Workshop Kreafis Furniture | Furniture Custom</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header class="site-header">
    <div class="container nav-wrap">
        <a class="brand" href="#beranda" aria-label="Workshop Kreafis Furniture - Beranda">
            <span class="brand-mark">K</span>
            <span class="brand-name">KREAFIS <small>FURNITURE WORKSHOP</small></span>
        </a>
        <button class="menu-toggle" aria-label="Buka menu" aria-expanded="false">☰</button>
        <nav class="nav-links" id="navLinks">
            <a href="#beranda">Beranda</a>
            <a href="#layanan">Layanan</a>
            <a href="#tentang">Tentang Kami</a>
            <a href="#galeri">Inspirasi</a>
            <a class="nav-cta" href="<?= htmlspecialchars(whatsappLink($whatsappNumber, $generalMessage)) ?>" target="_blank" rel="noopener">Hubungi Kami <span>↗</span></a>
        </nav>
    </div>
</header>

<main>
    <section class="hero" id="beranda">
        <div class="hero-shade"></div>
        <div class="container hero-content">
            <p class="eyebrow"><span></span> CUSTOM FURNITURE · TANGERANG SELATAN</p>
            <h1>Ruang nyaman,<br><em>dimulai dari</em><br>furniture yang tepat.</h1>
            <p class="hero-copy">Furniture yang dirancang mengikuti kebutuhan, ukuran, dan karakter ruangan Anda. Ceritakan ide Anda, kami bantu wujudkan.</p>
            <div class="hero-actions">
                <a class="button button-primary" href="<?= htmlspecialchars(whatsappLink($whatsappNumber, $generalMessage)) ?>" target="_blank" rel="noopener">Konsultasi via WhatsApp <span>↗</span></a>
                <a class="text-link" href="#layanan">Jelajahi layanan <span>↓</span></a>
            </div>
            <div class="hero-note"><span class="note-line"></span><span>Desain sesuai kebutuhan. Dibuat dengan perhatian pada detail.</span></div>
        </div>
        <div class="hero-index"><span>01</span> / FURNITURE MADE FOR YOU</div>
    </section>

    <section class="intro section-pad">
        <div class="container intro-grid">
            <p class="section-label">01 / KREAFIS STORY</p>
            <div>
                <h2>Bukan sekadar mengisi ruangan. <span>Kami membantu membuatnya terasa seperti rumah.</span></h2>
                <p class="intro-copy">Setiap ruangan punya kebutuhan yang berbeda. Karena itu, furniture custom bisa menjadi pilihan untuk memanfaatkan ruang dengan lebih maksimal sekaligus menjaga tampilan tetap selaras.</p>
            </div>
        </div>
    </section>

    <section class="services section-pad" id="layanan">
        <div class="container">
            <div class="section-heading">
                <div>
                    <p class="section-label">02 / YANG KAMI KERJAKAN</p>
                    <h2>Furniture untuk<br><span>kebutuhan Anda.</span></h2>
                </div>
                <p class="heading-side">Mulai dari satu furniture hingga kebutuhan ruangan. Konsultasikan ide dan ukuran yang Anda inginkan.</p>
            </div>
            <div class="service-grid">
                <?php foreach ($services as $index => $service): ?>
                <article class="service-card">
                    <a class="service-image" href="<?= htmlspecialchars(whatsappLink($whatsappNumber, $service['message'])) ?>" target="_blank" rel="noopener" aria-label="Konsultasi <?= htmlspecialchars($service['name']) ?>">
                        <img src="<?= htmlspecialchars($service['image']) ?>" alt="<?= htmlspecialchars($service['name']) ?>" loading="lazy">
                        <span class="image-arrow">↗</span>
                    </a>
                    <div class="service-meta"><span>0<?= $index + 1 ?></span><span>CUSTOM FURNITURE</span></div>
                    <h3><?= htmlspecialchars($service['name']) ?></h3>
                    <p><?= htmlspecialchars($service['description']) ?></p>
                    <a class="service-link" href="<?= htmlspecialchars(whatsappLink($whatsappNumber, $service['message'])) ?>" target="_blank" rel="noopener">Tanya layanan <span>↗</span></a>
                </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="feature-band" id="tentang">
        <div class="feature-image" role="img" aria-label="Interior dengan furniture kayu bernuansa hangat"></div>
        <div class="feature-content">
            <p class="section-label">03 / KENAPA CUSTOM?</p>
            <h2>Ide Anda.<br><em>Ruang Anda.</em><br>Gaya Anda.</h2>
            <p>Furniture yang tepat bukan cuma terlihat bagus, tetapi juga sesuai dengan cara Anda menggunakan ruangan setiap hari.</p>
            <ul class="feature-list">
                <li><span>01</span> Ukuran menyesuaikan ruangan</li>
                <li><span>02</span> Desain mengikuti kebutuhan</li>
                <li><span>03</span> Bisa konsultasi sebelum pengerjaan</li>
            </ul>
            <a class="button button-light" href="<?= htmlspecialchars(whatsappLink($whatsappNumber, $generalMessage)) ?>" target="_blank" rel="noopener">Mulai konsultasi <span>↗</span></a>
        </div>
    </section>

    <section class="gallery section-pad" id="galeri">
        <div class="container">
            <div class="section-heading gallery-heading">
                <div>
                    <p class="section-label">04 / FIND YOUR INSPIRATION</p>
                    <h2>Inspirasi untuk<br><span>ruang yang lebih hidup.</span></h2>
                </div>
                <p class="heading-side">Punya referensi sendiri? Kirim foto atau gambaran desain yang Anda suka melalui WhatsApp.</p>
            </div>
            <div class="gallery-grid">
                <div class="gallery-item gallery-tall">
                    <img src="https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?auto=format&fit=crop&w=1100&q=85" alt="Inspirasi ruang keluarga modern" loading="lazy">
                    <span>Living space</span>
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?auto=format&fit=crop&w=900&q=85" alt="Inspirasi interior minimalis" loading="lazy">
                    <span>Modern minimal</span>
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1616486029423-aaa4789e8c9a?auto=format&fit=crop&w=900&q=85" alt="Inspirasi furniture dan dekorasi" loading="lazy">
                    <span>Warm details</span>
                </div>
            </div>
            <p class="gallery-disclaimer">Foto di halaman ini merupakan gambar referensi inspirasi, bukan dokumentasi hasil pengerjaan Workshop Kreafis Furniture.</p>
        </div>
    </section>

    <section class="contact-section">
        <div class="container contact-inner">
            <p class="section-label">05 / LET'S TALK</p>
            <h2>Punya ide furniture<br>yang ingin diwujudkan?</h2>
            <p>Ceritakan kebutuhan Anda. Kita mulai dari obrolan sederhana.</p>
            <a class="button button-primary button-large" href="<?= htmlspecialchars(whatsappLink($whatsappNumber, $generalMessage)) ?>" target="_blank" rel="noopener">Hubungi Workshop Kreafis <span>↗</span></a>
            <span class="contact-caption">Klik tombol untuk melanjutkan percakapan di WhatsApp.</span>
        </div>
    </section>
</main>

<footer class="site-footer">
    <div class="container footer-top">
        <a class="brand brand-footer" href="#beranda">
            <span class="brand-mark">K</span>
            <span class="brand-name">KREAFIS <small>FURNITURE WORKSHOP</small></span>
        </a>
        <p>Furniture custom untuk ruang yang punya cerita.</p>
        <a class="back-top" href="#beranda">Kembali ke atas ↑</a>
    </div>
    <div class="container footer-bottom">
        <span>© <?= date('Y') ?> Workshop Kreafis Furniture</span>
        <span>Made with care.</span>
    </div>
</footer>

<a class="floating-wa" href="<?= htmlspecialchars(whatsappLink($whatsappNumber, $generalMessage)) ?>" target="_blank" rel="noopener" aria-label="Chat melalui WhatsApp">
    <span class="wa-symbol">◉</span><span>Chat WhatsApp</span>
</a>
<script src="script.js"></script>
</body>
</html>
