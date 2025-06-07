

<!doctype html>
<html lang="en">
    <head>
        <title>Yıldız Birlik Otomat | İletişim -  Otomotiv Yan Sanayi, Makine Sanayide Lider ve İlk Yerli ATC Üreticisi</title>
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
    <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta name="title" content="Yıldız Birlik Otomat | Otomotiv Yan Sanayi, Makine Sanayi ve Yerli ATC Çözümleri" />
        <meta name="author" content="Fatma Akyıldız" />
        <meta name="description" content="Yıldız Birlik Otomat, otomotiv yan sanayi ve makine sanayi için yüksek kaliteli CNC makineleri ve yerli ATC üretimi ile öncü çözümler sunmaktadır. Güvenilir mühendislik hizmetleri ve zamanında teslimat." />
        <meta name="keywords" content="otomotiv yan sanayi, makine sanayi, CNC otomat makineleri, ATC üretimi, otomotiv parça üretimi, CNC makineleri, makine parça üretimi, yerli ATC, Bursa, NOSAB, Türkiye, sanayi çözümleri, mühendislik hizmetleri, üretim çözümleri" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
        <link rel="stylesheet" href="firma2.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </head>

    <body class="iletisim-page">
        <?php include 'navbar2.php' ; ?>
        
        
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
                    <p1>Nilüfer organize sanayi bölgesi 112. sokak no 5 Nilüfer/Bursa/Türkiye</p1>
                </div>
                <br>
                <div class="info-item">
                    <span class="icon"><i class="fas fa-phone"></i></span>
                    <p1> +90 (224) 411 18 71</p1>
                </div>
                <br>
                <div class="info-item">
                    <span class="icon"><i class="fas fa-envelope"></i></span>
                    <p1>info@yildizbirlik.com.tr</p1>
                </div>
                <br>
                <div class="social-icons">
                    <a href="https://www.facebook.com/profile.php?id=61564872120513"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/yildizbirlikotomat/"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.youtube.com/@YıldızBirlikOtomat"><i class="fab fa-youtube"></i></a>
                    <a href="https://x.com/yildizbirlik"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>

        <div class="map-container">
            <h2>Harita</h2>
            <iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=300&amp;height=200&amp;hl=en&amp;q=KOR%C3%87EL%C4%B0K%20MAK%C4%B0NA%20OTOMOT%C4%B0V%20LTD.%C5%9ET%C4%B0.+()&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/" allowfullscreen>gps vehicle tracker</a></iframe>
        </div>
    </main>
    
        <?php include 'footer2.php'; ?>
        <script>
        $(document).ready(function(){
            $("#contactForm").on("submit", function(event) {
                event.preventDefault(); // Formun normal gönderilmesini engelle

                $.ajax({
                    url: "contact_form.php",
                    type: "POST",
                    data: $(this).serialize(),
                    success: function(response) {
                        let messageBox = $("#form-message");
                        if(response.status === 'success') {
                            messageBox.removeClass('alert-danger').addClass('alert-success');
                            messageBox.text('Mesajınız başarıyla gönderildi.').show();
                        } else {
                            messageBox.removeClass('alert-success').addClass('alert-danger');
                            messageBox.text('Mesajınız gönderilemedi, lütfen tekrar deneyin.').show();
                        }
                    },
                    error: function() {
                        let messageBox = $("#form-message");
                        messageBox.removeClass('alert-success').addClass('alert-danger');
                        messageBox.text('Mesajınız gönderilemedi, lütfen tekrar deneyin.').show();
                    }
                });
            });
        });
    </script>
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
  "name": "Yıldız Birlik Otomat",
  "url": "https://www.yildizbirlik.com.tr",
  "logo": "https://www.yildizbirlik.com.tr/img/birlik.png",
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "+90 224 411 18 71",
    "contactType": "Customer Service",
    "areaServed": "TR",
    "availableLanguage": "Turkish"
  },
  "sameAs": [
    "https://www.facebook.com/profile.php?id=61564872120513",
    "https://www.instagram.com/yildizbirlikotomat/",
    "https://www.youtube.com/@YıldızBirlikOtomat",
    "https://x.com/yildizbirlik"
  ]
}
</script>

    <script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script src="firma2.js"></script>
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
