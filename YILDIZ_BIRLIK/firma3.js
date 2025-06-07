// Logoya tıklama işlevi
function redirectToIndex() {
    window.location.href = 'index.php';
}

document.addEventListener('DOMContentLoaded', (event) => {
    // Sayfa yüklendiğinde dropdown menüyü gizli tutar
    const dropdowns = document.querySelectorAll('.dropdown-content');
    dropdowns.forEach(dropdown => {
        dropdown.style.display = 'none';
    });

    // Dropdown hover eventi için
    const dropdownToggles = document.querySelectorAll('.navbar .dropdown');
    dropdownToggles.forEach(toggle => {
        toggle.addEventListener('mouseover', () => {
            toggle.querySelector('.dropdown-content').style.display = 'flex';
        });
        toggle.addEventListener('mouseout', () => {
            toggle.querySelector('.dropdown-content').style.display = 'none';
        });
    });
    let localSlideIndex = 0;

    function showSlides(n) {
        let slides = document.getElementsByClassName("slide");
        if (slides.length === 0) return; // Eğer slayt yoksa çıkış yap
    
        localSlideIndex = (n + slides.length) % slides.length; // Slayt sayısı kadar döngü oluşturur
    
        for (let i = 0; i < slides.length; i++) {
            slides[i].style.display = "none"; // Tüm slaytları gizler
        }
    
        slides[localSlideIndex].style.display = "block"; // Sadece ilgili slaytı gösterir
    }
    
    // Sayfa kaydırıldığında animasyonu başlatmak için scroll event listener ekleyelim
    function checkScroll() {
        var whatWeDoSection = document.querySelector('.what-we-do');
        var textContainer = document.querySelector('.text-container');

        if (whatWeDoSection && textContainer) {
            var sectionOffset = whatWeDoSection.offsetTop;
            var pageOffset = window.scrollY + window.innerHeight;

            if (pageOffset >= sectionOffset) {
                whatWeDoSection.classList.add('scrolled');
                textContainer.classList.add('scrolled');
                showSlides(localSlideIndex);
                autoSlideInterval = setInterval(() => showSlides(localSlideIndex + 1), 5000);
                window.removeEventListener('scroll', checkScroll);
            }
        }
    }

    window.addEventListener('scroll', checkScroll);
    checkScroll();

    // Header scroll durumunu kontrol eder
    window.addEventListener('scroll', function() {
        var header = document.querySelector('header');
        var scrollTrigger = 100;

        if (window.scrollY > scrollTrigger) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });

});


// Makine slayt gösterisi işlevselliği
document.addEventListener('DOMContentLoaded', function () {
    const animatedElements = document.querySelectorAll('.scroll-animated');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('fade-in');
            } else {
                entry.target.classList.remove('fade-in');
            }
        });
    }, {
        threshold: 0.1
    });

    animatedElements.forEach(element => {
        observer.observe(element);
    });

    let machineSlideIndex = 0;

    function showMachineSlides(n) {
        let slides = document.getElementsByClassName("machine-slide");
        if (slides.length === 0) return;

        machineSlideIndex = (n + slides.length) % slides.length;

        [].forEach.call(slides, function (slide) {
            slide.style.display = 'none';
        });

        if (slides[machineSlideIndex]) {
            slides[machineSlideIndex].style.display = 'flex';
        }
    }

    function plusMachineSlides(n) {
        showMachineSlides(machineSlideIndex + n);
    }

    var machinePrevButton = document.querySelector('.machine-prev');
    var machineNextButton = document.querySelector('.machine-next');

    if (machinePrevButton && machineNextButton) {
        machinePrevButton.addEventListener('click', () => plusMachineSlides(-1));
        machineNextButton.addEventListener('click', () => plusMachineSlides(1));
    }

    setInterval(function () {
        plusMachineSlides(1);
    }, 8000); // Her 4 saniyede bir değişim

    showMachineSlides(machineSlideIndex);
});


// Arama modalı açma/kapatma işlevleri
function openSearch() {
    document.getElementById("searchModal").style.display = "block";
}

function closeSearch() {
    document.getElementById("searchModal").style.display = "none";
}
// Arama işlevi
const pages = [
    { url: 'index.php', contentSelector: 'body' },
    { url: 'iletisim3.php', contentSelector: 'body' },
    { url: 'ürünler3.php', contentSelector: 'body' },
    { url: 'firma3.php', contentSelector: 'body' },
    { url: 'galeri3.php', contentSelector: 'body' },
   
];

function performSearch() {
    const query = document.getElementById("searchInput").value.toLowerCase().trim();

    if (query === '') {
        alert('Lütfen arama yapmak için bir şeyler yazın.');
        return;
    }

    const keywords = query.split(/\s+/); // Kelimeleri boşluklara göre ayır

    pages.forEach(page => {
        fetch(page.url)
            .then(response => response.text())
            .then(data => {
                const parser = new DOMParser();
                const doc = parser.parseFromString(data, 'text/html');
                const content = doc.querySelector(page.contentSelector).textContent.toLowerCase();

                // Tam kelime eşleşmesi kontrolü
                if (keywords.some(keyword => new RegExp(`\\b${keyword}\\b`).test(content))) {
                    window.location.href = `${page.url}?search=${encodeURIComponent(query)}`;
                }
            })
            .catch(error => console.error('Error fetching page:', error));
    });
}

