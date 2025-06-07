<header>
        <div id="companyLogo">
            <img src="img/Ar-ge.webp" alt="Yıldız Birlik R&D Logo" onclick="redirectToIndex()">
        </div>
        

        <input type="checkbox" id="menu-bar" class="d-none">
        <label for="menu-bar" class="menu-icon">
            <span></span>
            <span></span>
            <span></span>
        </label>
        <nav class="navbar">
            <ul>
                <li><a href="firma3.php">Anasayfa</a></li>
                <li><a href="urunler3.php">Ürünler</a></li>
                <li><a href="referans.php">Referanslarımız</a></li>
                <li><a href="galeri3.php">Galeri</a></li>
                <li><a href="iletisim3.php">İletişim</a></li>
            </ul>
        </nav>
        <div class="search-language">
            <i class="fas fa-search search-icon" onclick="openSearch()"></i>
            <div class="language-select">
                <i class="flag-icon flag-icon-tr" data-lang="tr" onclick="translatePage('tr')"></i>
                <i class="flag-icon flag-icon-gb" data-lang="en" onclick="translatePage('en')"></i>
                <i class="flag-icon flag-icon-de" data-lang="de" onclick="translatePage('de')"></i>
                <i class="flag-icon flag-icon-cn" data-lang="zh-CN" onclick="translatePage('zh-CN')"></i>                
            </div>
        </div>
    </header>
    <div id="searchModal" class="modal">
       <div class="modal-content">
           <div class="modal-header">
                <img src="img/Ar-ge.webp" alt="Yıldız Birlik Company Logo" class="modal-logo">
                <span class="close" onclick="closeSearch()">&times;</span>
            </div>
               <input type="text" id="searchInput" placeholder="Ara..." autofocus>
               <button onclick="performSearch()">Ara</button>
        </div>
    </div>
    
    <?php
error_reporting(E_ALL);
ini_set('display_errors', 1);