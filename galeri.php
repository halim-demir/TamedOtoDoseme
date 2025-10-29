<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tamed Oto Döşeme - Galeri</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --dark-custom: #1a1a1a; 
            --secondary-custom: #888; 
            --primary-color: #007bff; /* Vurgu Rengi */
            --bg-light: #f4f4f4; /* Sayfa Arka Planı */
        }

        .tamed-gallery-page {
            background-color: var(--bg-light);
            font-family: 'Poppins', sans-serif; 
        }

        /* Başlık Stilleri */
        .tamed-title-main {
            font-size: 3.5rem; 
            font-weight: 700;
            margin-bottom: 1rem;
            font-family: 'Montserrat', sans-serif; 
            color: var(--dark-custom) !important;
        }

        .tamed-text-lead {
            font-size: 1.25rem;
            font-weight: 300;
            color: var(--secondary-custom);
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }

        /* Galeri Resmi Stili */
        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 0.5rem;
            cursor: pointer;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }
        
        .gallery-item:hover {
            transform: scale(1.03);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }

        .gallery-item img {
            width: 100%;
            height: 300px; /* Tüm resimlerin aynı yükseklikte olması için */
            object-fit: cover;
            transition: filter 0.3s;
        }

        .gallery-item:hover img {
            filter: brightness(0.9);
        }
        
        .image-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(transparent, rgba(0, 0, 0, 0.7));
            color: white;
            padding: 1rem;
            text-align: left;
        }
        
        .image-overlay h5 {
            margin-bottom: 0;
            font-weight: 600;
        }

        /* Responsive Ayarlar */
        @media (max-width: 767.98px) {
            .tamed-title-main {
                font-size: 2.5rem;
            }
            .gallery-item img {
                height: 200px;
            }
        }
    </style>
</head>
<body>
    
    <section class="tamed-gallery-page py-5 py-lg-6">
        <div class="container">
            
            <div class="row justify-content-center mb-5">
                <div class="col-lg-10 text-center">
                    <h1 class="tamed-title-main">Galeri</h1>
                    <p class="lead tamed-text-lead">
                        En ince detayına kadar titizlikle tamamladığımız, premium deri ve kumaşlarla yeniden hayat verdiğimiz projelerimizi keşfedin.
                    </p>
                </div>
            </div>

            <div class="row g-4">
                
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item">
                        <img src="mainpic.jpg" alt="Deri Koltuk Döşeme" class="img-fluid"> 
                        <div class="image-overlay">
                            <h5>Deri Koltuk Uygulaması</h5>
                            <small>Sedan Serisi</small>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item">
                        <img src="direksiyon-gorseli.jpg" alt="Direksiyon Kaplama" class="img-fluid">
                        <div class="image-overlay">
                            <h5>Özel Dikim Direksiyon</h5>
                            <small>Spor Serisi</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item">
                        <img src="tavan-alcantara.jpg" alt="Alcantara Tavan" class="img-fluid">
                        <div class="image-overlay">
                            <h5>Alcantara Tavan</h5>
                            <small>Coupe Modeller</small>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item">
                        <img src="taban-halisi.jpg" alt="Taban Halısı" class="img-fluid">
                        <div class="image-overlay">
                            <h5>Lüks Taban Halısı</h5>
                            <small>SUV Serisi</small>
                        </div>
                    </div>
                </div>
                
                </div>
            
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>