window.onload = function() {
    const params = new URLSearchParams(window.location.search);
    const searchQuery = params.get('search');

    if (searchQuery) {
        const keywords = searchQuery.toLowerCase().split(/\s+/); // Kelimeleri boşluklara göre ayır
        const elements = document.querySelectorAll("h1, h2, h3, h4, h5, h6, p, li, span, a, div");

        elements.forEach(element => {
            keywords.forEach(keyword => {
                const regex = new RegExp(`\\b(${keyword})\\b`, 'gi'); // Tam kelime eşleşmesi kontrolü
                if (element.textContent.toLowerCase().match(regex)) {
                    element.innerHTML = element.innerHTML.replace(regex, "<span class='highlight'>$1</span>");
                }
            });
        });

        // İlk eşleşen kelimeye kaydırma yap
        const firstMatch = document.querySelector('.highlight');
        if (firstMatch) {
            firstMatch.scrollIntoView({ behavior: 'smooth', block: 'center' });
        }

        // URL'deki search parametresini temizleyin
        const newUrl = window.location.origin + window.location.pathname;
        window.history.replaceState({}, document.title, newUrl);
    }
};
function openModal(src) {
    const modal = document.getElementById("myModal");
    const modalImg = document.getElementById("modal-img");
    modal.style.display = "flex";
    modalImg.src = src;
}

function closeModal() {
    const modal = document.getElementById("myModal");
    modal.style.display = "none";
}


let slideIndex = 0;

document.addEventListener("DOMContentLoaded", function() {
  let slides = document.getElementsByClassName("slide");
  if (slides.length === 0) {
    return;
  }
  showFuarSlides(slideIndex);
  autoShowFuarSlides();
});

// Sonraki veya önceki slayta geçiş
function changeFuarSlide(n) {
  let slides = document.getElementsByClassName("slide");
  if (slides.length === 0) {
    return;
  }
  showFuarSlides(slideIndex += n);
}

function showFuarSlides(n) {
  let i;
  let slides = document.getElementsByClassName("slide");
  
  if (slides.length === 0) {
    return;
  }
  
  if (n >= slides.length) { slideIndex = 0 }    // Son slayttan sonra başa dön
  if (n < 0) { slideIndex = slides.length - 1 } // İlk slayttan önce sona dön

  for (i = 0; i < slides.length; i++) {
    if (slides[i]) {
      slides[i].style.display = "none";  // Tüm slaytları gizle
    }
  }

  if (slides[slideIndex]) {
    slides[slideIndex].style.display = "block"; // Mevcut slaytı göster
  }
}

// Slaytları otomatik değiştirme işlevi
function autoShowFuarSlides() {
  let i;
  let slides = document.getElementsByClassName("slide");

  if (slides.length === 0) {
    return;
  }

  for (i = 0; i < slides.length; i++) {
    if (slides[i]) {
      slides[i].style.display = "none";
    }
  }
  slideIndex++;
  if (slideIndex > slides.length) { slideIndex = 1 }
  if (slides[slideIndex - 1]) {
    slides[slideIndex - 1].style.display = "block";
  }
  setTimeout(autoShowFuarSlides, 10000); // 10 saniye bekleyerek slaytları değiştir
}

// Slayt elemanlarının sayfada tam olarak yüklendiğinden emin olmak için kontrol
document.addEventListener("readystatechange", function() {
  if (document.readyState === "complete") {
    let slides = document.getElementsByClassName("slide");
    if (slides.length === 0) {
      return;
    }
  }
});

// Modalı açmak için
function openGalleryModal(index) {
    const modal = document.getElementById("myGalleryModal");
    const modalImg = document.getElementById("modal-gallery-img");
    const images = document.querySelectorAll(".gallery-image");
    
    // İlk görüntüyü ayarla
    modalImg.src = images[index].src;
    modal.dataset.currentIndex = index; // Mevcut görüntü indeksini kaydet
    modal.style.display = "block";
}

// Modalı kapatmak için
function closeGalleryModal() {
    const modal = document.getElementById("myGalleryModal");
    modal.style.display = "none";
}

// Modalda önceki/sonraki görüntüye geçmek için
function changeGallerySlide(step) {
    const modal = document.getElementById("myGalleryModal");
    const modalImg = document.getElementById("modal-gallery-img");
    const images = document.querySelectorAll(".gallery-image");
    let currentIndex = parseInt(modal.dataset.currentIndex, 10);

    // Yeni indeksi hesapla
    currentIndex += step;
    if (currentIndex < 0) {
        currentIndex = images.length - 1; // Son görüntüye git
    } else if (currentIndex >= images.length) {
        currentIndex = 0; // İlk görüntüye dön
    }

    // Yeni görüntüyü göster
    modalImg.src = images[currentIndex].src;
    modal.dataset.currentIndex = currentIndex; // Mevcut indeksi güncelle
}

// Modalın dışında tıklanınca kapat
window.onclick = function(event) {
    const modal = document.getElementById("myGalleryModal");
    if (event.target == modal) {
        closeGalleryModal();
    }
}
