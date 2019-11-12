<section id="sideMenu">
    <button class="closebtn" onclick="closeNav()"><</button>
    <div class="logo-app">
        <img src="<?= BASEURL;?>/img/logo-ta.png" alt="" width="150" heigth="150">
    </div>
    <nav>
        <?php 
        if ($_SESSION["role_user"] == 'admin') { ?>
        <a href="<?= BASEURL;?>/" class="active">Dashboard</a>
        <a href="<?= BASEURL;?>/kontrak/index">Kontrak</a>
        <a href="<?= BASEURL;?>/po/index">Purchase Order</a>
        <a href="<?= BASEURL;?>/project/index">Progeres Pekerjaan</a>
        <a href="<?= BASEURL;?>/tagihan/index">Progres Tagihan</a>
        <a href="<?= BASEURL;?>/laporan/index">Laporan</a>
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
            <a href="<?= BASEURL;?>/user/index">Data Users</a>
            <a href="<?= BASEURL;?>/mitra/index">Data Mitra</a>
            <a href="<?= BASEURL;?>/po/v_posisi.php">Status PO</a>
            <a href="<?= BASEURL;?>/project/v_status.php">Status Project</a>
        </div>
        <?php }
        // Role User Admin Mitra
        else if($_SESSION["role_user"] == 'Admin Project'){ ?>
         <a href="<?= BASEURL;?>/" class="active">Dashboard</a>
        <a href="<?= BASEURL;?>/kontrak/index">Kontrak</a>
        <a href="<?= BASEURL;?>/po/index">Purchase Order</a>
        <a href="<?= BASEURL;?>/project/index">Progeres Pekerjaan</a>
        <a href="<?= BASEURL;?>/tagihan/index">Progres Tagihan</a>
        <a href="<?= BASEURL;?>/laporan/index">Laporan</a>
        <button class="dropdown-btn">Setting
            <i><img src="<?= BASEURL;?>/img/caret.png" alt="" width="20" heigth="20"></i>
        </button>
        <div class="dropdown-container">
            <a href="<?= BASEURL;?>/user/ubahProfile/<?= $_SESSION['id_user'] ?>">Ubah Profile</a>
        </div>       
        <?php } ?>

    </nav>
</section>
<header id="main">
    <div class="search-area">
        <div>  
            <button class="openbtn" onclick="openNav()">☰</button>  
        </div>
    </div>
    <div class="user-area">
        <a href="<?= BASEURL;?>/login/logout">Logout</a>
    </div>
</header>
<section id="content-area">