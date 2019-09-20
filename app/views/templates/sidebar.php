<section id="sideMenu">
    <div class="logo-app">
        <img src="<?= BASEURL;?>/img/logo-ta.png" alt="" width="150" heigth="150">
    </div>
    <nav>
        <a href="#" class="active">Dashboard</a>
        <a href="#">Kontrak</a>
        <a href="#">Purchase Order</a>
        <a href="#">Progeres Pekerjaan</a>
        <a href="#">Progres Tagihan</a>
        <a href="#">Laporan</a>
        <button class="dropdown-btn">Teritori
            <i><img src="<?= BASEURL;?>/img/caret.png" alt="" width="20" heigth="20"></i>
        </button>
        <div class="dropdown-container">
            <a href="<?= BASEURL;?>/regional/index">Regional</a>
            <a href="<?= BASEURL;?>/witel/index">Witel</a>
            <a href="<?= BASEURL;?>/datel/index">Datel</a>
            <a href="<?= BASEURL;?>/sto/index">STO</a>
        </div>
        <button class="dropdown-btn">Setting
            <i><img src="<?= BASEURL;?>/img/caret.png" alt="" width="20" heigth="20"></i>
        </button>
        <div class="dropdown-container">
            <a href="<?= BASEURL;?>/regional/index">Data Users</a>
            <a href="#">Data Mitra</a>
        </div>

    </nav>
</section>
<header id="main">
    <div class="search-area">
        <div>
            <button class="closebtn" onclick="closeNav()">X</button>  
            <button class="openbtn" onclick="openNav()">☰</button>  
        </div>
    </div>
    <div class="user-area">
        <a href="#">Logout</a>
    </div>
</header>
<section id="content-area">