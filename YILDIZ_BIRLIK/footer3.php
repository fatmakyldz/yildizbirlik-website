<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>
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
    <link rel="stylesheet" href="firma3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
</head>
<body>
    <footer class="footer">
        <div class="footer-section map">
            <h4>Konum</h4>
            <iframe width="300" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=300&amp;height=200&amp;hl=en&amp;q=KOR%C3%87EL%C4%B0K%20MAK%C4%B0NA%20OTOMOT%C4%B0V%20LTD.%C5%9ET%C4%B0.+()&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" allowfullscreen><a href="https://www.gps.ie/">gps vehicle tracker</a></iframe>
        </div>
        <div class="footer-section contact-info">
            <h4>İletişim</h4>
            <br>
            <div class="info-item">
                <span class="icon"><i class="fas fa-map-marker-alt"></i></span>
                <p>Nilüfer organize sanayi bölgesi 112. sokak no 5 Nilüfer/Bursa/Türkiye</p>
            </div>
            <br>
            <div class="info-item">
                <span class="icon"><i class="fas fa-phone"></i></span>
                <p> +90 (224) 411 18 71</p>
            </div>
            <br>
            <div class="info-item">
                <span class="icon"><i class="fas fa-envelope"></i></span>
                <p>arge@yildizbirlik.com.tr</p>
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
        <div class="footer-section contact-form">
            <h4>Bize Ulaşın</h4>
            <form id="footerContactForm " action="submit_form.php" method="POST">
                <div class="form-row double-input">
                    <input type="text" name="submit_first_name" placeholder="İsim" required>
                    <input type="text" name="submit_last_name" placeholder="Soyisim" required>
                </div>
                <div class="form-row">
                    <input type="email" name="submit_email" placeholder="Email" required>
                </div>
                <div class="form-row">
                    <input type="tel" name="submit_phone" placeholder="Telefon" required>
                </div>
                <div class="form-row">
                    <textarea name="submit_message" placeholder="Mesaj" required></textarea>
                </div>
                <div class="form-row">
                    <button type="submit">Gönder</button>
                </div>
                <div id="form-message" style="display: none;" class="alert"></div>
            </form>
        </div>

        <div id="google_translate_element" style="display:none;"></div>
        <div class="copyright">
            © 2024 Yıldız Birlik AR-GE Tüm hakları saklıdır.
        </div>
    </footer>

<!-- jQuery ve JavaScript kodları -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function(){
        $("#submitForm").on("submit", function(event) {
            event.preventDefault(); // Formun normal gönderilmesini engelle

            $.ajax({
                url: "submit_form.php",
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
    $("#submitForm").on("submit", function(event) {
        event.preventDefault(); // Formun normal gönderilmesini engelle
        console.log("Form gönderim engellendi!");
    });
});

</script>
</body>
</html>