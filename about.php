<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tamed Oto Döşeme - Hakkımızda</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        /* Ana Sayfa Stili ile Uyumlu Koyu Renk Paleti ve Fontlar */
:root {
    --dark-custom: #1a1a1a; /* Daha koyu başlık ve metinler */
    --secondary-custom: #888; /* Açıklama metni için yumuşak gri */
    --primary-color: #202123; /* Vurgu Rengi (Mavi - Değiştirilebilir) */
    --bg-light: #f4f4f4; /* Sayfa Arka Planı (Hafif gri) */
    --card-bg: #ffffff; /* Kartların arka planı */
}

/* Sayfa Genel Yapısı */
.tamed-about-page {
    background-color: var(--bg-light);
    font-family: 'Poppins', sans-serif; 
}

/* Başlık Stilleri */
.tamed-title-main {
    font-size: 3.5rem; 
    font-weight: 700;
    margin-bottom: 1rem;
    font-family: 'Montserrat', sans-serif; 
}

.tamed-subtitle-h2 {
    font-size: 2rem;
    font-weight: 600;
}

.tamed-subtitle-h3 {
    font-size: 1.25rem;
    font-weight: 600;
}

/* Metin Stilleri */
.tamed-text-lead {
    font-size: 1.25rem;
    font-weight: 300;
    color: var(--secondary-custom);
    max-width: 800px;
    margin-left: auto;
    margin-right: auto;
}

.tamed-text-p, .tamed-text-card {
    font-size: 1rem;
    line-height: 1.7;
    color: var(--secondary-custom);
}

/* Renk Sınıfları */
.text-dark-custom {
    /* Başlıklar koyu olmalı */
    color: var(--dark-custom) !important; 
}
.text-primary-custom {
    /* İkonlar ve vurgu rengi */
    color: var(--primary-color) !important;
}

/* Görsel ve Kart Stilleri */
.img-fluid {
    /* Görselin metinle aynı hizada olması için */
    min-height: 400px;
    object-fit: cover;
    width: 100%;
}

.rounded-lg {
    /* Köşeler hafifçe yuvarlatılmış */
    border-radius: 0.75rem !important;
}

.info-card {
    background-color: var(--card-bg);
    /* Kartların sınırları daha yumuşak */
    border: 1px solid #e0e0e0; 
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.info-card:hover {
    /* Hover efekti korundu */
    transform: translateY(-5px);
    box-shadow: 0 12px 25px rgba(0, 0, 0, 0.1) !important;
}

/* Responsive Ayarlar */
@media (max-width: 991.98px) {
    .img-fluid {
        min-height: 300px;
    }
}
/* ... diğer responsive ayarlar aynı kaldı ... */
@media (max-width: 767.98px) {
    .tamed-title-main {
        font-size: 2.5rem;
    }
    .tamed-subtitle-h2 {
        font-size: 1.5rem;
    }
    .tamed-text-lead {
        font-size: 1rem;
    }
    .img-fluid {
        min-height: auto;
    }
}
    </style>
</head>
<body>
    <section class="tamed-about-page py-5 py-lg-6">
        <div class="container">
            
            <div class="row justify-content-center mb-5">
                <div class="col-lg-10 text-center">
                    <h1 class="tamed-title-main text-dark-custom">Hakkımızda</h1>
                    <p class="lead tamed-text-lead">
                        Tamed Oto Döşeme olarak, 1995 yılından bu yana otomotiv sektörüne tutku, deneyim ve mükemmeliyetçilikle hizmet vermekteyiz.
                    </p>
                </div>
            </div>

            <div class="row align-items-center gx-lg-5 mb-5">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="imgs/49579456_340721319861037_4296387104813875200_n.jpg" alt="Kalite ve El İşçiliği" class="img-fluid rounded-lg shadow-lg">
                </div>
                <div class="col-lg-6">
                    <h2 class="tamed-subtitle-h2 mb-3 text-dark-custom">25 Yılı Aşan Premium Deneyim</h2>
                    <p class="tamed-text-p mb-4">
                        Kurulduğumuz 1995'ten bu yana, temel ilkemiz müşteri memnuniyeti ve sürdürülebilir kaliteden ödün vermemektir. Kara, deniz ve hava araçlarının iç mekan tasarımlarında; dayanıklı, estetik ve **uzun ömürlü çözümler** sunuyoruz.
                    </p>
                    <p class="tamed-text-p">
                        Tecrübeli ustalarımız ve sadece en iyi tedarikçilerden sağladığımız premium malzeme seçimimizle, aracınızın iç mekanını sıfırdan tasarlıyor veya ilk günkü ihtişamına geri döndürüyoruz. Bizim için her proje, müşterimizin beklentilerini yansıtan özel bir çalışmadır.
                    </p>
                </div>
            </div>

            <div class="row text-center pt-5 border-top border-secondary-subtle">
                <div class="col-md-4 mb-4">
                    <div class="info-card p-4 rounded-lg h-100 shadow-sm">
                        <i class="bi bi-eye-fill display-5 mb-3 text-primary-custom"></i>
                        <h4 class="tamed-subtitle-h3 mb-2 text-dark-custom">Vizyonumuz</h4>
                        <p class="tamed-text-card mb-0">Oto döşemede sadece hizmet sağlamak değil, üstün el işçiliği ve yenilikçilikte sektör standartlarını belirleyen lider marka olmaktır.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="info-card p-4 rounded-lg h-100 shadow-sm">
                        <i class="bi bi-flag-fill display-5 mb-3 text-primary-custom"></i>
                        <h4 class="tamed-subtitle-h3 mb-2 text-dark-custom">Misyonumuz</h4>
                        <p class="tamed-text-card mb-0">Müşterilerimizin beklentilerini aşan, kişiye özel ve uzun ömürlü döşeme çözümleri sunmak için en iyi malzemeyi ve işçiliği kullanmak.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="info-card p-4 rounded-lg h-100 shadow-sm">
                        <i class="bi bi-star-fill display-5 mb-3 text-primary-custom"></i>
                        <h4 class="tamed-subtitle-h3 mb-2 text-dark-custom">Değerlerimiz</h4>
                        <p class="tamed-text-card mb-0">Dürüstlük, müşteri odaklılık, detaylara önem veren titizlik ve el işçiliğinde mükemmeliyetçi yaklaşım.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>