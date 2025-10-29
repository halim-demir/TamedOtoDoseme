<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tamed Oto Döşeme - İletişim</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --dark-custom: #1a1a1a; 
            --secondary-custom: #888; 
            --primary-color: #007bff; 
            --bg-light: #f4f4f4; 
        }

        .tamed-contact-page {
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
        
        .contact-info-card {
            background-color: #ffffff;
            border: none;
            border-radius: 0.75rem;
            padding: 2rem;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        }
        
        .contact-form-card {
            background-color: #ffffff;
            border: 1px solid #e0e0e0;
            border-radius: 0.75rem;
            padding: 2rem;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        }

        /* Vurgu Rengi */
        .text-primary-custom {
             color: var(--primary-color) !important;
        }

        /* Responsive Ayarlar */
        @media (max-width: 767.98px) {
            .tamed-title-main {
                font-size: 2.5rem;
            }
        }
    </style>
</head>
<body>
    
    <section class="tamed-contact-page py-5 py-lg-6">
        <div class="container">
            
            <div class="row justify-content-center mb-5">
                <div class="col-lg-10 text-center">
                    <h1 class="tamed-title-main">İletişim</h1>
                    <p class="lead tamed-text-lead">
                        Aracınızın döşemesi hakkında sorularınız mı var? Projeleriniz ve fiyat teklifleri için bize ulaşın.
                    </p>
                </div>
            </div>

            <div class="row g-5">
                
                <div class="col-lg-5">
                    <div class="contact-info-card h-100">
                        <h4 class="fw-bold mb-4 text-dark">Bize Ulaşın</h4>
                        <ul class="list-unstyled">
                            <li class="d-flex mb-3 align-items-center">
                                <i class="bi bi-geo-alt-fill fs-4 me-3 text-primary-custom"></i>
                                <div>
                                    <h6 class="mb-0 fw-semibold">Adres</h6>
                                    <p class="text-secondary mb-0">Örnek Mah. Kalite Cad. No: 15/A, İstanbul</p>
                                </div>
                            </li>
                            <li class="d-flex mb-3 align-items-center">
                                <i class="bi bi-telephone-fill fs-4 me-3 text-primary-custom"></i>
                                <div>
                                    <h6 class="mb-0 fw-semibold">Telefon</h6>
                                    <p class="text-secondary mb-0">+90 555 123 45 67</p>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <i class="bi bi-envelope-fill fs-4 me-3 text-primary-custom"></i>
                                <div>
                                    <h6 class="mb-0 fw-semibold">E-posta</h6>
                                    <p class="text-secondary mb-0">info@tamedotodoseme.com</p>
                                </div>
                            </li>
                        </ul>
                        
                        <div class="mt-4 pt-3 border-top">
                            <h6 class="fw-semibold mb-3">Bizi Takip Edin</h6>
                            <a href="#" class="text-dark me-3 fs-5"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="text-dark me-3 fs-5"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="text-dark fs-5"><i class="bi bi-twitter"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="contact-form-card h-100">
                        <h4 class="fw-bold mb-4 text-dark">Fiyat Teklifi Alın</h4>
                        
                        <form action="#" method="POST">
                            <div class="mb-3">
                                <label for="name" class="form-label">Adınız Soyadınız</label>
                                <input type="text" class="form-control" id="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">E-posta Adresiniz</label>
                                <input type="email" class="form-control" id="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="subject" class="form-label">Konu (Örn: Koltuk Yenileme, Tavan Kaplama)</label>
                                <input type="text" class="form-control" id="subject" required>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Detaylı Mesajınız</label>
                                <textarea class="form-control" id="message" rows="4" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Teklif Al / Gönder</button>
                        </form>
                    </div>
                </div>

            </div>
            
            <div class="row mt-5">
                <div class="col-12">
                    <h4 class="fw-bold mb-3 text-dark">Konumumuz</h4>
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1531.0253456784848!2d28.974005!3d41.008238!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDHCsDAwJzI5LjYiTiAyOMKwNTgnMjYuMiJF!5e0!3m2!1str!2str!4v1633512345678" 
                        width="100%" 
                        height="450" 
                        style="border:0; border-radius:0.75rem;" 
                        allowfullscreen="" 
                        loading="lazy">
                    </iframe>
                </div>
            </div>
            
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>