<header>
        <div id="companyLogo">
            <img src="img/yildiz.webp" alt="Yıldız Birlik Company Logo" onclick="redirectToIndex()">
        </div>
        

        <input type="checkbox" id="menu-bar" class="d-none">
        <label for="menu-bar" class="menu-icon">
            <span></span>
            <span></span>
            <span></span>
        </label>
        <nav class="navbar">
            <ul>
                <li><a href="firma1.php">Anasayfa</a></li>
                <li><a href="hakkimizda.php">Hakkımızda</a></li>
                <li class="dropdown">
                    <a href="makineparkuru.php" onclick="toggleDropdown()" id="machinery">Makine Parkuru</a>
                    <div class="dropdown-content">
                    <a href="machine1.php">
                        Cnc kayar otomat
                    </a>
                    <a href="machine5.php">
                        Zımpara makinesi
                    </a>
                    <a href="machine6.php">
                        Şerit testere
                    </a>
                    <a href="machine2.php">
                        Cnc torna
                    </a>
                    <a href="machine3.php">
                        Cnc freze
                    </a>
                    <a href="machine4.php">
                        Dış çekme
                    </a>
                    <a href="machine7.php">
                        Revolver
                    </a>
                    <a href="machine8.php">
                        Ovalama
                    </a>
                    <a href="machine9.php">
                        Matkap
                    </a>
                    </div>
                </li>
                <li><a href="urunler.php">Ürünler</a></li>
                <li><a href="galeri.php">Medya</a></li>
                <li><a href="iletisim.php">İletişim</a></li>
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
                <img src="img/yildiz.webp" alt="Yıldız Birlik Company Logo" class="modal-logo">
                <span class="close" onclick="closeSearch()">&times;</span>
            </div>
               <input type="text" id="searchInput" placeholder="Ara..." autofocus>
               <button onclick="performSearch()">Ara</button>
        </div>
    </div>
    
    <?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

