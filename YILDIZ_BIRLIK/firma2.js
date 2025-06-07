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
    }, 4000); // Her 4 saniyede bir değişim

    showMachineSlides(machineSlideIndex);
});



let currentGeziIndex = 0;
showGeziSlides(currentGeziIndex);

// Önceki ve sonraki buton işlevi
function changeGeziSlide(n) {
    showGeziSlides(currentGeziIndex += n);
}

// Slaytı göstermek için işlev
function showGeziSlides(n) {
    let i;
    let slides = document.querySelectorAll('.gezi-slideshow .slide');
     // Eğer slide yoksa, fonksiyondan çık
     if (slides.length === 0) {
        console.warn("No slides found");
        return;
    }

    if (n >= slides.length) {
        currentGeziIndex = 0;
    }
    if (n < 0) {
        currentGeziIndex = slides.length - 1;
    }

    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = 'none';  // Tüm slaytları gizle
    }

    slides[currentGeziIndex].style.display = 'block';  // Sadece şu anki slaytı göster
}

// Otomatik slayt gösterisi için ekleme (isteğe bağlı)
let geziAutoSlideIndex = 0;
autoShowGeziSlides();

function autoShowGeziSlides() {
    let slides = document.querySelectorAll('.gezi-slideshow .slide');

    if (slides.length === 0) {
        console.warn("No slides found in the slideshow.");
        return;
    }


    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = 'none';  // Tüm slaytları gizle
    }

    geziAutoSlideIndex++;
    if (geziAutoSlideIndex > slides.length) {
        geziAutoSlideIndex = 1;
    }

    slides[geziAutoSlideIndex - 1].style.display = 'block';  // Şu anki slaytı göster
    setTimeout(autoShowGeziSlides, 6000);  // Her 6 saniyede bir otomatik geçiş yap
}





// Dropdown menüsü için toggle işlevi
function toggleDropdown() {
    if (window.innerWidth <= 768) {
        var dropdownContent = document.querySelector('.dropdown .dropdown-content');
        if (dropdownContent.style.display === 'flex') {
            dropdownContent.style.display = 'none';
        } else {
            dropdownContent.style.display = 'flex';
        }
    }
}

// Sayfa çevirisi için işlev
function translatePage(language) {
    var combo = document.querySelector('.goog-te-combo');
    if (combo) {
        combo.value = language;
        combo.dispatchEvent(new Event('change'));
    }
}

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
    { url: 'hakkimizda2.php', contentSelector: 'body' },
    { url: 'iletisim2.php', contentSelector: 'body' },
    { url: 'ürünler2.php', contentSelector: 'body' },
    { url: 'firma2.php', contentSelector: 'body' },
    { url: 'makineparkuru2.php', contentSelector: 'body' },
    { url: 'galeri2.php', contentSelector: 'body' },
    { url: 'makine1.php', contentSelector: 'body' },
    { url: 'makine2.php', contentSelector: 'body' },
    { url: 'makine3.php', contentSelector: 'body' },
    { url: 'makine4.php', contentSelector: 'body' },
    { url: 'makine5.php', contentSelector: 'body' },
    { url: 'makine6.php', contentSelector: 'body' },
    { url: 'makine7.php', contentSelector: 'body' },
    { url: 'makine8.php', contentSelector: 'body' },
    { url: 'makine9.php', contentSelector: 'body' },
    { url: 'makine10.php', contentSelector: 'body' }
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

// Galeri modalı için işlevler
let currentGalleryIndex = 0;
const galleryItems = document.querySelectorAll('.gallery-item img');

function openGalleryModal(index) {
    currentGalleryIndex = index;
    const modal = document.getElementById('myGalleryModal');
    const modalImg = document.getElementById('modal-gallery-img');
    modal.style.display = "block";
    modalImg.src = galleryItems[index].src;
}

function closegalleryModal() {
    const modal = document.getElementById('myGalleryModal');
    modal.style.display = "none";
}

function changeGallerySlide(step) {
    currentGalleryIndex += step;
    if (currentGalleryIndex >= galleryItems.length) {
        currentGalleryIndex = 0;
    } else if (currentGalleryIndex < 0) {
        currentGalleryIndex = galleryItems.length - 1;
    }
    const modalImg = document.getElementById('modal-gallery-img');
    modalImg.src = galleryItems[currentGalleryIndex].src;
}

// Modal kapatma işlemi için dışarıya tıklama kontrolü
window.onclick = function(event) {
    const modal = document.getElementById('myGalleryModal');
    if (event.target === modal) {
        closegalleryModal();
    }
}

