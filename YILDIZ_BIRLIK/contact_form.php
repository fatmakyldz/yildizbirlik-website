<?php
// PHPMailer sınıflarını dahil edin
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
$response = ['success' => false, 'message' => 'An error occurred'];

// Composer autoload dosyasını dahil edin
require 'vendor/autoload.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Form verilerini al
    $first_name = htmlspecialchars($_POST['first_name']);
    $last_name = htmlspecialchars($_POST['last_name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $subject = htmlspecialchars($_POST['subject']);
    $company_name = htmlspecialchars($_POST['company_name']);
    $message = htmlspecialchars($_POST['message']);

    // PHPMailer ile e-posta gönder
    $mail = new PHPMailer(true);

    try {
        // Sunucu ayarları
        $mail->SMTPDebug = 0;                      // Hata ayıklama çıktısını kapat
        $mail->isSMTP();                           // SMTP kullanarak gönder
        $mail->Host       = 'mail.kurumsaleposta.com';      // SMTP sunucusu
        $mail->SMTPAuth   = true;                  // SMTP kimlik doğrulaması etkin
        $mail->Username   = 'fatmaakyildiz@yildizbirlik.com.tr'; // SMTP kullanıcı adı
        $mail->Password   = '=-Usa=0wn2MNX9=6'; // SMTP şifresi
        $mail->SMTPSecure = 'tls';                 // TLS şifrelemesi kullan
        $mail->Port       = 587;                   // SMTP portu

        // Sertifika doğrulamasını devre dışı bırakın
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );

         // Karakter seti ve kodlama ayarları
         $mail->CharSet = 'UTF-8';
         $mail->Encoding = 'base64';

        // Alıcılar
        $mail->setFrom('fatmaakyildiz@yildizbirlik.com.tr', "$first_name $last_name");
        $mail->addAddress('fatmaakyildiz@yildizbirlik.com.tr', 'Yıldız Birlik'); // Alıcı
        $mail->addAddress('info@yildizbirlik.com.tr', 'Yıldız Birlik');

        // İçerik
        $mail->isHTML(true);                     
        $mail->Subject = 'Yeni İletişim Formu Mesajı';
        $mail->Body    = "Adı Soyadı: $first_name $last_name\nEmail: $email\nTelefon: $phone\nKonu: $subject\nFirma Adı: $company_name\n\nMesaj: $message";

         // E-postayı gönder ve başarılı olursa aşağıdaki JavaScript'i döndür
         if($mail->send()) {
            echo "<script>
                alert('Mesajınız başarıyla gönderildi.');
                window.history.back(); // Kullanıcıyı önceki sayfaya geri döndür
            </script>";
        } else {
            echo "<script>
                alert('Mesajınız gönderilemedi, lütfen tekrar deneyin.');
                window.history.back(); // Kullanıcıyı önceki sayfaya geri döndür
            </script>";
        }
    } catch (Exception $e) {
        // Hata durumunda aşağıdaki JavaScript'i döndür
        echo "<script>
            alert('Mesajınız gönderilemedi, lütfen tekrar deneyin: {$mail->ErrorInfo}');
            window.history.back(); // Kullanıcıyı önceki sayfaya geri döndür
        </script>";
    }
} else {
    // Geçersiz istek durumunda aşağıdaki JavaScript'i döndür
    echo "<script>
        alert('Geçersiz istek.');
        window.history.back(); // Kullanıcıyı önceki sayfaya geri döndür
    </script>";
}
?>
