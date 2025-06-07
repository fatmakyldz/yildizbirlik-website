<header>
        <div id="companyLogo">
            <img src="img/birlik.webp" alt="Yıldız Birlik Company Logo" onclick="redirectToIndex()">
        </div>
        

        <input type="checkbox" id="menu-bar" class="d-none">
        <label for="menu-bar" class="menu-icon">
            <span></span>
            <span></span>
            <span></span>
        </label>
        <nav class="navbar">
            <ul>
                <li><a href="firma2.php">Anasayfa</a></li>
                <li><a href="hakkimizda2.php">Hakkımızda</a></li>
                <li class="dropdown">
                    <a href="makineparkuru2.php" onclick="toggleDropdown()" id="machinery">Makine Parkuru</a>
                    <div class="dropdown-content">
                    <a href="makine1.php">
                        CNC Torna Tezgahları
                    </a>
                    <a href="makine2.php">
                        CNC Dik İşleme Merkezleri
                    </a>
                    <a href="makine3.php">
                        Köprülü İşleme Merkezleri
                    </a>
                    <a href="makine4.php">
                        Şerit Testere Makineleri
                    </a>
                    <a href="makine5.php">
                        Matkap Tezgahları
                    </a>
                    <a href="makine6.php">
                        Revolver Makineleri
                    </a>
                    <a href="makine7.php">
                        Kaynak Makineleri
                    </a>
                    <a href="makine8.php">
                        Freze Tezgahları
                    </a>
                    <a href="makine9.php">
                        Taşlama Tezgahları
                    </a>
                    <a href="makine10.php">
                        Diğer Makineler
                    </a>
                    </div>
                </li>
                <li><a href="galeri2.php">Medya</a></li>
                <li><a href="iletisim2.php">İletişim</a></li>
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
                <img src="img/birlik.webp" alt="Yıldız Birlik Company Logo" class="modal-logo">
                <span class="close" onclick="closeSearch()">&times;</span>
            </div>
               <input type="text" id="searchInput" placeholder="Ara..." autofocus>
               <button onclick="performSearch()">Ara</button>
        </div>
    </div>
    
    <?php
error_reporting(E_ALL);
ini_set('display_errors', 1);