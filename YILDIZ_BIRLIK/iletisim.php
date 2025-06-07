
<!doctype html>
<html lang="en">
<head>
    <title>Yıldız Birlik Makina A.Ş. | İletişim - Otomotiv Yan Sanayi, Makine ve Tarım Sanayi Çözümleri </title>
    <meta name="description" content="Yıldız Birlik Makina, Türkiye'de otomotiv, makine ve tarım sanayisine yönelik yüksek kaliteli CNC otomat makineleri ve parça üretimi hizmetleri sunmaktadır. Bursa merkezli üretim ve güvenilir tedarikçi.">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="author" content="Fatma Akyıldız" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <meta name="keywords" content="yıldız birlik, yıldız birlik makina, otomotiv yan sanayi, CNC otomat makineleri, otomotiv parça üretimi, otomotiv tedarik zinciri, CNC teknolojisi, otomat makineleri, otomotiv parçaları üretimi, otomat, makine, makina, CNC torna, torna, Bursa, NOSAB, Türkiye, ATC, agricultural machinery parts, farming machinery parts, tarım makine parçaları, tarım sanayi, tarım ekipmanları üretimi, CNC tarım makineleri, makine sanayi, makine sanayi parçaları, CNC automatic machines, automotive parts manufacturing, CNC technology, CNC lathe, lathe, Türkiye makine sanayi, yan sanayi, makine parça üretimi, Bursa tarım makineleri, tarım CNC makineleri, hassas işleme">
    <link rel="stylesheet" href="firma1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        .popup {
    position: fixed;
    left: 50%;
    top: 20%;
    transform: translate(-50%, -50%);
    padding: 20px;
    background-color: rgba(0, 0, 0, 0); /* Kırmızı renk hata için */
    color: white;
    border-radius: 5px;
    text-align: center;
    z-index: 1000;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    #successPopup {
        background-color: rgba(0, 0, 0, 0); /* Yeşil renk başarı için */
    }
    #overlay {
    display: none; /* Kaplama görünür değil */
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5); /* Kaplama arka planı karartır */
    z-index: 999;
    }
    </style>   
</head>

    <body class="iletisim-page">
        <?php include 'navbar.php' ; ?>
        
        
        <!-- Ana içerik buraya gelecek -->
        <main>
        <div class="contact-section">
            <div class="contact-container">
                <h1>İletişim Formu</h1>
                <p>Bizimle iletişime geçmek için aşağıdaki formu doldurun.</p>
                <form action="contact_form.php" method="POST">
                    <div class="form-row">
                       <input type="text" name="first_name" placeholder="İsim" required>
                       <input type="text" name="last_name" placeholder="Soyisim" required>
                    </div>
                    <div class="form-row">
                       <input type="email" name="email" placeholder="Email" required>
                       <input type="tel" name="phone" placeholder="Telefon" required>
                    </div>
                    <div class="form-row">
                       <input type="text" name="subject" placeholder="Konu" required>
                       <input type="text" name="company_name" placeholder="Firma Adı">
                    </div>
                    <div class="form-row">
                       <textarea name="message" placeholder="Mesaj"></textarea>
                    </div>
                    <div class="form-row">
                       <button type="submit">Gönder</button>
                    </div>
                </form>
            </div>

            <div class="contact-info">
                <h2>İletişim Bilgileri</h2>
                <br>
                <div class="info-item">
                    <span class="icon"><i class="fas fa-map-marker-alt"></i></span>
                    <p1>Nilüfer organize sanayi bölgesi 113. sokak no 19 Nilüfer/Bursa/Türkiye</p1>
                </div>
                <br>
                <div class="info-item">
                    <span class="icon"><i class="fas fa-phone"></i></span>
                    <p1>+90 (224) 443 11 57</p1>
                </div>
                <br>
                <div class="info-item">
                    <span class="icon"><i class="fas fa-envelope"></i></span>
                    <p1>info@yildizbirlik.com.tr</p1>
                </div>
                <br>
                <div class="social-icons">
                    <a href="https://www.facebook.com/profile.php?id=61564670915357"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/yildizbirlikmakina/"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.youtube.com/@YıldızBirlikMakina"><i class="fab fa-youtube"></i></a>
                    <a href="https://x.com/YildizBirlikAs"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>

        <div class="map-container">
            <h2>Harita</h2>
            <iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Nosab%20113.%20sokak%20no%2019%20+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" allowfullscreen><a href="https://www.gps.ie/">gps trackers</a></iframe>
        </div>
    </main>
    
        <?php include 'footer.php'; ?>



    <script src="firma1.js"></script>
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'tr',
                includedLanguages: 'en,de,zh-CN,tr'
            }, 'google_translate_element');
        }
    </script>
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "Yıldız Birlik Makina A.Ş.",
  "url": "https://www.yildizbirlik.com.tr",
  "logo": "https://www.yildizbirlik.com.tr/img/logo.png",
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "+90 224 443 11 57",
    "contactType": "Customer Service",
    "areaServed": "TR",
    "availableLanguage": "Turkish"
  },
  "sameAs": [
    "https://www.facebook.com/profile.php?id=61564670915357",
    "https://www.instagram.com/yildizbirlikmakina/",
    "https://www.youtube.com/@YıldızBirlikMakina",
    "https://x.com/YildizBirlikAs"
  ]
}
</script>

    <script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <!-- jQuery ve JavaScript kodları -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function(){
        $("#contactForm").on("submit", function(event) {
            event.preventDefault(); // Formun normal gönderilmesini engelle

            $.ajax({
                url: "contact_form.php",
                type: "POST",
                data: $(this).serialize(),
                dataType: 'json',
                success: function(response) {
                    if(response.status === 'success') {
                        showPopup('Mesajınız başarıyla gönderildi.', true);
                    } else {
                        showPopup('Mesajınız gönderilemedi, lütfen tekrar deneyin: ' + response.message, false);
                    }
                },
                error: function(xhr, status, error) {
                    showPopup('Mesajınız gönderilemedi, lütfen tekrar deneyin.', false);
                }
            });
        });
    });

    function showPopup(message, isSuccess) {
        const popup = isSuccess ? document.getElementById('successPopup') : document.getElementById('errorPopup');
        popup.textContent = message;
        popup.style.display = 'block';
        
        setTimeout(function() {
            popup.style.display = 'none';
        }, 3000); // 3 saniye sonra kapanır
    }
    $(document).ready(function(){
    console.log("JavaScript çalışıyor!");
    $("#contactForm").on("submit", function(event) {
        event.preventDefault(); // Formun normal gönderilmesini engelle
        console.log("Form gönderim engellendi!");
    });
});

</script>
    </body>
</html>
